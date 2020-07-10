<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DwWorkHistory extends Model
{
    protected $fillable = [
        'position',  'company_name', 'start_date', 'token', 'end_date', 'dw_id', 'state_id', 'lg_id', 'status_id',
        'description'
    ];

    public function trainingType(){
        return $this->belongsTo(TrainingType::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function dw(){
        return $this->belongsTo(Dw::class);
    }

}
