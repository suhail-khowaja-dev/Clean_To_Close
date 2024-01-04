<?php
$user_data = $this->model_signup->find_by_pk($this->userid);
?>
<style>
  .cs-col{
    width: 240px;
  }
  .cs-col ul{
      padding:0px 0 0 18px;
  }

  .contantPart label{
      margin-left: 0 !important;
      margin-top: 0 !important;
      line-height: 25px;
      font-size: 13px;
      text-transform: capitalize;
      word-break: break-word;
  }
  .property-task .whole-house-checks .checkbox {
    margin: 10px 0;
  }

  .property-task .whole-house-checks .checkbox label {
    margin-left: 0;
    color: #666666;
  }

  .small-fnt {
    padding-left: 0;
    margin: 10px 0;
    word-break: break-all;
  }

  .small-fnt label {
    font-size: 12px;
      height: 0;
  }

  .small-fnt .checkmark {
    right: 0;
    left: unset;
  }

  .after label {
    margin-left: 10px;
    color: #000;
    font-weight: 600;
      font-size: 14px;
  }
  .warn-p {
      font-size: 16px;
  }
</style>
<!-- homeMain -->
<div class="Main cspss">
  <div class="dashboard ">
    <?php
    $this->load->view('account/detail_tabs');
    ?>



    <div class="main-div contantPart">

      <div class="container">
        <!-- condition for note -->
        <?php
        if ($cleaning_detail['cleaning_service_cleaner_id'] != 0) {
          $deliverytime = $cleaning_detail['cleaning_service_closing_time'];
          $deliverydate = $cleaning_detail['cleaning_service_closing_date'];
          $active = $deliverydate . ' ' . $deliverytime;
          $dt_active = new DateTime($active);
          $date_past = ($dt_active)->modify('-24 hours');
          $my_date =  date_format($date_past, 'Y-m-d H:i:s');
          $today = date("Y-m-d H:i:s");
          $date = $my_date;
          if ($today >=  $date) { ?>
          <? } else { ?>
            <p style="margin-bottom: -10px;">Note:</p>
            <p class="warn-p">
              Access details will be shown 24 hours prior to the scheduled service. 
            </p>
        <?php
          }
        }
        ?>
        <!-- condition for note -->
        <!-- My Task Section -->
        <?php
        if ($cleaning_detail['cleaning_service_cleaner_id'] == 0) { ?>
          <p style="margin-bottom: -10px;">Note:</p>
          <p class="warn-p">
            Access details will be shown 24 hours prior to the scheduled service.
          </p>
          <div class='proAddAdd cssGH mt30'>
           <?php  echo $cleaning_detail['cleaning_service_address'] ?>,  <?php echo $cleaning_detail['cleaning_service_city'] ?>, <?php echo $cleaning_detail['cleaning_service_state'] ?>,<?php echo $cleaning_detail['cleaning_service_zipcode']?>
            <!-- end -->
          </div>
        <?php
        } else {
        ?>
          <div class='proAddAdd cssGH mt30 mywordbreak'>
            <!-- for address -->
            <?php
            $deliverytime = $cleaning_detail['cleaning_service_closing_time'];
            $deliverydate = $cleaning_detail['cleaning_service_closing_date'];
            $active = $deliverydate . ' ' . $deliverytime;
            $dt_active = new DateTime($active);
            $date_past = ($dt_active)->modify('-24 hours');
            $my_date =  date_format($date_past, 'Y-m-d H:i:s');
            $today = date("Y-m-d H:i:s");
            $date = $my_date;
            if ($today >=  $date) {
               echo $cleaning_detail['cleaning_service_address'] , ", ",  $cleaning_detail['cleaning_service_city'] , ", ",  $cleaning_detail['cleaning_service_state'], ", ",  $cleaning_detail['cleaning_service_zipcode'];
            } else {
               echo $cleaning_detail['cleaning_service_address'] , ", ",  $cleaning_detail['cleaning_service_city'] , ", ",  $cleaning_detail['cleaning_service_state'], ", ",  $cleaning_detail['cleaning_service_zipcode'];
                                                              }
                                                                ?>
            <!-- end -->
          </div>
        <?php
        }
        ?>


        <div class="d-flex propertyAddBoxtab3" style="display: none !important;">
          <div class="propertyAddTab3">
            <div class="">
              <p class='propertyAddTab3h'>DATE OF SERVICE</p>
              <p class='propertyAddTab3p'>05/12/2020</p>
            </div>
            <div class="">
              <p class='propertyAddTab3h'>TIME OF ARRIVAL</p>
              <p class='propertyAddTab3p'>10:00 PM</p>
            </div>
            <div class="">
              <p class='propertyAddTab3h'>ACCESS DETAILS</p>
              <p class='propertyAddTab3p'></p>
            </div>
          </div>
        </div>
        <div class="d-flex propertyAddBoxtab3">
          <div class="propertyAddTab3">

            <div class="">
              <p class='propertyAddTab3h'>PROPERTY TYPE</p>
              <p class='propertyAddTab3p'><?php echo $cleaning_detail['cleaning_service_type_residence'] ?></p>
            </div>
            <div class="">
              <p class='propertyAddTab3h'>SQUARE FOOTAGE</p>
              <p class='propertyAddTab3p'><?php echo $cleaning_detail['sqft_area'] ?></p>
            </div>

            <div class="">
              <p class='propertyAddTab3h'>BEDROOMS</p>
              <p class='propertyAddTab3p'><?php echo $cleaning_detail['cleaning_service_bedrooms'] ?></p>
            </div>
            <div class="">
              <p class='propertyAddTab3h'>FULL BATH</p>
              <p class='propertyAddTab3p'><?php echo $cleaning_detail['cleaning_service_bathroom'] ?></p>
            </div>
            <div class="">
              <p class='propertyAddTab3h'>HALF BATH</p>
              <p class='propertyAddTab3p'><?php echo $cleaning_detail['cleaning_service_full_bathroom'] ?></p>
            </div>

          </div>
        </div>

        <div class="d-flex propertyAddBoxtab3">
          <div class="propertyAddTab3">
            <div class="">
              <p class='propertyAddTab3h'>PACKAGE DETAILS</p>
              <p class='propertyAddTab3p'><?php echo $cleaning_detail['cleaning_service_package_name'] ?></p>
            </div>
            <div class="">
              <?php
              $amout_cleaner = $this->model_cleaner_percentage->find_all();
              // debug($amout_cleaner[0],1);
              $myNumber = $cleaning_detail['cleaning_service_total_amount'];

              $percentToGet = $amout_cleaner[0]['cleaner_percentage_value'];
              // debug($percentToGet,1);

              $percent =  $myNumber - ($myNumber * ($percentToGet  / 100));
              ?>
              <p class='propertyAddTab3h'>Amount Paid To Cleaner</p>
              <p class='propertyAddTab3p'>$<?php echo number_format($percent,2) ?></p>
            </div>
            <div class="">
              <p class='propertyAddTab3h'>Additional Add-Ons</p>
              <?php if ($cleaning_detail['cleaning_service_additional_kitchen'] != 'N/A') { ?>
                <?php
                $cleaning_additional = unserialize($cleaning_detail['cleaning_service_additional_kitchen']);

                foreach ($cleaning_additional as $key => $value) {
                  $param1['where']['additional_add_ons_id'] = $value;
                  $param1['where']['additional_add_ons_type'] = 1;
                  $additional_add_3 = $this->model_additional_add_ons->find_all_active($param1);
                ?>
                  <p class='propertyAddTab3p'><?php echo $additional_add_3[0]['additional_add_ons_name'] ?: 'N/A' ?> </p>
                <?php
                }
                ?>
              <?php
              }
              ?>
            </div>


          </div>

          <p class='propertyAddTab3h'>Property task list</p>
          <div class="d-flex flex-wrap">
            <?php foreach ($package_1 as $value) { ?>
              <?php
              $para12['where']['package_service_type_id'] = $value['type_clean_package_id'];
              $package_service_1 = $this->model_package_service->find_all_active($para12);
              ?>
              <!-- <div class="col-lg-12"> -->
               <div class="cs-col">

               
                  <div class="after">
                    <label for=""><?php echo  $value['type_clean_package_type'] ?></label>
                
                </div>
                  <!-- <div class="col-lg-3"> -->
                   <div class="whole-house-checks">
                       <label class="cstm-checkbox small-fnt">
                   <ul>
                  <?php foreach ($package_service_1 as $key => $value_package_service) { ?>


                              <li for="<?php echo  $key ?>"> <?php echo  $value_package_service['package_service_name'] ?>

                              </li>




                  <?php
                  }
                  ?>
                   </ul>
                       </label>
                   </div>
                  </div>
                  <!-- </div> -->

                <!-- </div> -->
              <!-- </div> -->
            <?php
            }
            ?>
          </div>
        </div>

        <?php
        if ($cleaning_detail['cleaning_service_cleaner_id'] != 0) {
          $deliverytime = $cleaning_detail['cleaning_service_closing_time'];
          $deliverydate = $cleaning_detail['cleaning_service_closing_date'];
          $active = $deliverydate . ' ' . $deliverytime;
          $dt_active = new DateTime($active);
          $date_past = ($dt_active)->modify('-24 hours');
          $my_date =  date_format($date_past, 'Y-m-d H:i:s');
          $today = date("Y-m-d H:i:s");
          $date = $my_date;
          if ($today >=  $date) { ?>
            <div class="d-flex propertyAddBoxtab3">
              <p class='propertyAddTab3h' style="font-size: 18px;color:#000 !important">Access Details</p>
              <!-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="col-lg-12">
                    <p class='propertyAddTab3h'>PROPERTY ACCESS INFORMATION: <?php echo $cleaning_detail['cleaning_service_lockbox'] ?> </p>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <p class='propertyAddTab3h'>CODE INFORMATION: <?php echo $cleaning_detail['cleaning_service_code_info'] ?> </p>
                    </div>
                    <div class="col-lg-6">
                      <p class='propertyAddTab3h'> LOCATION OF LOCKBOX: <?php echo $cleaning_detail['cleaning_service_location_of_lockbox'] ?> </p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <p class='propertyAddTab3h'>ONE DAY CODE OR CBS CODE: <?php echo $cleaning_detail['cleaning_service_supra_cbs_code'] ?> </p>
                    </div>
                    <div class="col-lg-6">
                      <p class='propertyAddTab3h'>ADDITIONAL INFORMATION FOR ACCESS: <?php echo $cleaning_detail['cleaning_service_garage'] ?> </p>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="propertyAddTab3">
                <div class="">
                  <p class="propertyAddTab3h">PROPERTY ACCESS INFORMATION</p>
                  <p class="propertyAddTab3p"><?php echo $cleaning_detail['cleaning_service_lockbox'] ?></p>
                </div>
                <div class="">
                  <p class="propertyAddTab3h">CODE INFORMATION</p>
                  <p class="propertyAddTab3p"><?php echo $cleaning_detail['cleaning_service_code_info'] ?></p>
                </div>
                <div class="">
                  <p class="propertyAddTab3h">LOCATION OF LOCKBOX</p>
                  <p class="propertyAddTab3p"><?php echo $cleaning_detail['cleaning_service_location_of_lockbox'] ?></p>
                </div>
                <div class="">
                  <p class="propertyAddTab3h">ONE DAY CODE OR CBS CODE</p>
                  <p class="propertyAddTab3p"><?php echo $cleaning_detail['cleaning_service_supra_cbs_code'] ?></p>
                </div>
                <div class="">
                  <p class="propertyAddTab3h">ADDITIONAL INFORMATION FOR ACCESS</p>
                  <p class="propertyAddTab3p"><?php echo $cleaning_detail['cleaning_service_garage'] ?></p>
                </div>
              </div>
            </div>

          <?php
          }
        } else { ?>

        <?php
        }
        ?>
      </div>
      <div class="container">
      <?php
      if ($cleaning_detail['cleaning_service_cleaner_id'] != 0) { ?>
        <!--<div class="col-lg-12 text-left">-->
          <a href="<?= g('base_url') ?>account/my_task">
            <button type="button" class="back_button_detail">Back</button>
          </a>
        <!--</div>-->
      <? } else { ?>
        <!--<div class="col-lg-12 text-left">-->
          <a href="<?= g('base_url') ?>account/browse_task">
            <button type="button" class="back_button_my_task">Back</button>
          </a>
        <!--</div>-->
      <?php
      }
      ?>
</div>
    </div>
  </div>

</div>
</div>


<!-- IveArrived -->
<div class="modal fade arrModal" id="IveArrived" tabindex="-1" role="dialog" aria-labelledby="IveArrivedLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2>Arrival Time Detail</h2>
        <hr>
        <form action="<?= g('base_url') ?>account/arrival_time" method="post" id="arrivaltime" class="footTop">
          <div class="mBodyy">
            <div class="row">
              <input type="hidden" name="arrivaltime[arrival_time_reltor_id]" value="<?php echo $cleaning_detail['cleaning_service_user_id'] ?>">
              <input type="hidden" name="arrivaltime[arrival_time_cleaning_id]" value="<?php echo $cleaning_detail['cleaning_service_id'] ?>">
              <input type="hidden" name="arrivaltime[arrival_time_cleaner_id]" value="<?php echo $this->userid ?>">
              <div class="col-lg-6 d-flex flex-column mt20">
                <label for="">Name</label>
                <input type="text" name="arrivaltime[arrival_time_name]" value="<?php echo $user_data['signup_name'] ?>" readonly>
              </div>
              <div class="col-lg-6 d-flex flex-column mt20">
                <label for="">Date</label>
                <input type="text" name="arrivaltime[arrival_time_datetime]" value="<?php
                     $date = new DateTime();
                     echo $date->format('m/d/y g:i A') ?>" readonly>
              </div>
              <div class="col-lg-12 d-flex flex-column mt20">
                <label for="">Address</label>
                <input type="text" name="arrivaltime[arrival_time_address]" value="<?php echo $cleaning_detail['cleaning_service_address'] ?>" readonly>
              </div>
              <!--<div class="col-lg-12 d-flex flex-column mt20">-->
              <!--  <label for="">Message</label>-->
              <!--  <textarea name="arrivaltime[arrival_time_message]" id="" cols="30" rows="5"></textarea>-->
              <!--</div>-->
            </div>
            <div class="row">
              <div class="col-lg-12 text-right">
                <a href="javascriptvoid(0)">
                  <button type="button" id="arrival_data">Arrived</button>
                </a>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- IveLeft -->
<div class="modal fade arrModal" id="IveLeft" tabindex="-1" role="dialog" aria-labelledby="IveLeftLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2>Left Time Detail</h2>
        <hr>
        <form action="<?= g('base_url') ?>account/left_time" method="post" id="lefttime" class="footTop">
          <input type="hidden" name="lefttime[left_time_reltor_id]" value="<?php echo $cleaning_detail['cleaning_service_user_id'] ?>">
          <input type="hidden" name="lefttime[left_time_cleaning_id]" value="<?php echo $cleaning_detail['cleaning_service_id'] ?>">
          <input type="hidden" name="lefttime[left_time_cleaner_id]" value="<?php echo $this->userid ?>">
          <div class="mBodyy">
            <div class="row">
              <div class="col-lg-6 d-flex flex-column mt20">
                <label for="">Name</label>
                <input type="text" name="lefttime[left_time_name]" value="<?php echo $user_data['signup_name'] ?>" readonly>
              </div>
              <div class="col-lg-6 d-flex flex-column mt20">
                <label for="">Date</label>
                <input type="text" name="lefttime[left_time_datetime]" value="<?php
                                                                              $date = new DateTime();
                                                                              echo $date->format('m/d/y g:i A') ?>" readonly>
              </div>
              <div class="col-lg-12 d-flex flex-column mt20">
                <label for="">Address</label>
                <input type="text" name="lefttime[left_time_address]" value="<?php echo $cleaning_detail['cleaning_service_address'] ?>" readonly>
              </div>
              <!--<div class="col-lg-12 d-flex flex-column mt20">-->
              <!--  <label for="">Message</label>-->
              <!--  <textarea name="lefttime[left_time_message]" id="" cols="30" rows="5"></textarea>-->
              <!--</div>-->
            </div>
            <div class="row">
              <?php
              if ($cleaning_detail['cleaning_service_cleaner_id'] != 0) {
                $deliverytime = $cleaning_detail['cleaning_service_closing_time'];
                $deliverydate = $cleaning_detail['cleaning_service_closing_date'];
                $active = $deliverydate . ' ' . $deliverytime;
                //  debug($active);
                $dt_active = new DateTime($active);
                //  debug($dt_active);
                $date_past = ($dt_active)->modify('-24 hours');
                // debug($date_past);
                $my_date =  date_format($date_past, 'Y-m-d H:i:s');
                //  debug($my_date);
                // $hour = (int) $dt_active->format('H');
                $today = date("Y-m-d H:i:s");
                // debug($today);
                // $date = $date_past;
                $date = $my_date;
                // debug($today);
                // debug($date,1);
                if ($today >=  $date) { ?>
                  <div class="col-lg-12 text-right">
                    <a href="javascriptvoid(0)">
                      <button id="left_data">Left</button>
                    </a>
                  </div>
                <? }
              } else { ?>
                <div class="col-lg-12 text-right">
                  <a href="javascriptvoid(0)">
                    <button id="left_data">Left</button>
                  </a>
                </div>
              <?php
              }
              ?>

            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    var obj;
    $("#arrival_data").click(function(e) {
      e.preventDefault();
      Loader.show();
      setTimeout(function() {
        // Prevent form submit
        var obj = $("#arrivaltime");
        // Get form data
        var data = obj.serialize();
        // Get post url
        var url = obj.attr('action');
        // Submit action
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
          location.reload();
        }
        // Add return
        return false;
      }, 1000);
      return false;
    });

    $("#left_data").click(function(e) {
      e.preventDefault();
      Loader.show();
      setTimeout(function() {
        // Prevent form submit
        var obj = $("#lefttime");
        // Get form data
        var data = obj.serialize();
        // Get post url
        var url = obj.attr('action');
        // Submit action
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
          location.reload();
        }
        // Add return
        return false;
      }, 1000);
      return false;
    });
  });


  $('.mywordbreak').on('change', () => {

  })
</script>