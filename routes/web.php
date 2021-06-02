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

Route::get('/', '\App\Http\Controllers\HomeController@index' )->name('home');

Route::resource('/auto','\App\Http\Controllers\AutoController');

Route::get('/register','\App\Http\Controllers\UserController@create');
Route::post('/register','\App\Http\Controllers\UserController@store');
Route::post('/change','\App\Http\Controllers\UserController@change');

Route::get('/userlogin','\App\Http\Controllers\UserController@userLogin');

Route::get('/cabinet', '\App\Http\Controllers\CabinetController@enterCabinet');

Route::post('/login', '\App\Http\Controllers\UserController@login')->name('login');

Route::get('/logout', '\App\Http\Controllers\UserController@logout')->name('logout');


/*Конроллеры под ajax*/

Route::get('/ajax/getUser','\App\Http\Controllers\CabinetController@getUser')->name('ajaxGetUser');
Route::get('/ajax/getAllCars','\App\Http\Controllers\AllCarsController@getAllCars')->name('getAllCars');
