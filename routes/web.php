<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');

// Route::get('/', function(){
//     return view('pages/index');
// });

Route::get('about', 'PagesController@about');

Route::get('new_report', 'PagesController@new_report');

Route::get('login', 'PagesController@login');

Route::get('dash', 'PagesController@dash');

Route::get('thanks', 'PagesController@thanks');

// Route::get('users', 'UsersController@users');

// Route::get('users/create', 'UsersController@create');

// Route::post('users', 'UsersController@store');

Route::resource('reports', 'ReportsController');

Route::resource('users', 'UsersController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
