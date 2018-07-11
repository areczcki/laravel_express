<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Null_;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        /*
         * Deletar sessão
        $post = array();
        $request->session()->put('postagem', $post);
        */
        
        
       $post = $request->session()->get('postagem');
       $post = isset($post) ? $post : array();
       
        return view('blog.index',
            ['postagemList' => $post]
        );        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->session()->has('postagem'))
        {
            $post = $request->session()->get('postagem');
            array_push($post,array('titulo' => $request['titulo'], 'postagem' => $request['texto']));
            $request->session()->put('postagem', $post);
        }else{         
            $post = array();
            //$postagem[] = array('titulo' => $request['titulo'], 'postagem' => $request['texto']);
            array_push($post,array('titulo' => $request['titulo'], 'postagem' => $request['texto']));
            $request->session()->put('postagem', $post);
        }
        return Redirect::to('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
