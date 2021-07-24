<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function updatecontact(){
        return view("admin.updatecontact");
    }

    public function updatenews(){
        return view("admin.updatenews");
    }
}
