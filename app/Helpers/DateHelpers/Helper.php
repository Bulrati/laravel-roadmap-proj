<?php

namespace App\Helpers\DateHelpers;

use Carbon\Carbon;

class Helper
{

    /**
     *
     * Formats date to the specific format
     * @param $date
     *
     * @return false|string
     */
    public static function formatToDateTime($date)
    {
        return date(config('constants.dateFormat'), Carbon::parse($date)->timestamp);
    }
}
