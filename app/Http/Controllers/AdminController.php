<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\News;
use App\Models\Feedback;
use App\Models\Prescription; 
use App\Models\Orderconform;

class AdminController extends Controller
{
    public function updatecontact(){
        $contactdata = Contactus::all();
        return view("admin.updatecontact",compact("contactdata"));
    }

    public function medicineorderview(){
        $medicineorderdata = Prescription::orderBy('created_at','desc')->get();
        return view("admin.medicineorder",compact("medicineorderdata"));
    }

    public function customerfeedback(){
        $feedback = Feedback::orderBy('created_at','desc')->get();
        return view("admin.customerfeedbacks",compact("feedback"));
    }

    public function updatenews(){
        return view("admin.updatenews");
    }

    public function orderconform($id){
        $data=prescription::find($id);
        return view("admin.orderconform",compact("data"));
    }

    //news update function
    public function postnews(Request $request){
        $news = new News;

    $this->validate($request,[
        'title'=>'required|max:50|min:4',
        'newsdesciption'=>'required|max:250|min:20',
        'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('newsimage',$imagename);
        $news->image=$imagename;
        $news->title=$request->title;
        $news->description=$request->newsdesciption;
        $news->save();
        return view("admin.updatenews");
    }

    //contact update function
    public function updatecontactdetails(Request $updateRequest,$id){
        $contact = Contactus::find($id);
  
    $this->validate($updateRequest,[
        'phoneno'=>'required|min:10|numeric',
        'email'=>'required|email',
        'address'=>'required|max:250|min:10',
        'website'=>'required|url',
        ]);

        $contact->telephone = $updateRequest->phoneno;
        $contact->email = $updateRequest->email;
        $contact->address = $updateRequest->address;
        $contact->website = $updateRequest->website;
        $contact->save();
        return redirect()->back();
    }

    //postprescription update function
    public function conformord(Request $request){
        $orderconform = new Orderconform;
        $orderconform->email=$request->email;
        $orderconform->cusid=$request->cusid;
        $orderconform->tcharge=$request->tcharge;
        $orderconform->dliverdate=$request->dliverdate;
        $orderconform->comment=$request->comment;
        $orderconform->save();
        return view("admin.adminhome");
    }
}
