<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporateEngagerUserDetail extends Model
{
    protected $fillable = [
        'address', 'state_id', 'lg_id','corporate_engager_user_id', 'token'
    ];

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function lg(){
        return $this->belongsTo(Lg::class);
    }

    public function corporateEngagerUser(){
        return $this->hasOne(CorporateEngagerUser::class);
    }
}
