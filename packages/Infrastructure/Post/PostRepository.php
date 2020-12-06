<?php

namespace Packages\Infrastructure\Post;

use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

use Packages\Domain\Domain\Post\Post;
use Packages\Domain\Domain\Post\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function find_from_userid(int $UserId)
    {
        $post = DB::table('posts')->where('user_id', $UserId)->get();
        return $post;
    }

    public function find_from_postid(int $PostId)
    {
        $post = DB::table('posts')->where('id', $PostId)->first();
        return $post;
    }

    public function create_post_get_id(Post $post)
    {
        $id = DB::table('posts')
            ->insertGetId([
                'user_id' => $post->getUserId(),
                'caption' => $post->getCaption(),
                'post_photo_path' => $post->getPostPhotoPath(),
            ]);
        return $id;
    }

    public function storeImage($image)
    {
        $imagePath = $image->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200)->save();
        return $imagePath;
    }
}
