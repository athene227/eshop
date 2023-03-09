<?php

namespace App\Http\Controllers;

use Stripe;
use Session;
use App\Models\Good;
use Illuminate\Http\Request;

class StripePaymentController extends Controller
{
    /**
     * stripe response method
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $good = Good::find($request->id);

        if ($good->amount == 0) {
            return to_route('payment', ['code' => 0, 'good' => $good->id, 'message' => 'No goods left.']);
        }

        Stripe\Charge::create ([
            "amount" => $good->price * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment for ".$good->name
        ]);

        return to_route('payment', ['code' => 1, 'good' => $good->id, 'message' => 'Payment Successful!']);
    }
}
