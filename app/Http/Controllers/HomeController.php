<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contactus;
use App\Models\News;
use App\Models\Orderconform;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }

    public function redirects(){
        $usertype = Auth::user()->usertype;

        if($usertype == '1'){
            return view("admin.adminhome");
        }

        else{


                $id = auth()->user()->email;
                $mydata = Orderconform::where('email',$id)->orderBy('created_at','desc')->get();
                return view("customer.customerhome",compact("mydata")); 
            
        
        
        }
    }

    public function about(){
        return view ("about");
    }

    public function contact(){
        $contactdata=Contactus::all();
        return view ("contact",compact("contactdata"));
    }

    public function news(){
        $newsdata=News::orderBy('created_at','desc')->get();
        return view ("news",compact("newsdata"));
    }
    
     public function prescription(){
        return view ("prescription");
    }

}
