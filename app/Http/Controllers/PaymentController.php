<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $code = Session::get('code');
        $price = Session::get('price');
        return view('payment.index', ['code' => $code, 'price' => $price]);
    }
}
