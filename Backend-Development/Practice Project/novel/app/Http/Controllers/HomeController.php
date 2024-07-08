<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return 'Laravel is love';
    }

    public function contact()
    {
        return 'This is contact page';
    }
}
