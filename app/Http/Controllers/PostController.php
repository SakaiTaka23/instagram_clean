<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use packages\Usecase\Post\Create\PostCreateResquest;
use packages\Usecase\Post\Create\PostCreateUseCaseInterface;
use Packages\Usecase\Post\Index\PostIndexRequest;
use Packages\Usecase\Post\Index\PostIndexUseCaseInterface;
use packages\Usecase\Post\Show\PostShowRequest;
use packages\Usecase\Post\Show\PostShowUseCaseInterface;
use packages\Usecase\Post\Store\PostStoreUseCaseInterface;
use packages\Usecase\Post\Store\PostStoreRequest;

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
        $request = new PostCreateResquest();
        $response = $interactor->handle($request);
        return view('posts.create', compact('response'));
    }

    public function index(PostIndexUseCaseInterface $interactor)
    {
        $request = new PostIndexRequest($this->auth_id);
        $response = $interactor->handle($request);
        return view('posts.index', compact('response'));
    }

    // public function index()
    // {
    //     return view('test');
    // }

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
