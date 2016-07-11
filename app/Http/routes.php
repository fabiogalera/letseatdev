<?php
Route::group(['middleware' => ['auth']], function () {

    Route::get('/login', 'PagesController@login');

    Route::get('funcionarios/json', array('as' => 'funcionarios.ajax', 'uses' => 'FuncionariosController@ajax'));
    Route::resource("funcionarios", "FuncionariosController");

    //Route::get("/funcionarios","FuncionariosController@index");
    //Route::get("/funcionarios/create","FuncionariosController@index");

    Route::get('/', 'PagesController@home');
    Route::get('/voucher', 'PagesController@voucher');
    Route::get('/espera', 'PagesController@espera');
    Route::get('/fechamento', 'PagesController@fechamento');

    Route::get('/logoff', 'PagesController@logoff');
    Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

});