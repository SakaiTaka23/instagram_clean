<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Packages\UseCase\Profile\Index\ProfileIndexRequest;
use Packages\UseCase\Profile\Index\ProfileIndexUseCaseInterface;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->auth_id = Auth::id();
            return $next($request);
        });
    }

    public function edit($id)
    {
        dd($id);
    }

    public function index(ProfileIndexUseCaseInterface $interactor)
    {
        $request = new ProfileIndexRequest($this->auth_id);
        $interactor->handle($request);
    }

    public function show($id)
    {
        dd($id);
    }

    public function update(Request $request, $id)
    {
        dd($request, $id);
    }
}
