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

Route::get('/edit', function () {
     return view('edit');
});

Route::post('/create', 'AdvertsController@created');

Route::get('/{id}', 'AdvertsController@getAdvert');

Route::get('/edit/{id}', function ($id) {
    $data = \App\Adverts::getAdvertData($id);
    return view('edit', compact('data'));
});

Route::post('/update/{id}', 'AdvertsController@update');