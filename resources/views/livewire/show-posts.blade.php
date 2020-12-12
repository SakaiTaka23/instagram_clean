@foreach ($posts as $post)
@if ($loop->index % 3 == 0)
<div class="flex pt-4">
    @endif
    <div class="flex-1 text-center px-4 py-2 m-2">
        <a href='{{ route('post.show',[$post->id]) }}'>
            <img class="w-96" src="/storage/{{ $post->post_photo_path }}">
        </a>
    </div>
    @if ($loop->index % 3 == 2 || $loop->last)
</div>
@endif
@endforeach
