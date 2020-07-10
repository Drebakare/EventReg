<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dw extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'dw_type_id', 'user_id', 'token'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function dwType(){
        return $this->belongsTo(DwType::class);
    }

    public function dwGaurantor(){
        return $this->hasOne(DwGaurantor::class);
    }
    public function dwAddressVerification(){
        return $this->hasOne(DwAddressVerification::class);
    }
    public function dwTraining(){
        return $this->hasMany(DwTraining::class);
    }

    public function dwGaurantorVerification(){
        return $this->hasOne(DwGaurantorVerification::class);
    }

    public function dwHealthRecord(){
        return $this->hasMany(DwHealthRecord::class);
    }

    public function dwIdentityNoVerification(){
        return $this->hasMany(DwIdentityNoVerification::class);
    }

    public function dwHiring(){
        return $this->hasMany(DwHiring::class);
    }

    public function dwWorkFeedback(){
        return $this->hasMany(DwWorkFeedback::class);
    }

}
