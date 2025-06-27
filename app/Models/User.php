<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str; 

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'full_name',
        'email',
        'mobile_no',
        'country_code',
        'referral_id',
        'referral_by',
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
   
        public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function wallets()
        {
            return $this->hasMany(Wallet::class);
        }
   
    public function referralUser()
    {
        return $this->belongsTo(User::class, 'referral_by');
    }
    public function packages()
{
    return $this->belongsToMany(Package::class, 'user_packages')->withPivot(['start_date', 'end_date', 'is_active'])->withTimestamps();
}


    public static function generateReferralCode($length = 11)
{
    do {
        $code = strtoupper(Str::random($length));
    } while (self::where('referral_id', $code)->exists());

    return $code;
}
}
