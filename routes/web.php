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
Route::get('/home',             'HomeController@index')->name('home');
Route::get('/dashboard',        'DashboardController@index')->name('dashboard');
Route::get('/form',             'FormsController@index')->name('form');

Route::post('/user-profile',     'HomeController@userProfile');


//  *  Panel <-> Route *
Route::group(['prefix' => 'panel'], function () {

    Route::get('/',                 'PanelController@index')->name('panel');
    Route::get('/students',         'PanelController@students')->name('students');
    Route::get('/transactions',     'PanelController@transaction')->name('transactions');
    Route::get('/logoutpanel',      'PanelController@logout')->name('logoutpanel');
    Route::post('/auth',            'PanelController@auth')->name('auth');

});


