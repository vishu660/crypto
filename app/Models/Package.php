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
        'referral_income',
        'is_active',
        'type_of_investment_days',
        'daily_days',
        'weekly_day',
        'monthly_date',
    ];

    protected $casts = [
        'daily_days' => 'array', // JSON field ko array me convert karega
        'is_active' => 'boolean',
    ];
    public function introducer()
    {
        return $this->belongsTo(User::class, 'referral_income');
    }

    public function referral()
    {
        return $this->belongsTo(User::class, 'referral_income');
    }
}

