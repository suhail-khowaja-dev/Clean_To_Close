<div class="Main">
    <div class="dashboard  ">

        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="order-gen  d-flex flex-column justify-content-center align-items-center">
                <div class="check-img mb3">
                    <img src="<?php echo base_url('assets/front_assets/images/circle-icon.png'); ?>" alt="">
                </div>
                <h1 class="mb2">Order #<?php echo $clean_id['cleaning_service_id'] ?> Has Been Submitted </h1>
                <p class="mb2">Choose recipients that will receive an Invoice/Summary</p>
                <button type="button" data-toggle="modal" data-target="#orderModal">Click Here</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

            <div class="modal-body">
                <div class="order-gen-head">
                    <div></div>
                    <h5 class="mb1" style="text-align: center;  font-family: 'gilroymedium';">Choose recipients that will receive an Invoice/Summary</h5>
                    <!-- <h4 class="mb2">Send documents</h4>
                    <h5 class="mb1">Select documents and recipients</h5>
                    <p>Choose which document to send to the recipients</p> -->
                </div>
                <form action="<?= g('base_url') ?>account/save_submit" method="Post" id="saveForm" class="footTop">
                    <div class="order-gen-table">
                        <div class="row1 d-flex">
                            <!-- <div class="col1 bd-text">
                                <h6>Confirmation</h6>
                            </div> -->
                            <div class="col1 bd-text">
                                <h6>Invoice</h6>
                            </div>
                            <div class="col1 bd-text">
                                <h6>Recipient</h6>
                            </div>
                        </div>
                        <div class="row1 d-flex autoChk">
                            <!-- <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div> -->
                            <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div>
                            <div class="col1 bd-text">
                                <label style="text-align: left;" for="">Ordering Agent</label>
                            </div>
                            <div class="col1 em-col">
                                <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[realtoremail]" value="<?php echo $user_data['signup_email'] ?>" readonly>
                            </div>
                        </div>
                        <hr>
                        <!-- Buyer Email -->
                        <? if ($clean_id['cleaning_service_representing'] == 'Buyer') { ?>
                            <div class="row1 d-flex autoChk">
                                <!-- <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div> -->
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Buyer</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[buyeremail]" value="<?php echo $clean_id['cleaning_buyer_email'] ?>">
                                </div>
                            </div>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Cooperating Agent</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[cooperating_agents_informations_buyer]" value="<?php echo $clean_id['cleaning_service_agent_buyer_email'] ?>">
                                </div>
                            </div>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Seller</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[seller_information]" value="<?php echo $clean_id['cleaning_service_other_seller_email'] ?>">
                                </div>
                            </div>
                            <!-- Seller email -->
                        <? } elseif ($clean_id['cleaning_service_representing'] == 'Seller') { ?>
                            <div class="row1 d-flex autoChk">
                                <!-- <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div> -->
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Seller</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[selleremail]" value="<?php echo $clean_id['cleaning_seller_email'] ?>">
                                </div>
                            </div>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Cooperating Agent</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[cooperating_agents_informations_seller]" value="<?php echo $clean_id['cleaning_service_agent_seller_email'] ?>">
                                </div>
                            </div>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Buyer</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[buyer_information]" value="<?php echo $clean_id['cleaning_service_other_buyer_email'] ?>">
                                </div>
                            </div>
                            <!-- Both email -->
                        <? } else { ?>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Buyer</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[buyer_email]" value="<?php echo $clean_id['cleaning_service_email'] ?>">
                                </div>
                            </div>
                            <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Seller</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[seller_email]" value="<?php echo $clean_id['cleaning_service_email_seller'] ?>">
                                </div>
                            </div>

                        <?php
                        }
                        ?>
                           <div class="row1 d-flex autoChk">
                                <div class="col1">
                                    <input type="checkbox" name="" id="">
                                </div>
                                <div class="col1 bd-text">
                                    <label style="text-align: left;" for="">Title Company Email</label>
                                </div>
                                <div class="col1 em-col">
                                    <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[tittle_company_email]" value="<?php echo $clean_id['cleaning_service_closing_tittle_company_email'] ?>">
                                </div>
                            </div>
                        <hr>
                        <div class="row1 d-flex">
                            <!-- <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div> -->
                            <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div>
                            <div class="col1 bd-text">
                                <label style="text-align: left;" for="">Other</label>
                            </div>
                            <div class="col1 em-col">
                                <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[otheremail][]">
                            </div>
                        </div>
                    </div>
                    <a class="add-rec">
                        <i class="fa fa-plus"></i>
                        Add and additional recipients
                    </a>
                    <div class="row modal-fot-btns">
                        <div class="col-sm-2 d-flex justify-content-end">
                            <a href="<?= g('base_url') ?>account/orderhistory" class="cancel-doc">Cancel</a>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-end">
                            <button type="" class="send-doc" id="submitInfo">Send Documents</button>
                        </div>
                    </div>
                </form>

                <!--<form action="<?= g('base_url') ?>account/testsubmit" method="Post" id="cleanidforid" class="footTop">-->
                <input hidden value="<?php echo $clean_id['cleaning_service_id'] ?>" name="test[id]" id="testid">
                <button hidden class="send-doc" id="forid">Send Documents</button>
                <!--</form>-->

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#submitInfo').click(function(e){
            $("#forid").trigger("click");
        });

       $("#forid").click(function(e) {
      var cleanid = document.getElementById("testid").value;
      var params = {};
      params.clean = cleanid;
      var data = AjaxRequest.fire('<?= base_url(); ?>account/testsubmit', params);
      if (data.status == '3') {
        Loader.show();
        return true
      } else {
        return false;
      }

    })
    });
    </script>
<script>

    $('.autoChk input:checkbox').prop('checked',true);

    $('.add-rec').on('click', () => {
        $(".order-gen-table").append(`
        <div class="new-rec-div">
        <hr>
        <button class="del-rec">
                    <i class="fa fa-minus fa-lg"></i>
                </button>
        <div class="row1 d-flex">
        <div class="col1">
                                <input type="checkbox" name="" id="">
                            </div>
                        <div class="col1 bd-text">
                            <label style="text-align: left;" for="">Other</label>
                        </div>
                        <div class="col1 em-col">
                            <input class="em-inp" type="email" placeholder="Email Address" name="sendemail[otheremail][]">
                        </div>
                    </div>
                    </div>
        `)
    })
    $(document).on('click', '.del-rec', function(e) {
        // alert('hello')
        e.target.parentNode.parentNode.remove();
    });


    // save data 
    
    // $('#saveForm .order-gen-table .row1.d-flex input[type="checkbox"]').change((e) => {
    //     console.log(e)
    //     if (e.target.checked) {
    //         trry.push({
    //             email: $(e.target.parentNode.parentNode).find('input[type="email"]').val()
    //         })
    //     }else{
    //         trry.map((val,i)=>{
    //             if(val.email == $(e.target.parentNode.parentNode).find('input[type="email"]').val()){
    //                 trry.slice(i,1)
    //             }
    //         })
    //     }

    //     console.log(result)
    // })



    var obj;
    $("#submitInfo").click(function(e) {
        var trry = [];
        trry.push({otheremail:[]})
        $('#saveForm .order-gen-table .row1.d-flex input[type="checkbox"]').each(function(i,element){
            if(element.checked){
                if($(this.parentNode.parentNode).find('input[type="email"]').attr('name').split('[')[1].split(']')[0] != 'otheremail'){
                    trry[0][$(this.parentNode.parentNode).find('input[type="email"]').attr('name').split('[')[1].split(']')[0]] = $(this.parentNode.parentNode).find('input[type="email"]').val()
                }else{
                    trry[0]['otheremail'].push($(this.parentNode.parentNode).find('input[type="email"]').val())
                }
            }
        })
        console.log(trry)


        // return false;
        e.preventDefault();
        Loader.show();
        var fg = JSON.stringify(trry)
        console.log(fg)
        setTimeout(function() {
            // Prevent form submit
            var obj = $("#saveForm");
            // Get form data
            var data = JSON.stringify(trry);
            // Get post url
            var url = obj.attr('action');
            // Submit action
            var response = AjaxRequest.fire(url, data);
            if (response.status) {
                // return false
                // $("#submitInfo").text("Countine");
                // $("#countine").show();
                window.location.href = '<?= base_url(); ?>account/orderhistory';
                // location.reload();
            }
            // Add return
            return false;
        }, 1000);
        return false;
    });
</script>