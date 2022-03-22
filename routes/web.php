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
*/

/* verbo HTTP

GET
POST
PUT
PATCH
DELETE
OPTIONS

*/
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo!';
});
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@Contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

Route::get('/login', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');

Route::middleware('autenticacao:padrao, visitante')->prefix('/app')->group(function () {

    Route::get('/clientes', function () {return 'Clientes';})
    ->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorController@index')
    ->name('app.fornecedores');

    Route::get('/produtos', function () {return 'Produtos';})
    ->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para página inicial.';
});
