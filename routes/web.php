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

Route::post('/change','\App\Http\Controllers\UserController@change');

Route::group(['middleware'=>'guest'], function (){
    Route::post('/login', '\App\Http\Controllers\UserController@login')->name('login');
    Route::get('/register','\App\Http\Controllers\UserController@create');
    Route::get('/login','\App\Http\Controllers\UserController@userLogin')->name('userLogin');
    Route::post('/register','\App\Http\Controllers\UserController@store');
});

Route::group(['middleware'=>'auth'], function (){
    Route::get('/logout', '\App\Http\Controllers\UserController@logout')->name('logout');
    Route::get('/cabinet', '\App\Http\Controllers\CabinetController@enterCabinet');
});

Route::get('/sort', '\App\Http\Controllers\SortController@miniSerach');

Route::post('/send_message', '\App\Http\Controllers\MessageController@store');

Route::get('/send_message', function (){
    return redirect(route('home'));
});

Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
    Route::get('/autos',"\App\Http\Controllers\AdminController@autos")->name('admin_autos');
    Route::get('/users',"\App\Http\Controllers\AdminController@users")->name('admin_users');
    Route::post('/userDelete', '\App\Http\Controllers\UserController@userDelete')->name('admin_deleteUser');
});



/*Конроллеры под ajax*/

Route::get('/ajax/getUser','\App\Http\Controllers\CabinetController@getUser')->name('ajaxGetUser');
Route::get('/ajax/getAllCars','\App\Http\Controllers\AllCarsController@getAllCars')->name('getAllCars');
Route::get('/ajax/getMyCars','\App\Http\Controllers\CabinetController@getMyAutos');
