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
        $valor=Carro::all();
        return view("pages.carro",compact("valor"));

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
        return redirect()->back()->with("sucesso","Carro cadastrado com sucesso!");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $valor=Carro::find($id);
        return view("pages.carro",compact("valor"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function apagar($id)
    {
        //
        Carro::find($id)->delete();
       return redirect()->back()->with("sucesso","carro apagado com sucesso");
    }
}
