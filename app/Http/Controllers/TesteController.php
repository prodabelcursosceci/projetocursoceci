<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TesteController extends Controller
{
    public function __construct() {
        $this->middleware('checkage');
        $this->middleware('throttle:100,1');
    }

    public function index(Request $req)
    {
        // bail
        $validator = Validator::make($req->all(), [
            'nome' => 'required|max:10|alpha|ends_with:a',
            'idade' => 'sometimes|numeric'
        ]);
        if($validator->fails()) {
            $errors = $validator->errors()->all();
            // var_dump($validator->errors());
            // exit();
        }
        $nome = $req->nome;
        $ola = 'mundo!';

        echo "Hello woooorld, $nome<br>"; // == echo "Hello woooorld,". $nome;
        return view('index', compact(['nome', 'ola', 'errors']));
    }

    public function indexPost(Request $req)
    {
        return "Postei! $req->telefone";
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
