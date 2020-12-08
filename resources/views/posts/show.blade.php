<x-app-layout>

    <x-slot name="header">
        PostShow
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $viewModel->post->post_photo_path }}" class="w-96">
            </div>
            <div class="col-4">
                <h1><strong>Caption</strong></h1>
                <h1>{{ $viewModel->post->caption }}</h1>
                <h1><strong>CreatedAt</strong></h1>
                <h1>{{ $viewModel->post->created_at }}</h1>
                <h1><strong>UpdatedAt</strong></h1>
                <h1>{{ $viewModel->post->updated_at }}</h1>
            </div>
        </div>
    </div>

    <form action="{{ route('post.destroy',[$viewModel->post->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn">Delete Post</button>
    </form>

</x-app-layout>