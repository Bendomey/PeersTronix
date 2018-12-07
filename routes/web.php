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
  Route::get('team','ViewController@team')->name('team');
  Route::get('contact_us','ViewController@contactUs')->name('contact_us');
  Route::get('services','ViewController@services')->name('services');
});

Route::post('save_contact','ContactUsController@createContact')->name('save');
