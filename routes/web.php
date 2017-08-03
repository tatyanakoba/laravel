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


Route::post('/', 'Auth\LoginController@login');
Route::get('/', function () {
    $advert = App\Adverts::paginate(5);
    return view('index', compact('advert'));
});

Route::get('/delete/{id}', 'AdvertsController@destroy');
