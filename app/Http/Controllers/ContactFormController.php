<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(){

        return view('front.contact');
    }

    public function store(Request $request){
            $data = $request->validate([
               'name' => 'required',
               'email' => 'required',
               'subject' => 'required',
               'message' => 'required' 
            ]);

            //return $data;
            Mail::to('trey94kingz@gmail.com')->send(new ContactFormMail($data));
            return redirect()->back()->with('success', 'Message sent successfully');
    }
}
