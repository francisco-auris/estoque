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

    if( Auth::check() ){
        return redirect('/home');
    }else {
        return redirect('/login');
    }
});

Route::get('/teste', 'RefrigeranteController@teste')->name('teste');
//Route::post('/login', 'LoginController@entrar')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cadastro', function(){
    return view('cadastro');
})->name('cadastro');

Route::get('/lista', 'ProdutoController@getLista')->name('lista');
Route::post('/novo', 'ProdutoController@actionCreate')->name('novo');

