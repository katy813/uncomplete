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
Route::get('dashboard', 'AuthController@dashboard');
*/

Route::get('/', 'ItemController@index');
Route::get('dashboard', 'pagesController@getdashboard');

Route::get('admins-dashboard', 'pagesController@getadminsdashboard');
Route::get('loggedin', 'pagesController@getafterlogin');
Route::get('profile', 'pagesController@getprofile');
Route::resource('items', 'ItemController');
Route::get('items/editstatus/{id}', 'ItemController@editstatus');
Route::get('items/denystatus/{id}', 'ItemController@denystatus');
Route::get('items/soldstatus/{id}', 'ItemController@soldstatus');
Route::get('items/reservestatus/{id}', 'ItemController@reservestatus');
Route::get('items/viewdetails/{id}', 'ItemController@viewdetails');
Route::get('items/viewstate', 'ItemController@viewstate');

Route::get('login', 'AuthController@index');
  Route::post('post-login', 'AuthController@postLogin');
  Route::get('registration', 'AuthController@registration');
  Route::post('post-registration', 'AuthController@postRegistration');
  Route::get('logout', 'AuthController@logout');

Route::resource('seasons', 'CharityseasonController');
Route::get('seasons/viewseasondetails/{id}', 'CharityseasonController@viewseasondetails');

Route::get('adminlogin', 'AuthadminController@index');
Route::post('post-loginadmin', 'AuthadminController@postLogin');
Route::get('addadmin', 'AuthadminController@addadmin');
Route::post('post-addition', 'AuthadminController@postaddition');
Route::get('adminlogout', 'AuthadminController@adminlogout');

