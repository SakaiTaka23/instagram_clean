<x-app-layout>

    <x-slot name="header">
        PostEdit
    </x-slot>


    <div class='w-full overflow-hidden rounded-lg shadow-xs'>
        <div class='w-full overflow-x-auto'>

            <div class="row">
                <h1>Edit Post</h1>
            </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                <h1>Image</h1>
                <img src="/profile/{{ $viewModel->post->post_photo_path }}" class="w-96">
                <h1>{{ $viewModel->post->created_at }}</h1>
                <h1>{{ $viewModel->post->updated_at }}</h1>
            </div>

            <form action="{{ route('post.update',[$viewModel->post->id]) }}" enctype="multipart/form-data"
                method="POST">
                @method('PATCH')
                @csrf

                <div class="row">
                    <div class="col-8 offset-2">

                        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                            <input id="caption" type="text"
                                class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="caption"
                                value="{{ $viewModel->post->caption }}" autocomplete="caption" autofocus>

                            @if ($errors->has('caption'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('caption') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="row pt-4">
                            <button class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>