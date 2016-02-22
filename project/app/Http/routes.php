<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::resource('products','ProductsController');
Route::get('/','WelcomeController@index');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () 
{
    Route::get('home','WelcomeController@index');
    Route::get('about','WelcomeController@about');
    Route::get('contact','WelcomeController@contact');
    Route::get('products','ProductsController@index');
    Route::get('products/create','ProductsController@create');
    Route::post('products/store','ProductsController@store');
    Route::get('products/{id}/edit','ProductsController@edit');
    Route::post('products/{id}/update','ProductsController@update');
    Route::post('products/{id}/delete','ProductsController@delete');
    Route::get('products/{producttype}','ProductsController@show');
	Route::get('products/{producttype}/{id}','ProductsController@buy');
  
});
