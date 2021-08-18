<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FormController extends Controller
{
   public function form(Request $request) {
       return view('Form');
   }

   //Store details
   public function contactForm(Request $request) {

    //form validation
    $this->validate($request, [
        'name' => 'required',
        'phone' => 'required | regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'email' => 'required | email',
        'subject' => 'required | min:5',
        'message' => 'required'
    ]);

    //creating a new contact
    Contact::create($request->all());

    return back()->with('Success', 'I have recieved your message, thank you for contacting me');
   }

}
