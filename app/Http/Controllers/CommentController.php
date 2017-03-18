<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Post $post)
    {   
        $this->validate(request(), ['body' => 'required|min:2']);
        
        $post->addComment(request('body'));
        return back();
    }
}
