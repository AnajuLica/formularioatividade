<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PrincipalController;

Route::get('/', function(){return PrincipalController::home();})->name('home');
Route::get('/cursos', function(){return PrincipalController::cursos();})->name('cursos');
Route::get('/dp', function(){return PrincipalController::departamentos();})->name('departamentos');
Route::get('/cont', function(){return PrincipalController::contato();})->name('contato');

Route::fallback(function() {
echo 'Olá Usuário! A página que você tentou acessar não foi encontrada. <a href="'.route('home').'">CLIQUE AQUI</a> para ir para página inicial.';
});
