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

  span.leftSpaner {
    text-align: end;
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

  .customBackgorundColor .customSelect {
    font-family: gilroylight !important;
    border: none !important;
    background-color: #f1f1f1 !important;
    width: 100% !important;
    border-radius: 50px !important;
    padding: 5px 20px !important;
    height: 40px !important;
    outline: 0 !important;
    margin-bottom: 2rem !important;
    color: #666666 !important;
  }

  .customclass_date {
    font-family: gilroybold;
    color: #000;
    font-size: 14px;
    background-color: #b4c3c0;
    border: none;
    outline: 0;
    text-transform: uppercase;
    padding: 10px 28px;
    border-radius: 6px;
  }
  }
</style>
<div class="Main">
  <div class="dashboard  ">

    <div class="contantPart">
      <div class="container">
        <div class="heading mt50">
          <!-- <h3 class='orderHeading'>Place A New Order</h3> -->
          <? $this->load->view('account/header_main') ?>
          <!-- <h3 class='orderHeading'>
          Place Order
        </h3> -->
        </div>

        <div class="Main">
          <div class="letsGetMain text-center">
            <!-- <div class="col-lg-12">
                <h3 class="weOnlyHire mt100 wow fadeInUp" id="GetToKnowHead" data-wow-duration="1s" data-wow-delay="0.5s">Let Us Get To Know You Better!</h3>
              </div> -->
            <form action="<?= g('base_url') ?>account/place_order_save" method="post" id="saveForm" class="footTop" enctype="multipart/form-data">
              <div class="tabsMain mt50">

                <div class="fakeTabs wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="tabb active" id="tabLink1">1</div>
                  <div class="tabb" id="tabLink2">2</div>
                  <div class="tabb" id="tabLink3">3</div>
                  <!-- <div class="tabb" id="tabLink4">4</div> -->
                  <div class="tabb" id="tabLink5">4</div>
                  <div class="tabb" id="tabLink6">5</div>
                  <div class="tabb" id="tabLink7">6</div>
                </div>

                <div class="tab-content wow zoomIn mb5" data-wow-duration="1s" data-wow-delay="0.5s">
                  <!-- tab1 -->
                  <div id="tab1" class="tab-pane  active">
                    <div class="cleanerInfo mt50 text-left">
                      <div class="col-lg-12">
                        <div class="row">
                          <div class="col-lg-12 px0">
                            <div class="clInf">
                              Property Address
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- inps -->
                      <div class="col-lg-12 px0">
                        <div class="row">
                          <!-- <div class="col-lg-6">
                            <input type="text" placeholder="Name" class="formCustomInput">
                          </div>
                          <div class="col-lg-6">
                            <input type="text" placeholder="Company" class="formCustomInput">
                          </div> -->
                        </div>
                      </div>
                      <div class="col-lg-12 px0">
                        <label>Address <span style="color:red;margin-left: 4px;"> * </span> </label>
                        <input type="hidden" value='<?php echo $userdata['signup_id'] ?>' name="cleaning_service[cleaning_service_user_id]">
                        <input type="text" placeholder="Address" class="formCustomInput addressInput validation place_stop" name="cleaning_service[cleaning_service_address]" id="ship-address">
                        <input type="hidden" name="cleaning_service[cleaning_service_package_amount]" id="selectedAmount">
                        <input type="hidden" name="cleaning_service[cleaning_service_total_option_amount]" id="aditionalAmount">
                        <input type="hidden" name="cleaning_service[cleaning_service_total_amount]" id="totalPackageAmount">
                        <input type="hidden" name="cleaning_service[cleaning_service_closing_date_old]" id="closingdateold" value="">
                        <input type="hidden" name="cleaning_service[cleaning_service_closing_time_old]" id="closingoldtime" value="">
                        <input type="hidden" name="cleaning_service[cleaning_service_package_id]" id="packageid" value="">
                        <input type="hidden" id="latitude_input" name="cleaning_service[cleaning_service_address_lat]">
                        <input type="hidden" id="longitude_input" name="cleaning_service[cleaning_service_address_lng]">
                        <input type="hidden" name="cleaning_service[cleaning_service_realtor_name]" value="<?php echo $userdata['signup_firstname'] ?>">
                      </div>

                      <div class="col-lg-12 px0">
                        <div class="row">

                          <div class="col-lg-3">
                            <label>City</label>
                            <input type="text" placeholder="City" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_city]" id="locality">
                          </div>
                          <div class="col-lg-3">
                            <label>State</label>
                            <input type="text" placeholder="State" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_state]" id="state">
                          </div>
                          <div class="col-lg-3">
                            <label for="postal_code">ZipCode</label>
                            <input type="text" placeholder="ZipCode" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_zipcode]" id="postcode">
                            <!-- <input type="hidden" value='<?php echo $zipcode[0]['zip_code_number'] ?>'> -->
                          </div>
                          <div class="col-lg-3">
                            <label>Unit/Apt #</label>
                            <input type="text" placeholder="Unit/Apt #" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_unit]">
                          </div>

                        </div>
                      </div>
                      <!-- Are you Insured? -->
                      <div class="col-lg-12 ">
                        <div class="row mt30 temRadio" style="display: none;">
                          <div class="col-lg-12 px-0">
                            <div class="note">
                              <span class="notered">Note:</span>
                              <span>*You are responsible for insuring any additional members are insured.</span>
                            </div>
                          </div>
                          <div class="col-lg-12 mt10 px-0">
                            <div class="note">
                              <span class="notered">Note:</span>
                              <span>*You are required to add Clean To Close™ to your current or new insurance.</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- porpert-duplicate-tab -->
                    <div class="cleanerInfo mt50 text-left">
                      <div class="col-lg-12 px-0">
                        <div class="clInf">
                          Access Details
                        </div>
                      </div>
                      <!-- inps -->
                      <div class="col-lg-12 px-0">
                        <div class="row">

                        </div>
                      </div>
                      <div class="col-lg-12 mb2 px-0">
                        <label>Property Access Information <span style="color:red;margin-left: 4px;"> * </span> </label>
                        <select class="js-example-disabled-results lockbox-select2 validation place_stop" name="cleaning_service[cleaning_service_lockbox]" id="Lockbox" placeholder="Property Access Information">
                          <option value="Lockbox" disabled="disabled">Lockbox</option>
                          <option value="CodeBox">CodeBox</option>
                          <option value="Combination">Combination</option>
                          <option value="Rently">Rently</option>
                          <option value="Risco">Risco</option>
                          <option value="Sentrilock">Sentrilock</option>
                          <option value="Supra iBox">Supra iBox</option>
                          <option value="Provided Access By" disabled="disabled">Provided Access By</option>
                          <option value="Listing Agent or Co-Lisiting Agent">Listing Agent or Co-Lisiting Agent</option>
                          <option value="Seller or Tenant">Seller or Tenant</option>
                          <option value="Gate Guard,Doorman or Concierge">Gate Guard,Doorman or Concierge</option>
                          <option value="Other Provided Access">Other Provided Access</option>
                          <option value="Other Access Methods" disabled="disabled">Other Access Methods</option>
                          <option value="HUD key">HUD Key</option>
                          <option value="Keypad">Keypad</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                      <div class="col-lg-12 px-0">
                        <div class="row">
                          <div class="col-lg-6">
                            <label>Code Information</label>
                            <input type="text" placeholder="Code Information" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_code_info]" id="CodeInfo">
                          </div>
                          <div class="col-lg-6">
                            <label>Location of Lockbox <span style="color:red;margin-left: 4px;"> * </span> </label>
                            <input type="text" placeholder="Location of Lockbox" class="formCustomInput validation place_stop" name="cleaning_service[cleaning_service_location_of_lockbox]" id="SentriLock">
                          </div>
                          <div class="col-lg-6">
                            <label>One Day Code or CBS Code</label>
                            <input type="text" placeholder="One Day Code or CBS Code" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_supra_cbs_code]" id="Garage">
                          </div>
                          <div class="col-lg-6">
                            <label>Additional Information for Access</label>
                            <input type="text" placeholder="Additional Information for Access" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_garage]" id="SupraCBSCode">
                          </div>

                        </div>
                      </div>
                      <!-- Are you Insured? -->
                      <div class="col-lg-12 px-0">
                        <div class="row mt30 temRadio" style="display: none;">
                          <div class="col-lg-12">
                            <div class="note">
                              <span class="notered">Note:</span>
                              <span>*You are responsible for insuring any additional members are insured.</span>
                            </div>
                          </div>
                          <div class="col-lg-12 mt10 px-0">
                            <div class="note">
                              <span class="notered">Note:</span>
                              <span>*You are required to add Clean To Close™ to your current or new insurance.</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="nxtBtn">
                      <a href="javascript:void();" class="v-none">
                        <button type="button" class="greenBtn">Previous</button>
                      </a>
                      <a onclick="changeTab('tab2','tabLink2','tab1')">
                        <button type="button" class="greenBtn checkZip" id="tab_1">Next</button>
                      </a>
                    </div>
                  </div>

                  <!-- tab2 -->
                  <div id="tab2" class="tab-pane fade">
                    <? $this->load->view('account/tabs-preview/property-address') ?>


                    <div class="cleanerInfo mt30 text-left">
                      <div class="col-lg-12 d-flex justify-content-between px0">
                        <div class="clInf">
                          Property Details
                          <!-- <span>
                            Clear Info
                          </span> -->
                        </div>
                        <!-- <span>
                          Cancel
                        </span> -->
                      </div>
                      <div class="col-lg-12 px0">
                        <div class="row mb2">
                          <div class="col-lg-6 ">
                            <label>Type of Residence <span style="color:red;margin-left: 4px;"> * </span> </label>
                            <div class="custom-select  customBackgorundColor">
                              <label hidden>Type of Residence</label>
                              <select class="formCustomInput customDropdown validation customSelect place_stop" name="cleaning_service[cleaning_service_type_residence]" id="type_residence">
                                <option value="N/A" class="customDropdownoption">Type of Residence*</option>
                                <option value="Single Family Residence">Single Family Residence</option>
                                <option value="Condominium">Condominium</option>
                                <option value="Town House">Town House</option>
                                <option value="Duplex">Duplex</option>
                                <option value="Triplex">Triplex</option>
                                <option value="Fourplex">Fourplex</option>
                                <option value="Moblie Home">Moblie Home</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 ">
                            <label>Square Footage <span style="color:red;margin-left: 4px;"> * </span> </label>
                            <div class="custom-select customBackgorundColor">
                              <label hidden>Square Footage</label>
                              <select class="formCustomInput customDropdown validation customSelect" name="cleaning_service[cleaning_service_square_footage]" id="squareft">
                                <option value="N/A" class="customDropdownoption">Select Square Footage</option>
                                <?php
                                foreach ($sqft_data as $key => $value) { ?>
                                  <option value="<?php echo $value['sqft_id'] ?>">
                                    <?php echo $value['sqft_area'] ?>
                                  </option>
                                <?php
                                }
                                ?>
                              </select>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="col-lg-12 px0">
                        <div class="row">
                          <div class="col-lg-6 ">
                            <label>Mls #</label>
                            <input type="text" placeholder="MLS #" name="cleaning_service[cleaning_service_mls]" class="formCustomInput place_stop" id="mls">
                          </div>
                          <div class="col-lg-6 ">
                            <label>Bedrooms <span style="color:red;margin-left: 4px;"> * </span> </label>
                            <div class="custom-select customBackgorundColor">
                              <label hidden>Bedrooms</label>
                              <select class="formCustomInput customDropdown validation customSelect place_stop" name="cleaning_service[cleaning_service_bedrooms]" id="bedrooms">
                                <option value="N/A">Bedrooms</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                              </select>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="col-lg-12 px0">
                        <div class="row">
                          <div class="col-lg-6 ">
                            <label>Full Bathroom <span style="color:red;margin-left: 4px;"> * </span> </label>
                            <div class="custom-select customBackgorundColor">
                              <label hidden>Full Bathroom</label>
                              <select class="formCustomInput customDropdown validation customSelect place_stop" name="cleaning_service[cleaning_service_bathroom]" id="bathroom">
                                <option value="N/A">Full Bathroom</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6 ">
                            <label>Half Bathroom <span style="color:red;margin-left: 4px;"> * </span> </label>
                            <div class="custom-select customBackgorundColor">
                              <label hidden>Half Bathroom</label>
                              <select class="formCustomInput customDropdown validation customSelect place_stop" name="cleaning_service[cleaning_service_full_bathroom]" id="fullbathroom">
                                <option value="N/A">Half Bathroom</option>
                                <option value="infinty">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 mt10">
                        <div class="note">
                          <span class="notered">Note:</span>
                          <span style="font-size:15px">Square Footage Is Based On Livable Space, If Basment Is Finished, This Must Be Included In Square Footage.</span>
                          <!--<span>Square FOOTAGE IS BASED ON LIVABLE SPACE, IF BASEMENT IS FINISHED,THIS MUST BE INCLUDED IN SQUARE FOOTAGE.</span>-->
                        </div>
                      </div>
                    </div>
                    <div class="nxtBtn">
                      <a onclick="changeTab('tab1','tabLink1')">
                        <button type="button" class="greenBtn">Previous</button>
                      </a>
                      <a onclick="changeTab('tab3','tabLink3','tab2')">
                        <button type="button" class="greenBtn" id="tab_2">Next</button>
                      </a>
                    </div>
                  </div>

                  <!-- tab3 -->
                  <div id="tab3" class="tab-pane fade">
                    <? $this->load->view('account/tabs-preview/property-address') ?>
                    <? $this->load->view('account/tabs-preview/property-details') ?>


                    <div class="d-flex propertyAddBoxtb3">
                      <div class='tab3heading'>
                        <div class="InfoHeadingtab3 nameFixDiv">
                          <h5 class='proNamePtab1'>Agent Information</h5>
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
                            Who Are You Representing?
                          </h6>
                          <div class='reprenstTabRadio22 ghnjk'>

                            <div class='reprenstTabRadiobtn21'>
                              <label class="containerChk sndf">Buyer
                                <input type="radio" value="Buyer" checked class="buy-sell-btn" name="cleaning_service[cleaning_service_representing]" id="buyer_repe">
                                <span class="checkmark"></span>
                              </label>
                            </div>
                            <div class='reprenstTabRadiobtn22'>
                              <label class="containerChk sndf">Seller
                                <input type="radio" value="Seller" class="buy-sell-btn" name="cleaning_service[cleaning_service_representing]" id="seller_repe">
                                <span class="checkmark"></span>
                              </label>
                            </div>
                            <div class='reprenstTabRadiobtn23'>
                              <label class="containerChk sndf">Both
                                <input type="radio" value="Both" class="buy-sell-btn" name="cleaning_service[cleaning_service_representing]" checked="checked" id="agent">
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
                              <span style="color:red;margin-left: 4px;"> * </span>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer First Name</label>
                            <input type="text" placeholder="First Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_service_first_name]" id="buyer">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer Last Name</label>
                            <input type="text" placeholder="Last Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_service_last_name]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer Email</label>
                            <input type="email" placeholder="Email" class="formCustomInput required0 " name="cleaning_service[cleaning_service_email]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer Phone</label>
                            <input type="tel" placeholder="Phone" class="formCustomInput required0 " name="cleaning_service[cleaning_service_contact]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone">
                          </div>
                        </div>
                        <!-- <label>Seller Information</lab> -->
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="clInf">
                              Seller Information
                              <span style="color:red;margin-left: 4px;"> * </span>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller First Name</label>
                            <input type="text" placeholder="First Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_service_first_name_seller]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller Last Name</label>
                            <input type="text" placeholder="Last Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_service_last_name_seller]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller Email</label>
                            <input type="email" placeholder="Email" class="formCustomInput " name="cleaning_service[cleaning_service_email_seller]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller Phone</label>
                            <input type="tel" placeholder="Phone" class="formCustomInput " name="cleaning_service[cleaning_service_contact_seller]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone_seller">
                          </div>
                        </div>

                      </div>
                      <div class="col-lg-12 forBuyer" style="display: none;">
                        <div class="row">
                          <div class="col-lg-12">
                            <h6>Buyer Information <span style="color:red;margin-left: 4px;"> * </span> </h6>
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer First Name</label>
                            <input type="text" placeholder="First Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_buyer_name]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer Last Name</label>
                            <input type="text" placeholder="Last Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_buyer_last_name]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer Email</label>
                            <input type="email" placeholder="Email" class="formCustomInput required0" name="cleaning_service[cleaning_buyer_email]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer Phone</label>
                            <input type="tel" placeholder="Phone" class="formCustomInput required0 " name="cleaning_service[cleaning_buyer_contact]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone_buyer">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <h6>Cooperating Agent Information <span style="color:red;margin-left: 4px;"> * </span> </h6>
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Cooperating Agent First Name</label>
                            <input type="text" placeholder="First Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_service_agent_buyer_name]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Cooperating Agent Last Name</label>
                            <input type="text" placeholder="Last Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_service_agent_buyer_last_name]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Cooperating Agent Email</label>
                            <input type="email" placeholder="Email" class="formCustomInput required0 " name="cleaning_service[cleaning_service_agent_buyer_email]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Cooperating Agent Phone</label>
                            <input type="tel" placeholder="Phone" class="formCustomInput required0" name="cleaning_service[cleaning_service_agent_buyer_phone]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone_buyer_cop">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <h6>Seller Information</h6>
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller First Name</label>
                            <input type="text" placeholder="First Name" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_other_seller_fullname]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller Last Name</label>
                            <input type="text" placeholder="Last Name" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_other_seller_lastname]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller Email</label>
                            <input type="email" placeholder="Email" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_other_seller_email]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller Phone</label>
                            <input type="tel" placeholder="Phone" class="formCustomInput" name="cleaning_service[cleaning_service_other_seller_phone]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone_buyer_seller">
                          </div>
                        </div>

                      </div>
                      <div class="col-lg-12 forSeller" style="display: none;">
                        <div class="row">
                          <div class="col-lg-12">
                            <h6>Seller Information <span style="color:red;margin-left: 4px;"> * </span> </h6>
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller First Name</label>
                            <input type="text" placeholder="First Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_seller_name]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller Last Name</label>
                            <input type="text" placeholder="Last Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_seller_last_name]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller Email</label>
                            <input type="text" placeholder="Email" class="formCustomInput required0 " name="cleaning_service[cleaning_seller_email]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Seller Phone</label>
                            <input type="tel" placeholder="Phone" class="formCustomInput required0" name="cleaning_service[cleaning_seller_contact]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone_seller_seller">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <h6>Cooperating Agent Information <span style="color:red;margin-left: 4px;"> * </span> </h6>
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Cooperating Agent First Name</label>
                            <input type="text" placeholder="First Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_service_agent_seller_name]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Cooperating Agent Last Name</label>
                            <input type="text" placeholder="Last Name" class="formCustomInput required0 place_stop" name="cleaning_service[cleaning_service_agent_seller_last_name]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Cooperating Agent Email</label>
                            <input type="email" placeholder="Email" class="formCustomInput required0" name="cleaning_service[cleaning_service_agent_seller_email]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Cooperating Agent Phone</label>
                            <input type="tel" placeholder="Phone" class="formCustomInput required0" name="cleaning_service[cleaning_service_agent_seller_phone]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone_cop_seller">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <h6>Buyer Information</h6>
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer First Name</label>
                            <input type="text" placeholder="First Name" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_other_buyer_fullname]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer Last Name</label>
                            <input type="text" placeholder="Last Name" class="formCustomInput place_stop" name="cleaning_service[cleaning_service_other_buyer_lastname]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer Email</label>
                            <input type="email" placeholder="Email" class="formCustomInput" name="cleaning_service[cleaning_service_other_buyer_email]">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Buyer Phone</label>
                            <input type="tel" placeholder="Phone" class="formCustomInput" name="cleaning_service[cleaning_service_other_buyer_phone]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone_buyer_seller_seller">
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="nxtBtn">
                      <a onclick="changeTab('tab2','tabLink2')">
                        <button type="button" class="greenBtn">Previous</button>
                      </a>
                      <a onclick="changeTab('tab5','tabLink5','tab3');changeTabsWithData()">
                        <button type="button" class="greenBtn" id="tab_3">Next</button>
                      </a>
                    </div>
                  </div>

                  <!-- tab5 -->
                  <div id="tab5" class="tab-pane fade">
                    <? $this->load->view('account/tabs-preview/property-address') ?>
                    <? $this->load->view('account/tabs-preview/property-details') ?>
                    <? $this->load->view('account/tabs-preview/buyer-seller-tab.php') ?>

                    <div class='propertyAddBoxtab4 ONEtIME'>
                      <div class='tab3heading'>
                        <div class="InfoHeadingtab3 nameFixDiv">
                          <h5 class='proNamePtab1'>Closing Information </h5>
                          <!-- <p class='propertyAddTab3h'>Clear Info</p> -->
                        </div>
                        <!-- <div class="">
                          </div> -->
                        <div class="">
                          <!-- <p class='propertyAddTab3h'>Cancel</p> -->
                        </div>
                      </div>
                      <div class="col-lg-12 ">
                        <div class="row">
                          <div class="col-lg-6">
                            <label style="margin-left: 15px;margin-bottom: 1px;color: #676767;font-size: 15px;margin-bottom: 5px;">Closing Date <span style="color:red;margin-left: 4px;"> * </span></label>
                            <input type="date" placeholder="Projected closing date" name="cleaning_service[cleaning_service_projected_closing_date]" class="formCustomInput validation" id="closingdatetime">
                          </div>
                          <div class="col-lg-6">
                            <label style="margin-left:15px;margin-bottom: 1px;color: #676767;font-size: 15px;margin-bottom: 5px;">Closing/Title Company <span style="color:red;margin-left: 4px;"> * </span> </label>
                            <input type="text" placeholder="Closing/Title Company" name="cleaning_service[cleaning_service_closing_tittle_company]" class="formCustomInput validation place_stop" id="title_company">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <label style="margin-left: 15px;margin-bottom: 1px;color: #676767;font-size: 15px;margin-bottom: 5px;">Company Email</label>
                            <input type="email" placeholder="Title Company Email" name="cleaning_service[cleaning_service_closing_tittle_company_email]" class="formCustomInput " id="closingemail">
                          </div>
                          <div class="col-lg-6">
                            <label style="margin-left:15px;margin-bottom: 1px;color: #676767;font-size: 15px;margin-bottom: 5px;">Company Phone Number<span style="color:red;margin-left: 4px;"> * </span> </label>
                            <input type="text" placeholder="Title Company Phone Number" name="cleaning_service[cleaning_service_closing_tittle_company_phone_number]" class="formCustomInput validation" id="title_company_phone_number" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <div class="reprenstTab">
                              <div class="reprenstTabContent1Tab5">
                                <h6>
                                  Will cleaning occur prior to closing or after closing?
                                  <span style="color:red;margin-left: 4px;"> * </span>
                                </h6>
                                <div class='reprenstTabRadio2'>
                                  <div class='reprenstTabRadiobtn1'>
                                    <label class="containerChk">Prior To Closing
                                      <input type="radio" value="PriorToClosing" name="cleaning_service[cleaning_service_cleaning_occur_prior_closing]" checked>
                                      <span class="checkmark"></span>
                                    </label>
                                  </div>
                                  <div class='reprenstTabRadiobtn2'>
                                    <label class="containerChk">After Closing
                                      <input type="radio" value="AfterClosing" name="cleaning_service[cleaning_service_cleaning_occur_prior_closing]">
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
                                  Who Is Responsible For Payment?
                                  <span style="color:red;margin-left: 4px;"> * </span>
                                </h6>

                                <div class="reprenstTabRadio22">

                                  <div class="reprenstTabRadiobtn21 BuyerRep">
                                    <label class="containerChk sndf ">Buyer
                                      <input type="radio" value="Buyer" name="cleaning_service[cleaning_service_responsible_payment]" id="buyer_repe">
                                      <span class="checkmark"></span>
                                    </label>
                                  </div>
                                  <div class="reprenstTabRadiobtn22 SellerRep">
                                    <label class="containerChk sndf">Seller
                                      <input type="radio" value="Seller" name="cleaning_service[cleaning_service_responsible_payment]" id="seller_repe">
                                      <span class="checkmark"></span>
                                    </label>
                                  </div>
                                  <div class="reprenstTabRadiobtn23 AgentRep" id="AgentRep0">
                                    <label class="containerChk sndf">Agent
                                      <input type="radio" value="Agent" name="cleaning_service[cleaning_service_responsible_payment]" checked="" id="agent">
                                      <span class="checkmark"></span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <!--<div class="col-lg-12">-->
                          <!--  <div class="reprenstTabContent1Tab5">-->
                          <!--    <h6>-->
                          <!--      Are you working with a closing tittle company?-->
                          <!--    </h6>-->
                          <!--    <div class='reprenstTabRadio2'>-->
                          <!--      <div class='reprenstTabRadiobtn1'>-->
                          <!--        <label class="containerChk">Yes-->
                          <!--          <input type="radio" value="Yes" name="cleaning_service[cleaning_service_working_closing_company]" checked>-->
                          <!--          <span class="checkmark"></span>-->
                          <!--        </label>-->
                          <!--      </div>-->
                          <!--      <div class='reprenstTabRadiobtn2'>-->
                          <!--        <label class="containerChk">No-->
                          <!--          <input type="radio" value="No" name="cleaning_service[cleaning_service_working_closing_company]">-->
                          <!--          <span class="checkmark"></span>-->
                          <!--        </label>-->
                          <!--      </div>-->

                          <!--    </div>-->
                          <!--  </div>-->
                          <!--</div>-->

                        </div>

                        <div class="row">
                          <div class="row">
                            <div class="col-lg-12">
                              <label style="margin-left: 20px !important;margin-bottom: 1px;color: #676767;font-size: 15px;margin-bottom: 5px;">Requested Date/Time of Cleaning <span style="color:red;margin-left: 4px;"> * </span> </label>
                            </div>
                          </div>
                          <!-- <div class="col-lg-6">
                            <label style="    margin-left: 3%;margin-bottom: 1px;color: #676767;font-size: 14px;margin-bottom: 5px;">Closing/tittle agent or officer</label>
                            <input type="text" placeholder="Closing/tittle agent or fficer" class="formCustomInput" name="cleaning_service[cleaning_service_closing_tittle_agent_or_officer]" id="agent_officer">
                          </div> -->
                        </div>
                        <div class="row">
                          <!-- <div class="col-lg-6">
                            <label style="    margin-left: 3%;margin-bottom: 1px;color: #676767;font-size: 14px;margin-bottom: 5px;">Closing File #</label>
                            <input type="text" placeholder="Closing File #" name="cleaning_service[cleaning_service_closing_file_no]" class="formCustomInput" id="closing_file">
                          </div> -->
                          <!--<h5>Requested Date/Time of Cleaning</h5>-->

                          <div class="col-lg-3">
                            <label hidden>Requested Date</label>
                            <input type="date" placeholder="Date" name="cleaning_service[cleaning_service_closing_date]" class="formCustomInput validation " id="closing_file" onchange="handler(event);">
                          </div>
                          <div class="col-lg-3">
                            <label hidden>Time of Cleaning</label>
                            <!--<label style="    margin-left: 3%;margin-bottom: 1px;color: #676767;font-size: 14px;margin-bottom: 5px;">Time</label>-->
                            <input type="time" placeholder="Time" name="cleaning_service[cleaning_service_closing_time]" class="formCustomInput datechk validation" id="time" hidden>
                            <div class="time-input">
                              <i class="fa fa-clock"></i>
                              <div class="show-field">
                                <div class="hrs">00</div>:
                                <div class="min">00</div>
                                <div class="pm">--</div>
                              </div>
                              <div class="time-field hide">
                                <div class="time-box">
                                  <div class="hours">
                                    <span> 01</span>
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
                                  </div>
                                  <div class="mins">
                                    <span> 00</span>
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
                                    <span> 15 </span>
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
                                    <span> 30 </span>
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
                                    <span> 45 </span>
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
                                    <span>AM</span>
                                    <span>PM</span>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="nxtBtn">
                      <a onclick="changeTab('tab3','tabLink3')">
                        <button type="button" class="greenBtn">Previous</button>
                      </a>
                      <a onclick="changeTab('tab6','tabLink6','tab5')">
                        <button type="button" class="greenBtn" id="tab_4">Next</button>
                      </a>
                    </div>
                  </div>

                  <!-- tab6 -->
                  <div id="tab6" class="tab-pane fade">
                    <? $this->load->view('account/tabs-preview/property-address') ?>
                    <? $this->load->view('account/tabs-preview/property-details') ?>
                    <? $this->load->view('account/tabs-preview/buyer-seller-tab.php') ?>
                    <? $this->load->view('account/tabs-preview/closing-info.php') ?>


                    <div class="d-flex propertyAddBoxtab3">

                      <div class="tab7 mainbox d-flex">

                        <div class="headingbox">
                          <div class="headingbox1" style="margin-top: 15px;">
                            <h5>
                              Plans and Coverage
                            </h5>
                            <!-- <p>
                                clear info
                              </p> -->
                          </div>
                          <!-- <div class="headingbox2">
                           <p>Cancel</p>
                         </div> -->
                        </div>
                      </div>

                      <div class="packageMainBox">

                        <div class="headign">
                          <h5>Select Cleaning Coverage
                            <span style="color:red;margin-left: 4px;"> * </span>
                          </h5>
                        </div>

                        <div class="row packagesBox mt30 text-center">
                          <div class="col-lg-4">
                            <label for="packageCl" style="position: relative;">
                              <input type="radio" name="package" hidden id="packageCl" class="packageRadiosPoints  premier">
                              <div class="packagebox1 points2" data-packageid="1" value="">
                                <!-- <div class="csBoxe"></div> -->
                                <div class="boxsec1">
                                  <h2 id="pre">PREMIER</h2>
                                  <input type="hidden" value="PREMIER" id="name">
                                  <input type="radio" hidden value="Buyer" name="cleaning_service[cleaning_service_responsible_payment]" id="buyer_repe">
                                  <!-- <span class="checkmark"></span> -->
                                </div>
                                <div class="boxSec2 ">
                                  <!-- <h2 class="value"> -->
                                  <!-- $459 -->
                                  <label hidden>Package Amount</label>
                                  <input type="hidden" value="" class="package_amount_user validation">
                                  <!-- </h2> -->
                                  <!-- <div class="packageParaf">
                                    <p>
                                        PRICES WILL HAVE TO AUTO FILL
                                        BASED ON SQUARE FOOTAGE
                                        ENTERED ON PREVIOUS PAGE
                                      </p>
                                  </div> -->
                                  <!-- <input hidden id="hidden_id_package" value="1"> -->
                                  <div>
                                    <?php
                                    foreach ($premier_list as $key => $value) { ?>
                                      <ul class="points" style="min-width: 300px; padding:0 20px;">
                                        <li class="d-flex justify-content-around">
                                          <span style="width:130px; font-family: 'gilroymedium'; " class="leftSpaner"> <?php echo $value['sqft_area'] ?> </span>
                                          <span style=" text-align:center; font-family: 'gilroymedium';"></span> <span style="width:50px;font-family: 'gilroymedium'; "> $<?php echo $value['package_realtor_amount'] ?></span>
                                        </li>
                                      </ul>
                                    <?php
                                    }
                                    ?>
                                  </div>
                                  <!-- <button type="button" data-toggle="modal" data-target="#CoverageModal" onclick="showData('data2')">
                                    Coverage Details
                                  </button> -->
                                </div>
                              </div>

                              <button type="button" class="pynu pynu-first" data-toggle="modal" data-target="#CoverageModal" onclick="showData('data2')">
                                Coverage Details
                              </button>

                            </label>
                          </div>
                          <div class="col-lg-4">
                            <label for="packageCl2">
                              <input type="radio" name="package" hidden id="packageCl2" class="packageRadiosPoints premium">
                              <div class="packagebox1 points2" data-packageid="2" value="">
                                <!-- <div class="csBoxe"></div> -->
                                <div class="boxsec1">
                                  <h2 id="preimum">PREMIUM</h2>
                                  <input type="hidden" value="PREMIUM" id="name1">
                                  <input type="radio" value="Buyer" hidden name="cleaning_service[cleaning_service_responsible_payment]" id="buyer_repe">
                                  <!-- <span class="checkmark"></span> -->
                                </div>
                                <div class="boxSec2 ">
                                  <!-- <h2> -->
                                  <!-- $500 -->
                                  <input type="hidden" value="" class="package_amount_user">
                                  <!-- </h2> -->

                                  <!-- <div class="packageParaf">
                                    <p>
                                        PRICES WILL HAVE TO AUTO FILL
                                        BASED ON SQUARE FOOTAGE
                                        ENTERED ON PREVIOUS PAGE
                                      </p>
                                  </div> -->
                                  <!-- <input hidden id="hidden_id_package" value="2"> -->
                                  <div class="div">
                                    <?php
                                    foreach ($premium_list as $key => $value) { ?>
                                      <ul class="points" style="min-width: 300px; padding:0 20px;">
                                        <li class="d-flex justify-content-around">
                                          <span style="width:130px; font-family: 'gilroymedium'; " class="leftSpaner"> <?php echo $value['sqft_area'] ?> </span> <span style=" text-align:center; font-family: 'gilroymedium';"></span> <span style="width:50px;font-family: 'gilroymedium'; "> $<?php echo $value['package_realtor_amount'] ?> </span>
                                        </li>
                                      </ul>
                                    <?php
                                    }
                                    ?>
                                  </div>
                                  <!-- <button type="button" data-toggle="modal" data-target="#CoverageModal" onclick="showData('data2')">
                                  Coverage Details
                                  </button> -->
                                </div>
                              </div>

                              <button type="button" class="pynu" data-toggle="modal" data-target="#CoverageModal" onclick="showData('data1')">
                                Coverage Details
                              </button>

                            </label>
                          </div>
                          <div class="col-lg-4">
                            <label for="packageCl3">
                              <input type="radio" name="package" hidden id="packageCl3" class="packageRadiosPoints basic">
                              <div class="packagebox1 points2" data-packageid="3" value="">
                                <!-- <div class="csBoxe"></div> -->
                                <div class="boxsec1">
                                  <h2 id="basic">BASIC</h2>
                                  <input type="hidden" value="BASIC" id="name2">
                                  <input type="radio" value="Buyer" hidden name="cleaning_service[cleaning_service_responsible_payment]" id="buyer_repe">
                                  <!-- <span class="checkmark"></span> -->
                                </div>
                                <div class="boxSec2 ">
                                  <!-- <h2 class="value"> -->
                                  <!-- $600 -->
                                  <input type="hidden" value="" class="package_amount_user">
                                  <!-- </h2> -->
                                  <!-- <div class="packageParaf">
                                    <p>
                                        PRICES WILL HAVE TO AUTO FILL
                                        BASED ON SQUARE FOOTAGE
                                        ENTERED ON PREVIOUS PAGE
                                      </p>
                                  </div> -->
                                  <!-- <input hidden id="hidden_id_package" value="3"> -->
                                  <div>
                                    <?php
                                    foreach ($basic_list as $key => $value) { ?>
                                      <ul class="points" style="min-width: 300px; padding:0 20px;">
                                        <li class="d-flex justify-content-around">
                                          <span style="width:130px; font-family: 'gilroymedium'; " class="leftSpaner"> <?php echo $value['sqft_area'] ?> </span><span style=" text-align:center; font-family: 'gilroymedium';"></span> <span style="width:50px;font-family: 'gilroymedium'; "> $<?php echo $value['package_realtor_amount'] ?> </span>
                                        </li>
                                      </ul>
                                    <?php
                                    }
                                    ?>
                                  </div>
                                  <!-- <button type="button" data-toggle="modal" data-target="#CoverageModal" onclick="showData('data3')">
                                  Coverage Details
                                  </button> -->
                                </div>
                              </div>
                              <button type="button" class="pynu" data-toggle="modal" data-target="#CoverageModal" onclick="showData('data3')">
                                Coverage Details
                              </button>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="additionalMainBox mt10">

                        <div class="headingSection">
                          <h5>
                            Additional Add-Ons
                          </h5>
                        </div>

                        <div class="optinalSectionbox">
                          <div class="row">
                            <!-- <h5 class='d-flex'>
                              Optional Coverage
                            </h5> -->

                            <!-- <div class="col-lg-12 d-flex justify-content-between">  
                                  <div class="box1">
                                    <div class='reprenstTabRadiobtn1'> -->
                            <?php
                            $index = -1;
                            foreach ($additional_add_ons as $key => $value) { ?>
                              <?php $index++; ?>
                              <div class="col-lg-12 d-flex justify-content-between fridgeRows <?php echo $index; ?> pl-0">
                                <div class="box1">
                                  <div class='reprenstTabRadiobtn1'>
                                    <label class="containerChk checkboxcustom" id="checkboxcustom"> <?php echo $value['additional_add_ons_name'] ?> $<?php echo $value['additional_add_ons_price'] ?>
                                      <input type="checkbox" name="cleaning_service[cleaning_service_additional_kitchen][]" value="<?php echo $value['additional_add_ons_id'] ?>" class="value_checkbox" id="$<?php echo $value['additional_add_ons_price'] ?>" onchange="changeInpy(event,'fridgeRows',<?php echo $index; ?>,<?php echo $value['additional_add_ons_id'] ?>)">
                                      <span class="checkmark"></span>
                                    </label>
                                  </div>
                                </div>
                                <!-- <span id="addtional_kitchen">
                                 
                                </span> -->
                                <div class="selctInpp d-flex align-items-center">
                                  <label for="">QTY:</label>
                                  <input type="number" value="0" onkeyup="showMe(event,'fridgeRows',<?php echo $index; ?>, <?php echo $value['additional_add_ons_id'] ?>),backTo1(event)">

                                  <div class="individualAmount">
                                    $<?php echo $value['additional_add_ons_price'] ?>
                                  </div>
                                </div>
                              </div>
                            <?php
                            }
                            ?>

                            <div class="d-flex headingwithborder mt-3">
                              <h5>
                                Disclaimer Information
                              </h5>
                            </div>

                            <div class="col-lg-10 mt-2">
                              <?php
                              $package_disclimar = $this->model_cleaner_pakage_disclimar->find_all();
                              ?>
                              <p>
                                <?php echo $package_disclimar[0]['cleaner_pakage_disclimar_value'] ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- summary -->
                      <div class="tab7Summary">
                        <div class="row">

                          <div class="col-lg-12 mt10 d-flex justify-content-between ">
                            <h5>Summary</h5>
                          </div>

                          <div class="col-lg-12 mt10 d-flex justify-content-between">
                            <div class="box1" id="package_name">
                            </div>
                            <input id="package_name1" type="hidden" name="cleaning_service[cleaning_service_package_name]" value="">
                            <span id="get_package_value"></span>
                            <input id="get_package_value1" type="hidden" value="">
                          </div>

                          <div class="col-lg-12 mt10 d-flex justify-content-between">
                            <div class="box1">
                              Total Options
                            </div>
                            <span class="total_sum">$0</span>
                            <input type="hidden" id="total_sum1" value="">
                          </div>



                          <div class="col-lg-12 mt10 d-flex justify-content-between summaryTopLine" style="padding-top: 10px;">
                            <div class="box1">
                              <b>Due at Closing</b>
                            </div>
                            <span class="total_amount">$0</span>
                            <input type="hidden" class="total_amount" value="" hidden>
                          </div>

                        </div>


                      </div>

                    </div>
                    <div class="nxtBtn">
                      <a onclick="changeTab('tab5','tabLink5')">
                        <button type="button" class="greenBtn">Previous</button>
                      </a>
                      <a onclick="changeTab('tab7','tabLink7','tab6')">
                        <button type="button" class="greenBtn" id="save_value">Next</button>
                      </a>
                    </div>
                  </div>


                  <!-- tab 7 -->
                  <div id="tab7" class="tab-pane fade">
                    <? $this->load->view('account/tabs-preview/property-address') ?>
                    <? $this->load->view('account/tabs-preview/property-details') ?>
                    <? $this->load->view('account/tabs-preview/buyer-seller-tab.php') ?>
                    <? $this->load->view('account/tabs-preview/closing-info.php') ?>
                    <? $this->load->view('account/tabs-preview/plans-coverage.php') ?>

                    <div class="nxtBtn">

                      <a onclick="changeTab('tab6','tabLink6')">
                        <button type="button" class="greenBtn">Previous</button>
                      </a>


                      <a>
                        <button type="button" class="greenBtn" id="submitInfo" onclick="window.localStorage.setItem('place-order-active-tab','tab1')">Place Order</button>
                      </a>

                    </div>
                  </div>

                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="CoverageModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-center modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body modalBody text-center">

        <div class="data1 " style="display:none">
          <h2>PREMIUM</h2>
          <br />
          <?php foreach ($package_list_2 as $value) { ?>
            <?php
            $para12['where']['package_service_type_id'] = $value['type_clean_package_id'];
            $package_service_2 = $this->model_package_service->find_all_active($para12);
            ?>

            <div class=" newcal">
              <div class="dataheading d-flex ">
                <?php echo  $value['type_clean_package_type'] ?>
              </div>
              <?php foreach ($package_service_2 as $key => $value) { ?>
                <input type="hidden" value="<?php echo $value['package_service_package_id'] ?>" id="package_service_package_id_1">

                <div class="tableData d-flex justify-content-between
                  <?php
                  if ($key % 2 == 0) {
                    echo ('colop');
                  }
                  ?>
                  ">
                  <!-- <li> -->
                  <?php echo  $value['package_service_name'] ?>
                  <div class="tablecheck">
                    <i class="fas fa-circle iconstyle"></i>
                  </div>
                  <!-- </li> -->
                </div>
              <?php
              }
              ?>
            </div>

          <?php
          }
          ?>
        </div>
        <div class="data2 mt2 " style="display:none">

          <h2>PREMIER</h2>
          <br />


          <?php foreach ($package_list as $value) { ?>
            <?php
            $para12['where']['package_service_type_id'] = $value['type_clean_package_id'];
            $package_service_1 = $this->model_package_service->find_all_active($para12);
            ?>
            <div class=" newcal">
              <div class="dataheading d-flex ">
                <?php echo  $value['type_clean_package_type'] ?>
              </div>
              <?php foreach ($package_service_1 as $key => $value) { ?>
                <input type="hidden" value="<?php echo $value['package_service_package_id'] ?>" id="package_service_package_id_2">
                <!-- <input type="hidden" value="<?php echo $value['package_service_type_id'] ?>" id="package_service_type_id"> -->
                <div class="tableData d-flex justify-content-between
                  <?php
                  if ($key % 2 == 0) {
                    echo ('colop');
                  }
                  ?>
                  ">

                  <!-- <li> -->
                  <?php echo  $value['package_service_name'] ?>
                  <div class="tablecheck">
                    <i class="fas fa-circle iconstyle"></i>
                  </div>
                  <!-- </li> -->
                </div>
              <?php
              }
              ?>
            </div>

          <?php
          }
          ?>
        </div>
        <div class="data3 " style="display:none">
          <h2>BASIC</h2>
          <br />
          <?php foreach ($package_list_3 as $value) { ?>
            <?php
            $para12['where']['package_service_type_id'] = $value['type_clean_package_id'];
            $package_service_3 = $this->model_package_service->find_all_active($para12);
            ?>
            <div class=" newcal">
              <div class="dataheading d-flex ">
                <?php echo  $value['type_clean_package_type'] ?>
              </div>
              <?php foreach ($package_service_3 as $key => $value) { ?>
                <input type="hidden" value="<?php echo $value['package_service_package_id'] ?>" id="package_service_package_id_3">

                <div class="tableData d-flex justify-content-between
                  <?php
                  if ($key % 2 == 0) {
                    echo ('colop');
                  }
                  ?>
                  ">

                  <!-- <li> -->
                  <?php echo  $value['package_service_name'] ?>
                  <div class="tablecheck">
                    <i class="fas fa-circle iconstyle"></i>
                  </div>
                  <!-- </li> -->
                </div>
              <?php
              }
              ?>
            </div>
            <!-- <ul>
              <li>
                <?php echo  $value['type_clean_package_type'] ?>
                <ul>
                  <?php foreach ($package_service_3 as $value) { ?>
                    <li>
                    <?php echo  $value['package_service_name'] ?>
                    </li>
                  <?php
                  }
                  ?>
                </ul>
              </li>
            </ul> -->
          <?php
          }
          ?>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- modal date -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#date_modal" hidden id="date_modal_btn">Large modal</button>
<div class="modal fade" id="date_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header add_member">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-size:17px;">
          This job is less than 5 days away and can not be guaranteed. Clean To Close™ will confirm the cleaning has been scheduled ASAP. Please contact support if further assistance is needed at <a href="mailto:support@cleantocloseco.com">support@cleantocloseco.com</a>.
        </p>
        <p style="font-size:17px;">
          Please note: If this date is less than 72 hours from the service date, there will be a mandatory $55 emergency fee added. You must select this option in the additional add ons section prior to your submission of the service order to ensure your service is scheduled on time . See our <a href="<?= g('base_url') ?>terms-condition" target="_blank"> Terms and Conditions </a> for more information .
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn greenBtn customclass_date" data-dismiss="modal">Accept</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" hidden class="btn btn-primary" id="openZipModal" data-toggle="modal" data-target="#zipModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="zipModal" tabindex="-1" role="dialog" aria-labelledby="zipModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-body">
          <!-- <strong>We're Sorry!</strong>
          <br> -->
          We apologize for the inconvenience! We aren't yet in your area, please contact us to get your on the CLEAN TO CLOSE™ expansion list.
        </div>
        <div class="modal-footer">
          <button type="button" id="zipModalButton" class="btn btn-secondary">Click Here</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCab5ahH6KkodUavDwBCigXTL7ZbrkzS94&libraries=places&callback=initAutocomplete"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCab5ahH6KkodUavDwBCigXTL7ZbrkzS94&callback=initAutocomplete&libraries=places&v=weekly" async></script>

<script>
  let autocomplete;
  let address1Field;
  let postalField;

  function initAutocomplete() {
    address1Field = document.querySelector("#ship-address");
    postalField = document.querySelector("#postcode");
    // addresses in the US and Canada.
    autocomplete = new google.maps.places.Autocomplete(address1Field, {
      componentRestrictions: {
        country: ["us", "ca"]
      },
      fields: ["address_components", "geometry"],
      types: ["address"],
    });
    address1Field.focus();
    autocomplete.addListener("place_changed", fillInAddress);
  }

  function fillInAddress() {
    const place = autocomplete.getPlace();
    let address1 = "";
    let postcode = "";
    document.getElementById('latitude_input').value = place.geometry.location.lat();
    document.getElementById('longitude_input').value = place.geometry.location.lng();
    for (const component of place.address_components) {
      const componentType = component.types[0];
      // console
      switch (componentType) {
        case "street_number": {
          address1 = `${component.long_name} ${address1}`;
          break;
        }

        case "route": {
          address1 += component.short_name;
          break;
        }

        case "postal_code": {
          postcode = `${component.long_name}${postcode}`;
          break;
        }
        case "locality":
          document.querySelector("#locality").value = component.long_name;
          break;
        case "administrative_area_level_1": {
          document.querySelector("#state").value = component.short_name;
          break;
        }
      }
    }

    address1Field.value = address1;
    postalField.value = postcode;
  }
</script>

<script>
  var currentTab = window.localStorage.getItem('place-order-active-tab')

  if (currentTab == undefined || currentTab == '' || currentTab == null) {
    currentTab = 'tab1'
  }

  var tabLink = currentTab.split('b')

  changeTab(currentTab, tabLink[0] + 'bLink' + tabLink[1]);


  $('#submitInfo').on('click', function() {
    window.localStorage.setItem('place-order-active-tab', 'tab1')
  });
</script>

<script type="text/javascript">
  var TotalOptions = 0,
    DueatClosing = 0,
    package_amount = 0;
  // $('.buy-sell-btn').change(function(){
  // var value = $( 'input[name=opt]:checked' ).val();
  // alert(value);
  // });
  $(document).ready(function() {
    document.getElementById('phone').addEventListener('input', function(e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    document.getElementById('phone_seller').addEventListener('input', function(e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    document.getElementById('phone_buyer').addEventListener('input', function(e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    document.getElementById('phone_buyer_cop').addEventListener('input', function(e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    document.getElementById('phone_buyer_seller').addEventListener('input', function(e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    document.getElementById('phone_seller_seller').addEventListener('input', function(e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    document.getElementById('phone_cop_seller').addEventListener('input', function(e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    document.getElementById('phone_buyer_seller_seller').addEventListener('input', function(e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    document.getElementById('title_company_phone_number').addEventListener('input', function(e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });
    $('.buy-sell-btn').click();

    $('.fridgeRows').last().css('border-bottom', "1px solid #00000036");

    $('.fridgeRows').find('input[type="checkbox"]').change((e) => {})

  })

  var currentAgentType = 'Both';

  function showData(id) {
    if (id == 'data1') {
      $('.data1').css('display', 'block');
      $('.data2').css('display', 'none')
      $('.data3').css('display', 'none')
    } else if (id == 'data2') {
      $('.data2').css('display', 'block');
      $('.data1').css('display', 'none')
      $('.data3').css('display', 'none')
    } else if (id == 'data3') {
      $('.data3').css('display', 'block')
      $('.data2').css('display', 'none')
      $('.data1').css('display', 'none')
    }
  }

  $(document).ready(function() {


    $('.place_stop').on('input', function() {
      $(this).val($(this).val().replace(/[^a-z0-9]/gi, ' '));
    });

    $('.premier').click(function() {
      var package_service_package_id_2 = $('#package_service_package_id_2').val();
      $('#packageid').val(package_service_package_id_2);
      // console.log(package_service_package_id_2);

    })

    $('.premium').click(function() {
      var package_service_package_id_1 = $('#package_service_package_id_1').val();
      $('#packageid').val(package_service_package_id_1);
      // console.log(package_service_package_id_1);

    })

    $('.basic').click(function() {
      var package_service_package_id_3 = $('#package_service_package_id_3').val();
      $('#packageid').val(package_service_package_id_3);
      // console.log(package_service_package_id_3);

    })

    $(".checkZip").click(function(e) {
      var zipcode = document.getElementById("postcode").value;
      var params = {};
      params.zip = zipcode;
      var data = AjaxRequest.fire('<?= base_url(); ?>account/check_zip', params);
      if (data.status == '3') {
        return true
      } else {
        $("#openZipModal").trigger("click");
        return false;
      }

    })

    $("#zipModalButton").click(function(e) {
      Loader.show();
      setTimeout(function() {
        var zipcodeForEmail = document.getElementById("postcode").value;
        var params = {};
        params.zip = zipcodeForEmail;
        var res = AjaxRequest.fire('<?= base_url(); ?>account/zipcode_email', params);
        if (res.status == "1") {
          location.reload();
        }
      }, 1000)


    })


    $(".points2").on('click', function() {
      var sqft_value = $("#squareft").val();
      var package_name_id = $(this).attr('data-packageid');
      var params = {};
      params.sqft = sqft_value;
      params.package_id = package_name_id;
      var res = AjaxRequest.fire('<?= base_url(); ?>account/get_package_data', params);
      if (res.status == 1) {
        $('.package_amount_user').val(res.html);
      } else {
        console.log('error');
      }
    });
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
          // return false;
          // $("#submitInfo").text("Countine");
          // $("#countine").show();
          window.location.href = '<?= base_url(); ?>account/submit_order';
          // location.reload();
        }
        // Add return
        return false;
      }, 1000);
      return false;
    });

    // Profile image update start (not implement)
    $("#btn-profile").on('change', function() {
      // Get file obj
      var file_obj = $(this);
      // Define allow extension
      var ext = file_obj.val().split('.').pop().toLowerCase();

      // Check ext empty or not (empty means no file selected)
      if (ext != '') {
        // Other extension
        if ($.inArray(ext, ['png', 'jpg', 'jpeg']) == -1) {
          file_obj.val('');
          AdminToastr.error('Invalid file', 'Error');
        }
        // Upload file
        else {
          var data = new FormData(document.getElementById("form-image"));
          var url = $("#form-image").attr("action");

          FileUploadScript.fire(url, data, 'json', true);

        }
      }
    });
    $("#packageCl").change(function() {
      var name = $("#name").val();
      var package_name = $("#package_name").text(name);
      var package_name_1 = $("#package_name1").val(name);
    });
    $("#packageCl2").change(function() {
      var name = $("#name1").val();
      var package_name = $("#package_name").text(name);
      var package_name_1 = $("#package_name1").val(name);
    });
    $("#packageCl3").change(function() {
      var name = $("#name2").val();
      var package_name = $("#package_name").text(name);
      var package_name_1 = $("#package_name1").val(name);
    });
    $(".points2").on('click', function() {
      package_amount = $(".package_amount_user").val();
      $('#selectedAmount').val(package_amount);
      $('#totalPackageAmount').val(package_amount);
      DueatClosing = package_amount
      $('#get_package_value1').text(`$${DueatClosing}`);
      $('#get_package_value').text(`$${DueatClosing}`);

      $(".total_amount").text(`$${parseInt(TotalOptions)+parseInt(DueatClosing)}`);
      $(".totalamount").text(`$${parseInt(TotalOptions)+parseInt(DueatClosing)}`);
      $('.packagename').text($("#package_name").html());
      $('.package_value').text("$" + package_amount);
    });
    var chVal = document.getElementsByClassName('value_checkbox');
    var attrp = [];
    // $(".value_checkbox").change((e) => {
    //   attrp = [];
    //   for (var i = 0; i < chVal.length; i++) {
    //     if (chVal[i].checked) {
    //       attrp.push(chVal[i].id)
    //     }
    //   }
    //   let yyu = attrp.toString();
    //   let sum = yyu.split(',').reduce(function(sum, cur) {
    //     var n = cur.match(/(\d+)/);
    //     return sum + (n && parseInt(n[1], 10) || 0);
    //   }, 0);
    //   $(".total_sum").text('$' + sum);
    //   $("#total_sum1").val(sum);

    //   var a = parseFloat($("#get_package_value").text().replace("$", ""));
    //   var b = parseFloat($(".total_sum").text().replace("$", ""));
    //   var get = a + b;

    //   $(".total_amount").text("$" + get);
    //   $("#total_amount1").val(get);
    // });

    // append data js

    // tab_5
    $(".points2").on('click', function() {
      var pre = $("#pre").val();
      $('.name').text(pre);
    });
    $(".points2").on('click', function() {
      var preimum = $("#preimum").val();
      $('.name').text(preimum);
    });

    // tab_1 data
    $("#tab_1").on('click', function() {
      //address
      var address = $("#ship-address").val();
      if (address == '') {
        $(".proAddAdd").text("N/A");
      } else {
        $(".proAddAdd").text(address);
      }

      // Locbox
      var Lockbox = $("#Lockbox").val();
      if (Lockbox == '') {
        $(".lobox").text("N/A");
      } else {
        $(".lobox").text(Lockbox);
      }

      // sentri
      var sentri = $("#SentriLock").val();
      if (sentri == '') {
        $(".sentri").text("N/A");
      } else {
        $(".sentri").text(sentri);
      }

      // garage
      var garage = $("#Garage").val();
      if (garage == '') {
        $(".garage").text("N/A");
      } else {
        $(".garage").text(garage);
      }

      // supracbscode
      var supracbscode = $("#SupraCBSCode").val();
      if (supracbscode == '') {
        $(".supracbscode").text("N/A");
      } else {
        $(".supracbscode").text(supracbscode);
      }

      // codeinfo
      var codeinfo = $("#CodeInfo").val();
      if (codeinfo == '') {
        $(".codeinfo").text("N/A");
      } else {
        $(".codeinfo").text(codeinfo);
      }

      // locationOflockbox
      var locationOflockbox = $("#LocationOfLockbox").val();
      if (locationOflockbox == '') {
        $(".locationOflockbox").text("N/A");
      } else {
        $(".locationOflockbox").text(locationOflockbox);
      }


    });

    // tab_2 data
    $("#tab_2").on('click', function() {
      // type resd
      var type_resd = $("#type_residence").val();
      $(".property_type").text(type_resd);
      // sqft
      var sqft = $("#squareft option:selected").html();
      $(".sqft").text(sqft);
      // mls
      var msl = $("#mls").val();
      if (msl == '') {
        $(".ml").text("N/A");
      } else {
        $(".ml").text(msl);
      }

      // bathroom
      var bathroom = $("#bathroom").val();
      $(".bathr").text(bathroom);
      // fullbathroom
      var full_bathroom = $("#fullbathroom").val();
      if (full_bathroom == 'infinty') {
        $(".fullbath").text(0);
      } else {

        $(".fullbath").text(full_bathroom);
      }
      // bedroom
      var bed_room = $("#bedrooms").val();
      $(".bedr").text(bed_room);
      // abc
      // var type_resd = $("#Lockbox").val();
    });

    // Who is responsible for payment
    $("#buyer").on('click', function() {
      var buyer = $("#buyer").val();
      $(".buy").text(buyer);
    });

    $("#seller").on('click', function() {
      var seller = $("#seller").val();
      $(".buy").text(seller);
    });

    $("#both").on('click', function() {
      var both = $("#both").val();
      $(".buy").text(both);
    });

    // Who are representing
    $("#buyer_repe").on('click', function() {
      var buyer_repe = $("#buyer_repe").val();
      $(".representing").text(buyer_repe);
    });

    $("#seller_repe").on('click', function() {
      var seller_repe = $("#seller_repe").val();
      $(".representing").text(seller_repe);
    });

    $("#agent").on('click', function() {
      var agent = $("#agent").val();
      $(".representing").text(agent);
    });

    // tab_3 data
    $("#tab_3").on('click', function() {
      // agent office
      var agentoffice = $("#agentoffice").val();
      $(".agentoffice").text(agentoffice);

      //agent name
      var agentname = $("#agentname").val();
      $(".agentname").text(agentname);
    });

    // tab_4 data
    $("#tab_4").on('click', function() {
      // closingdatetime
      var closingdatetime = $("#closingdatetime").val();
      $(".closingdate").text(closingdatetime.split('-')[1] + '/' + closingdatetime.split('-')[2] + '/' + closingdatetime.split('-')[0]);

      // closingfile
      var closingfile = $("#closing_file").val();
      $(".closingfile").text(closingfile.split('-')[1] + '/' + closingfile.split('-')[2] + '/' + closingfile.split('-')[0]);

      $('#closingdateold').val(closingfile);

      // closingtitle
      var closingtitle = $("#title_company").val();
      $(".titlecompany").text(closingtitle);

      // closingemail
      var closingemail = $("#closingemail").val();
      $(".titlecompanyemail").text(closingemail);

      // closingphonenumber
      var closingphonenumber = $("#title_company_phone_number").val();
      $(".titlecompanyphonenumber").text(closingphonenumber);
      // agentname
      var agentname = $("#time").val();
      const timeString12hr = new Date('1970-01-01T' + agentname + 'Z')
        .toLocaleTimeString('en-US', {
          timeZone: 'UTC',
          hour12: true,
          hour: 'numeric',
          minute: 'numeric'
        });

      $(".agentofficer").text(timeString12hr);

      $("#closingoldtime").val(agentname);

    });



    $(".points2").on('click', function() {
      var amount = $("#basic").html();
      $('.name').text(basic);
    });
    $('#save_value').on('click', function() {
      var val = [];
      var label = $('.checkboxcustom');
      for (var i = 0; i < label.length; i++) {
        var par = label[i].parentNode.parentNode.nextElementSibling;
        if (label[i].children[0].checked) {
          val.push({
            data: label[i].outerText,
            val: $(par).find('input').val()
          });
        }
      }
      $('.adds').empty();
      val.forEach(element => {
        $('.adds').append(`${element.data} x ${element.val}.` + '<br/>')
      });
      var pkg_name = $("#package_name").html();
      // console.log(pkg_name);

      $('.packagename').text(pkg_name);
    })

    // $('.BuyerRep').addClass('disabledBtn');
    // $('.SellerRep').removeClass('disabledBtn');
    // $('.BothRep').removeClass('disabledBtn');

    function emptyagent() {
      $('.forBoth input').each((i, e) => {
        e.classList.remove('validation')
      })
      $('.forBuyer input').each((i, e) => {
        e.classList.remove('validation')
      })
      $('.forSeller input').each((i, e) => {
        e.classList.remove('validation')
      })
    }

    if ($('.reprenstTabRadio22 label #agent').is(':checked')) {
      emptyagent()
      $('.forBoth input.required0').each((i, e) => {
        e.classList.add('validation')
      })
    }
    if ($('.reprenstTabRadio22 label #buyer_repe').is(':checked')) {
      emptyagent()
      $('.forBuyer input.required0').each((i, e) => {
        e.classList.add('validation')
      })
    }
    if ($('.reprenstTabRadio22 label #seller_repe').is(':checked')) {
      emptyagent()
      $('.forSeller input.required0').each((i, e) => {
        e.classList.add('validation')
      })
    }
    $('.reprenstTabRadio22.ghnjk label input').change((e) => {

      currentAgentType = e.target.value;
      console.log(currentAgentType);

      e.target.value == 'Seller' ?
        ($('.forBoth').css('display', 'none'), $('.forBuyer').css('display', 'none'), $('.forSeller').css('display', 'block')) :
        e.target.value == 'Buyer' ?
        ($('.forBoth').css('display', 'none'), $('.forBuyer').css('display', 'block'), $('.forSeller').css('display', 'none')) :
        e.target.value == 'Both' ?
        ($('.forBoth').css('display', 'block'), $('.forBuyer').css('display', 'none'), $('.forSeller').css('display', 'none')) :
        null

      var uio = [
        '.forBoth',
        '.forBuyer',
        '.forSeller'
      ]
      uio.map((val) => {
        $(val).find('input').each((i, e) => {
          e.value = null
        })
      })
      emptyagent()
      $('.for' + currentAgentType + ' input.required0').each((i, e) => {
        e.classList.add('validation')
      })

    })
  });
  var Agentydata = [];

  function chkAgentdata(con) {
    Agentydata = [];

    var inps = $('.for' + con).find('input');

    if (con != 'Both') {
      Agentydata.push({
        'type': con,
        'data': []
      }, {
        'type': 'Cooperating Agents',
        'data': []
      }, {
        'type': con == 'Seller' ? 'Buyer' : 'Seller',
        'data': []
      }, )
      console.log('yes')
      for (var i = 0; i < inps.length; i++) {
        if (i < 4) {
          Agentydata[0].data.push({
            [inps[i].placeholder]: inps[i].value === null || inps[i].value === '' ? 'N/A' : inps[i].value
          })
        }
        if (i > 3 && i < 8) {
          Agentydata[1].data.push({
            [inps[i].placeholder]: inps[i].value === null || inps[i].value === '' ? 'N/A' : inps[i].value
          })
        }
        if (i > 7 && i < 12) {
          Agentydata[2].data.push({
            [inps[i].placeholder]: inps[i].value === null || inps[i].value === '' ? 'N/A' : inps[i].value
          })
        }
      }
    } else {
      Agentydata.push({
        'type': 'Buyer Information',
        'data': []
      }, {
        'type': 'Seller Information',
        'data': []
      })

      for (var i = 0; i < inps.length; i++) {
        if (i < 4) {
          Agentydata[0].data.push({
            [inps[i].placeholder]: inps[i].value === null || inps[i].value === '' ? 'N/A' : inps[i].value
          })
        }
        if (i > 3 && i < 8) {
          Agentydata[1].data.push({
            [inps[i].placeholder]: inps[i].value === null || inps[i].value === '' ? 'N/A' : inps[i].value
          })
        }
      }
    }

    const printARRData = () => {
      console.log(Agentydata);
      return (
        Agentydata.map((val, i) => {
          return (
            `
            <div class="d-flex ${val.type}-inf ${i != 0 ? 'mt-3' : null}">
              <div class="nameFixDiv">
                  <h6 class="proNameP">${val.type} Information</h6>
              </div>
              <div class="contentDiv d-flex align-items-center flex-wrap">
                <div class="" style="">
                    <p class='propertyAddTab3h'>First Name</p>
                    <p class='propertyAddTab3p'>${val.data[0]['First Name']}</p>
                </div>
                <div class="" style="">
                    <p class='propertyAddTab3h'>Last Name</p>
                    <p class='propertyAddTab3p'>${val.data[1]['Last Name']}</p>
                </div>
                <div class="" style="">
                    <p class='propertyAddTab3h'>Email</p>
                    <p class='propertyAddTab3p'>${val.data[2]['Email']}</p>
                </div>
                <div class="" style="">
                    <p class='propertyAddTab3h'>Phone</p>
                    <p class='propertyAddTab3p'>${val.data[3]['Phone']}</p>
                </div>
              </div>
            </div>
            `
          )
        })
      )
    }

    $('.agentInfoos .duplex').empty()

    $('.agentInfoos .duplex').append(`
      ${printARRData()}
    `)

    var t = document.getElementsByClassName('uniComnma')[0]
    window.localStorage.setItem('arrty', t.innerHTML.replace(/,/g, ''));
    removecomma();
  }



  function removecomma() {
    var t = document.getElementsByClassName('uniComnma')[0]
    if (t == undefined) {
      return false
    }
    $('.uniComnma').html(window.localStorage.getItem('arrty'))
  }

  function changeTabsWithData() {
    chkAgentdata(currentAgentType)
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
    // a.setAttribute("class", "select-selected");
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

  var amountArr = [];

  function changeInpy(e, c, i, id) {
    $('.' + c + '.' + i).find('.selctInpp').find('input[type=number]').removeClass('validation');
    var amount;
    if (e.target.checked) {
      $('.' + c + '.' + i).find('.selctInpp').css({
        'opacity': '1',
        'pointerEvents': 'all'
      });
      $('.' + c + '.' + i).find('.selctInpp').find('input[type=number]').val(1);
      amount = parseInt($('.' + c + '.' + i).find('.selctInpp .individualAmount').text().split('$')[1])
      amountArr.push({
        'id': id,
        'val': amount,
        'noOfTerms': parseInt($('.' + c + '.' + i).find('.selctInpp').find('input[type=number]').val())
      })
    } else {
      $('.' + c + '.' + i).find('.selctInpp').css({
        'opacity': '0.5',
        'pointerEvents': 'none'
      })
      $('.' + c + '.' + i).find('.selctInpp').find('input[type=number]').val(0);

      amountArr.forEach((element, ik) => {
        if (element.id == id) {
          amountArr.splice(ik, 1)
        }
      });
      console.log(id)

      var amountCr = parseInt(e.target.id.split('$')[1])
      $(e.target.parentNode.parentNode.parentNode.parentNode).find('.individualAmount').text(`$` + amountCr)
    }
    sumTheAm()
  }

  function showMe(e, c, i, id) {
    var amountCr = parseInt($(e.target.parentNode.previousElementSibling).find('.checkboxcustom').text().split('$')[1]),
      noTurn = parseInt(e.target.value);
    console.log(e.target.checked)
    if (!e.target.checked) {
      if (e.target.value < 0) {
        e.target.value = '';
      }
      if ((e.target.value) == '' || (e.target.value) < 1) {
        $('.' + c + '.' + i).find('.selctInpp').find('input[type=number]').addClass('validation');
        //   e.target.value = 0
      } else {
        $('.' + c + '.' + i).find('.selctInpp').find('input[type=number]').removeClass('validation');
      }
    } else {
      $('.' + c + '.' + i).find('.selctInpp').find('input[type=number]').removeClass('validation');
    }

    $(e.target.nextElementSibling).text(`$` + amountCr * Number(e.target.value))

    var ai = $('.' + c + '.' + i).find('.selctInpp').find('input[type=number]').val()
    if (ai == '') {
      // amountArr[i].noOfTerms = 1
      amountArr.map((val, io) => {
        if (amountArr[io].id == id) {
          amountArr[io].noOfTerms = 0
        }
      })
    } else {
      amountArr.map((val, io) => {
        if (amountArr[io].id == id) {
          amountArr[io].noOfTerms = parseInt(ai);
        }
      })
      // amountArr[i].noOfTerms = parseInt(ai);
    }
    console.log(amountArr)
    sumTheAm()
  }

  function sumTheAm() {
    var totalSums = 0;
    amountArr.forEach(element => {
      totalSums += element.val * element.noOfTerms
    });

    TotalOptions = totalSums
    $("#aditionalAmount").val(TotalOptions);
    $(".total_sum").text(`$${TotalOptions}`);
    $(".total_amount").text(`$${parseInt(TotalOptions)+parseInt(DueatClosing)}`);
    $(".totalamount").text(`$${parseInt(TotalOptions)+parseInt(DueatClosing)}`);
    $("#totalPackageAmount").val(parseInt(TotalOptions) + parseInt(DueatClosing));
    // $("#totalPackageAmount").val(parseInt(DueatClosing));
    $('.packagename').text($("#package_name").html());
    $('.package_value').text("$" + package_amount);
  }

  function backTo1(e) {
    // if (parseInt(e.target.value) < 0 || e.target.value == '') {
    //    e.target.value = 0
    // }
  }
  // dropdown select2
  var $disabledResults = $(".js-example-disabled-results");
  $disabledResults.select2({
    placeholder: "Property Access Information",
    allowClear: true
  });
  $('.js-example-disabled-results').val(''); // .js-example-disabled-results the option with a value of 'US'
  $('.js-example-disabled-results').trigger('change'); // Notify any JS components that the value changed
  // $(".js-example-disabled-results").select2({
  //   placeholder: "LockBox",
  //         allowClear: true
  //     });

  $('.ghnjk input').change((e) => {
    console.log(e.target.value)
    $('#AgentRep0 label').trigger('click')
  })
</script>

<script>
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
      // $(".time-field").addClass("hide")
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



  var ty = $(".selectedTwoo").find(':selected').val();
</script>

<script>
  function handler(e) {
    var date = e.target.value;
    console.log(date)
    var someDate = new Date();
    someDate.setDate(someDate.getDate() + 5); //number  of days to add, e.x. 15 days
    var dateFormated = someDate.toISOString().substr(0, 10);
    console.log(dateFormated);
    if (date < dateFormated) {
      // $('#myModal').modal(options)
      $('#date_modal_btn').trigger('click');
      console.log('true');
    } else {
      console.log('false');
    }
    // alert(e.target.value);
  }
</script>
<script>
  $(function() {
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if (month < 10)
      month = '0' + month.toString();
    if (day < 10)
      day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#closingdatetime').attr('min', maxDate);
  });;
</script>