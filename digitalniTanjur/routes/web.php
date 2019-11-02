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

// Auth::routes();

// Route::get('/admin', 'Admin\AdminController@index')->name('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('meni', 'MeniController');

// Route::resource('admin', 'AdminController')->middleware(['auth', 'roles.admin']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'roles.admin'])->name('admin.')->group(function(){
    Route::resource('/korisnici', 'KorisniciController')->except(['show', 'create', 'store']);
    Route::resource('/', 'AdminController');
});

// Route::resource('moderator', 'ModeratorController')->middleware(['auth', 'roles']);