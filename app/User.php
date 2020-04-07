<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email'];

    /**
     * Get all user names
     *
     * @return array
     */
    public static function getAllNames()
    {
        $users      = self::all();
        $usersNames = $users->pluck('name', 'id')->toArray();

        return $usersNames;
    }
}
