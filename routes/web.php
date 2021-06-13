<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::POST('store', 'TaskContoller@store');
Route::get('edit/{id}', 'TaskContoller@edit');
Route::POST('edits/{id}', 'TaskContoller@edits');
Route::get('delete/{id}', 'TaskContoller@delete');
Route::get('finaldata', 'TaskContoller@finaldata');


