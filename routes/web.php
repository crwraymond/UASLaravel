<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Home saat di root

Auth::routes();
Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

//User
Route::get('/profile', 'UserController@index')->name('profile')->middleware('User');
Route::post('/updateprofile/{id}', 'UserController@update')->middleware('User');
Route::get('/blog', 'UserController@blog')->name('blog')->middleware('User');
Route::get('/addblog', 'UserController@blogpage')->middleware('User');
Route::post('/addblogstory', 'UserController@store')->middleware('User');

Route::get('/detail/{id}', 'HomeController@detail');

Route::get('/deletedetail/{id}', 'UserController@deleteblog')->middleware('Admin');
Route::get('/adminuser', 'AdminController@listuser')->name('deleteuser')->middleware('Admin');

Route::get('/deleteuser/{id}', 'AdminController@delete')->middleware('Admin');
Route::get('/category/{id}', 'CategoryController@detail');
Route::get('/aboutus', 'HomeController@aboutus');







