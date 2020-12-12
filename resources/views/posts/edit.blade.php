<x-app-layout>
    <div class="flex justify-center">
        <div class=" rounded overflow-hidden border w-full lg:w-6/12 md:w-6/12 bg-white mx-3 md:mx-0 lg:mx-0">
            <img class="w-full bg-cover" src="/storage/{{ $viewModel->post->post_photo_path }}">
            <div class="px-3 py-2">
                <div class="pt-1">
                    <div class="mb-2 text-sm">
                        <div class="pb-5">
                            <strong>Created At</strong>{{ $viewModel->post->created_at }}
                            <strong>Updated At</strong>{{ $viewModel->post->updated_at  }}
                        </div>

                        <form action="{{ route('post.update',[$viewModel->post->id]) }}" enctype="multipart/form-data"
                            method="POST">
                            @method('PATCH')
                            @csrf
                            <input type="text" class="font-medium mr-2" id="caption" name="caption"
                                value="{{ $viewModel->post->caption }}" autocomplete="caption" autofocus>

                            @if ($errors->has('caption'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('caption') }}</strong>
                            </span>
                            @endif

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