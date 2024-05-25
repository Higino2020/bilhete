<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=Carro::with(['numero','matricula','lotacao'])->get();
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
            $valor= Carro::find($request->id);
        } else {
            # code...
            $valor= new Carro();
        }
        $valor->numero=$request->numero;
        $valor->matricula=$request->matricula;
        $valor->lotacao=$request->lotacao;
        $valor->save();
        return response()->json($valor,200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $valor=Carro::with(['numero','matricula','lotacao'])->find($id);
        return response()->json($valor,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Carro::find($id)->delete();
        return response()->json(['result'=>true],200);
    }
}
