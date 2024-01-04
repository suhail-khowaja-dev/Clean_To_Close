<style>
  .note {
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .noteBlack {
    font-weight: 700;
    font-size: 3rem;
    font-family: gilroybold;
  }
</style>
<?php

// $session = \Stripe\Checkout\Session::create([
//     'payment_method_types' => ['card'],
//     'line_items' => [[
//       'price_data' => [
//         'currency' => 'usd',
//         'product_data' => [
//           'name' => 'T-shirt',
//         ],
//         'unit_amount' => 2000,
//       ],
//       'quantity' => 1,
//     ]],
//     'mode' => 'subscription',
//     'success_url' => 'http://localhost/cleantoclose_dev/',
//     'cancel_url' => 'http://localhost/cleantoclose_dev/user-login?type=2',
//   ]);
?>
  

<script src="https://js.stripe.com/v3/"></script>
<div class="container">
  <div class="note d-flex justify-content-center align-items-center flex-column text-center">
    <button id="checkout-button">Checkout</button>
    <script>
      var stripe = Stripe('pk_test_51JVMm8GgXkd9k1VN6sXyZVIb6mW2s52dVAh5PC4wSljjn3NJ9xn3yIvxD82ohkBBEfchAWWXIkazd9I5qfhCsXsg00XOKEaUO0');
      const btn = document.getElementById("checkout-button")
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        stripe.redirectToCheckout({
          sessionId: "<?php echo $session->id; ?>"
        });
      });
    </script>
  </div>
</div>