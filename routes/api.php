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

use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('category')->group(function() {
    Route::post('/', 'CategoryController@create');
    Route::put('{category}', 'CategoryController@update');
    Route::delete('{category}', 'CategoryController@delete');
    Route::get('{category}', 'CategoryController@get');
    Route::get('/', 'CategoryController@all');
});

Route::prefix('article')->group(function() {
    Route::post('/', 'ArticleController@create');
    Route::put('{article}', 'ArticleController@update');
    Route::delete('{article}', 'ArticleController@delete');
    Route::get('{article}', 'ArticleController@get');
    Route::get('/', 'ArticleController@all');
});
