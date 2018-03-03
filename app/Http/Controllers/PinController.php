<?php

namespace App\Http\Controllers;


use App\Pin;
use Illuminate\Http\Request;

class PinController extends Controller
{
    //

    public function createpin()
    {
        $numbers=Pin::paginate(500);
        return view('adminpages.pin',compact('numbers',$numbers));
    }

    public function storepin(Request $request)
    {   
        
        $numbers=[];

        $validatedData = $request->validate([
            'random' => 'required',      
        ]);

        $rand=(integer)$request->random;

        for($i=0; $i<$rand; $i++)
        {
            $rand_num =str_random(15);
            
            $pin = new Pin;

            $pin->numbers= $rand_num;
            
            $pin->save();
        }

        return back();
    }

    public function  pinstatus()
    {
        $pin = Pin::where('numbers', $request->random)->first();
        $usedPin = Usedpin::where('pin_id', $pin->id)->first();

        if($usedPin->status = 1)
        {
            dd(one);
        }elseif ($usedPin->status = 2 )
        {
            dd(2);
        }elseif($usedPin->status = 3){
            dd(3);
        }
        elseif ($usedPin->status <= 3)
        {
            dd(delete);
        }

    }


    public function correctpin()
    {
        return view('users.correctpin');
    }

    public function wrongpin()
    {
        return view('users.wrongpin');
    }

    public function listpin()
    {

        return view('adminpages.listpin');
    }
    
}
