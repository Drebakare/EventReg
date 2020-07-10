<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DwType extends Model
{
    protected $fillable = [
        'name', 'token'
    ];

    public function dw(){
        return $this->hasMany(Dw::class);
    }
}
