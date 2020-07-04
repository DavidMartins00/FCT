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


Route::get('/', 'SiteController@home');
Route::get('/home', 'SiteController@home')->name('/');
Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/repar', 'SiteController@repar');
    Route::resource('perfil', 'SiteController');

    Route::group(['middleware' => ['func']], function () {
        Route::resource('status', 'StatusController');
        Route::resource('fornecedores', 'FornecedoresController');
        Route::resource('produto', 'ProdutosController');
        Route::resource('reparacoes', 'ReparacoesController');
        Route::resource('operadora', 'OperadorasController');
        Route::resource('nencomenda', 'nEncomendaController');
        Route::resource('pencomenda', 'PEncomendaController');
        Route::resource('substituto', 'SubstitutoController');

        Route::group(['middleware' => ['ger']], function () {
            Route::resource('user', 'UserController');
            Route::resource('contrato', 'ContratosController');
            Route::resource('anuncio', 'AnuncioController');
            Route::resource('intervencao', 'IntervencaoController');
            Route::resource('repext', 'repExtController');


            Route::group(['middleware' => ['admin']], function () {
                Route::get('/back', 'SiteController@back');
                Route::get('/tables', 'SiteController@tables');
            });
        });
    });
});




