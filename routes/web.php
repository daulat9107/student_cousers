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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/course/store', 'CourseController@store');
Route::get('/courses/view', 'CourseController@view');
Route::get('/admin/dashboard', 'Admin\DashboardController@index');
Route::get('/admin/students', 'Admin\DashboardController@courseWiseNumberOfStudents');
