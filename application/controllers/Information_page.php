<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Information_page extends MY_Controller {

	/**
	 * Terms_of_service Controller
	 */
	
	public function __construct()
    {
    	// Call the Model constructor latest_product
        parent::__construct();
    }

    // Default Page
    public function index()
    {
        global $config;
        //$data['banner'] = $this->model_inner_banner->get_banner(2);
        // Get and set cms data
        // $data['terms_service'] = $this->model_cms_page->get_page(21);
        // debug($data['terms_service'] ,1);
        // Set banner heading
        //$data['banner_heading'] = "Terms and Conditions";
        // Load View
        $this->load_view("index");
    }

     public function checkout()
    {
        # code...
        require_once('application/libraries/stripe-php/init.php');
        // This is a public sample test API key.
        // Don’t submit any personally identifiable information in requests made with this key.
        // Sign in to see your own test API key embedded in code samples.
        \Stripe\Stripe::setApiKey('sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/cleantoclose_dev/public';

        // $stripe = new \Stripe\StripeClient(
        //     'sk_test_ieP3GvDyISjQZeNo6M70ZJKD'
        //   );
        // $subscription = \Stripe\Subscription::create([
        //   'customer' => 'cus_LAEjuicFJ94CEX',
        //   'items' => [[
        //     'price_data' => [
        //       'unit_amount' => 5000,
        //       'currency' => 'usd',
        //       'product' => 'prod_LAEo3QpfETX6jT',
        //       'recurring' => [
        //         'interval' => 'month',
        //       ],
        //     ],
        //   ]],
        // ]);
        //   debug($subscription,1);
        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Stripe Checkout',
                    ],
                    'unit_amount' => 120 * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => g('base_url') . "account/StripeCheckout",
            'cancel_url' => 'http://localhost/cleantoclose_dev/account/browse_task',
        ]);
        // debug($checkout_session,1);
        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
        $charge = str_replace('Stripe\Checkout\Session JSON:', '', $checkout_session);
    }



}
