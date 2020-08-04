<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = [
        'first_name', 'surname', 'email', 'phone_number', 'linkedin_link', 'company_name', 'no_of_staff', 'position',
        'company_website', 'company_linkedin',
    ];

    public static function checkEmail($email){
        $email = Attendee::where('email', $email)->first();
        if ($email){
            return true;
        }
        else{
            return false;
        }
    }

}
