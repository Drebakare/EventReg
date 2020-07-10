<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name', 'token'
    ];

    public function dwAddressVerification(){
        return $this->hasMany(DwAddressVerification::class);
    }

    public function dwGaurantorVerification(){
        return $this->hasMany(DwGaurantorVerification::class);
    }
    public function corporateEngagerUserDetail(){
        return $this->hasMany(CorporateEngagerUserDetail::class);
    }
    public function engagerAddressVerification(){
        return $this->hasMany(EngagerAddressVerification::class);
    }

}
