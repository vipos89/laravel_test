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

Route::get('/', 'SiteController@index');

Route::get('/admins', 'Admin\\CategoryController@index')->name('dashboard');
Route::get('/admins/category/create', 'Admin\\CategoryController@create')
    ->name('admin_create_category');
Route::post('/admins/category/create', 'Admin\\CategoryController@store')
    ->name('admin_category_store');
Route::get('/admins/category/{id}/create', 'Admin\\CategoryController@edit')
    ->name('admin_category_edit');
Route::put('/admins/category/{id}/update', 'Admin\\CategoryController@update')
    ->name('admin_category_update');
Route::delete('/admins/category/{id}/update', 'Admin\\CategoryController@update')
    ->name('admin_category_update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
