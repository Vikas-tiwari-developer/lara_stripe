<?php

namespace App\Http\Controllers;

use App\Mail\SendPaymentLinkMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactPage(Request $request)
    {
        return view('frontend.contact');
    }

    public function sendContactMailWithPaymentLink(Request $request)
    {
        $maildata['name']  = $request->name;
        $maildata['email']  = $request->email;
        $maildata['payment_link']  = url('checkout');

        Mail::to($request->email)->send(new SendPaymentLinkMail($maildata));

        return back()
                ->with('success', 'Details Send to mail Successfully');
    }
}



