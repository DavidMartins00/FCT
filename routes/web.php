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

Route::get('/back', 'SiteController@back');
Route::get('/icon', 'SiteController@icon');
Route::get('/map', 'SiteController@map');
Route::get('/maps', 'SiteController@maps');
Route::get('/notification', 'SiteController@notification');
Route::get('/rt', 'SiteController@rt');
Route::get('/tables', 'SiteController@tables');
Route::get('/typo', 'SiteController@typo');
Route::get('/upgrade', 'SiteController@upgarde');
Route::get('/dash', 'SiteController@dash');
