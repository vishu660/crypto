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
        'enableBreakDown',
        'breakdown_duration',
        'breakdown_last_date',
        'type_of_investment_days',
        'daily_days',
        'weekly_day',
        'monthly_date',
    ];

    protected $casts = [
        'daily_days' => 'array',
        'is_active' => 'boolean',
        'is_show_active' => 'boolean',
        'enableBreakDown' => 'boolean',
        'breakdown_duration' => 'integer',
        'breakdown_last_date' => 'date',
        'investment_amount' => 'decimal:2',
        'roi_percent' => 'decimal:2',
        'referral_income' => 'decimal:2',
        'referral_show_income' => 'decimal:2',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_packages')
                    ->withPivot(['start_date', 'end_date', 'is_active'])
                    ->withTimestamps();
    }

    public function getAmountAttribute()
    {
        return $this->investment_amount;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeWithBreakdown($query)
    {
        return $query->where('enableBreakDown', true);
    }
}
