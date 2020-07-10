<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DwGaurantor extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'dw_id', 'user_id', 'token'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function dw(){
        return $this->belongsTo(Dw::class);
    }

    public function dwGaurantorVerification(){
        return $this->hasMany(DwGaurantorVerification::class);
    }
}
