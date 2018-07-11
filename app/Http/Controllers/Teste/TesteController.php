<?php

namespace App\Http\Controllers\Teste;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class TesteController extends Controller
{   
    public function index()
    {
        return "Ola mundo!!";
    }
    
    public function ola($nome)
    {
        return "Ola  $nome!! ";
    }
    
    public function olaView($nome)
    {
        return view('teste.index', ['nome' => $nome]);
    }
    
    public function nota()
    {
        
        $notas = [
            0 => 'Anotacao 1',
            1 => 'Anotacao 2',
            2 => 'Anotacao 3',
            3 => 'Anotacao 4',
            4 => 'Anotacao 5',
        ];
        
        
        return view('teste.nota', ['notas' => $notas]);
    }
}
