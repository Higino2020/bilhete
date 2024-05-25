<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=Funcionario::with(['nome','genero','data_nascimento'])->get();
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
            $valor= Funcionario::find($request->id);
        } else {
            # code...
            $valor= new Funcionario();
        }
        $valor->nome=$request->nome;
        $valor->genero=$request->genero;
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
        $valor=Funcionario::with(['nome','genero','data_nascimento'])->find($id);
        return response()->json($valor,200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Funcionario::find($id)->delete();
        return response()->json(['result'=>true],200);
    }
}
