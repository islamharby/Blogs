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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/add','manageController@AddArticle');
Route::post('/add','manageController@AddArticle');

Route::get('/view','manageController@view');
Route::get('/view/{id}','manageController@remove');

Route::get('/read/{id}','manageController@read');
Route::post('/read/{id}','manageController@read');


Route::get('/edit/{id}','manageController@edit');
Route::post('/edit/{id}','manageController@edit');


