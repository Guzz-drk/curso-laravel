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

Route::get('/', 'PrincipalController@principal')->
name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->
name('site.sobrenos');

Route::get('/contato', 'ContatoController@Contato')->
name('site.contato');

Route::get('/login', function () {return 'Login';})->
name('site.login');

Route::prefix('/app')->group(function () {

    Route::get('/clientes', function () {return 'Clientes';})->
    name('app.clientes');

    Route::get('/fornecedores', function () {return 'Fornecedores';})->
    name('app.fornecedores');

    Route::get('/produtos', function () {return 'Produtos';})->
    name('app.produtos');

});
