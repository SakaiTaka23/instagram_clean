<?php

namespace App\Http\Controllers;

use App\Http\Models\Post\Create\PostCreateViewModel;
use App\Http\Models\Post\Index\PostIndexViewModel;
use App\Http\Models\Post\Show\PostShowViewModel;
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
        $viewModel = new PostCreateViewModel($response);
        dd($viewModel->infos);
        return view('posts.create', compact('viewModel'));
    }

    public function index(PostIndexUseCaseInterface $interactor)
    {
        $request = new PostIndexRequest($this->auth_id);
        $response = $interactor->handle($request);
        $viewModel = new PostIndexViewModel($response);
        dd($viewModel);
        return view('posts.index', compact('viewModel'));
    }

    public function show($id, PostShowUseCaseInterface $interactor)
    {
        $request = new PostShowRequest($id);
        $response = $interactor->handle($request);
        $viewModel = new PostShowViewModel($request);
        dd($viewModel);
        return view('posts.show', compact('viewModel'));
    }

    public function store($id, Request $request, PostStoreUseCaseInterface $interactor)
    {
        $request = new PostStoreRequest($id, $request->caption, $request->photo);
        $response = $interactor->handle($request);
        return redirect('show', ['id' => $response]);
    }
}
