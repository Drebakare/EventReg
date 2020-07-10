<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthType extends Model
{
    protected $fillable = [
        'name', 'token'
    ];
    public function dwHealthRecord(){
        return $this->hasMany(DwHealthRecord::class);
    }
}
