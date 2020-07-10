<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DwHiring extends Model
{
    protected $fillable = [
        'duration',  'start_date', 'end_date',  'dw_id','engager_id', 'token', 'status_id', 'dw_ack_status_id'
    ];

    public function dwAckStatus(){
        return $this->belongsTo(Status::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function dw(){
        return $this->belongsTo(Dw::class);
    }

    public function engager(){
        return $this->belongsTo(Engager::class);
    }
}
