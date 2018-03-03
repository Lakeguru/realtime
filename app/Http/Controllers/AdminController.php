<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    public function adminlogin()
    {
        return view('adminpages.login');
    }

    public function postadminlogin()
    {
            $validator = Validator::make($request->all(), [
                'email' => 'required|max:225',
                'password' => 'required|max:15',
            ]);

            dd($request);
            
    }

    public function adminreg()
    {
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'email' => 'required|max:225',
            'password' => 'required|confirmed|max:15',
        ]);
        
        dd($request);
        
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Attempt to log the user in
        if (Auth::guard('admin')->attempt($credential, $request->member)){
            // If login succesful, then redirect to their intended location
            return redirect()->intended(route('admin.home'));
        }

        // If Unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));

    
    }

    public function try()
    {
        return view('adminpages.try');
    }

    
}
