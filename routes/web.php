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


Route::get('/messages', 'MessagesController@getMessages');

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');


Route::get('/gallery/show/{id}', 'GalleryController@show');
Route::get('/photo/create/{id}', 'PhotoController@create');
Route::get('/gallery/index', 'GalleryController@index');
Route::resource('/gallery', 'GalleryController');
Route::resource('/photo', 'PhotoController');
Route::post('/gallery/create', 'GalleryController@create');
Route::post('/gallery/store', 'GalleryController@store');
Route::post('/contact/submit', 'MessagesController@submit');