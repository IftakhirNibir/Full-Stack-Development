<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function viewpage()
    {
        return view("welcome");
    }

    public function postview(Request $request)
    {
        $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
        ]);

        $output = $request->number1 + $request->number2;

        return view('welcome',compact('output'));
    }
}



