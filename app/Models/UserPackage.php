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
        'start_date',
        'end_date',
        'roi_dates',
        'total_roi_given',
        'is_active',
        'source', // ✅ Add this if using in User Buy
    ];

    protected $casts = [
        'roi_dates' => 'array', // JSON array में convert होगा
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
