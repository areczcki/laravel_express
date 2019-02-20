<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $post = new \App\Post();
        return view('posts.index',
            ['postagemList' => $post->all()]
            );
    }
}
