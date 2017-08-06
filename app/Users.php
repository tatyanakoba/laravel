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

    public static function login($user_data)
    {
        $data = self::where('name', $user_data['username'])->get();
         if (!isset($data[0])) {
            $new_user = new Users();
            $new_user->name = $user_data['username'];
            $new_user->password = md5($user_data['password']);
            $new_user->save();
            return $new_user;
        } else {
            $data = self::where('password', md5($user_data['password']))->get();
            if (empty($data)) {
                return false;
            } else {
                return $data[0]['id'];
            }
        }
    }
}
