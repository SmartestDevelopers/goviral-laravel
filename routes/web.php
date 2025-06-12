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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontController@index');
Route::get('/about', 'FrontController@about');
Route::get('/services', 'FrontController@services');
Route::get('/seo', 'FrontController@seo');
Route::get('/contact-us', 'FrontController@contact');
Route::get('/our-team', 'FrontController@ourTeam');
Route::get('/pricing', 'FrontController@pricing');
Route::get('/portfolio', 'FrontController@portfolio');
Route::get('/blog', 'FrontController@blog');
Route::get('/faq', 'FrontController@faq');



