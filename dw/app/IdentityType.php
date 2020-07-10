<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentityType extends Model
{
    protected $fillable = [
        'name', 'token'
    ];

    public function dwIdentityNoVerification(){
        return $this->hasMany(DwIdentityNoVerification::class);
    }
}
