<?php

namespace App\Http\Controllers;

use App\Attendee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use League\Flysystem\Config;

class AttendeeController extends Controller
{
    public function register(Request $request){
        try {
            $check_email = Attendee::checkEmail($request->data['email']);
            if ($check_email){
                $data = [
                    'status' => false,
                    'message' => 'Email Already Exist'
                ];
                return response($data);
            }
            else{
                if (empty($request->data['email'] ) ||  empty($request->data['surname']
                        || empty($request->data['firstname'])) || empty($request->data['phone'])){
                    $data = [
                        'status' => false,
                        'message' => 'All Fields Must Be Filled'
                    ];
                    return response($data);
                }
                else{

                    $event_registration = new  Attendee();
                    $event_registration->email = $request->data['email'];
                    $event_registration->phone_number = $request->data['phone'];
                    $event_registration->surname = $request->data['surname'];
                    $event_registration->first_name = $request->data['first_name'];
                    $event_registration->linkedin_link = $request->data['linkedin'];
                    $event_registration->company_name = $request->data['company_name'];
                    $event_registration->no_of_staff = $request->data['company_size'];
                    $event_registration->position = $request->data['position'];
                    $event_registration->company_website = $request->data['company_website'];
                    $event_registration->company_linkedin = $request->data['company_linkedin'];
                    $event_registration->save();
                    Mail::to($event_registration->email)->send(new \App\Mail\registrationMail($event_registration)); // send email to user

                    $data = [
                        'status' => true,
                        'message' => 'Registration was successful. Thanks.'
                    ];
                    return response($data);
                }
            }
        }
        catch (\Exception $exception){
            $data = [
                'status' => false,
                'message' => 'Action could not be performed. Please try again!'
            ];
            return response($data);
        }
    }
}
