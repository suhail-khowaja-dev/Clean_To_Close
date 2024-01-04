<style>
    .toast-title {
        display: none !important;
    }

    .myEyePassword {
        position: absolute;
        top: 24px;
        right: 6%;
    }
</style>

<div class="Main">
    <div class="signUpMain text-center">
        <div class="col-lg-12">
            <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">We're Glad You're Back!</h3>
            <div class="col-lg-4 offset-lg-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                <h6 class="mt30">Sign Into Your Account</h6>
            </div>
        </div>
        <div class="col-lg-12 mt40">
            <form action="<?php echo g('base_url'); ?>user/login_process" method="post" class="Login_form" id="login-form">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <input type="email" placeholder="Email" id="email" name="signup[signup_email]">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <input type="password" placeholder="Password" id="password" name="signup[signup_password] ">
                        <span class="myEyePassword" onclick="myFunction()">
                            <i class="fa-solid fa-eye"></i>
                            <!-- <i class="fa-solid fa-eye-slash"></i> -->
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="remFor">

                            <div class="forgot">
                                <a href="<?= g('base_url') ?>forgot-password-client">Forgot Password</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 mt40 mb5">
                        <button type="submit" class="wow zoomIn greenBtn" data-wow-duration="1s" data-wow-delay="0.5s" id="btn-login">
                            SIGN IN
                        </button>
                        <?php
                        foreach ($_GET as $key =>  $data) {
                            $data = $_GET[$key] = base64_decode(urldecode($data));
                            $encrypt_2 = ((($data * 956783) / 5678) / 123456789);
                        }
                        ?>
                        <?php
                        $data = '1';
                        $encrypt_1 = (($data * 123456789 * 5678) / 956783);
                        $link = "user/signup?type=" . urlencode(base64_encode($encrypt_1));
                        ?>
                        <input type="hidden" id="type" value="<?php echo $encrypt_2; ?>" name="signup[signup_type]">
                        <?php   
                        if ($_GET['type'] == '732650.60932521') { ?>
                            <p class="mt20 newHereGetStat mb1 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                New here? <a href="<?= g('base_url') ?><?php echo $link ?>">Click here</a> to get started!</p>
                        <?php } else { ?>
                            <p class="mt20 newHereGetStat mb1 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                New here? <a href="<?= g('base_url') ?>account/video_page">Click here</a> to get started!</p>
                        <?php
                        }
                        ?>
                        
                        </p>
                    </div>
                </div>

        </div>
        </form>
    </div>
</div>
<?php
// Load modal
//$this->load->view('user/modal_forgot_password');
?>

<script type="text/javascript">
    // $(document).ready(function() {
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";

        } else {
            x.type = "password";

        }
    }
    // });
    toastr.options = {
        "positionClass": "toast-bottom-right",
        "showDuration": "9000",
        "hideDuration": "9000",
        "timeOut": "9000",
        "extendedTimeOut": "9000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    <?php if ($this->session->flashdata('success_payment')) { ?>
        setTimeout(() => {
            toastr.success("<?php echo $this->session->flashdata('success_payment'); ?>");
        }, 1000)
    <?php } ?>

    <?php if ($this->session->flashdata('pending_approval')) { ?>
        setTimeout(() => {
            // toastr.error('You clicked Error Toast')
            toastr.error("<?php echo $this->session->flashdata('pending_approval'); ?>");
        }, 1000)
    <?php } ?>


    <?php if ($this->session->flashdata('success')) { ?>
        setTimeout(() => {
            toastr.success("<?php echo $this->session->flashdata('success'); ?>");
        }, 500)
    <?php } ?>
    $(document).ready(function() {
        var $form = $('#login-form');
        $('#btn-login').click(function(event) {
            // Get input data
            var email = $('#email').val();
            var password = $('#password').val();
            var id = $("#type").val();

            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            // Checking fields (both fields empty)
            if ((email == '') && (password == '')) {
                AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Email field is required.</span>' +
                    '<span for="%s" style="color:#fff" class="has-error help-block">Password field is required.</span>', 'Error');
            }
            // Email validation
            else if (email == '') {
                AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Email field is required.</span>');
            } else if (!regex.test(email)) {
                AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Invalid email address</span>');
            }
            // Password validation
            else if (password == '') {
                AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Password field is required.</span>');
            } else {
                // Disable the submit button to prevent repeated clicks:
                $form.find('#btn-login').prop('disabled', true);
                // Get form
                var form = $(this).closest('form');
                // Get action url
                var url = form.attr('action');
                // Get form data
                var data = form.serialize();
                Loader.show();
                setTimeout(function() {
                    // Submit action
                    var response = AjaxRequest.fire(url, data);
                    // Register success
                    if (response.status) {
                        // console.log(response);
                        // return false;

                        $form.find('#btn-login').prop('disabled', false);
                        // Reset form
                        $form[0].reset();
                        // Redirect to Time line page
                        // console.log(response.status);
                        // return false;
                        console.log(response.status);
                        console.log(id);
                        // return false;
                        if (id == 1 && response.status != 5) {
                            window.location.href = '<?= g('base_url') ?>account/orderhistory';
                        } else {
                            if (response.status == 5 && id == 1) {
                                // alert('yes');
                                window.location.href = '<?= g('base_url') ?>account/info';
                                // return false;
                            } else {
                                window.location.href = '<?= g('base_url') ?>account/my_task';
                            }
                        }
                        // location.reload();

                    }
                    // Register fail
                    else {
                        // Enable form
                        $form.find('#btn-login').prop('disabled', false);

                    }
                }, 1000);
            }

            return false;
        });
        // On submit login action end

        // Submit Form Modal Start
        $('.user-pass-rec-btn').on('click', function() {

            var obj_forgot = $(this);

            Loader.show();
            setTimeout(function() {
                // Get form obj
                var $form = $('#forgot-form');
                // Get form
                var form = obj_forgot.closest('form');
                // Get action and form data
                var data = form.serialize();
                var url = form.attr('action');

                // Submit action
                var response = AjaxRequest.fire(url, data);
                // Register success
                if (response.status) {
                    // Reset form
                    $form[0].reset();
                    // Close Dialog box
                    $('#forgot-password').modal('toggle');
                    setTimeout(function() {
                        location.reload();
                    }, 2000);

                }
            }, 1000);

            return false;
        });
        // Submit Form Modal End

    });
</script>