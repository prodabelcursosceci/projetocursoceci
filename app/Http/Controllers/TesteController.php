<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(Request $req)
    {
        $nome = $req->nome;

        echo "Hello woooorld, $nome<br>"; // == echo "Hello woooorld,". $nome;
        echo 'Hello woooorld, $nome<br>';
        return view('welcome');
    }

    public function index2($nome, $idade=null)
    {
        echo "Hello woooorld, $nome!<br>"; 
        if($idade) {
            echo "Vc tem $idade anos.<br>"; 
        }
        return view('welcome');
    }

}
