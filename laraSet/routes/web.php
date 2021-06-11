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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all/{id}', 'ContactController@updateMessage')->name('contact-update');

Route::get('/contact/all/{id}/update', 'ContactController@showOneMessage')->name('contact-data-one');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

Route::post('contact/all/{id}/updateSubmit', 'ContactController@updateMessageSubmit')->name('contact-update-submit');

Route::get('contact/all/{id}/delete', 'ContactController@deleteMessage')->name('contact-delete');

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
