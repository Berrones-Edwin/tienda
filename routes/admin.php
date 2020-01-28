<?php

Route::group(['prefix'=>'/admin','namespace'=>'Admin','middleware'=>['auth','isadmin']],function(){

    Route::get('/','DashboardController@dashboard')->name('dashboard');
});