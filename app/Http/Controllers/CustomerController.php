<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use App\Models\Feedback;
use App\Models\Orderconform;
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

    $this->validate($request,[
        'name'=>'required|max:50|min:4',
        'email'=>'required|email',
        'description'=>'required|max:250|min:20',
        ]);

        $feedback->name=$request->name;
        $feedback->email=$request->email;
        $feedback->description=$request->description;
        $feedback->save();
        return view("customer.feedback");
    }

    //postprescription upload function
    public function postprescription(Request $request){
        $prescription = new Prescription;

    $this->validate($request,[
        'cusname'=>'required|string|max:255|regex:/(^([a-z A-Z]+)(\d+)?$)/u',
        'email'=>'required|email',
        'cusaddress'=>'required|max:250|min:5',
        'cusnic'=>'required|max:10|min:10',
        'cusnumber'=>'required|max:10|min:10',
        //'comment'=>'max:250|min:20',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

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