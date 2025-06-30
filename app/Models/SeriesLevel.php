<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeriesLevel extends Model
{
    // Allow mass assignment
    protected $fillable = [
        'level',
        'amount',
        'period_months',
    ];

    // Optionally: Add timestamps = true (default, can skip this if using timestamps)
    public $timestamps = true;

    // You can add any custom methods here later, like scope, etc.
}
