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

Route::view('', 'pages.home');
Route::view('/courses', 'pages.courses')->name('courses');
Route::view('/trips', 'pages.trips');
Route::view('/about', 'pages.about');
Route::view('/snorkel', 'pages.snorkel');
Route::view('/research', 'pages.research');
Route::view('/gallery', 'pages.gallery');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@send');
