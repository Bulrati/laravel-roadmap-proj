<?php

namespace App\Helpers\DateHelpers;

class Helper
{

    public static function transformDate($date, $format = 'd-m-Y')
    {
        return date($format, strtotime($date));
    }
}