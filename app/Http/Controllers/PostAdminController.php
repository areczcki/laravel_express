<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\PostRequest;


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
    
    public function store(PostRequest $request)
    {
        //gravando o post
        $this->post->create($request->all());
        
        //redirecionando para uma rota, após gravado
        return redirect()->route('admin.posts.index');
    }
    
    public function edit($id)
    {
        $post = $this->post->find($id);
        
        return view('admin.posts.edit', compact('post'));
    }
    
    public function update($id, PostRequest $request)
    {
        //gravando o post
        $this->post->find($id)->update($request->all());
        
        //redirecionando para uma rota, após gravado
        return redirect()->route('admin.posts.index');
    }
    
    public function delete($id)
    {
        $this->post->find($id)->delete();
    }
}
