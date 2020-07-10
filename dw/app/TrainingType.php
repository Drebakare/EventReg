<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingType extends Model
{
    protected $fillable = [
        'name', 'token'
    ];
    public function dwTraining(){
        return $this->hasMany(DwTraining::class);
    }
}
