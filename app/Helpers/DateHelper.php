<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
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
        return Carbon::parse($date)->format(config('constants.dateFormat'));
    }
}
