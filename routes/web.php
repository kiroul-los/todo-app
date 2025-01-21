<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('todos.home');
});

Route::get('/todos','App\Http\Controllers\todosController@index');
Route::get('/todos/{todo}','App\Http\Controllers\todosController@show');
Route::get('/create','App\Http\Controllers\todosController@create');
Route::post('/create','App\Http\Controllers\todosController@store');
Route::get('/todos/{todo}/edit','App\Http\Controllers\todosController@edit');
Route::post('/edit/{todo}','App\Http\Controllers\todosController@update');
Route::get('/todos/{todo}/delete','App\Http\Controllers\todosController@destroy');
Route::get('/todos/{todo}/complete','App\Http\Controllers\todosController@complete');
