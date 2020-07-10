<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DwTraining extends Model
{
    protected $fillable = [
        'duration',  'dw_id', 'training_type_id', 'token', 'status_id', 'certificate_image'
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
