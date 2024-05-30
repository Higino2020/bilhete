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
        $user=User::where('tipo','<>','Admin')->get();
        return view("pages.user",compact("user"));
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
        $valor->tipo=$request->tipo;
        $valor->password=bcrypt($request->password);
        $valor->save();
        return redirect()->back()->with("Sucesso","Usuario cadastrado com sucesso");
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
        User::find($id)->delete();
        $sms = "usuario Eliminado com sucesso";
        return redirect()->back()->with("Sucesso",$sms);
    }
}
