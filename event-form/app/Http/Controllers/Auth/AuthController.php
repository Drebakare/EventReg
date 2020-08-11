<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    public function Dashboard(){
/*        $employees = Employee::orderBy('id', 'desc')->take(5)->get();*/
        return view('Admin.dashboard', compact('stores', 'employees', 'users', 'departments', 'employee_numbers'));
    }
}
