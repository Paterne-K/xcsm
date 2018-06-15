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

Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/logout','DHomeController@index');
Route::get('/cours','HomeController@cours');
Route::get('/form',function(){
    return view('form');
});


Route::get('/forms', function() {
    echo Form::open(array('url' => 'test'));
    echo Form::close();
});

Route::resource('/save', 'HomeController');
Route::get('/search', 'HomeController@search');
Route::get('/lecture', 'HomeController@lecture');

Route::resource('/users','UserController');
Route::resource('/notifications','NotificationController');
Route::get('nots',function (){
    return view('notification');
});
Route::get('/cours/navigation', 'NavigationController@lectureNavigation');

Route::resource('/*', ' ErrorController@lectureNavigation');


