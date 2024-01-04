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

    .btn_css {
        background: #b3c3c0;
        padding: 6px 19px;
        border-radius: 10px;
        font-family: gilroybold !important;
        margin-top: 12px;
        color: #000;
        outline: none;
        border: none;
    }
</style>
<div class="container">
    <div class="note d-flex justify-content-center align-items-center flex-column text-center">
        <!--<span class="noteBlack">Note</span>-->
        <span class="note-p">Congratulations, you're on the final step of officially becoming part of the CLEAN TO CLOSE™ team! Click "Checkout" below to finalizing your background check payment. </span>

        <form action="<?= g('base_url') ?>member-checkout" method="post" method="POST">
            <button type="submit" id="checkout-button" class="btn_css">Checkout</button>
        </form>
    </div>

    <!-- <button id="checkout-button">Checkout</button> -->
</div>