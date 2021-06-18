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

Route::get('/', function () {
	return view('welcome');
});

Route::post('/get_agent_online', 'CustomerDBController@get_agent_online')->name('get_agent_online');

Route::resource('customerprofile', 'CustomerDBController');

Route::resource('ivrmenu', 'IvrMenuController');
