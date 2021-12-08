<?php

use App\Http\Middleware\LogAcessoMiddleware;
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
});

Route::get(
    '/contato/{nome}/{categoria_id}/{tipo?}',
    function (string $nome, int $categoria_id = 1, string $tipo = "Ajuda") {
        echo "$nome $categoria_id - $tipo.";
    }
)->where('nome', '[A-Za-z]+')->where('categoria_id', '[0-9]+');

Route::redirect('/rota2', '/rota1');

Route::get('/rota2', function () {
    return redirect()->route('rota1');
})->name('rota2');

*/

//Route::middleware(LogAcessoMiddleware::class)->get('/', "PrincipalController@principal")->name('site.index');
Route::get('/', "PrincipalController@principal")->name('site.index');
Route::get('/sobre-nos', "SobreNosController@sobreNos")->name('site.sobrenos');
Route::get('/contato', "ContatoController@contato")->name('site.contato');
Route::post('/contato', "ContatoController@salvar")->name('site.contato');

Route::get('/login/{erro?}', "LoginController@index")->name('site.login');
Route::post('/login', "LoginController@autenticar")->name('site.login');

Route::middleware('autenticacao:default,active')->prefix('/app')->group(function () {
    // Route::middleware('log.acesso', 'autenticacao')->get('/produtos', fn () => 'produtos')->name('app.produtos');
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/sair', 'LoginController@sair')->name('app.sair');
    Route::get('/produto', 'ClienteController@index')->name('app.produto');
    Route::get('/cliente', 'ProdutoController@index')->name('app.cliente');
    Route::get('/fornecedor', "FornecedorController@index")->name('app.fornecedor');
});

Route::get('/teste/{params1}/{params2}', 'TesteController@teste')->name('teste');

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="/">Clique aqui</a> para voltar a Home.';
});
