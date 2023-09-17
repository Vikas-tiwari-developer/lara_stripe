<?php

namespace App\Http\Controllers;

use Stripe;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function stripePage(): View
    {
        return view('frontend.stripe_payment');
    }
	
    public function stripePost(Request $request): RedirectResponse
    {
        // dd($request->all());
        $stripe_key = 'pk_test_kjsvkPhN4lfThW1yHYTgqTko';
        $stripe_secret = 'sk_test_6YXlR1iMSwHpXAHPqyWzhjvE';
        Stripe\Stripe::setApiKey($stripe_secret);
      
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Test payment from coding digital" 
        ]);
                
        return back()
                ->with('success', 'Payment successful!');
    }
}
