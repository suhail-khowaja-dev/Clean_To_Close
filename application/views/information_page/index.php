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

    .note-p {
        font-family: 'gilroymedium';
        font-weight: 700;
        font-size: 18px;
        margin-top: 17px;
    }
</style>
<script src="https://js.stripe.com/v3/"></script>
<div class="container">
    <div class="note d-flex justify-content-center align-items-center flex-column text-center">
        <!--<span class="noteBlack">Note</span>-->
        <span class="note-p">Congratulations! You are one step closer to becoming an independent cleaner for Clean To Close. Once you are approved, you will receive an approval email and will be able to start claiming jobs! The email will be sent 24-72 hours after submission. We look forward to your partnership!</span>
    </div>
    <form action="<?= g('base_url') ?>information_page/checkout" method="post" method="POST">
        <button type="submit" id="checkout-button">Checkout</button>
      </form>
    <!-- <button id="checkout-button">Checkout</button> -->
</div>