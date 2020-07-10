<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DwAddressVerification extends Model
{
    protected $fillable = [
        'address', 'image', 'dw_id', 'gps_location', 'token', 'comment_from_neighbour', 'state_id',
        'lg_id', 'status_id'
    ];

    public function dw(){
        return $this->belongsTo(Dw::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function lg(){
        return $this->belongsTo(Lg::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
