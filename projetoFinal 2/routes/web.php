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
// Route::get('index/{indec?}', 'BemvindoController@ola');
// Route::get('edit/{a?}', 'PessoaController@edit');
// Route::get('deletar/{indec2?}', 'PessoaController@deletar');
// Route::get('cadastrar/', 'PessoaController@cadastrar');
// Route::get('consultar/', 'PessoaController@consultar');
// Route::get('photos/{id?}', 'PhotosController@index');
// Route::get('phot/{id?}', 'PhotosController@show');
// Route::get('brasil/', 'PhotosController@Brasil');


//Route::get('/','MusicaController@index')->name('index');
Route::get('/cadastrar','MusicaController@create')->name('cadastrar')->middleware('auth');
Route::get('/edit/{id}','MusicaController@edit')->name('edit')->middleware('auth');
Route::post('/salvar','MusicaController@store')->name('salvar')->middleware('auth');
Route::put('/update/{id}','MusicaController@update')->name('update')->middleware('auth');
Route::get('/destroy/{id}','MusicaController@destroy')->name('destroy')->middleware('auth');

Route::get('/search','MusicaController@search')->name('search');

Route::get('/', 'MusicaController@index')->name('musicas');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
