<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsdtRequest extends Model
{
    protected $fillable = [
        'user_id',
        'address_id',
        'status',
    ];

    public function user() {
        return $this->belongsTo(UserUsdt::class, 'user_id');
    }

    public function address() {
        return $this->belongsTo(Address::class, 'address_id');
    }
}
