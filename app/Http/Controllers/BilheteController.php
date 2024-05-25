<?php

namespace App\Http\Controllers;

use App\Models\Bilhete;
use Illuminate\Http\Request;

class BilheteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=Bilhete::with(['cliente_id','funcionario_id','viagen_id','estado','descricao',
        'acento'])->get();
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
            $valor= Bilhete::find($request->id);
        } else {
            # code...
            $valor= new Bilhete();
        }
        $valor->cliente_id=$request->cliente_id;
        $valor->funcionario_id=$request->funcionario_id;
        $valor->viagen_id=$request->viagen_id;
        $valor->estado=$request->estado;
        $valor->descricao=$request->descricao;
        $valor->acento=$request->acento;
        $valor->save();
        return response()->json($valor,200);

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $valor=Bilhete::with(['cliente_id','funcionario_id','viagen_id','estado','descricao',
        'acento'])->find($id);
        return response()->json($valor,200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        Bilhete::find($id)->delete();
        return response()->json(['result'=>true],200);
    }
}
