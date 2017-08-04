<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public static function getAuthorName($user_id)
    {
        $author = self::where('id', $user_id)->value('name');

        return $author;
    }
}
