<x-app-layout>

    <x-slot name="header">
        ProfileEdit
    </x-slot>


    <div class='w-full overflow-hidden rounded-lg shadow-xs'>
        <div class='w-full overflow-x-auto'>

            <div class="row">
                <h1>Edit Post</h1>
            </div>

            <div class="row">
                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                <h1>Image</h1>
                <img src="/storage/{{ $viewModel->profile->profile_photo_path }}" class="w-96">
            </div>

            <form action="{{ route('profiles.update',[$viewModel->profile->id]) }}" enctype="multipart/form-data"
                method="POST">
                @method('PATCH')
                @csrf

                <div class="row">
                    <div class="col-8 offset-2">

                        <div class='form-group'>
                            <label for='profile image'>Profile Icon</label>
                            <input type="file" class="form-control-file" id="profile_image" name="profile_image">

                            @if ($errors->has('profile_image'))
                            <strong>{{ $errors->first('profile_image') }}</strong>
                            @endif


                            <label for='username'>User Name</label>
                            <input id='username' name='username' type='text' value="{{ $viewModel->profile->username }}"
                                autofocus>
                            @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                            @endif

                            <label for='description'>Description</label>
                            <input id='description' name='description' type='text'
                                value="{{ $viewModel->profile->description }}">
                            @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif

                            <label for='url'>URL</label>
                            <input id='url' name='url' type='text' value="{{ $viewModel->profile->url }}">
                            @if ($errors->has('url'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                            @endif

                            <div class="row pt-4">
                                <button class="btn btn-primary">Submit</button>
                            </div>

                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>