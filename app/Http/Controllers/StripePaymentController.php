<?php

namespace App\Http\Controllers;

use Stripe;
use Session;
use Illuminate\Http\Request;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe', ['price' => 100]);
    }

    /**
     * stripe response method
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com"
        ]);

        Session::flash('success', 'Payment successful!');
        return view('stripe', ['price' => 100]);
    }
}
