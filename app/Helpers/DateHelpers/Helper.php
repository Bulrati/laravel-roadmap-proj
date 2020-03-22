<?php

namespace App\Helpers\DateHelpers;

use Carbon\Carbon;

class Helper
{

    public static function formatToDateTime($date)
    {
        return date(config('constants.dateFormat'), Carbon::parse($date)->timestamp);
    }
}
