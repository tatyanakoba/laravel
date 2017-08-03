<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adverts extends Model
{
    //
    public static function deleteAdvert($id)
    {
        self::delete('delete from adverts where id = ?',[$id]);
        return true;
    }
}
