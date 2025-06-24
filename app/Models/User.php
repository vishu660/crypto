<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'full_name',
        'email',
        'mobile_no',
        'country_code',
        'introducer',
        'introducer_id',
        'password',
        'transaction_password',
        'company_name',
        'city',
        'state',
        'country',
        'profile_image',
        'role',
        'balance',
        'order_id',
        'otp',
        'otp_expires_at',
        'status',
        'terms_accepted',
    ];
    

    protected $hidden = [
        'password',
        'transaction_password',
        'otp',
    ];

    protected $casts = [
        'terms_accepted' => 'boolean',
        'otp_expires_at' => 'datetime',
        'balance' => 'decimal:2',
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

   
    public function introducerUser()
    {
        return $this->belongsTo(User::class, 'introducer_id');
    }

    public static function generateReferralCode($length = 11)
{
    do {
        $code = strtoupper(Str::random($length));
    } while (self::where('introducer', $code)->exists());

    return $code;
}
}
