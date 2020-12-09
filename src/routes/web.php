<?php

use Illuminate\Support\Facades\Route;

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

// get rid of this
Route::get('/', 'HomeController@index')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('categories', 'CategoryController');

Route::resource('campUsers', 'CampUserController');

Route::resource('camps', 'CampController');

Route::resource('comments', 'CommentController');

Route::resource('items', 'ItemController');

Route::resource('payments', 'PaymentController');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('coupons', 'CouponController');

// non-admin view uses React Router to make it modern and easy improve for react developers. 
// Front-end wild card route 
// A single route managed by React Router 
// will handle the public facing page (unregistered users and parents)
Route::view('/public/{path?}', 'public');