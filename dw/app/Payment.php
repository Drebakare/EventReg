<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'ref_no',  'count', 'amount', 'token', 'user_id', 'verification_type_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function verificationType(){
        return $this->belongsTo(VerificationType::class);
    }

}
