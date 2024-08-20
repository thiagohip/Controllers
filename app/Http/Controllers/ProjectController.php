<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Project::all();
        return view();
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
        $data = Project::create([
            "title" => $request->input('title'),
            "state" => "M",
            "description" => $request->input('description'),
            "client_id" => $request->input('client_id'),
        ]);
        return view();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Project::find($id);
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
            $data->title = $request->input('title');
            $data->state = $request->input('state');
            $data->description = $request->input('description');
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
        //
    }
}
