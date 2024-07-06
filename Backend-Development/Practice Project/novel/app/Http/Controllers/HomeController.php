<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "Laravel is love";
    }

    public function contact(){
        return "This is contact page";
    }
}



