<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerificationType extends Model
{
    protected $fillable = [
        'name', 'token'
    ];

    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
