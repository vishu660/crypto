<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'investment_amount',
        'roi_percent',
        'validity_days',
        'direct_bonus_percent',
        'ibot_investment',
        'type_of_investment_days',
        'daily_days',
        'weekly_day',
        'monthly_date',
        'is_active',
    ];

    protected $casts = [
        'daily_days' => 'array',
    ];
}
