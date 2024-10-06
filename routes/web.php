<?php

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::post("/register",function (){
// return view("user");
// });

Route::post("/register",[User::class,"register"]);