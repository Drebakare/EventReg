<?php

namespace App\Http\Controllers\Auth;

use App\Attendee;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login(Request $request){
        $this->validate($request, [
            'email' => 'bail|required',
            'password' => 'bail|required'
        ]);
        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect(route('admin.dashboard'))->with('success', 'Login Successful');
            }
            else{
                return redirect()->back()->with('failure', 'Authentication Failed');
            }
        }
        catch (\Exception $exception){
            return  redirect()->back()->with('failure', 'Authentication Failed');
        }
    }

    public function Logout(){
        Auth::logout();
        return redirect(route('login'))->with('success', 'You have Successfully Logout, We hope to see you again');
    }

    public function Register(Request $request){
        $this->validate($request, [
            'email' => 'bail|required|unique:users',
            'password' => 'bail|required|confirmed'
        ]);
        try {
            $create_user = User::createUser($request);
            if ($create_user){
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                    return redirect(route('admin.dashboard'))->with('success', 'Login Successful');
                }
                else{
                    return redirect()->back()->with('failure', 'Authentication Failed');
                }
            }
            else{
                return redirect()->back()->with('failure', 'Registration Failed');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Registration Failed');
        }
    }

    public function Dashboard(){
        $attendees = Attendee::orderBy('id', 'desc')->get();
        $users = User::get();
        return view('Admin.dashboard', compact('attendees', 'users'));
    }

}
