<?php

namespace packages\Domain\Domain\Post;


interface PostRepositoryInterface
{
    public function find_from_postid($PostId);
    public function find_from_userid($UserId);
    public function save(Post $post);
    public function storeImage($image);
}
