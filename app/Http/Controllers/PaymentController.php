<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use App\Models\Good;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->all();
        $code = -1;
        $good_id = 0;
        $message = 'Unknown error!';
        if (array_key_exists('good', $query)) $good_id = $query['good'];
        if (array_key_exists('code', $query)) $code = $query['code'];
        if (array_key_exists('message', $query)) $message = $query['message'];
        if ($good_id != 0) $good = Good::find($good_id);

        if($code == 1) {
            $good->amount --;
            $good->buyers()->attach(Auth::user()->id);
            $good->save();
        }

        return view('payment.index', ['code' => $code, 'item' => $good, 'message' => $message]);
    }
}
