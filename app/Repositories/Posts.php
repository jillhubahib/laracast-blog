<?php

namespace App\Repositories;

use App\Post;

class Posts
{
    public function all()
    {
        return Post::all();
    }
}