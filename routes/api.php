<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::namespace('Api')->name('api.')->group(function(){
    Route::prefix('/tasks')->group(function(){
        Route::get('/', 'TasksController@index')->name('index_tasks');
        Route::get('/{id}', 'TasksControllerritiesController@show')->name('single_tasks');
        Route::post('/', 'TasksController@store')->name('store_tasks');
        Route::put('/{id}','TasksController@update')->name('update_tasks');
        Route::delete('/{id}','TasksController@delete')->name('delete_tasks');
    });
});