<?php

namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class StudentAuthController extends Controller
{
    public function showLoginForm(){

        if(Auth::guard('student')->user()){
            return redirect('study');
        }
        else{

            $previous_url = Session::get('_previous.url');
//            $ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
//            $ref = rtrim($ref, '/');
            if ($previous_url != url('/student_login')) {
                Session::put('referrer', $previous_url);
//                if ($previous_url == $ref) {
                    Session::put('url.intended', $previous_url);
//                }
            }

            return view('auth.student_profile_login');


        }
    }

    public function student_login(Request $request){
        $this->validate($request, [

            'regNo' => 'required|string|min:14|max:14',
            'nic_passport' => 'required|string|min:10|max:10',

        ]);

        $student = Student::where([['sid','=',$request->regNo],['NIC','=',$request->nic_passport]])->first();
        if(is_null($student)){
            return back()->with('Status', 'These credentials are not in our records');
        }
        else{
            Auth::guard('student')->login($student);
            return redirect()->intended('study');
        }


        //return redirect('/')->with('Status','You have registered successfully');
    }

    public function student_logout(){

        //Auth::guard('student')->logout();
        Session::flush();
        return redirect('/study')->with('Status','Logged out Successfully');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'username' => 'required|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
    }

}
