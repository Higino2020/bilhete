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
        $funcionario=Funcionario::all();
        return view("pages.funcionario",compact("funcionario"));
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
        return redirect()->back()->with("sucesso","Funcionario cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $valor=Funcionario::find($id);
        return view("pages.funcionario",compact("valor"));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function apagar($id)
    {
        //
        Funcionario::find($id)->delete();
        return redirect()->back()->with("sucesso","Funcionario apagao com sucesso");
    }
}
