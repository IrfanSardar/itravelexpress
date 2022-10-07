<?php
namespace App\Http\Controllers;
use App\Models\coustmordetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class DashboardController extends Controller
{
    public function dashbord(Request $request)
    {
        $validated =  $request->validate([
            'email' => 'required',
            'password' => 'required',

           ]);

        $data = coustmordetail::where('email', $request->email)->first();
        if ($data) {
         if (Hash::check($request->password, $data->password)){
                if ($data->id === 1) {

                    return view('frontend.admindashboard')->with('data', $data);
                }else{
                return view('frontend.reservationform', $data);
                }
            }else{
                return redirect('login')->with('message', 'Please Enter Correct Password');
        
            }
            
        } else {

            return redirect('frontend.registar')->with('message', 'Please Registar First');
        }
    }
}
