<?php

namespace App\Http\Controllers;

use Auth;
//use App\User;
use Validator;
use App\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest',['except' => 'destroy']);
    }

//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }


    public function userlogin()
    {
        return view('users.login');
    }

    public function postuserlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
            ]);

            if(!Auth::attempt($request->only(['username','password']), $request->has('remember'))) {

                return redirect()->back()->with('info', 'These credentials do not match our records.');
            }

        return redirect()->route('home');

    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->home();
    }

}
