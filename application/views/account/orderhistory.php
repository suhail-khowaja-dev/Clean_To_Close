<?php
$admin_email = $this->model_emails->find_all();
// debug($admin_email,1);
?>
<style>
  .actionbtnDrops p:nth-child(3) {
    margin-bottom: 7px;
  }

  .footer-btn-close-cancel {
    font-family: gilroybold;
    color: #000;
    font-size: 14px;
    background-color: #b4c3c0;
    border: none;
    outline: 0;
    text-transform: uppercase;
    padding: 12px 28px;
    border-radius: 6px;
  }

  .orderhistory table tr th:first-child {
    width: 264.188px !important;
  }

  .myOrderTabular .orderhistory thead tr .sorting:nth-child(1) {
    width: 264.188px !important;
  }

  .orderhistory thead tr .sorting:nth-child(6) {
    background-position: 104px ​13px !important;
  }

  .orderhistory thead tr .sorting:nth-child(6) {
    background-position: 104px ​13px !important;
    width: 62.781px;
  }
</style>

<div class="Main">
  <div class="dashboard  ">


    <div class="contantPart">
      <div class="container">
        <div class="heading mt50">
          <? $this->load->view('account/header_main') ?>
        </div>
        <div class="navigation spaceBtnn">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

            <li class="nav-item">
              <a class="nav-link active" id="pills-allorder-tab" data-toggle="pill" href="#pills-allorder" role="tab" aria-controls="pills-allorder" aria-selected="true">Open Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-expiring-tab" data-toggle="pill" href="#pills-expiring" role="tab" aria-controls="pills-expiring" aria-selected="true">Closed Orders
              </a>
            </li>
          </ul>
          <a href="<?= g('base_url') ?>place-order" onclick="window.localStorage.setItem('place-order-active-tab', 'tab1')">
            <button class='placeOderbtn'>Place New Order</button>
          </a>
        </div>

        <div class="tab-content mt50 mb3" id="nav-tabContent">
          <div class="tab-pane fade show active" id="pills-allorder" role="tabpanel" aria-labelledby="pills-allorder-tab">
            <div class="allorderTabuler">
              <div class='myOrderTabular'>
                <table class="table orderhistory" id="order_cleaning">
                  <thead>
                    <tr>
                      <th scope="col">Address</th>
                      <th scope="col">Order#</th>
                      <th scope="col">Order Date</th>
                      <th scope="col">Service Date /Time </th>
                      <!-- <th scope="col" class="no-sort">Service Time</th> -->
                      <th scope="col">Closing Date</th>
                      <!-- <th scope="col">Service</th> -->
                      <th scope="col">Status</th>
                      <!-- <th scope="col">Cleaner Name</th> -->
                      <th scope="col" class="no-sort"></th>
                    </tr>
                  </thead>
                  <tbody id="data_cleaning">
                    <?php
                    foreach ($cleaning_data as $key => $value) {
                      //debug($cleaning_data,1)
                    ?>

                      <tr class="
  <?php
                      if ($value['cleaning_service_status'] == 1) {
                        echo 'rowActive';
  ?>
    <? } else if ($value['cleaning_service_status'] == 6) { ?>
      <?php
                        echo 'rowCancelled';
                      }
      ?>
    ">
                        <td>
                          <a href="<?= g('base_url') ?>account/edit_palce?id=<?php echo $value['cleaning_service_id'] ?>" data-toggle="tooltip" data-placement="top" title="Click Here To Edit Address" class="hovio">
                            <?php echo $value['cleaning_service_address']; ?>, <?php echo $value['cleaning_service_city']; ?>, <?php echo $value['cleaning_service_state']; ?>, <?php echo $value['cleaning_service_zipcode']; ?>
                          </a>
                        </td>
                        <td><?php echo $value['cleaning_service_id'] ?></td>
                        <td><?php echo date("m/d/Y", strtotime($value['cleaning_service_createdon'])) ?></td>
                        <td><?php echo date("m/d/Y", strtotime($value['cleaning_service_closing_date'])) ?> <?php echo date("g:i A", strtotime($value['cleaning_service_closing_time'])) ?></td>
                        <!-- <td><?php echo date("g:i A", strtotime($value['cleaning_service_closing_time'])) ?></td> -->
                        <td><?php echo date("m/d/Y", strtotime($value['cleaning_service_projected_closing_date'])) ?></td>
                        <?php if ($value['cleaning_service_status'] == 1 && $value['cleaning_service_cleaner_id'] == 0) { ?>
                          <td>Open</td>
                        <? } elseif ($value['cleaning_service_status'] == 3 && $value['cleaning_service_cleaner_id'] > 0) { ?>
                          <td>Accepted</td>
                        <? } elseif ($value['cleaning_service_status'] == 4 && $value['cleaning_service_cleaner_id'] > 0) { ?>
                          <td>Submitting</td>
                        <? } else { ?>
                          <td>Canceled Order</td>
                        <?php
                        }
                        ?>
                        <!-- <?php
                              $param1['where']['signup_id'] = $value['cleaning_service_cleaner_id'];
                              $param1['where']['signup_type'] = 2;
                              $cleaning_name = $this->model_signup->find_all($param1);
                              ?>
                        <td scope="col"><?php echo $cleaning_name[0]['signup_name'] ?></td> -->
                        <td>
                          <div class="actionbtn">
                            <div class="actionbtn1">
                              Action
                              <i class="fas fa-caret-down"></i>
                            </div>
                            <div class="actionbtnDrops">
                              <?php
                              $start_date = new DateTime();
                              $date_vlaue = $start_date->modify('+5 day')->format('m/d/Y');

                              ?>
                              <?php
                              //  



                              //24 hours condtion
                              $start_date_1 = new DateTime();
                              $date_vlaue_s = $start_date_1->modify('+24 hours')->format('Y-m-d');

                              ?>
                              <?php if ($value['cleaning_service_closing_date']  <= $date_vlaue) { ?>
                                <p>
                                  <a class="relase_job" data-toggle="modal" data-target="#notreleaseModal" data-id="<?php echo $value['cleaning_service_id'] ?>">
                                    Reschedule
                                  </a>
                                </p>
                              <? } else { ?>
                                <p> <a href="<?= g('base_url') ?>account/rescheduleedit?id=<?php echo $value['cleaning_service_id']; ?>" data-whatever="@mdo">
                                    Reschedule
                                  </a> </p>
                              <?php
                              }
                              ?>
                              <!-- cancelled condition  -->
                              <?php
                              $deliverytime1 = $value['cleaning_service_closing_time'];
                              $deliverydate1 = $value['cleaning_service_closing_date'];
                              $active1 = $deliverydate1 . ' ' . $deliverytime1;
                              $dt_active1 = new DateTime($active1);
                              $date_past1 = ($dt_active1)->modify('+24 hours');
                              $my_date1 =  date_format($date_past1, 'Y-m-d H:i:s');
                              $today1 = date("Y-m-d H:i:s");
                              $date1 = $my_date1;

                              ?>
                              <?php if ($date1 <= $today1 && $value['cleaning_service_status'] != 6) { ?>
                                <p>
                                  <a class="cancel_job" data-toggle="modal" data-target="#cancelModal" data-id="<?php echo $value['cleaning_service_id'] ?>">
                                    Cancel
                                  </a>
                                </p>
                              <? } elseif ($value['cleaning_service_status'] == 6) { ?>

                              <? } else { ?>
                                <p>
                                  <a href="<?= g('base_url') ?>account/cancell_order?id=<?php echo $value['cleaning_service_id']; ?>">
                                    Cancel
                                  </a>
                                </p>
                              <?php
                              }
                              ?>
                              <!-- end -->
                              <p>
                                <a href="<?= g('base_url') ?>account/viewdetailclener?id=<?php echo $value['cleaning_service_id']; ?>">Invoice/Summary
                                </a>
                              </p>
                            </div>
                          </div>
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
          <div class="tab-pane fade" id="pills-expiring" role="tabpanel" aria-labelledby="pills-expiring-tab">
            <div class="allorderTabuler">
              <div class='myOrderTabular'>
                <table class="table" id="close_cleaning">
                  <thead>
                    <tr>
                      <th scope="col">Address</th>
                      <th scope="col">Order#</th>
                      <th scope="col">Order Date</th>
                      <th scope="col">Service Date /Time </th>
                      <th scope="col">Closing Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($cleaning_closed as $key => $value) { ?>
                      <tr>
                        <td>
                          <?php echo $value['cleaning_service_address']; ?>, <?php echo $value['cleaning_service_city']; ?>, <?php echo $value['cleaning_service_state']; ?>, <?php echo $value['cleaning_service_zipcode']; ?>
                        </td>
                        <td><?php echo $value['cleaning_service_id'] ?></td>
                        <td><?php echo date("m/d/Y", strtotime($value['cleaning_service_createdon'])) ?></td>
                        <td><?php echo date("m/d/Y", strtotime($value['cleaning_service_closing_date'])) ?> <?php echo date("g:i A", strtotime($value['cleaning_service_closing_time'])) ?></td>
                        <td><?php echo date("m/d/Y", strtotime($value['cleaning_service_projected_closing_date'])) ?></td>
                        <!-- <?php
                              $param1['where']['signup_id'] = $value['cleaning_service_cleaner_id'];
                              $param1['where']['signup_type'] = 2;
                              $cleaning_name = $this->model_signup->find_all($param1);
                              ?>
                        <td scope="col"><?php echo $cleaning_name[0]['signup_name'] ?></td> -->
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
<!-- modal  -->
<div class="modal fade" id="notreleaseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header add_member">
        <h5 class="modal-title" id="exampleModalLabel">Reschedule Job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <p style="font: size 16px;">This job is less than 5 days away and can not be guaranteed. Clean To Close™ will confirm the cleaning has been scheduled ASAP. Please contact support if further assistance is needed at <a href="mailto:<?php echo $admin_email[2]['emails_value'] ?>?subject=Reschedule" target="_blank"><?php echo $admin_email[2]['emails_value'] ?></a></p>
        <p>PLEASE NOTE: If this date is less than 72 hours from the service date, there will be a mandatory $55 emergency fee which will be sent to title to be added on to the existing invoiced order. By booking this appointment you are agreeing to this charge . See our <a href="<?= g('base_url') ?>terms-condition" target="_blank"> Terms and Conditions </a> for more information </p>
      </div>
      <div class="modal-footer">
        <button class="footer-btn-close">Cancel</button>
        <form action="<?= g('base_url') ?>account/reshduledate" method="POST" id="dateres" class="footTop">
          <input type="hidden" value="" name="datechange[cleaning_service_id]" class="service_id_date_change_job">
          <button class="footer-btn-open" id="datechange">Continue</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- end -->

<!-- Cancel Modal  -->
<div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header add_member">
        <h5 class="modal-title" id="exampleModalLabel">Cancel Job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= g('base_url') ?>account/ajax_cancel_email" method="POST" id="saveForm" class="footTop">
          <input hidden name="cancel[id]" value="" class="cancel_id">
          <p style="font-size:16px;"> Are you sure you want to cancel this job?</p>
          <!-- <p style="font-size:16px;">This cleaning is occurring within 24 hours You can Canceled this job but immediately . Please contact <a href="mailto:support@cleantocloseco.com?subject=Support">support@cleantocloseco.com </a> with preferred reschedule date and time. We will do our best to accommodate your request and will be in contact to confirm within 48 hours</a></p> -->
      </div>
      <div class="modal-footer">
        <button class="footer-btn-close-cancel" type="button">Cancel</button>
        <button type="button" class="formBtn greenBtn relase_job_for_open" id="submitInfo">Continue</button>
      </div>
      </form>
      <!-- </form> -->
    </div>
  </div>
</div>
<!-- end -->

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>-->
<script type="text/javascript">
  $(document).ready(function() {
    // date change 
    $(".relase_job").click(function(e) {
      console.log(this.dataset.id);
      $("form#dateres .service_id_date_change_job").val(this.dataset.id);
    });

    $('.footer-btn-close').click(function(e) {
      $('#notreleaseModal').hide();
      location.reload();
    });


    $('.footer-btn-close-cancel').click(function(e) {
      $('#cancelModal').hide();
      location.reload();
    });
    // end

    $(".cancel_job").click(function(e) {
      console.log(this.dataset.id);
      $("form#saveForm .cancel_id").val(this.dataset.id);
      // debugger
    });
    var obj;
    $("#submitInfo").click(function(e) {
      e.preventDefault();
      Loader.show();
      var id = $('.cancel_id').val();
      // console(id);
      // return false;
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
          window.location.href = "<?= g('base_url') ?>account/cancell_order?id=" + id;
        }
        // Add return
        return false;
      }, 3000);
      return false;
    });

    // date change email
    $("#datechange").click(function(e) {
      e.preventDefault();
      Loader.show();
      var id = $('.service_id_date_change_job').val();
      setTimeout(function() {
        // Prevent form submit
        var obj = $("#dateres");
        // Get form data
        var data = obj.serialize();
        // Get post url
        var url = obj.attr('action');
        // Submit action
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
          window.location.href = "<?= g('base_url') ?>account/rescheduleedit?id=" + id;
        }
        // return false;
      }, 5000);
      return false;
    });

    // end


  });
</script>

<script>
  $(document).ready(function() {
    $(function() {
      $("#order_cleaning").dataTable({
        "ordering": true,
        columnDefs: [{
          orderable: false,
          targets: "no-sort"
        }],
        // "aaSorting": [ [0,'desc'], [1,'desc'] ],
        // "aaSorting": [
        //   [3, 'desc']
        // ],
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bInfo": false,
        "searching": true,
        // "bSort": true,

      });
    });

    $(function() {
      $("#close_cleaning").dataTable({
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

    // $('#order_cleaning').DataTable();
  });
  $(document).ready(function() {
    $(".delete_this").on('click', function() {
      if (confirm("Are you Cancelled Order <?= humanize($class) ?>?")) {
        var id = $(this).attr("data-pkid");
        var userid = $(this).attr("data-userid");
        var data = {
          id: id,
          userid: userid
        };
        var url = $(this).attr('data-url');

        response = AjaxRequest.fire(url, data);

        if (response.status)
          $("#row-" + id).remove();
        location.reload();
      }

    });
  });
</script>
<script>
  $(document).ready(function() {
    $("#status").on('change', function(e) {
      var data = e.target.value;
      if (data == 1) {
        $('.rowCancelled').hide()
        // $("#order_cleaning").show()
        $('.rowActive').show()
      } else if (data == 2) {
        $('.rowCancelled').show();
        $('.rowActive').hide()
      } else {
        $('.rowCancelled').show();
        $('.rowActive').show();
      }
    });
  });
</script>