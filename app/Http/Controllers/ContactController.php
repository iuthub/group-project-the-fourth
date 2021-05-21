<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact(){
        return view('contactus');
    }

    public function sendEmail(Request $req){
        $details = [
            'name'=>$req->name,
            'email'=>$req->email,
            'msg'=>$req->msg
        ];
    Mail::to('1910025.elina.abdrashitova@gmail.com')->send(new ContactMail($details));
    return back()->with('message_sent','Your message has been sent successfully!');
    }
}
