<?php

namespace Packages\Domain\Domain\Post;


interface PostRepositoryInterface
{
    public function count_post(int $UserId);
    public function create_post_get_id(Post $post);
    public function delete_post(int $PostId);
    public function find_from_postid(int $PostId);
    public function find_from_keyword(string $keyword);
    public function find_from_userid(int $UserId);
    public function find_from_userid_simple(int $UserId);
    public function get_random_posts();
    public function storeImage($image);
    public function update_post(int $PostId, string $caption, string $updated_at);
}
