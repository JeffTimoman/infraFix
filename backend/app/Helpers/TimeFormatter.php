<?php

namespace App\Helpers;

use Carbon\Carbon;

class TimeFormatter
{
    public static function formatTimeDifference($time)
    {
        $now = Carbon::now();
        $diffInSeconds = $now->diffInSeconds($time);
        $diffInSeconds = $diffInSeconds * -1;

        if ($diffInSeconds < 60) {
            return $diffInSeconds . ' detik yang lalu';
        }

        if ($diffInSeconds < 3600) {
            $minutes = floor($diffInSeconds / 60);
            return $minutes . ' menit yang lalu';
        }

        if ($diffInSeconds < 86400) {
            $hours = floor($diffInSeconds / 3600);
            return $hours . ' jam yang lalu';
        }

        if ($diffInSeconds < 604800) {
            $days = floor($diffInSeconds / 86400);
            return $days . ' hari yang lalu';
        }

        if ($diffInSeconds < 2419200) {
            $weeks = floor($diffInSeconds / 604800);
            return $weeks . ' minggu yang lalu';
        }

        if ($diffInSeconds < 29030400) {
            $months = floor($diffInSeconds / 2419200);
            return $months . ' bulan yang lalu';
        }

        $years = floor($diffInSeconds / 29030400);
        return $years . ' tahun yang lalu';
    }
}
