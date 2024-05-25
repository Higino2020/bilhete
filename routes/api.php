<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    FuncionarioController,
    BilheteController,
    CarroController,
    ClienteController,
    HorarioController,
    MotoristaController,
    PendenteController,
    RotaController,
    ViagenController
};

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('teste',function(){
    return ['nome'=>"Higino"];
});
Route::get('Home',[HomeController::class,'index']);
#ROTA DO FUNCIONARIO
Route::post('Funcionario',[FuncionarioController::class,'store']);
Route::get('Funcionario',[FuncionarioController::class,'index']);
Route::get('Funcionario/{id}',[FuncionarioController::class,'show']);
Route::get('Funcionario/{id}/apagar',[FuncionarioController::class,'apagar']);
#ROTA PARA O BILHETE
Route::post('Bilhete',[BilheteController::class,'store']);
Route::get('Bilhete',[BilheteController::class,'index']);
Route::get('Bilhete/{id}',[BilheteController::class,'show']);
Route::get('Bilhete/{id}/apagar',[BilheteController::class,'apagar']);
#ROTA PARA CLIENTE
Route::post('Cliente',[ClienteController::class,'store']);
Route::get('Cliente',[ClienteController::class,'index']);
Route::get('Cliente/{id}',[ClienteController::class,'show']);
Route::get('Cliente/{id}/apagar',[ClienteController::class,'apagar']);
#ROTA DO CARRO
Route::post('Carro',[CarroController::class,'store']);
Route::get('Carro',[CarroController::class,'index']);
Route::get('Carro/{id}',[CarroController::class,'show']);
Route::get('Carro/{id}/apagar',[CarroController::class,'apagar']);
#ROTA DO HORARIO
Route::post('Horario',[HorarioController::class,'store']);
Route::get('Horario',[HorarioController::class,'index']);
Route::get('Horario/{id}',[HorarioController::class,'show']);
Route::get('Horario/{id}/apagar',[HorarioController::class,'apagar']);
#ROTA DE MOTORISTA
Route::post('Motorista',[MotoristaController::class,'store']);
Route::get('Motorista',[MotoristaController::class,'index']);
Route::get('Motorista/{id}',[MotoristaController::class,'show']);
Route::get('Motorista/{id}/apagar',[MotoristaController::class,'apagar']);
#ROTA DE PENDENTE
Route::post('Pendente',[PendenteController::class,'store']);
Route::get('Pendente',[PendenteController::class,'index']);
Route::get('Pendente/{id}',[PendenteController::class,'show']);
Route::get('Pendente/{id}/apagar',[PendenteController::class,'apagar']);
#ROTA das rodovias
Route::post('Rota',[RotaController::class,'store']);
Route::get('Rota',[RotaController::class,'index']);
Route::get('Rota/{id}',[RotaController::class,'show']);
Route::get('Rota/{id}/apagar',[RotaController::class,'apagar']);
#ROTA DE SEGUIR
Route::post('Viagen',[ViagenController::class,'store']);
Route::get('Viagen',[ViagenController::class,'index']);
Route::get('Viagen/{id}',[ViagenController::class,'show']);
Route::get('Viagen/{id}/apagar',[ViagenController::class,'apagar']);
