<?php

namespace App\Http\Controllers;

use App\Models\Viagen;
use Illuminate\Http\Request;

class ViagenController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=Viagen::with(['moto1_id','moto2_id','carro_id','horario_id','descricao'])->get();
        return response()->json($valor,200);
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
            $valor= Viagen::find($request->id);
        } else {
            # code...
            $valor= new Viagen();
        }
        $valor->moto1_id=$request->moto1_id;
        $valor->moto2_id=$request->moto2_id;
        $valor->carro_id=$request->carro_id;
        $valor->horario_id=$request->horario_id;
        $valor->descricao=$request->descricao;
        $valor->save();
        return response()->json($valor,200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $valor=Viagen::with(['moto1_id','moto2_id','carro_id','horario_id','descricao'])->find($id);
        return response()->json($valor,200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Viagen::find($id)->delete();
        return response()->json(['result'=>true],200);
    }
}
