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
use App\Http\Controllers\Controller;

Route::get('/', function () {
    $id = Controller::getUser();
    $advert = App\Adverts::paginate(5);
    return view('index', ['advert' => compact('advert'), 'id' => $id]);
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

Route::post('/login', 'Auth\LoginController@login');

