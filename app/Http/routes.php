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

Route::get('/', 'HomeController@home');

Route::auth();

Route::get('/unauthorized', 'HomeController@badRequest');

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'event'], function() {
	Route::any('/', 'EventController@getEvents');
	Route::get('{id}', 'EventController@getEvent');
});

Route::group(['prefix' => 'category'], function() {
    //Route::get('{id}', 'CategoryController@createCategory');
});

Route::group(['prefix' => 'genre'], function() {
    //Route::get('{id}', 'GenreController@createGenre');
});

Route::group(['prefix' => 'ubication'], function() {
    //Route::get('{id}', 'UbicationController@createUbication');
});

Route::group(['prefix' => 'show'], function() {
	Route::get('{id}', 'ShowController@getShow');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
	Route::get('profile', 'UserController@getProfile');

	Route::group(['middleware' => 'only'], function () {
		Route::get('update/{id}', 'UserController@getUpdateForm');
		Route::post('update/{id}', 'UserController@updateForm');
	});
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'adminzone']], function () {
	
	Route::get('/', 'HomeController@adminZone');
	
	Route::group(['prefix' => 'event'], function() {
		Route::post('create', 'EventController@createEvent');
		Route::get('create', 'EventController@createEventView');
		Route::get('delete/{id}', 'EventController@deleteEvent');
		Route::post('edit/{id}', 'EventController@editEvent');
		Route::get('edit/{id}', 'EventController@editEventView');
	});

	Route::group(['prefix' => 'category'], function() {
		Route::post('create', 'CategoryController@createCategory');
		Route::get('create', 'CategoryController@createCategoryView');
		Route::get('delete/{id}', 'CategoryController@deleteCategory');
		Route::post('edit/{id}', 'CategoryController@editCategory');
		Route::get('edit/{id}', 'CategoryController@editCategoryView');
	});

	Route::group(['prefix' => 'genre'], function() {
		Route::post('create', 'GenreController@createGenre');
		Route::get('create', 'GenreController@createGenreView');
		Route::get('delete/{id}', 'GenreController@deleteGenre');
		Route::post('edit/{id}', 'GenreController@editGenre');
		Route::get('edit/{id}', 'GenreController@editGenreView');
	});

	Route::group(['prefix' => 'ubication'], function() {
		Route::post('create', 'UbicationController@createUbication');
		Route::get('create', 'UbicationController@createUbicationView');
		Route::get('delete/{id}', 'UbicationController@deleteUbication');
		Route::post('edit/{id}', 'UbicationController@editUbication');
		Route::get('edit/{id}', 'UbicationController@editUbicationView');
	});

	Route::group(['prefix' => 'show'], function() {
		Route::post('create', 'ShowController@createShow');
		Route::get('create', 'ShowController@createShowView');
		Route::get('delete/{id}', 'ShowController@deleteShow');
		Route::post('edit/{id}', 'ShowController@editShow');
		Route::get('edit/{id}', 'ShowController@editShowView');
	});

	Route::group(['prefix' => 'user'], function() {
		Route::get('create', 'UserController@createUserView');
		Route::post('create', 'UserController@createUser');
		Route::get('delete/{id}', 'UserController@deleteUser');
	});
});

