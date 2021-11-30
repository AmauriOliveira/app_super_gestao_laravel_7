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


