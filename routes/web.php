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

// REGISTRO E INICIO DE SESION
Route::group(['namespace'=>'Auth'],function(){
    
    // Route::get('login','LoginController@index')->name('login');
    // Route::post('login','LoginController@login')->name('login-post');
    // Route::get('logout','LoginController@logout')->name('logout');
    
    // Route::get('registro','RegistroController@showRegistrationForm')->name('register');
    // Route::post('registro','RegistroController@register')->name('registro-guardar');

    Route::get('/','LoginController@showLoginForm')->name('login');
    Route::post('login','LoginController@login')->name('login.post');
    Route::get('logout','LoginController@logout')->name('logout');

    Route::get('registro','RegisterController@showRegistrationForm')->name('registro.form');
    Route::post('registro','RegisterController@register')->name('registro.post');
    // Route::post('registro',function(){
    //     return 'hola';
    // })->name('registro.guardar');

});

Route::get('home',function(){
    return view('welcome');
});


