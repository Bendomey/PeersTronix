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

// Route::get('/', function () {
//     return view('welcome');
//   });


Route::group([],function(){
  Route::get('/', 'ViewController@index')->name('/');
  Route::get('testimonials','ViewController@testimonials')->name('testimonials');
  Route::get('about_us','ViewController@about_us')->name('about_us');
  Route::get('contact_us','ViewController@contactUs')->name('contact_us');
  Route::get('services','ViewController@services')->name('services');
  Route::get('products','ViewController@products')->name('products');
  Route::get('single_product','ViewController@single_product')->name('single_product');
});

Route::group([],function(){
  Route::get('dashboard','DashboardController@index')->name('dashboard');
  Route::get('dashboard/profile','DashboardController@profile_view')->name('dashboard/profile');
});

Route::post('save_contact','ContactUsController@createContact')->name('save');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
