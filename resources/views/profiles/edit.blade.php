<x-app-layout>
    <div>
        <div class=" rounded overflow-hidden border w-full lg:w-6/12 md:w-6/12 bg-white mx-3 md:mx-0 lg:mx-0">
            <img class="w-full bg-cover" src="/storage/{{ $viewModel->profile->profile_photo_path }}">
            <div class="px-3 py-2">
                <div class="pt-1">
                    <div class="mb-2 text-sm">
                        <form action="{{ route('profiles.update',[$viewModel->profile->id]) }}"
                            enctype="multipart/form-data" method="POST">
                            @method('PATCH')
                            @csrf

                            <label for='profile image'>Profile Image</label>
                            <input type="file" id="profile_image" name="profile_image" accept="image/png,image/jpeg">

                            @if ($errors->has('profile_image'))
                            <strong>{{ $errors->first('profile_image') }}</strong>
                            @endif

                            <br>

                            <label for='username'>User Name</label>
                            <input id='username' name='username' type='text' value="{{ $viewModel->profile->username }}"
                                autofocus>
                            @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                            @endif

                            <br>

                            <label for='description'>Description</label>
                            <input id='description' name='description' type='text'
                                value="{{ $viewModel->profile->description }}">
                            @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif

                            <br>

                            <label for='url'>URL</label>
                            <input id='url' name='url' type='text' value="{{ $viewModel->profile->url }}">
                            @if ($errors->has('url'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                            @endif

                            <br>
                            <button
                                class="bg-transparent hover:bg-blue-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-gray-600 hover:border-transparent rounded">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
