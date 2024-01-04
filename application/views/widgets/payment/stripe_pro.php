<style>
    .StripeElement {
        background-color: white;
        height: 40px;
        padding: 10px 12px;
        border-radius: 4px;
        border: 1px solid transparent;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }

    .hide {
        display: none;
    }

    .ccard01 {
        border: none;
    }

    .customclassforstrippage {
        font-family: gilroylight;
        border: none;
        background-color: #f1f1f1;
        width: 100%;
        border-radius: 50px;
        padding: 5px 20px;
        height: 40px;
        outline: 0;
        margin-bottom: 2rem;
        color: #666666;
    }

    .custombtnnn1 {
        background: #b3c3c0;
        padding: 10px 13px;
        border-radius: 10px;
        font-family: gilroybold !important;
        color: #000;
        font-size: 12px;
        outline: none;
        border: none;
        width: 140px;
        margin-right: auto;
        margin-left: auto;
    }

    .customsahacah {
        margin-right: auto;
        margin-left: auto;
    }
</style>
<div class="row">
    <div class="col-md-12 ">
        <div class="panel panel-default credit-card-box">
            <div class="panel-heading display-table">
                <!-- <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                     
                    </div>                     -->
            </div>
            <div class="panel-body customsahacah ">

                <?php if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p><?php echo $this->session->flashdata('success'); ?></p>
                    </div>
                <?php } ?>

                <form role="form" action="<?php echo g('base_url'); ?>checkout/stripe_payment" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo g('db.admin.stripe_publishable_key')?>" id="payment-form">

                   

                    <div class='form-row row'>
                        <input type="hidden" name="amount" value="<?php echo ($package_detail['signup_package_amount']) ?>">
                        <input type="hidden" name="id" value="<?php echo ($package_detail['signup_id']) ?>" />
                        <div class='col-lg-6 form-group  card required ccard  ccard01'>
                            <label class='control-label'>Name on Card</label>
                            <input autocomplete='off' id="" class='form-control customclassforstrippage ' name="name_card" type='text' placeholder="Name on Card">
                        </div>
                        <div class='col-lg-6 form-group  card required ccard  ccard01'>
                            <label class='control-label'>Address Associated with Card</label>
                            <input autocomplete='off' id="" class='form-control customclassforstrippage ' name="address_card_associated" type='text' placeholder="Address Associated with Card">
                        </div>
                        <div class='col-lg-6 form-group  card required ccard  ccard01'>
                            <label class='control-label'>Card Number </label>
                            <input autocomplete='off' id="mycardNumber" class='form-control card-number customclassforstrippage ' name="card-number" type='number'>
                            <p class="card_number" style="display: none;">Your card number must be 16 digit number</p>
                        </div>
                        <div class='col-lg-6  form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off' id="mycvcNumber" class='form-control card-cvc customclassforstrippage' name="card-cvc" placeholder='ex. 311' type='number'>

                        </div>

                    </div>

                    <div class='form-row row'>
                        <div class='col-lg-6  form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month customclassforstrippage' name="card-month" placeholder='MM' type='number'>
                        </div>
                        <div class='col-lg-6  form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year customclassforstrippage' name="card-year" placeholder='YYYY' type='number'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <span>
                                Package Amount: <b>$<?php echo ($package_detail['signup_package_amount'])?></b>
                            </span><br>
                            <span>
                                Background Check Amount: <b>$<?php echo ($package_detail['signup_members_amount'])?></b>
                            </span><br>
                            <span>
                                Total Amount: <b>$<?php echo ($package_detail['signup_package_amount']+$package_detail['signup_members_amount']) ?></b>
                            </span>
                        </div>
                    </div>
                    <div class='form-row row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                                again.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                        <button class="btn btn-primary btn-lg btn-block custombtnnn1" type="submit">Pay Now</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
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

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                Loader.show();
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
                AdminToastr.success('Your account created successfully', 'Success');
            }
        }


    });
</script>
<script type="text/javascript">
    $('#mycardNumber').change(function(e) {
        console.log(e);
        if ($(this).val().length > 16) {

            $('#mycardNumber').val('');
        }
    });
    $('#mycvcNumber').change(function(e) {
        console.log(e);
        if ($(this).val().length > 3) {

            $('#mycvcNumber').val('');

        }
    });
</script>