<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->params['price'])) $price = $request['price'];
        else $price = Session::get('price');
        if (isset($request->params['code'])) $code = $request['code'];
        else $code = Session::get('code');

        return view('payment.index', ['code' => $code, 'price' => $price]);
    }
}
