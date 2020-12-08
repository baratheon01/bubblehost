<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function contact(){
        return view('home');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'select' => 'required',
            'name' => 'required',
            'email' => 'required',
            'msg' => 'required'
        ]);

        $details =[
            'select' => $request->select,
            'name' => $request->name,
            'email'=> $request->email,
            'msg'=> $request->msg
        ];

        Mail::to('bubbleteam@bubblehost.co')->send(new ContactMail($details));
        return back()->with('enviado', 'ok');

    }
}
