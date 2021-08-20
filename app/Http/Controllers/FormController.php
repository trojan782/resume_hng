<?php

namespace App\Http\Controllers;

use App\Mail\messageSent;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;

class FormController extends Controller
{
   public function form(Request $request) {
       return view('Form');
   }

   //returning the success page view
   public function succ() {
       return view('success');
   }

   public function home() {
       return view('Home');
   }

    public function contactForm(Request $request) {
        //getting values of the user from the form
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' =>$request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        //sending the mail and the data from the form
        Mail::to('davidjacobs522@gmail.com')->send(new messageSent($details));
        return redirect('/success');
    }
}
