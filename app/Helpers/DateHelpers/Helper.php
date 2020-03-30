<?php

namespace DateHelper;

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
        return Carbon::parse($date)->format(config('constants.dateFormat'));
    }
}
