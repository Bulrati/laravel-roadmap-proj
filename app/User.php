<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email'];

    public static function getAllNames()
    {
        $usersNames = [];
        $users      = self::all();
        foreach ($users as $user) {
            $usersNames[$user->id] = $user->name;
        }

        return $usersNames;
    }
}
