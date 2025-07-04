<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBankDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'account_holder',
        'bank_name',
        'account_number',
        'ifsc_code',
        'is_approved',
        'approved_at',
    ];

    protected $casts = [
        'account_number' => 'encrypted',
        'ifsc_code' => 'encrypted',
        'is_approved' => 'boolean',
        'approved_at' => 'datetime',
    ];

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
