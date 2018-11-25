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

Route::get('/', function () {
    return view('welcome');
});

//Dashboard
Route::get('/admin', 'DashboardController@index');

// Teachers 
Route::get('/teacher/view-all', 'TeacherController@index');
Route::get('/teacher/create' , 'TeacherController@create');
Route::get('/teacher/edit' , 'TeacherController@edit');
Route::get('/teacher/profile' , 'TeacherController@profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
