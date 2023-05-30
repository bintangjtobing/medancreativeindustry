<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Redirect::to('/mcbd2023');
});
Route::prefix('/social')->group(function () {
    Route::get('facebook', function () {
        return Redirect::to('https://facebook.com');
    });
    Route::get('instagram', function () {
        return Redirect::to('https://www.instagram.com//');
    });
    Route::get('youtube', function () {
        return Redirect::to('https://www.youtube.com/channel/');
    });
    Route::get('gmail', function () {
        return Redirect::to('mailto:medancreativeindustry@gmail.com');
    });
});
Route::prefix('/business')->group(function () {
    Route::get('proposal', function () {
        return Redirect::to('/business/proposal-mcbd2023.pdf');
    });
});
Route::get('mcbd2023', 'webpageController@index');

// Dashboard
Route::prefix('/v')->group(function () {
    Route::get('/login', 'dashboardController@login')->name('login');
    Route::post('/login', 'dashboardController@loginProcess');
    Route::get('/logout', 'dashboardController@logout')->name('logout');
});
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('/app/dashboard')->group(function () {
        Route::get('/', 'dashboardController@index');
        Route::get('account', 'dashboardController@account');
        Route::get('order', 'dashboardController@order');
        Route::get('order/view/{id}', 'dashboardController@getOrder');
        Route::delete('order/delete/{id}', 'dashboardController@deleteOrder');

        Route::get('account/delete/{id}', 'dashboardController@deleteAccount');
    });
});
