<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EngagerType extends Model
{
    protected $fillable = [
        'name', 'token'
    ];

    public function engager(){
        return $this->hasMany(Engager::class);
    }

}
