<?php

namespace Packages\Infrastructure\Post;

use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

use Packages\Domain\Domain\Post\Post;
use Packages\Domain\Domain\Post\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function find_from_userid($UserId)
    {
        $post = DB::table('posts')->where('user_id', $UserId)->get();
        return $post;
    }

    public function find_from_postid($PostId)
    {
        $post = DB::table('posts')->where('id', $PostId)->first();
        return $post;
    }

    public function save(Post $post)
    {
        DB::table('posts')
            ->updateOrInsert(
                ['user_id' => $post->getUserId()],
                ['caption' => $post->getCaption()],
                ['post_photo_path' => $post->getPostPhotoPath()],
            );
        dd("ok");
    }

    public function storeImage($image)
    {
        $imagePath = $image->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200)->save();
        return $imagePath;
    }
}
