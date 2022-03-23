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

Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');

Route::middleware('autenticacao:padrao, visitante')->prefix('/app')->group(function () {

    Route::get('/home', 'HomeController@index')
    ->name('app.home');

    Route::get('/sair', 'LoginController@sair')
    ->name('app.sair');

    Route::get('/cliente', 'ClienteController@index')
    ->name('app.cliente');

    Route::get('/fornecedor', 'FornecedorController@index')
    ->name('app.fornecedor');

    Route::post('/fornecedor/listar', 'FornecedorController@listar')
    ->name('app.fornecedor.listar');

    Route::get('/fornecedor/listar', 'FornecedorController@listar')
    ->name('app.fornecedor.listar');


    Route::get('/fornecedor/adicionar', 'FornecedorController@adicionar')
    ->name('app.fornecedor.adicionar');

    Route::post('/fornecedor/adicionar', 'FornecedorController@adicionar')
    ->name('app.fornecedor.adicionar');

    Route::get('/fornecedor/editar/{id}/{msg?}', 'FornecedorController@editar')
    ->name('app.fornecedor.editar');

    Route::get('/fornecedor/excluir/{id}}', 'FornecedorController@excluir')
    ->name('app.fornecedor.excluir');

    //produtos
    Route::resource('produto', 'ProdutoController');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para página inicial.';
});
