<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporateEngagerRole extends Model
{
    protected $fillable = [
        'name', 'token'
    ];

    public function corporateEngagerUser(){
        return $this->hasMany(CorporateEngagerUser::class);
    }
}
