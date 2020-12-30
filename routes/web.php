<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home')->name('home');
//
Route::resource('specialty', 'SpecialtyController');
//
Route::resource('companies', 'CompanyController');
Route::post('/get/companies', 'CompanyController@getCompanies')->name('getCompanies');
Route::resource('company-specialty', 'CompanySpecialtyController');
