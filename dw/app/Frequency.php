<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    protected $fillable = [
        'name', 'token'
    ];

    public function onDemandService(){
        return $this->hasMany(OnDemandService::class);
    }
}
