<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporateEngagerUser extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'corporate_engager_id','corporate_engager_role_id', 'user_id', 'token'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function corporateEngager(){
        return $this->belongsTo(CorporateEngager::class);
    }

    public function corporateEngagerRole(){
        return $this->hasOne(CorporateEngagerRole::class);
    }

    public function corporateEngagerUserDetail(){
        return $this->hasMany(CorporateEngagerUserDetail::class);
    }
}
