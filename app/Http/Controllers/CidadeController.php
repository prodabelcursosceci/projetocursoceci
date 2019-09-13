<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->query_busca) {
            $cidades = Cidade::where('nome', 'like', "%$request->query_busca%")->get();
        } else {
            $cidades = Cidade::all();
        }
        return view('cidades.index', compact('cidades'));
        // return view('cidades.index', ['cidades' => $cidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'nome' => 'required|alpha|max:100'  
        ]);
        if($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }
        
        try {
            $cidade = new Cidade();
            $cidade->nome = $request->nome;
            $cidade->save();

        } catch(\Throwable $e) {
            return back()->with('errors', [$e->getMessage()]);
        }

        return "Cidade $request->nome inserida com sucesso!";

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
