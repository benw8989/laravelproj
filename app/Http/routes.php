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
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/chords', 'PagesController@chords');
/*Route::get('/users/{id}/{name}', function ($id ,$name) {
    return 'This is user '.$name.' with an id of '.$id;
});
*/
