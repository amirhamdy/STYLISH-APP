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

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');
Route::get('/index', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/profile', ['middleware' => 'auth', 'uses' => 'PagesController@profile']);
Route::get('/terms', 'PagesController@terms');

Route::post('/', 'Auth\LoginController@login');
Route::post('/home', 'Auth\LoginController@login');
Route::post('/index', 'Auth\LoginController@login');
Route::post('/about', 'Auth\LoginController@login');
Route::post('/contact', 'Auth\LoginController@login');
Route::post('/gallery', 'Auth\LoginController@login');
Route::post('/profile', 'Auth\LoginController@login');
Route::post('/terms', 'Auth\LoginController@login');

Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');

//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('login', 'PagesController@home');
Route::post('login', 'Auth\LoginController@login');

Route::get('google_signin', 'PagesController@google_signin');
Route::post('google_signin', 'PagesController@google_signin_submit');
Route::get('facebook_signin', 'PagesController@facebook_signin');
Route::post('facebook_signin', 'PagesController@google_signin_submit');

Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login']);

Route::get('logout', 'Auth\LoginController@logout');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/users', 'PagesController@users');
Route::get('/users/{id}', 'PagesController@user');






