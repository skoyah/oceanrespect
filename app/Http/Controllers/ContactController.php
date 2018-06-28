<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index() {
        return view('pages.contact');
    }

    public function send(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:30'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message
        ];

        Mail::to('support@oceanrespect.com')->send(new Contact($data));

        return redirect()->route('contact')->with('status', 'Message sent successfuly!');

    }
}
