<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DwWorkFeedback extends Model
{
    protected $fillable = [
        'comment',  'rating', 'token', 'dw_id', 'engager_id',
        'description'
    ];

    public function dw(){
        return $this->belongsTo(Dw::class);
    }

    public function engager(){
        return $this->belongsTo(Engager::class);
    }
}
