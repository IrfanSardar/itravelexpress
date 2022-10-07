<?php

namespace App\Http\Controllers;
use App\Models\coustmordetail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CoustmorDetailController extends Controller
{
    public function register(Request $request){

        $validated =  $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:coustmordetails|max:255',
            'phonenumber' => 'required',
            'password' => 'required',
            'address' => 'required',
            
            
            

           
        ]);
       
        $validated['password']=Hash::make($request->password);
        $coustmor=new coustmordetail($validated);
        $coustmor->save();
        return view('frontend.log-in');

    }
}
