<x-app-layout>

    <div class=" rounded overflow-hidden border w-full lg:w-6/12 md:w-6/12 bg-white mx-3 md:mx-0 lg:mx-0">
        <div class="w-full flex justify-between p-3">
            <div class="flex">
                <a href='{{ route('profile.show',[$viewModel->profile->UserId]) }}'>
                    <div class="rounded-full h-8 w-8 bg-gray-500 flex items-center justify-center overflow-hidden">
                        <img src="/storage/{{ $viewModel->profile->profile_photo_path }}" alt="profilepic">
                    </div>
                    <span class="pt-1 ml-2 font-bold text-sm">{{ $viewModel->profile->username }}</span>
                </a>
            </div>
            <span class="px-2 hover:bg-gray-300 cursor-pointer rounded"><i
                    class="fas fa-ellipsis-h pt-2 text-lg"></i></span>
        </div>
        <img class="w-full bg-cover" src="/storage/{{ $viewModel->post->post_photo_path }}">
        <div class="px-3 pb-2">
            <div class="pt-2">
                <i class="far fa-heart cursor-pointer"></i>
                <span class="text-sm text-gray-400 font-medium">{{ "likes" }}</span>
            </div>
            <div class="pt-1">
                <div class="mb-2 text-sm">
                    <span class="font-medium mr-2">{{ $viewModel->post->caption }}</span>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>