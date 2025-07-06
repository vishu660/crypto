<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Epin extends Model
{
    protected $fillable = ['code', 'plan', 'amount', 'expiry_date', 'status'];

    protected $dates = [
        'expiry_date',
        'used_at',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
