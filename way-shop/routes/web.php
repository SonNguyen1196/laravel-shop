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
Route::get('admin', function (){
    return view('admin.dashboard');
});
Auth::routes();

//Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
////    Login
//    Route::get('/login', 'HomeController@index')->name('home');
//    //Dashboard
//    Route::get('/dashboard', function (){
//        return view('admin.dashboard');
//    })->name('dashboard');
//    //Permission
//    Route::group(['prefix'=> 'permissions', 'as' => 'permission.'], function (){
//        Route::get('/', 'PermissionController@index')->name('index');
//        Route::get('/create', 'PermissionController@create')->name('create');
//        Route::post('/', 'PermissionController@store')->name('store');
//        Route::get('/{id}/edit', 'PermissionController@edit')->name('edit');
//        Route::put('/{id}', 'PermissionController@update')->name('update');
//        Route::post('/{id}', 'PermissionController@destroy')->name('destroy');
//    });
//
//    //Roles
//
//    Route::group(['prefix'=> 'roles', 'as' => 'role.'], function (){
//        Route::get('/', 'RoleController@index')->name('index');
//        Route::get('/create', 'RoleController@create')->name('create');
//        Route::post('/', 'RoleController@store')->name('store');
//        Route::get('/{id}', 'RoleController@show')->name('show');
//        Route::get('/{id}/edit', 'RoleController@edit')->name('edit');
//        Route::put('/{id}', 'RoleController@update')->name('update');
//        Route::post('/{id}', 'RoleController@destroy')->name('destroy');
//    });
//
//    Route::group(['prefix'=> 'users', 'as' => 'user.'], function (){
//        Route::get('/', 'UserController@index')->name('index');
//        Route::get('/list-users', 'UserController@getUsers')->name('list-users');
//        Route::get('/create', 'UserController@create')->name('create');
//        Route::post('/', 'UserController@store')->name('store');
//        Route::get('/{id}', 'UserController@show')->name('show');
//        Route::get('/{id}/edit', 'UserController@edit')->name('edit');
//        Route::put('/{id}', 'UserController@update')->name('update');
//        Route::post('/{id}', 'UserController@destroy')->name('destroy');
//    });
//
//    //Medias
//    Route::group(['prefix'=> 'medias', 'as' => 'media.'], function (){
//        Route::get('/', 'MediasController@index')->name('index');
//    });
//});

