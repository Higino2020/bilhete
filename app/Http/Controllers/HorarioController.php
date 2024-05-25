<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=Horario::with(['hora','local','descricao','rota'])->get();
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
            $valor=Horario::find($request->id);
        } else {
            # code...
            $valor=new Horario();
        }
        $valor->hora=$request->hora;
        $valor->local=$request->local;
        $valor->descricao=$request->descricao;
        $valor->rota=$request->rota;
        $valor->save();
        return response()->json($valor,200);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $valor=Horario::with(['hora','local','descricao','rota'])->find($id);
        return response()->json($valor,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario $horario)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        Horario::find($id)->delete();
        return response()->json(['result'=>true],200);
    }
}
