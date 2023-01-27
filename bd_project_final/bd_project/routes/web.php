<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\AgendamentoController;

Route::get('/home', function () {
    return view('site.home');
})->name('site.home');

Route::get('/portifolio', function () {
    return view('site.portifolio');
})->name('site.portifolio');

Route::get('/sobre', function () {
    return view('site.sobre');
})->name('site.sobre');

Route::get('/agendamento', function (){
    return view('site.agendamento');
})->name('site.agendamento');

Route::get('/cadastro', function (){
    return view('site.cadastro');
})->name('site.cadastro');

Route::get('/login', function () {
    return view('site.login');
})->name('site.login');

//Cadastro

//Route::get('/cadastro',[CadastroController::class, 'viewCadastro']);
Route::post('/cadastro',[CadastroController::class, 'cadastro']);

//Agendamento
Route::post('/agendamento',[AgendamentoController::class, 'agendamento']);



//Route::get('/login',[LoginController::class, 'showLogin']);
//Route::get('/', function(){
//    return view('site.home');
//});

//Route::get('/login',[LoginController::class, 'login']);
//Route::post('/logout',[LoginController::class, 'logout']);







