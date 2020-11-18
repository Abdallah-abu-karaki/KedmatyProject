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


    Route::get('/edit_profile/{id}','ProfileController@edit_profile')->name('edit_profile');

    Route::get('/create_profile','ProfileController@create_profile')->name('create_profile');
    Route::get('/my_profile','ProfileController@my_profile_info')->name('my_profile');
    Route::get('/addition','VendorController@addition')->name('addition');
    Route::post('/create_profile_vendor','ProfileController@create_profile_vendor')->name('create_profile_vendor');
    Route::post('addition','VendorController@add_product')->name('add_product');
    Route::get('/delete_profile/{id}','ProfileController@delete_profile')->name('delete_profile');


    Route::post('/edit_profile/update/{id}','ProfileController@update_profile')->name('update_profile');
    Route::get('/deleteItem/{id}','VendorController@deleteItem')->name('deleteItem');

###########################################Start Manage Admain Routes #####################################
Route::get('/manage_admain','admainController@manage_admain')->name('manage_admain');
Route::get('/add_admain','admainController@add_admain')->name('add_admain');
Route::post('/insert_admain','admainController@insert_admain')->name('insert_admain');
Route::get('/delete_admain/{id}','admainController@delete_admain')->name('delete_admain');
Route::get('/edit_admain/{id}','admainController@edit_admain')->name('edit_admain');
Route::post('/update_admain/{id}','admainController@update_admain')->name('update_admain');
########################################## End Manage Admain Routes ########################################

######################################### Start Manage vendor Routes #######################################
Route::get('/manage_vendor','admainController@manage_vendor')->name('manage_vendor');
Route::get('/delete_vendor/{id}','admainController@delete_vendor')->name('delete_vendor');
########################################## End Manage vendor Routes ########################################

######################################### Start Manage Item Route ##########################################
Route::get('/manage_item','admainController@manage_item')->name('manage_item');
Route::get('/show_item_vendor/{id}','admainController@show_item_vendor')->name('show_item_vendor');
######################################### End Manage Item Route ############################################
