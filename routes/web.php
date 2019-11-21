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

Route::get('/','HomeController@index');

Auth::routes();
Route::group(['middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/homestore', 'HomeController@store');
    Route::get('/auth/redirect/{provider}',
    'SocialAuthController@redirect')->name('redirect');
    Route::get('/callback/{provider}',
    'SocialAuthController@callback')->name('callback');
    Route::post('/password/new', 'HomeController@changePass');
    Route::get('/rooms/new', 'RoomController@create');

    Route::get('/rooms/{id}/listing', 'RoomController@listing');
    Route::get('/rooms/{id}/pricing', 'RoomController@pricing');
    Route::get('/rooms/{id}/description', 'RoomController@description');
    Route::get('/rooms/{id}/photo', 'RoomController@photo');
    Route::get('/rooms/{id}/amenities', 'RoomController@amenities');
    Route::get('/rooms/{id}/location', 'RoomController@location');

    Route::post('/room/store', 'RoomController@store');
    Route::get('/rooms/{id}','RoomController@display');
    Route::post('/rooms/{id}/listing/update','RoomController@update');
    Route::post('/rooms/{id}/pricing/update', 'RoomController@updatePrice');
    Route::post('/rooms/{id}/description/update', 'RoomController@updateDescription');
    Route::post('/rooms/{id}/photos/update', 'PhotoController@store');
    Route::post('/rooms/{id}/amenities/update', 'RoomController@updateAmenities');
    Route::post('/rooms/{id}/location/update', 'RoomController@updateLocation');

    Route::get('/rooms', 'RoomController@roomsIndex');
    Route::get('/reservations','ReservationController@reservationsIndex');
    Route::get('/trips', 'ReservationController@tripsIndex');
    Route::get('/profile', 'UserController@index');
    Route::get('/users/{id}', 'UserController@profile');
    Route::post('/update/profile', 'UserController@update');
    Route::get('/filter', 'RoomController@filter');
    Route::post('/rooms/{id}/publish', 'RoomController@publish');
});

