<div class="Main">
            <div class="signUpMain text-center">
                <div class="col-lg-12">
                    <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Change Your Password</h3>
                    <!--<div class="col-lg-4 offset-lg-4">-->
                    <!--    <h6 class="mt20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" style="font-size:0.8rem!important;">Enter the email address associated with your account and we`ll send you a link to reset your password.</h6>-->
                    <!--</div>-->
                </div>
                <div class="col-lg-12 mt20">
                <form action="<?php echo g('base_url'); ?>user/update" method="post" id="form-update">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4 wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
                          <input type="password" id="password" placeholder="Password" class="slugger-source" name="signup[signup_password]">
                        <input type="hidden" id="id" placeholder="Password" value="<?php echo $_GET['id'] ?>" name="signup[signup_id]">
                        <input type="hidden" id="password" placeholder="Password" class="slugger-target" name="signup[signup_password_show]">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4 mt40 mb5 wow zoomIn" data-wow-duration="1s" data-wow-delay="1.5s">
                            <button type="submit" class="greenBtn btn-update-password">
                                Update Password
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(e){
                var obj;
      $(".btn-update-password").click(function(e) {
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
                AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">"Your password must contain at least one Special Character.</span>','Error');
                return false;
            }
            if (password.length < 8) {
                AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Your password must be at least 8 characters.</span>', 'Error');
                return false;
            } else {
        //   alert('here');
      e.preventDefault();
      Loader.show();
      setTimeout(function() {
        var obj = $("#form-update");
        var data = obj.serialize();
        var url =  obj.attr('action');
        var response = AjaxRequest.fire(url, data);
        if (response.status) {
        //  location.reload();
         setTimeout(function(){
         window.location.href = "<?= g('base_url') ?>";
              return false;
                    },3000);
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