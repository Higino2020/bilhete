<?php

namespace App\Http\Controllers;

use App\Models\Bilhete;
use App\Models\Horario;
use App\Models\Viagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

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
        $valor->cliente_id=Auth::user()->cliente->id;
        $valor->funcionario_id=3;
        $valor->viagen_id=$request->viagen_id;
        $valor->estado="Activo";
        $valor->descricao=$request->descricao;
        $valor->acento=$request->acento;
        $valor->save();
        return redirect()->route('client.index');

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

    public function ticket($id){
        $finde = Viagen::find($id);
        return view('pages.cliente.ticket',compact('finde'));
    }

    public function acento($id){
        return view('pages.cliente.acentos',['finde'=>Horario::find($id)]);
    }
}
