<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email'];

    public static function getAllNames()
    {
        $users      = self::all();
        $usersNames = $users->pluck('name', 'id');

        return $usersNames;
    }
}
