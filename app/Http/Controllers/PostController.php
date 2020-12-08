<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Packages\UseCase\Post\Create\PostCreateRequest;
use Packages\UseCase\Post\Create\PostCreateUseCaseInterface;
use Packages\UseCase\Post\Edit\PostEditRequest;
use Packages\UseCase\Post\Edit\PostEditUseCaseInterface;
use Packages\UseCase\Post\Index\PostIndexRequest;
use Packages\UseCase\Post\Index\PostIndexUseCaseInterface;
use Packages\UseCase\Post\Show\PostShowRequest;
use Packages\UseCase\Post\Show\PostShowUseCaseInterface;
use Packages\UseCase\Post\Store\PostStoreUseCaseInterface;
use Packages\UseCase\Post\Store\PostStoreRequest;
use Packages\UseCase\Post\Update\PostUpdateRequest;
use Packages\UseCase\Post\Update\PostUpdateUseCaseInterface;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->auth_id = Auth::id();
            return $next($request);
        });
    }

    public function create(PostCreateUseCaseInterface $interactor)
    {
        $request = new PostCreateRequest();
        $interactor->handle($request);
    }

    public function destroy($id)
    {
        dd($id);
    }

    public function edit($id, PostEditUseCaseInterface $interactor)
    {
        $request = new PostEditRequest($id);
        $interactor->handle($request);
    }

    public function index(PostIndexUseCaseInterface $interactor)
    {
        $request = new PostIndexRequest($this->auth_id);
        $interactor->handle($request);
    }

    public function show($id, PostShowUseCaseInterface $interactor)
    {
        $request = new PostShowRequest($id);
        $interactor->handle($request);
    }

    public function store(Request $request, PostStoreUseCaseInterface $interactor)
    {
        $request = new PostStoreRequest($this->auth_id, $request->caption, request('image'));
        $interactor->handle($request);
    }

    public function update($id, Request $request, PostUpdateUseCaseInterface $interactor)
    {
        $request = new PostUpdateRequest($request->caption,$id);
        $interactor->handle($request);
    }
}
