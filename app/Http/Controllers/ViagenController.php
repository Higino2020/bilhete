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
        $valor=Viagen::all();
        return view("pages.viagem",compact("valor"));
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
        return redirect()->back()->with("sucesso","Viagem cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $valor=Viagen::find($id);
        return view("pages.viagem",compact("valor"));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function apagar($id)
    {
        //
        Viagen::find($id)->delete();
        return redirect()->back()->with("sucesso","Viagem apagado com sucesso");
    }
}
