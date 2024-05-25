<?php

namespace App\Http\Controllers;

use App\Models\Pendente;
use Illuminate\Http\Request;

class PendenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=Pendente::with(['bilhete_id','estado','motivo'])->get();
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
            $valor= Pendente::find($request->id);
        } else {
            # code...
            $valor= new Pendente();
        }
        $valor->bilhete_id=$request->bilhete_id;
        $valor->estado=$request->estado;
        $valor->motivo=$request->motivo;
        $valor->save();
        return response()->json($valor,200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $valor=Pendente::with(['nome','genero','data_nascimento'])->find($id);
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
