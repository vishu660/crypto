<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralSetting extends Model
{
    use HasFactory;

    protected $fillable = ['required_referrals', 'qualification_time_hours'];

}
