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

Route::get('/', function () {
    return view('index');
});

Route::resource('clientes', 'clientesController');

Route::get('pesquisar', function () {
    return view('pesquisar');
});

Route::get('cadastrar', function () {
    return view('cadastrar');
});

Route::get('teste', function(){
    $dados = DB::table('clientes')->where('email', 'cli@gmail.com')->get();
    return $dados;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');