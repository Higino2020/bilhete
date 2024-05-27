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
        $valor=Bilhete::all();
        return view("pages.bilhete",compact("valor"));
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
        return redirect()->back()->with("sucesso","Bilhete Cadastrado com sucesso");

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $valor=Bilhete::find($id);
        return view("pages.bilhete",compact("valor"));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function apagar( $id)
    {
        //
        Bilhete::find($id)->delete();
        return redirect()->back()->with("sucesso","Bilhete Apagado com sucesso");
    }
}
