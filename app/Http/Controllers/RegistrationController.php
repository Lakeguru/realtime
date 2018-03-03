<?php

namespace App\Http\Controllers;

use Hash;
use Validator;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function signup()
    {
        return view('users.signup');
    }

    public function userhome()
    {
        return view ('users.userhome');
    }

    public function postsignup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'username'=> 'required|unique:users|max:50',
            'phone_number' => 'required|numeric|min:12',
            'password' => 'required|min:8|confirmed',
        ]);


        $user= New User;

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->password=Hash::make($request->input('password'));
        $user->save();

        dd($request->all());

        Auth::login($user);
        //redirect to user home pages
        return view ('users.home')->with('success','Welcome to MetrobasicMaths(MBM)');

    }

    public function  alluser()
    {
        $users=User::paginate(500);
        return view('adminpages.alluser',compact('users'));
    }

}
