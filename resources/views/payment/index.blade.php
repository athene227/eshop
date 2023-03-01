@extends('layouts.app')

@section('content')
<div class="absolute pt-[76px] h-full flex justify-center items-center w-full">
    <div class="border rounded p-5">
        <h3 class="text-3xl font-bold text-center" >Payment Details</h3>
        @if (Session::get('code') == 1)
            <div class="rounded border bg-green-300 mt-4 flex justify-between p-2">
                <p>Payment Successful!</p>
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            </div>
        @endif
        <h1 class="text-center text-2xl font-semibold mt-4">
            $ {{ isset($price) ? $price : Session::get('price') }}
        </h1>
        <div class="flex items-center justify-around mt-[20px]">
            <div class="flex items-center gap-2">
                <input type="radio" value="0" name="paytype" checked />
                <label>Credit Card</label>
            </div>
            <div class="flex items-center gap-2">
                <input type="radio" value="1" name="paytype" />
                <label>PayPal</label>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-[20px] w-[500px] min-w-[500px] h-[280px]">
            <div id="stripe_form">
                @include('payment.stripe')
            </div>
            <div id="paypal_form" class="hidden">
                @include('payment.paypal')
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script>
$(function () {
    $(".close").click(function() {
        $(this).parent().remove();
    })

    $("input[name='paytype']").click(function(e) {
        const elem = $(e.target);
        const val = elem.val();
        if (val == 1) {
            $("#stripe_form").addClass('hidden');
            $("#paypal_form").removeClass('hidden');
        } else {
            $("#stripe_form").removeClass('hidden');
            $("#paypal_form").addClass('hidden');
        }
    })
});
</script>
@endpush
