<?php

namespace App\Http\Controllers;

use App\Models\PaymentDataHandling;
use Illuminate\Http\Request;

class headerController extends Controller
{
    public function headers()
    {
       $data=\auth::user()->id;
       $main=PaymentDataHandling::where('user_id',$data)->where('data','Registration_Amount')->where('payment_status','SUCCESS')->first();
        return view('includes.header',compact('main'));
    }
}
