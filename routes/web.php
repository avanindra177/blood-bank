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
    return view('auth.login');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('verified');

Route::get('home', 'PostsController@index')->middleware('verified');

Route::get('/about', 'HomeController@about')->middleware('verified');

/* Route::get('/contact', function () {
    return view('contact');
})->middleware('verified'); */

// Start of admin routes
Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
// end of admin routes

// Post controller routes
Route::resource('posts', 'PostsController');

// Contact controller routes
Route::resource('contact', 'ContactsController');


// blood center routes
Route::get('center', 'BloodCenterController@index');
Route::get('center/new', 'BloodCenterController@addCenter');
Route::post('center/new', 'BloodCenterController@storeCenter');


//blood request routes
Route::get('request-blood', 'RequestController@index');
Route::post('request-blood', 'RequestController@store');
Route::get('who-needs-blood', 'RequestController@show');
Route::get('request-details/{id}', 'RequestController@requestDetails');


// donor routes
Route::get('donors', 'HomeController@donors');
Route::get('donor/{id}', 'HomeController@donorProfile');