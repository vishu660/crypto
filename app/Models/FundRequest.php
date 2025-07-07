<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/FundRequest.php

class FundRequest extends Model
{
    use HasFactory;

    const STATUS_PENDING  = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_REJECTED = 'rejected';

    protected $fillable = [
        'user_id',
        'amount',
        'hash_key',
        'remark',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
