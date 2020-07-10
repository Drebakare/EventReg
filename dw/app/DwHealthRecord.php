<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DwHealthRecord extends Model
{
    protected $fillable = [
        'doctor_comment',  'dw_id', 'health_type_id', 'token', 'status_id'
    ];

    public function healthType(){
        return $this->belongsTo(HealthType::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function dw(){
        return $this->belongsTo(Dw::class);
    }
}
