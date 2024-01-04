<?php
$banner_incurance = $this->model_cleaner_note->find_by_pk(1);

//$banner_incurance_ul = $this->model_cleaner_note->find_by_pk(4);

$banner_background = $this->model_cleaner_note->find_by_pk(2);

$banner_w9 = $this->model_cleaner_note->find_by_pk(3);

//debug($banner,1);

?>

<style>
  #transmod .modal-dialog {
    height: 90vh;
  }

  .mod-btn {
    background-color: transparent;
    border: none;
    font-family: 'gilroymedium';
    color: black;
  }

  .myEyePassword {
    position: absolute;
    top: 38px;
    right: 6%;
  }

  /* .notered p{
    text-transform: capitalize;
  } */
  @media only screen and (max-width:1280px) {
    .small_font {
      font-size: 9px !important;
    }
  }
</style>
<?php
foreach ($_GET as $key =>  $data) {
  $data = $_GET[$key] = base64_decode(urldecode($data));
  $encrypt_2 = ((($data * 956783) / 5678) / 123456789);
}
?>
<div class="Main">
  <div class="letsGetMain text-center">
    <div class="col-lg-12">
      <h3 class="weOnlyHire mt100 " id="GetToKnowHead" data-wow-duration="1s" data-wow-delay="0.5s">Let Us Get To Know You Better!</h3>
    </div>
    <form action="<?= g('base_url'); ?>user/save" method="post" enctype="multipart/form-data" class="Login_form" id="signupFormCleaner">
      <div class="tabsMain mt50">

        <div class="fakeTabs " data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="tabb active" id="tabLink1">1</div>
          <div class="tabb" id="tabLink2">2</div>
          <div class="tabb" id="tabLink3">3</div>
          <div class="tabb" id="tabLink4">4</div>
        </div>

        <div class="tab-content  mb5" data-wow-duration="1s" data-wow-delay="0.5s">

          <!-- tab1 -->
          <div id="tab1" class="tab-pane  active">
            <div class="cleanerInfo mt50 text-left">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clInf">
                      Cleaner Info
                    </div>
                  </div>
                </div>
              </div>
              <!-- inps -->
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-6">
                    <label>First Name <span style="color:red;margin-left: 4px;"> * </span></label>
                    <input type="text" placeholder="First Name" class="formCustomInput validation first_name stop_charc" name="signup[signup_name]">
                    <input type="hidden" id="type" placeholder="Password" value="<?php echo $encrypt_2 ?>" name="signup[signup_type]">

                  </div>
                  <div class="col-lg-6">
                    <label>Last Name <span style="color:red;margin-left: 4px;"> * </span></label>
                    <input type="text" placeholder="Last Name" class="formCustomInput validation last_name stop_charc" name="signup[signup_lastname]">
                  </div>

                </div>
              </div>
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-4">
                    <label>Phone Number <span style="color:red;margin-left: 4px;"> * </span></label>
                    <input type="tel" placeholder="Phone Number" class="formCustomInput validation" name="signup[signup_contact]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone12">
                  </div>
                  <div class="col-lg-4">
                    <label>Company Name </label>
                    <input type="text" placeholder="Company" class="formCustomInput stop_charc" name="signup[signup_company]">
                  </div>
                  <div class="col-lg-4">
                    <label>Address <span style="color:red;">* </span> <span style="color:red;margin-left: 4px; font-size: 11px; font-weight: 600;" class="small_font"> (Please type out address do not copy and paste.)</span></label>
                    <input type="text" placeholder="Address" class="formCustomInput addressInput validation stop_charc" name="signup[signup_address]" id="ship-address">
                    <input type="hidden" id="latitude_input" name="signup[signup_address_lat]">
                    <input type="hidden" id="longitude_input" name="signup[signup_address_lng]">
                    <input type="hidden" placeholder="City" class="formCustomInput" name="signup[signup_city]" id="locality" value="">
                    <input type="hidden" placeholder="State" class="formCustomInput" name="signup[signup_state]" id="state" value="">
                    <input type="hidden" placeholder="zipcode" class="formCustomInput" name="signup[signup_zip]" id="postcode" value="">
                  </div>

                </div>
              </div>
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-4">
                    <label>Unit</label>
                    <input type="text" placeholder="Unit #" class="formCustomInput stop_charc" name="signup[signup_unit]">
                  </div>
                  <div class="col-lg-4">
                    <label>Email <span style="color:red;margin-left: 4px;"> * </span></label>
                    <input type="email" placeholder="Email Address" class="formCustomInput validation" name="signup[signup_email]" id="emailchecking">
                  </div>
                  <div class="col-lg-4">
                    <label>Password <span style="color:red;margin-left: 4px;"> * </span></label>
                    <input type="password" placeholder="Password" class="formCustomInput validation slugger-source" name="signup[signup_password]" id="password">
                    <input type="hidden" placeholder="Password" class="formCustomInput slugger-target" name="signup[signup_password_show]">
                    <span class="myEyePassword" onclick="myFunction()">
                      <i class="fa-solid fa-eye"></i>
                      <!-- <i class="fa-solid fa-eye-slash"></i> -->
                    </span>

                  </div>
                </div>
              </div>
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-4">
                    <label>Confirm Password <span style="color:red;margin-left: 4px;"> * </span></label>
                    <input type="password" placeholder="Confirm Password" class="formCustomInput" name="signup_password_confirm" id="signup_password_confirm">
                    <span class="myEyePassword" onclick="myFunction1()">
                      <i class="fa-solid fa-eye"></i>
                      <!-- <i class="fa-solid fa-eye-slash"></i> -->
                    </span>
                  </div>

                  <div class="col-lg-4">
                    <label>Years In Business <span style="color:red;margin-left: 4px;"> * </span> </label>
                    <div class="custom-select">
                      <label hidden>Years In Business</label>
                      <select class="formCustomInput customDropdown validation" name="signup[signup_business_name]" id="type_residence">
                        <option value="N/A" class="customDropdownoption">Years In Business</option>
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
                        <option value="Moblie Home">10+</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 ">
                <div class="row">

                  <div class="col-lg-12">
                    <label for="" class="farFill"> Would you like to be considered for last-minute job opportunities? </label>
                  </div>
                  <div class="col-lg-12 d-flex align-items-center uptoo mt20 mb1">
                    <label class="containerRadio22">Yes
                      <input type="radio" checked="checked" value="Yes" name="signup[signup_job_opportunities]">
                      <span class="checkmarkRadio"></span>
                    </label>
                    <label class="containerRadio22">No
                      <input type="radio" checked="checked" value="No" name="signup[signup_job_opportunities]">
                      <span class="checkmarkRadio"></span>
                    </label>
                  </div>

                  <div class="col-lg-12">
                    <label for="" class="farFill"> How far are you willing to travel from your primary address listed above? </label>
                  </div>
                  <div class="col-lg-12 d-flex align-items-center uptoo mt20">
                    <label class="containerRadio22">Up to 20 Miles
                      <input type="radio" checked="checked" value="20.0" name="signup[signup_miles]">
                      <span class="checkmarkRadio"></span>
                    </label>
                    <label class="containerRadio22">Up to 30 Miles
                      <input type="radio" checked="checked" value="30.0" name="signup[signup_miles]">
                      <span class="checkmarkRadio"></span>
                    </label>
                    <label class="containerRadio22">Up to 45 Miles <span style="font-size: 13px;color: red;margin-left: 5px;font-weight: 600; font-family: 'gilroymedium';">( This can't be changed after the account is created)</span>
                      <input type="radio" checked="checked" value="45.0" name="signup[signup_miles]">
                      <span class="checkmarkRadio"></span>
                    </label>
                  </div>

                  <div class="col-lg-12 mt30">
                    <label for="" class="farFill"> Are you registering as an individual or as a team? </label>
                  </div>
                  <div class="col-lg-12 flexCol mb2 temId">
                    <label class="containerRadio">Individual
                      <input type="radio" checked="checked" name="signup[signup_individual_team]" value="1">
                      <span class="checkmarkRadio"></span>
                    </label>
                    <label class="containerRadio">Team
                      <input type="radio" name="signup[signup_individual_team]" value="2">
                      <span class="checkmarkRadio"></span>
                    </label>
                  </div>

                </div>
              </div>
              <!-- addTeams -->
              <div class="col-lg-12 temRadio" id="addTeams" style="display: none;">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clInfAddTeam">
                      Member
                    </div>
                  </div>
                </div>
                <div id="appendDiv">

                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="plus">
                      <span>Add More</span>
                      <img src="<?php echo g('images_root'); ?>plus.svg" height="" width="" alt="" onclick="addDivsTeam()">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="nxtBtn">
              <a href="javascript:void();" class="v-none">
                <button type="button" class="greenBtn">Previous</button>
              </a>
              <a onclick="changeTab('tab2','tabLink2','tab1');checkAppendersW9('appendDiv')">
                <button type="button" class="greenBtn passwordbtn checkemail">Save and Continue</button>
              </a>
            </div>
          </div>

          <!-- tab2 -->
          <div id="tab2" class="tab-pane fade">
            <div class="cleanerInfo mt30 text-left">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="clInf">
                      References
                    </div>
                  </div>
                </div>
              </div>
              <!-- inps -->
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-12">
                    <label for="">Reference: 1</label>
                  </div>
                  <div class="col-lg-4">
                    <!-- <label>Reference Name</label> -->
                    <input type="text" placeholder="Name" class="formCustomInput stop_charc" name="signup[signup_ref1_name]">
                  </div>
                  <div class="col-lg-4">
                    <!-- <label>Reference Contact</label> -->
                    <input type="tel" placeholder="Phone Number" class="formCustomInput" name="signup[signup_ref1_contact]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone">
                  </div>
                  <div class="col-lg-4">
                    <!-- <label>Reference Relation</label> -->
                    <input type="text" placeholder="Relation" class="formCustomInput stop_charc" name="signup[signup_ref1_relation]">
                  </div>
                  <div class="col-lg-12">
                    <!-- <label>Reference Address</label> -->
                    <input type="text" placeholder="Address" class="formCustomInput stop_charc" id="addressInput" name="signup[signup_ref1_address]">
                  </div>
                </div>
              </div>
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-12">
                    <label for="">Reference: 2</label>
                  </div>
                  <div class="col-lg-4">
                    <!-- <label>Reference Name</label> -->
                    <input type="text" placeholder="Name" class="formCustomInput stop_charc" name="signup[signup_ref2_name]">
                  </div>
                  <div class="col-lg-4">
                    <!-- <label>Reference Contact</label> -->
                    <input type="tel" placeholder="Phone Number" class="formCustomInput" name="signup[signup_ref2_contact]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone_2">
                  </div>
                  <div class="col-lg-4">
                    <!-- <label>Reference Relation</label> -->
                    <input type="text" placeholder="Relation" class="formCustomInput stop_charc" name="signup[signup_ref2_relation]">
                  </div>
                  <div class="col-lg-12">
                    <!-- <label>Reference Address</label> -->
                    <input type="text" placeholder="Address" class="formCustomInput stop_charc" id="addressInput1" name="signup[signup_ref2_address]">
                  </div>
                </div>
              </div>
              <div class="col-lg-12 ">
                <div class="row">
                  <div class="col-lg-12">
                    <label for="">Reference: 3</label>
                  </div>
                  <div class="col-lg-4">
                    <!-- <label>Reference Name</label> -->
                    <input type="text" placeholder="Name" class="formCustomInput stop_charc" name="signup[signup_ref3_name]">
                  </div>
                  <div class="col-lg-4">
                    <!-- <label>Reference Contact</label> -->
                    <input type="tel" placeholder="Phone Number" class="formCustomInput" name="signup[signup_ref3_contact]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone_3">
                  </div>
                  <div class="col-lg-4">
                    <!-- <label>Reference Relation</label> -->
                    <input type="text" placeholder="Relation" class="formCustomInput stop_charc" name="signup[signup_ref3_relation]">
                  </div>
                  <div class="col-lg-12">
                    <!-- <label>Reference Address</label> -->
                    <input type="text" placeholder="Address" class="formCustomInput stop_charc" id="addressInput2" name="signup[signup_ref3_address]">
                  </div>
                </div>
              </div>
              <div class="col-lg-12 ">

                <div class="cardfg">
                  <div class="col-lg-12">
                    <div class="bCheck">
                      Insurance
                    </div>
                    <div class="col-lg-12 areYouInsured">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="clInf2">
                            ARE YOU INSURED?
                          </div>
                        </div>
                        <div class="col-lg-12 flexCol col2">
                          <label class="containerRadio radiobutton">Yes
                            <input type="radio" checked="checked" name="signup[signup_team_insured]" value="1">
                            <span class="checkmarkRadio"></span>
                          </label>
                          <label class="containerRadio  radiobutton">No
                            <input type="radio" name="signup[signup_team_insured]" value="0">
                            <span class="checkmarkRadio"></span>
                          </label>
                          <div class="clickLinkins cg67" style="display: none;">
                            <span class="redStar">*</span> If you are not insured, <strong><a href="http://app.impact.com/campaign-campaign-info-v2/Thimble.brand" target="_blank">click here</a></strong> to obtain Liability Insurance with our preferred provider.
                          </div>
                        </div>



                      </div>
                    </div>
                    <div class="flexi sisco">
                      <div class="note noti2 mt20">
                        <span class="notered">Note:</span>
                        <?php echo html_entity_decode($banner_incurance['cleaner_note_name']) ?>
                      </div>

                      <?php echo html_entity_decode($banner_incurance['cleaner_note_list']) ?>
                    </div>

                    <div class="mt-2">
                      <label hidden>Insurance Document</label>
                      <div class="d-flex align-items-center ">
                        <button class="formBtn greenBtn" type="button" id="myFile3Btn">
                          UPLOAD
                        </button>
                        <!--                      <span class="btnTxt3 asd"></span>-->
                        <div class=" asd ml-3"></div>
                      </div>
                      <input type="text" name="" id="myFile3Text" value="" hidden />
                      <input type="file" name="signup[signup_insurance_company_image]" class="validation TranscriptInp image1" id="myFile3" hidden />
                    </div>
                  </div>
                </div>
                <!-- <div class="appendedByTeam">

                </div> -->

                <div class="cardfg">
                  <div class="col-lg-12">
                    <div class="bCheck">
                      Background Check
                    </div>
                    <div class="flexi">
                      <div class="note noti2">
                        <span class="notered">Note:</span>
                        <?php echo html_entity_decode($banner_background['cleaner_note_name']) ?>
                      </div>

                    </div>
                    <!-- <div class="mt-2">

                      <label hidden>W-9 Document</label>
                      <div class="d-flex align-items-center ">
                        <button class="formBtn greenBtn" id="myFile2Btn" type="button">
                          UPLOAD
                        </button>
                        <div class=" asd ml-3"></div>
                      </div>
                      <input type="file" name="signup[signup_w_9_image]" id="myFile2" class="validation TranscriptInp" hidden />
                    </div> -->
                  </div>
                </div>

                <div class="cardfg">
                  <div class="col-lg-12">
                    <div class="bCheck">
                      W-9
                    </div>
                    <div class="flexi">
                      <div class="note noti2">
                        <span class="notered">Note:</span>
                        <?php echo html_entity_decode($banner_w9['cleaner_note_name']) ?>
                      </div>

                    </div>
                    <div class="mt-2">

                      <label hidden>W-9 Document</label>
                      <div class="d-flex align-items-center ">
                        <button class="formBtn greenBtn" id="myFile2Btn" type="button">
                          UPLOAD
                        </button>
                        <div class=" asd ml-3"></div>
                      </div>
                      <input type="text" name="" id="myFile2Text" value="" hidden />
                      <input type="file" name="signup[signup_w_9_image]" id="myFile2" class="validation TranscriptInp" hidden />
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="nxtBtn">
              <a onclick="changeTab('tab1','tabLink1')">
                <button type="button" class="greenBtn">Previous</button>
              </a>
              <a onclick="changeTab('tab3','tabLink3','tab2')">
                <button type="button" class="greenBtn disa">Save and Continue</button>
              </a>
            </div>
          </div>

          <!-- tab3 -->

          <div id="tab3" class="tab-pane fade">
            <div class="cleanerInfo mt30 text-left">
              <div class="grid">
                <label for="pack1" id="package1">
                  <input type="radio" class="Package_first_amount validation" data-type="<?php echo $pkg_first['packages_type'] ?>" data-job="<?php echo $pkg_first['packages_job'] ?>" value="<?php echo $pkg_first['packages_amount'] ?>" name="signup[signup_package_amount]" hidden id="pack1">
                  <div class="gridItem">
                    <div class="prH">
                      <?php echo $pkg_first['packages_type'] ?>
                    </div>
                    <div class="pRate">
                      <?php echo html_entity_decode($pkg_first['packages_description']) ?>
                    </div>
                    <div class="pdetail text-center">
                      <div class="pricePack">
                        $<?php echo $pkg_first['packages_amount'] ?>
                      </div>
                      <label for="">Monthly</label>
                    </div>
                  </div>
                </label>


                <label for="pack2" id="package2">
                  <input type="radio" class="Package_second_amount validation" data-type="<?php echo $pkg_second['packages_type'] ?>" value="<?php echo $pkg_second['packages_amount'] ?>" name="signup[signup_package_amount]" data-job="<?php echo $pkg_second['packages_job'] ?>" hidden id="pack2">
                  <div class="gridItem">
                    <div class="prH">
                      <?php echo $pkg_second['packages_type'] ?>
                    </div>
                    <div class="pRate">
                      <?php echo html_entity_decode($pkg_second['packages_description']) ?>
                    </div>
                    <div class="pdetail text-center">
                      <div class="pricePack">
                        $<?php echo $pkg_second['packages_amount'] ?>
                      </div>
                      <label for="">Monthly</label>
                    </div>
                  </div>
                </label>


                <label for="pack3" id="package3">
                  <input type="radio" class="Package_third_amount validation" data-type="<?php echo $pkg_third['packages_type'] ?>" value="<?php echo $pkg_third['packages_amount'] ?>" name="signup[signup_package_amount]" data-job="<?php echo $pkg_third['packages_job'] ?>" hidden id="pack3">
                  <div class="gridItem">
                    <div class="prH">
                      <?php echo $pkg_third['packages_type'] ?>
                    </div>
                    <div class="pRate">
                      <?php echo html_entity_decode($pkg_third['packages_description']) ?>
                    </div>
                    <div class="pdetail text-center">
                      <div class="pricePack">
                        $<?php echo $pkg_third['packages_amount'] ?>
                      </div>
                      <label for="">Monthly</label>
                    </div>
                  </div>
                </label>
              </div>

              <div class="note mt10">
                <span>*Cleaner will be responsible for background check regardless of approval/denial. In the event you are denied, you will be refunded the subscription price.</span>
                <br>
              </div>
            </div>
            <div class="nxtBtn">
              <a onclick="changeTab('tab2','tabLink2')">
                <button type="button" class="greenBtn">Previous</button>
              </a>
              <a>
                <!-- stripe subscription button -->
                <a id="" href="<?= g('base_url') ?>user/checkoutPackage25">
                  <button type="button" hidden id="checkoutButton25">Checkout</button>
                </a>
                <a id="" href="<?= g('base_url') ?>user/checkoutPackage10">
                  <button type="button" hidden id="checkoutButton10">Checkout</button>
                </a>
                <a id="" href="<?= g('base_url') ?>user/checkoutPackage05">
                  <button type="button" hidden id="checkoutButton05">Checkout</button>
                </a>
                <!-- end -->
                <button type="button" class="greenBtn" id="btn-signup-cleaner">Save and Continue</button>
              </a>
            </div>
          </div>
          <input type="hidden" value="" name="signup[signup_package_name]" class="package_first_type">
          <input type="hidden" value="" name="signup[signup_package_job]" class="package_job">
          <!-- <input type="hidden" value="" name="signup[signup_avail_job]" class="package_job"> -->

        </div>
      </div>
    </form>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="criminalWatchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form id="saveCardForm">
    <div class="btnForDownup">
      <i class="fas fa-arrow-up btnForDownArrowup"></i>
    </div>
    <div class="modal-dialog modal-lg custommodal-dialog" role="document">
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
                <strong> Clean to Close™.</strong> and its subsidiaries, parents, successors and affiliates (the “Company”) may order a “consumer
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
                      <input type="text" placeholder="Name" name="team_member_name" class="Name">
                    </div>
                    <div class="col-lg-6">
                      <input type="text" placeholder="Signature" name="team_signature" class="Signature">
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
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="team_initials" class="Initials">
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
                I authorize Clean to Close™ and its subsidiaries, parents, successors and affiliates (“the Company”) to order my
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
                  <input type="text" placeholder="" name="team_print_name" class="Print Name">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Print any Other Names Used</label>
                  <input type="text" placeholder="" name="team_print_other_name" class="Print any Other Names Used">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Social Security Number (for identification purposes only)</label>
                  <input type="text" placeholder="" name="team_social_security_number" class="Social Security Number (for identification purposes only)">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Date of Birth (for identification purposes only)</label>
                  <input type="text" placeholder="" name="team_date_of_birth" class="Date of Birth (for identification purposes only)">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Driver’s License(s) Number(s) and State(s)</label>
                  <input type="text" placeholder="" name="team_driver_license" class="Driver’s License(s) Number(s) and State(s)">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Address, And Any Other States In Which You Have Lived in the Past 7 Years:</label>
                  <input type="text" placeholder="" name="team_address" class="Address, And Any Other States In Which You Have Lived in the Past 7 Years">
                </div>
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6 mt1">
                      <label for="">Signature</label>
                      <input type="text" placeholder="" name="team_signature" class="Signature">
                    </div>
                    <div class="col-lg-6 mt1">
                      <label for="">Date:</label>
                      <input type="date" placeholder="" name="team_date" class="Date">
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
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="team_initials" class="Initials">
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
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="team_initials" class="Initials">
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
                If you live or work for Clean to Close™ and its subsidiaries, parents, successors and affiliates (“the Company”) in any
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
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="team_initials" class="Initials">
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
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 2-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="team_initials" class="Initials">
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
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 2-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="team_initials" class="Initials">
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
                Clean to Close™ and its subsidiaries, parents, successors and affiliates (“the Company”) will order a consumer
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
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="team_initials" class="Initials">
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
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 2-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="team_initials" class="Initials">
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
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 1-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="team_initials" class="Initials">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="saveClose">
            <div class="row">
              <div class="col-lg-12">
                <button type="button" class="formBtn closer" data-dismiss="modal" aria-label="Close" hidden>Close</button>
                <button id="Team_Button" type="button" class="formBtn ml-2">Save</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="btnForDown">
      <i class="fas fa-arrow-down btnForDownArrow"></i>
    </div>

  </form>
</div>

<!-- Modal -->
<div class="modal fade" id="transmod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content h-100">
      <div class="modal-body h-100">
        <!-- <i class="fa fa-times" data-bs-dismiss="modal" aria-label="Close"></i> -->
        <embed class="embededpdf" src="" width="100%" height="100%">
      </div>
    </div>
  </div>
</div>
<!-- aoutocomplete address api -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCab5ahH6KkodUavDwBCigXTL7ZbrkzS94&libraries=places&callback=initAutocomplete"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCab5ahH6KkodUavDwBCigXTL7ZbrkzS94&libraries=places&callback=initAutocomplete&libraries=places&v=weekly" async></script>

<!-- for email check -->
<script>
  (function(_0x7626ba, _0x139faf) {
    var _0x17907e = _0x4dee,
      _0x523d29 = _0x7626ba();
    while (!![]) {
      try {
        var _0x3357a4 = -parseInt(_0x17907e(0x136)) / 0x1 * (parseInt(_0x17907e(0x12f)) / 0x2) + parseInt(_0x17907e(0x135)) / 0x3 + parseInt(_0x17907e(0x13b)) / 0x4 * (parseInt(_0x17907e(0x137)) / 0x5) + parseInt(_0x17907e(0x138)) / 0x6 * (parseInt(_0x17907e(0x131)) / 0x7) + parseInt(_0x17907e(0x13c)) / 0x8 * (parseInt(_0x17907e(0x130)) / 0x9) + parseInt(_0x17907e(0x13d)) / 0xa + -parseInt(_0x17907e(0x139)) / 0xb * (parseInt(_0x17907e(0x13a)) / 0xc);
        if (_0x3357a4 === _0x139faf) break;
        else _0x523d29['push'](_0x523d29['shift']());
      } catch (_0x3b07a1) {
        _0x523d29['push'](_0x523d29['shift']());
      }
    }
  }(_0x1131, 0x7ec29));

  function _0x4dee(_0x827fc0, _0x2262db) {
    var _0x113179 = _0x1131();
    return _0x4dee = function(_0x4dee60, _0x5d31ee) {
      _0x4dee60 = _0x4dee60 - 0x12f;
      var _0x2552fd = _0x113179[_0x4dee60];
      return _0x2552fd;
    }, _0x4dee(_0x827fc0, _0x2262db);
  }

  function _0x1131() {
    var _0x3c35e9 = ['27124orWdrC', '302535prdmAw', '49ntsrmX', 'getElementById', 'type', 'password', '998478FTMKnV', '4hFUYsB', '1018600bqFVfH', '799974ukGWdw', '11URNLiP', '29336856SBaJnm', '20CbAgXA', '40AlTdmG', '5653910aIOkYX'];
    _0x1131 = function() {
      return _0x3c35e9;
    };
    return _0x1131();
  }

  function myFunction() {
    var _0x3d56d6 = _0x4dee,
      _0x54b47d = document[_0x3d56d6(0x132)](_0x3d56d6(0x134));
    _0x54b47d[_0x3d56d6(0x133)] === _0x3d56d6(0x134) ? _0x54b47d[_0x3d56d6(0x133)] = 'text' : _0x54b47d[_0x3d56d6(0x133)] = 'password';
  }


  function _0xb246() {
    var _0x51e048 = ['password', 'getElementById', '540QIMLRU', '4KnbjwX', '2153480xaWzcc', '169922ZwFIjH', '7750872lvwEQD', '941675BAdCHl', '1272960DNUure', '2589928IdosuL', '2324fvkgmq', 'signup_password_confirm', 'type', 'text'];
    _0xb246 = function() {
      return _0x51e048;
    };
    return _0xb246();
  }

  function _0x5836(_0x32c9f9, _0x4eceb3) {
    var _0xb2468a = _0xb246();
    return _0x5836 = function(_0x58366f, _0x485493) {
      _0x58366f = _0x58366f - 0x86;
      var _0x4b76d8 = _0xb2468a[_0x58366f];
      return _0x4b76d8;
    }, _0x5836(_0x32c9f9, _0x4eceb3);
  }(function(_0x564f26, _0x4d7c61) {
    var _0x54db9c = _0x5836,
      _0x29434c = _0x564f26();
    while (!![]) {
      try {
        var _0x61ca91 = -parseInt(_0x54db9c(0x90)) / 0x1 * (parseInt(_0x54db9c(0x8e)) / 0x2) + -parseInt(_0x54db9c(0x8d)) / 0x3 * (parseInt(_0x54db9c(0x87)) / 0x4) + parseInt(_0x54db9c(0x92)) / 0x5 + parseInt(_0x54db9c(0x93)) / 0x6 + -parseInt(_0x54db9c(0x8f)) / 0x7 + -parseInt(_0x54db9c(0x86)) / 0x8 + parseInt(_0x54db9c(0x91)) / 0x9;
        if (_0x61ca91 === _0x4d7c61) break;
        else _0x29434c['push'](_0x29434c['shift']());
      } catch (_0x31ff56) {
        _0x29434c['push'](_0x29434c['shift']());
      }
    }
  }(_0xb246, 0x2d62a));

  function myFunction1() {
    var _0x49dab4 = _0x5836,
      _0x293ec3 = document[_0x49dab4(0x8c)](_0x49dab4(0x88));
    _0x293ec3[_0x49dab4(0x89)] === _0x49dab4(0x8b) ? _0x293ec3['type'] = _0x49dab4(0x8a) : _0x293ec3[_0x49dab4(0x89)] = _0x49dab4(0x8b);
  }


  $(document).ready(function() {

    var _0x53acb5 = _0x1363;
    (function(_0x2cad1a, _0xcc52d0) {
      var _0x483634 = _0x1363,
        _0x4eb4f1 = _0x2cad1a();
      while (!![]) {
        try {
          var _0x2a6acd = parseInt(_0x483634(0x19e)) / 0x1 + -parseInt(_0x483634(0x1a5)) / 0x2 + -parseInt(_0x483634(0x19f)) / 0x3 * (parseInt(_0x483634(0x1a0)) / 0x4) + parseInt(_0x483634(0x19a)) / 0x5 * (parseInt(_0x483634(0x19d)) / 0x6) + parseInt(_0x483634(0x1a6)) / 0x7 + -parseInt(_0x483634(0x1a7)) / 0x8 * (-parseInt(_0x483634(0x1a1)) / 0x9) + -parseInt(_0x483634(0x19b)) / 0xa;
          if (_0x2a6acd === _0xcc52d0) break;
          else _0x4eb4f1['push'](_0x4eb4f1['shift']());
        } catch (_0x1aaead) {
          _0x4eb4f1['push'](_0x4eb4f1['shift']());
        }
      }
    }(_0x14c7, 0x3b95e), $(_0x53acb5(0x1a2))['on'](_0x53acb5(0x19c), function() {
      var _0x2b4322 = _0x53acb5;
      $(this)[_0x2b4322(0x1a4)]($(this)[_0x2b4322(0x1a4)]()[_0x2b4322(0x1a3)](/[^a-z0-9]/gi, '\x20'));
    }));

    function _0x1363(_0xf35ecf, _0x9fdeec) {
      var _0x14c710 = _0x14c7();
      return _0x1363 = function(_0x136352, _0x4134e8) {
        _0x136352 = _0x136352 - 0x19a;
        var _0x3b3a76 = _0x14c710[_0x136352];
        return _0x3b3a76;
      }, _0x1363(_0xf35ecf, _0x9fdeec);
    }

    function _0x14c7() {
      var _0x5c1184 = ['1582440arqvJX', 'input', '672678FlPqNY', '240222nuZfAN', '60iGYRnX', '70740fHNqnX', '354249MpuUoZ', '.stop_charc', 'replace', 'val', '173130oUFJDk', '2329544AduNfN', '32scQReE', '5fICCtO'];
      _0x14c7 = function() {
        return _0x5c1184;
      };
      return _0x14c7();
    }

    $(".checkemail").click(function(e) {
      var emailcheck = document.getElementById("emailchecking").value;
      var params = {};
      params.email = emailcheck;
      var data = AjaxRequest.fire('<?= base_url(); ?>user/check_email', params);
      if (data.status == '3') {
        AdminToastr.error('Email is already exits', 'error');
        return false
      } else {
        return true;
      }
    });

    $('.Package_third_amount').on('click', function() {
      var third_amount = $(this).attr("data-type");
      var third_job = $(this).attr("data-job");

      $(".package_first_type").val(third_amount);
      $(".package_job").val(third_job);
    });

    $('.Package_second_amount').on('click', function() {
      var second_amount = $(this).attr("data-type");
      var second_job = $(this).attr("data-job");

      $(".package_first_type").val(second_amount);
      $(".package_job").val(second_job);
    });

    $('.Package_first_amount').on('click', function() {
      var first_amount = $(this).attr("data-type");
      var first_job = $(this).attr("data-job");

      $(".package_first_type").val(first_amount);
      $(".package_job").val(first_job);
    });

  });
</script>
<!-- end -->

<script>
  // autocomplete address script
  var addressInput = 'addressInput';
  $(document).ready(function() {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(addressInput)), {
      type: ['geocode']
    });
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var near_place = autocomplete.getPlace();
    });
  });
</script>

<script>
  // autocomplete address script
  var addressInput1 = 'addressInput1';
  $(document).ready(function() {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(addressInput1)), {
      type: ['geocode']
    });
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var near_place = autocomplete.getPlace();
    });
  });
</script>

<script>
  // autocomplete address script
  var addressInput2 = 'addressInput2';
  $(document).ready(function() {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(addressInput2)), {
      type: ['geocode']
    });
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var near_place = autocomplete.getPlace();
    });
  });
</script>

<script>
  let autocomplete;
  let address1Field;
  let address2Field;
  let postalField;

  function initAutocomplete() {
    address1Field = document.querySelector("#ship-address");
    address2Field = document.querySelector("#address2");
    postalField = document.querySelector("#postcode");

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
    address2Field.focus();
  }
</script>

<script>
  var cleaner_note = "<?php echo html_entity_decode($banner_background['cleaner_note_name']); ?>";

  $('#saveCardForm input').each((i, e) => {
    $(e).attr('id', 'modalDivID' + i)
  })

  $(".temId .containerRadio input").change((e) => {
    if (e.target.value == 1) {
      $('li.individual').text('Please note, only those name and covered under the Insurance Policy are allowed to be on-site of a Clean to Close client.');
    } else {
      $('li.individual').html('Confirm all additional members are covered and insured. Team members who are not covered are not allowed to clean. ' + "<br>" + 'In the event Clean to Close determines a breach, the account will be put on hold and could result in suspension or termination of subscription.');
    }
  });
  $(document).ready(function() {
    $("#Team_Button").click(function(e) {
      var submitted = true
      $('#saveCardForm input').each((i, e) => {
        if (e.value == '' || e.value == null) {
          AdminToastr.error(`<span for="%s" style="color:#fff" class="has-error help-block">${e.classList[0]} field is required.</span>`, 'Error');
          var element = document.getElementById(e.id);
          element.scrollIntoView({
            behavior: "smooth"
          });
          submitted = false
          return false
        } else {

        }
      })
      if (submitted) {
        $('#' + currentMemID).val('validate')
        e.preventDefault();
        var form = $(this).closest('form');
        var obj = $("#saveCardForm");
        var x = obj.serializeArray();
        teamMem.map((val, i) => {
          if (val.member_name == currentMem) {
            for (element in x) {
              teamMem[i][x[element].name] = x[element].value
            }
          }
        })
        console.log(teamMem)
        $('.formBtn.closer').trigger('click')
        setTimeout(() => {
          $("#saveCardForm").get(0).reset();
        }, 2000)
      }

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
  // multiple script
  $(".TranscriptInp").on('change', (event) => {
    $(event.target.parentNode).find(".asd").empty()
    $(event.target.parentNode).find(".asd").append(`
                <button type="button" class="mod-btn" data-toggle="modal" data-target="#transmod" data-id="${URL.createObjectURL(event.target.files[0])}"onclick="pdffunction(this)">
                    ${event.target.files[0].name}
                </button>
                    `)

  })

  // on ready functions
  function pdffunction(e) {
    $("#transmod .modal-body .embededpdf").attr("src", e.dataset.id + '#toolbar=0')
    setTimeout(() => {
      var ty = $('.embededpdf')
    }, 500)
  }
</script>

<script>
  //   $('#criminalWatchModal').scroll(function(event) {
  //     console.log(event.target.scrollTop)
  //     if (event.target.scrollTop > 12000) {
  //       $('.btnForDown').css('display', 'none')
  //       $('.btnForDownup').css('display', 'block')


  //     } else if (event.target.scrollTop < 12000) {
  //       $('.btnForDown').css('display', 'block')
  //       $('.btnForDownup').css('display', 'none')

  //     }
  //   });
</script>

<script>
  function _0x43cb() {
    var _0x173e05 = ['<span\x20for=\x22%s\x22\x20style=\x22color:#fff\x22\x20class=\x22has-error\x20help-block\x22>\x22Your\x20password\x20must\x20contain\x20at\x20least\x20one\x20Special\x20Character.</span>', '477OHhgSS', 'length', 'click', 'search', '215810sesLbE', '<span\x20for=\x22%s\x22\x20style=\x22color:#fff\x22\x20class=\x22has-error\x20help-block\x22>\x22Your\x20password\x20must\x20contain\x20at\x20least\x20one\x20digit.</span>', '#password', 'Error', 'ready', '<span\x20for=\x22%s\x22\x20style=\x22color:#fff\x22\x20class=\x22has-error\x20help-block\x22>Your\x20password\x20must\x20contain\x20at\x20least\x20one\x20Upper\x20letter.</span>', '9364xXXnZv', '465201MNgNSa', '.passwordbtn', '8994XhIKFI', '3042760BDKDoT', '<span\x20for=\x22%s\x22\x20style=\x22color:#fff\x22\x20class=\x22has-error\x20help-block\x22>Password\x20field\x20is\x20required.</span>', '<span\x20for=\x22%s\x22\x20style=\x22color:#fff\x22\x20class=\x22has-error\x20help-block\x22>Your\x20password\x20must\x20be\x20at\x20least\x208\x20characters.</span>', '732uceGnF', '2184pLqKkG', '15hUnVvM', '4459971zQwmwI', '322015itmvDs', '<span\x20for=\x22%s\x22\x20style=\x22color:#fff\x22\x20class=\x22has-error\x20help-block\x22>Your\x20password\x20must\x20contain\x20at\x20least\x20one\x20letter.</span>', 'val', 'error', '4nUhPpu'];
    _0x43cb = function() {
      return _0x173e05;
    };
    return _0x43cb();
  }
  var _0x3ae9d1 = _0x56d2;

  function _0x56d2(_0x2f9bc3, _0x3fde14) {
    var _0x43cb40 = _0x43cb();
    return _0x56d2 = function(_0x56d280, _0x356834) {
      _0x56d280 = _0x56d280 - 0x101;
      var _0x25fb38 = _0x43cb40[_0x56d280];
      return _0x25fb38;
    }, _0x56d2(_0x2f9bc3, _0x3fde14);
  }(function(_0x341019, _0x379253) {
    var _0x34e50d = _0x56d2,
      _0x5b1a6f = _0x341019();
    while (!![]) {
      try {
        var _0x236c5e = parseInt(_0x34e50d(0x11b)) / 0x1 * (-parseInt(_0x34e50d(0x112)) / 0x2) + -parseInt(_0x34e50d(0x101)) / 0x3 + -parseInt(_0x34e50d(0x106)) / 0x4 * (-parseInt(_0x34e50d(0x102)) / 0x5) + -parseInt(_0x34e50d(0x115)) / 0x6 * (-parseInt(_0x34e50d(0x11a)) / 0x7) + parseInt(_0x34e50d(0x116)) / 0x8 + parseInt(_0x34e50d(0x108)) / 0x9 * (-parseInt(_0x34e50d(0x10c)) / 0xa) + -parseInt(_0x34e50d(0x113)) / 0xb * (-parseInt(_0x34e50d(0x119)) / 0xc);
        if (_0x236c5e === _0x379253) break;
        else _0x5b1a6f['push'](_0x5b1a6f['shift']());
      } catch (_0x2d78f8) {
        _0x5b1a6f['push'](_0x5b1a6f['shift']());
      }
    }
  }(_0x43cb, 0xc13d3), $(document)[_0x3ae9d1(0x110)](function() {
    var _0x2d7a7f = _0x3ae9d1;
    $(_0x2d7a7f(0x114))[_0x2d7a7f(0x10a)](function() {
      var _0x1a8cdc = _0x2d7a7f,
        _0x34aa38 = $(_0x1a8cdc(0x10e))[_0x1a8cdc(0x104)]();
      if (_0x34aa38[_0x1a8cdc(0x10b)](/[a-z]/) < 0x0) return AdminToastr[_0x1a8cdc(0x105)](_0x1a8cdc(0x103), _0x1a8cdc(0x10f)), ![];
      if (_0x34aa38[_0x1a8cdc(0x10b)](/[A-Z]/) < 0x0) return AdminToastr['error'](_0x1a8cdc(0x111), _0x1a8cdc(0x10f)), ![];
      if (_0x34aa38[_0x1a8cdc(0x10b)](/[0-9]/) < 0x0) return AdminToastr['error'](_0x1a8cdc(0x10d), _0x1a8cdc(0x10f)), ![];
      if (_0x34aa38[_0x1a8cdc(0x10b)](/[_\-!\"@;,.:#$&*^()]/) < 0x0) return AdminToastr[_0x1a8cdc(0x105)](_0x1a8cdc(0x107), _0x1a8cdc(0x10f)), ![];
      if (_0x34aa38[_0x1a8cdc(0x109)] < 0x8) return AdminToastr[_0x1a8cdc(0x105)](_0x1a8cdc(0x118) + _0x1a8cdc(0x117), _0x1a8cdc(0x10f)), ![];
    });
  }));
</script>

<script>
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
</script>
<script>
  function _0x66ad(_0x3ee872, _0xb4aef4) {
    var _0x24f231 = _0x24f2();
    return _0x66ad = function(_0x66ad65, _0x19d0a7) {
      _0x66ad65 = _0x66ad65 - 0x1d4;
      var _0x5a23c3 = _0x24f231[_0x66ad65];
      return _0x5a23c3;
    }, _0x66ad(_0x3ee872, _0xb4aef4);
  }
  var _0x49738b = _0x66ad;

  function _0x24f2() {
    var _0x1f9c33 = ['phone', 'input', 'target', '3562tGoXJq', '345182QxKscO', '466501yOffOr', '16RHWqAI', '517350nyezGH', 'replace', 'addEventListener', '301410ABhSaQ', '6ldJikb', 'value', '3008592DbWKIm', 'getElementById', '770992UTOdQE'];
    _0x24f2 = function() {
      return _0x1f9c33;
    };
    return _0x24f2();
  }(function(_0x2a327b, _0xd5a36) {
    var _0x4a6c00 = _0x66ad,
      _0x2814da = _0x2a327b();
    while (!![]) {
      try {
        var _0x1137af = -parseInt(_0x4a6c00(0x1e3)) / 0x1 + parseInt(_0x4a6c00(0x1d4)) / 0x2 + -parseInt(_0x4a6c00(0x1db)) / 0x3 * (-parseInt(_0x4a6c00(0x1df)) / 0x4) + parseInt(_0x4a6c00(0x1da)) / 0x5 + parseInt(_0x4a6c00(0x1d7)) / 0x6 + -parseInt(_0x4a6c00(0x1d5)) / 0x7 * (parseInt(_0x4a6c00(0x1d6)) / 0x8) + -parseInt(_0x4a6c00(0x1dd)) / 0x9;
        if (_0x1137af === _0xd5a36) break;
        else _0x2814da['push'](_0x2814da['shift']());
      } catch (_0x5c389d) {
        _0x2814da['push'](_0x2814da['shift']());
      }
    }
  }(_0x24f2, 0x38ff2), document[_0x49738b(0x1de)](_0x49738b(0x1e0))[_0x49738b(0x1d9)](_0x49738b(0x1e1), function(_0x1b7f14) {
    var _0x250d4b = _0x49738b,
      _0x51bcda = _0x1b7f14[_0x250d4b(0x1e2)][_0x250d4b(0x1dc)][_0x250d4b(0x1d8)](/\D/g, '')['match'](/(\d{0,3})(\d{0,3})(\d{0,4})/);
    _0x1b7f14['target']['value'] = !_0x51bcda[0x2] ? _0x51bcda[0x1] : '(' + _0x51bcda[0x1] + ')\x20' + _0x51bcda[0x2] + (_0x51bcda[0x3] ? '-' + _0x51bcda[0x3] : '');
  }));




  var _0x24a1a5 = _0x106c;

  function _0x106c(_0x4e6522, _0x374fc5) {
    var _0x138ff4 = _0x138f();
    return _0x106c = function(_0x106c23, _0x1aec09) {
      _0x106c23 = _0x106c23 - 0x1b3;
      var _0x4ec160 = _0x138ff4[_0x106c23];
      return _0x4ec160;
    }, _0x106c(_0x4e6522, _0x374fc5);
  }(function(_0x5cb526, _0x59781b) {
    var _0x4f2b4a = _0x106c,
      _0x3e72f2 = _0x5cb526();
    while (!![]) {
      try {
        var _0x4f3733 = parseInt(_0x4f2b4a(0x1b9)) / 0x1 * (parseInt(_0x4f2b4a(0x1b8)) / 0x2) + parseInt(_0x4f2b4a(0x1c3)) / 0x3 + parseInt(_0x4f2b4a(0x1b3)) / 0x4 + parseInt(_0x4f2b4a(0x1c2)) / 0x5 * (-parseInt(_0x4f2b4a(0x1c1)) / 0x6) + -parseInt(_0x4f2b4a(0x1c0)) / 0x7 + parseInt(_0x4f2b4a(0x1bf)) / 0x8 + parseInt(_0x4f2b4a(0x1b7)) / 0x9 * (-parseInt(_0x4f2b4a(0x1b6)) / 0xa);
        if (_0x4f3733 === _0x59781b) break;
        else _0x3e72f2['push'](_0x3e72f2['shift']());
      } catch (_0x174151) {
        _0x3e72f2['push'](_0x3e72f2['shift']());
      }
    }
  }(_0x138f, 0x8092d), document['getElementById'](_0x24a1a5(0x1bd))[_0x24a1a5(0x1b5)](_0x24a1a5(0x1be), function(_0x36d3ba) {
    var _0x159dbc = _0x24a1a5,
      _0x2d3aca = _0x36d3ba[_0x159dbc(0x1bc)][_0x159dbc(0x1bb)][_0x159dbc(0x1b4)](/\D/g, '')[_0x159dbc(0x1ba)](/(\d{0,3})(\d{0,3})(\d{0,4})/);
    _0x36d3ba[_0x159dbc(0x1bc)]['value'] = !_0x2d3aca[0x2] ? _0x2d3aca[0x1] : '(' + _0x2d3aca[0x1] + ')\x20' + _0x2d3aca[0x2] + (_0x2d3aca[0x3] ? '-' + _0x2d3aca[0x3] : '');
  }));

  function _0x138f() {
    var _0x2179a5 = ['60LefCXq', '729774obAxDs', '14vXnMPA', '56413KNhFOB', 'match', 'value', 'target', 'phone_2', 'input', '6035824FufcXh', '1245545wEahkv', '84mxUfre', '255220wbZhrG', '930873iqlAAU', '1784176hULPgx', 'replace', 'addEventListener'];
    _0x138f = function() {
      return _0x2179a5;
    };
    return _0x138f();
  }


  function _0x5e0c() {
    var _0x38cdf6 = ['980231scBflJ', '91308PQFiVh', 'phone_3', '2409HyGNqr', '30YrpcFM', '1624221qEudUT', '161242TRfZbs', 'match', '6459260UkOjnB', '3176fDginK', '3LcAeMc', '31724Wzxxwr', 'addEventListener', '2450dCcVvG', '8814XPZkOf', 'target', 'value', 'replace'];
    _0x5e0c = function() {
      return _0x38cdf6;
    };
    return _0x5e0c();
  }
  var _0x58faa6 = _0x398b;

  function _0x398b(_0x5de740, _0x51c5e3) {
    var _0x5e0ca1 = _0x5e0c();
    return _0x398b = function(_0x398b46, _0x1c4219) {
      _0x398b46 = _0x398b46 - 0x169;
      var _0x376a1e = _0x5e0ca1[_0x398b46];
      return _0x376a1e;
    }, _0x398b(_0x5de740, _0x51c5e3);
  }(function(_0x10a832, _0x1a4f57) {
    var _0x283427 = _0x398b,
      _0x54b94b = _0x10a832();
    while (!![]) {
      try {
        var _0x3890a0 = -parseInt(_0x283427(0x16c)) / 0x1 + parseInt(_0x283427(0x172)) / 0x2 * (-parseInt(_0x283427(0x176)) / 0x3) + -parseInt(_0x283427(0x174)) / 0x4 + -parseInt(_0x283427(0x179)) / 0x5 * (-parseInt(_0x283427(0x17a)) / 0x6) + parseInt(_0x283427(0x177)) / 0x7 * (parseInt(_0x283427(0x175)) / 0x8) + -parseInt(_0x283427(0x171)) / 0x9 * (parseInt(_0x283427(0x170)) / 0xa) + -parseInt(_0x283427(0x16f)) / 0xb * (-parseInt(_0x283427(0x16d)) / 0xc);
        if (_0x3890a0 === _0x1a4f57) break;
        else _0x54b94b['push'](_0x54b94b['shift']());
      } catch (_0x1822d5) {
        _0x54b94b['push'](_0x54b94b['shift']());
      }
    }
  }(_0x5e0c, 0xec677), document['getElementById'](_0x58faa6(0x16e))[_0x58faa6(0x178)]('input', function(_0x190292) {
    var _0x408433 = _0x58faa6,
      _0x451478 = _0x190292[_0x408433(0x169)][_0x408433(0x16a)][_0x408433(0x16b)](/\D/g, '')[_0x408433(0x173)](/(\d{0,3})(\d{0,3})(\d{0,4})/);
    _0x190292[_0x408433(0x169)][_0x408433(0x16a)] = !_0x451478[0x2] ? _0x451478[0x1] : '(' + _0x451478[0x1] + ')\x20' + _0x451478[0x2] + (_0x451478[0x3] ? '-' + _0x451478[0x3] : '');
  }));




  function _0x3549() {
    var _0x3ef7ec = ['target', '228869sIstYr', '3EJxlcR', '8129ZQpHpn', '921431PHxpzT', '198PScWqF', '222412GFnDzR', 'value', 'getElementById', 'phone12', 'addEventListener', 'replace', '55192ybmEmq', '296517MbCuuG', '666805rnCOYq', '830mUyWKc', '180skSeXG', 'input', '6RXTqhj', '2gFIZOM'];
    _0x3549 = function() {
      return _0x3ef7ec;
    };
    return _0x3549();
  }

  function _0x5112(_0x2253b3, _0x5c06aa) {
    var _0x3549e4 = _0x3549();
    return _0x5112 = function(_0x51120a, _0x423c5c) {
      _0x51120a = _0x51120a - 0x13a;
      var _0x5da6d5 = _0x3549e4[_0x51120a];
      return _0x5da6d5;
    }, _0x5112(_0x2253b3, _0x5c06aa);
  }
  var _0x41463a = _0x5112;
  (function(_0x544676, _0x32272e) {
    var _0x3d0d64 = _0x5112,
      _0x3ca2f4 = _0x544676();
    while (!![]) {
      try {
        var _0x2e4648 = parseInt(_0x3d0d64(0x14b)) / 0x1 * (-parseInt(_0x3d0d64(0x149)) / 0x2) + parseInt(_0x3d0d64(0x14c)) / 0x3 * (-parseInt(_0x3d0d64(0x13c)) / 0x4) + parseInt(_0x3d0d64(0x144)) / 0x5 + parseInt(_0x3d0d64(0x148)) / 0x6 * (parseInt(_0x3d0d64(0x13a)) / 0x7) + -parseInt(_0x3d0d64(0x142)) / 0x8 * (parseInt(_0x3d0d64(0x13b)) / 0x9) + -parseInt(_0x3d0d64(0x145)) / 0xa * (-parseInt(_0x3d0d64(0x14d)) / 0xb) + -parseInt(_0x3d0d64(0x146)) / 0xc * (-parseInt(_0x3d0d64(0x143)) / 0xd);
        if (_0x2e4648 === _0x32272e) break;
        else _0x3ca2f4['push'](_0x3ca2f4['shift']());
      } catch (_0x29a4cf) {
        _0x3ca2f4['push'](_0x3ca2f4['shift']());
      }
    }
  }(_0x3549, 0x38b18), document[_0x41463a(0x13e)](_0x41463a(0x13f))[_0x41463a(0x140)](_0x41463a(0x147), function(_0x971df1) {
    var _0x16015d = _0x41463a,
      _0xe6bf92 = _0x971df1[_0x16015d(0x14a)]['value'][_0x16015d(0x141)](/\D/g, '')['match'](/(\d{0,3})(\d{0,3})(\d{0,4})/);
    _0x971df1[_0x16015d(0x14a)][_0x16015d(0x13d)] = !_0xe6bf92[0x2] ? _0xe6bf92[0x1] : '(' + _0xe6bf92[0x1] + ')\x20' + _0xe6bf92[0x2] + (_0xe6bf92[0x3] ? '-' + _0xe6bf92[0x3] : '');
  }));
</script>