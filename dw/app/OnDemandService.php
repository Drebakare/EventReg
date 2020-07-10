<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnDemandService extends Model
{
    protected $fillable = [
        'start_date', 'end_date', 'engager_id', 'duration_id', 'frequency_id', 'token'
    ];

    public function engager(){
        return $this->belongsTo(Engager::class);
    }

    public function duration(){
        return $this->belongsTo(Duration::class);
    }

    public function frequency(){
        return $this->belongsTo(Frequency::class);
    }
}
