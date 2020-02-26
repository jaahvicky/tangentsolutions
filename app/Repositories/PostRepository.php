<?php

namespace App\Repositories;

use App\Post;
use App\User;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }

    public function getByUser(User $user)
    {
        return Post::where('user_id' . $user->id)->get();
    }
}
