<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class User extends Controller
{
    public function register(Request $request,Response $response){
       $incomingFields=$request->validate([
        "username"=>["required","min:3"],
        "password"=>"required"
       ]);

       ModelsUser::create($incomingFields);
        return view("user",["username"=>$request->username]);
    }
}
