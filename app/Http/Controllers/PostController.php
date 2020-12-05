<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Packages\UseCase\Post\Create\PostCreateRequest;
use Packages\UseCase\Post\Create\PostCreateUseCaseInterface;
use Packages\UseCase\Post\Index\PostIndexRequest;
use Packages\UseCase\Post\Index\PostIndexUseCaseInterface;
use Packages\UseCase\Post\Show\PostShowRequest;
use Packages\UseCase\Post\Show\PostShowUseCaseInterface;
use Packages\UseCase\Post\Store\PostStoreUseCaseInterface;
use Packages\UseCase\Post\Store\PostStoreRequest;

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
        $response = $interactor->handle($request);
        return view('posts.create', compact('response'));
    }

    public function index(PostIndexUseCaseInterface $interactor)
    {
        $request = new PostIndexRequest($this->auth_id);
        $response = $interactor->handle($request);
        return view('posts.index', compact('response'));
    }

    public function show($id, PostShowUseCaseInterface $interactor)
    {
        $request = new PostShowRequest($id);
        $response = $interactor->handle($request);
        return view('posts.show', compact('response'));
    }

    public function store($id, Request $request, PostStoreUseCaseInterface $interactor)
    {
        $request = new PostStoreRequest($id, $request->caption, $request->photo);
        $response = $interactor->handle($request);
        return redirect('show', ['id' => $response]);
    }
}
