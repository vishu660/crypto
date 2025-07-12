<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeriesLevel extends Model
{
    // Allow mass assignment
    protected $fillable = [
        'level',
        'amount',          // Turnover amount
        'salary_amount',   // Salary to be given
        'period_months',
    ];

    public $timestamps = true;

    // You can add custom scopes or accessors later if needed
}
