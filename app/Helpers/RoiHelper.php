<?php

namespace App\Helpers;

use Carbon\Carbon;

class RoiHelper
{
    public static function generateRoiDates($startDate, $validityDays, $type, $options = [])
    {
        $dates = [];
        $start = Carbon::parse($startDate);
        $end = $start->copy()->addDays($validityDays - 1);

        if ($type === 'daily') {
            $days = $options['daily_days'] ?? [];
            for ($date = $start->copy(); $date->lte($end); $date->addDay()) {
                if (in_array($date->format('l'), $days)) {
                    $dates[] = $date->toDateString();
                }
            }
        } elseif ($type === 'weekly') {
            $day = $options['weekly_day'] ?? 'Monday';
            for ($date = $start->copy(); $date->lte($end); $date->addWeek()) {
                $roiDate = $date->copy()->next($day);
                if ($roiDate->between($start, $end)) {
                    $dates[] = $roiDate->toDateString();
                }
            }
        } elseif ($type === 'monthly') {
            $day = $options['monthly_date'] ?? 1;
            for ($date = $start->copy(); $date->lte($end); $date->addMonth()) {
                $roiDate = $date->copy()->day($day);
                if ($roiDate->between($start, $end)) {
                    $dates[] = $roiDate->toDateString();
                }
            }
        }

        return $dates;
    }
}
