<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use User as GlobalUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $valor=User::all();
        return view("pages.user",compact("valor"));
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
            $valor= User::find($request->id);
        } else {
            # code...
            $valor= new User();
        }
        $valor->name=$request->name;
        $valor->email=$request->email;
        $valor->email_verified_at=$request->email_verified_at;
        $valor->tipo=$request->tipo;
        $valor->password=$request->password;
        $valor->save();
        return redirect()->back()->with("sucesso","user cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $valor=User::find($id);
        return view("pages.user",compact("valor"));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function apagar($id)
    {
        //
        User::find($id)->delete();
        return redirect()->back()->with("sucesso","user apagao com sucesso");
    }
}
