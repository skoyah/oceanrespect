<?php


Route::view('', 'pages.home');
Route::view('/courses', 'pages.courses')->name('courses');
Route::view('/trips', 'pages.trips');
Route::view('/about', 'pages.about');
Route::view('/snorkel', 'pages.snorkel');
Route::view('/research', 'pages.research');
Route::view('/gallery', 'pages.gallery');
Route::view('/gear-rental', 'pages.rental');
Route::view('/diving-sites', 'pages.diving-sites');
Route::view('/shark-diving', 'pages.shark-diving');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@send');
