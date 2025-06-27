<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wallet extends Model
{
    use HasFactory;

    /**
     * Mass-assignable
     */
    protected $fillable = [
        'user_id',
        'amount',
        'currency',
        'type',     // debit | credit
        'message',
    ];

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
