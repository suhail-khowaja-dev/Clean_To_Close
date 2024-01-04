<style>
    @font-face {
        font-family: gilroybold;
        src: url(../../front_assets/fonts/glory/Gilroy-Bold.ttf)
    }

    .nav.nav-pills li.active>a,
    .nav.nav-pills li.active>a:hover,
    .nav.nav-pills li.active>a:focus {
        color: #fff !important;
        cursor: default !important;
        background-color: #545b62 !important;
    }

    .nav.nav-pills li>a,
    .nav-pills>li>a {
        background: #b3c3c0;
        color: #555555;
        border-radius: 8px !important;
        min-width: 150px;
        text-align: center;
        font-family: gilroybold !important;
        color: #000;
        font-size: 12px;
    }

    .panel-heading.panel-heading-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .nav.nav-pills li {
        margin-right: 1rem;
        margin-bottom: 10px;
    }

    .nav-tabs {
        border-bottom: none;
    }

    .nav-tabs,
    .nav-pills {
        margin-bottom: 50px;
        margin-top: 100px;
        justify-content: space-around;
        display: flex;
    }

    .panel-body {
        background-color: #f1f1f1;
        padding: 4rem 12rem;
    }

    .panel-default {
        border: none;
    }

    .panel-heading {
        border-bottom: none;
    }

    .panel-default>.panel-heading {
        background-color: transparent;
    }

    .tab-content {
        padding: 2rem 6rem;
    }

    .tab-content .row .col-lg-4 label,
    .tab-content .row .col-lg-6 label,
    .tab-content .row .col-lg-12 label {
        margin-top: 3px !important;
        margin-left: 5px !important;
        color: #666666 !important;
        /* font-weight: 400; */
        text-transform: uppercase;
    }

    .tab-content .row .col-lg-6 input,
    .tab-content .row .col-lg-4 input,
    .tab-content .row .col-lg-12 input {
        font-family: gilroylight;
        border: none;
        background-color: #f1f1f1;
        width: 100%;
        border-radius: 50px !important;
        padding: 5px 20px;
        height: 40px;
        outline: 0;
        margin-bottom: 2rem;
        color: #666666;
    }

    .tab-content .row .col-lg-12 {
        justify-content: center;
    }

    .tab-content .row .col-lg-12.d-flex.align-items-center.uptoo {
        justify-content: flex-start;
    }

    .tab-content #two .row .col-lg-12 input {
        max-width: 40%;
    }

    .tab-content .row .col-lg-12 button {
        font-family: gilroybold;
        color: #000;
        font-size: 14px;
        background-color: #b4c3c0;
        border: none;
        outline: 0;
        text-transform: uppercase;
        padding: 10px 28px;
        border-radius: 6px !important;
    }

    .tab-content .row .col-lg-12 h3 {
        font-family: gilroybold;
        color: #000;
        font-size: 25px;
        text-transform: capitalize;
        padding-top: 25px;
        text-align: left;
    }

    .tab-content .row .col-lg-12.saveChangescol {
        justify-content: flex-end;
    }

    .tab-content .row input:read-only {
        background-color: #717373;
        color: #000;
    }

    .tab-content .row input::placeholder {
        color: #000;
    }

    .containerRadio,
    .containerRadio22 {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 0;
        cursor: pointer;
        font-size: 16px;
        font-family: gilroylight;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .containerRadio input,
    .containerRadio22 input {
        position: absolute;
        opacity: 0;
        cursor: pointer
    }

    .checkmarkRadio {
        position: absolute;
        top: 0;
        left: 13px;
        height: 20px;
        width: 20px;
        background-color: transparent;
        border: 1px solid grey;
        border-radius: 50%
    }

    .containerRadio:hover input~.checkmarkRadio,
    .containerRadio22:hover input~.checkmarkRadio {
        background-color: #ccc
    }

    .containerRadio input:checked~.checkmarkRadio,
    .containerRadio22 input:checked~.checkmarkRadio {
        background-color: transparent;
        border: 1px solid grey
    }

    .checkmarkRadio:after {
        content: "";
        position: absolute;
        display: none
    }

    .containerRadio input:checked~.checkmarkRadio:after,
    .containerRadio22 input:checked~.checkmarkRadio:after {
        display: block
    }

    .containerRadio .checkmarkRadio:after,
    .containerRadio22 .checkmarkRadio:after {
        top: 3px;
        left: 3px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #666
    }

    /* cstm-dropdown */


    /*the container must be positioned relative:*/

    .custom-select {
        padding: 0;
        border: none;
        position: relative;
    }

    .custom-select select {
        display: none;
        /*hide original SELECT element:*/
    }


    /*style the arrow inside the select element:*/

    .select-selected:after {
        position: absolute;
        content: "";
        top: 50%;
        right: 3%;
        width: 0;
        height: 0;
        border: 6px solid transparent;
        border-color: #666666 transparent transparent transparent;
    }


    /*point the arrow upwards when the select box is open (active):*/

    .select-selected.select-arrow-active:after {
        border-color: transparent transparent #666666 transparent;
        top: 7px;
    }


    /*style the items (options), including the selected item:*/

    .select-items div,
    .select-selected {
        color: #ffffff;
        font-family: gilroylight;
        border: none;
        background-color: #fff;
        width: 100%;
        padding: 9px 20px;
        height: 40px;
        outline: 0;
        color: #666666;
        border-radius: 50px !important;
    }


    /*style items (options):*/

    .select-items {
        position: absolute;
        background-color: white;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99;
        box-shadow: 0px 1px 9px 0px #00000017;
        border-radius: 10px;
        overflow: hidden;
    }


    /*hide the items when the select box is closed:*/

    .select-hide {
        display: none;
    }

    .select-items div:hover,
    .same-as-selected {
        background-color: #b3c3c0;
    }

    .select-selected {
        border-radius: 50px;
    }

    .select-items div {
        background-color: transparent;
    }

    .selctInpp input {
        border: none;
        border-bottom: 2px solid;
        border-color: #b3c3c0;
        width: 70px;
        outline: none;
        padding: 0 10px;
        margin-left: 10px;
        /* margin-right: 50px; */
    }

    .tab-content .row input::placeholder {
        color: #666666 !important;

    }

    .tab-content #menu2 .row .col-lg-12 span {
        color: red;
        font-weight: 700;
        display: flex;
    }

    .tab-content #menu2 .row .col-lg-12 span p {
        color: red;
        margin: 0;
        color: #666666 !important;
        padding-left: 1.2rem;
    }

    .tab-content #menu2 .row .col-lg-12 span p a {
        color: #000 !important;
        text-decoration: none;
    }

    .tab-content #menu2 .row .mar-1 {
        margin-top: 1.2rem;
    }

    .tab-content #menu2 .row .mar-1 ul {
        margin-top: 2rem;
    }

    .tab-content #menu2 .row .mar-1 ul li {
        color: #666666 !important;
    }

    .tab-content .for-shodow {
        box-shadow: 0px 0px 4px #71717152;
        border-radius: 5px !important;
        padding: 1.5rem 3rem;

    }

    .tab-content #menu2 .row {
        box-shadow: 0px 0px 4px #71717152;
        border-radius: 5px !important;
        padding: 1rem 3rem;

    }

    .tab-content #menu2 .for-top-sapce {
        margin-top: 1.5rem;
    }

    .tab-content #menu3 table tr input {
        width: 100%;
        font-family: gilroylight;
        border: none;
        font-weight: 600;
        background-color: #f1f1f1;
        border-radius: 50px !important;
        padding: 2px 16px;
        height: 36px;
        outline: 0;
        /* color: #666666; */
    }

    .tab-content #menu3 table tr button {
        font-family: gilroybold;
        color: #000;
        font-size: 14px;
        background-color: #b4c3c0;
        border: none;
        outline: 0;
        text-transform: uppercase;
        padding: 6px 28px;
        border-radius: 6px !important;
    }

    .tab-content #menu3 table tr .for-center {
        text-align: center;
    }

    #menu4 .col-lg-12 .for-sapce-between {
        display: flex;
        justify-content: space-between;
    }

    #menu4 .col-lg-12 .for-sapce-between label {
        font-weight: 800;
        font-family: gilroylight;
    }

    #menu4 .col-lg-12 .for-sapce-between span {
        color: #666666 !important;

    }

    #menu4 .aprroved-btn {
        display: flex;
        justify-content: end;
        margin-top: 2rem;
        padding: 0;
    }

    #menu6 .row {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding-top: 2.5rem;
    }

    #menu6 .row input[readonly]::placeholder {
        color: #000 !important;
    }

    .tab-content #menu5 table tr td {
        font-family: gilroylight;
        font-weight: 600;
        color: #666666;

    }

    #menu5 .aprroved-btn {
        display: flex;
        justify-content: end;
        padding: 0;
    }

    #menu5 .aprroved-btn span,
    #menu5 .aprroved-btn label {
        font-weight: 800;
        margin-top: 0 !important;
    }

    .for-fix-width {
        overflow-x: scroll;
        overflow: hidden;
    }

    .for-fix-width table {
        width: 100%;

    }

    @media only screen and (max-width: 414px) {
        .nav.nav-pills li {
            margin-left: 1rem;
            margin-right: 1rem;
            width: 159px;
        }

        .on-mobile-block {
            display: flex;
        }

        .nav-tabs,
        .nav-pills {
            display: flex;
            flex-wrap: wrap;
        }

        .tab-content {
            padding: 2rem 2rem;
        }

        .tab-content .for-shodow {
            padding: 1.5rem 1rem;
        }

        .tab-content #menu2 .row {
            padding: 1rem 0;
        }

        .for-break-line {
            width: 85%;
        }

        .percent-width {
            width: 100%;
            margin-top: 10px;
        }

        .for-mobile-dire-col {
            flex-direction: column;
        }

        .for-margin-left {
            margin-left: 0;
        }

        .for-margin-left2 {
            margin-left: 0;
        }

        .for-summary {
            flex-direction: column;
        }
    }

    @media only screen and (max-width: 375px) {
        .nav.nav-pills li {
            margin-left: 1rem;
            margin-right: 0rem;
            width: 159px;
        }
    }

    @media only screen and (max-width: 360px) {
        .nav.nav-pills li {
            margin-left: 5px;
            margin-right: 0rem;
            width: 159px;
        }
    }

    .address {
        background-color: #717373 !important;
        color: black !important;
    }

    .SaveNEdit {
        font-family: gilroybold;
        color: #000;
        font-size: 14px;
        background-color: #b4c3c0;
        border: none;
        outline: 0;
        text-transform: uppercase;
        padding: 10px 28px;
        border-radius: 6px !important;
        /* margin-top: 6%; */
    }
    button#re_active {
    position: relative;
    left: 67rem;
    bottom: 6rem;
    }
</style>




<div class="tab-content">
    <div id="home" class="tab-pane fade for-shodow in active">
        <form action="<?= g('admin_base_url') ?>signup_cleaner/suspend_cleaner" method="post" id="cleanerunaproved" class="footTop">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Suspended Note</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column">
                    <!-- <label for="">Note</label> -->
                    <input type="hidden" value="<?php echo $signup_suspend_cleaner['signup_id'] ?>" name="cleanersuspended[signup_id]">
                    <input type="text" name="cleanersuspended[signup_note]" value="<?php echo $signup_suspend_cleaner['signup_note'] ?>" placeholder="Note">
                </div>
                <div class="col-lg-6">
                    <button type="button" id="submitInfo" class="SaveNEdit">Suspended</button>
                </div>
            </div>
        </form>
        <!-- reactive button -->
        <? if($signup_suspend_cleaner['signup_status'] == 3){?>
            <div class="row">
            <div class="col-lg-6">
            <form class="cstm-form" id="re_active_function" class="footTop">
            <input type="hidden" name="reactive[signup_id]" value="<?php echo $_GET['id'] ?>">
                <button type="button" id="re_active" class="SaveNEdit">Re-Active</button>
            </form>
            </div>

        </div>
        <?php
        }
        ?>
        <!-- reactive button -->
    </div>
</div>
<!-- end -->

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        var obj;
        $("#submitInfo").click(function(e) {
            e.preventDefault();
            setTimeout(function() {
                // Prevent form submit
                var obj = $("#cleanerunaproved");
                // Get form data
                var data = obj.serialize();
                // Get post url
                var url = obj.attr('action');
                // Submit action
                var response = AjaxRequest.fire(url, data);
                if (response.status == 1) {
                    AdminToastr.success(response.message, "User Successfully Suspended");
                    window.location.href = base_url + "signup_cleaner";
                } else {
                    AdminToastr.error(response.message, "Error");
                }
                // Add return
                return false;
            }, 1000);
            return false;
        });
        // realse job function
        $("#re_active").click(function() {
            // Loader.show();
            var data = new FormData(document.getElementById("re_active_function"));
            var url = "<?= g('admin_base_url') ?>signup_cleaner/re_active";
            $.ajax({
                url: url,
                type: "POST",
                data: data,
                dataType: "json", // Has to be false to be able to return response
                processData: false,
                contentType: false,
                success: function(response) {
                    setTimeout(function() {
                        if (response.status == 1) {
                            AdminToastr.success(response.message, "User Re-Active Sucessfully");
                            window.location.href = base_url + "signup_cleaner";
                        } else {
                            AdminToastr.error(response.message, "Error");
                        }
                    }, 3000)
                }
            }); // JQUERY Native Ajax End*/
            return false;
        });
    });
</script>