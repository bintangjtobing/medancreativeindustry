<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Redirect::to('/mcbd2023');
});
Route::get('/hello-there', function () {
    return Redirect::to('https://linktr.ee/medancreativeind');
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
Route::prefix('/mcbd2023/daftar/')->group(function () {
    Route::get('peserta', function () {
        return Redirect::to('https://forms.gle/akotYoiVywrVqb7r9');
    });
    Route::get('startup', function () {
        return Redirect::to('https://forms.gle/HazwwJA44W8zNL8k6');
    });
    Route::get('volunteer', function () {
        return Redirect::to('https://forms.gle/UM8ZXF82hJwWMBEw6');
    });
    Route::get('pelaku-karya', function () {
        return Redirect::to('https://forms.gle/QBjHHeq7oNxTHGWNA');
    });
});
Route::prefix('/join')->group(function () {
    Route::get('community', function () {
        return Redirect::to('https://forms.gle/EydXWERz7mfHywsN8');
    });
});
Route::prefix('/mcbd2023')->group(function () {
    Route::get('/', function () {
        return Redirect::to('https://forms.gle/aLwkbjwBSReDwZ2D7');
    });
    Route::get('volunteer', function () {
        return Redirect::to('hhttps://forms.gle/Xhm9ZimddZ5ESDvf7');
    });
    Route::get('karya', function () {
        return Redirect::to('https://forms.gle/QePKM9GSMA8AQMw7A');
    });
    Route::get('startup', function () {
        return Redirect::to('https://forms.gle/x7QafsASqQdVwgJv5');
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
