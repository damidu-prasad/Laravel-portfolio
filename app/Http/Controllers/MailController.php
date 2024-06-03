<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact_mail_send(Request $request)
    {
        $mailData = [
            'title' => 'Mail From Portfolio',
            'body' => [
                'Full Name' => $request->input('full-name'),
                'Email' => $request->input('email'),
                'Subject' => $request->input('subject'),
                'Message' => $request->input('message'),
            ],
        ];

        Mail::to('thamoddyarashmithadissanayake@gmail.com')->send(new ContactMail($mailData));
        return redirect()->back()->with('success', 'Email Sent Successfully');
    }
}
