<?php

use App\Job;

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
	$jobs=Job::get();
    return view('welcome',compact('jobs'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@admin');

Route::get('/admin/register','AdminController@adminregister')->name('adminregister');
Route::post('/admin/store','AdminController@adminstore')->name('adminstore');


Route::get('/chat', 'ChatsController@index')->name('chat');
Route::get('/messages', 'ChatsController@fetchMessages');
Route::post('/messages', 'ChatsController@sendMessage');

Route::post('/jobseeker/save','JobSeekerController@save')->name('save');
Route::get('/admin/job','JobController@adminindex')->name('jobadmin');
Route::get('/admin/company','CompanyController@adminindex')->name('companyadmin');
Route::get('/admin/jobseeker','JobSeekerController@adminindex')->name('jobseekeradmin');


Route::get('/job/seek/{id}','JobController@get')->name('get');
Route::get('/job/download/{id}','JobSeekerController@download')->name('download');
Route::get('/jobseeker/update/{id}','JobSeekerController@updateStatus')->name('updateStatus');
Route::get('/jobseeker/remove/{id}','JobSeekerController@remove')->name('remove');
Route::get('/job/update/{id}','JobController@statusUpdate')->name('update');

Route::resource('/job','JobController');
Route::resource('/jobseeker','JobSeekerController');
Route::resource('/company','CompanyController');



