<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adverts extends Model
{
    //
    public static function deleteAdvert($id)
    {
        self::where('id', $id)->delete();
        return true;
    }

    public static function createdAdvert($input)
    {
        $advert = new Adverts();
        $advert->title = $input['title'];
        $advert->description = $input['description'];
        $advert->save();
        return $advert;
    }

    public static function getAdvertData($id)
    {
        $data = self::where('id', $id)->get();
        return $data[0];
    }

    public static function updateAdvert($input)
    {
        self::where('id', $input['id'])
            ->update([
                'title' => $input['title'],
                'description' => $input['description']
            ]);
    }
}
