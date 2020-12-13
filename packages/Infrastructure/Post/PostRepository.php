<?php

namespace Packages\Infrastructure\Post;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Packages\Domain\Domain\Post\Post;
use Packages\Domain\Domain\Post\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function count_post(int $UserId)
    {
        $count = DB::table('posts')
            ->where('user_id', $UserId)
            ->count();
        return $count;
    }

    public function create_post_get_id(Post $post)
    {
        $id = DB::table('posts')
            ->insertGetId([
                'user_id' => $post->getUserId(),
                'caption' => $post->getCaption(),
                'post_photo_path' => $post->getPostPhotoPath(),
                'created_at' => $post->getCreatedAt(),
                'updated_at' => $post->getUpdatedAt(),
            ]);
        return $id;
    }

    public function delete_post(int $PostId)
    {
        $post = DB::table('posts')
            ->select('post_photo_path')
            ->where('id', $PostId)
            ->first();
        Storage::disk('public')->delete($post->post_photo_path);

        DB::table('posts')
            ->where('id', $PostId)
            ->delete();
    }

    public function find_from_keyword(string $keyword)
    {
        $posts = DB::table('posts')->select('id', 'post_photo_path')
            ->where('caption', 'like', '%' . $keyword . '%')
            ->get();
        return $posts;
    }

    public function find_from_postid(int $PostId)
    {
        $post = DB::table('posts')->where('id', $PostId)->first();
        return $post;
    }

    public function find_from_userid(int $UserId)
    {
        $post = DB::table('posts')->where('user_id', $UserId)->get();
        return $post;
    }

    public function find_from_userid_simple(int $UserId)
    {
        $post = DB::table('posts')->select('id', 'post_photo_path')->where('user_id', $UserId)->get();
        return $post;
    }

    public function get_random_posts()
    {
        $posts = DB::table('posts')->take(10)->get();
        return $posts;
    }

    public function storeImage($image)
    {
        $imagePath = $image->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200)->save();
        return $imagePath;
    }

    public function update_post(int $PostId, string $caption, string $updated_at)
    {
        DB::table('posts')
            ->where('id', $PostId)
            ->update([
                'caption' => $caption,
                'updated_at' => $updated_at,
            ]);
    }
}
