<x-app-layout>

    <div class=" rounded overflow-hidden border w-full lg:w-6/12 md:w-6/12 bg-white mx-3 md:mx-0 lg:mx-0">

        <div class="flex justify-around">
            <a href='{{ route('profiles.show',[$viewModel->profile->UserId]) }}'>
                <div class="rounded-full h-10 w-10 bg-gray-500 flex items-center justify-center overflow-hidden">
                    <img src="/storage/{{ $viewModel->profile->profile_photo_path }}" alt="profilepic">
                </div>
            </a>
            <a href='{{ route('profiles.show',[$viewModel->profile->UserId]) }}'>
                <span class="pt-1 ml-2 font-bold text-sm">{{ $viewModel->profile->username }}</span>
            </a>
            <a href='{{ route('post.edit',[$viewModel->post->id]) }}' class="bg-transparent hover:bg-red-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-gray-600
                                                hover:border-transparent rounded">Edit</a>
        </div>

        <img class="w-full bg-cover" src="/storage/{{ $viewModel->post->post_photo_path }}">
        <div class="px-3 py-2">
            <div class="pt-1">
                <div class="mb-2 text-sm">
                    <div class="pb-5">
                        <strong>Created At</strong>{{ $viewModel->post->created_at }}
                        <strong>Updated At</strong>{{ $viewModel->post->updated_at  }}
                    </div>
                    <span class="font-medium mr-2">{{ $viewModel->post->caption }}</span>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>