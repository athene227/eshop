<div class="text-center" id="paypal">
    <div>
        <a href="https://www.paypal.com/in/webapps/mpp/paypal-popup"
            title="How PayPal Works" class="overflow-auto"
            onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
            <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" alt="PayPal Logo" class="mx-auto">
        </a>
    </div>
    <div class="mt-[20px]">
        <a href="{{ route('paypal') }}" class="bg-darkblue hover:bg-darkblue-dark p-3 text-white rounded">
            Pay from Paypal
        </a>
    </div>
</div>
