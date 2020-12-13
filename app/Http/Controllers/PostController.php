<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Packages\UseCase\Post\Create\PostCreateRequest;
use Packages\UseCase\Post\Create\PostCreateUseCaseInterface;
use Packages\UseCase\Post\Delete\PostDeleteRequest;
use Packages\UseCase\Post\Delete\PostDeleteUseCaseInterface;
use Packages\UseCase\Post\Edit\PostEditRequest;
use Packages\UseCase\Post\Edit\PostEditUseCaseInterface;
use Packages\UseCase\Post\Index\PostIndexRequest;
use Packages\UseCase\Post\Index\PostIndexUseCaseInterface;
use Packages\UseCase\Post\Search\PostSearchRequest;
use Packages\UseCase\Post\Search\PostSearchUseCaseInterface;
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

    public function destroy($id, PostDeleteUseCaseInterface $interactor)
    {
        $post = Post::select('user_id')->where('id', $id)->first();
        $this->authorize('delete', $post);

        $request = new PostDeleteRequest($id);
        $interactor->handle($request);
    }

    public function edit($id, PostEditUseCaseInterface $interactor)
    {
        $post = Post::select('user_id')->where('id', $id)->first();
        $this->authorize('update', $post);

        $request = new PostEditRequest($id);
        $interactor->handle($request);
    }

    public function index(PostIndexUseCaseInterface $interactor)
    {
        $request = new PostIndexRequest();
        $interactor->handle($request);
    }

    public function search(Request $request, PostSearchUseCaseInterface $interactor)
    {
        request()->validate([
            'search' => ['required', 'max:20'],
        ]);
        $request = new PostSearchRequest($request->search);
        $interactor->handle($request);
    }

    public function show($id, PostShowUseCaseInterface $interactor)
    {
        if (!is_numeric($id)) {
            abort(404);
        }
        // $post = Post::select('user_id')->where('id', $id)->first();
        // $this->authorize('view', $post);

        $request = new PostShowRequest($id);
        $interactor->handle($request);
    }

    public function store(Request $request, PostStoreUseCaseInterface $interactor)
    {
        request()->validate([
            'caption' => ['required', 'max:2000'],
            'image' => ['required', 'image'],
        ]);
        $request = new PostStoreRequest($this->auth_id, $request->caption, request('image'));
        $interactor->handle($request);
    }

    public function update($id, Request $request, PostUpdateUseCaseInterface $interactor)
    {
        $post = Post::select('user_id')->where('id', $id)->first();
        $this->authorize('update', $post);

        request()->validate([
            'caption' => ['required', 'max:2000'],
        ]);
        $request = new PostUpdateRequest($request->caption, $id);
        $interactor->handle($request);
    }
}
