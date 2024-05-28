<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
   BilheteController,
    CarroController,
    ClienteController,
    FuncionarioController,
    HorarioController,
    MotoristaController,
    PendenteController,
    RoutaController,
    UserController,
    ViagenController
};
Route::group(['middleware'=>'auth'],function(){
    Route::get('/', function () {
        return view('pages.index');
    });
    Route::resource('user',UserController::class);
    Route::resource('bilhete',BilheteController::class);
    Route::resource('cliente',ClienteController::class);
    Route::resource('funcio',FuncionarioController::class);
    Route::resource('motorista',MotoristaController::class);
    Route::resource('pendente',PendenteController::class);
    Route::resource('rota',RoutaController::class);
    Route::resource('viagem',ViagenController::class);
    Route::resource('horario',HorarioController::class);
    Route::resource('carro',CarroController::class);

});


Auth::routes();

Route::get('/home', function(){
    return redirect('/');
})->name('home');
