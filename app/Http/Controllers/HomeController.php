<?php

namespace App\Http\Controllers;

use App\Models\PaymentDataHandling;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function home()
{
    if(\Auth::check())
    {
        $id=\Auth::user()->id;

        $payment_data = PaymentDataHandling::where('user_id', $id)
         ->where('payment_status', 'SUCCESS')
         ->where('data', 'Registration_Amount')
         ->first();
        
       
         
         return view('layouts.main',compact('payment_data'));
    }
    else
    {
        $payment_data=null;

return view('layouts.main',compact('payment_data'));
    }
   
}
}
