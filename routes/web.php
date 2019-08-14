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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@admin');

Route::get('/admin/register','AdminController@adminregister')->name('adminregister');
Route::post('/admin/store','AdminController@adminstore')->name('adminstore');


Route::get('/chat', 'ChatsController@index');
Route::get('/messages', 'ChatsController@fetchMessages');
Route::post('/messages', 'ChatsController@sendMessage');

Route::get('/job/{id}','JobController@get')->name('get');

Route::resource('/job','JobController');
Route::resource('/jobseeker','JobSeekerController');
Route::resource('/company','CompanyController');

Route::post('/jobseeker/save','JobSeekerController@save')->name('save');



