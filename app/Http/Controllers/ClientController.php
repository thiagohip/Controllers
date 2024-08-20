<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Client::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Client::create([
            "name" => $request->input('name')
        ]);
        if($data->save()){
            //return redirect('/autor')->with('success', 'Autor cadastrado com sucesso!!');
        }
        //return redirect('/autor')->with('danger', 'Erro ao cadastrar autor!');
    }

    /**
     * Display the specified resource.
     */
    public function show(number $id)
    {
        $client = Client::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Client::find($id);
        if(isset($data)){
            //return view('editaAutor', compact('dados'));
        }
        //return redirect('/autor')->with('danger', 'Cadastro do autor não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Client::find($id);
        if(isset($dados)){
            $data->name = $request->input('name');
            $data->save();
           //return redirect('/autor')->with('success', 'Cadastro do Autor atualizado com sucesso!!');
        }
        //return redirect('/autor')->with('danger', 'Cadastro de autor não localizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
