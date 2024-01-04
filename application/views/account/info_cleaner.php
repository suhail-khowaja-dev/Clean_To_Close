<script src="https://js.stripe.com/v3/"></script>
<?php        
		$admin_email = $this->model_emails->find_all();
    // debug($admin_email,1);
    ?>
<style>
  .custom_address {
    text-transform: capitalize;
  }

  .myNewcustom_address {
    text-transform: uppercase;
  }

  .myCapitalcustom_address:last-child {
    /* color: red; */
  }
</style>
<div class="Main">
  <div class="dashboard ">
    <h2><?php echo $this->session->flashdata('successfully_added'); ?></h2>
    <div class="main-div contantPart">


      <div class="container">
        <div class="row">
          <? $this->load->view('account/header_main') ?>

          <div class="navigation w-100">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-personalInfo-tab" data-toggle="pill" href="#pills-personalInfo" role="tab" aria-controls="pills-personalInfo" aria-selected="true">MEMBER INFORMATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-subscription-tab" data-toggle="pill" href="#pills-subscription" role="tab" aria-controls="pills-subscription" aria-selected="true">SUBSCRIPTION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-money-tab" data-toggle="pill" href="#pills-money" role="tab" aria-controls="pills-money" aria-selected="true">MONEY EARNED</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-payments-tab" data-toggle="pill" href="#pills-payments" role="tab" aria-controls="pills-payments" aria-selected="true">PAYMENTS</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="pills-available-tab" data-toggle="pill" href="#pills-available" role="tab" aria-controls="pills-available" aria-selected="true">AVAILABLE JOBS</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- user data  -->

      <div class="tab-content mt20 mb3" id="nav-tabContent">
        <div class="tab-pane fade show active" id="pills-personalInfo" role="tabpanel" aria-labelledby="pills-personalInfo-tab">

          <div class="container cleanerdashboardinfoTab">
            <i class="fa fa-edit" data-toggle="modal" data-target="#NamerModal"></i>
            <div class="row">
              <div class="col-lg-4 mt30 RR">
                <div class="nameLabel">First Name</div>
                <div class="name">
                  <?php echo $info_cleaner['signup_name'] ?>
                </div>
              </div>
              <div class="col-lg-4 mt30 RR">
                <div class="nameLabel">Last Name</div>
                <div class="name">
                  <?php echo $info_cleaner['signup_lastname'] ?>
                </div>
              </div>
              <div class="col-lg-4 mt30 RR">
                <div class="nameLabel">Company</div>
                <div class="name">
                  <?php echo $info_cleaner['signup_company'] ?>
                </div>
              </div>
              <div class="col-lg-4 mt30 RR">
                <div class="nameLabel">Email Address</div>
                <div class="name">
                  <?php echo $info_cleaner['signup_email'] ?>
                </div>
              </div>
              <div class="col-lg-4 mt30">
                <div class="nameLabel">Phone Number</div>
                <div class="name">
                  <?php echo $info_cleaner['signup_contact'] ?>
                </div>
              </div>
              <div class="col-lg-4 mt30">
                <div class="nameLabel">Address</div>
                <div class="name custom_address myCapitalcustom_address ">
                  <?php echo $info_cleaner['signup_address'] ?>
                </div>
              </div>
              <div class="col-lg-4 mt30">
                <div class="nameLabel">City</div>
                <div class="name custom_address">
                  <?php echo Ucfirst($info_cleaner['signup_city']) ?>
                </div>
              </div>
              <div class="col-lg-4 mt30">
                <div class="nameLabel">State</div>
                <div class="name custom_address myNewcustom_address ">
                  <?php echo Ucfirst($info_cleaner['signup_state']) ?>
                </div>
              </div>
              <div class="col-lg-4 mt30">
                <div class="nameLabel">Unit #</div>
                <div class="name">
                  <?php echo $info_cleaner['signup_unit'] ?>
                </div>
              </div>
              <div class="col-lg-4 mt30">
                <div class="d-flex mt10">
                  <div class="box1">
                    <div class="reprenstTabRadiobtn1">

                      <label for="teamer" class="containerChk checkboxcustom" style="margin-left: 0 !important;">
                        <?php
                        if ($info_cleaner['signup_individual_team'] == 2) {
                          echo 'Team';
                        } else if ($info_cleaner['signup_individual_team'] == 1) {
                          echo 'Individual';
                        }
                        ?>
                        <input type="radio" name="Teamer" id="teamer" value="<?php echo $info_cleaner['signup_individual_team'] ?>" checked>
                        <span class="checkmark"></span>
                      </label>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <form action="<?= g('base_url') ?>account/update_document" method="post" id="updatedocument" class="footTop" enctype="multipart/form-data">
              <input type="hidden" name="signup[signup_password]" value="<?php echo $info_cleaner['signup_password'] ?>">
              <input type="hidden" name="signup[signup_id]" value="<?= $this->userid ?>">
              <input type="hidden" name="signup[signup_type]" value="<?php echo $info_cleaner['signup_type'] ?>">
              <div class="row ref1 mt50 insur-row">
                <div class="col-lg-6">
                  <h5>Insurance</h5>
                  <div class="d-flex flex-column">
                    <a href="<?php echo get_image($info_cleaner['signup_insurance_company_path'], $info_cleaner['signup_insurance_company_image']) ?>" class="uploadbtncleaner" download>
                      <button class="formBtn greenBtn" type="button"> View</button>
                    </a>
                  </div>
                  <div class="uploadbtncleaner">
                    <label for="myFile223" class="formBtn greenBtn new-up-file-labe mb-0" type="button" id="myFile3Btn452" name="filename">
                      UPLOAD
                    </label>
                    <input type="file" name="signup[signup_insurance_company_image]" id="myFile223" hidden />
                    <!-- <br> -->
                    <span class="btnTxt252"></span>
                  </div>
                </div>

                <div class="col-lg-6">
                  <h5>W-9</h5>
                  <div class="d-flex flex-column">
                    <a href="<?php echo get_image($info_cleaner['signup_w_9_path'], $info_cleaner['signup_w_9_image']) ?>" class="uploadbtncleaner" download>
                      <button class="formBtn greenBtn" type="button"> View</button>
                    </a>
                  </div>
                  <div class="uploadbtncleaner">
                    <label for="myFile224" class="formBtn greenBtn new-up-file-labe mb-0" type="button" id="myFile3Btn453" name="filename">
                      UPLOAD
                    </label>
                    <input type="file" name="signup[signup_w_9_image]" id="myFile224" hidden />
                    <!-- <br> -->
                    <span class="btnTxt253"></span>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="">
                    <button class="formBtn greenBtn uploadbtncleaner1" id="uploaddocument" type="button"> Update</button>
                  </div>
                </div>
              </div>
            </form>
            <!-- <hr> -->
            <!-- <div class="row">
              <div class="col-lg-12">
                <div class="">
                  <button class="formBtn greenBtn ownerform" id="" type="button">Background Check Form</button>
                </div>
              </div>

            </div> -->
          </div>
          <!-- user data end -->
          <!-- member data  -->
          <div class="container cleanerdashboardinfoTab mt20 
            <?php
            if ($info_cleaner['signup_individual_team'] == 2) {
              echo 'Team';
            } else if ($info_cleaner['signup_individual_team'] == 1) {
              echo 'Individual';
            }
            ?>
            ">

            <div class="headingbox d-flex justify-content-between">
              <h5>
                TEAM MEMBER
              </h5>
              <span type="button" class="openTem" data-toggle="modal" data-target="#exampleModal">
                Add More
                <!-- Button trigger modal -->
                <span class='cleanerAddmoreIcon'>
                  <i class="fas fa-plus"></i>
                </span>
              </span>
            </div>
            <?php
            foreach ($team_data as $key => $value) { ?>
              <div class="cleanerDMemberbox d-flex justify-content-between">
                <div class="maindiv12 d-flex">
                  <div class="div1">
                    <h5>Name:</h5>
                    <p><?php echo $value['team_name_memeber'] ?></p>
                  </div>
                  <div class="div2">
                    <h5>Email:</h5>
                    <p><?php echo $value['team_name_email'] ?></p>
                  </div>
                  <div class="div2">
                    <h5>Phone:</h5>
                    <p><?php echo $value['team_name_contact'] ?></p>
                  </div>

                </div>
                <div class="div3">
                  <!-- <button type="button" class="form_team editformMpodal" data-dismiss="modal" aria-label="Close" data-id="<?php echo $value['user_team_id'] ?>" data-member-name="<?php echo $value['user_team_member_name'] ?>" data-user-team-name="<?php echo $value['user_team_name'] ?>" data-user-team-print-name="<?php echo $value['user_team_print_name'] ?>" data-user-team-print-other-name="<?php echo $value['user_team_print_other_name'] ?>" data-user-team-social-security-number="<?php echo $value['user_team_social_security_number'] ?>" data-user-team-date-birth="<?php echo $value['user_team_date_of_birth'] ?>" data-user-team-driver-license="<?php echo $value['user_team_driver_license'] ?>" data-user-team-address="<?php echo $value['user_team_address'] ?>" data-user-team-signature="<?php echo $value['user_team_signature'] ?>" data-user-team-initials="<?php echo $value['user_team_initials'] ?>" data-user-team-date="<?php echo $value['user_team_date'] ?>">
                    Form
                  </button> -->

                  <button type="button" class="edit_team" data-toggle="modal" data-target="#memberModal" data-id="<?php echo $value['team_name_id'] ?>" data-name="<?php echo $value['team_name_memeber'] ?>" data-contact="<?php echo $value['team_name_contact'] ?>" data-email="<?php echo $value['team_name_email'] ?>">
                    Edit
                  </button>
                  <button type="button" class="delete_this" data-id="<?php echo $value['team_name_id'] ?>">
                    Delete
                  </button>
                </div>
              </div>
            <?php
            }
            ?>

          </div>
          <!-- member data end -->

        </div>


        <!-- subscription data -->
        <div class="tab-pane fade referencelastTab" id="pills-subscription" role="tabpanel" aria-labelledby="pills-subscription-tab">
          <div class="container cleanerdashboardinfoTab">
            <h5 class='main-heading'>Subscription</h5>
            <div class="note noti2 mt-1">
              <span class="notered">Note:</span>
              <span>*if you would like to cancel, please email <a href="mailto:<?php echo $admin_email[3]['emails_value']?>?subject=Support" target="_blank"><?php echo $admin_email[3]['emails_value']?></a></span>
            </div>
            <div class="row">
              <div class="col-lg-12 d-flex justify-content-between mt30">
                <span>
                  <h5>Memebership:</h5>
                  <p><?php echo $cleaner_package_type['packages_type'] ?></p>
                </span>
                <span>
                  <h5>Subscription:</h5>
                  <p>$<?php echo ($cleanear_package['signup_package_amount']) ?></p>
                  <!-- <div class="row text-right cleanerdashboardSave d-flex" style="margin-top:1rem!important;">
                    <a href="#">
                      <button type="button" data-toggle="modal" data-target="#upgradePkgModal">Upgrade Plan </button>
                    </a>
                  </div> -->
                  <div class="cleanerdashboardSave">
                    <button type="button" data-toggle="modal" data-target="#upgradePkgModal">Update Plan </button></button>
                  </div>
                </span>
                <span>
                  <h5>Active</h5>
                  <p>Yes</p>
                </span>
                <span>
                  <h5>
                    Next Billing
                  </h5>

                  <p><?php echo date("m/d/Y", strtotime($cleanear_package['after_one_month_date'])) ?></p>
                </span>
                <!-- <span>
                  <h5>
                    Card Exp
                  </h5>
                  <p><?php echo ($cleanear_package['signup_card_month']) ?>/<?php echo ($cleanear_package['signup_card_year']) ?></p>
                 
                  <div class="cleanerdashboardSave">
                    <button type="button" data-toggle="modal" data-target="#CVCModal">Update CC</button>
                  </div>
                </span> -->
              </div>
            </div>
          </div>
        </div>
        <!-- subscription data end -->

        <!-- payments -->
        <div class="tab-pane fade" id="pills-payments" role="tabpanel" aria-labelledby="pills-payments-tab">
          <div class="container cleanerdashboardinfoTab">
            <div class="allorderTabuler">
              <div class="myOrderTabular">
                <table class="table dataTables">
                  <thead>
                    <tr>
                      <th scope="col">Package Name</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Package Amount</th>
                    </tr>
                  </thead>
                  <tbody id="myTableamount">
                    <?php
                    $params4['where']['signup_payment_user_id'] = $this->userid;
                    $package_payment = $this->model_signup_payment->find_all($params4);
                    // debug($package_payment,1);
                    ?>
                    <?php foreach ($package_payment as $key => $value) { ?>
                      <tr>
                        <td><?php echo Ucfirst($value['signup_payment_package_name']) ?></td>
                        <td><?php echo date("m/d/Y", strtotime($value['signup_payment_createdon'])) ?></td>
                        <td><?php echo date("h:i A", strtotime($value['signup_payment_createdon'])) ?></td>
                        <?php
                        $num = $value['signup_subscription_amount'];
                        $dec = $num / 100;
                        ?>
                        <td>
                          <?php if ($value['signup_subscription_amount'] != '') { ?>
                            $<?php echo $dec ?>
                          <? } else { ?>
                            $<?php echo number_format($value['signup_payment_add_amount'], 2) ?>
                          <?php
                          }
                          ?>

                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="row">
              <div class="col-lg-12 text-right">
                <div class="mt-4">
                  <span class="tPur">Total Paid: </span> $<span class="TpAmount" id="total_amount_package"></span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- money -->
        <div class="tab-pane fade" id="pills-money" role="tabpanel" aria-labelledby="pills-money-tab">
          <div class="container cleanerdashboardinfoTab">
            <div class="allorderTabuler">
              <div class="myOrderTabular">
                <table class="table dataTables">
                  <thead>
                    <tr>
                      <th scope="col">Property Adress</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Amount</th>
                    </tr>
                  </thead>
                  <tbody id="myTable">
                    <?php
                    $param1['joins'][] = array(
                      "table" => "signup",
                      "joint" => "signup.signup_id = cleaning_service.cleaning_service_cleaner_id"
                    );
                    $param1['where']['signup_id'] = $this->userid;
                    $param1['where']['cleaning_service_status'] = 5;
                    $param1['where']['cleaning_service_cleaner_id >'] = 0;
                    $param1['where']['cleaning_service_upload_user_id >'] = 0;
                    $param1['where']['cleaning_service_compelted_user_id >'] = 0;
                    $param1['order'] = "cleaning_service_id DESC";
                    $completed_data = $this->model_cleaning_service->find_all($param1);
                    // debug($completed_data,1);
                    ?>
                    <?php foreach ($completed_data as $key => $value) { ?>
                      <tr>
                        <?php
                        $amout_cleaner = $this->model_cleaner_percentage->find_all();
                        $myNumber = $value['cleaning_service_total_amount'];
                        // debug($myNumber,1);
                        //I want to get 25% of 928.
                        $percentToGet = $amout_cleaner[0]['cleaner_percentage_value'];
                        // debug($percentToGet,1);
                        //Get the result.
                        $percent =  $myNumber - ($myNumber * ($percentToGet  / 100));
                        // debug($percent,1);
                        ?>
                        <td><?php echo $value['cleaning_service_address']; ?>, <?php echo $value['cleaning_service_city']; ?>, <?php echo $value['cleaning_service_state']; ?>, <?php echo $value['cleaning_service_zipcode']; ?></td>
                        <td><?php
                            $date = date_create($value['cleaning_service_closing_time']);
                            echo date_format($date, "m/d/y") ?></td>
                        <td><?php
                            echo date("g:i A", strtotime($value['cleaning_service_closing_time'])) ?></td>
                        <td>$<?php
                              echo number_format($percent, 2) ?></td>
                      <?php
                    }
                      ?>
                      </tr>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="row">
              <div class="col-lg-12 text-right">
                <div class="mt-4">

                  <span class="tPur">Total Earned: </span> $<span class="TpAmount" id="total_amount">

                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- pills-available -->
        <div class="tab-pane fade" id="pills-available" role="tabpanel" aria-labelledby="pills-available-tab">
          <div class="container cleanerdashboardinfoTab">
            <div class="allorderTabuler">
              <div class="myOrderTabular">
                <table>
                  <th>Available Job's</th>
                  <tbody>
                    <tr>

                      <td><?php echo $info_cleaner['signup_package_job'] ?></td>
                    </tr>
                  </tbody>

                </table>

              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row text-right cleanerdashboardSave d-flex justify-content-end">
            <!-- <button type="button" id="submit_Info">Save</button> -->
          </div>
        </div>
      </div>
      </form>

    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header add_member">
          <h5 class="modal-title " id="exampleModalLabel">Add Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= g('base_url') ?>account/team_name" method="post" id="teamname" class="footTop require-validate">
          <!-- <input type="hidden" name="amount" value="18.95"> -->
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <input type="hidden" name="team[team_name_user_id]" value="<?php echo $this->userid ?>">
                <h5 class='mheading'>Name:</h5>
                <input type="text" class='dashboard2Input' placeholder='Name' name="team[team_name_memeber]">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h5 class='mheading'>Email:</h5>
                <input type="text" class='dashboard2Input' placeholder='Email' name="team[team_name_email]">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h5 class='mheading'>Phone:</h5>
                <input type="tel" class='dashboard2Input' placeholder='Phone' name="team[team_name_contact]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 mt10">
                <div class="bCheck">
                  Background Check
                </div>
                <div class="flexi">
                  <div class="note noti2">
                    <span class="notered">Note:</span>
                    <ul>
                      <li>
                        <?php
                        $amount = $this->model_member_amount->find_all();
                        ?>
                        We require all applicants/prospective employess to have a background check completed. You will be charged a fee of $<?php echo $amount[0]['member_amount_value'] ?> per applicant.
                      </li>
                    </ul>
                  </div>
                  <!-- <div>
                    <span class="btnTxt1"></span>
                    <a href="javascript:void(0)">
                      <button class="formBtn greenBtn hideMpodal" type="button" data-dismiss="modal" aria-label="Close">
                        Click Here
                      </button>
                    </a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button id="checkout-button" hidden>Checkout</button>
            <button type="submit" class="formBtn greenBtn" id="team_data">Add Member</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- <form action="/create-checkout-session" method="POST">
        <button type="submit" id="checkout-button">Checkout</button>
      </form> -->
  <!-- upgrade Pakage Modal -->
  <div class="modal fade" id="upgradePkgModal" tabindex="-1" role="dialog" aria-labelledby="upgradePkgModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <form role="form" action="<?= g('base_url') ?>account/upgrade_plan" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="sk_test_51JVMm8GgXkd9k1VNHytTjKzev7SlbYWArcxVe5NdlzCoEDXmKpH3Y3Bn8yUiRj7vgCuyX2FvxzwCQsOC2EpByBNA00wkmIZJlQ" id="payment-form">
          <div class="modal-body">
            <h5 class="modal-title">Change Subscription</h5>

            <div class="row">
              <div class="col-lg-12">
                <div class="txtyy letsGetMain">
                  <?php
                  $param['where']['signup_payment_user_id'] = $this->userid;
                  $param['order'] = 'signup_payment_id DESC';
                  $package_date = $this->model_signup_payment->find_one($param);

                  ?>
                   <?php
                      //   $date = date_create($package_date['signup_payment_createdon']);
                      //   date_modify($date, "+30 days");
                      //   $date_filter = date_format($date, "m/d/Y");
                      //   
                      ?>
                  I would like to change my current subscription. Beginning on my next billing cycle
                  date of <?php echo date("m/d/Y", strtotime($cleanear_package['after_one_month_date'])) ?> I would like to subscribe to:<br />
                  <input type="hidden" name="user_id" class="user-id" value="<?php echo ($cleanear_package['signup_id']) ?>">
                  <div class="d-flex align-items-center mt20 mb1">
                    <label class="containerRadio"> <?php echo $pkg_first['packages_type'] ?>: $<?php echo $pkg_first['packages_amount'] ?>
                      <input type="radio" name="amount" value="<?php echo $pkg_first['packages_amount'] ?>" <?php if ($pkg_first['packages_amount'] == $cleanear_package['signup_package_amount']) : ?> checked="checked" <?php endif ?>>
                      <span class="checkmarkRadio"></span>
                    </label>
                    <label class="containerRadio ml-3"> <?php echo $pkg_second['packages_type'] ?>: $<?php echo $pkg_second['packages_amount'] ?>
                      <input type="radio" name="amount" value="<?php echo $pkg_second['packages_amount'] ?>" <?php if ($pkg_second['packages_amount'] == $cleanear_package['signup_package_amount']) : ?> checked="checked" <?php endif ?>>
                      <span class="checkmarkRadio"></span>
                    </label>
                    <label class="containerRadio ml-3"> <?php echo $pkg_third['packages_type'] ?>: $<?php echo $pkg_third['packages_amount'] ?>

                      <input type="radio" name="amount" value="<?php echo $pkg_third['packages_amount'] ?>" <?php if ($pkg_third['packages_amount'] == $cleanear_package['signup_package_amount']) : ?> checked="checked" <?php endif ?>>
                      <span class="checkmarkRadio"></span>
                    </label>
                  </div>
                  I understand that this will go into affect beginning <?php echo date("m/d/Y", strtotime($cleanear_package['after_one_month_date'])) ?> and authorize the
                  change.<br />
                  If you are looking to cancel, please email <a href="mailto:<?php echo $admin_email[3]['emails_value']?>?subject=Support" target="_blank"><?php echo $admin_email[3]['emails_value']?></a>
                </div>
              </div>
            </div>
            <!-- </div> -->
            <div class="d-flex justify-content-end">
              <button type="submit" id="upgradePlanButtton" class="SaveBtn">SUBMIT</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- CVC Modal -->
  <div class="modal fade" id="CVCModal" tabindex="-1" role="dialog" aria-labelledby="CVCModal" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="CVCModal">Card Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= g('base_url') ?>account/update_card_info" method="post" id="saveCardForm" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <input type="hidden" name="signup_id" value="<?php echo $this->userid ?>">
                <h5 class='mheading'>Name:</h5>
                <input type="text" class='dashboard2Input' value="<?php echo ($cleanear_package['signup_name']) ?>" placeholder='Name' name="signup_name">
              </div>
            </div>

            <div class="row">
              <div class="col">
                <h5 class='mheading'>Card Number:</h5>
                <input type="text" class='dashboard2Input' value="<?php echo ($cleanear_package['signup_card_number']) ?>" placeholder='Card Numver' name="signup_card_number">
              </div>
            </div>

            <div class="row">
              <div class="col">
                <h5 class='mheading'>Exp Month:</h5>
                <input type="text" class='dashboard2Input' value="<?php echo ($cleanear_package['signup_card_month']) ?>" placeholder='MM' name="signup_card_month">
              </div>
              <div class="col">
                <h5 class='mheading'>Exp Year:</h5>
                <input type="text" class='dashboard2Input' value="<?php echo ($cleanear_package['signup_card_year']) ?>" placeholder='YY' name="signup_card_year">
              </div>
              <div class="col">
                <h5 class='mheading'>CVC:</h5>
                <input type="text" class='dashboard2Input' value="<?php echo ($cleanear_package['signup_cvc_number']) ?>" placeholder='CVC' name="signup_cvc_number">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <button type="button" class="btn btn-primary" class="UpdaetCCBtn" id="update_Card_Button" style="border: none;
            background: none;
            padding: 15px 36px;
            border-radius: 8px;
            background-color: #b3c3c091;
            font-family: 'gilroybold'; color:black;">Update CC</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- nameEdits -->
  <div class="modal fade" id="NamerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Personal Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= g('base_url') ?>account/update_info" method="post" id="saveForm" class="footTop" enctype="multipart/form-data">
          <!-- <input type="hidden" name="signup[signup_id]" value="<?php echo $this->userid ?>" /> -->
          <input type="hidden" name="signup[signup_password]" value="<?php echo $info_cleaner['signup_password'] ?>">
          <input type="hidden" name="signup[signup_id]" value="<?= $this->userid ?>">
          <input type="hidden" name="signup[signup_type]" value="<?php echo $info_cleaner['signup_type'] ?>">
          <input type="hidden" id="latitude_input" name="signup[signup_address_lat]">
          <input type="hidden" id="longitude_input" name="signup[signup_address_lng]">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <label class="editcleaner">First Name</label>
                <input type="text" class='dashboard2Input custom_address_stop' placeholder='First Name' name="signup[signup_name]" value="<?php echo $info_cleaner['signup_name'] ?>">
              </div>
              <div class="col-lg-6">
                <label class="editcleaner">Last Name</label>
                <input type="text" class='dashboard2Input custom_address_stop' placeholder='Last Name' name="signup[signup_lastname]" value="<?php echo $info_cleaner['signup_lastname'] ?>">
              </div>
              <div class="col-lg-6">
                <label class="editcleaner">Company</label>
                <input type="text" class='dashboard2Input custom_address_stop' placeholder='Company' name="signup[signup_company]" value="<?php echo $info_cleaner['signup_company'] ?>">
              </div>
              <div class="col-lg-6">
                <label class="editcleaner">Email Address</label>
                <input type="email" class='dashboard2Input' placeholder='Email Address' name="signup[signup_email]" value="<?php echo $info_cleaner['signup_email'] ?>" readonly>
              </div>
              <div class="col-lg-6">
                <label class="editcleaner">Phone Number</label>
                <input type="text" class='dashboard2Input custom_address_stop' placeholder='Phone Number' name="signup[signup_contact]" value="<?php echo $info_cleaner['signup_contact'] ?>" id=" phone_validate" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" minlength="13">
              </div>
              <div class="col-lg-6">
                <label class="editcleaner">Address</label>
                <input type="text" class='dashboard2Input addressInput custom_address custom_address_stop' placeholder='Address' name="signup[signup_address]" value="<?php echo $info_cleaner['signup_address'] ?>" id="ship-address">
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <label class="editcleaner">City</label>
                <input type="text" class='dashboard2Input custom_address custom_address_stop' placeholder='City' name="signup[signup_city]" value="<?php echo $info_cleaner['signup_city'] ?>" id="locality">
              </div>
              <div class="col-lg-6">
                <label class="editcleaner">State</label>
                <input type="text" class='dashboard2Input custom_address custom_address_stop' placeholder='State' name="signup[signup_state]" value="<?php echo $info_cleaner['signup_state'] ?>" id="state">
              </div>
              <div class="col-lg-6">
                <label class="editcleaner">Unit #</label>
                <input type="text" class='dashboard2Input custom_address_stop' placeholder='Unit #' name="signup[signup_zip]" value="<?php echo $info_cleaner['signup_zip'] ?>">
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12 text-right">
                <button type="button" class="csBtn" id="submit_Info">Save changes</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deletemember" id="deletememberBtn" hidden>
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade delModal" id="deletemember" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          Are you sure you want to remove this person from your team?
          <div class="mBtnsss">
            <form action="<?= g('base_url') ?>account/team_delete" method="post" id="team_de_id">
              <!-- <button type="button" class="btn btn-primary accept_data_decli">Accept</button> -->
              <button type="button" class="btn btn-primary delete_member">Delete</button>
              <input hidden name="teamid[team_name_id]" value="" class="team_id">
              <input hidden name="teamid[team_name_user_id]" value="<?php echo $this->userid ?>">
            </form>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- nameEdits -->
  <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">TEAM MEMBER EDIT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= g('base_url') ?>account/team_edit" method="POST" id="team_edit">
            <input hidden name="team_edit[team_name_id]" value="" class="team_id_edit">
            <input hidden name="team_edit[team_name_user_id]" value="<?php echo $this->userid ?>">
            <div class="row">
              <div class="col-lg-6">
                <input type="text" class='dashboard2Input team_name' placeholder='Name' name="team_edit[team_name_memeber]" value="">
              </div>
              <div class="col-lg-6">
                <input type="text" class='dashboard2Input team_email' placeholder='Email' name="team_edit[team_name_email]" value="">
              </div>
              <div class="col-lg-6">
                <input type="tel" class='dashboard2Input team_contact' placeholder='Phone' name="team_edit[team_name_contact]" value="" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone_1">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 text-right">
                <button type="button" class="csBtn edit_update">Update changes</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>


</div>

<!-- Modal -->
<button id="openChkModall" hidden data-toggle="modal" data-target="#saveInfoCleanerModal"></button>
<div class="modal fade" id="saveInfoCleanerModal" tabindex="-1" role="dialog" aria-labelledby="saveInfoCleanerModal" aria-hidden="true">
  <form id="saveInfoCleanerForm" action="<?= g('base_url') ?>account/save_member_form" method="POST">
    <input type="hidden" name="form_data[user_team_user_id]" value="<?php echo $this->userid ?>">
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
                <strong>Clean to Close™.</strong> and its subsidiaries, parents, successors and affiliates (the “Company”) may order a “consumer
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
                      <input type="text" placeholder="Name" name="form_data[user_team_member_name]">
                    </div>
                    <div class="col-lg-6">
                      <input type="text" placeholder="Signature" name="form_data[user_team_signature]">
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
                    <input type="text" name="form_data[user_team_initials]">
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
              <div class="row">
                <div class="col-lg-12 mt1">
                  <label for="">Print Name</label>
                  <input type="text" placeholder="" name="form_data[user_team_print_name]">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Print any Other Names Used</label>
                  <input type="text" placeholder="" name="form_data[user_team_print_other_name]">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Social Security Number (for identification purposes only)</label>
                  <input type="text" placeholder="" name="form_data[user_team_social_security_number]">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Date of Birth (for identification purposes only)</label>
                  <input type="text" placeholder="" name="form_data[user_team_date_of_birth]">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Driver’s License(s) Number(s) and State(s)</label>
                  <input type="text" placeholder="" name="form_data[user_team_driver_license]">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Address, And Any Other States In Which You Have Lived in the Past 7 Years:</label>
                  <input type="text" placeholder="" name="form_data[user_team_address]">
                </div>
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6 mt1">
                      <label for="">Signature</label>
                      <input type="text" placeholder="" name="form_data[user_team_signature]">
                    </div>
                    <div class="col-lg-6 mt1">
                      <label for="">Date:</label>
                      <input type="date" placeholder="" name="form_data[user_team_date]">
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
                    <input type="text" name="form_data[user_team_initials]">
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
                    <input type="text" name="form_data[user_team_initials]">
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
                    <input type="text" name="form_data[user_team_initials]">
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
                    <input type="text" name="form_data[user_team_initials]">
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
                    <input type="text" name="form_data[user_team_initials]">
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
                    <input type="text" name="form_data[user_team_initials]">
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
              <div class="row mt60">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 2-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="form_data[user_team_initials]">
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
                    <input type="text" name="form_data[user_team_initials]">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="saveClose">
            <div class="row">
              <div class="col-lg-12">
                <button type="button" class="formBtn closer closety" data-dismiss="modal" aria-label="Close">Close</button>
                <button id="Team_Button" type="button" data-dismiss="modal" aria-label="Close" class="formBtn ml-2 closety">Save</button>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </form>
</div>

<!-- edit form Modal -->
<button id="membereditModal" hidden data-toggle="modal" data-target="#edit_member_modal_form"></button>
<div class="modal fade" id="edit_member_modal_form" tabindex="-1" role="dialog" aria-labelledby="edit_member_modal_form" aria-hidden="true">
  <form id="team_form_edit" action="<?= g('base_url') ?>account/save_form_team" method="POST">
    <div class="btnForDownup">
      <i class="fas fa-arrow-up btnForDownArrowup"></i>
    </div>
    <input hidden name="teamform[user_team_id]" value="" class="team_id_edit_form">
    <input type="hidden" name="teamform[user_team_user_id]" value="<?php echo $this->userid ?>">
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
                <strong>Clean to Close™.</strong> and its subsidiaries, parents, successors and affiliates (the “Company”) may order a “consumer
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
                      <input type="hidden" placeholder="Name" name="teamform[user_team_member_name]" class="member_name_user" value="">

                      <input type="text" placeholder="Name" name="teamform[user_team_member_name]" class="member_name" value="">
                    </div>
                    <div class="col-lg-6">
                      <input type="text" placeholder="Signature" name="teamform[user_team_signature]" class="member_signature" value="">
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
                    <input type="text" name="teamform[user_team_initials]" class="initia_mem" value="">
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
              <div class="row">
                <div class="col-lg-12 mt1">
                  <label for="">Print Name</label>
                  <input type="text" placeholder="" name="teamform[user_team_print_name]" class="print_name" value="">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Print any Other Names Used</label>
                  <input type="text" placeholder="" name="teamform[user_team_print_other_name]" class="print_other_name" value="">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Social Security Number (for identification purposes only)</label>
                  <input type="text" placeholder="" name="teamform[user_team_social_security_number]" class="social_security" value="">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Date of Birth (for identification purposes only)</label>
                  <input type="text" placeholder="" name="teamform[user_team_date_of_birth]" class="date_birth_of" value="">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Driver’s License(s) Number(s) and State(s)</label>
                  <input type="text" placeholder="" name="teamform[user_team_driver_license]" class="driver_license" value="">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Address, And Any Other States In Which You Have Lived in the Past 7 Years:</label>
                  <input type="text" placeholder="" name="teamform[user_team_address]" class="address_other" value="">
                </div>
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6 mt1">
                      <label for="">Signature</label>
                      <input type="text" placeholder="" name="teamform[user_team_signature]" class="member_signature" value="">
                    </div>
                    <div class="col-lg-6 mt1">
                      <label for="">Date:</label>
                      <input type="date" placeholder="" name="teamform[user_team_date]" class="date_print" value="">
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
                    <input type="text" name="teamform[user_team_initials]" class="initia_mem" value="">
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
                    <input type="text" name="teamform[user_team_initials]" class="initia_mem" value="">
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
                    <input type="text" name="teamform[user_team_initials]" class="initia_mem" name="">
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
                    <input type="text" name="teamform[user_team_initials]" class="initia_mem" name="">
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
                    <input type="text" name="teamform[user_team_initials]" class="initia_mem" value="">
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
                    <input type="text" name="teamform[user_team_initials]" class="initia_mem" value="">
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
              <div class="row mt60">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 2-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="teamform[user_team_initials]" class="initia_mem" value="">
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
                    <input type="text" name="teamform[user_team_initials]" class="initia_mem" value="">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="saveClose">
            <div class="row">
              <div class="col-lg-12">
                <button type="button" class="formBtn closer " data-dismiss="modal" aria-label="Close">Close</button>
                <button id="" type="button" data-dismiss="modal" aria-label="Close" class="formBtn ml-2 edit_form_data">Save</button>
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


<!-- owner edit form Modal -->
<button id="membereditownerModal" hidden data-toggle="modal" data-target="#edit_owner_modal_form"></button>
<div class="modal fade" id="edit_owner_modal_form" tabindex="-1" role="dialog" aria-labelledby="edit_owner_modal_form" aria-hidden="true">
  <form id="owner_form_edit" action="<?= g('base_url') ?>account/ownerformedit" method="POST">
    <div class="btnForDownup">
      <i class="fas fa-arrow-up btnForDownArrowup"></i>
    </div>
    <input type="hidden" name="ownerform[user_team_id]" value="<?php echo $team_owner['user_team_id'] ?>">
    <input type="hidden" name="ownerform[user_team_form_id]" value="<?php echo $team_owner['user_team_form_id'] ?>">
    <input type="hidden" name="ownerform[user_team_user_id]" value="<?php echo $this->userid ?>">
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
                <strong>Clean to Close™.</strong> and its subsidiaries, parents, successors and affiliates (the “Company”) may order a “consumer
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
                      <input type="hidden" placeholder="Name" name="ownerform[user_team_member_name]" value="<?php echo $team_owner['user_team_member_name'] ?>">

                      <input type="text" placeholder="Name" name="ownerform[user_team_name]" value="<?php echo $team_owner['user_team_name'] ?>">
                    </div>
                    <div class="col-lg-6">
                      <input type="text" placeholder="Signature" name="ownerform[user_team_signature]" value="<?php echo $team_owner['user_team_signature'] ?>">
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
                    <input type="text" name="ownerform[user_team_initials]" value="<?php echo $team_owner['user_team_initials'] ?>">
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
              <div class="row">
                <div class="col-lg-12 mt1">
                  <label for="">Print Name</label>
                  <input type="text" placeholder="" name="ownerform[user_team_print_name]" value="<?php echo $team_owner['user_team_print_name'] ?>">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Print any Other Names Used</label>
                  <input type="text" placeholder="" name="ownerform[user_team_print_other_name]" value="<?php echo $team_owner['user_team_print_other_name'] ?>">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Social Security Number (for identification purposes only)</label>
                  <input type="text" placeholder="" name="ownerform[user_team_social_security_number]" value="<?php echo $team_owner['user_team_social_security_number'] ?>">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Date of Birth (for identification purposes only)</label>
                  <input type="text" placeholder="" name="ownerform[user_team_date_of_birth]" value="<?php echo $team_owner['user_team_date_of_birth'] ?>">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Driver’s License(s) Number(s) and State(s)</label>
                  <input type="text" placeholder="" name="ownerform[user_team_driver_license]" value="<?php echo $team_owner['user_team_driver_license'] ?>">
                </div>
                <div class="col-lg-12 mt1">
                  <label for="">Address, And Any Other States In Which You Have Lived in the Past 7 Years:</label>
                  <input type="text" placeholder="" name="ownerform[user_team_address]" value="<?php echo $team_owner['user_team_address'] ?>">
                </div>
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6 mt1">
                      <label for="">Signature</label>
                      <input type="text" placeholder="" name="ownerform[user_team_signature]" value="<?php echo $team_owner['user_team_signature'] ?>">
                    </div>
                    <div class="col-lg-6 mt1">
                      <label for="">Date:</label>
                      <input type="date" placeholder="" name="ownerform[user_team_date]" value="<?php echo $team_owner['user_team_date'] ?>">
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
                    <input type="text" name="ownerform[user_team_initials]" value="<?php echo $team_owner['user_team_initials'] ?>">
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
                    <input type="text" name="ownerform[user_team_initials]" value="<?php echo $team_owner['user_team_initials'] ?>">
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
                    <input type="text" name="ownerform[user_team_initials]" value="<?php echo $team_owner['user_team_initials'] ?>">
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
                    <input type="text" name="ownerform[user_team_initials]" value="<?php echo $team_owner['user_team_initials'] ?>">
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
                    <input type="text" name="ownerform[user_team_initials]" value="<?php echo $team_owner['user_team_initials'] ?>">
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
                    <input type="text" name="ownerform[user_team_initials]" value="<?php echo $team_owner['user_team_initials'] ?>">
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
              <div class="row mt60">
                <div class="col-lg-12 d-flex justify-content-center align-items-center">
                  <div class="pages1">
                    -PAGE 1 of 2-
                  </div>
                  <div class="Initials">
                    <span>Initials:</span>
                    <input type="text" name="ownerform[user_team_initials]" value="<?php echo $team_owner['user_team_initials'] ?>">
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
                    <input type="text" name="ownerform[user_team_initials]" value="<?php echo $team_owner['user_team_initials'] ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="saveClose">
            <div class="row">
              <div class="col-lg-12">
                <button type="button" class="formBtn closer " data-dismiss="modal" aria-label="Close">Close</button>
                <button id="edit_form_owner" type="button" class="formBtn ml-2 ">Save</button>
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

</div>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCab5ahH6KkodUavDwBCigXTL7ZbrkzS94&callback=initAutocomplete&libraries=places&v=weekly" async></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCab5ahH6KkodUavDwBCigXTL7ZbrkzS94&libraries=places&callback=initAutocomplete&libraries=places&v=weekly" async></script>

<!-- </script> -->

<script>
  <?php if ($this->session->flashdata('success_payment')) { ?>
    setTimeout(() => {
      toastr.error("<?php echo $this->session->flashdata('success_payment'); ?>");
      return false;
    }, 1000)
  <?php } ?>

  var pacContainerInitialized = false;
  $("#ship-address").keypress(function() {
    if (!pacContainerInitialized) {
      $(".pac-container").css("z-index", "9999");
      pacContainerInitialized = true;
    }
  });


  toastr.options = {
    "positionClass": "toast-bottom-right",
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  };
  <?php if ($this->session->flashdata('success')) { ?>
    setTimeout(() => {
      toastr.success("<?php echo $this->session->flashdata('success'); ?>");
    }, 500)
  <?php } ?>

  <?php if ($this->session->flashdata('upgradePlan')) { ?>
    setTimeout(() => {
      toastr.success("<?php echo $this->session->flashdata('upgradePlan'); ?>");
    }, 500)
  <?php } ?>

  // multiple script
  $(".TranscriptInp").on('change', (event) => {
    $(event.target.parentNode).find(".asd").empty()
    $(event.target.parentNode).find(".asd").append(`
                <button type="button" class="mod-btn" data-toggle="modal" data-target="#transmod" data-id="${URL.createObjectURL(event.target.files[0])}"onclick="pdffunction(this)">
                    ${event.target.files[0].name}
                </button>
                    `)
  })
  // $(".mod-btn").on('click', (e) => {

  // })

  // on ready functions
  function pdffunction(e) {
    $("#transmod .modal-body .embededpdf").attr("src", e.dataset.id + '#toolbar=0')
    setTimeout(() => {
      var ty = $('.embededpdf')
    }, 500)
  }
</script>
<!-- <script>
    $(function () {
        var input = document.getElementById("ship-address");
        var autocomplete = new google.maps.places.Autocomplete(input);

        $('#NamerModal').modal('show');

    });

</script> -->
<script>
  // This sample uses the Places Autocomplete widget to:
  // 1. Help the user select a place
  // 2. Retrieve the address components associated with that place
  // 3. Populate the form fields with those address components.
  // This sample requires the Places library, Maps JavaScript API.
  // Include the libraries=places parameter when you first load the API.
  // For example: <script
  // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
  let autocomplete;
  let address1Field;
  let address2Field;
  let postalField;

  function initAutocomplete() {
    address1Field = document.querySelector("#ship-address");
    address2Field = document.querySelector("#address2");
    // postalField = document.querySelector("#postcode");
    // Create the autocomplete object, restricting the search predictions to
    // addresses in the US and Canada.
    autocomplete = new google.maps.places.Autocomplete(address1Field, {
      componentRestrictions: {
        country: ["us", "ca"]
      },
      fields: ["address_components", "geometry"],
      types: ["address"],
    });
    address1Field.focus();
    // When the user selects an address from the drop-down, populate the
    // address fields in the form.
    autocomplete.addListener("place_changed", fillInAddress);
  }

  function fillInAddress() {
    // Get the place details from the autocomplete object.
    const place = autocomplete.getPlace();
    let address1 = "";
    document.getElementById('latitude_input').value = place.geometry.location.lat();
    document.getElementById('longitude_input').value = place.geometry.location.lng();
    // let postcode = "";

    // Get each component of the address from the place details,
    // and then fill-in the corresponding field on the form.
    // place.address_components are google.maps.GeocoderAddressComponent objects
    // which are documented at http://goo.gle/3l5i5Mr
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

        case "postal_code_suffix": {
          postcode = `${postcode}-${component.long_name}`;
          break;
        }
        case "locality":
          document.querySelector("#locality").value = component.long_name;
          break;
        case "administrative_area_level_1": {
          document.querySelector("#state").value = component.short_name;
          break;
        }
        case "country":
          document.querySelector("#country").value = component.long_name;
          break;
      }
    }

    address1Field.value = address1;
    postalField.value = postcode;
    address2Field.focus();
  }
</script>

<!-- <script type="text/javascript" src="https://js.stripe.com/v2/"></script> -->

<script>
  $('#edit_member_modal_form').scroll(function(event) {
    console.log('--->', event.target.scrollTop)
    if (event.target.scrollTop > 12000) {
      $('.btnForDown').css('display', 'none')
      $('.btnForDownup').css('display', 'block')


    } else if (event.target.scrollTop < 12000) {
      $('.btnForDown').css('display', 'block')
      $('.btnForDownup').css('display', 'none')

    }
  });
  $('#edit_owner_modal_form').scroll(function(event) {
    console.log('--->', event.target.scrollTop)
    if (event.target.scrollTop > 12000) {
      $('.btnForDown').css('display', 'none')
      $('.btnForDownup').css('display', 'block')


    } else if (event.target.scrollTop < 12000) {
      $('.btnForDown').css('display', 'block')
      $('.btnForDownup').css('display', 'none')

    }
  });
</script>

<script type="text/javascript">
  $(function() {


    // open stripe page
    $('#team_data').on('click', function(e) {
      setTimeout(() => [
        $('#checkout-button').trigger('click')
      ], 1000)
    });
    // openChkModall
    $('.hideMpodal').on('click', function(e) {
      setTimeout(() => [
        $('#openChkModall').trigger('click')
      ], 1000)
    });

    $('.editformMpodal').on('click', function(e) {
      setTimeout(() => [
        $('#membereditModal').trigger('click')
      ], 1000)
    });

    $('.ownerform').on('click', function(e) {
      setTimeout(() => [
        $('#membereditownerModal').trigger('click')
      ], 1000)
    });

    $('.closety').on('click', () => {
      setTimeout(() => {
        $('.openTem').trigger('click')
      }, 1000)
    })

  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    
    $('.custom_address_stop').on('input', function() {
      $(this).val($(this).val().replace(/[^a-z0-9]/gi, ' '));
    });
 

    var obj;
    $("#Team_Button").click(function(e) {
      // alert('yes');
      e.preventDefault();
      Loader.show();
      setTimeout(function() {
        var obj = $("#saveInfoCleanerForm");
        var data = obj.serialize();
        var url = obj.attr('action');
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
          AdminToastr.success('<span for="%s" style="color:#fff" class="has-success help-block">Success.</span>', 'Success');
          $("#saveInfoCleanerModal").hide();
          // $("#exampleModal").show();
        }
        // Add return
        return false;
      }, 1000);
      // var myJSON = JSON.stringify(form_data);
      //   $.ajax({
      //        url: base_url + "account/save_member_form",
      //         type: "POST",
      //         dataType: "json",
      //         data: {
      //           "form_data": myJSON
      //                 },
      //                 success: function (data) {
      //                   console.log(data);
      //                   $("#saveInfoCleanerModal").hide();
      //                     $("#exampleModal").show();
      //                 },
      //                 error: function (data) {
      //                     console.log("ERROR");
      //                 }
      //               });
    });

    $("#edit_form_owner").click(function(e) {
      e.preventDefault();
      Loader.show();
      setTimeout(function() {
        // Prevent form submit
        var obj = $("#owner_form_edit");
        // Get form data
        var data = obj.serialize();
        // Get post url
        var url = obj.attr('action');
        // Submit action
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
          location.reload();
          // $("#edit_owner_modal_form").hide();
          // Add return
          return false;
        }
      }, 1000);
      return false;
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    var obj;
    $("#team_data").click(function(e) {
      e.preventDefault();
      Loader.show();
      var myJSON = JSON.stringify(team);
      setTimeout(function() {
        $.ajax({
          url: base_url + "account/team_name",
          type: "POST",
          dataType: "json",
          data: {
            "team": myJSON
          },
          success: function(data) {
            console.log("SUCCESS");
          },
          error: function(data) {
            console.log("ERROR");
          }
          //   // Prevent form submit
          //   var obj = $("#teamname");
          //   // Get form data
          //   var data = obj.serialize();
          //   // Get post url
          //   var url = obj.attr('action');
          //   // Submit action
          //   var response = AjaxRequest.fire(url, data);
          //   if (response.status) {
          //     location.reload();
          //   }
          //   // Add return
          //   return false;
        }, 1000);
        return false;
      });
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {

    $("#submit_Info").click(function(e) {

      var form = $(this).closest('form');

      setTimeout(function() {
        // Prevent form submitting
        e.preventDefault();
        //var data = $('#form-subscribe').serialize();
        // Get action url
        var url = form.attr('action');
        var data = new FormData(document.getElementById('saveForm'));
        var response = FileUploadScript.fire(url, data, 'json', true);
        return false;
      }, 1000);
      return false;
    });



    // upload document
    $("#uploaddocument").click(function(e) {

      var form = $(this).closest('form');

      setTimeout(function() {
        // Prevent form submitting
        e.preventDefault();
        //var data = $('#form-subscribe').serialize();
        // Get action url
        var url = form.attr('action');
        var data = new FormData(document.getElementById('updatedocument'));
        var response = FileUploadScript.fire(url, data, 'json', true);
        return false;
      }, 1000);
      return false;
    });




    $("#update_Card_Button").click(function(e) {
      var form = $(this).closest('form');
      setTimeout(function() {
        // Prevent form submitting
        e.preventDefault();
        //var data = $('#form-subscribe').serialize();
        // Get action url
        var url = form.attr('action');
        var data = new FormData(document.getElementById('saveCardForm'));
        var response = FileUploadScript.fire(url, data, 'json', true);
        return false;
      }, 1000);
      return false;
    });


    // $("#upgradePlanButtton").click(function(e) {
    //   var form = $(this).closest('form');
    //   setTimeout(function() {
    //     // Prevent form submitting
    //     e.preventDefault();
    //     //var data = $('#form-subscribe').serialize();
    //     // Get action url
    //     var url = form.attr('action');
    //     var data = new FormData(document.getElementById('payment-form'));
    //     var response = FileUploadScript.fire(url, data, 'json', true);
    //     return false;
    //   }, 1000);
    //   return false;
    // });


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
    // Profile image update end

  });
</script>
<script type="text/javascript">
  $(document).ready(function() {

    // delete function 
    $(".delete_this").on('click', function() {
      $("form#team_de_id .team_id").val(this.dataset.id);
      $('#deletememberBtn').trigger('click')
      // console.log($("form#team_de_id .team_id").val())
    });
    $(".delete_member").click(function(e) {
      Loader.show();
      setTimeout(function() {
        var obj = $("#team_de_id");
        var data = obj.serialize();
        var url = obj.attr('action');
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
          location.reload();
        }
        return false;
      }, 1000);
      return false;
    });
    // end delete function

    // edit function
    $('.edit_team').on('click', function() {
      console.log(this.dataset);
      $("form#team_edit .team_id_edit").val(this.dataset.id);
      $("form#team_edit .team_name").val(this.dataset.name);
      $("form#team_edit .team_email").val(this.dataset.email);
      $("form#team_edit .team_contact").val(this.dataset.contact);
    });
    $(".edit_update").click(function(e) {
      Loader.show();
      setTimeout(function() {
        var obj = $("#team_edit");
        var data = obj.serialize();
        var url = obj.attr('action');
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
          location.reload();
        }
        return false;
      }, 1000);
      return false;
    });

    $('.form_team').on('click', function() {
      // console.log(this.dataset);
      // return false;
      $("form#team_form_edit .team_id_edit_form").val(this.dataset.id);
      $("form#team_form_edit .member_name_user").val(this.dataset.memberName);
      $("form#team_form_edit .member_name").val(this.dataset.memberName);
      $("form#team_form_edit .member_signature").val(this.dataset.userTeamSignature);
      $("form#team_form_edit .initia_mem").val(this.dataset.userTeamInitials);
      $("form#team_form_edit .print_name").val(this.dataset.userTeamPrintName);
      $("form#team_form_edit .print_other_name").val(this.dataset.userTeamPrintOtherName);
      $("form#team_form_edit .social_security").val(this.dataset.userTeamSocialSecurityNumber);
      $("form#team_form_edit .date_birth_of").val(this.dataset.userTeamDateBirth);
      $("form#team_form_edit .driver_license").val(this.dataset.userTeamDriverLicense);
      $("form#team_form_edit .address_other").val(this.dataset.userTeamAddress);
      $("form#team_form_edit .date_print").val(this.dataset.userTeamDate);
      console.log(this.dataset);
      return false;
    });

    $(".edit_form_data").click(function(e) {
      Loader.show();
      setTimeout(function() {
        var obj = $("#team_form_edit");
        var data = obj.serialize();
        var url = obj.attr('action');
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
          location.reload();
        }
        return false;
      }, 1000);
      return false;
    });

    $('#example').DataTable();


  });

  // $("#myFile3Btn452").click(function(e){
  //   Loader.show();
  // });
</script>
<script>
  $(document).ready(function() {
    // total_earn
    var arr = [];
    var myTable = document.getElementById('myTable').getElementsByTagName('tr');
    for (var i = 0; i < myTable.length; i++) {
      arr.push(myTable[i].children[myTable[i].children.length - 1].innerHTML)
    }
    arr.map((val, i) => {
      arr[i] = parseFloat(val.split('$')[1]);
    });
    var sum = arr.reduce((a, b) => a + b, 0);
    $('#total_amount').text(sum.toFixed(2));

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
  });
</script>
<script>
  document.getElementById('phone').addEventListener('input', function(e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
  });

  document.getElementById('phone_1').addEventListener('input', function(e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
  });
</script>

<style>
  .last {
    text-transform: uppercase;   
   color: #495653 !important;
    font-family: gilroymedium !important;
  }
</style>
<script>
  let mycari = document.getElementsByClassName('myCapitalcustom_address')

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


<!-- <script type="text/javascript">
  $(function() {
    var $form = $(".require-validate");

    $('form.require-validate').bind('submit', function(e) {

      if (!$form.data('cc-on-file')) {
        e.preventDefault();
        Stripe.setPublishableKey($form.data('stripe-publishable-key'));
        Stripe.createToken({
          number: $('.card-number').val(),
          cvc: $('.card-cvc').val(),
          exp_month: $('.card-month').val(),
          exp_year: $('.card-year').val(),
        }, stripeResponseHandler);

      }
    });

    function stripeResponseHandler(status, response) {
      console.log("stripe");
      Loader.show();
      var token = response['id'];
      $form.find('input[type=text]').empty();
      $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
      $form.get(0).submit();

    }
  });
</script> -->