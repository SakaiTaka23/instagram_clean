<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Packages\UseCase\Profile\Edit\ProfileEditRequest;
use Packages\UseCase\Profile\Edit\ProfileEditUseCaseInterface;
use Packages\UseCase\Profile\Index\ProfileIndexRequest;
use Packages\UseCase\Profile\Index\ProfileIndexUseCaseInterface;
use Packages\UseCase\Profile\Show\ProfileShowRequest;
use Packages\UseCase\Profile\Show\ProfileShowUseCaseInterface;
use Packages\UseCase\Profile\Update\ProfileUpdateRequest;
use Packages\UseCase\Profile\Update\ProfileUpdateUseCaseInterface;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->auth_id = Auth::id();
            return $next($request);
        });
    }

    public function edit(ProfileEditUseCaseInterface $interactor)
    {
        $request = new ProfileEditRequest($this->auth_id);
        $interactor->handle($request);
    }

    public function index(ProfileIndexUseCaseInterface $interactor)
    {
        $request = new ProfileIndexRequest($this->auth_id);
        $interactor->handle($request);
    }

    public function show($id, ProfileShowUseCaseInterface $interactor)
    {
        $request = new ProfileShowRequest($id);
        $interactor->handle($request);
    }

    public function update(Request $request, ProfileUpdateUseCaseInterface $interactor)
    {
        request()->validate([
            'profile_image' => ['nullable', 'image'],
            'username' => ['required', 'max:20'],
            'description' => ['nullable', 'max:200'],
            'url' => ['nullable', 'url', 'max:30'],
        ]);

        $request = new ProfileUpdateRequest($this->auth_id, request('profile_image') ?? null, $request['username'], $request['description'] ?? "", $request['url'] ?? "");
        $interactor->handle($request);
    }
}
