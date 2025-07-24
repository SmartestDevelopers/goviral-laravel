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
Route::get('/smm', 'FrontController@smm');
Route::get('/webdesign', 'FrontController@webdesign');
Route::get('/webdevelopment', 'FrontController@webdevelopment');
Route::get('/orm', 'FrontController@orm');
Route::get('/ppc', 'FrontController@ppc');
Route::get('/seoaudit', 'FrontController@seoaudit');
Route::get('/uiux', 'FrontController@uiux');
Route::get('/wordpress', 'FrontController@wordpress');
Route::get('/graphicdesign', 'FrontController@graphicdesign');
Route::get('/contact-us', 'FrontController@contact');
Route::get('/our-team', 'FrontController@ourTeam');
Route::get('/pricing', 'FrontController@pricing');
Route::get('/portfolio', 'FrontController@portfolio');
Route::get('/blog', 'FrontController@blog');
Route::get('/faq', 'FrontController@faq');
Route::get('/privacypolicy', 'FrontController@privacypolicy');

Route::get('/disclaimer', 'FrontController@disclaimer');

Route::get('/terms', 'FrontController@terms');
Route::post('/submit-form', 'FrontController@formSubmit');




