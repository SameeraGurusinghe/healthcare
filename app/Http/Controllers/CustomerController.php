<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use Auth;

class CustomerController extends Controller
{
    public function myprescription(){
        $id = auth()->user()->email;
        $mydata = Prescription::where('email',$id)->get();
        return view("customer.customerprescription",compact("mydata")); 
    }
}