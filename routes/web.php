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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function (){

    Route::get('login', 'Admin_login_controller@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin_login_controller@login')->name('admin.login');

    Route::get('dashboard', 'Admin_dashboard_controller@index')->name('admin.dashboard')->middleware('auth:admin');
//    Route::get('logout', 'Admin_dashboard_controller@logout')->name('admin.logout')->middleware('auth:admin');

});
