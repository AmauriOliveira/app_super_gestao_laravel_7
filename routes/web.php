<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/A', function () {
    return view('welcome');
}); */

Route::get('/', "PrincipalController@principal");

Route::get('/sobre-nos', "SobreNosController@sobreNos");

Route::get('/contato', "ContatoController@contato");

Route::get(
    '/contato/{nome}/{categoria_id}/{tipo?}',
    function (string $nome, int $categoria_id = 1, string $tipo = "Ajuda") {
        echo "$nome $categoria_id - $tipo.";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-Z]+');
