<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Models\News;
use App\Models\Prescription;

class AdminController extends Controller
{
    public function updatecontact(){
        $contactdata=Contactus::all();
        return view("admin.updatecontact",compact("contactdata"));
    }

  
    public function medicineorderview(){
        $medicineorderdata=Prescription::all();
        return view("admin.medicineorder",compact("medicineorderdata"));
    }

    public function updatenews(){
        return view("admin.updatenews");
    }

    //news update function
    public function postnews(Request $request){
        $news = new News;
        $image = $request->image;

        //define code
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('newsimage',$imagename);

        $news->image=$imagename;
        $news->title=$request->title;
        $news->description=$request->newsdesciption;
        $news->save();
        return view("admin.updatenews");
    }

    //contact update
    public function contactup(Request $updateRequest){

        $contactupdate = new Contactus;
        $contactupdate->telephone = $updateRequest->phoneno;
        $contactupdate->email = $updateRequest->email;
        $contactupdate->address = $updateRequest->address;
        $contactupdate->website = $updateRequest->website;
        $contactupdate->save();
        return view("admin.updatecontact");
        //return redirect()->back();
    }

    public function updateview($id){
        $contact = Contactus::where('id',$id)->get();
        return view("admin.updatecontactview",compact("contact"));
    }

    public function finalcontactupdate($id){
        $contact = Contactus::where('id',$id)->get();
        return view("admin.updatecontactview",compact("contact"));

        $contactupdate->telephone = $updateRequest->phoneno;
        $contactupdate->email = $updateRequest->email;
        $contactupdate->address = $updateRequest->address;
        $contactupdate->website = $updateRequest->website;
        $contactupdate->save();
        return view("admin.updatecontact");
        //return redirect()->back();
    }

}
