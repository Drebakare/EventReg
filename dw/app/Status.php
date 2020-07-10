<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'name', 'token'
    ];

    public function dwAddressVerification(){
        return $this->hasMany(DwAddressVerification::class);
    }

    public function dwTraining(){
        return $this->hasMany(DwTraining::class);
    }

    public function dwGaurantorVerification(){
        return $this->hasMany(DwGaurantorVerification::class);
    }

    public function dwHealthRecord(){
        return $this->hasMany(DwHealthRecord::class);
    }

    public function dwIdentityNoVerification(){
        return $this->hasMany(DwIdentityNoVerification::class);
    }
    public function engagerAddressVerification(){
        return $this->hasMany(EngagerAddressVerification::class);
    }
    public function dwHiring(){
        return $this->hasMany(DwHiring::class);
    }
}
