<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostAdminController extends Controller
{
    
    public $post;
    
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    
    public function index()
    {
        //Sem paginação
        //$this->post = $this->post->all();
        
        //Com paginação
        $posts = $this->post->paginate(5);
        Return view('admin.posts.index', compact('posts'));
    }
    
    public function create()
    {
        return view('admin.posts.create');
    }
    
    public function store(Request $request)
    {
        //gravando o post
        $this->post->create($request->all());
        
        //redirecionando para uma rota, após gravado
        return redirect()->route('admin.posts.index');
    }
    
}
