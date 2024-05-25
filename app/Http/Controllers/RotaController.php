<?php

namespace App\Http\Controllers;

use App\Models\Pendente;
use App\Models\Rota;
use Illuminate\Http\Request;

class RotaController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=Rota::with(['partida','destino','preco'])->get();
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
            $valor= Rota::find($request->id);
        } else {
            # code...
            $valor= new Rota();
        }
        $valor->partida=$request->partida;
        $valor->destino=$request->destino;
        $valor->preco=$request->preco;
        $valor->save();
        return response()->json($valor,200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $valor=Pendente::with(['partida','destino','preco'])->find($id);
        return response()->json($valor,200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Pendente::find($id)->delete();
        return response()->json(['result'=>true],200);
    }
}
