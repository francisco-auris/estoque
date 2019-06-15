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
<<<<<<< HEAD
    if( Auth::check() ){
        return redirect('/home');
    }else {
        return redirect('/login');
    }
});

//Route::post('/login', 'LoginController@entrar')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lista', 'RefrigeranteController@getLista')->name('lista');
=======
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 65a28a1d48a43a11f902f6a498812896abfa0168
