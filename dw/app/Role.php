<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'token'
    ];

    public function user(){
        return $this->hasMany(User::class);
    }

}
