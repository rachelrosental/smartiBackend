<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/books', 'App\Http\Controllers\ApiController@getAllBooks');
Route::get('/books/{id}', 'App\Http\Controllers\ApiController@getBook');
Route::post('/books', 'App\Http\Controllers\ApiController@createBook');
Route::put('/books/{id}', 'App\Http\Controllers\ApiController@updateBook');
Route::delete('/books/{id}','App\Http\Controllers\ApiController@deleteBook');

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
