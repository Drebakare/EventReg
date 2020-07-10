<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DwIdentityNoVerification extends Model
{
    protected $fillable = [
        'token', 'dw_id', 'identity_type_id', 'identity_no', 'status_id',
    ];
    public function dw(){
        return $this->belongsTo(Dw::class);
    }

    public function identityType(){
        return $this->belongsTo(IdentityType::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

}
