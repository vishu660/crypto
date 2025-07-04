<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str; 
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasApiTokens, Notifiable;

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
        return $this->hasMany(\App\Models\Transaction::class);
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

    public function referrals()
    {
        return $this->hasMany(Referral::class, 'referrer_id');
    }

    public function referredBy()
    {
        return $this->belongsTo(User::class, 'referral_by');
    }
    public function bankDetail()
{
    return $this->hasOne(UserBankDetail::class);
}

    // App\Models\User.php

public function getSeriesLevelAttribute()
{
    $roi = $this->wallets->where('type', 'credit')->where('source', 'roi')->sum('amount');

    $levels = \App\Models\SeriesLevel::orderBy('level')->get();

    foreach ($levels as $level) {
        if ($roi >= $level->amount) {
            $currentLevel = $level->level;
        }
    }

    return $currentLevel ?? 0;
}
public function directReferrals()
{
    return $this->hasMany(User::class, 'referral_by');
}

public function isReferralQualified()
{
    $required = \App\Models\ReferralSetting::first()->required_referrals ?? 2;
    return $this->directReferrals()->count() >= $required;
}




}
