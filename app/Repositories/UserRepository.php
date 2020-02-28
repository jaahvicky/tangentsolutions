<?php

namespace App\Repositories;

use App\Post;
use App\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    /**
     * Get's a user by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($user_id)
    {
        return User::find($user_id);
    }

    /**
     * Get's all users.
     *
     * @return mixed
     */
    public function all()
    {
        return User::all();
    }

    /**
     * Deletes a user.
     *
     * @param int
     */
    public function delete($user_id)
    {
        Post::destroy($user_id);
    }

    /**
     * Updates a user.
     *
     * @param int
     * @param array
     */
    public function update($user_id, array $user_data)
    {
        Post::find($user_id)->update($user_data);
    }

    public function getByUser(User $user)
    {
        return Post::where('user_id' . $user->id)->get();
    }
}
