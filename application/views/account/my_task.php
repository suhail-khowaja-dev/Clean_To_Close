<?php        
		$admin_email = $this->model_emails->find_all();
    // debug($admin_email,1);
    ?>
<style>
  #my_task th:nth-child(1),
  #my_task1 th:nth-child(1),
  #my_task2 th:nth-child(1) {
    width: 350px !important;
  }

  #my_task th:nth-child(2),
  #my_task1 th:nth-child(2),
  #my_task2 th:nth-child(2) {
    width: 185px !important;
  }

  #my_task th:nth-child(3),
  #my_task1 th:nth-child(3),
  #my_task2 th:nth-child(3) {
    width: 185px !important;
  }

  .relase_job,
  .update_relase_job,
  .accpet_relase_job {
    margin: 0 1px !important
  }

  .dashboard .allorderTabuler input {
    width: 300px;
    padding: 5px 10px 5px 10px;
  }

  .viewDocBtn {
    font-size: 15px;
  }

  tbody tr td:last-child {  
    display: flex;
    width: 294px;;
    text-align: center;
    justify-content: center;
  }
  .mytableClass{
    justify-content: flex-start !important;
  }
</style>

<div class="Main">
  <div class="dashboard  ">
    <div class="main-div contantPart">

      <div class="container">
        <!--Inner Start-->
        <!-- BEGIN SIDEBAR -->
        <? $this->load->view('account/header_main') ?>
        <!-- END SIDEBAR -->

        <!-- My Task Section -->

        <div class="navigation d-flex align-items-center justify-content-between">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-openOrders-tab" data-toggle="pill" href="#pills-openOrders" role="tab" aria-controls="pills-openOrders" aria-selected="false">Open Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " id="pills-Submitted-tab" data-toggle="pill" href="#pills-Submitted" role="tab" aria-controls="pills-Submitted" aria-selected="true">Submitted</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " id="pills-Compeleted-tab" data-toggle="pill" href="#pills-Compeleted" role="tab" aria-controls="pills-Compeleted" aria-selected="true">Completed</a>
            </li>
          </ul>
          <a href="<?= g('base_url') ?>account/browse_task">
            <button>CLAIM NEW JOB</button>
          </a>
        </div>


        <div class="tab-content mt20 mb3" id="nav-tabContent">
          <div class="tab-pane fade active show" id="pills-openOrders" role="tabpanel" aria-labelledby="pills-openOrders-tab">
            <div class="allorderTabuler">

              <div class="myOrderTabular">
                <table class="table custom_table" id="my_task">
                  <thead>
                    <tr>
                      <th scope="col">Address</th>
                      <th scope="col">Service Date</th>
                      <th scope="col custom_Col">Arrival Time</th>
                      <th scope="col custom_Col">Amount Payable</th>
                      <th scope="col custom_Col"></th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $params['joins'][] = array(
                      "table" => "sqft",
                      "joint" => "sqft.sqft_id = cleaning_service.cleaning_service_square_footage"
                    );
                    $params['joins'][] = array(
                      "table" => "signup",
                      "joint" => "signup.signup_id = cleaning_service.cleaning_service_cleaner_id"
                    );
                    $params['where']['signup_id'] = $this->userid;
                    $params['where']['cleaning_service_cleaner_id >'] = 0;
                    $params['where']['cleaning_service_upload_user_id'] = 0;
                    $params['where']['cleaning_service_compelted_user_id'] = 0;
                    $params['order'] = "cleaning_service_id DESC";
                    $cleaning_realtor = $this->model_cleaning_service->find_all($params);
                   
                    ?>
                    
                    <?php foreach ($cleaning_realtor as $key => $value) { ?>
                        <?php
                              $amout_cleaner = $this->model_cleaner_percentage->find_all();
                                  
                                  $myNumber = $value['cleaning_service_total_amount'];
                                      
                                     $percentToGet = $amout_cleaner[0]['cleaner_percentage_value'];
                                   
                                       $percent =  $myNumber - ($myNumber * ($percentToGet  / 100));
                                       
                                        ?>
                      <?php if($value['cleaning_service_cancel_status'] > 0 && $value['cleaning_service_status'] != 1){?>
                            <tr>
                              <td> <?php echo $value['cleaning_service_address'] ?>,  <?php echo $value['cleaning_service_city'] ?>,  <?php echo $value['cleaning_service_state'] ?>, <?php echo $value['cleaning_service_zipcode'] ?></td>
                              <td>
                                    <?php
                                      $date = date_create($value['cleaning_service_closing_date']);
                                      echo date_format($date, "m/d/y") ?>
                                </td>
                              <td>
                                <?php
                                  echo date("g:i A", strtotime($value['cleaning_service_closing_time'])) ?>
                                </td>
                                <td>$<?php echo number_format($percent,2) ?> </td>
                                <td  class="">
                                  <button class="canceled_job">
                                    Canceled
                                  </button>
                              </td>
                            </tr>
                        <?}else{?>
                          <tr>
                        <td class="
                        <?php
                        if ($value['cleaning_service_update_status']  > 0) { ?>
                            <?php echo 'twoBtns' ?>
                          <?php
                        }
                          ?>
                        ">
                          <a href="<?= g('base_url') ?>account/view_detail?id=<?php echo $value['cleaning_service_id']; ?>" data-toggle="tooltip" data-placement="top" title="Click here to see details" class="hovio">
                            <?php
                            if ($value['cleaning_service_update_status'] > 0) {?>
                               <?php echo $value['cleaning_service_address'] ?>,  <?php echo $value['cleaning_service_city'] ?>,  <?php echo $value['cleaning_service_state'] ?>
                              <? } else { ?>
                                <?php echo $value['cleaning_service_address'] ?>,  <?php echo $value['cleaning_service_city'] ?>,  <?php echo $value['cleaning_service_state'] ?>
                            <?php
                              }
                            ?>
                          </a>
                        </td>
                        <td><?php
                            $date = date_create($value['cleaning_service_closing_date']);
                            echo date_format($date, "m/d/y") ?></td>

                        <td><?php
                            echo date("g:i A", strtotime($value['cleaning_service_closing_time'])) ?></td>
                            <td>$<?php echo number_format($percent,2) ?> </td>
                        <?php
                        $start_date = new DateTime();
                        $date_vlaue = $start_date->modify('+5 day')->format('m/d/Y');
                        ?>
                        <td>
                          <button <?php if ($value['cleaning_service_update_status']  > 0) { ?> class="update_relase_job" data-target="#updatereleaseModal" <? } else { ?> class="relase_job" <?php if ($value['cleaning_service_closing_date']  <= $date_vlaue) { ?> data-target="#notreleaseModal" <? } else { ?> data-target="#releaseModal" <?php
                          } ?> <?php
                        } ?> data-id="<?php echo $value['cleaning_service_id'] ?>" data-toggle="modal">Release Job</button>
                          <?php
                          if ($value['cleaning_service_update_status']  > 0) { ?>
                            <button class="accpet_relase_job" data-toggle="modal" data-target="#updateaccpetreleaseModal" data-id="<?php echo $value['cleaning_service_id'] ?>">Re-Accept Job</button>
                          <? } else { ?>
                          <?php
                          }
                          ?>
                        </td>
                      </tr>
                          <?php
                        }
                        ?>
                      
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>

            </div>
          </div>

          <div class="tab-pane fade " id="pills-Submitted" role="tabpanel" aria-labelledby="pills-Submitted-tab">
            <div class="allorderTabuler">

              <div class="myOrderTabular">
                <table class="table" id="my_task1">
                  <thead>
                    <tr role="row">
                      <th scope="col" class="sorting" tabindex="0" aria-controls="my_task" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 350px;">Address</th>
                      <th scope="col" class="sorting" tabindex="0" aria-controls="my_task" rowspan="1" colspan="1" aria-label="Service Date: activate to sort column ascending" style="width: 185px;">Service Date</th>
                      <th scope="col custom_Col" class="sorting" tabindex="0" aria-controls="my_task" rowspan="1" colspan="1" aria-label="Arrival Time: activate to sort column ascending" style="width: 185px;">Arrival Time</th>
                      <th scope="col custom_Col" class="sorting" tabindex="0" aria-controls="my_task" rowspan="1" colspan="1" aria-label="Arrival Time: activate to sort column ascending" style="width: 185px;">Amount Payable</th>
                      <th scope="col custom_Col" class="sorting sorting_desc" tabindex="0" aria-controls="my_task" rowspan="1" colspan="1" aria-sort="descending" aria-label=": activate to sort column ascending" style="width: 290px;"></th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php

                    $param['joins'][] = array(
                      "table" => "signup",
                      "joint" => "signup.signup_id = cleaning_service.cleaning_service_cleaner_id"
                    );
                    $param['joins'][] = array(
                      "table" => "upload_document",
                      "joint" => "upload_document.upload_document_cleaning_id = cleaning_service.cleaning_service_id"
                    );
                    $param['where']['signup_id'] = $this->userid;
                    $param['where']['cleaning_service_cleaner_id'] = $this->userid;
                    $param['where']['cleaning_service_status'] = 4;
                    $param['where']['cleaning_service_cleaner_id >'] = 0;
                    $param['where']['cleaning_service_upload_user_id >'] = 0;
                    $param['where']['cleaning_service_compelted_user_id'] = 0;
                    $param['order'] = "cleaning_service_id DESC";
                    $submit_data = $this->model_cleaning_service->find_all($param);
                    // debug($submit_data,1);
                    ?>
                    <?php foreach ($submit_data as $key => $value) { ?>
                      <?php
                                                $amout_cleaner = $this->model_cleaner_percentage->find_all();
                                                // debug($amout_cleaner,1);
                                                $myNumber = $value['cleaning_service_total_amount'];
                                                // debug($myNumber,1);
                                                //I want to get 25% of 928.
                                                $percentToGet = $amout_cleaner[0]['cleaner_percentage_value'];
                                                // debug($percentToGet,1);
                                                //Get the result.
                                                $percent =  $myNumber - ($myNumber * ($percentToGet  / 100));
                                                // debug($percent,1);
                                                ?>
                      <tr>
                        <td><?php echo $value['cleaning_service_address'] ?>,  <?php echo $value['cleaning_service_city'] ?>,  <?php echo $value['cleaning_service_state'] ?></td>
                        <td><?php
                            $date = date_create($value['cleaning_service_closing_date']);
                            echo date_format($date, "m/d/y") ?></td>
                        <td><?php
                            echo date("g:i A", strtotime($value['cleaning_service_closing_time'])) ?></td>
                            <td>$<?php echo  number_format($percent,2) ?></td>
                        <td>
                          <a href="<?= g('base_url') ?>account/editdocument?id=<?php echo $value['upload_document_id']; ?>">
                            <button type="button" data-toggle="modal" data-target="#exampleModal<?php echo $key ?>" class="viewDocBtn">View Document</button>
                          </a>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="tab-pane fade " id="pills-Compeleted" role="tabpanel" aria-labelledby="pills-Compeleted-tab">
            <div class="allorderTabuler">
              <div class="myOrderTabular">
                <table class="table" id="my_task2">
                  <thead>
                    <tr>
                      <th scope="col">Address</th>
                      <th scope="col">Service Date</th>
                      <th scope="col">Arrival Time</th>
                      <th scope="col">Amount Payable</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!--<tr>-->
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
                      ?>
                      <?php foreach ($completed_data as $key => $value) { ?>
                      <tr>
                        <?php
                                                $amout_cleaner = $this->model_cleaner_percentage->find_all();
                                                // debug($amout_cleaner,1);
                                                $myNumber = $value['cleaning_service_total_amount'];
                                                // debug($myNumber,1);
                                                //I want to get 25% of 928.
                                                $percentToGet = $amout_cleaner[0]['cleaner_percentage_value'];
                                                // debug($percentToGet,1);
                                                //Get the result.
                                                $percent =  $myNumber - ($myNumber * ($percentToGet  / 100));
                                                // debug($percent,1);
                                                ?>
                   
                      <td><?php echo $value['cleaning_service_address'] ?>,  <?php echo $value['cleaning_service_city'] ?>,  <?php echo $value['cleaning_service_state'] ?></td>
                      <td><?php
                          $date = date_create($value['cleaning_service_closing_date']);
                          echo date_format($date, "m/d/y") ?></td>
                      <td><?php
                          echo date("g:i A", strtotime($value['cleaning_service_closing_time'])) ?></td>
                          <td class="mytableClass">$<?php echo number_format($percent,2)?></td>
                       </tr> 
                  <?php
                      }
                  ?>
                  <!--</tr>-->
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>




    </div>
  </div>

  <!-- Modals -->
  <!-- View Document Modal -->
  <!-- release job modal -->
  <div class="modal fade" id="releaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header add_member">
          <h5 class="modal-title" id="exampleModalLabel">Release Job</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= g('base_url') ?>account/cancle_cleaning" method="post" id="relase_job">
          <div class="modal-body">
            <input hidden name="cleanerid[cleaning_service_id]" value="" class="service_id_input_relase_job">
            <input hidden name="cleanerid[cleaning_service_cleaner_id]" value="<?php echo $this->userid ?>">
            <p style="font-size:17px;">This job no longer works in my schedule and I will be releasing the job back for others to claim</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="formBtn greenBtn relase_job_for_open">Accept</button>
            <button type="button" class="relase_job" data-dismiss="modal">Decline</button>
            <!-- <button type="button" class="formBtn greenBtn">I am releasing this job</button>
        <button type="button" class="formBtn greenBtn" data-dismiss="modal">I want to keep the job and the date works</button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end -->

  <!-- Not release job modal -->
  <div class="modal fade" id="notreleaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header add_member">
          <h5 class="modal-title" id="exampleModalLabel">Release Job</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- <input hidden name="cleanerid[cleaning_service_id]" value="" class="service_id_input_relase_job">
            <input hidden name="cleanerid[cleaning_service_cleaner_id]" value="<?php echo $this->userid ?>"> -->
          <p style="font-size:17px;">
          This job is less than 5 days away and can't be released online. Please contact support for assistance at <a href="mailto:<?php echo $admin_email[3]['emails_value']?>?subject=Support" target="_blank"><?php echo $admin_email[3]['emails_value']?></a> .
          </p>
          <p style="font-size:17px;">
          PLEASE NOTE : If this date is less than 72 hours from the service date, there will be a mandatory $55 emergency fee. If you do not show for an accepted cleaning appointment there will be a $125 fee charged to the card/account on file. See our <a href="<?= g('base_url') ?>terms-condition" target="_blank">Terms and Conditions</a> for more information.
          </p>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="formBtn greenBtn relase_job_for_open">Accept</button>
            <button type="button" class="relase_job" data-dismiss="modal">Decline</button> -->
          <!-- <button type="button" class="formBtn greenBtn">I am releasing this job</button>
        <button type="button" class="formBtn greenBtn" data-dismiss="modal">I want to keep the job and the date works</button> -->
        </div>
        <!-- </form> -->
      </div>
    </div>
  </div>
  <!-- end -->

  <!-- release_update_modal job-->
  <div class="modal fade" id="updatereleaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header add_member">
          <h5 class="modal-title" id="exampleModalLabel">Release Job</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= g('base_url') ?>account/update_cleaning_release" method="post" id="relase_job_update">
          <div class="modal-body">
            <input hidden name="cleanerupdateid[cleaning_service_id]" value="" class="service_id_input_update_job">
            <input hidden name="cleanerupdateid[cleaning_service_cleaner_id]" value="<?php echo $this->userid ?>">
            <p style="font-size:17px;">The new time and date no longer work within my schedule. I will be releasing this job back for others to claim</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="formBtn greenBtn relase_update_job_open">Release</button>
            <?php
            ?>
            <!-- <button type="button" class="relase_job" data-dismiss="modal" data-id="" data-user-id="<?php echo $this->userid ?>">Decline</button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end -->

  <!-- release_update_modal_accpet job-->
  <div class="modal fade" id="updateaccpetreleaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header add_member">
          <h5 class="modal-title" id="exampleModalLabel">Accept Job</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= g('base_url') ?>account/update_cleaning_accpet" method="post" id="update_cleaning_accpet">
          <div class="modal-body">
            <input hidden name="cleanerupdateid[cleaning_service_id]" value="" class="service_id_input_update__accpet_job">
            <input hidden name="cleanerupdateid[cleaning_service_cleaner_id]" value="<?php echo $this->userid ?>">
            <p style="font-size:17px;">This job has been rescheduled. By accepting this job you are accepting the new/date time requirements that are now displayed in your dashboard.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="formBtn greenBtn relase_update_accpet_job_open">Accept</button>
            <?php
            ?>
            <!-- <button type="button" class="relase_job" data-dismiss="modal" data-id="" data-user-id="<?php echo $this->userid ?>">Decline</button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end -->

  <!-- end of modals -->

</div>

<script>
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
  $(document).ready(function() {

    // relase job function
    $(".relase_job").click(function(e) {
      $("form#relase_job .service_id_input_relase_job").val(this.dataset.id);
    });

    $(".update_relase_job").click(function(e) {
      // console.log(this.dataset.id);
      $("form#relase_job_update .service_id_input_update_job").val(this.dataset.id);
    });

    $(".accpet_relase_job").click(function(e) {
      // console.log(this.dataset.id);
      $("form#update_cleaning_accpet .service_id_input_update__accpet_job").val(this.dataset.id);
    });


    $(".relase_job_for_open").click(function(e) {
      Loader.show();
      setTimeout(function() {
        var obj = $("#relase_job");
        var data = obj.serialize();
        var url = obj.attr('action');
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
          window.location.href = "<?= g('base_url') ?>account/browse_task";
        }
        return false;
      }, 1000);
      return false;
    });
    // end of function

    $(function() {
      $("#my_task").dataTable({
        // "aaSorting": [ [0,'desc'], [1,'desc'] ],
        "aaSorting": [
          [3, 'desc']
        ],
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bInfo": false,
        "searching": true,
        "bSort": true,
      });
    });

    $(function() {
      $("#my_task1").dataTable({
        // "aaSorting": [ [0,'desc'], [1,'desc'] ],
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bInfo": false,
        "searching": true,
        "bSort": false,
        // "pageLength": 50
      });
    });

    $(function() {
      $("#my_task2").dataTable({
        // "aaSorting": [ [0,'desc'], [1,'desc'] ],
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bInfo": false,
        "searching": true,
        "bSort": false,
        // "pageLength": 50
      });
    });

    // for relase again after update date
    $(".relase_update_job_open").click(function(e) {
      Loader.show();
      setTimeout(function() {
        var obj = $("#relase_job_update");
        var data = obj.serialize();
        var url = obj.attr('action');
        var response = AjaxRequest.fire(url, data);
        if (response.status) {

          window.location.href = "<?= g('base_url') ?>account/my_task";
        }
        return false;
      }, 1000);
      return false;
    });

    // for accpet again after update date
    $(".relase_update_accpet_job_open").click(function(e) {
      Loader.show();
      setTimeout(function() {
        var obj = $("#update_cleaning_accpet");
        var data = obj.serialize();
        var url = obj.attr('action');
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
          window.location.href = "<?= g('base_url') ?>account/my_task";
        }
        return false;
      }, 1000);
      return false;
    });
  });
</script>