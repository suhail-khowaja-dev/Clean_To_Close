<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .myEyePassword {
        position: absolute;
        top: 10px;
        right: 32%;
    }

    @font-face {
        font-family: gilroybold;
        src: url(../../front_assets/fonts/glory/Gilroy-Bold.ttf)
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:hover,
    .nav-tabs>li.active>a:focus {
        color: #fff !important;
        cursor: default !important;
        background-color: #545b62 !important;
    }

    .nav-tabs>li>a,
    .nav-pills>li>a {
        background: #b3c3c0;
        color: #555555;
        border-radius: 8px !important;
        min-width: 170px;
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

    .nav-tabs>li:first-child {
        margin-right: 5rem;
    }

    .nav-tabs {
        border-bottom: none;
    }

    .nav-tabs,
    .nav-pills {
        margin-bottom: 50px;
        margin-top: 100px;
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

    .tab-content .row .col-lg-6 label {
        margin-top: 3px !important;
        margin-left: 5px !important;
        color: #666666 !important;
        /* font-weight: 400; */
        text-transform: uppercase;
    }

    .tab-content .row .col-lg-6 input,
    .tab-content .row .col-lg-12 input {
        font-family: gilroylight;
        border: none;
        background-color: #fff;
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
</style>
<div class="panel panel-default">
    <div class="panel-heading panel-heading-nav">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active">
                <a href="#one" aria-controls="one" role="tab" data-toggle="tab">Detail</a>
            </li>
            <li role="presentation">
                <a href="#two" aria-controls="two" role="tab" data-toggle="tab">Change Password</a>
            </li>
        </ul>
    </div>
    <div class="panel-body">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="one">
                <form action="<?= g('admin_base_url') ?>signup/update_realtor" method="post" id="saveForm" class="footTop">
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column">
                            <label for="">FIRST NAME</label>
                            <input type="hidden" value="<?php echo $signup_data['signup_id'] ?>" name="realtor_data[signup_id]">
                            <input type="text" value="<?php echo $signup_data['signup_name'] ?>" name="realtor_data[signup_name]">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <label for="">LAST NAME</label>
                            <input type="text" value="<?php echo $signup_data['signup_lastname'] ?>" name="realtor_data[signup_lastname]">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <label for="">ADDRESS</label>
                            <input type="text" value="<?php echo $signup_data['signup_address'] ?> , <?php echo $signup_data['signup_city']; ?> , <?php echo $signup_data['signup_state'] ?>" name="realtor_data[signup_address]" readonly="true">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <label for="">EMAIL</label>
                            <input type="email" value="<?php echo $signup_data['signup_email'] ?>" name="realtor_data[signup_email]" readonly="true">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <label for="">PHONE NUMBER</label>
                            <input type="tel" value="<?php echo $signup_data['signup_contact'] ?>" name="realtor_data[signup_contact]" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <label for="">BROKERAGE NAME</label>
                            <input type="text" value="<?php echo $signup_data['signup_brokerage_name'] ?>" name="realtor_data[signup_brokerage_name]">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <label for="">OFFICE ADDRESS</label>
                            <input type="text" value="<?php echo $signup_data['signup_office_address'] ?>" name="realtor_data[signup_office_address]" readonly="true">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <label for="">AGENT LICENESE NUMBER</label>
                            <input type="text" value="<?php echo $signup_data['signup_agent_license_number'] ?>" name="realtor_data[signup_agent_license_number]">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <label for="">OFFICE LICENESE NUMBER</label>
                            <input type="text" value="<?php echo $signup_data['signup_office_license_number'] ?>" name="realtor_data[signup_office_license_number]">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <label for="">MLS NETWORK</label>
                            <input type="text" value="<?php echo $signup_data['signup_mls_network'] ?>" name="realtor_data[signup_mls_network]">
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <label for="">MLS ID</label>
                            <input type="text" value="<?php echo $signup_data['signup_mls_id'] ?>" name="realtor_data[signup_mls_id]">
                        </div>
                        <div class="col-lg-12 d-flex saveChangescol">
                            <button class="saveChanges" id="submitInfo">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="two">
                <form action="<?= g('admin_base_url') ?>signup/update_password_realtor" method="post" id="passwordupdate" class="footTop">
                    <div class="row">
                        <div class="col-lg-12 d-flex">
                            <input type="hidden" value="<?php echo $signup_data['signup_id'] ?>" name="signup_reltor_password[signup_id]">
                            <input type="text" readonly="true" placeholder="Old Password" value="<?php echo $signup_data['signup_password_show'] ?> ">
                        </div>
                        <div class="col-lg-12 d-flex">
                            <input type="password" placeholder="New Password" class="slugger-source" id="password" name="signup_reltor_password[signup_password]">
                            <input type="hidden" id="password" placeholder="Password" class="slugger-target" name="signup_reltor_password[signup_password_show]">
                            <span class="myEyePassword" onclick="myFunction()">
                                <i class="fa-solid fa-eye"></i>
                                <!-- <i class="fa-solid fa-eye-slash"></i> -->
                            </span>
                        </div>
                        <div class="col-lg-12 d-flex">
                            <button type="submit" name="submit" id="SaveNEdit"> Change Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
         function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";

            } else {
                x.type = "password";

            }
        }
    $(document).ready(function() {

        document.getElementById('phone').addEventListener('input', function(e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });

        var obj;
        $("#submitInfo").click(function(e) {
            e.preventDefault();

            setTimeout(function() {
                // Prevent form submit
                var obj = $("#saveForm");
                // Get form data
                var data = obj.serialize();
                // Get post url
                var url = obj.attr('action');
                // Submit action
                var response = AjaxRequest.fire(url, data);
                if (response.status == 1) {
                    AdminToastr.success(response.message, "Data Updated Successfully");
                    window.location.href = "<?= g('admin_base_url') ?>signup";
                } else {
                    AdminToastr.error(response.message, "Error");
                }
                // Add return
                return false;
            }, 1000);
            return false;
        });

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
                AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">"Your password must contain at least one Special Character.</span>', 'Error');
                return false;
            }
            if (password.length < 8) {
                AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Your password must be at least 8 characters.</span>', 'Error');
                return false;
            } else {
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
                        window.location.href = "<?= g('admin_base_url') ?>signup";
                    } else {
                        AdminToastr.error(response.message, "Error");
                    }
                    // Add return
                    return false;
                }, 1000);
                return false;
            }
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