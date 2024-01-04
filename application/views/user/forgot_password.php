<!--<section class="bannerSec">
    <img src="<?php /*echo get_image($banner['inner_banner_image_path'],$banner['inner_banner_image']);*/?>" class="img-responsive" alt="Banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1>Forgot Password</h1>
                </div>
            </div>
        </div>
    </div>
</section>-->

<!-- Breadcrumbs -->
<?php
$data['breadcrumb_title'] = 'Forgot Password';
//$this->load->view('widgets/breadcrumb', $data);
?>

<br><br><br><br>
<div class="Main">
            <div class="signUpMain text-center">
                <div class="col-lg-12">
                    <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Forgot Your Password?</h3>
                    <div class="col-lg-4 offset-lg-4">
                        <h6 class="mt20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" style="font-size:0.8rem!important;">Enter the email address associated with your account and we`ll send you a link to reset your password.</h6>
                    </div>
                </div>
                <div class="col-lg-12 mt20">
                <form action="#" method="post" id="form-forgot">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4 wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
                            <input type="email" placeholder="Email" name="signup[signup_email]" placeholder="Enter your email address" required id="forgot-email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4 mt40 mb5 wow zoomIn" data-wow-duration="1s" data-wow-delay="1.5s">
                            <button type="submit" class="greenBtn btn-reset-password">
                                SEND
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
<!-- body-content -->
<!-- <div class="container">
    <div class="row">
        <div id="goTo">
            <div class="row margin-bottom-40">
                <div class="col-md-9 col-sm-7">
                    <div class="content-page">
                        <h3>Change Password</h3>
                        <div class="row">

                            <form method="post" action="<?=g('base_url')?>user/reset-password" id="update-pa">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="password" name="password" class="form-control" placeholder="New Password">
                                    <br>
                                    <input type="hidden" name="token" value="<?=$token_user?>">
                                    <input type="hidden" name="user_id" value="<?=$user_id?>">
                                    <div class="white-space-15"></div>
                                
                                    <button type="submit" value="Submit" id="submitInfo" class="mtop10 btn btn-reset-password">Update Now</button>
                                    <br>
                                </div>
                            </form>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--end body-content -->
<script>
$(document).ready(function(e){
      $(".btn-reset-password").click(function(e) {
           var email = $('#forgot-email').val();
        //   alert('here');
          if (email == '') {
                AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Enter a email.</span>', 'Error');
                return false;
            }else{
      e.preventDefault();
      Loader.show();
      setTimeout(function() {
        var obj = $("#form-forgot");
        var data = obj.serialize();
        var url = '<?php g('base_url')?>user/forgot_password_user?>';
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
         location.reload();
        }
        // Add return
        return false;
      }, 1000);
      return false;
            }
    });
     
});
    // On submit action start (all tabs form)
    // $('.btn-reset-password').click(function(event) {
    //     var pass = $('input[name="password"]').val();

    //     if(pass.length<6){
    //         AdminToastr.error('Minimum Password length is 6 characters','Error');
    //     }
    //     else{
    //         // Get button obj
    //         var btn = $(this);
    //         // Get form
    //         var form = $(this).closest('form');
    //         // Get form id
    //         var $form = form.attr('id');
    //         // Disable the submit button to prevent repeated clicks:
    //         btn.prop('disabled', true);

    //         // Get action url
    //         var url = form.attr('action');
    //         // Get form data
    //         var data = form.serialize();
    //         // Submit action
    //         var response = AjaxRequest.fire(url, data);
    //         // Register success
    //         if (response.status) {
    //             btn.prop('disabled', false);
    //             window.location.href = '<?=g("base_url")?>'
    //         }
    //         // Fail
    //         else {
    //             // Enable form
    //             btn.prop('disabled', false);
    //         }
    //     }


    //     event.preventDefault();
    //     return false;
    // });
    // On submit action end
</script>
