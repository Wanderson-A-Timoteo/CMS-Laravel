<?php

Route::get('/', 'Site\HomeController@index');

Route::prefix('painel')->group(function () {
    Route::get('/', 'Admin\HomeController@index')->name('admin');
    Route::get('login', 'Admin\Auth\LoginController@index')->name('login');
});
