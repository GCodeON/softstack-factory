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
Auth::routes();

Route::middleware([
    'auth',
])->group(function () {
    Route::get('/admin', 'AdminController@home');
    Route::get('/admin/logout', 'AdminController@logout');
    Route::get('/admin/resources', 'AdminController@resources');
    Route::post('/admin/log-resource-access', 'AdminController@logResourceAccess');
});

Route::middleware([
    'auth',
    'role:admin'
])->group(function () {
    Route::get('/admin/users', 'AdminController@users');
    Route::get('/admin/activity', 'AdminController@activity');
    Route::get('/admin/support', 'AdminController@support');
    Route::get('/admin/support/{id}', 'AdminController@editSupportform');
    Route::post('/admin/support/{id}', 'AdminController@saveSupport');
    Route::get('/admin/edit-support', 'AdminController@editSupport');
    Route::post('/admin/users', 'AdminController@addUser');
    Route::get('/admin/delete-user/{id}', 'AdminController@deleteUser');
    Route::get('/admin/login/{id}', 'AdminController@login');
    Route::get('/admin/resource/{id}', 'AdminController@resource');
    Route::get('/admin/delete-resource/{id}', 'AdminController@deleteResource');
    Route::post('/admin/save-resource', 'AdminController@saveResource');
});

// Custom site routes
Route::get('/', 'AppController@home');
Route::get('/get-supports', 'AppController@getSupports');
Route::get('/{page}', 'AppController@page');

// Endpoints for form submitting
Route::post('/add-contact', 'AppController@addContact');
Route::post('/add-support', 'AppController@addSupport');

// CMS JSON accessor
Route::resource('/api/cms', 'CmsController');


