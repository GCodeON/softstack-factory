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


// Custom site routes
Route::get('/', 'AppController@home');
Route::get('/get-supports', 'AppController@getSupports');
Route::get('/{page}', 'AppController@page');

// Endpoints for form submitting
Route::post('/add-contact', 'AppController@addContact');
Route::post('/add-support', 'AppController@addSupport');

// CMS JSON accessor
Route::resource('/api/cms', 'CmsController');


