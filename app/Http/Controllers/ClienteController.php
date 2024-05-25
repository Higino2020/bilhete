<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=Cliente::with(['nome','nbi','telefone1','telefone2','data_nascimento'])->get();
        return response()->json($valor,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $valor=null;
        if (isset($request->id)) {
            # code...
            $valor= Cliente::find($request->id);
        } else {
            # code...
            $valor=new Cliente();
        }
        $valor->nome=$request->nome;
        $valor->nbi=$request->nbi;
        $valor->telefone1=$request->telefone1;
        $valor->telefone2=$request->telefone2;
        $valor->data_nascimento=$request->data_nascimento;
        $valor->save();
        return response()->json($valor,200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $valor=Cliente::with(['nome','nbi','telefone1','telefone2','data_nascimento'])->find($id);
        return response()->json($valor,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Cliente::find($id)->delete();
        return response()->json(['result'=>true],200);
    }
}
