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

    public function contactForm(Request $request) {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' =>$request->phone,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        Mail::to('davidjacobs522@gmail.com')->send(new messageSent($details));
        return back()->with('Mail_sent', 'Thank You for getting in touch with me');
        return redirect()->back();
    }
}
