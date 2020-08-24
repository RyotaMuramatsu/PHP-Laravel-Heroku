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

Route::group(['prefix' => 'admin' , 'middleware' => 'auth'], function() {
    Route::get('news/create','Admin\NewsController@add')->middleware('auth');
    Route::post('news/create','Admin\NewsController@create');
    
// GETで/admin/profile/add　→　ProfileController＠add　→　'admin.profile.create'ビュー
// GETで/admin/profile/edit　→　ProfileController＠edit →　'admin.profile.edit'ビュー
    Route::get('profile/add','Admin\ProfileController@add');
    Route::get('profile/edit','Admin\ProfileController@edit');
    Route::get('profile/create','Admin\ProfileController@create');
    
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
