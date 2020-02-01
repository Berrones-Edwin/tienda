<?php

Route::group(['prefix'=>'/admin','namespace'=>'Admin','middleware'=>['auth','isadmin']],function(){

    Route::get('/','DashboardController@dashboard')->name('dashboard');
    Route::get('/users','UserController@index')->name('users.index');
    
    //Module Products
    Route::get('/products','ProductController@index')->name('products.index');
    Route::get('/products/create','ProductController@create')->name('products.create');

    

});