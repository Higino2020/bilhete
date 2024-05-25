<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;

class MotoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=Motorista::with(['nome','provincia','municipio','contacto','data_nascimento'])->get();
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
            $valor= Motorista::find($request->id);
        } else {
            # code...
            $valor= new Motorista();
        }
        $valor->nome=$request->nome;
        $valor->provincia=$request->provincia;
        $valor->municipio=$request->municipio;
        $valor->contacto=$request->contacto;
        $valor->data_nascimento=$request->data_nascimento;
        $valor->save();
        return response()->json($valor,200);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $valor=Motorista::with(['nome','provincia','municipio','contacto','data_nascimento'])->find($id);
        return response()->json($valor,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motorista $motorista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        Motorista::find($id)->delete();
        return response()->json(['result'=>true],200);
    }
}
