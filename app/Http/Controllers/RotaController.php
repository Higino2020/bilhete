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
        $valor=Rota::all();
        return view("pages.rota",compact("valor"));
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
        return redirect()->back()->with("sucesso","Roda cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $valor=Pendente::find($id);
        return view("pages.rota",compact("valor"));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function apagar($id)
    {
        //
        Pendente::find($id)->delete();
        return redirect()->back()->with("sucesso","Rota pagado com sucesso");
    }
}
