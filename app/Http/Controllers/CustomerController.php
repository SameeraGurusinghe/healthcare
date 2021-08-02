<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use App\Models\Feedback;
use Auth;

class CustomerController extends Controller
{
    public function myprescription(){
        $id = auth()->user()->email;
        $mydata = Prescription::where('email',$id)->orderBy('created_at','desc')->get();
        return view("customer.customerprescription",compact("mydata")); 
    }

    public function feedback(){
        return view("customer.feedback");
    }

    public function sendfeedback(Request $request){
        $feedback = new Feedback;
        $feedback->name=$request->name;
        $feedback->email=$request->email;
        $feedback->description=$request->description;
        $feedback->save();
        return view("customer.feedback");
    }

    //postprescription update function
    public function postprescription(Request $request){
        $prescription = new Prescription;
        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('prescriptionimage',$imagename);

        $prescription->image=$imagename;
        $prescription->cusname=$request->cusname;
        $prescription->email=$request->email;
        $prescription->cusaddress=$request->cusaddress;
        $prescription->cusnic=$request->cusnic;
        $prescription->cusnumber=$request->cusnumber;
        $prescription->commen=$request->comment;
        $prescription->save();
        return view("prescription");
    }

}