<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
        $posts = $tag->posts;
        return view('post.index', compact('posts'));
    }
}
