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
        'daily_days' => 'array', 
        'is_active' => 'boolean',
        'investment_amount' => 'decimal:2',
        'roi_percent' => 'decimal:2',
        'direct_bonus_percent' => 'decimal:2',
        'referral_income' => 'decimal:2',
    ];

    // Relationships removed - referral_income is not a foreign key
    // If you need relationships, create proper foreign key fields
    public function users()
{
    return $this->belongsToMany(User::class, 'user_packages')->withPivot(['start_date', 'end_date', 'is_active'])->withTimestamps();
}

public function getAmountAttribute()
{
    return $this->investment_amount;
}

}