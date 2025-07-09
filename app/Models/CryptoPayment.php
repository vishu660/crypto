<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CryptoPayment extends Model
{
    protected $fillable = [
        'payment_id',
        'status',
        'amount',
        'currency',
        'order_id',
    ];
}
