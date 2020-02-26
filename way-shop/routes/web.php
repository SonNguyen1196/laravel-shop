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

// Route::get('request', 'testcontroller@index')

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('users', function () {
//        // route nay se co duong dan là admin/users
//     });
// });

Route::match(['get', 'post'], '/', 'IndexController@index' );
//Route::match(['get', 'post'], '/admin', 'AdminController@login');
Auth::routes();
Route::group(['prefix'     => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/login', 'HomeController@index')->name('home');
//    Route::match(['get', 'post'], '/admin/dashboard', 'AdminController@dashboard')->name('dashboard');
});
