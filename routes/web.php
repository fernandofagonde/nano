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

Route::get('login', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index');

    /*
    |--------------------------------------------------------------------------
    | Clientes
    |--------------------------------------------------------------------------
    */
    $prefix = 'clientes';
    $controller = 'ClientesController';

    Route::group(['prefix' => $prefix, 'as' => $prefix . '.'], function () use ($controller) {
        Route::get('/', ['as' => 'index', 'uses' => $controller . '@index']);
        Route::get('/create', ['as' => 'create', 'uses' => $controller . '@create']);
        Route::post('/', ['as' => 'store', 'uses' => $controller . '@store']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => $controller . '@edit']);
        Route::put('/{id}', ['as' => 'update', 'uses' => $controller . '@update']);
        Route::delete('/{id}', ['as' => 'destroy', 'uses' => $controller . '@destroy']);
    });
    
});

    /*
    |--------------------------------------------------------------------------
    | URL
    |--------------------------------------------------------------------------
    */
    $prefix = 'clientes';
    $controller = 'ClientesController';

        Route::get('/{cliente}', ['as' => 'public', 'uses' => $controller . '@public']);
  
