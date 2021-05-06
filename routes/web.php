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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get ('/dashboard', 'dashboardController@index')->name('dashboard');
    Route::get ('/posts', 'PostController@index')->name('posts');
    Route::post ('/posts', 'PostController@create');
    Route::post ('/changeSettings', 'UserController@updateSetting');
    Route::get ('/changeSettings', 'UserController@IndexSetting');
});

Route::prefix('{token}')->group(function () {
    Route::get('/home', 'ClientController@home');
    Route::get('/news/{id}', 'ClientController@news');
});