<?php

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

// Route::get('/', ['as' => 'login.login', 'uses' => 'LoginController@login']);
Route::post('/login/entrar', ['as' => 'login.entrar', 'uses' => 'LoginController@entrar']);
Route::post('/login/sair', ['as' => 'login.sair', 'uses' => 'LoginController@sair']);

Route::get('/home/historico', ['as' => 'home.historico', 'uses' => 'HomeController@historico']);
Route::get('/home/individual', ['as' => 'home.individual', 'uses' => 'HomeController@individual']);
Route::get('/home/dupla', ['as' => 'home.dupla', 'uses' => 'HomeController@dupla']);


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home/listar', ['as' => 'home.home', 'uses' => 'HomeController@listar']);
