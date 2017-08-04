<?php

namespace App\Http\Controllers;

use Request;


class AdvertsController extends Controller
{
    //
    public function destroy($id)
    {
        $ad = \App\Adverts::deleteAdvert($id);
        return redirect('/');
    }

    public function created(Request $request)
    {
        $input = $request::all();
        $ad = \App\Adverts::createdAdvert($input);
        $id = $ad['id'];
        return redirect($id);
    }

    public function getAdvert($id)
    {
        $data = \App\Adverts::getAdvertData($id);
        return view('prewie', compact('data'));
    }

    public function update($id)
    {
        $input = [
            'id' => $id,
            'title' => $_POST['title'],
            'description' => $_POST['description'],
        ];
        \App\Adverts::updateAdvert($input);
        return redirect('/');
    }

}
