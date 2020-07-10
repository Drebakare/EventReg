<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engager extends Model
{
    protected $fillable = [
        'engager_type_id', 'user_id', 'token'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function engagerType(){
        return $this->belongsTo(EngagerType::class);
    }

    public function individualEngager(){
        return $this->hasMany(IndividualEngager::class);
    }

    public function corporateEngager(){
        return $this->hasMany(CorporateEngager::class);
    }

    public function engagerAddressVerification(){
        return $this->hasMany(EngagerAddressVerification::class);
    }

    public function onDemandService(){
        return $this->hasMany(OnDemandService::class);
    }

    public function dwHiring(){
        return $this->hasMany(DwHiring::class);
    }

    public function dwWorkFeedback(){
        return $this->hasMany(DwWorkFeedback::class);
    }

}
