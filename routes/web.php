<?php

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




    Route::get('/', function () {
        return view('welcome');
    });
    Auth::routes();

    Route::get('/home', 'HomeController@check')->middleware('auth')->name('home');
    Route::get('/about_as','HomeController@about_as')->name('about_as');
    Route::get('/contact','HomeController@contact')->name('contact');
    Route::get('/home_user','HomeController@home_user')->name('home_user');


Route::get('/edit_profile','ProfileController@edit_profile')->name('edit_profile');

Route::get('/create_profile','ProfileController@create_profile')->name('create_profile');
    Route::get('/my_profile','ProfileController@my_profile_info')->name('my_profile');
    Route::get('/addition','VendorController@addition')->name('addition');
    Route::post('/create_profile_vendor','ProfileController@create_profile_vendor')->name('create_profile_vendor');

    Route::post('addition','VendorController@add_product')->name('add_product');
    Route::get('/delete_profile/{id}','ProfileController@delete_profile')->name('delete_profile');








