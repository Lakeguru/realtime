<?php

namespace App\Http\Controllers;

use Validator;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function usercompose()
    {
        return view('users.postmsg');
    }

    public function postuser()
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'body' => 'required',
            ]);

            dd($request->all());

    }

    public function enterpin()
    {

    }
    public function listmsg()
    {
        return view('adminpages.listmsg');
    }

    public function readmsg()
    {
        return view('adminpages.checkmsg');
    }

    public function delete()
    {
        return view('adminpages.');
    }

    public function forward()
    {

    }

    public function reply()
    {
        
    }

    public function print()
    {

    }
}
