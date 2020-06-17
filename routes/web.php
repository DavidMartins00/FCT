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


Route::get('/', 'SiteController@index');
Route::get('/home', 'SiteController@index')->name('/');
Auth::routes();


Route::get('/admin', 'SiteController@admin');
Route::get('/func', 'SiteController@func');
Route::get('/ger', 'SiteController@ger');

Route::resource('user','UserController');
Route::resource('fornecedores','FornecedoresController');
Route::resource('contrato','ContratosController');
Route::resource('cliente','ClientesController');
Route::resource('produto','ProdutosController');
Route::resource('operadora','OperadorasController');
Route::resource('reparacoes','ReparacoesController');
Route::resource('substituto','SubstitutoController');
Route::resource('status','StatusController');
Route::resource('intervencao','IntervencaoController');
Route::resource('nencomenda','nEncomendaController');
Route::resource('pencomenda','PEncomendaController');
Route::resource('repext','repExtController');

Route::get('/back', 'SiteController@back');
Route::get('/profile', 'SiteController@profile');
Route::get('/tables', 'SiteController@tables');
Route::get('/publicidade', 'SiteController@publicidade');





