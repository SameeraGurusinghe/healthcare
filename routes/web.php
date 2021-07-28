<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/home', function () {
    return view('welcome');
});*/


Route::get("/",[HomeController::class,"index"]);

Route::get("/about",[HomeController::class,"about"]);

Route::get("/contact",[HomeController::class,"contact"]);

Route::get("/pharmacy",[HomeController::class,"pharmacy"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/updatecontact",[AdminController::class,"updatecontact"]);

Route::get("/updatenews",[AdminController::class,"updatenews"]);

Route::post("/postnews",[AdminController::class,"postnews"]);

//Route::post("/contactupdate",[AdminController::class,"contactup"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::post("/finalcontactupdate/{id}",[AdminController::class,"finalcontactupdate"]);



//Contact Details Save
//Route::post("/saveContactData",[AdminController::class,"saveContactData"]);
/*
Route::get('/updatecontact', function () {
$contactdata = App\Models\Contactus::all(); 
    return view('admin.adminhome')->with('updatecontact',$contactdata);
});*/

//Route::get("/updatecon/{id}",[AdminController::class,"updatecon"]);

//Route::post("/conupdate/{id}",[AdminController::class,"update"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
