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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/courses', 'PagesController@courses');
Route::get('/contacts', 'PagesController@contacts');

Route::get('/about', function () {
    return view('pages.about');
});

Route::resource('posts', 'PostController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
