<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {
    protected $fillable = ['name', 'address_key'];

    public function userAddresses() {
        return $this->hasMany(UserAddress::class);
    }
}
