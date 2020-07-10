<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EngagerAddressVerification extends Model
{
    protected $fillable = [
        'address', 'image', 'engager_id', 'gps_location', 'token', 'comment_from_neighbour', 'state_id',
        'lg_id', 'status_id'
    ];

    public function engager(){
        return $this->belongsTo(Engager::class);
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
