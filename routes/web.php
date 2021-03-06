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


Route::get('/', 'PageController@index');
Route::get('home', 'PageController@index')->name('home');
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@getContact');
Route::post('contact', 'PageController@postContact');

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author')->group(function() {
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
  Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
  Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
  Route::resource('/posts', 'PostController');
  Route::resource('/categories', 'CategoryController');
  Route::resource('/tags', 'TagController');
  Route::resource('/images', 'ImageController');
});

Route::get('blog', 'BlogController@index')->name('blog');
Route::get('blog.{id}.show', 'BlogController@show')->name('blog.show');
