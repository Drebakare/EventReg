<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndividualEngager extends Model
{
    protected $fillable = [
        'first_name', 'last_name',  'engager_id', 'token'
    ];

    public function engager(){
        return $this->belongsTo(Engager::class);
    }
}
