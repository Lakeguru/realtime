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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/try','AdminController@try');
Route::get('/pin','PinController@createpin');
Route::Post('/pin','PinController@storepin')->name('postpin');
Route::get('/listpost','PostController@listmsg');
Route::get('/readmsg','PostController@readmsg');
// Route::get('/compose','PostController@compose');
// Route::get('/compose/sent','PostController@composesent');

Route::get('/signin','SessionController@userlogin');
Route::post('/signin','SessionController@postuserlogin')->name('postuserlogin');
Route::get('signup','RegistrationController@signup');
Route::post('signup','RegistrationController@postsignup')->name('postusersignup');
Route::get('home','RegistrationController@userhome')->name('home');
Route::get('alluser','RegistrationController@alluser');



Route::prefix('admin')->group(function() {
    
    Route::get('login', 'AdminController@adminlogin');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    
    
    // Route::get('/', 'AdminController@index')->name('admin.home');
    // Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    // Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    // Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    // Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    // Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    // Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    // Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
