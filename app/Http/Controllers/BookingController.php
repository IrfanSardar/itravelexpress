<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    function booking(Request $request){
        $validated =  $request->validate([
            'pickupaadress' => 'required',
            'numberofguest' => 'required',
            'dropofaddress' => 'required',
            'pickofdate' => 'required',
            'pickoftime' => 'required',
            
            

           
        ]);
        return $request->input() ;
    }
}
