<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/ola_mundo', function () {
    return "Ola mundo!!!";
});

Route::get('/test', 'Teste\TesteController@index');

Route::get('/ola/{nome}', 'Teste\TesteController@ola');

Route::get('/olaView/{nome}', 'Teste\TesteController@olaView');

Route::get('/nota', 'Teste\TesteController@nota');


/** ROTAS PARA O BLOG */
Route::get('/blog', 'Blog\BlogController@index');

Route::get('/blog/postagem', 'Blog\BlogController@create');

Route::post('/blog/postagem/gravar', 'Blog\BlogController@store');
//Route::post('projetos/inserir', 'ProjetosController@postInserir');

/** ROTAS PARA O Posts */
Route::get('/posts', 'PostsController@index');


/*
Route::get('/admin/posts', ['as' => 'admin.posts.index' , 'uses' => 'PostAdminController@index']);
Route::get('/admin/posts/create', ['as' => 'admin.posts.create' , 'uses' => 'PostAdminController@create']);
Route::post('/admin/posts/store', ['as' => 'admin.posts.store' , 'uses' => 'PostAdminController@store']);
Route::get('/admin/posts/edit/{id}', ['as' => 'admin.posts.edit' , 'uses' => 'PostAdminController@edit']);
Route::put('/admin/posts/update/{id}', ['as' => 'admin.posts.update' , 'uses' => 'PostAdminController@update']);
Route::get('/admin/posts/delete/{id}', ['as' => 'admin.posts.delete' , 'uses' => 'PostAdminController@delete']);
*/
    
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'posts'], function () {
        Route::get('', ['as' => 'admin.posts.index' , 'uses' => 'PostAdminController@index']);
        Route::get('create', ['as' => 'admin.posts.create' , 'uses' => 'PostAdminController@create']);
        Route::post('store', ['as' => 'admin.posts.store' , 'uses' => 'PostAdminController@store']);
        Route::get('edit/{id}', ['as' => 'admin.posts.edit' , 'uses' => 'PostAdminController@edit']);
        Route::put('update/{id}', ['as' => 'admin.posts.update' , 'uses' => 'PostAdminController@update']);
        Route::get('delete/{id}', ['as' => 'admin.posts.delete' , 'uses' => 'PostAdminController@delete']);
    });
});


Route::get('/auth', function() {
    if(Auth::attempt(['email' => 'alexandrebezao@gmail.com', 'password' => '123456'])) {
        return 'Autenticou';
    }
    return 'falha na autenticacao';
});

    
Route::get('/auth/logout', function() {
    Auth::logout();
});
    

Route::get('/botstraptema', function () {
    return view('welcome_bootstrap');
});

Route::get('/botstraptema2', function () {
    return view('layout.conteudo_exemplo');
});