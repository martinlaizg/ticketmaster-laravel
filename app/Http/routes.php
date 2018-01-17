<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'HomeController@adminZone');

Route::group(['prefix' => 'event'], function() {
    Route::post('create', 'EventController@createEvent');
    Route::get('create', 'EventController@createEventView');
    Route::get('delete/{id}', 'EventController@deleteEvent');
});

Route::group(['prefix' => 'category'], function() {
    Route::post('create', 'CategoryController@createCategory');
    Route::get('create', 'CategoryController@createCategoryView');
    Route::get('delete/{id}', 'CategoryController@deleteCategory');
});

Route::group(['prefix' => 'genre'], function() {
    Route::post('create', 'GenreController@createGenre');
    Route::get('create', 'GenreController@createGenreView');
    Route::get('delete/{id}', 'GenreController@deleteGenre');
});


