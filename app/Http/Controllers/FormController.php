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

//    //Store details
//    public function contactForm(Request $request) {
//     //form validation
//     $this->validate($request,[
//         'name' => 'required',
//         'phone' => 'required | regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//         'email' => 'required | email',
//         'subject' => 'required | min:5',
//         'message' => 'required'
//     ]);

//     //creating a new contact
//    Contact::create($request->all());
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
    }
    //send mail to me
//     Mail::send('mail', [
//         'name' => $request->get('name'),
//         'phone' => $request->get('phone'),
//         'email' => $request->get('email'),
//         'subject' => $request->get('subject'),
//         'user_query' => $request->get('message'),
//     ],
//         function($message) use ($request) {
//             $message->from($request->email);
//             $message->to('davidjacobs522@gmail.com', 'Developer')->subject($request->get('subject'));
//    });
//     return back()->with('Success', 'I have recieved your message, thank you for contacting me');
//    }

}
