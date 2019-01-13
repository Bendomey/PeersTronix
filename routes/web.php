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
  Route::get('single_product/{id}','ViewController@single_product')->name('single_product/{id}');
  Route::post('buy_product','ProductController@buy_product')->name('buy_product');
});

Route::group([],function(){
  Route::get('dashboard','DashboardController@index')->name('dashboard');
  Route::get('dashboard/profile','DashboardController@profile_view')->name('dashboard/profile');
  Route::post('update_profile','DashboardController@update_profile')->name('update_profile');
  Route::post('update_password','DashboardController@update_password')->name('update_password');
  Route::post('update_profile_img','DashboardController@update_profile_img')->name('update_profile_img');
  Route::get('dashboard/bookings','DashboardController@booking_view')->name('dashboard/bookings');
  Route::get('dashboard/add_product','DashboardController@add_product_view')->name('dashboard/add_product');
  Route::post('dashboard/add_product/phase_1','ProductController@add_product')->name('dashboard/add_product/phase_1');
  Route::get('dashboard/view_products','DashboardController@view_products')->name('dashboard/view_products');
  Route::get('dashboard/sold_products','DashboardController@view_sold_products')->name('dashboard/sold_products');
  Route::get('sell_product/{id}/{productName}','ProductController@sell_product');
  Route::get('dashboard/edit_product/{product_id}','DashboardController@edit_product_view')->name('dashboard/edit_product/{product_id}');
  Route::post('dashboard/update_product','ProductController@update_product')->name('update_product');
  Route::get('dashboard/buyer_info','DashboardController@buyer_info_view')->name('dashboard/buyer_info');
  Route::get('delete_buyer_request/{id}','DashboardController@delete_buyer_request');
  Route::get('delete_product/{id}','ProductController@destroy');
  Route::get('make_available/{id}','ProductController@make_available');
});

Route::post('save_contact','ContactUsController@createContact')->name('save_contact');

Auth::routes();
Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
