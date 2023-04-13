<?php

namespace App\Http\Controllers;
Use App\Models\itassetsuser;

use Illuminate\Http\Request;

class ITassetController extends Controller
{
    public function index(){
        return view ('login');
    }

    public function login(Request $request){
        
        $validateData = $request->validate([
            'uname' => 'required',
            'pword' => 'required',
        ]);

        $user_info = itassetsuser::where ('uname', '=', $request->uname)->first();

            if(!$user_info){
                return back()->with('fail','User not found');
            }
            
            
        }     
     
}
