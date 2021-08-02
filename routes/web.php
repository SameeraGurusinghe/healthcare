<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

//Home routes
Route::get("/",[HomeController::class,"index"]);

Route::get("/about",[HomeController::class,"about"]);

Route::get("/contact",[HomeController::class,"contact"]);

Route::get("/news",[HomeController::class,"news"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::group(['middleware' => ['auth']], function() {
    Route::get("/prescription",[HomeController::class,"prescription"]);
});


//Admin routes
Route::get("/updatecontact",[AdminController::class,"updatecontact"]);

Route::post("/updatecontactdetails/{id}",[AdminController::class,"updatecontactdetails"]);

Route::post("/postnews",[AdminController::class,"postnews"]);

Route::get("/updatenews",[AdminController::class,"updatenews"]);

Route::get("/medicineorder",[AdminController::class,"medicineorderview"]);

Route::get("/customerfeedback",[AdminController::class,"customerfeedback"]);

Route::get("/orderconform/{id}",[AdminController::class,"orderconform"]);

Route::post("/conformord",[AdminController::class,"conformord"]);

//customer routes
Route::get("/myprescription",[CustomerController::class,"myprescription"]);

Route::post("/postprescription",[CustomerController::class,"postprescription"]);

Route::get("/feedback",[CustomerController::class,"feedback"]);

Route::post("/sendfeedback",[CustomerController::class,"sendfeedback"]);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
