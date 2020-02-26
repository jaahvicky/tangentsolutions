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

// get list of categories
Route::get('categories', 'CategoryController@index');
// get specific Categories
Route::get('category/{id}', 'CategoryController@show');
// delete a category
Route::delete('category/{id}', 'CategoryController@destroy');
// update existing category
Route::put('task', 'CategoryController@store');
// create new Category
Route::post('task', 'CategoryController@store');