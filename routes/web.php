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

Route::get('/', 'CompanyController@index');
Route::get('/add-company', 'CompanyController@add');
Route::get('/edit', 'CompanyController@edit');
Route::get('/all-companies', 'CompanyController@all');
Route::get('/all-info', 'CompanyController@info');
Route::post('/store-company', 'CompanyController@store');
Route::get('/edit-company/{company}', 'CompanyController@editCompany');
Route::patch('/store-update/{company}', 'CompanyController@storeUpdate');
