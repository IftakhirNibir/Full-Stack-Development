<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //our code
    public function welcome(){
        return view("welcome");
    }
}



