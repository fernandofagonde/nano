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
    | Pessoas
    |--------------------------------------------------------------------------
    */
    $prefix = 'pessoas';
    $controller = 'PessoasController';

    Route::group(['prefix' => $prefix, 'as' => $prefix . '.'], function () use ($controller) {
        Route::get('/', ['as' => 'index', 'uses' => $controller . '@index']);
        Route::get('/create', ['as' => 'create', 'uses' => $controller . '@create']);
        Route::post('/', ['as' => 'store', 'uses' => $controller . '@store']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => $controller . '@edit']);
        Route::put('/{id}', ['as' => 'update', 'uses' => $controller . '@update']);
        Route::delete('/{id}', ['as' => 'destroy', 'uses' => $controller . '@destroy']);
    });

    /*
    |--------------------------------------------------------------------------
    | Papéis
    |--------------------------------------------------------------------------
    */
    $prefix = 'papeis';
    $controller = 'PapeisController';

    Route::group(['prefix' => $prefix, 'as' => $prefix . '.'], function () use ($controller) {
        Route::get('/', ['as' => 'index', 'uses' => $controller . '@index']);
        Route::get('/create', ['as' => 'create', 'uses' => $controller . '@create']);
        Route::post('/', ['as' => 'store', 'uses' => $controller . '@store']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => $controller . '@edit']);
        Route::put('/{id}', ['as' => 'update', 'uses' => $controller . '@update']);
        Route::delete('/{id}', ['as' => 'destroy', 'uses' => $controller . '@destroy']);
    });

    /*
    |--------------------------------------------------------------------------
    | Grupos
    |--------------------------------------------------------------------------
    */
    $prefix = 'grupos';
    $controller = 'GruposController';

    Route::group(['prefix' => $prefix, 'as' => $prefix . '.'], function () use ($controller) {
        Route::get('/', ['as' => 'index', 'uses' => $controller . '@index']);
        Route::get('/create', ['as' => 'create', 'uses' => $controller . '@create']);
        Route::post('/', ['as' => 'store', 'uses' => $controller . '@store']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => $controller . '@edit']);
        Route::put('/{id}', ['as' => 'update', 'uses' => $controller . '@update']);
        Route::delete('/{id}', ['as' => 'destroy', 'uses' => $controller . '@destroy']);
        Route::get('/{id}/participantes', ['as' => 'participantes', 'uses' => $controller . '@participantes']);
        Route::get('/{id}/adicionarParticipantes', ['as' => 'adicionarParticipantes', 'uses' => $controller . '@adicionarParticipantes']);
    });
});
