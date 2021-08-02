<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

//Home routes
Route::get("/",[HomeController::class,"index"]);

Route::get("/about",[HomeController::class,"about"]);

Route::get("/contact",[HomeController::class,"contact"]);

Route::get("/pharmacy",[HomeController::class,"pharmacy"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/prescription",[HomeController::class,"prescription"]);

Route::post("/postprescription",[HomeController::class,"postprescription"]);


//Admin routes
Route::get("/updatecontact",[AdminController::class,"updatecontact"]);

Route::get("/updatenews",[AdminController::class,"updatenews"]);
Route::get("/medicineorder",[AdminController::class,"medicineorderview"]);

Route::post("/postnews",[AdminController::class,"postnews"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::post("/finalcontactupdate/{id}",[AdminController::class,"finalcontactupdate"]);

Route::get("/orderconform/{id}",[AdminController::class,"orderconform"]);
Route::post("/conformord",[AdminController::class,"conformord"]);

//customer routes
Route::get("/myprescription",[CustomerController::class,"myprescription"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
