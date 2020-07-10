<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmploymentType extends Model
{
    protected $fillable = [
        'name', 'token'
    ];

    public function dwGaurantorVerification(){
        return $this->hasMany(DwGaurantorVerification::class);
    }

}
