<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DwGaurantorVerification extends Model
{
    protected $fillable = [
        'address', 'image', 'gps_location', 'comment_from_neighbour', 'token', 'dw_id', 'gaurantor_id',
        'state_id', 'lg_id', 'ack_status_id', 'verification_status_id', 'employment_type_id'
    ];
    public function dw(){
        return $this->belongsTo(Dw::class);
    }

    public function gaurantor(){
        return $this->belongsTo(DwGaurantor::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function lg(){
        return $this->belongsTo(Lg::class);
    }

    public function ackStatus(){
        return $this->belongsTo(Status::class);
    }

    public function verificationStatus(){
        return $this->belongsTo(Status::class);
    }

    public function employmentType(){
        return $this->belongsTo(EmploymentType::class);
    }
}
