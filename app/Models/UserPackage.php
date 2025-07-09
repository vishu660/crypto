<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPackage extends Model
{
    use HasFactory;

    protected $table = 'user_packages';

    protected $fillable = [
        'user_id',
        'package_id',
        'amount',
        'start_date',
        'end_date',
        'roi_dates',
        'total_roi_given',
        'is_active',
        'source',
        'status', // ✅ Add this line to avoid mass assignment error
    ];

    protected $casts = [
        'roi_dates' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'is_active' => 'boolean',
    ];

    // ✅ Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ✅ Relationship with Package
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
