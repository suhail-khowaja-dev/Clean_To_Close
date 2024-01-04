<?php        
		$admin_email = $this->model_emails->find_all();
    // debug($admin_email,1);
    ?>
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
</style>
<style>
  /* ::-webkit-scrollbar {
            display: none;
        } */
  .time-input {
    position: relative;
    width: 100%;
  }

  .time-input i {
    position: absolute;
    color: #b1b1b1;
    right: 10px;
    top: 12px;

  }

  .time-field {
    box-shadow: 2px 9px 20px 3px rgb(212 212 212 / 75%);
    -webkit-box-shadow: 2px 9px 20px 3px rgb(212 212 212 / 75%);
    -moz-box-shadow: 2px 9px 20px 3px rgb(212 212 212 / 75%);
    /* display: flex;
            justify-content: center;
            align-items: center; */
    width: 100%;
    padding: 10px;
    /* border-radius: 0; */
    /* border-bottom-left-radius: 10px; */
    border-radius: 10px;
    padding-bottom: 5px;
    position: absolute;
    right: 0;
    background-color: #fff;
    z-index:9
  }

  .time-box {
    /* width: 120px; */
    height: 170px;
    display: flex;
    /* justify-content: space-around; */
  }

  .hours,
  .mins,
  .am {
    display: flex;
    overflow-y: scroll;
    overflow-x: hidden;
    flex-direction: column;
    margin: 0 auto;
    /* width: 40px; */
    text-align: center;
  }

  .hours::-webkit-scrollbar,
  .mins::-webkit-scrollbar,
  .am::-webkit-scrollbar {
    display: none;

  }

  .hours span,
  .mins span,
  .am span {
    /* width: 100%; */
    margin: 5px;
    cursor: pointer;
    font-family: sans-serif;
    /* width: 20px;
            height: 20px; */
    padding: 8px;
    font-size: 12px;
    text-align: center;
    border-radius: 8px;
  }

  .hours span:hover,
  .mins span:hover,
  .am span:hover {
    background-color: #b3c3c0;

  }

  .hide {
    display: none;
  }

  .show-field {
    font-family: gilroylight;
    border: none;
    background-color: #f1f1f1;
    border-radius: 50px;
    height: 40px;
    outline: 0;
    color: #666666;
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

  .clicked {
    background-color: #b3c3c0;
    border-radius: 8px;
  }
</style>
<div class="Main">
  <div class="dashboard  ">


    <div class="contantPart">
      <div class="container">
        <!-- <div class="heading mt50">
          
        </div> -->
        <div class="mt50"style="margin-bottom:-2rem;text-align: center">
          <p>
            Note: If any changes need to be made to the package or additional add ons, please email <a href="mailto:<?php echo $admin_email[3]['emails_value']?>?subject=Support" target="_blank"> <?php echo $admin_email[3]['emails_value']?>.</a>
          </p>
        </div>
        <form action="<?= g('base_url') ?>account/place_order_update" method="POST" id="saveForm">
          <div class="letsGetMain ">
            <div class="cleanerInfo mt50 text-left">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clInf">
                      Property Address
                    </div>
                  </div>
                </div>
              </div>
              <!-- inps -->
              <div class="col-lg-12 ">
                <label>Address</label>
                <input type="hidden" name="cleaning_service[cleaning_service_id]" value="<?php echo $cleaning_edit['cleaning_service_id'] ?>">
                <input type="hidden" name="cleaning_service[cleaning_service_user_id]" value="<?php echo $cleaning_edit['cleaning_service_user_id'] ?>">
                <input type="text" placeholder="Address" class="formCustomInput" name="cleaning_service[cleaning_service_address]" id="address" value="<?php echo $cleaning_edit['cleaning_service_address'] ?>" readonly>
              </div>
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-3">
                    <label>City</label>
                    <input type="text" placeholder="City" class="formCustomInput" name="cleaning_service[cleaning_service_city]" value="<?php echo $cleaning_edit['cleaning_service_city'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <label>State</label>
                    <input type="text" placeholder="State" class="formCustomInput" name="cleaning_service[cleaning_service_state]" value="<?php echo $cleaning_edit['cleaning_service_state'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <label>ZipCode</label>
                    <input type="text" placeholder="State" class="formCustomInput" name="cleaning_service[cleaning_service_zipcode]" value="<?php echo $cleaning_edit['cleaning_service_zipcode'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                  <label>Unit/Apt #</label>
                  <input type="text" placeholder="Unit/Apt #" class="formCustomInput" name="cleaning_service[cleaning_service_unit]" value="<?php echo $cleaning_edit['cleaning_service_unit'] ?>" readonly>
                </div>
                </div>
              </div>
              <!-- Are you Insured? -->
              <div class="col-lg-12 ">
                <div class="row mt30 temRadio" style="display: none;">
                  <div class="col-lg-12">
                    <div class="note">
                      <span class="notered">Note:</span>
                      <span>*You are responsible for insuring any additional members are insured.</span>
                    </div>
                  </div>
                  <div class="col-lg-12 mt10">
                    <div class="note">
                      <span class="notered">Note:</span>
                      <span>*You are required to add Clean To Close™ to your current or new insurance.</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cleanerInfo mt50 text-left">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clInf">
                      Access Details
                    </div>
                  </div>
                </div>
              </div>
              <!-- inps -->
              <div class="col-lg-12 ">
                <div class="row">
                </div>
              </div>
              <div class="col-lg-12 mb2">
                <label>Property Access Information</label>
                <select class="js-example-disabled-results lockbox-select2" name="cleaning_service[cleaning_service_lockbox]" id="Lockbox" >
                  <option value="<?php echo $cleaning_edit['cleaning_service_lockbox'] ?>" selected><?php echo $cleaning_edit['cleaning_service_lockbox'] ?></option>
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
                </select>
              </div>
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-6">
                    <label>Code Information</label>
                    <input type="text" placeholder="Code Information" class="formCustomInput" name="cleaning_service[cleaning_service_code_info]" id="CodeInfo" value="<?php echo $cleaning_edit['cleaning_service_code_info'] ?>">
                  </div>
                  <div class="col-lg-6">
                    <label>Location of Lockbox</label>
                    <input type="text" placeholder="Location of Lockbox" class="formCustomInput" name="cleaning_service[cleaning_service_location_of_lockbox]" id="SentriLock" value="<?php echo $cleaning_edit['cleaning_service_location_of_lockbox'] ?>">
                  </div>
                  <div class="col-lg-6">
                    <label>One Day Code or CBS Code</label>
                    <input type="text" placeholder="One Day Code or CBS Code" class="formCustomInput" name="cleaning_service[cleaning_service_supra_cbs_code]" id="Garage" value="<?php echo $cleaning_edit['cleaning_service_supra_cbs_code'] ?>">
                  </div>
                  <div class="col-lg-6">
                    <label>Additional Information for Access</label>
                    <input type="text" placeholder="Additional Information for Access" class="formCustomInput" name="cleaning_service[cleaning_service_garage]" id="SupraCBSCode" value="<?php echo $cleaning_edit['cleaning_service_garage'] ?>">
                  </div>
                  
                </div>
              </div>
              <!-- Are you Insured? -->
              <div class="col-lg-12 ">
                <div class="row mt30 temRadio" style="display: none;">
                  <div class="col-lg-12">
                    <div class="note">
                      <span class="notered">Note:</span>
                      <span>*You are responsible for insuring any additional members are insured.</span>
                    </div>
                  </div>
                  <div class="col-lg-12 mt10">
                    <div class="note">
                      <span class="notered">Note:</span>
                      <span>*You are required to add Clean To Close™ to your current or new insurance.</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cleanerInfo mt30 text-left">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12 d-flex justify-content-between">
                    <div class="clInf ">
                      Property Details
                      <!-- <span>
                                Clear Info
                              </span> -->
                    </div>
                    <!-- <span>
                              Cancel
                            </span> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-6">
                    <label>Type of Residence</label>
                    <input type="text" placeholder="MLS #" name="cleaning_service[cleaning_service_type_residence]" class="formCustomInput" id="mls" value="<?php echo $cleaning_edit['cleaning_service_type_residence'] ?>" readonly>
                    <!-- <select class="formCustomInput customDropdown" name="cleaning_service[cleaning_service_type_residence]" id="type_residence" readonly>
                      <option value="<?php echo $cleaning_edit['cleaning_service_type_residence'] ?>" selected><?php echo $cleaning_edit['cleaning_service_type_residence'] ?></option>
                    
                      <option value="Single Family Residence">Single Family Residence</option>
                      <option value="Condominium">Condominium</option>
                      <option value="Town House">Town House</option>
                      <option value="Duplex">Duplex</option>
                      <option value="Triplex">Triplex</option>
                      <option value="Fourplex">Fourplex</option>
                      <option value="Moblie Home">Moblie Home</option>
                    </select> -->
                  </div>
                  <div class="col-lg-6">
                    <label>Square Footage</label>
                    <input type="text" placeholder="MLS #" name="cleaning_service[cleaning_service_square_footage]" class="formCustomInput" id="mls" value="<?php echo $cleaning_edit['sqft_area'] ?>" readonly>
                    <!-- <select class="formCustomInput customDropdown" name="cleaning_service[cleaning_service_square_footage]" id="squareft" readonly>
                   
                      <option value="<?php echo $cleaning_edit['sqft_id'] ?>" selected><?php echo $cleaning_edit['sqft_area'] ?></option>
                      <?php
                      foreach ($sqft_data as $key => $value) { ?>
                        <option value="<?php echo $value['sqft_id'] ?>">
                          <?php echo $value['sqft_area'] ?>
                        </option>
                      <?php
                      }
                      ?>
                    </select> -->
                  </div>

                </div>
              </div>
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-6">
                    <label>MLS #</label>
                    <input type="text" placeholder="MLS #" name="cleaning_service[cleaning_service_mls]" class="formCustomInput" id="mls" value="<?php echo $cleaning_edit['cleaning_service_mls'] ?>" readonly>
                  </div>
                  <div class="col-lg-6">
                    <label>Bedrooms</label>
                    <input type="text" placeholder="First Name" class="formCustomInput" name="cleaning_service[cleaning_service_bedrooms]" value="<?php echo $cleaning_edit['cleaning_service_bedrooms'] ?>" readonly>
                    <!-- <select class="formCustomInput customDropdown" name="cleaning_service[cleaning_service_bedrooms]" id="bedrooms" readonly> 
                    
                      <option value="<?php echo $cleaning_edit['cleaning_service_bedrooms'] ?>" selected><?php echo $cleaning_edit['cleaning_service_bedrooms'] ?></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                    </select> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-6">
                    <label>Half Bathroom</label>
                    <input type="text" placeholder="First Name" class="formCustomInput" name="cleaning_service[cleaning_service_bathroom]" value="<?php echo $cleaning_edit['cleaning_service_bathroom'] ?>" readonly>
                    <!-- <select class="formCustomInput customDropdown" name="cleaning_service[cleaning_service_bathroom]" id="bathroom" readonly>
                      
                      <option value="<?php echo $cleaning_edit['cleaning_service_bathroom'] ?>" selected><?php echo $cleaning_edit['cleaning_service_bathroom'] ?></option>
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                    </select> -->
                  </div>
                  <div class="col-lg-6">
                    <label>Full Bathroom</label>
                    <?php if($cleaning_edit['cleaning_service_full_bathroom'] == 'infinty'){?>
                      <input type="text" placeholder="First Name" class="formCustomInput" name="cleaning_service[cleaning_service_full_bathroom]" value="<?php echo '0' ?>" readonly>
                    <?}else{?>
                      <input type="text" placeholder="First Name" class="formCustomInput" name="cleaning_service[cleaning_service_full_bathroom]" value="<?php echo $cleaning_edit['cleaning_service_full_bathroom'] ?>" readonly>
                    <?php
                    }
                    ?>
                  
                    <!-- <select class="formCustomInput customDropdown" name="cleaning_service[cleaning_service_full_bathroom]" id="fullbathroom" readonly>
                      
                      <option value="<?php echo $cleaning_edit['cleaning_service_full_bathroom'] ?>" selected><?php echo $cleaning_edit['cleaning_service_full_bathroom'] ?></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                    </select> -->
                  </div>

                </div>
              </div>
            </div>
            <div class="d-flex propertyAddBoxtb3">
              <div class="tab3heading">
                <div class="InfoHeadingtab3">
                  <h5 class="proNamePtab1">Agent Information</h5>
                  <!-- <p class='propertyAddTab3h'>Clear Info</p> -->
                </div>
                <!-- <div class="">
                        </div> -->
                <div class="">
                  <!-- <p class='propertyAddTab3h'>Cancel</p> -->
                </div>
              </div>
              <div class="reprenstTab">

                <div class="reprenstTabContent2">
                  <h6>
                    Who are you representing?
                  </h6>
                  <div class="reprenstTabRadio22">

                    <div class="reprenstTabRadiobtn21">
                      <label class="containerChk sndf">Buyer
                        <input type="radio" id="buyer_repe" <?php if ($cleaning_edit['cleaning_service_representing'] == 'Buyer') { ?> <?php echo 'checked' ?> <?php } ?> value="Buyer" name="cleaning_service[cleaning_service_representing]" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="reprenstTabRadiobtn22">
                      <label class="containerChk sndf">Seller
                        <input type="radio" id="seller_repe" <?php if ($cleaning_edit['cleaning_service_representing'] == 'Seller') { ?> <?php echo 'checked' ?> <?php                                                                                                              } ?> value="Seller" name="cleaning_service[cleaning_service_representing]" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="reprenstTabRadiobtn23">
                      <label class="containerChk sndf">Both
                        <input type="radio" id="agent" <?php if ($cleaning_edit['cleaning_service_representing'] == 'Both') { ?> <?php echo 'checked' ?> <?php                                                                                                              } ?> value="Both" name="cleaning_service[cleaning_service_representing]" disabled>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-12 forBoth">
                <!-- <h>Buyer Information</h> -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clInf">
                      Buyer Information
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="First Name" class="formCustomInput" name="cleaning_service[cleaning_service_first_name]" value="<?php echo $cleaning_edit['cleaning_service_first_name'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Last Name" class="formCustomInput" name="cleaning_service[cleaning_service_last_name]" value="<?php echo $cleaning_edit['cleaning_service_last_name'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Email" class="formCustomInput" name="cleaning_service[cleaning_service_email]" value="<?php echo $cleaning_edit['cleaning_service_email'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Phone" class="formCustomInput" name="cleaning_service[cleaning_service_contact]" value="<?php echo $cleaning_edit['cleaning_service_contact'] ?>" readonly>
                  </div>
                </div>
                <!-- <label>Seller Information</lab> -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clInf">
                      Seller Information
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="First Name" class="formCustomInput" name="cleaning_service[cleaning_service_first_name_seller]" value="<?php echo $cleaning_edit['cleaning_service_first_name_seller'] ?>" readonly> 
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Last Name" class="formCustomInput" name="cleaning_service[cleaning_service_last_name_seller]" value="<?php echo $cleaning_edit['cleaning_service_last_name_seller'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Email" class="formCustomInput" name="cleaning_service[cleaning_service_email_seller]" value="<?php echo $cleaning_edit['cleaning_service_email_seller'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Phone" class="formCustomInput" name="cleaning_service[cleaning_service_contact_seller]" value="<?php echo $cleaning_edit['cleaning_service_contact_seller'] ?>" readonly>
                  </div>
                </div>

              </div>
              <div class="col-lg-12 forBuyer">
                <div class="row">
                  <div class="col-lg-3">
                    <input type="text" placeholder="First Name" class="formCustomInput" name="cleaning_service[cleaning_buyer_name]" value="<?php echo $cleaning_edit['cleaning_buyer_name'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Last Name" class="formCustomInput" name="cleaning_service[cleaning_buyer_last_name]" value="<?php echo $cleaning_edit['cleaning_buyer_last_name'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="email" placeholder="Email" class="formCustomInput" name="cleaning_service[cleaning_buyer_email]" value="<?php echo $cleaning_edit['cleaning_buyer_email'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Phone" class="formCustomInput" name="cleaning_service[cleaning_buyer_contact]" value="<?php echo $cleaning_edit['cleaning_buyer_contact'] ?>" readonly>
                  </div>
                </div>
                
                  <div class="row">
                  <div class="col-lg-12">
                    <h6>Cooperating Agent Informations</h6>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="First Name" class="formCustomInput" name="cleaning_service[cleaning_service_agent_buyer_name]" value="<?php echo $cleaning_edit['cleaning_service_agent_buyer_name'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Last Name" class="formCustomInput" name="cleaning_service[cleaning_service_agent_buyer_last_name]" value="<?php echo $cleaning_edit['cleaning_service_agent_buyer_last_name'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Email" class="formCustomInput" name="cleaning_service[cleaning_service_agent_buyer_email]" value="<?php echo $cleaning_edit['cleaning_service_agent_buyer_email'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="phone" placeholder="Phone" class="formCustomInput" name="cleaning_service[cleaning_service_agent_buyer_phone]" value="<?php echo $cleaning_edit['cleaning_service_agent_buyer_phone'] ?>" readonly>
                  </div>
                </div>
                
                
              
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Seller Information</h6>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="First Name" class="formCustomInput" name="cleaning_service[cleaning_service_other_seller_fullname]" value="<?php echo $cleaning_edit['cleaning_service_other_seller_fullname'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Last Name" class="formCustomInput" name="cleaning_service[cleaning_service_other_seller_lastname]" value="<?php echo $cleaning_edit['cleaning_service_other_seller_lastname'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Email" class="formCustomInput" name="cleaning_service[cleaning_service_other_seller_email]" value="<?php echo $cleaning_edit['cleaning_service_other_seller_email'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="phone" placeholder="Phone" class="formCustomInput" name="cleaning_service[cleaning_service_other_seller_phone]" value="<?php echo $cleaning_edit['cleaning_service_other_seller_phone'] ?>" readonly>
                  </div>
                </div>

              </div>
              <div class="col-lg-12 forSeller">
                <div class="row">
                  <div class="col-lg-3">
                    <input type="text" placeholder="First Name" class="formCustomInput" name="cleaning_service[cleaning_seller_name]" value="<?php echo $cleaning_edit['cleaning_seller_name'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Last Name" class="formCustomInput" name="cleaning_service[cleaning_seller_last_name]" value="<?php echo $cleaning_edit['cleaning_seller_last_name'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Email" class="formCustomInput" name="cleaning_service[cleaning_seller_email]" value="<?php echo $cleaning_edit['cleaning_seller_email'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Phone" class="formCustomInput" name="cleaning_service[cleaning_seller_contact]" value="<?php echo $cleaning_edit['cleaning_seller_contact'] ?>" readonly>
                  </div>
                </div>
              
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Cooperating Agent Informations</h6>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="First Name" class="formCustomInput" name="cleaning_service[cleaning_service_agent_seller_name]" value="<?php echo $cleaning_edit['cleaning_service_agent_seller_name'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Last Name" class="formCustomInput" name="cleaning_service[cleaning_service_agent_seller_last_name]" value="<?php echo $cleaning_edit['cleaning_service_agent_seller_last_name'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Email" class="formCustomInput" name="cleaning_service[cleaning_service_agent_seller_email]" value="<?php echo $cleaning_edit['cleaning_service_agent_seller_email'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="phone" placeholder="Phone" class="formCustomInput" name="cleaning_service[cleaning_service_agent_seller_phone]" value="<?php echo  $cleaning_edit['cleaning_service_agent_seller_phone'] ?>" readonly>
                  </div>
                </div>
              
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Buyer Information</h6>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Full Name" class="formCustomInput" name="cleaning_service[cleaning_service_other_buyer_fullname]" value="<?php echo $cleaning_edit['cleaning_service_other_buyer_fullname'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Last Name" class="formCustomInput" name="cleaning_service[cleaning_service_other_buyer_lastname]" value="<?php echo $cleaning_edit['cleaning_service_other_buyer_lastname'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="text" placeholder="Email" class="formCustomInput" name="cleaning_service[cleaning_service_other_buyer_email]" value="<?php echo $cleaning_edit['cleaning_service_other_buyer_email'] ?>" readonly>
                  </div>
                  <div class="col-lg-3">
                    <input type="phone" placeholder="Phone" class="formCustomInput" name="cleaning_service[cleaning_service_other_buyer_phone]" value="<?php echo  $cleaning_edit['cleaning_service_other_buyer_phone'] ?>" readonly>
                  </div>
                </div>

              </div>
            </div>
            <div class="propertyAddBoxtab4 ">
              <div class="tab3heading">
                <div class="InfoHeadingtab3">
                  <h5 class="proNamePtab1">Closing Information</h5>
                </div>
                <div class="">
                </div>
              </div>
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-6">
                    <label style="margin-left:3%;margin-bottom:1px;color:#676767;font-size:14px;margin-bottom:5px;">Projected Closing Date</label>
                    <?php
                    $string_to_date = $d = strtotime($cleaning_edit['cleaning_service_projected_closing_date']);
                    $new_date = Date('Y-m-d', $string_to_date);
                    ?>
                    <input type="date" placeholder="Projected closing date" name="cleaning_service[cleaning_service_projected_closing_date]" class="formCustomInput" id="closingdatetime" value="<?php echo $new_date ?>" readonly>
                  </div>
                  <div class="col-lg-6">
                    <label style="margin-left: 3%;margin-bottom: 1px;color: #676767;font-size: 14px;margin-bottom: 5px;">Closing/tittle company</label>
                    <input type="text" placeholder="Closing/tittle company" name="cleaning_service[cleaning_service_closing_tittle_company]" class="formCustomInput" id="title_company" value="<?php echo $cleaning_edit['cleaning_service_closing_tittle_company'] ?>" readonly>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <label style="margin-left: 3%;margin-bottom: 1px;color: #676767;font-size: 14px;margin-bottom: 5px;">Tittle company Email</label>
                    <input type="email" placeholder="Tittle company Email" name="cleaning_service[cleaning_service_closing_tittle_company_email]" class="formCustomInput" id="closingdatetime" value="<?php echo $cleaning_edit['cleaning_service_closing_tittle_company_email'] ?>" readonly>
                  </div>
                  <div class="col-lg-6">
                    <label style="margin-left: 3%;margin-bottom: 1px;color: #676767;font-size: 14px;margin-bottom: 5px;">Tittle company Phone Number</label>
                    <input type="text" placeholder="Tittle company Phone Number" name="cleaning_service[cleaning_service_closing_tittle_company_phone_number]" class="formCustomInput" id="title_company" value="<?php echo $cleaning_edit['cleaning_service_closing_tittle_company_phone_number'] ?>" readonly>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6">
                    <div class="reprenstTab">
                      <div class="reprenstTabContent1Tab5">
                        <h6>
                          Will cleaning occur prior to closing or after closing?
                        </h6>
                        <div class="reprenstTabRadio2">
                          <div class="reprenstTabRadiobtn1">
                            <label class="containerChk">Prior To Closing
                              <input type="radio" <?php if ($cleaning_edit['cleaning_service_cleaning_occur_prior_closing'] == 'PriorToClosing') { ?> <?php echo 'checked' ?> <?php  } ?> value="PriorToClosing" name="cleaning_service[cleaning_service_cleaning_occur_prior_closing]" disabled>
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="reprenstTabRadiobtn2">
                            <label class="containerChk">After Closing
                              <input type="radio" <?php if ($cleaning_edit['cleaning_service_cleaning_occur_prior_closing'] == 'AfterClosing') { ?> <?php echo 'checked' ?> <?php } ?> value="AfterClosing" name="cleaning_service[cleaning_service_cleaning_occur_prior_closing] " disabled>
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="reprenstTab">
                      <div class="reprenstTabContent1Tab5">
                        <h6>
                          Who is responsible for payment?
                        </h6>
                        <div class="reprenstTabRadio2">
                          <div class="reprenstTabRadiobtn1">
                            <label class="containerChk">Buyer
                              <input type="radio" <?php if ($cleaning_edit['cleaning_service_responsible_payment'] == 'Buyer') { ?> <?php echo 'checked' ?> <?php } ?> value="Buyer" name="cleaning_service[cleaning_service_responsible_payment]" disabled>
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="reprenstTabRadiobtn2">
                            <label class="containerChk">Seller
                              <input type="radio" <?php if ($cleaning_edit['cleaning_service_responsible_payment'] == 'Seller') { ?> <?php echo 'checked' ?> <?php } ?> value="Seller" name="cleaning_service[cleaning_service_responsible_payment]" disabled>
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="reprenstTabRadiobtn3">
                            <label class="containerChk">Agent
                              <input type="radio" <?php if ($cleaning_edit['cleaning_service_responsible_payment'] == 'Agent') { ?> <?php echo 'checked' ?> <?php } ?> value="Agent" name="cleaning_service[cleaning_service_responsible_payment]" disabled>
                              <span class="checkmark"></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                </div>
                <div class="row">
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <?php
                    $string_to_date = $d = strtotime($cleaning_edit['cleaning_service_closing_date']);
                    $date = Date('Y-m-d', $string_to_date);
                    ?>
                     <!--<label style="margin-left: 20px !important;margin-bottom: 1px;color: #676767;font-size: 15px;margin-bottom: 5px;">Requested Date/Time of Cleaning</label>-->
                    <label style="margin-left: 3%;margin-bottom: 1px;color: #676767;font-size: 14px;margin-bottom: 5px;">Requested Date</label>
                    <input type="date" placeholder="Date" name="cleaning_service[cleaning_service_closing_date]" class="formCustomInput" value="<?php echo $date ?>" readonly>
                  </div>
                          <div class="col-lg-3">
                          <?php
                    $string_to_time = $d = strtotime($cleaning_edit['cleaning_service_closing_time']);
                    $time = Date('H:i', $string_to_time);
                    $time2 = Date('h:i', $string_to_time);
                    ?>
                          <label style="margin-left: 3%;margin-bottom: 1px;color: #676767;font-size: 14px;margin-bottom: 5px;">Time of Cleaning</label>
                            <label hidden>Time of Cleaning</label> 
                            <!--<label style="    margin-left: 3%;margin-bottom: 1px;color: #676767;font-size: 14px;margin-bottom: 5px;">Time</label>-->
                            <input type="time" placeholder="Time" name="cleaning_service[cleaning_service_closing_time]" class="formCustomInput datechk validation" id="time" hidden value="" readonly>
                            <div class="time-input">
                              <!-- <i class="fa fa-clock"></i> -->
                              <div class="show-field">
                                <div class="hrs"><?php echo explode(':',$time2)[0] ?></div>:
                                <div class="min"><?php echo explode(':',$time)[1] ?></div>
                                <div class="pm"><?php echo explode(':',$time)[0] == 00 ? 'AM' : (explode(':',$time)[0] > 12 ? 'AM' : 'PM') ?></div>
                              </div>
                              <div class="time-field hide">
                                <div class="time-box">
                                  <div class="hours">
                                    <span class="01"> 01</span>
                                    <span class="02"> 02</span>
                                    <span class="03"> 03</span>
                                    <span class="04"> 04</span>
                                    <span class="05"> 05</span>
                                    <span class="06"> 06</span>
                                    <span class="07"> 07</span>
                                    <span class="08"> 08</span>
                                    <span class="09"> 09</span>
                                    <span class="10"> 10 </span>
                                    <span class="11"> 11 </span>
                                    <span class="12"> 12 </span>
                                  </div>
                                  <div class="mins">
                                    <span class="00"> 00</span>
                                    <!-- <span> 01</span>
                                    <span> 02</span>
                                    <span> 03</span>
                                    <span> 04</span>
                                    <span> 05</span>
                                    <span> 06</span>
                                    <span> 07</span>
                                    <span> 08</span>
                                    <span> 09</span>
                                    <span> 10 </span>
                                    <span> 11 </span>
                                    <span> 12 </span>
                                    <span> 13 </span>
                                    <span> 14 </span> -->
                                    <span class="15"> 15 </span>
                                    <!-- <span> 16 </span>
                                    <span> 17 </span>
                                    <span> 18 </span>
                                    <span> 19 </span>
                                    <span> 20 </span>
                                    <span> 21 </span>
                                    <span> 22 </span>
                                    <span> 23 </span>
                                    <span> 24 </span>
                                    <span> 25 </span>
                                    <span> 26 </span>
                                    <span> 27 </span>
                                    <span> 28 </span>
                                    <span> 29 </span> -->
                                    <span class="30"> 30 </span>
                                    <!-- <span> 31 </span>
                                    <span> 32 </span>
                                    <span> 34 </span>
                                    <span> 35 </span>
                                    <span> 36 </span>
                                    <span> 37 </span>
                                    <span> 38 </span>
                                    <span> 39 </span>
                                    <span> 40 </span>
                                    <span> 41 </span>
                                    <span> 42 </span>
                                    <span> 43 </span>
                                    <span> 44 </span> -->
                                    <span class="45"> 45 </span>
                                    <!-- <span> 46 </span>
                                    <span> 47 </span>
                                    <span> 48 </span>
                                    <span> 49 </span>
                                    <span> 50 </span>
                                    <span> 51 </span>
                                    <span> 52 </span>
                                    <span> 53 </span>
                                    <span> 54 </span>
                                    <span> 55 </span>
                                    <span> 56 </span>
                                    <span> 57 </span>
                                    <span> 58 </span>
                                    <span> 59 </span> -->
                                  </div>
                                  <div class="am">
                                    <span class="AM">AM</span>
                                    <span class="PM">PM</span>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                </div>

              </div>
            </div>
            <div class="nxtBtn" style="margin-bottom:8px;">
                <button type="button" class="greenBtn" id="backbtn">Back</button>
              <a href="#">
                <button type="button" class="greenBtn" id="submitInfo">Save</button>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>


  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
 $('#backbtn').on('click',()=>{
    window.location.href = "<?= g('base_url') ?>account/orderhistory";
  })
  setTimeout(()=>{
    let hourse = $('.hrs').text();
    let minis = $('.min').text();
    let pmam = $('.pm').text();

    $('.'+hourse).trigger('click')
    $('.'+minis).trigger('click')
    $('.'+pmam).trigger('click')
    console.log(hourse,minis,pmam)

  },3000)
  // Who are representing 
  $(document).ready(function() {
    var obj = <?php echo json_encode($cleaning_edit['cleaning_service_representing']); ?>;
    obj == 'Seller' ?
      ($('.forBoth').css('display', 'none'), $('.forBuyer').css('display', 'none'), $('.forSeller').css('display', 'block')) :

      obj == 'Buyer' ?
      ($('.forBoth').css('display', 'none'), $('.forBuyer').css('display', 'block'), $('.forSeller').css('display', 'none')) :
      obj == 'Both' ?
      ($('.forBoth').css('display', 'block'), $('.forBuyer').css('display', 'none'), $('.forSeller').css('display', 'none')) :
      null
  });
  $('.reprenstTabRadio22 label input').change((e) => {
    currentAgentType = e.target.value;
    console.log(currentAgentType)
    e.target.value == 'Seller' ?
      ($('.forBoth').css('display', 'none'), $('.forBuyer').css('display', 'none'), $('.forSeller').css('display', 'block')) :

      e.target.value == 'Buyer' ?
      ($('.forBoth').css('display', 'none'), $('.forBuyer').css('display', 'block'), $('.forSeller').css('display', 'none')) :

      e.target.value == 'Both' ?
      ($('.forBoth').css('display', 'block'), $('.forBuyer').css('display', 'none'), $('.forSeller').css('display', 'none')) :
      null
  })

  $(document).ready(function() {
    var obj;
    $("#submitInfo").click(function(e) {
      e.preventDefault();
      Loader.show();
      setTimeout(function() {
        // Prevent form submit
        var obj = $("#saveForm");
        // Get form data
        var data = obj.serialize();
        // Get post url
        var url = obj.attr('action');
        // Submit action
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
          location.reload();
          window.location.href = '<?= base_url(); ?>account/orderhistory';
        }
        // Add return
        return false;
      }, 1000);
      return false;
    });

  });
  var $disabledResults = $(".js-example-disabled-results");
  $disabledResults.select2();

  $(document).on('click', (e) => {
    if ($(e.target).hasClass("fa-clock") || $(e.target).hasClass('time-field') || $(e.target).hasClass('clicked') || $(e.target).hasClass('am')) {
      console.log('asd')
    } else {
      $(".time-field").addClass("hide")
    }
  })
  $(".fa-clock").on('click', () => {
    $(".time-field").toggleClass("hide")
  })
  $(".hours span").on('click', (e) => {
    var hrs = e.target.innerHTML
    console.log(e.target.innerHTML)
    $(".hrs").text(e.target.innerHTML)
    for (let i = 0; i < hrs.length; i++) {
      $(".hours span").removeClass("clicked")
    }
    $(e.target).addClass('clicked')
    timer(e.target.innerHTML, 'hours')
  })
  $(".mins span").on('click', (e) => {
    var mins = e.target.innerHTML
    $(".min").text(e.target.innerHTML)
    for (let i = 0; i < mins.length; i++) {
      $(".mins span").removeClass("clicked")
    }
    $(e.target).addClass('clicked')
    timer(e.target.innerHTML, 'mins')
  })
  $(".am span").on('click', (e) => {
    var am = e.target.innerHTML
    $(".pm").text(e.target.innerHTML)
    for (let i = 0; i < am.length; i++) {
      $(".am span").removeClass("clicked")
    }
    $(e.target).addClass('clicked')
    timer(e.target.innerHTML, 'ampm')
  })

  var arrDaty = {
    'hours': 00,
    'mins': '00',
    'ampm': 00
  }
  var finaTm;

  function timer(data, key) {
    console.log('ad')
    arrDaty[key] = data;
    if (arrDaty.hours != 00 && arrDaty.ampm != 00) {
      var date = `${arrDaty.hours}:${arrDaty.mins}:${arrDaty.ampm}`
      var finl = date.replace(/ /g, '');
    }
    if (date != undefined) {
      console.log(timeConversion(finl))
      finaTm = `${timeConversion(finl)}00`
      $('input#time').val(finaTm)
      console.log(finaTm)
    }
  }

  function timeConversion(s) {
    // Write your code here
    const arr = s.split(":")
    const isAM = arr[2].includes("AM")
    if (isAM) {
      arr[0] = arr[0].padStart(2, '0');
      arr[2] = arr[2].replace("AM", "");
      if (arr[0] === "12") arr[0] = "00"

    } else {
      arr[0] = (+arr[0] + 12).toString();
      arr[2] = arr[2].replace("PM", "");
      if (arr[0] === "24") arr[0] = "12"
    }
    return (arr.join(":"))
  }
</script>