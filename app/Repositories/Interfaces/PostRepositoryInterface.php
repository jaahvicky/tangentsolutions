<?php

namespace App\Repositories\Interfaces;

use App\User;

interface PostRepositoryInterface
{
    public function all();

    public function getByUser(User $user);
}
