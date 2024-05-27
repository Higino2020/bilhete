<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;

class MotoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=Motorista::all();
        return view("pages.motorista",compact("valor"));
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
            $valor= Motorista::find($request->id);
        } else {
            # code...
            $valor= new Motorista();
        }
        $valor->nome=$request->nome;
        $valor->provincia=$request->provincia;
        $valor->municipio=$request->municipio;
        $valor->contacto=$request->contacto;
        $valor->data_nascimento=$request->data_nascimento;
        $valor->save();
        return redirect()->back()->with("sucesso","Motorista cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $valor=Motorista::find($id);
        return view("pages.motorista",compact("valor"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function apagar( $id)
    {
        //
        Motorista::find($id)->delete();
        return redirect()->back()->with("sucesso","Motorista acadastrado com sucesso");
    }
}
