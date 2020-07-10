<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporateEngager extends Model
{
    protected $fillable = [
        'company_name', 'company_address',  'engager_id', 'token', 'cac_number'
    ];

    public function engager(){
        return $this->belongsTo(Engager::class);
    }

    public function corporateEngagerUser(){
        return $this->hasMany(CorporateEngagerUser::class);
    }
}
