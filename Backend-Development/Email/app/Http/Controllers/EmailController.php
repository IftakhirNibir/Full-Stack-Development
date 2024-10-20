<?php

namespace App\Http\Controllers;

use App\Mail\welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function sendEmail() {
        $toEmail = "iftakhirnibir@gmail.com";
        $message = "Hello, Welcome to our website";
        $subject = "Welcome to Nibir";

        $request = Mail::to($toEmail)->send(new welcomeemail($message, $subject));

        dd($request);
    }


    public function contactform(){
        return view('contact');
    }

    public function sendContactEmail(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:10|max:255',
            'attachment' => 'required|mimes:pdf,txt,doc,docx,xls,xlsx|max:2048',
        ]);
    
        $fileName = time() . "." . $request->file('attachment')->extension(); //file name
        $request->file('attachment')->move('uploads', $fileName);

        $adminEmail = "iftakhirnibir@gmail.com";

        $response = Mail::to($adminEmail)->send(new welcomeemail($request->all(), $fileName));

        if ($response) {
            return back()->with('success', "Thanks you for contacting us.");
        } else {
            return back()->with('error', "Unable to submit form, Please try again.");
        }
    }
}





// $toEmail = "iftakhirnibir@gmail.com";
// $moreuser = "arishomair21@gmail.com";

 // $request = Mail::to($toEmail)->send(new welcomeemail($message, $subject,$details));

        // dd($request);