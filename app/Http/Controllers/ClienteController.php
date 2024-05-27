<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=Cliente::all();
        return view("pages.Cliente",compact("valor"));
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
            $valor= Cliente::find($request->id);
        } else {
            # code...
            $valor=new Cliente();
        }
        $valor->nome=$request->nome;
        $valor->nbi=$request->nbi;
        $valor->telefone1=$request->telefone1;
        $valor->telefone2=$request->telefone2;
        $valor->data_nascimento=$request->data_nascimento;
        $valor->save();
       return redirect()->back()->with("sucesso","Cliente cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $valor=Cliente::find($id);
        return view("pages.Cliente",compact("valor"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function apagar($id)
    {
        //
        Cliente::find($id)->delete();
        return redirect()->back()->with("sucesso","Cliente Apagao com sucesso");
    }
}
