<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->all();
        if (array_key_exists('price', $query)) $price = $query['price'];
        else $price = Session::get('price');
        if (array_key_exists('code', $query)) $code = $query['code'];
        else $code = Session::get('code');

        return view('payment.index', ['code' => $code, 'price' => $price]);
    }
}
