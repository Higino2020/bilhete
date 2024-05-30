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
use App\Models\Cliente;

Route::group(['middleware'=>'auth'],function(){
    Route::get('/', function () {
        if(Auth::user()->tipo != 'Cliente'){
            return view('pages.index');
        }else{
             return view('pages.cliente.index');
        }
    });
    Route::resource('user',UserController::class);
    Route::get('user/{id}/apagar',[UserController::class,'apagar'])->name('user.apagar');

   
    Route::get('cliente/{id}/apagar',[ClienteController::class,'apagar'])->name('cliente.apagar');
    
    Route::resource('funcio',FuncionarioController::class);
    Route::get('funcio/{id}/apagar',[FuncionarioController::class,'apagar'])->name('funcio.apagar');
    
    Route::resource('motorista',MotoristaController::class);
    Route::get('motorista/{id}/apagar',[MotoristaController::class,'apagar'])->name('motorista.apagar');


    Route::resource('rota',RoutaController::class);
    Route::get('rota/{id}/apagar',[RoutaController::class,'apagar'])->name('rota.apagar');

    Route::resource('viagen',ViagenController::class);
    Route::get('viagen/{id}/apagar',[ViagenController::class,'apagar'])->name('viagen.apagar');

    Route::resource('horario',HorarioController::class);
    Route::get('horario/{id}/apagar',[HorarioController::class,'apagar'])->name('horario.apagar');

    Route::resource('carro',CarroController::class);
    Route::get('carro/{id}/apagar',[CarroController::class,'apagar'])->name('carro.apagar');

    Route::resource('bilhete',BilheteController::class);
    Route::resource('pendente',PendenteController::class);


});
Route::resource('cliente',ClienteController::class);
Route::post('user/cadastro',[UserController::class,'cadastrar'])->name('user.register');
Route::post('auth',[UserController::class,'auth'])->name('user.auth');
Route::get('entrar',function(){
    return view('auth.login');
})->name('auth.login');
Auth::routes();

Route::get('/home', function(){
    return redirect('/');
})->name('home');
