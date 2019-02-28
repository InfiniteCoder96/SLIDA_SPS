<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Parent_Guardian;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class customAuthController extends Controller
{
    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $this->validate($request, [

            'username' => 'required|string|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required'

        ]);

        $registered_name = $request->get('name');
        $registered_role = $request->get('role');

        $this->create($request->all());

        return redirect('/')->with('Status','You have registered '.$registered_name.' as '.$registered_role.' successfully');
    }

    public function showLoginForm(){
        if(Auth::guard('admin')->user()){
            return redirect('/');
        }
        else{
            return view('auth.login');
        }

    }

    public function login(Request $request){
        $this->validate($request, [

            'username' => 'required|string',
            'password' => 'required|string|min:6',

        ]);

        $request->session()->put('key', 'value');

        if(Auth::guard('admin')->attempt(['username' => $request->username,'password' => $request ->password, 'role' => 'Admin'])){
            return redirect('/admin/dashboard');
        }
        elseif(Auth::guard('admin')->attempt(['username' => $request->username,'password' => $request ->password, 'role' => 'Admin'])){
            return redirect('/admin/dashboard');
        }
        else{
            return back()->with('Status', 'These credentials are not in our records');
        }


        //return redirect('/')->with('Status','You have registered successfully');
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('Status','Logged out Successfully');
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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Admin
     */
    protected function create(array $data)
    {
        return Admin::create([

            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
        ]);
    }
}
