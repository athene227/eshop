<form role="form" action="{{ route('stripe.post') }}" method="post"
    class="require-validation mt-[15px] mx-[20px]" data-cc-on-file="false"
    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
    @csrf
    <input type="hidden" name="price" value="{{$price}}" />
    <div class="required">
        <label for="name" class="font-semibold">Name on Card</label>
        <input class='border rounded w-full' name="name" size='4' type='text'>
    </div>

    <div class="mt-2 required">
        <label class="font-semibold">Card Number</label>
        <input autocomplete='off' class='border rounded w-full card-number' size='20' type='text'>
    </div>

    <div class='grid grid-cols-1 md:grid-cols-3 gap-3 mt-2'>
        <div class="required">
            <label class='font-semibold'>CVC</label>
            <input autocomplete='off' class='border rounded w-full card-cvc' placeholder='ex. 311' size='4' type='text'>
        </div>

        <div class="required">
            <label class='font-semibold'>Expiration Month</label>
            <input class='border rounded w-full card-expiry-month' placeholder='MM' size='2' type='text'>
        </div>

        <div class="required">
            <label class='font-semibold'>Expiration Year</label>
            <input class='border rounded w-full card-expiry-year' placeholder='YYYY' size='4' type='text'>
        </div>
    </div>

    <div class='mt-2 hidden error'>
        <div class='border rounded bg-red-300 alert'>
            Please correct the errors and try  again.
        </div>
    </div>

    <div class="mt-2">
        <button class="w-full bg-darkblue hover:bg-darkblue-dark rounded text-white py-2" type="submit">
            Pay Now
        </button>
    </div>
</form>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/

    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');

        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });

        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    });

    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];

            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }

    $(".close").click(function() {
        $(this).parent().remove();
    })

});
</script>
