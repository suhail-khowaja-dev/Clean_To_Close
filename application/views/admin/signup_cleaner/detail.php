<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  .myEyePassword {
    position: absolute;
    top: 10px;
    right: 6%;
  }
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
    .address{
        background-color: #717373!important;
        color: black!important;
    }
    .custom_address{
      text-transform: capitalize
    }
    .last {
    text-transform: uppercase;   
   color: #495653 !important;
    font-family: gilroymedium !important;
  }
</style>




<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Information</a></li>
    <li><a data-toggle="pill" href="#menu1">References</a></li>
    <li><a data-toggle="pill" href="#menu2">Insured/W-9</a></li>
    <li><a data-toggle="pill" href="#menu3">Team Members</a></li>
    <li><a data-toggle="pill" href="#menu4">Subscription</a></li>
    <li><a data-toggle="pill" href="#menu5">Payment</a></li>
    <li><a data-toggle="pill" href="#menu6">Change Password</a></li>
</ul>
<form action="<?= g('admin_base_url') ?>signup_cleaner_unapproved/update_cleaner_unapproved" method="post" id="cleanerunaproved" class="footTop">
    <div class="tab-content">

        <div id="home" class="tab-pane fade for-shodow in active">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Cleaner Info</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column">
                    <label for="">FIRST NAME</label>
                    <input type="hidden" value="<?php echo $signup_data_cleaner['signup_id']?>" name="cleaner[signup_id]">
                    <input type="text" name="cleaner[signup_name]" value="<?php echo $signup_data_cleaner['signup_name']?>">
                </div>
                <div class="col-lg-6 d-flex flex-column">
                    <label for="">LAST NAME</label>
                    <input type="text" name="cleaner[signup_lastname]" value="<?php echo $signup_data_cleaner['signup_lastname']?>">
                </div>

                <div class="col-lg-6 d-flex flex-column">
                    <label for="">PHONE NUMBER</label>
                    <input type="tel" name="cleaner[signup_contact]" value="<?php echo $signup_data_cleaner['signup_contact']?>" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone">
                </div>

                <div class="col-lg-6 d-flex flex-column">
                    <label for="">COMPANY NAME</label>
                    <input type="text" name="cleaner[signup_company]" value="<?php echo $signup_data_cleaner['signup_company']?>">
                </div>
                <div class="col-lg-6 d-flex flex-column">
                    <label for="">ADDRESS</label>
                    <input type="text"  name="cleaner[signup_address]" value="<?php echo $signup_data_cleaner['signup_address']?> , <?php echo $signup_data_cleaner['signup_city']; ?> , <?php echo $signup_data_cleaner['signup_state']?> " class="address custom_address myCapitalcustom_address" readonly>
                </div>
                <div class="col-lg-6 d-flex flex-column">
                    <label for="">UNIT</label>
                    <input type="text" name="cleaner[signup_unit]" value="<?php echo $signup_data_cleaner['signup_unit']?>">
                </div>
                <div class="col-lg-6 d-flex flex-column">
                    <label for="">EMAIL</label>
                    <input type="email" name="cleaner[signup_email]" value="<?php echo $signup_data_cleaner['signup_email']?>" class="address" readonly>
                </div>
                <div class="col-lg-6">
                    <label>Years In Business <span style="color:red;margin-left: 4px;"> * </span> </label>
                    <div class="custom-select">
                        <label hidden>Years In Business</label>
                        <select class="formCustomInput customDropdown validation" name="cleaner[signup_business_name]" id="type_residence">
                            <option value="" disabled selected><?php echo $signup_data_cleaner['signup_business_name']?></option>
                            <!-- <option value="N/A" class="customDropdownoption">Years In Business</option> -->
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="Moblie Home">10</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                  <div class="row">
                  <div class="col-lg-12">
                    <label for="" class="farFill"> Would you like to be considered for last-minute job opportunities? </label>
                  </div>
                  <?php if($signup_data_cleaner['signup_job_opportunities'] == 'Yes'){?>
                  <div class="col-lg-12 d-flex align-items-center uptoo mt20 mb1">
                    <label class="containerRadio22">Yes
                      <input type="radio"  name="cleaner[signup_job_opportunities]" value="<?php echo $signup_data_cleaner['signup_job_opportunities']?>" checked>
                      <span class="checkmarkRadio"></span>
                    </label>
                    <label class="containerRadio22">No
                      <input type="radio"  name="cleaner[signup_job_opportunities]" value="<?php echo $signup_data_cleaner['signup_job_opportunities']?>"disabled>
                      <span class="checkmarkRadio"></span>
                    </label>
                  </div>
                  <?}else{?>
                    <div class="col-lg-12 d-flex align-items-center uptoo mt20 mb1">
                    <label class="containerRadio22">Yes
                      <input type="radio"  name="cleaner[signup_job_opportunities]" value="<?php echo $signup_data_cleaner['signup_job_opportunities']?>" disabled>
                      <span class="checkmarkRadio"></span>
                    </label>
                    <label class="containerRadio22">No
                      <input type="radio"  value="<?php echo $signup_data_cleaner['signup_job_opportunities']?>" name="cleaner[signup_job_opportunities]" checked>
                      <span class="checkmarkRadio"></span>
                    </label>
                  </div>
                  <?php } ?>
                  </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="" class="farFill"> How far are you willing to travel from your primary
                                address listed above? </label>
                        </div>
                        <?if($signup_data_cleaner['signup_miles'] == 20.0){?>
                          <div class="col-lg-12 d-flex align-items-center uptoo">
                            <label class="containerRadio22">Up to 20 Miles
                                <input type="checkbox"   value="<?php echo $signup_data_cleaner['signup_miles']?>" name="cleaner[signup_miles]" checked>
                                <span class="checkmarkRadio">
                                </span>
                            </label>
                            <label class="containerRadio22">Up to 30 Miles
                                <input type="checkbox"  name="cleaner[signup_miles]" value="<?php echo $signup_data_cleaner['signup_miles']?>" disabled>
                                <span class="checkmarkRadio">
                                </span>
                            </label>
                            <label class="containerRadio22">Up to 45 Miles
                                <input type="checkbox"  name="cleaner[signup_miles]" value="<?php echo $signup_data_cleaner['signup_miles']?>" disabled>
                                <span class="checkmarkRadio"></span>
                            </label>
                        </div>
                        <?}elseif($signup_data_cleaner['signup_miles'] == 30.0){?>
                          <div class="col-lg-12 d-flex align-items-center uptoo">
                              <label class="containerRadio22">Up to 20 Miles
                                  <input type="checkbox"   name="cleaner[signup_miles]" value="<?php echo $signup_data_cleaner['signup_miles']?>" disabled>
                                  <span class="checkmarkRadio">
                                  </span>
                              </label>
                              <label class="containerRadio22">Up to 30 Miles
                                  <input type="checkbox"  name="cleaner[signup_miles]" value="<?php echo $signup_data_cleaner['signup_miles']?>" checked>
                                  <span class="checkmarkRadio">
                                  </span>
                              </label>
                              <label class="containerRadio22">Up to 45 Miles
                                  <input type="checkbox"  name="cleaner[signup_miles]" value="<?php echo $signup_data_cleaner['signup_miles']?>" disabled>
                                  <span class="checkmarkRadio"></span>
                              </label>
                          </div>
                        
                        <?}else{?>
                          <div class="col-lg-12 d-flex align-items-center uptoo">
                              <label class="containerRadio22">Up to 20 Miles
                                  <input type="checkbox"   name="cleaner[signup_miles]" value="<?php echo $signup_data_cleaner['signup_miles']?>" disabled>
                                  <span class="checkmarkRadio">
                                  </span>
                              </label>
                              <label class="containerRadio22">Up to 30 Miles
                                  <input type="checkbox"  name="cleaner[signup_miles]"  value="<?php echo $signup_data_cleaner['signup_miles']?>" disabled>
                                  <span class="checkmarkRadio">
                                  </span>
                              </label>
                              <label class="containerRadio22">Up to 45 Miles
                                  <input type="checkbox"  name="cleaner[signup_miles]" value="<?php echo $signup_data_cleaner['signup_miles']?>" checked>
                                  <span class="checkmarkRadio"></span>
                              </label>
                          </div>
                       <?php
                       }
                       ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade for-shodow">
            <div class="row">
                <div class="col-lg-12">
                    <h3>REFERENCES</h3>
                </div>
                <div class="col-lg-12">
                    <label for="">REFERENCE:1</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" placeholder="Name" name="cleaner[signup_ref1_name]" value="<?php echo $signup_data_cleaner['signup_ref1_name']?>">
                </div>
                <div class="col-lg-4">
                    <input type="text" placeholder="Phone Number" name="cleaner[signup_ref1_contact]" value="<?php echo $signup_data_cleaner['signup_ref1_contact']?>">
                </div>
                <div class="col-lg-4">
                    <input type="text" placeholder="Relation" name="cleaner[signup_ref1_relation]" value="<?php echo $signup_data_cleaner['signup_ref1_relation']?>">
                </div>
                <div class="col-lg-12">
                    <input type="text" placeholder="Address" name="cleaner[signup_ref1_address]" value="<?php echo $signup_data_cleaner['signup_ref1_address']?>">
                </div>
                <div class="col-lg-12">
                    <label for="">REFERENCE:2</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" placeholder="Name" name="cleaner[signup_ref2_name]" value="<?php echo $signup_data_cleaner['signup_ref2_name']?>">
                </div>
                <div class="col-lg-4">
                    <input type="text" placeholder="Phone Number" name="cleaner[signup_ref2_contact]" value="<?php echo $signup_data_cleaner['signup_ref2_contact']?>">
                </div>
                <div class="col-lg-4">
                    <input type="text" placeholder="Relation" name="cleaner[signup_ref2_relation]" value="<?php echo $signup_data_cleaner['signup_ref2_relation']?>">
                </div>
                <div class="col-lg-12">
                    <input type="text" placeholder="Address" name="cleaner[signup_ref2_address]" value="<?php echo $signup_data_cleaner['signup_ref2_address']?>">
                </div>
                <div class="col-lg-12">
                    <label for="">REFERENCE:3</label>
                </div>
                <div class="col-lg-4">
                    <input type="text" placeholder="Name" name="cleaner[signup_ref3_name]" value="<?php echo $signup_data_cleaner['signup_ref3_name']?>">
                </div>
                <div class="col-lg-4">
                    <input type="text" placeholder="Phone Number" name="cleaner[signup_ref3_contact]" value="<?php echo $signup_data_cleaner['signup_ref3_contact']?>">
                </div>
                <div class="col-lg-4">
                    <input type="text" placeholder="Relation" name="cleaner[signup_ref3_relation]" value="<?php echo $signup_data_cleaner['signup_ref3_relation']?>">
                </div>
                <div class="col-lg-12">
                    <input type="text" placeholder="Address" name="cleaner[signup_ref3_address]" value="<?php echo $signup_data_cleaner['signup_ref3_address']?>">
                </div>
            </div>

        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Insurance</h3>
                </div>
                <div class="col-lg-12">
                    <label for="">ARE YOU INSURED?</label>
                </div>
                <div class="col-lg-12 d-flex align-items-center uptoo">
                    <label class="containerRadio22">Yes
                        <input type="radio" checked="checked" value="1" name="cleaner[signup_team_insured]">
                        <span class="checkmarkRadio"></span>
                    </label>
                    <label class="containerRadio22">No
                        <input type="radio" checked="checked" value="0" name="cleaner[signup_team_insured]">
                        <span class="checkmarkRadio"></span>
                    </label>
                </div>
                <div class="col-lg-12 mar-1">
                    <span>Note: <p>if you already carry liability insurance, or choose to obtain liability insurance <br>
                            from your own provider you will need to:</p> </span>
                </div>
                <div class="col-lg-12 mar-1">
                    <ul>
                        <li>add clean to close as an additional insured on ypur policy prior to uploading</li>
                        <li>please note, only those named and covered under the insurance policy are allowed to be on-site
                            of a clean to close client</li>
                    </ul>
                </div>
                <div class="col-lg-12 mar-1">
                <a href="<?php echo get_image($signup_data_cleaner['signup_insurance_company_path'], $signup_data_cleaner['signup_insurance_company_image']) ?>"download>
                    <button  type="button">View</button> 
                     </a>
                </div>
            </div>
            <div class="row for-top-sapce">
                <div class="col-lg-12">
                    <h3>W-9</h3>
                </div>
                <div class="col-lg-12 mar-1">
                    <span>Note: <p> <a href="">click here </a> to download and fill out the W-9 form,once completed , upload
                            the document <br> here.</p> </span>
                </div>
                <div class="col-lg-12 mar-1">
                <a href="<?php echo get_image($signup_data_cleaner['signup_w_9_path'], $signup_data_cleaner['signup_w_9_image']) ?>"download>
                    <button  type="button">View</button> 
                     </a>
                </div>
            </div>
        </div>
        <div id="menu3" class="tab-pane fade ">
            <div class="for-fix-width">
                <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" aria-describedby="example_info">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">S.No</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Members</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 120px;">Contact No.</th>
                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 140px;">Email</th>
                            <!-- <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 80px;"></th> -->

                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach($team_memeber as $key => $value){?> 
                        <tr class="odd">
                            <td class="sorting_1"><input type="text" placeholder="01" value="<?php echo $value['user_team_id']?>" readonly></td> 
                                <td><input type="text" value="<?php echo $value['team_name_memeber']?>" readonly></td>
                            <td><input type="text" value="<?php echo $value['team_name_contact']?>" readonly></td>
                            <td><input type="text"  value="<?php echo $value['team_name_email']?>" readonly></td>
                            <!-- <td class="for-center"><button type="button" class="form_info" data-id="<?php echo  $value['user_team_id'] ?>">View</button></td> -->
                        </tr>
                        <?php
                         } 
                         ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="menu4" class="tab-pane fade">
            <div class="row for-shodow">
                <div class="col-lg-12">
                    <h3>Summary</h3>
                </div>
                <div class="col-lg-12">
                    <div class="for-sapce-between">
                        <span>Package Name</span>
                        <label for=""><?php echo ucfirst($signup_data_cleaner['signup_package_name'])?></label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="for-sapce-between">
                        <span>Package Amount</span>
                        <?php
                            $num = $signup_data_cleaner['signup_amount_paid'];
                            $dec = $num / 100;
                        ?>
                        <label for="">$<?php echo $dec?></label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="for-sapce-between">
                        <span>Avail Jobs</span>
                        <label for=""><?php echo $signup_data_cleaner['signup_package_job']?></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12  aprroved-btn">
                    <button id="submitInfo">Approve</button>
                </div>
            </div>
        </div>
        <div id="menu5" class="tab-pane fade for-shodow">
            <table id="example" class="table table-striped table-bordered dataTable" style="width: 100%;" aria-describedby="example_info">
                <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 140px;">Package Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 140px;">Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 120px;">Time</th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 140px;">Package Amount</th>

                    </tr>
                </thead>
                <tbody id="myTableamount">
                  <?php foreach($signup_data_package as $key=> $value){?>
                    <tr class="odd">
                        <td class="sorting_1"><?php echo ucfirst($value['signup_payment_package_name'])?></td>
                        <td><?php echo date("m/d/Y", strtotime($value['signup_payment_createdon'])) ?></td>
                      <td><?php echo date("h:i A", strtotime($value['signup_payment_createdon'])) ?></td>
                      <?php
                            $num = $value['signup_subscription_amount'];
                            $dec = $num / 100;
                        ?>
                        <td>$<?php echo $dec?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-lg-12 aprroved-btn">
                    <span>Total Paid:</span>
                    <label for="">$<span class="TpAmount" id="total_amount_package"></span></label>
                </div>
            </div>
        </div>
</form>

    <div id="menu6" class="tab-pane fade">
        <form  action="<?= g('admin_base_url') ?>signup_cleaner_unapproved/update_password_cleaner_unapproved" method="post" id="passwordupdate" class="footTop">
        <div class="row for-shodow">
            <div class="col-lg-6">
            <input type="hidden" value="<?php echo $signup_data_cleaner['signup_id']?>" name="signup_data_cleaner[signup_id]">
                <input type="text" placeholder="Old Password"   value="<?php echo $signup_data_cleaner['signup_password_show']?>" readonly>
            </div>
            <div class="col-lg-6">
                <!-- <input type="text" placeholder="New Password"> -->
                <input type="password" placeholder="New Password" class="slugger-source" id="password" name="signup_data_cleaner[signup_password]">
                  <input type="hidden" id="password" placeholder="Password" class="slugger-target" name="signup_data_cleaner[signup_password_show]">
                  <span class="myEyePassword" onclick="myFunction()">
          <i class="fa-solid fa-eye"></i>
          <!-- <i class="fa-solid fa-eye-slash"></i> -->
        </span>
            </div>
            <div class="col-lg-12">
                <button type="submit" id="SaveNEdit">Save</button>
            </div>
        </div>
        </form>
    </div>


</div>

</div>

<!-- modal for view form -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#criminalWatchModal" id="acceptanceBtn" hidden>
        Launch demo modal
    </button>
<!-- Modal -->
<div class="modal fade" id="criminalWatchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form id="saveCardForm">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <!-- page 1 -->
          <div class="p1">
            <div class="mHeader">
              <h2>
                BACKGROUND CHECK DISCLOSURE DOCUMENT
              </h2>
            </div>

            <div class="mBody">
              <p>
                <strong>COMPANY NAME.</strong> and its subsidiaries, parents, successors and affiliates (the “Company”) may order a “consumer
                report” (commonly known as “background report” or “background check”) on you in connection with your employment
                application, and if you are hired, or if you already work for the Company, may order additional background reports on you
                for employment purposes. <br /><br />
                To the extent allowed by law, the background report may contain information concerning your character, general
                reputation, personal characteristics, mode of living, drug and alcohol test results, credit and criminal history. To the
                extent allowed by law, information may be obtained from private and public record sources, including but not limited to,
                sanctions databases, court records, driving records, verification of employment and education history, licensing and
                credentials, military records, and police records.
              </p>
              <div class="row">
                <div class="col-lg-12">
                  <label for="">Received by:</label>
                </div>
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6">
                      <input type="text" class="team_member_name" placeholder="Name" name="user_team_member_name" value="" readonly>
                    </div>
                    <div class="col-lg-6">
                      <input type="text"  class="team_signature" placeholder="Signature" name="user_team_signature" value="" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 blank mb30">
                  THE REMAINDER OF THIS DOCUMENT IS INTENTIONALLY LEFT BLANK
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 d-flex justify-content-center csntr-ali align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" class="team_initials" name="user_team_initials" value="" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <!-- page 2 -->
          <div class="p1 mt40">
            <div class="mHeader">
              <h2>
                BACKGROUND CHECK DISCLOSURE DOCUMENT
              </h2>
            </div>
            <div class="mBody">
              <p>
                I authorize COMPANY NAME and its subsidiaries, parents, successors and affiliates (“the Company”) to order my
                consumer report (background check). I understand that, as allowed by law, the Company may rely on this authorization to
                order additional reports without asking me for my authorization again (1) during my employment, and (2) from any
                consumer reporting agency (“CRA”). A copy of this original in hard copy, electronic, faxed, or electronically signed form
                shall be as valid as the original. <br /><br />
                For the purpose of preparing a consumer report (background check) for the Company, and only for that purpose, and
                subject to all laws protecting my informational privacy, I also authorize the following to disclose to the consumer
                reporting agency the information needed to compile the report: my past or present employers; learning institutions,
                including colleges and universities; law enforcement and all other federal, state and local agencies; all courts; the military;
                credit bureaus; testing facilities; and all motor vehicle records agencies. I acknowledge the information that can be
                disclosed to the consumer reporting agency, as allowed by law, includes information concerning my employment and
                earnings history, education, credit history, motor vehicle history, criminal history, military service, and professional
                credentials and licenses. <br /><br />
                Additional information about your rights has been provided to you with this Background Check Authorization Document.
                Please review it <strong><u>BEFORE</u></strong> you sign.
              </p>
              <!-- <div class="row">
                  <div class="col-lg-12">
                    <label for="">Received by:</label>
                  </div>
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-6">
                        <input type="text" placeholder="Name">
                      </div>
                      <div class="col-lg-6">
                        <input type="text" placeholder="Signature">
                      </div>
                    </div>
                  </div>
                </div> -->
              <div class="row">
                <div class="col-lg-12 mt1">
                  <label for="">Print Name</label>
                  <input type="text" placeholder="" class="team_print_name" name="user_team_print_name" value="" readonly>
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Print any Other Names Used</label>
                  <input type="text" placeholder="" class="team_print_other_name" name="user_team_print_other_name" value="" readonly>
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Social Security Number (for identification purposes only)</label>
                  <input type="text" placeholder="" class="team_social_security_number" name="user_team_social_security_number" value="" readonly>
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Date of Birth (for identification purposes only)</label>
                  <input type="text" placeholder="" class="team_date_of_birth" name="user_team_date_of_birth" value="" readonly>
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Driver’s License(s) Number(s) and State(s)</label>
                  <input type="text" placeholder="" class="team_driver_license" name="user_team_driver_license" value="" readonly>
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Address, And Any Other States In Which You Have Lived in the Past 7 Years:</label>
                  <input type="text" placeholder="" class="team_address" name="user_team_address" value="" readonly>
                </div>
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6 mt1">
                      <label for="">Signature</label>
                      <input type="text" placeholder="" class="team_signature" name="user_team_signature" value="" readonly>
                    </div>
                    <div class="col-lg-6 mt1">
                      <label for="">Date:</label>
                      <input type="date" placeholder="" class="team_date" name="user_team_date" value="" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt20">
                <div class="col-lg-12 califorr">
                  If you live or work for the Company in California, Minnesota or Oklahoma: Check
                  this box if you would like a free copy of your background report:
                </div>
              </div>
              <!-- <div class="row">
                  <div class="col-lg-12 blank mb30">
                    THE REMAINDER OF THIS DOCUMENT IS INTENTIONALLY LEFT BLANK
                  </div>
                </div> -->
              <div class="row mt60">
                <div class="col-lg-12 d-flex justify-content-center csntr-ali align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" class="team_initials" name="user_team_initials" value="" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <!-- page 3 -->
          <div class="p1 mt40">
            <div class="mHeader">
              <h2>
                BACKGROUND CHECK DISCLOSURE DOCUMENT
              </h2>
            </div>
            <div class="mBody">
              <p>
                You are hereby provided a summary of the following provisions of the Fair Credit Reporting Act, 15 U.S.C. § 1681m(a):
              </p>
              <ul>
                <li>
                  The Consumer Reporting Agency (“CRA”) CriminalWatchDog, Inc. (CriminalWatchDog.com) will prepare a
                  consumer report/background report/background check for the Company. The CRA is located at 303 Wyman
                  Street, Suite 300, Waltham, MA 02451. They can be contacted at 800-515-8498. The CRA’s privacy policy is
                  available at https://www.criminalwatchdog.com/privacy-policy.
                </li>
                <li>
                  No consumer reporting agency utilized by the Company makes adverse decisions relating to your employment,
                  and no consumer reporting agency utilized by the Company is able to provide any specific reasons to you why an
                  adverse decision relating to your employment may be taken or was taken based on a consumer report.
                </li>
                <li>
                  15 U.S.C. § 1681j provides for the right to obtain a free copy of a consumer report on you from the consumer
                  reporting agency which prepared your background report, under various circumstances, including but not limited
                  to where you receive notice that an adverse action has been taken toward you based on the consumer report. In
                  that instance, Section 1681j provides a right to a free copy of the report provided that you make the request within
                  60 days of the date that you received notice of the adverse action.
                </li>
              </ul>
              <div class="row">
                <div class="col-lg-12 blank mb30">
                  THE REMAINDER OF THIS DOCUMENT IS INTENTIONALLY LEFT BLANK
                </div>
              </div>
              <div class="row mt60">
                <div class="col-lg-12 d-flex justify-content-center csntr-ali align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text"  class="team_initials" name="user_team_initials" value="" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <!-- page 4-->
          <div class="p1 mt0">
            <div class="mHeader">
              <h2>
                BACKGROUND CHECK DISCLOSURE DOCUMENT
              </h2>
            </div>
            <div class="mBody">
              <p>
                If you live or work for COMPANY NAME and its subsidiaries, parents, successors and affiliates (“the Company”) in any
                of the states listed below, please note the following:
                <br />
                <br />
                <strong> MASSACHUSETTS:</strong> If you contact the Company’s Human Resources department, you have the right to know whether
                the Company ordered an investigative consumer report about you. You also have the right to ask the CRA for a copy of
                any such report. <br />
                <br />
                <strong>MINNESOTA:</strong> You have the right in most circumstances to submit a written request to the CRA for a complete and
                accurate disclosure of the nature and scope of any consumer report the Company ordered about you. The CRA must
                provide you with this disclosure within five business days after its receipt of your request or the report was requested by
                the Company, whichever date is later. <br />
                <br />
                <strong>NEW JERSEY:</strong> You have the right to submit a request to the CRA for a copy of any investigative consumer report the
                Company ordered about you. <br />
                <br />
                <strong>NEW YORK:</strong> If you contact the Company’s Human Resources department, you have the right to know whether the
                Company ordered a consumer report or investigative consumer report about you. Shown above is the CRA’s address and
                telephone number. You have the right to contact the CRA to inspect or receive a copy of any such report. A copy of
                Article 23-A of the Correction Law is provided below. <br />
                <br />
                <strong>WASHINGTON STATE:</strong> If you submit a written request to the Company’s Human Resources department, you have the
                right to a complete and accurate disclosure of the nature and scope of any investigative consumer report the Company
                ordered about you. You are entitled to this disclosure within five business days after the date your request is received or
                we ordered the report, whichever is later. You also have the right to request a written summary of your rights under the
                Washington Fair Credit Reporting Act.
              </p>
              <div class="row">
                <div class="col-lg-12 blank mb30">
                  THE REMAINDER OF THIS DOCUMENT IS INTENTIONALLY LEFT BLANK
                </div>
              </div>

              <div class="row mt60">
                <div class="col-lg-12 d-flex justify-content-center csntr-ali align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" class="team_initials" name="user_team_initials" value="" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <!-- page 5 -->
          <div class="p1 mt40">
            <div class="mHeader">
              <strong>
                <em>
                  <h3>Para informacion en espanol, visite <a href="www.consumerfinance.gov/learnmore">www.consumerfinance.gov/learnmore</a> o escribe a la Consumer
                    Financial Protection Bureau, 1700 G Street N.W., Washington, D.C. 20552.</h3>
                </em>
              </strong>
              <br />
              <h2>
                A Summary of Your Rights Under the Fair Credit Reporting Act
              </h2>
            </div>
            <div class="mBody">
              <p>
                The federal Fair Credit Reporting Act (FCRA) promotes the accuracy, fairness, and privacy of
                information in the files of consumer reporting agencies. There are many types of consumer reporting
                agencies, including credit bureaus and specialty agencies (such as agencies that sell information about check
                writing histories, medical records, and rental history records). Here is a summary of your major rights under
                the FCRA. <strong>
                  For more information, including information about additional rights, go to
                  www.consumerfinance.gov/learnmore or write to: Consumer Financial Protection Bureau, 1700 G
                  Street N.W., Washington, DC 20552.
                </strong>
              </p>
              <ul>
                <li>
                  <strong>You must be told if information in your file has been used against you.</strong> Anyone who uses a credit
                  report or another type of consumer report to deny your application for credit, insurance, or employment –
                  or to take another adverse action against you – must tell you, and must give you the name, address, and
                  phone number of the agency that provided the information.
                </li>
                <li>
                  <strong>You have the right to know what is in your file.</strong> You may request and obtain all the information about
                  you in the files of a consumer reporting agency (your “file disclosure”). You will be required to provide
                  proper identification, which may include your Social Security number. In many cases, the disclosure will
                  be free. You are entitled to a free file disclosure if:
                  <ul>
                    <li>
                      a person has taken adverse action against you because of information in your credit report;
                    </li>
                    <li>you are the victim of identity theft and place a fraud alert in your file; /li>
                    <li>your file contains inaccurate information as a result of fraud;</li>
                    <li>you are on public assistance; </li>
                    <li>you are unemployed but expect to apply for employment within 60 days. </li>
                  </ul>
                  <p>
                    In addition, all consumers are entitled to one free disclosure every 12 months upon request from each
                    nationwide credit bureau and from nationwide specialty consumer reporting agencies. See
                    <a href="www.consumerfinance.gov/learnmore">www.consumerfinance.gov/learnmore</a> for additional information.
                  </p>
                </li>
                <li>
                  <strong>You have the right to ask for a credit score.</strong> Credit scores are numerical summaries of your creditworthiness based on information from credit bureaus. You may request a credit score from consumer
                  reporting agencies that create scores or distribute scores used in residential real property loans, but you
                  will have to pay for it. In some mortgage transactions, you will receive credit score information for free
                  from the mortgage lender.
                </li>
                <li>
                  <strong>You have the right to dispute incomplete or inaccurate information.</strong> If you identify information in
                  your file that is incomplete or inaccurate, and report it to the consumer reporting agency, the agency must
                  investigate unless your dispute is frivolous. See www.consumerfinance.gov/learnmore for an
                  explanation of dispute procedures.
                </li>
                <li>
                  <strong>Consumer reporting agencies must correct or delete inaccurate, incomplete, or unverifiable
                    information.</strong> Inaccurate, incomplete or unverifiable information must be removed or corrected, usually
                  within 30 days. However, a consumer reporting agency may continue to report information it has
                  verified as accurate.
                </li>
                <li>
                  <strong>Consumer reporting agencies may not report outdated negative information</strong> In most cases, a
                  consumer reporting agency may not report negative information that is more than seven years old, or
                  bankruptcies that are more than 10 years old.
                </li>
                <li>
                  <strong>Access to your file is limited.</strong> A consumer reporting agency may provide information about you only to
                  people with a valid need -- usually to consider an application with a creditor, insurer, employer, landlord,
                  or other business. The FCRA specifies those with a valid need for access.
                </li>
                <li>
                  <strong>You must give your consent for reports to be provided to employers.</strong> A consumer reporting agency
                  may not give out information about you to your employer, or a potential employer, without your written
                  consent given to the employer. Written consent generally is not required in the trucking industry. For
                  more information, go to www.consumerfinance.gov/learnmore.
                </li>
              </ul>
              <!-- <div class="row">
                  <div class="col-lg-12 blank mb30">
                    THE REMAINDER OF THIS DOCUMENT IS INTENTIONALLY LEFT BLANK
                  </div>
                </div> -->
              <div class="row mt60">
                <div class="col-lg-12 d-flex justify-content-center csntr-ali align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 2-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" class="team_initials" name="user_team_initials" value="" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <!-- page 6 -->
          <div class="p1 mt40">
            <div class="mHeader">
              <strong>
                <em>
                  <h3>Para informacion en espanol, visite <a href="www.consumerfinance.gov/learnmore">www.consumerfinance.gov/learnmore</a> o escribe a la Consumer
                    Financial Protection Bureau, 1700 G Street N.W., Washington, D.C. 20552.</h3>
                </em>
              </strong>
              <br />
              <h2>
                A Summary of Your Rights Under the Fair Credit Reporting Act
              </h2>
            </div>
            <div class="mBody">
              <ul>
                <li>
                  <strong>You may limit “prescreened” offers of credit and insurance you get based on information in your
                    credit report.</strong> Unsolicited “prescreened” offers for credit and insurance must include a toll-free phone
                  number you can call if you choose to remove your name and address from the lists these offers are based
                  on. You may opt out with the nationwide credit bureaus at 1-888-5-OPTOUT (1-888-567-8688).
                </li>
                <li>
                  <strong>You may seek damages from violators.</strong> If a consumer reporting agency, or, in some cases, a user of
                  consumer reports or a furnisher of information to a consumer reporting agency violates the FCRA, you
                  may be able to sue in state or federal court.
                </li>
                <li>
                  Identity theft victims and active duty military personnel have additional rights. For more
                  information, visit <a href="www.consumerfinance.gov/learnmore">www.consumerfinance.gov/learnmore.</a>
                </li>
              </ul>
              <p>
                <strong>
                  States may enforce the FCRA, and many states have their own consumer reporting laws. In some
                  cases, you may have more rights under state law. For more information, contact your state or local
                  consumer protection agency or your state Attorney General. For information about your federal
                  rights, contact:
                </strong>
              </p>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      TYPE OF BUSINESS
                    </th>
                    <th>
                      CONTACT
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1.a. Banks, savings associations, and credit unions with total assets of over $10
                      billion and their affiliates.
                      <br /><br />

                      b. Such affiliates that are not banks, savings associations, or credit unions also
                      should list, in addition to the CFPB:
                    </td>
                    <td>
                      a. Consumer Financial Protection Bureau
                      1700 G Street, N.W.
                      Washington, DC 20552 <br /><br />

                      b. Federal Trade Commission: Consumer Response Center - FCRA
                      Washington, DC 20580
                      (877) 382-4357
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2. To the extent not included in item 1 above: <br /><br />

                      a. National banks, federal savings associations, and federal branches and federal agencies of foreign banks
                      <br /><br />

                      b. State member banks, branches and agencies of foreign banks (other than
                      federal branches, federal agencies, and Insured State Branches of Foreign
                      Banks), commercial lending companies owned or controlled by foreign banks,
                      and organizations operating under section 25 or 25A of the Federal Reserve Act <br /><br />

                      c. Nonmember Insured Banks, Insured State Branches of Foreign Banks, and
                      insured state savings associations<br /><br />

                      d. Federal Credit Unions
                    </td>
                    <td>
                      a. Office of the Comptroller of the Currency
                      Customer Assistance Group
                      1301 McKinney Street, Suite 3450,
                      Houston, TX 77010-9050 <br /><br />

                      b. Federal Reserve Consumer Help Center
                      P.O. Box 1200
                      Minneapolis, MN 55480 <br /><br />

                      c. FDIC Consumer Response Center
                      1100 Walnut Street, Box #11
                      Kansas City, MO 64106 <br /><br />

                      d. National Credit Union Administration
                      Office of Consumer Protection (OCP)
                      Division of Consumer Compliance and Outreach (DCCO)
                      1775 Duke Street, Alexandria, VA 22314 <br /><br />
                    </td>
                  </tr>
                  <tr>
                    <td>3. Air Carriers</td>
                    <td>
                      Asst. General Counsel for Aviation Enforcement & Proceedings
                      Aviation Consumer Protection Division
                      Department of Transportation
                      1200 New Jersey Avenue, S.E.
                      Washington, DC 20590
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4. Creditors Subject to the Surface Transportation Board
                    </td>
                    <td>
                      Office of Proceedings, Surface Transportation Board
                      Department of Transportation
                      395 E. Street, S.W.
                      Washington, DC 20423
                    </td>
                  </tr>
                  <tr>
                    <td>5. Creditors Subject to the Packers and Stockyards Act, 1921</td>
                    <td>Nearest Packers and Stockyards Administration area supervisor</td>
                  </tr>
                  <tr>
                    <td>6. Small Business Investment Companies</td>
                    <td>Associate Deputy Administrator for Capital Access
                      United States Small Business Administration
                      409 Third Street, SW, 8th Floor
                      Washington, DC 20416</td>
                  </tr>
                  <tr>
                    <td>7. Brokers and Dealers </td>
                    <td>
                      Securities and Exchange Commission
                      100 F St., N.E.
                      Washington, DC 20549
                    </td>
                  </tr>
                  <tr>
                    <td>8. Federal Land Banks, Federal Land Bank Associations, Federal Intermediate
                      Credit Banks, and Production Credit Associations </td>
                    <td>Farm Credit Administration
                      1501 Farm Credit Drive
                      McLean, VA 22102-5090 </td>
                  </tr>
                  <tr>
                    <td>9. Retailers, Finance Companies, and All Other Creditors Not Listed Above</td>
                    <td>FTC Regional Office for region in which the creditor operates or
                      Federal Trade Commission: Consumer Response Center – FCRA
                      Washington, DC 20580
                      (877) 382-4357 </td>
                  </tr>
                </tbody>
              </table>
              <!-- <div class="row">
                  <div class="col-lg-12 blank mb30">
                    THE REMAINDER OF THIS DOCUMENT IS INTENTIONALLY LEFT BLANK
                  </div>
                </div> -->
              <div class="row mt60">
                <div class="col-lg-12 d-flex justify-content-center csntr-ali align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 2-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" class="team_initials" name="user_team_initials" value="" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <!-- page 7 -->
          <div class="p1 mt40">
            <div class="mHeader">
              <h2>
                CALIFORNIA DISCLOSURE REGARDING BACKGROUND CHECKS DOCUMENT
              </h2>
            </div>
            <div class="mBody">
              <p>
                COMPANY NAME and its subsidiaries, parents, successors and affiliates (“the Company”) will order a consumer
                report or investigative consumer report on you in connection with your employment application, and if you are hired, or if
                you already work for the Company, may order additional such reports on you for employment purposes. Such reports
                may contain information about your character, general reputation, personal characteristics, and mode of living. The
                Consumer Reporting Agency (“CRA”), CriminalWatchDog, Inc. (CriminalWatchDog.com), will prepare the report for the
                Company. The CRA is located at 303 Wyman Street, Suite 300, Waltham, MA 02451. They can be contacted at 800-515-
                8498. The CRA’s privacy policy is available at https://www.criminalwatchdog.com/privacy-policy.
                Pursuant to California Labor Code Section 1024.5 and California Civil Code 1785.20.5, if we request a credit report
                regarding you, the reason(s) we are requesting a credit report regarding you is/are: (1) A position for which the
                information contained in the report is required by law to be disclosed or obtained and/or (2) you are in a managerial
                position.
              </p>
              <br />

              <h2>
                CALIFORNIA DISCLOSURE REGARDING BACKGROUND CHECKS DOCUMENT
              </h2>
              <ol type="a">
                <li>
                  An investigative consumer reporting agency shall supply files and information required under Section 1786.10 during
                  normal business hours and on reasonable notice.
                </li>
                <li>Files maintained on a consumer shall be made available for the consumer’s visual inspection, as follows:
                  <ol type="a">
                    <li>
                      In person, if he or she appears in person and furnishes proper identification. A copy of his or her file shall also
                      be available to the consumer for a fee not to exceed the actual costs of duplication services provided.
                    </li>
                    <li>
                      By certified mail, if he or she makes a written request, with proper identification, for copies to be sent to a
                      specified addressee. Investigative consumer reporting agencies complying with requests for certified mailings
                      under this section shall not be liable for disclosures to third parties caused by mishandling of mail after such
                      mailings leave the investigative consumer reporting agencies.
                    </li>
                    <li>
                      A summary of all information contained in files on a consumer and required to be provided by Section
                      1786.10 shall be provided by telephone, if the consumer has made a written request, with proper identification for
                      telephone disclosure, and the toll charge, if any, for the telephone call is prepaid by or charged directly to the
                      consumer.
                    </li>
                  </ol>
                </li>
                <li>
                  The term “proper identification” as used in subdivision (b) shall mean that information generally deemed sufficient to
                  identify a person. Such information includes documents such as a valid driver’s license, social security account number,
                  military identification card, and credit cards. Only if the consumer is unable to reasonably identify himself or herself with
                  the information described above, may an investigative consumer reporting agency require additional information
                  concerning the consumer’s employment and personal or family history in order to verify his or her identity.
                </li>
                <li>
                  The investigative consumer reporting agency shall provide trained personnel to explain to the consumer any
                  information furnished him or her pursuant to Section 1786.10.
                </li>
                <li>
                  The investigative consumer reporting agency shall provide a written explanation of any coded information contained
                  in files maintained on a consumer. This written explanation shall be distributed whenever a file is provided to a consumer
                  for visual inspection as required under Section 1786.22.
                </li>
                <li>
                  The consumer shall be permitted to be accompanied by one other person of his or her choosing, who shall furnish
                  reasonable identification. An investigative consumer reporting agency may require the consumer to furnish a written
                  statement granting permission to the consumer reporting agency to discuss the consumer’s file in such person’s presence.
                </li>

              </ol>
              <div class="row">
                <div class="col-lg-12 blank mb30">
                  THE REMAINDER OF THIS DOCUMENT IS INTENTIONALLY LEFT BLANK
                </div>
              </div>

              <div class="row mt60">
                <div class="col-lg-12 d-flex justify-content-center csntr-ali align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" class="team_initials" name="user_team_initials" value="" readonly>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <hr />

          <!-- page 8 -->
          <div class="p1 mt40">

            <div class="mBody">
              <h2>
                (NEW YORK APPLICANTS ONLY)
                ARTICLE 23-A, NEW YORK STATE CORRECTION LAW
              </h2>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>

                    </th>
                    <th>

                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <strong>§ 750. Definitions.</strong> For the purposes of this article, the
                      following terms shall have the following meanings:
                      (1) “Public agency” means the state or any local subdivision
                      thereof, or any state or local department, agency, board or
                      commission. <br />
                      (2) “Private employer” means any person, company, corporation,
                      labor organization or association which employs ten or more
                      persons.<br />
                      (3) “Direct relationship” means that the nature of criminal
                      conduct for which the person was convicted has a direct bearing
                      on his fitness or ability to perform one or more of the duties or
                      responsibilities necessarily related to the license, opportunity, or
                      job in question.<br />
                      (4) “License” means any certificate, license, permit or grant of
                      permission required by the laws of this state, its political
                      subdivisions or instrumentalities as a condition for the lawful
                      practice of any occupation, employment, trade, vocation,
                      business, or profession. Provided, however, that “license” shall
                      not, for the purposes of this article, include any license or permit
                      to own, possess, carry, or fire any explosive, pistol, handgun,
                      rifle, shotgun, or other firearm.<br />
                      (5) “Employment” means any occupation, vocation or
                      employment, or any form of vocational or educational training.
                      Provided, however, that “employment” shall not, for the purposes
                      of this article, include membership in any law enforcement
                      agency.<br />
                      <strong>§ 751. Applicability.</strong> The provisions of this article shall apply
                      to any application by any person for a license or employment at
                      any public or private employer, who has previously been
                      convicted of one or more criminal offenses in this state or in any
                      other jurisdiction, and to any license or employment held by any
                      person whose conviction of one or more criminal offenses in this
                      state or in any other jurisdiction preceded such employment or
                      granting of a license, except where a mandatory forfeiture,
                      disability or bar to employment is imposed by law, and has not
                      been removed by an executive pardon, certificate of relief from
                      disabilities or certificate of good conduct. Nothing in this article
                      shall be construed to affect any right an employer may have with
                      respect to an intentional misrepresentation in connection with an
                      application for employment made by a prospective employee or
                      previously made by a current employee.<br />
                      <strong>§ 752. Unfair</strong> discrimination against persons previously
                      convicted of one or more criminal offenses prohibited. No
                      application for any license or employment, and no employment or
                      license held by an individual, to which the provisions of this
                      article are applicable, shall be denied or acted upon adversely by
                      reason of the individual’s having been previously convicted of
                      one or more criminal offenses, or by reason of a finding of lack of
                      “good moral character” when such finding is based upon the fact
                      that the individual has previously been convicted of one or more
                      criminal offenses, unless:
                    </td>
                    <td>
                      (1) there is a direct relationship between one or more of the
                      previous criminal offenses and the specific license or
                      employment sought or held by the individual; or
                      (2) the issuance or continuation of the license or the granting or
                      continuation of the employment would involve an unreasonable
                      risk to property or to the safety or welfare of specific individuals
                      or the general public.<br />
                      <strong>§ 753.</strong> Factors to be considered concerning a previous
                      criminal conviction; presumption.<br />
                      1. In making a determination pursuant to section seven hundred
                      fifty-two of this chapter, the public agency or private employer
                      shall consider the following factors:<br />
                      (a) The public policy of this state, as expressed in this act, to
                      encourage the licensure and employment of persons previously
                      convicted of one or more criminal offenses.<br />
                      (b) The specific duties and responsibilities necessarily related to
                      the license or employment sought or held by the person.
                      (c) The bearing, if any, the criminal offense or offenses for
                      which the person was previously convicted will have on his
                      fitness or ability to perform one or more such duties or
                      responsibilities.<br />
                      (d) The time which has elapsed since the occurrence of the
                      criminal offense or offenses.<br />
                      (e) The age of the person at the time of occurrence of the criminal
                      offense or offenses.<br />
                      (f) The seriousness of the offense or offenses.
                      (g) Any information produced by the person, or produced on his
                      behalf, in regard to his rehabilitation and good conduct.
                      (h) The legitimate interest of the public agency or private
                      employer in protecting property, and the safety and welfare of
                      specific individuals or the general public.
                      2. In making a determination pursuant to section seven hundred
                      fifty-two of this chapter, the public agency or private employer
                      shall also give consideration to a certificate of relief from
                      disabilities or a certificate of good conduct issued to the
                      applicant, which certificate shall create a presumption of
                      rehabilitation in regard to the offense or offenses specified
                      therein.<br />
                      <strong>§ 754.</strong> Written statement upon denial of license or
                      employment. At the request of any person previously convicted
                      of one or more criminal offenses who has been denied a license
                      or employment, a public agency or private employer shall
                      provide, within thirty days of a request, a written statement
                      setting forth the reasons for such denial.
                      <strong>§ 755. Enforcement.</strong><br />
                      1. In relation to actions by public agencies, the provisions of this
                      article shall be enforceable by a proceeding brought pursuant to
                      article seventy-eight of the civil practice law and rules.
                      2. In relation to actions by private employers, the provisions of
                      this article shall be enforceable by the division of human rights
                      pursuant to the powers and procedures set forth in article fifteen
                      of the executive law, and, concurrently, by the New York city
                      commission on human rights.
                    </td>
                  </tr>
                </tbody>
              </table>


              <!-- <div class="row">
                  <div class="col-lg-12 blank mb30">
                    THE REMAINDER OF THIS DOCUMENT IS INTENTIONALLY LEFT BLANK
                  </div>
                </div> -->

              <div class="row mt60">
                <div class="col-lg-12 d-flex justify-content-center csntr-ali align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 2-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" class="team_initials" name="user_team_initials" value="" readonly>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <hr />

          <div class="p1 mt40">
            <div class="mBody">

              <h1>
                OFFICIAL NOTICE <br />
                San Francisco Fair Chance Ordinance
              </h1>

              <p>
                <strong>
                  Starting August 13, 2014, the Fair Chance Ordinance (San Francisco Police Code, Article 49) requires employers to follow
                  strict rules regarding job applicants’ and employees’ criminal history.
                </strong> The ordinance covers jobs in San Francisco, and applies to
                employers doing business in San Francisco who have 20 or more employees (regardless of the employees’ locations).
                <br /><br />
                <strong>
                  Certain matters are off-limits.
                </strong> An employer may never ask about, require disclosure of, or consider: an arrest not leading to a
                conviction (other than an unresolved arrest that is still undergoing criminal investigation or trial); participation in a diversion or
                deferral of judgment program; a conviction that has been expunged or made inoperative; any determination in the juvenile justice
                system; a conviction more than 7 years old; and a criminal offense other than a felony/misdemeanor. Matters that are off-limits cannot
                be used by the employer for any reason at any stage of the hiring process.
                <br /><br />
                <strong>
                  An employer cannot ask about an individual’s conviction history or unresolved arrests at the start of the hiring process.
                </strong> This
                includes through a job application form, informal conversation, or otherwise.
                <br /><br />
                <strong>
                  A mandatory interactive process for matters not off-limits.
                </strong> Only after a live interview has been conducted, or a conditional offer of
                employment made, is the employer allowed to ask about an individual’s conviction history (except as to matters that are off-limits) and
                unresolved arrests. Only those convictions and unresolved arrests that directly relate to the individual’s ability to do the job may be
                considered in making an employment decision.
                <br /><br />
                Before the employer may take an adverse action such as failing/refusing to hire, discharging, or not promoting an individual based on a
                conviction history or unresolved arrest, the employer must give the individual an opportunity to present evidence that the information
                is inaccurate, the individual has been rehabilitated, or other mitigating factors. The individual has seven days to respond, at which
                point the employer must delay any adverse action for a reasonable time and reconsider the adverse action. The employer must notify
                the individual of any final adverse action.
                <br /><br />
                Evidence of rehabilitation include satisfying parole/probation; receiving education/training; participating in alcohol/drug treatment
                programs; letters of recommendation; and age at which the individual was convicted. Mitigating factors include coercion, physical or
                emotional abuse, and untreated substance abuse/mental illness, that contributed to the conviction.
                <br /><br />

                <strong>
                  Preemption.
                </strong> Where federal or state law imposes a criminal history requirement that conflicts with a requirement of the Fair Chance
                Ordinance, the federal or state law will apply.
                <br /><br />
                <strong>
                  No Retaliation.
                </strong> An employer may not take an adverse action against an applicant or employee for exercising their rights under the
                ordinance or cooperating with the Office of Labor Standards Enforcement.
                <br /><br />
                <strong>
                  If you need more information,
                </strong> or wish to report an employer that you believe has violated this ordinance, please contact the OLSE at
                415-554-5192 or email <a href="mailto:FCE@sfgov.org">FCE@sfgov.org</a>.

              </p>


              <div class="row mt100">
                <div class="col-lg-12 d-flex justify-content-center csntr-ali align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" class="team_initials" name="user_team_initials" value="" readonly>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="saveClose">
            <div class="row">
              <div class="col-lg-12">
                <button type="button" class="formBtn closer" data-dismiss="modal" aria-label="Close">Close</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </form>
</div>
<!-- end -->

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script>

<script>
   function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";

    } else {
      x.type = "password";

    }
  }
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
    $('.selctInpp').css({
        'opacity': '0.5',
        'pointerEvents': 'none'
    })
    
    $(document).ready(function(){

      // open modal form view
      $(".form_info").click(function() {
                $('#acceptanceBtn').trigger('click')
                var something=<?php echo json_encode($team_form); ?>;
                var currentData;
                something.map((val)=>{
                    if(val.user_team_id == this.dataset.id){
                        currentData = val
                    }
                })
                setTimeout(()=>{
                    console.log(currentData)
                    for (const property in currentData) {
                        $('#criminalWatchModal input[name="'+property+'"]').val(currentData[property])
                    
                    }
                },100)
            });
          // end script


          // update_password
        $("#SaveNEdit").click(function(e) {
              var password = $('#password').val();
                  if (password.search(/[a-z]/) < 0) {
                      AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Your password must contain at least one letter.</span>', 'Error');
                      return false;
                  }
                  if (password.search(/[A-Z]/) < 0) {
                      AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Your password must contain at least one Upper letter.</span>', 'Error');
                      return false;
                  }
                  
                  if (password.search(/[0-9]/) < 0) {
                      AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">"Your password must contain at least one digit.</span>', 'Error');
                      return false;
                  }
                  if (password.search(/[_\-!\"@;,.:#$&*^()]/) < 0) {
                      AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">"Your password must contain at least one Special Character.</span>','Error');
                      return false;
                  }
                  if (password.length < 8) {
                      AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Your password must be at least 8 characters.</span>', 'Error');
                      return false;
                  }else{
            e.preventDefault();
            setTimeout(function() {
              // Prevent form submit
              var obj = $("#passwordupdate");
              // Get form data
              var data = obj.serialize();
              // Get post url
              var url = obj.attr('action');
              // Submit action
              var response = AjaxRequest.fire(url, data);
              if (response.status == 1) {
                              AdminToastr.success(response.message, "Password Updated Successfully");
                              window.location.href = "<?= g('admin_base_url') ?>signup_cleaner_unapproved";
                          } else {
                              AdminToastr.error(response.message, "Error");
                          }
              // Add return
              return false;
            }, 1000);
            return false;
        }
    });

    // end update password

        //package_Amount_total 
          var arr = [];
          var myTable = document.getElementById('myTableamount').getElementsByTagName('tr');
          for (var i = 0; i < myTable.length; i++) {
            arr.push(myTable[i].children[myTable[i].children.length - 1].innerHTML)
          }
          arr.map((val, i) => {
            arr[i] = parseFloat(val.split('$')[1]);
          });
          var sum = arr.reduce((a, b) => a + b, 0);
          $('#total_amount_package').text(sum.toFixed(2));

          document.getElementById('phone').addEventListener('input', function(e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
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
                            AdminToastr.success(response.message, "Data Updated Successfully");
                            window.location.href = "<?= g('admin_base_url') ?>signup_cleaner";
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


<script>
    //for password static
    let source = $('.slugger-source');
    let target = $('.slugger-target');

    //When the user is typing in the name field.
    source.keyup(function() {
        transformStringToSlug(source, target)
    });

    //When the user is typing in the target field
    target.keyup(function() {
        transformStringToSlug(target, target)
    });

    //Actually perform the sluggify
    function transformStringToSlug(the_source, the_target) {

        string = the_source.val();

        //Remove any special chars, ignoring any spaces or hyphens
        var slug = string.replace();

        //Replace any spaces with hyphens
        slug = slug.split(' ').join('-');

        //Chuck it back into lowercase
        // slug = slug.toLowerCase();

        //Valiate out any double hyphens
        slug = slug.split('--').join('-');

        var lastChar = slug.substring(slug.length - 1, slug.length);
        if (lastChar == '-') {
            slug = slug.substring(0, slug.length - 1);
        }

        //Dump it back to the destination input
        the_target.val(slug);
    }
    //end password static
</script>

<script>
  let mycari = document.getElementsByClassName('myCapitalcustom_address')
    // console.log(mycari);
  $('.myCapitalcustom_address').html(function() {
    // separate the text by spaces
    var text = $(this).text().split(',');
    // drop the last word and store it in a variable
    
    var last = text.pop();
    // join the text back and if it has more than 1 word add the span tag
    // to the last word
    return text.join(",") + (text.length > 0 ? ' <span class="last">'+ ',' + last + '</span>' : last);
  })
</script>