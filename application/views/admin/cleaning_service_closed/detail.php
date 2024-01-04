<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<style>
    select:active,
    select:hover {
        outline-color: red
    }

    .select2-container--default .select2-selection--single {
        background-color: #f1f1f1 !important;
        border: none !important;
        border-radius: 50px !important;
        padding: 6px 1rem !important;
        height: 40px !important;

    }

    .select2-container--default .select2-results__option[aria-disabled=true] {
        color: #000 !important;
        font-size: 20px !important;
        font-weight: 700 !important;
    }

    .select2-container {
        width: 100% !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        left: 25% !important;
        top: 75% !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered,
    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        font-family: 'gilroylight' !important;
    }

    .custom-selected .select2-container--default .select2-selection--single .select2-selection__rendered,
    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        border: none !important;
        background-color: transparent !important;
    }
</style>
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
        min-width: 130px;
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
        justify-content: center;
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
    .tab-content .row .col-lg-3 input,
    .tab-content .row .col-lg-12 select,
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

    /* .tab-content .row .col-lg-12 {
    justify-content: center;
} */

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
        font-size: 20px;
        text-transform: capitalize;
        padding-top: 20px;
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
        font-size: 14px;
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
        padding: 1.5rem 2rem;

    }

    .mt1 {
        margin-top: 1.5rem;
    }

    .mt2 {
        margin-top: 2.2rem;
    }

    .mt3 {
        margin-top: 3.3rem;
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
        padding: 2px 20px;
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
        /* align-items: center; */
        /* text-align: center; */
        padding-top: 1rem;
    }

    .row input[readonly]::placeholder {
        color: #000 !important;
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

    #home .col-lg-12 label span,
    #menu1 .col-lg-6 label span,
    #menu3 .col-lg-6 label span {
        color: red;
    }

    #menu3 .for-font label {
        font-size: 13px;

    }

    #menu3 .for-font label {
        font-size: 13px;

    }

    #menu4 .for-bottom-line,
    #menu6 .for-bottom-line {
        display: flex;
        justify-content: space-between;
        border-bottom: 2px solid;
        padding-bottom: 2rem;
    }

    #menu4 .without-border,
    #menu6 .without-border {
        display: flex;
        justify-content: space-between;
        margin: 10px 0;

    }

    #menu4 .col-lg-12 p,
    #menu5 .col-lg-12 p {
        font-size: 18px;
        font-weight: 700;
    }

    #menu5 .sub-div .col-lg-12 {
        display: flex;
        justify-content: space-between;
        background-color: #8f8f8f;
        color: #000;
        padding: 8px;
        border-radius: 5px !important;
    }

    #menu5 .for-remove-top .col-lg-12 h3,
    #menu6 .for-remove-top .col-lg-12 h3 {
        padding-top: 0;
    }

    #menu5 .for-remove-top .trans input {
        background: transparent;
        padding: 0 20px;

    }

    #menu5 .for-remove-top .size-font p {
        font-size: 16px;
        color: #000;
    }

    #menu5 .for-remove-top .bottom-less p {
        margin-bottom: 10px;
    }

    /* #menu5 .for-remove-top .trans button{
  padding: 8px 24px;
  border-radius: 6px !important;
  background-color: #b4c3c0;
  transition: 1s;
  font-family: gilroybold;
  color: #000;
  font-size: 14px;
    border: none;
    outline: 0;
    text-transform: uppercase;
    
} */


    /* .wrapper {
    position: relative;
    margin-bottom: 1rem;
    margin-top: 1rem;
} */

    /*style label to give some more space*/
    /* .wrapper label {
    display: block;
    padding: 12px 0 12px 48px;
} */

    /*style and hide original checkbox*/
    /* .wrapper input {
    height: 40px;
    left: 0;
    opacity: 0;
    position: absolute;
    top: 0;
    width: 40px;
} */

    /*position new box*/
    /* .wrapper input+label::before {
    border: 2px solid;
    content: "";
    height: 20px;
    left: 0;
    position: absolute;
    top: 0;
    width: 20px;
}

.mt-07 {
    margin-top: 10px;
} */

    /*svg background styles*/
    /* .wrapper input+label::after {
    content: "";
    opacity: 0;
    /* background-image: url(""); */


    background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/check.svg");
    background-repeat: no-repeat;
    height: 20px;
    width: 16px;
    position: absolute;
    left: 2px;
    top: 1px;
    transition: opacity 0.2s ease-in-out;
    }

    */
    /*reveal check for 'on' state*/
    /* .wrapper input:checked+label::after {
    opacity: 1;
} */

    /*focus styles*/
    /* .wrapper input:focus + label::before {
  box-shadow: 0 0 0 3px #ffbf47;  
  outline: 3px solid transparent; /* For Windows high contrast mode. }*/
    #menu5 .for-position {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
    }

    #menu6 .sapn-mar-lt {
        display: flex;
        margin: 5px 0;
    }

    #menu6 .sapn-mar-lt span {
        font-size: 16px;
    }

    .percent-width {
        display: flex;
        flex-direction: column;
        width: 20%;
    }

    .for-margin-left {
        margin-left: 10%;

    }

    .mt-07 {
        margin-top: 7px;
    }

    .for-margin-left2 {
        margin-left: 18px;
    }

    .margin-zero span strong {
        font-size: 15px;
        color: black;
    }

    .for-summary {
        display: flex;
        align-items: baseline;
    }

    .for-summary h3 {
        font-family: gilroybold;
        color: #000;
        font-size: 20px;
        text-transform: capitalize;
        padding-top: 20px;
        text-align: left;
    }

    .for-online {
        display: flex;
        flex-direction: column;
        margin-left: 10%;
    }

    .for-online span {
        font-weight: 600;
        margin-bottom: 10px;
    }

    .with-out-border {
        display: flex;
        justify-content: space-between;
    }

    .send-payment-sec {
        text-align: center;
    }

    .send-payment-sec .send-payment-sec-spam {
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .send-payment-sec-heding h3 {
        font-family: gilroybold;
        color: #000;
        font-size: 20px;
        text-transform: capitalize;
        padding-top: 20px;
        text-align: center;
    }

    .send-payment-sec .send-payment-sec-spam span {
        font-weight: 600;
    }

    .for-left-botton {
        display: flex;
        justify-content: end;
    }

    .for-remove-padding {
        padding: 0;
    }

    .cstm-checkbox {
        display: block;
        position: relative;
        cursor: pointer;
        font-size: 14px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        margin: 0 !important;
    }

    .cstm-checkbox input {
        width: 20% !important;
    }

    .for-cstm {
        position: absolute;
        top: 0px;
        right: 0;
        height: 20px;
        width: 20px;
        background-color: #eee !important;
        border: 3px solid #b3c3c0;
        border-radius: 5px !important;
    }

    .cstm-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .cstm-checkbox input:checked~.for-cstm:after {
        display: block;
        /* background: url('../../../../assets/front_assets/images/tick.svg'); */
        background: url('../../assets/admin/img/checkbox.svg');
        /* background: url());  */
        background-repeat: no-repeat;
    }

    .cstm-checkbox .for-cstm:after {
        left: -5px;
        top: -5px;
        width: 26px;
        height: 26px;
    }

    .for-cstm:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* media query */
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

    .inputBoxShadow {
        box-shadow: none !important;
    }

    .customselected {
        font-family: gilroylight;
        border: none;
        background-color: #f1f1f1;
        width: 100%;
        border-radius: 50px !important;
        height: 40px;
        outline: 0;
        margin-bottom: 2rem;
        color: #666666;
    }

    .select-items div,
    .select-selected {
        background-color: #f1f1f1;
    }

    .select-items {
        background-color: #f1f1f1;
    }

    .show-field {
        font-family: gilroylight;
        border: none;
        background-color: #717373;
        border-radius: 50px !important;
        height: 40px;
        outline: 0;
        color: #000;
        width: 100%;
        display: flex;
        /* justify-content:space-around; */
        align-items: center;
        padding: 0 46px 0 0;
    }

    .hrs,
    .min,
    .pm {
        margin: 0 auto;
        text-align: center;
        width: 30px;

    }
    @media print {
        @page {
            size: 12in 20in;
            margin: 0;
        }
    }
</style>
<ul class="nav nav-pills dnono">
    <li class="active"><a data-toggle="pill" href="#home">Property Address</a></li>
    <li><a data-toggle="pill" href="#menu1">Property Details</a></li>
    <li><a data-toggle="pill" href="#menu2">Agent Information</a></li>
    <li><a data-toggle="pill" href="#menu3">Closing Information</a></li>
    <li><a data-toggle="pill" href="#menu4">Summary</a></li>
    <li><a data-toggle="pill" href="#menu5">Submission Documents</a></li>
    <li><a data-toggle="pill" href="#menu6">Invoice</a></li>
</ul>
<form action="<?= g('admin_base_url') ?>Cleaning_service/update_data" method="post" id="saveForm" class="footTop">
    <div class="tab-content">
    <div class="img text-center mb-3" style="visibility:hidden;display:none">
                            <img src="https://cleantocloseco.com/assets/uploads/logo/logo162387121590162578611097.png" alt="">
                        </div>
        <div id="home" class="tab-pane fade in active">
            <div class="row for-shodow ">
                <div class="col-lg-12">
                    <h3>PROPERTY ADDRESS</h3>
                </div>
                <div class="col-lg-12">
                    <label for="">ADDRESS </label>
                    <input type="hidden" name="cleaning[cleaning_service_id]" value="<?php echo $_GET['id'] ?>">
                            <input type="hidden" name="cleaning[cleaning_service_user_id]" value="<?php echo $cleaning_data['cleaning_service_user_id'] ?>">
                            <input type="hidden" name="cleaning[cleaning_service_cleaner_id]" value="<?php echo $cleaning_data['cleaning_service_cleaner_id'] ?>">
                            <input type="hidden" name="cleaning[cleaning_service_upload_user_id]" value="<?php echo $cleaning_data['cleaning_service_upload_user_id'] ?>">
                            <input type="hidden" name="cleaning[cleaning_service_compelted_user_id]" value="<?php echo $upload_document['upload_document_cleaner_id'] ?>">

                    <input class="inputBoxShadow" type="text" value="<?php echo $cleaning_data['cleaning_service_address'] ?>" name="cleaning[cleaning_service_address]" readonly>
                </div>
                <div class="col-lg-4">
                    <label for="">CITY</label>
                    <input class="inputBoxShadow" type="text" value="<?php echo $cleaning_data['cleaning_service_city'] ?>" name="cleaning[cleaning_service_city]" readonly>
                </div>
                <div class="col-lg-4">
                    <label for="">STATE</label>
                    <input class="inputBoxShadow" type="text" value="<?php echo $cleaning_data['cleaning_service_state'] ?>" name="cleaning[cleaning_service_state]" readonly>
                </div>
                <div class="col-lg-4">
                    <label for="">UNIT/APT#</label>
                    <input class="inputBoxShadow" type="text" value="<?php echo $cleaning_data['cleaning_service_zipcode'] ?>" name="cleaning[cleaning_service_zipcode]" readonly>
                </div>
            </div>
            <div class="row mt3 for-shodow ">
                <div class="col-lg-12">
                    <h3>ACCESS DETAILS</h3>
                </div>
                <div class="col-lg-12">
                    <div class="custom-select custom-selected ">
                        <label for="">PROPERTY ACCESS INFORMATION</label>
                    <input class="inputBoxShadow" type="text" value="<?php echo $cleaning_data['cleaning_service_lockbox'] ?>" name="cleaning[cleaning_service_lockbox]" readonly>
                        <!-- <label hidden="">PROPERTY ACCESS INFORMATION</label>
                        <select class="js-example-disabled-results lockbox-select2" name="cleaning[cleaning_service_lockbox]" id="Lockbox">
                            <option value="<?php echo $cleaning_data['cleaning_service_lockbox'] ?>" selected><?php echo $cleaning_data['cleaning_service_lockbox'] ?></option>
                            <option value="Locbox" disabled="disabled">Locbox</option>
                            <option value="CodeBox">CodeBox</option>
                            <option value="Combination">Combination</option>
                            <option value="Rently">Rently</option>
                            <option value="Risco">Risco</option>
                            <option value="Sentril Lock">Sentril Lock</option>
                            <option value="Supra iBox">Supra iBox</option>
                            <option value="Provided Access By" disabled="disabled">Provided Access By</option>
                            <option value="Listing Agent or Co-Lisiting Agent">Listing Agent or Co-Lisiting Agent</option>
                            <option value="Seller or Tenant">Seller or Tenant</option>
                            <option value="Gate Garud,Dooman or Concierge">Gate Garud,Dooman or Concierge</option>
                            <option value="Other Provided Access">Other Provided Access</option>
                            <option value="Other Access Methods" disabled="disabled">Other Access Methods</option>
                            <option value="HUD key">HUD Key</option>
                            <option value="Keypad">Keypad</option>
                            <option value="Other">Other</option>
                        </select> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="">CODE INFORMATION </label>
                    <input class="inputBoxShadow" type="text" value="<?php echo $cleaning_data['cleaning_service_code_info'] ?>" name="cleaning[cleaning_service_code_info]" readonly>
                </div>
                <div class="col-lg-6">
                    <label for="">LOCATION OF LOCKBOX</label>
                    <input class="inputBoxShadow" type="text" value="<?php echo $cleaning_data['cleaning_service_location_of_lockbox'] ?>" name="cleaning[cleaning_service_location_of_lockbox]" readonly>
                </div>
                <div class="col-lg-6">
                    <label for="">ONE DAY CODE OR CBS CODE</label>
                    <input class="inputBoxShadow" type="text" value="<?php echo $cleaning_data['cleaning_service_supra_cbs_code'] ?>" name="cleaning[cleaning_service_supra_cbs_code]" readonly>
                </div>
                <div class="col-lg-6">
                    <label for="">ADDITIONAL INFORMATION FOR ACCESS</label>
                    <input class="inputBoxShadow" type="text" value="<?php echo $cleaning_data['cleaning_service_garage'] ?>" name="cleaning[cleaning_service_garage]"readonly>
                </div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade for-shodow">
            <div class="row">
                <div class="col-lg-12">
                    <h3>PROPERTY DETAILS</h3>
                </div>
                <div class="col-lg-6">
                    <label for="">TYPE OF RESIDENCE </label>
                    <input class="inputBoxShadow" type="text" readonly value="<?php echo $cleaning_data['cleaning_service_type_residence'] ?>" name="cleaning[cleaning_service_type_residence]">
                </div>
                <div class="col-lg-6">
                    <label for="">SQUARE FOOTAGE </label>
                    <input class="inputBoxShadow" type="text" readonly value="<?php echo $cleaning_data['sqft_area'] ?>" name="cleaning[cleaning_service_square_footage]">
                </div>
                <div class="col-lg-6">
                    <label for="">MLS#</label>
                    <input class="inputBoxShadow" type="text" readonly value="<?php echo $cleaning_data['cleaning_service_mls'] ?>" name="cleaning[cleaning_service_mls]">
                </div>
                <div class="col-lg-6">
                    <label for="">BEDROOMS</label>
                    <input class="inputBoxShadow" type="text" readonly value="<?php echo $cleaning_data['cleaning_service_bedrooms'] ?>" name="cleaning[cleaning_service_bedrooms]">
                </div>

                <div class="col-lg-6">
                    <label for="">HALF BATHROOM </label>
                    <input class="inputBoxShadow" type="text" readonly value="<?php echo $cleaning_data['cleaning_service_bathroom'] ?>" name="cleaning[cleaning_service_bathroom]">
                </div>
                <div class="col-lg-6">
                    <label for="">FULL BATHROOM</label>
                    <input class="inputBoxShadow" type="text" readonly value="<?php echo $cleaning_data['cleaning_service_full_bathroom'] ?>" name="cleaning[cleaning_service_full_bathroom]">
                </div>
            </div>

        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-12">
                    <h3>AGENT INFORMATION</h3>
                </div>
                <div class="col-lg-12 mt1">
                    <label for="">WHO ARE YOU REPRESENTING?</label>
                </div>

                <div class="col-lg-12 d-flex align-items-center uptoo">
                    <label class="containerRadio22">BUYER
                        <input type="radio" class="radio-sec-btns inputBoxShadow" <?php if ($cleaning_data['cleaning_service_representing'] == 'Buyer') { ?> <?php echo 'checked' ?> <?php } ?> value="Buyer" name="cleaning[cleaning_service_representing]" disabled>
                        <span class="checkmarkRadio"></span>
                    </label>
                    <label class="containerRadio22">SELLER
                        <input type="radio" class="radio-sec-btns inputBoxShadow" <?php if ($cleaning_data['cleaning_service_representing'] == 'Seller') { ?> <?php echo 'checked' ?> <?php } ?> value="Seller" name="cleaning[cleaning_service_representing]" disabled>
                        <span class="checkmarkRadio"></span>
                    </label>
                    <label class="containerRadio22">BOTH
                        <input type="radio" id="both" class="radio-sec-btns inputBoxShadow" <?php if ($cleaning_data['cleaning_service_representing'] == 'Both') { ?> <?php echo 'checked' ?> <?php } ?> value="Both" name="cleaning[cleaning_service_representing]" disabled>
                        <span class="checkmarkRadio"></span>
                    </label>
                </div>
                <?php if ($cleaning_data['cleaning_service_representing'] == 'Buyer') { ?>
                    <div class="buyer-section" id="buyer-sec">
                        <div class="col-lg-12 mt3">
                            <label for="" class="d-flex">BUYER INFORMATION </label>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="First Name" name="cleaning[cleaning_buyer_name]" value="<?php echo $cleaning_data['cleaning_buyer_name'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Last Name" name="cleaning[cleaning_buyer_last_name]" value="<?php echo $cleaning_data['cleaning_buyer_last_name'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Email" name="cleaning[cleaning_buyer_email]" value="<?php echo $cleaning_data['cleaning_buyer_email'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Phone Number" name="cleaning[cleaning_buyer_contact]" value="<?php echo $cleaning_data['cleaning_buyer_contact'] ?>" readonly>
                        </div>
                        <div class="col-lg-12 mt1">
                            <label for="" class="d-flex">COOPERATING AGENT INFORMATION</label>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="First Name" name="cleaning[cleaning_service_agent_buyer_name]" value="<?php echo $cleaning_data['cleaning_service_agent_buyer_name'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Last Name" name="cleaning[cleaning_service_agent_buyer_last_name]" value="<?php echo $cleaning_data['cleaning_service_agent_buyer_last_name'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Email" name="cleaning[cleaning_service_agent_buyer_email]" value="<?php echo $cleaning_data['cleaning_service_agent_buyer_email'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Phone Number" name="cleaning[cleaning_service_agent_buyer_phone]" value="<?php echo $cleaning_data['cleaning_service_agent_buyer_phone'] ?>" readonly>
                        </div>
                        <div class="col-lg-12 mt1">
                            <label for="" class="d-flex">SELLER INFORMATION </label>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="First Name" name="cleaning[cleaning_service_other_seller_fullname]" value="<?php echo $cleaning_data['cleaning_service_other_seller_fullname'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Last Name" name="cleaning[cleaning_service_other_seller_lastname]" value="<?php echo $cleaning_data['cleaning_service_other_seller_lastname'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Email" name="cleaning[cleaning_service_other_seller_email]" value="<?php echo $cleaning_data['cleaning_service_other_seller_email'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Phone Number" name="cleaning[cleaning_service_other_seller_phone]" value="<?php echo $cleaning_data['cleaning_service_other_seller_phone'] ?>" readonly>
                        </div>
                    </div>
                <? } elseif ($cleaning_data['cleaning_service_representing'] == 'Seller') { ?>
                    <div class="seller-section" id="seller-sec">
                        <div class="col-lg-12 mt2">
                            <label for="" class="d-flex">SELLER INFORMATION </label>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="First Name" name="cleaning[cleaning_seller_name]" value="<?php echo $cleaning_data['cleaning_seller_name'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Last Name" name="cleaning[cleaning_seller_last_name]" value="<?php echo $cleaning_data['cleaning_seller_last_name'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Email" name="cleaning[cleaning_seller_email]" value="<?php echo $cleaning_data['cleaning_seller_email'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Phone Number" name="cleaning[cleaning_seller_contact]" value="<?php echo $cleaning_data['cleaning_seller_contact'] ?>" readonly>
                        </div>
                        <div class="col-lg-12 mt1">
                            <label for="" class="d-flex">COOPERATING AGENT INFORMATION</label>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="First Name" name="cleaning[cleaning_service_agent_seller_name]" value="<?php echo $cleaning_data['cleaning_service_agent_seller_name'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Last Name" name="cleaning[cleaning_service_agent_seller_last_name]" value="<?php echo $cleaning_data['cleaning_service_agent_seller_last_name'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Email" name="cleaning[cleaning_service_agent_seller_email]" value="<?php echo $cleaning_data['cleaning_service_agent_seller_email'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Phone Number" name="cleaning[cleaning_service_agent_seller_phone]" value="<?php echo  $cleaning_data['cleaning_service_agent_seller_phone'] ?>" readonly>
                        </div>
                        <div class="col-lg-12 mt1">
                            <label for="" class="d-flex">BUYER INFORMATION </label>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="First Name" name="cleaning[cleaning_service_other_buyer_fullname]" value="<?php echo $cleaning_data['cleaning_service_other_buyer_fullname'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Last Name" name="cleaning[cleaning_service_other_buyer_lastname]" value="<?php echo $cleaning_data['cleaning_service_other_buyer_lastname'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Email" name="cleaning[cleaning_service_other_buyer_email]" value="<?php echo $cleaning_data['cleaning_service_other_buyer_email'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Phone Number" name="cleaning[cleaning_service_other_buyer_phone]" value="<?php echo  $cleaning_data['cleaning_service_other_buyer_phone'] ?>" readonly>
                        </div>
                    </div>
                <? } else { ?>
                    <div class="both-section" id="both-sec">
                        <div class="col-lg-12 mt3">
                            <label for="" class="d-flex">BUYER INFORMATION </label>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="First Name" name="cleaning[cleaning_service_first_name]" value="<?php echo $cleaning_data['cleaning_service_first_name'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Last Name" name="cleaning[cleaning_service_last_name]" value="<?php echo $cleaning_data['cleaning_service_last_name'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Email" name="cleaning[cleaning_service_email]" value="<?php echo $cleaning_data['cleaning_service_email'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Phone Number" name="cleaning[cleaning_service_contact]" value="<?php echo $cleaning_data['cleaning_service_contact'] ?>" readonly>
                        </div>
                        <div class="col-lg-12 mt2">
                            <label for="" class="d-flex">SELLER INFORMATION </label>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="First Name" name="cleaning[cleaning_service_first_name_seller]" value="<?php echo $cleaning_data['cleaning_service_first_name_seller'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Last Name" name="cleaning[cleaning_service_last_name_seller]" value="<?php echo $cleaning_data['cleaning_service_last_name_seller'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Email" name="cleaning[cleaning_service_email_seller]" value="<?php echo $cleaning_data['cleaning_service_email_seller'] ?>" readonly>
                        </div>
                        <div class="col-lg-3">
                            <input class="inputBoxShadow" type="text" placeholder="Phone Number" name="cleaning[cleaning_service_contact_seller]" value="<?php echo $cleaning_data['cleaning_service_contact_seller'] ?>" readonly>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div id="menu3" class="tab-pane fade ">
            <div class="row mt3 for-shodow ">
                <div class="col-lg-12">
                    <h3>CLOSING IN FORMATION</h3>
                </div>
                <div class="col-lg-6">
                    <label for="">CLOSING DATE</label>
                    <?php
                    $string_to_date = $d = strtotime($cleaning_data['cleaning_service_projected_closing_date']);
                    $new_date = Date('Y-m-d', $string_to_date);
                    ?>
                    <input class="inputBoxShadow" type="date" name="cleaning[cleaning_service_projected_closing_date]" value="<?php echo $new_date ?>" readonly>
                </div>
                <div class="col-lg-6">
                    <label for="">CLOSING/TITLE COMPANY</label>
                    <input class="inputBoxShadow" type="text" name="cleaning[cleaning_service_closing_tittle_company]" value="<?php echo $cleaning_data['cleaning_service_closing_tittle_company'] ?>" readonly>
                </div>
                <div class="col-lg-6">
                    <label for="">COMPANY EMAIL</label>
                    <input class="inputBoxShadow" type="text" name="cleaning[cleaning_service_closing_tittle_company_email]" value="<?php echo $cleaning_data['cleaning_service_closing_tittle_company_email'] ?>" readonly>
                </div>
                <div class="col-lg-6">
                    <label for="">COMAPNY PHONE NUMBER</label>
                    <input class="inputBoxShadow" type="text" name="cleaning[cleaning_service_closing_tittle_company_phone_number]" value="<?php echo $cleaning_data['cleaning_service_closing_tittle_company_phone_number'] ?>" readonly>
                </div>
                <div class="col-lg-6 for-remove-padding">
                    <div class="col-lg-12 for-font mt1">
                        <label for="">WILL CLEANNING OCCUR PRIOR TO CLOSING OR AFTER CLOSING?</label>
                    </div>
                    <div class="col-lg-12 d-flex align-items-center uptoo">
                        <label class="containerRadio22">PRIOR TO CLOSING
                            <input type="radio" class="on-mobile-block inputBoxShadow" <?php if ($cleaning_data['cleaning_service_cleaning_occur_prior_closing'] == 'PriorToClosing') { ?> <?php echo 'checked' ?> <?php  } ?> value="PriorToClosing" name="cleaning[cleaning_service_cleaning_occur_prior_closing]" disabled>
                            <span class="checkmarkRadio"></span>
                        </label>
                        <label class="containerRadio22">AFTER CLOSING
                            <input type="radio" class="on-mobile-block inputBoxShadow" <?php if ($cleaning_data['cleaning_service_cleaning_occur_prior_closing'] == 'AfterClosing') { ?> <?php echo 'checked' ?> <?php } ?> value="AfterClosing" name="cleaning[cleaning_service_cleaning_occur_prior_closing] " disabled>
                            <span class="checkmarkRadio"></span>
                        </label>
                    </div>

                </div>

                <div class="col-lg-6 for-remove-padding">
                    <div class="col-lg-12 mt1">
                        <label for="">WHO IS RESPONSIBLE FOR PAYMENT?</label>
                    </div>

                    <div class="col-lg-12 d-flex align-items-center uptoo">
                        <label class="containerRadio22">BUYER
                            <input type="radio" class="on-mobile-block inputBoxShadow" <?php if ($cleaning_data['cleaning_service_responsible_payment'] == 'Buyer') { ?> <?php echo 'checked' ?> <?php } ?> value="Buyer" name="cleaning[cleaning_service_responsible_payment]" disabled>
                            <span class="checkmarkRadio"></span>
                        </label>
                        <label class="containerRadio22">SELLER
                            <input type="radio" class="on-mobile-block inputBoxShadow" <?php if ($cleaning_data['cleaning_service_responsible_payment'] == 'Seller') { ?> <?php echo 'checked' ?> <?php } ?> value="Seller" name="cleaning[cleaning_service_responsible_payment]" disabled>
                            <span class="checkmarkRadio"></span>
                        </label>
                        <label class="containerRadio22">AGENT
                            <input type="radio" class="on-mobile-block inputBoxShadow" <?php if ($cleaning_data['cleaning_service_responsible_payment'] == 'Agent') { ?> <?php echo 'checked' ?> <?php } ?> value="Agent" name="cleaning[cleaning_service_responsible_payment]" disabled>
                            <span class="checkmarkRadio"></span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-12 mt2">
                    <label for="">REQUESTED DATE/TIME OF CLEANING</label>
                </div>
                <div class="col-lg-3">
                    <?php
                    $string_to_date = $d = strtotime($cleaning_data['cleaning_service_closing_date']);
                    $date = Date('Y-m-d', $string_to_date);
                    ?>
                    <input class="inputBoxShadow" type="date" value="<?php echo $date ?>" name="cleaning[cleaning_service_closing_date]" readonly>
                </div>
                <div class="col-lg-3">
                    <?php
                    $string_to_time = $d = strtotime($cleaning_data['cleaning_service_closing_time']);
                    $time = Date('H:i', $string_to_time);
                    $time2 = Date('h:i', $string_to_time);
                    ?>
                    <input class="inputBoxShadow" type="time" name="cleaning[cleaning_service_closing_time]" id="time" value="" hidden readonly>
                    <div class="time-input">
                        <div class="show-field">
                            <div class="hrs"><?php echo explode(':', $time2)[0] ?></div>:
                            <div class="min"><?php echo explode(':', $time)[1] ?></div>
                            <div class="pm"><?php echo explode(':', $time)[0] == 00 ? 'AM' : (explode(':', $time)[0] > 12 ? 'AM' : 'PM') ?></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="menu4" class="tab-pane fade">
            <div class="row mt3 for-shodow ">
                <div class="col-lg-12">
                    <h3>Additional Add-Ons</h3>
                </div>
                <div class="col-lg-12">
                    <p>Optional Coverage</p>
                </div>
                <?php
                $cleaning_additional = unserialize($cleaning_data['cleaning_service_additional_kitchen']);
                if ($cleaning_additional == '' || $cleaning_additional == 'N\A') {
                } else {
                    foreach ($cleaning_additional as $key => $value) {
                        $param1['where']['additional_add_ons_id'] = $value;
                        $param1['where']['additional_add_ons_type'] = 1;
                        $additional_add_3 = $this->model_additional_add_ons->find_all_active($param1);
                ?>
                        <div class="col-lg-12 for-bottom-line">
                            <span class="for-break-line"> <?php echo $additional_add_3[0]['additional_add_ons_name'] ?: 'N/A' ?></span>
                            <span><strong><?php echo price($additional_add_3[0]['additional_add_ons_price'] ?: 'N/A') ?></strong></span>
                        </div>
                <?php
                    }
                }

                ?>
                <div class="col-lg-12">
                    <h3>Summary</h3>
                </div>
                <div class="col-lg-12 without-border">
                    <span><?php echo $cleaning_data['cleaning_service_package_name'] ?: 'N/A' ?></span>
                    <span><strong><?php echo price($cleaning_data['cleaning_service_package_amount']) ?: 'N/A' ?></strong></span>
                </div>
                <div class="col-lg-12 for-bottom-line">
                    <span>Total Options</span>
                    <span><strong>$<?php echo $cleaning_data['cleaning_service_total_option_amount'] ?: 0 ?></strong></span>
                </div>
                <div class="col-lg-12 for-bottom-line mt2">
                    <span>Due at Closing</span>
                    <span><strong><?php echo price($cleaning_data['cleaning_service_total_amount']) ?: 'N/A' ?></strong></span>
                </div>
                <?php
                $amout_cleaner = $this->model_cleaner_percentage->find_all();

                $myNumber = $cleaning_data['cleaning_service_total_amount'];
                //I want to get 25% of 928.
                $percentToGet =  $amout_cleaner[0]['cleaner_percentage_value'];
                //Get the result.
                $percent =  $myNumber - ($myNumber * ($percentToGet  / 100));
                ?>
                  <div class="col-lg-12 for-bottom-line mt2">
                    <span>Owed to Cleaner</span>
                    <span><strong><?php echo price($percent) ?: 'N/A' ?></strong></span>
                </div>
            </div>

        </div>
        <div id="menu5" class="tab-pane">
            <div class="row">
                <div class="col-lg-6">
                    <div class="col-lg-12 for-shodow sub-div">
                        <div class="col-lg-12">
                            <span><strong>I Arrived At</strong></span>
                            <span><?php echo $arrival_time['arrival_time_datetime'] ?: '' ?></span>
                        </div>
                        <div class="col-lg-12 mt1">
                            <span><strong>I Left At</strong></span>
                            <span><?php echo $left_time['left_time_datetime'] ?: '' ?></span>
                        </div>
                    </div>
                    <div class="col-lg-12 for-shodow for-remove-top mt2">
                        <div class="col-lg-12">
                            <h3>Property Pictures</h3>
                        </div>
                        <div class="col-lg-12 mt1 size-font">
                            <p><strong>Before</strong></p>
                        </div>
                        <div class="col-lg-12  trans">
                            <span><strong>1.</strong></span>
                            <a href="<?php echo get_image($upload_document['upload_document_before1_path'], $upload_document['upload_document_before1_image']) ?>" download>
                                <button type="button">View</button>
                            </a>
                        </div>
                        <div class="col-lg-12 mt1 trans">
                            <span><strong>2.</strong></span>
                            <a href="<?php echo get_image($upload_document['upload_document_before2_path'], $upload_document['upload_document_before2_image']) ?>" download>
                                <button type="button">View</button>
                            </a>
                        </div>
                        <div class="col-lg-12 mt1 trans">
                            <span><strong>3.</strong></span>
                            <a href="<?php echo get_image($upload_document['upload_document_before3_path'], $upload_document['upload_document_before3_image']) ?>" download>
                                <button type="button">View</button>
                            </a>
                        </div>

                        <div class="col-lg-12 mt1 size-font">
                            <p><strong>After</strong></p>
                        </div>
                        <div class="col-lg-12  trans">
                            <span><strong>1.</strong></span>
                            <a href="<?php echo get_image($upload_document['upload_document_after1_path'], $upload_document['upload_document_after1_image']) ?>" download>
                                <button type="button">View</button>
                            </a>
                        </div>
                        <div class="col-lg-12 mt1 trans">
                            <span><strong>2.</strong></span>
                            <a href="<?php echo get_image($upload_document['upload_document_after2_path'], $upload_document['upload_document_after2_image']) ?>" download>
                                <button type="button">View</button>
                            </a>
                        </div>
                        <div class="col-lg-12 mt1 trans">
                            <span><strong>3.</strong></span>
                            <a href="<?php echo get_image($upload_document['upload_document_after3_path'], $upload_document['upload_document_after3_image']) ?>" download>
                                <button type="button">View</button>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-12 for-shodow mt2">
                        <div class="col-lg-12">
                            <p>Signed Completion Page</p>
                        </div>
                        <div class="col-lg-12">
                            <a href="<?php echo get_image($upload_document['upload_document_signed_path'], $upload_document['upload_document_signed_image']) ?>" download>
                                <button type="button">View</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-lg-12 for-shodow for-remove-top">
                        <div class="col-lg-12">
                            <h3>Property Task List</h3>
                        </div>
                        <?php if ($upload_document['upload_document_package_id'] > 0) { ?>
                            <?php
                            $cleaning_task1 = unserialize($upload_document['upload_document_Whole_House']);
                            $cleaning_task2 = unserialize($upload_document['upload_document_Kitchen']);
                            $cleaning_task3 = unserialize($upload_document['upload_document_Bathrooms']);
                            $cleaning_task4 = unserialize($upload_document['upload_document_Interior_Cleaning_Of']);
                            $cleaning_task5 = unserialize($upload_document['upload_document_Dusting_of']);
                            $cleaning_task6 = unserialize($upload_document['upload_document_Wiping_Down_Of']);
                            $task_id = array_merge($cleaning_task1, $cleaning_task2, $cleaning_task3, $cleaning_task4, $cleaning_task5, $cleaning_task6);

                            $param4['where']['type_clean_package_pack_id'] =  $upload_document['upload_document_package_id'];
                            $task_list = $this->model_type_clean_package->find_all_active($param4);

                            foreach ($task_list as $key => $value) {
                                $task_id = $value;
                                $para12['where']['package_service_type_id'] = $value['type_clean_package_id'];
                                $package_service_1 = $this->model_package_service->find_all_active($para12);
                            ?>

                                <div class="col-lg-12 size-font bottom-less">
                                    <p><?php echo $task_id['type_clean_package_type'] ?: '' ?></p>
                                </div>
                                <?php foreach ($package_service_1 as $key => $value_package_service) { ?>
                                    <div class="col-lg-12 for-position mt-07">
                                        <label class="cstm-checkbox">
                                            <span><strong><?php echo $value_package_service['package_service_name'] ?: '' ?></strong></span>
                                            <input class="inputBoxShadow" type="checkbox" name="uploaddocument[upload_document_arrive_time]" checked disabled>
                                            <input class="inputBoxShadow" type="hidden" name="" value="" id="hiddetime">
                                            <span class="for-cstm"></span>
                                        </label>
                                    </div>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
            <!-- <div class="row mt1">
                <div class="col-lg-12 for-left-botton">
                    <button id="submitInfo">APPROVE</button>
                </div>
            </div> -->
        </div>
</form>
<div id="menu6" class="tab-pane fade">
    <div class="row">
        <div class="col-lg-12">
        <h3><?php echo $cleaning_data['cleaning_service_address'] ?>, <?php echo $cleaning_data['cleaning_service_city'] ?>,  <?php echo $cleaning_data['cleaning_service_state'] ?>, <?php echo $cleaning_data['cleaning_service_zipcode'] ?></h3>
        </div>
        <div class="col-lg-12 sapn-mar-lt">
            <span>Order # <strong><?php echo $cleaning_data['cleaning_service_id'] ?></strong></span>
        </div>
        <div class="col-lg-12 sapn-mar-lt">
            <?php
            $string_to_date = $d = strtotime($cleaning_data['cleaning_service_closing_date']);
            $date = Date('Y-m-d', $string_to_date);
            ?>
            <span>Order Date:<strong><?php echo $date ?></strong></span>
        </div>
        <div class="col-lg-12 sapn-mar-lt">
            <span>Order Status:<strong>
                 <?php
                                if ($cleaning_data['cleaning_service_status'] == 1) { ?>
                                    Open
                                <? } elseif ($cleaning_data['cleaning_service_status'] == 3) { ?>
                                    Accepted

                                <? } elseif ($cleaning_data['cleaning_service_status'] == 4) { ?>
                                    submitted
                                <? } elseif ($cleaning_data['cleaning_service_status'] == 6) { ?>
                                    Canceled Order
                                    <?}else{?>
                                        Closed
                                <?php
                                }
                                ?>
                </strong></span>
        </div>
    </div>
    <div class="row mt2 for-shodow for-remove-top">
        <div class="col-lg-12">
            <h3>PROPERTY DETAILS</h3>
        </div>
        <div class="col-lg-12 d-flex mt1 for-mobile-dire-col">
            <div class="percent-width">
                <span><strong>PROPERTY TYPE</strong></span>
                <span><?php echo $cleaning_data['cleaning_service_type_residence'] ?></span>
            </div>
            <div class="percent-width">
                <span><strong>SQUARE FOOTAGE</strong></span>
                <span><?php echo $cleaning_data['sqft_area'] ?></span>
            </div>
            <div class="percent-width">
                <span><strong>MSL#</strong></span>
                <span><?php echo $cleaning_data['cleaning_service_mls'] ?></span>
            </div>
            <div class="percent-width">
                <span><strong>BEDROOMS</strong></span>
                <span><?php echo $cleaning_data['cleaning_service_bedrooms'] ?></span>
            </div>
            <div class="percent-width">
                <span><strong>HALF BATHS</strong></span>
                <span><?php echo $cleaning_data['cleaning_service_bathroom'] ?></span>
            </div>

        </div>
        <div class="col-lg-12 mt1 for-mobile-dire-col">
            <div class="percent-width">
                <span><strong>FULL BATHS</strong></span>
                <span><?php echo $cleaning_data['cleaning_service_full_bathroom'] ?></span>
            </div>
        </div>
    </div>
    <div class="row mt2 for-shodow for-remove-top">

        <?php if ($cleaning_data['cleaning_service_representing'] == 'Buyer') { ?>
            <div class="d-flex propertyAddBox6-1 flex-column mt20">
                <div class="col-lg-12">
                    <h3>Agent Information</h3>
                </div>
                <!-- buyer -->

                <div class="proNameB1 mt20">
                    <strong>Ordering Agent Info</strong>
                </div>
                <div style="width:100%" class="dcol d-flex mt5">
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">First Name</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_name'] ?>
                        </div>
                    </div>
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">Last Name</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_lastname'] ?>
                        </div>
                    </div>
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">Email</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_email'] ?>
                        </div>
                    </div>
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">Phone</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_contact'] ?>
                        </div>
                    </div>
                </div>
                <!-- buyer info -->
                <div class='proNameB1 mt20'>
                    <strong>Buyer Information</strong>
                </div>
                <div style="width:100%" class="dcol d-flex mt5">
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>First Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_buyer_name'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Last Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_buyer_last_name'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Email</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_buyer_email'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Phone</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_buyer_contact'] ?: 'N/A'  ?>
                        </div>
                    </div>
                </div>
                <!-- Cooperating Agents Informations -->
                <div class='proNameB1 mt20'>
                    <strong>Cooperating Agent Informations</strong>
                </div>
                <div style="width:100%" class="dcol d-flex mt5">
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>First Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_agent_buyer_name'] ?: 'N/A' ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Last Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_agent_buyer_last_name'] ?: 'N/A' ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Email</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_agent_buyer_email'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Phone</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_agent_buyer_phone'] ?: 'N/A'  ?>
                        </div>
                    </div>
                </div>
                <!-- seller info -->
                <div class='proNameB1 mt20'>
                    <strong>Seller Information</strong>
                </div>
                <div style="width:100%" class="dcol d-flex mt5">
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>First Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_other_seller_fullname'] ?: 'N/A' ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Last Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_other_seller_lastname'] ?: 'N/A' ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Email</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_other_seller_email'] ?: 'N/A' ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Phone</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_other_seller_phone'] ?: 'N/A'  ?>
                        </div>
                    </div>
                </div>
            </div>
        <? } elseif ($cleaning_data['cleaning_service_representing'] == 'Seller') { ?>
            <div class="d-flex propertyAddBox6-1 flex-column mt20">
                <div class="col-lg-12">
                    <h3>Agent Information</h3>
                </div>
                <!-- buyer -->


                <div class="proNameB1 mt20">
                    <strong>Ordering Agent Info</strong>
                </div>
                <div style="width:100%" class="dcol d-flex mt5">
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">First Name</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_name'] ?>
                        </div>
                    </div>
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">Last Name</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_lastname'] ?>
                        </div>
                    </div>
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">Email</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_email'] ?>
                        </div>
                    </div>
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">Phone</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_contact'] ?>
                        </div>
                    </div>
                </div>

                <!-- buyer info -->
                <div class='proNameB1 mt20'>
                    <strong>Seller Information</strong>
                </div>
                <div style="width:100%" class="dcol d-flex mt5">
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>First Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_seller_name'] ?: 'N/A' ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Last Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_seller_last_name'] ?: 'N/A' ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Email</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_seller_email'] ?: 'N/A' ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Phone</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_seller_contact'] ?: 'N/A' ?>
                        </div>
                    </div>
                </div>
                <!-- Cooperating Agents Informations -->
                <div class='proNameB1 mt20'>
                    <strong>Cooperating Agent Informations</strong>
                </div>
                <div style="width:100%" class="dcol d-flex mt5">
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>First Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_agent_seller_name'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Last Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_agent_seller_last_name'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Email</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_agent_seller_email'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Phone</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_agent_seller_phone'] ?: 'N/A'  ?>
                        </div>
                    </div>
                </div>
                <!-- seller info -->
                <div class='proNameB1 mt20'>
                    <strong>Buyer Information</strong>
                </div>
                <div style="width:100%" class="dcol d-flex mt5">
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>First Name</strong>
                        </div>
                        <div class='proAddAdd '>
                            <?php echo $cleaning_data['cleaning_service_other_buyer_fullname'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Last Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_other_buyer_lastname'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Email</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_other_buyer_email'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Phone</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_other_buyer_phone'] ?: 'N/A'  ?>
                        </div>
                    </div>
                </div>
            </div>
        <? } else { ?>
            <div class="d-flex propertyAddBox6-1 flex-column mt20">
                <div class="col-lg-12">
                    <h3>Agent Information</h3>
                </div>
                <!-- buyer -->

                <div class="proNameB1 mt20">
                    <strong>Ordering Agent Info</strong>
                </div>
                <div style="width:100%" class="dcol d-flex mt5">
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">First Name</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_name'] ?>
                        </div>
                    </div>
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">Last Name</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_lastname'] ?>
                        </div>
                    </div>
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">Email</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_email'] ?>
                        </div>
                    </div>
                    <div class="proAddBox percent-width">
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class="proAddLabel">Phone</strong>
                        </div>
                        <div class="proAddAdd">
                            <?php echo $user_data['signup_contact'] ?>
                        </div>
                    </div>
                </div>
                <!-- seller info -->
                <div class='proNameB1 mt20'>
                    <strong>Buyer Information</strong>
                </div>
                <div style="width:100%" class="dcol d-flex mt5">
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>First Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_first_name'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Last Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_last_name'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Email</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_email'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Phone</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_contact'] ?: 'N/A'  ?>
                        </div>
                    </div>
                </div>
                <!-- buyer info -->
                <div class='proNameB1 mt20'>
                    <strong>Seller Information</strong>
                </div>
                <div style="width:100%" class="dcol d-flex mt5">
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>First Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_first_name_seller'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Last Name</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_last_name_seller'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Email</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_email_seller'] ?: 'N/A'  ?>
                        </div>
                    </div>
                    <div class='proAddBox percent-width'>
                        <div class="d-flex align-items-center justify-content-between prodAddflex">
                            <strong for="" class='proAddLabel'>Phone</strong>
                        </div>
                        <div class='proAddAdd'>
                            <?php echo $cleaning_data['cleaning_service_contact_seller'] ?: 'N/A'  ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } ?>
        <!-- <div class="col-lg-12  mt1 margin-zero">
            <span><strong>Ordering Agent Info</strong></span>
        </div>
        <div class="col-lg-12 d-flex mt-07 for-mobile-dire-col">
            <div class="percent-width">
                <span><strong>FIRST NAME</strong></span>
                <span>Freed</span>
            </div>
            <div class="percent-width for-margin-left">
                <span><strong>LAST NAME</strong></span>
                <span>Aston</span>
            </div>
            <div class="percent-width for-margin-left">
                <span><strong>EMAIL</strong></span>
                <span>Freesaston@gmail.com</span>
            </div>

            <div class="percent-width for-margin-left">
                <span><strong>PHONE</strong></span>
                <span>021-111-354</span>
            </div>
        </div>
        <div class="col-lg-12  mt2 margin-zero">
            <span><strong>Buyer Information</strong></span>
        </div>
        <div class="col-lg-12 d-flex mt-07 for-mobile-dire-col">
            <div class="percent-width">
                <span><strong>FIRST NAME</strong></span>
                <span>Freed</span>
            </div>
            <div class="percent-width for-margin-left">
                <span><strong>LAST NAME</strong></span>
                <span>Aston</span>
            </div>
            <div class="percent-width for-margin-left">
                <span><strong>EMAIL</strong></span>
                <span>Freesaston@gmail.com</span>
            </div>

            <div class="percent-width for-margin-left">
                <span><strong>PHONE</strong></span>
                <span>021-111-354</span>
            </div>
        </div>
        <div class="col-lg-12  mt2 margin-zero">
            <span><strong>Seller Information</strong></span>
        </div>
        <div class="col-lg-12 d-flex mt-07 for-mobile-dire-col">
            <div class="percent-width">
                <span><strong>FIRST NAME</strong></span>
                <span>Freed</span>
            </div>
            <div class="percent-width for-margin-left">
                <span><strong>LAST NAME</strong></span>
                <span>Aston</span>
            </div>
            <div class="percent-width for-margin-left">
                <span><strong>EMAIL</strong></span>
                <span>Freesaston@gmail.com</span>
            </div>

            <div class="percent-width for-margin-left">
                <span><strong>PHONE</strong></span>
                <span>021-111-354</span>
            </div>
        </div> -->
    </div>
    <div class="row mt2 for-shodow for-remove-top">
        <div class="col-lg-12">
            <h3>CLOSING INFORMATION</h3>
        </div>
        <div class="col-lg-12 d-flex mt-07 for-mobile-dire-col">
            <div class="percent-width">
                <span><strong>SERVICE DATE</strong></span>
                <span><?php echo date("m/d/Y", strtotime($cleaning_data['cleaning_service_closing_date'])) ?></span>
            </div>
            <div class="percent-width for-margin-left">
                <span><strong>SERVICE TIME</strong></span>
                <span><?php echo date("g:i A", strtotime($cleaning_data['cleaning_service_closing_time'])) ?></span>
            </div>
            <div class="percent-width for-margin-left">
                <span><strong>CLOSING DATA</strong></span>
                <span> <?php echo date("m/d/Y", strtotime($cleaning_data['cleaning_service_projected_closing_date'])) ?></span>
            </div>
            <div class="percent-width for-margin-left">
                <span><strong>CLOSING TITLE COMPANY</strong></span>
                <span><?php echo $cleaning_data['cleaning_service_closing_tittle_company'] ?></span>
            </div>
            <div class="percent-width for-margin-left">
                <span><strong>COMPANY EMAIL</strong></span>
                <span> <?php echo $cleaning_data['cleaning_service_closing_tittle_company_email'] ?: 'N/A' ?></span>
            </div>

        </div>
        <div class="col-lg-12 d-flex  mt-07 for-mobile-dire-col">
            <div class="percent-width">
                <span><strong>COMPANY PHONE NUMBER</strong></span>
                <span> <?php echo $cleaning_data['cleaning_service_closing_tittle_company_phone_number'] ?></span>
            </div>
            <div class="percent-width for-margin-left2">
                <span><strong>WHO IS RESPONIBLE FOR PAYMENT?</strong></span>
                <?php if ($cleaning_data['cleaning_service_responsible_payment'] == 'Buyer') { ?>
                    <?php echo 'Buyer' ?: 'N/A'  ?>
                <? } elseif ($cleaning_data['cleaning_service_responsible_payment'] == 'Seller') { ?>
                    <?php echo 'Seller' ?: 'N/A'  ?>
                <? } elseif ($cleaning_data['cleaning_service_responsible_payment'] == 'Agent') { ?>
                    <?php echo 'Agent' ?: 'N/A'  ?>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="row mt2 for-shodow for-remove-top">
        <div class="for-summary">
            <div class="FOR-SUMMARY-HEADING">
                <h3>PLANS AND COVERAGE</h3>
            </div>
            <div class="for-online">
                <span>PACKAGE</span>
                <span><?php echo $cleaning_data['cleaning_service_package_name'] ?: 'N/A' ?></span>
            </div>
            <div class="for-online">
                <span>ADDITIONAL ADD-ONS</span>
                <span>
                    <?php
                    $cleaning_additional = unserialize($cleaning_data['cleaning_service_additional_kitchen']);
                    if ($cleaning_additional == '' || $cleaning_additional == 'N\A') {
                    } else {
                        foreach ($cleaning_additional as $key => $value) {
                            $param1['where']['additional_add_ons_id'] = $value;
                            $param1['where']['additional_add_ons_type'] = 1;
                            $additional_add_3 = $this->model_additional_add_ons->find_all_active($param1);
                    ?>
                            <p class='propertyAddTab3p adds'><?php echo $additional_add_3[0]['additional_add_ons_name'] ?: 'N/A' ?> </p>
                    <?php
                        }
                    }
                    ?>
                </span>
            </div>
        </div>
        <div class="col-lg-12">
            <h3>Summary</h3>
        </div>
        <div class="col-lg-12 without-border">
            <span><?php echo $cleaning_data['cleaning_service_package_name'] ?></span>
            <span><strong>$<?php echo $cleaning_data['cleaning_service_package_amount'] ?: 0 ?></strong></span>
        </div>
        <div class="col-lg-12 for-bottom-line">
            <span>Total Options</span>
            <span><strong>$<?php echo $cleaning_data['cleaning_service_total_option_amount'] ?: 0 ?></strong></span>
        </div>
        <div class="col-lg-12 mt1 with-out-border">
            <span>Due at Closing</span>
            <span><strong>$<?php echo $cleaning_data['cleaning_service_total_amount'] ?: 0 ?></strong></span>
        </div>
        <?php
                $amout_cleaner = $this->model_cleaner_percentage->find_all();

                $myNumber = $cleaning_data['cleaning_service_total_amount'];
                //I want to get 25% of 928.
                $percentToGet =  $amout_cleaner[0]['cleaner_percentage_value'];
                //Get the result.
                $percent =  $myNumber - ($myNumber * ($percentToGet  / 100));
                ?>
                <hr>
                <div class="col-lg-12 for-bottom-line">
                    <span>Owed to Cleaner</span>
                    <span><strong><?php echo price($percent) ?: 'N/A' ?></strong></span>
                </div>
        <div class="send-payment-sec">
            <div class="send-payment-sec-heding">
                <h3>Please Send Payments To</h3>
            </div>
            <?php
            $invoice_amount = $this->model_cleaner_invoice->find_all();
            // debug($invoice_amount,1);
            ?>
            <div class="send-payment-sec-spam mt1">
                <span> <?php echo $invoice_amount[0]['cleaner_invoice_value'] ?></span>
                <span>PO Box <?php echo $invoice_amount[1]['cleaner_invoice_value'] ?></span>
                <span><?php echo $invoice_amount[2]['cleaner_invoice_value']?></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 for-left-botton">
        <a>
                <button type="button" onclick="printDiv('printMe')" ]id="invoice_btn" class="dnono">Print Invoice</button>
            </a>
        </div>
    </div>




</div>
</div>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
       function printDiv(divName) {
        // var printContents = document.getElementById(divName).innerHTML;
        // document.querySelector('footer').style.display = 'none'
        // $('.heading.mt50').css('display', 'none');
        $('.dnono').css('display', 'none');
        // $('.collapse').css('display','none');
        $('.img').css({
            'display': 'block',
            'visibility': 'visible'
        });
        // setTimeout(() => {
            var head = document.querySelector('head').innerHTML;
            var body = document.querySelector('body').innerHTML;
            console.log(body)
            var printContents = head + body
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            return location.reload();
            document.body.innerHTML = originalContents;
        // }, 100)
    }
    document.querySelector('button').addEventListener('click', () => {
        document.querySelector('input[type="file"]').click();
    });
    $(".radio-sec-btns").change(function() {
        if (this.value == "buyer") {
            $("#buyer-sec").show()
            $("#seller-sec").hide()
            $("#both-sec").hide()
        } else if (this.value == "seller") {
            $("#buyer-sec").hide()
            $("#seller-sec").show()
            $("#both-sec").hide()
        } else if (this.value == "both") {
            $("#buyer-sec").hide()
            $("#seller-sec").hide()
            $("#both-sec").show()
        }
    })
    var $disabledResults = $(".js-example-disabled-results");
    $disabledResults.select2();
    $(document).ready(function(){
    var obj;
    $("#submitInfo").click(function(e) {
        e.preventDefault();
        setTimeout(function() {
            // Prevent form submit
            var obj = $("#saveForm");
            // Get form data
            var data = obj.serialize();
            // Get post url
            var url = obj.attr('action');
            // Submit action
            var response = AjaxRequest.fire(url, data);
            if (response.status == 1) {
                            AdminToastr.success(response.message, "Data Updated Successfully");
                            window.location.href = "<?= g('admin_base_url') ?>cleaning_service";
                        } else {
                            AdminToastr.error(response.message, "Error");
                        }
                // Add return
                return false;
              }, 1000);
          return false;
        });
          });
</script>