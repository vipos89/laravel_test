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

Route::prefix('admins')->namespace('Admin')->middleware(['role:admin'])
    ->group(function () {
        Route::get('/', 'CategoryController@index')->name('dashboard');
        Route::resource('/category', 'CategoryController')->names('admin.category');
        Route::resource('/company', 'CompanyController')->names('admin.company');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
