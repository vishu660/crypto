<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';

    protected $fillable = [
        'name',
        'investment_amount',
        'roi_percent',
        'validity_days',
        'referral_income',
        'referral_show_income',
        'is_active',
        'is_show_active',
        'enableBreackDown',
        'type_of_investment_days',
        'daily_days',
        'weekly_day',
        'monthly_date',
    ];

    protected $casts = [
        'daily_days' => 'array',
        'is_active' => 'boolean',
        'is_show_active' => 'boolean',
        'enableBreackDown' => 'boolean',
        'investment_amount' => 'decimal:2',
        'roi_percent' => 'decimal:2',
        'referral_income' => 'decimal:2',
        'referral_show_income' => 'decimal:2',
    ];

    /**
     * Users who bought this package (many-to-many via user_packages)
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_packages')
                    ->withPivot(['start_date', 'end_date', 'is_active'])
                    ->withTimestamps();
    }

    /**
     * Accessor: get investment_amount as `amount`
     */
    public function getAmountAttribute()
    {
        return $this->investment_amount;
    }

    /**
     * Scope: only active packages
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope: only packages with breakdown enabled
     */
    public function scopeWithBreakdown($query)
    {
        return $query->where('enableBreackDown', true);
    }
}
