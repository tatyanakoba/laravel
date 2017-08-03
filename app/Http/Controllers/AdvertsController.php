<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertsController extends Controller
{
    //
    public function destroy($id) {
        var_dump('hoooo');die();
        $ad  = \App\Adverts::deleteAdvert($id);
        echo 'Advert is delete';
        return redirect()->back();
    }
}
