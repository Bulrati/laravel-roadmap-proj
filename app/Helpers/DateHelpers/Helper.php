<?php

namespace App\Helpers\DateHelpers;

class Helper
{

    public static function formatToDateTime($date)
    {
        return date(config('constants.dateFormat'), strtotime($date));
    }
}