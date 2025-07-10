<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'balance_after',
        'currency',
        'type',       // debit | credit
        'source',     // roi | referral | deposit etc.
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
