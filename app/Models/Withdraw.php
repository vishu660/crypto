<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'processing_charge',
        'payable_amount',
        'wallet_type',
        'payment_method',
        'payment_address',
        'remark',
        'status',
        'admin_remark',
        'approved_at',
    ];

    /**
     * Relationship: Withdraw belongs to a User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
