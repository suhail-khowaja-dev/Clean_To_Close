<script src="https://js.stripe.com/v3/"></script>
<style>
    table.dataTable thead th,
    table.dataTable thead td {
        padding: 10px 10px !important;
    }

    table thead tr th:nth-child(1) {
        width: 200px !important;
    }

    table thead tr th:nth-child(2) {
        width: 200px !important;
    }

    table thead tr th:nth-child(3) {
        width: 200px !important;
    }

    table thead tr th:nth-child(4) {
        width: 200px !important;
    }

    table thead tr th:nth-child(5) {
        width: 255px !important;
    }

    .dataTables_wrapper .dataTables_filter input {
        border: 1px solid #cbd6d4;
        border-radius: 8px;
        outline: none;
        font-family: 'gilroymedium';
        color: #666666;
        width: 245px;
        padding: 5px 10px 5px 10px;
    }

    .btnbox button {
        margin: 0 !important;
    }
</style>
<div class="Main">
    <div class="dashboard  ">

        <div class="main-div contantPart">


            <div class="container">
                <? $this->load->view('account/header_main') ?>
                <div class="mt50">
                    <!-- <h3 class='orderHeading'>
                        Available jobs
                    </h3> -->
                    <div class="navigation w-100 mt30 justify-content-between">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-Available-tab" data-toggle="pill" href="#pills-Available" role="tab" aria-controls="pills-Available" aria-selected="true">Available</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-Decline-tab" data-toggle="pill" href="#pills-Decline" role="tab" aria-controls="pills-Decline" aria-selected="true">Declined</a>
                            </li>
                        </ul>
                        <a href="<?= g('base_url') ?>account/my_task">
                            <button>My Dashboard</button>
                        </a>
                    </div>
                </div>

                <div class="tab-content mt20 mb3" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="pills-Available" role="tabpanel" aria-labelledby="pills-Available-tab">
                        <!-- Cleaner Dashboard Section  -->
                        <div class="cleanerdashboardMainBox mt30 mb1">

                            <div class="cleanerDashboard-mainbox mt20 justify-content-between">

                                <table id="availableJobs" class="table">
                                    <thead>
                                        <tr>
                                            <th>Property Details</th>
                                            <th>Service Date</th>
                                            <th>Service Time</th>
                                            <th>Amount Payable</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($avaiable_jobs as $key => $value) { ?>
                                            <?php
                                            $param['where']['cleaning_service_cleaner_id'] = $this->userid;
                                            $param['where']['cleaning_service_status'] = 1;
                                            $select_cleaning = $this->model_cleaning_service->find_all($param);
                                            $mm = count($select_cleaning);
                                            // debug($mm,1);


                                            ?>
                                            <?php if ($value['cleaning_service_cleaner_id'] == 0 && $value['cleaning_service_cleaner_decline_id'] == 0) { ?>
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
                                                    <td>
                                                        <a href="<?= g('base_url') ?>account/view_detail_notclaim?id=<?php echo $value['cleaning_service_id']; ?>" style="color: #4d4d4d;" data-toggle="tooltip" data-placement="top" title="Click here to see details" class="hovio">
                                                            <?php echo $value['cleaning_service_city'] ?>, <?php echo $value['cleaning_service_state'] ?>
                                                    </td>
                                                    </a>
                                                    </td>
                                                    <td>
                                                        <?php $date = date_create($value['cleaning_service_closing_date']);
                                                        echo date_format($date, "m/d/y") ?>
                                                    </td>
                                                    <td>
                                                        <?php echo date("g:i A", strtotime($value['cleaning_service_closing_time'])) ?>
                                                    </td>
                                                    <td>$<?php echo  number_format($percent, 2) ?></td>
                                                    <td>
                                                        <div class="btnbox">
                                                            <?php
                                                            $param1['where']['signup_id'] = $this->userid;
                                                            $param1['where']['signup_status'] = 1;
                                                            $select_signup = $this->model_signup->find_one($param1);
                                                            //   debug($select_signup,1);
                                                            ?>
                                                            <?php
                                                            if ($mm >= $select_signup['signup_package_job']) { ?>
                                                                <button class='btn1 accept_info_price ' id="accept_info_price" data-id="<?php echo $value['cleaning_service_id'] ?>">Accept</button>
                                                            <? } else { ?>
                                                                <button class='btn1 accept_info ' id="accept_info" data-id="<?php echo $value['cleaning_service_id'] ?>">Accept</button>
                                                            <?php
                                                            }
                                                            ?>
                                                            <button class='btn2 submitdecline' id="submitdecline" data-id="<?php echo $value['cleaning_service_id'] ?>">Decline</button>
                                                        </div>
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

                    <!-- decline tab start -->
                    <div class="tab-pane fade " id="pills-Decline" role="tabpanel" aria-labelledby="pills-Decline-tab">
                        <!-- Cleaner Dashboard Section  -->
                        <div class="cleanerdashboardMainBox mt30 mb1">

                            <div class="cleanerDashboard-mainbox mt20 justify-content-between">

                                <table id="availableJobs_decline" class="table">
                                    <thead>
                                        <tr>
                                            <th>Property Details</th>
                                            <th>Service Date</th>
                                            <th>Service Time</th>
                                            <th>Amount Payable</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cleaning_decline as $key => $value) { ?>

                                            <?php if ($value['cleaning_service_cleaner_id'] == 0 && $value['cleaning_service_cleaner_decline_id'] != 0) { ?>
                                                <?php
                                                $amout_cleaner = $this->model_cleaner_percentage->find_all();

                                                $myNumber = $value['cleaning_service_total_amount'];
                                                //I want to get 25% of 928.
                                                $percentToGet =  $amout_cleaner[0]['cleaner_percentage_value'];

                                                //Get the result.
                                                $percent =  $myNumber - ($myNumber * ($percentToGet  / 100));
                                                ?>
                                                <tr>
                                                    <td>
                                                        <a href="<?= g('base_url') ?>account/view_detail?id=<?php echo $value['cleaning_service_id']; ?>" style="color: #4d4d4d;">
                                                            <?php echo $value['cleaning_service_city'] ?>|<?php echo $value['cleaning_service_state'] ?>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <?php $date = date_create($value['cleaning_service_closing_date']);
                                                        echo date_format($date, "m/d/y") ?>
                                                    </td>
                                                    <td>
                                                        <?php echo date("g:i A", strtotime($value['cleaning_service_closing_time'])) ?>
                                                    </td>
                                                    <td>$<?php echo  $percent ?></td>
                                                    <td>
                                                        <div class="btnbox ">
                                                            <button class='btn1 accpet_deline' id="accpet_deline" data-id="<?php echo $value['cleaning_service_id'] ?>">Accept</button>
                                                        </div>
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
                    <!-- tab end -->
                </div>
            </div>
        </div>
    </div>

    <!-- Accept -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#acceptance" id="acceptanceBtn" hidden>
        Launch demo modal
    </button>
    <div class="modal fade" id="acceptance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-body">
                    By accepting this job you agree and understand that in the event you need to cancel less than 72 hours prior to the cleaning appointment, you will be charged an emergency fee of $55. If you do not show for an accepted cleaning appointment there will be a $125 fee charged to the card/account on file.
                    See our <a href="<?= g('base_url') ?>terms-condition" target="_blank">Terms and Conditions</a> for more information.
                    <!-- Are you sure you want to accept this job? -->
                    <hr>
                    <div class="mBtnsss">
                        <?php
                        $paramsin['where']['signup_id'] = $this->userid;
                        $paramsin['where']['signup_type'] = 2;
                        $cleaner_name = $this->model_signup->find_one($paramsin);
                        ?>
                        <form action="<?= g('base_url') ?>account/update_cleaner" method="post" id="accept">
                            <button type="button" class="btn btn-primary accept_data">Accept</button>
                            <input hidden name="cleanerid[cleaning_service_id]" value="" class="service_id_input">
                            <input hidden name="cleanerid[cleaning_service_cleaner_id]" value="<?php echo $this->userid ?>">
                            <input hidden name="cleanerid[cleaning_service_cleaner_name]" value="<?php echo $cleaner_name['signup_firstname'] ?>">
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- price accept modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#acceptanceprice" id="accept_btn_price" hidden>
        Launch demo modal
    </button>
    <div class="modal fade" id="acceptanceprice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-body">
                    Congratulations, you have utilized your full package! Thank you for your outstanding work! You can claim additional jobs for $10 each. Click Accept to claim and pay.
                    <!-- <a href="<?= g('base_url') ?>terms-condition" target="_blank">Terms and Conditions</a> -->
                    <!-- Are you sure you want to accept this job? -->
                    <!-- <hr> -->
                    <div class="mBtnsss">
                        <form action="<?= g('base_url') ?>account/accpet_addtional_job" method="post" id="additonal_money">
                            <button id="checkout-button" hidden>Checkout</button>
                            <button type="button" class="btn btn-primary accept_data_additional" style="margin: 6px;">Accept</button>
                            <input hidden name="cleanerid[cleaning_service_id]" value="" class="service_id_input_additional">
                            <input hidden name="cleanerid[cleaning_service_cleaner_id]" value="<?php echo $this->userid ?>">
                            <input hidden name="cleaneradd[signup_payment_user_id]" value="<?php echo $this->userid ?>">
                            <input hidden name="cleaneradd[signup_payment_add_amount]" value="10">
                            <input hidden name="cleaneradd[signup_payment_package_name]" value="Additional Job">
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Accept from decline -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#acceptancedec" id="acceptancedecBtn" hidden>
        Launch demo modal
    </button>
    <div class="modal fade" id="acceptancedec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ">
                <div class="modal-body">
                    You had previously declined this job.<br>
                    Are you sure you want to now accept this job?
                    <div class="mBtnsss">
                        <form action="<?= g('base_url') ?>account/update_cleaner" method="post" id="accept_dec">
                            <button type="button" class="btn btn-primary accept_data_decli">Accept</button>
                            <input hidden name="cleanerid[cleaning_service_id]" value="" class="service_id_input_dec">
                            <input hidden name="cleanerid[cleaning_service_cleaner_id]" value="<?php echo $this->userid ?>">
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Decline-->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DeclineModal" id="DeclineModalBtn" hidden>
        Launch demo modal
    </button>
    <div class="modal fade" id="DeclineModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Are you sure you want to decline this job?
                    <div class="mBtnsss">
                        <form action="<?= g('base_url') ?>account/update_cleaner_decline" method="post" id="saveForm2" class="footTop">
                            <button type="button" class="btn btn-primary decline_data">Decline</button>
                            <input hidden name="cleanerdec[cleaning_service_id]" value="" class="service_id_decline">
                            <input hidden name="cleanerdec[cleaning_service_cleaner_decline_id]" value="<?php echo $this->userid ?>">
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <?php if ($this->session->flashdata('alreadyaccepet')) { ?>
        setTimeout(() => {
        toastr.success("<?php echo $this->session->flashdata('alreadyaccepet'); ?>");
        }, 500)
    <?php } ?>
    <script>
        $(document).ready(function() {
            $(function() {
                $("#availableJobs").dataTable({
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
                $("#availableJobs_decline").dataTable({
                    "bPaginate": true,
                    "bLengthChange": true,
                    "bFilter": true,
                    "bInfo": false,
                    "searching": true,
                    "bSort": false,
                    // "pageLength": 50
                });
            });

        });
    </script>
    <script>
        var obj;
        $(".accept_info").click(function() {
            // console.log(this.dataset.id)
            $('#acceptanceBtn').trigger('click')
            setTimeout(() => {
                $("form#accept .service_id_input").val(this.dataset.id);
                // console.log($("form#accept .service_id_input").val())
            })

        });

        $(".accept_info_price").click(function() {
            // console.log(this.dataset.id)
            $('#accept_btn_price').trigger('click')
            setTimeout(() => {
                $("form#additonal_money .service_id_input_additional").val(this.dataset.id);
            })

        });

        $(".accept_data").click(function(e) {
            Loader.show();
            setTimeout(function() {
                var obj = $("#accept");
                var data = obj.serialize();
                var url = obj.attr('action');
                var response = AjaxRequest.fire(url, data);
                if (response.status) {
                    window.location.href = "<?= g('base_url') ?>account/my_task";
                }
                if (response.alreadyaccepet) {
                    AdminToastr.error('This job is already accepted by another cleaner', 'Error');
                    location.reload();
                    return false;
                }
                return false;
            }, 1000);
            return false;
        });
    </script>

    <script>
        var obj;
        $(".accpet_deline").click(function(e) {
            $("form#accept_dec .service_id_input_dec").val(this.dataset.id);
            $('#acceptancedecBtn').trigger('click')
        });

        $(".accept_data_decli").click(function(e) {
            Loader.show();
            setTimeout(function() {
                var obj = $("#accept_dec");
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
    </script>

    <script>
        var obj;
        $(".submitdecline").click(function(e) {
            $("form#saveForm2 .service_id_decline").val(this.dataset.id);
            $('#DeclineModalBtn').trigger('click')
            // console.log($("form#accept_dec .service_id_decline").val())
        });
        $('.decline_data').click(function(e) {
            Loader.show();
            setTimeout(function() {
                // Prevent form submit
                var obj = $("#saveForm2");
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
    </script>
    <script>
        $(function() {


            // open stripe page
            $('.accept_data_additional').on('click', function(e) {
                setTimeout(() => [
                    $('#checkout-button').trigger('click')
                ], 1000)
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            // open stripe page
            var obj;
            $(".accept_data_additional").click(function(e) {
                e.preventDefault();
                Loader.show();
                var myJSON = JSON.stringify(cleanerid);
                setTimeout(function() {
                    $.ajax({
                        url: base_url + "account/accpet_addtional_job",
                        type: "POST",
                        dataType: "json",
                        data: {
                            "cleanerid": myJSON
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