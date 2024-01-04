var Pscript = {

    init: function () {
        Pscript.subscribe();
        Pscript.quote();
        //Pscript.subscribe_btn();
        Pscript.contact_us();
        Pscript.event_subcribe();
        Pscript.change_pass();
        Pscript.signup();
    },

    // Subscribe start
    subscribe: function () {
        $("#form-subscribe").on('submit', function (e) {
            // Prevent form submitting
            e.preventDefault();
            var obj = $(this).closest('form');
            Loader.show();
            setTimeout(function () {
                //var data = $('#form-subscribe').serialize();

                var data = obj.serialize();
                var action = obj.attr('action');
                var response = AjaxRequest.fire(action, data);
                // success
                if (response.status) {
                    $('#subs-email').val('');
                    $('#subs-email-inner').val('');
                }
                return false;
            }, 1000);
        });
    },
    // Subscribe end

    // Quote start
    quote: function () {
        $("#form-quote").on('submit', function (e) {

            // Prevent form submitting
            e.preventDefault();
            var obj = $(this).closest('form');
            Loader.show();
            setTimeout(function () {
                //var data = $('#form-subscribe').serialize();

                var data = obj.serialize();
                var action = obj.attr('action');
                var response = AjaxRequest.fire(action, data);
                // success
                if (response.status) {
                    $('#quote-fullname').val('');
                    $('#quote-email').val('');
                }
                return false;
            }, 1000);
        });
    },
    // Subscribe end

    // Subscribe anchor start
    /*subscribe_btn: function(){
        $(".btn-subscribe").on('click',function (e) {
            $("#form-subscribe").submit();
        });
    },*/
    // Subscribe anchor end

    // Contact us form start
    contact_us: function () {
        $('.btn-send').on('click', function (e) {
            // Prevent form submit
            e.preventDefault();
            Loader.show();
            setTimeout(function () {
                var obj = $("#contact-form");
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
        });
    },
    // Contact us form end

    // Contact us form start
    event_subcribe: function () {
        $("#form-event-subscribe").on('submit', function (e) {
            e.preventDefault();
            Loader.show();
            setTimeout(function () {
                // Prevent form submit
                e.preventDefault();
                var obj = $("#form-event-subscribe");
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
        });
    },
    // Contact us form end

    // Contact us form start
    change_pass: function () {
        $("#typebtn").click(function () {
            var forgotpass = $('#forgotpass').val();
            if (forgotpass == "") {
                AdminToastr.error("Please Enter Password", 'Error');
            } else if (forgotpass.length < 6) {
                AdminToastr.error('Minimum Password length is 6 characters', 'Error');
            } else {
                Loader.show();
                setTimeout(function () {
                    // Prevent form submit
                    //e.preventDefault();
                    var obj = $("#forgotform");
                    // Get form data
                    var data = obj.serialize();
                    // Get post url
                    var url = base_url + "account/update_password";
                    // Submit action
                    var response = AjaxRequest.fire(url, data);
                    if (response.status) {
                        location.reload();
                    }
                }, 1000);
                // Add return
                return false;
            }
        });

    },
    // Contact us form end

    // Subscribe start
    signup: function () {
        $("#btn-signup").click(function (e) {
            // alert('yes');
            var form = $(this).closest('form');

            setTimeout(function () {
                // Prevent form submitting
                e.preventDefault();
                //var data = $('#form-subscribe').serialize();
                // Get action url
                var url = form.attr('action');
                var data = new FormData(document.getElementById('signupForm'));
                var response = FileUploadScript.fire(url, data, 'json', true);
                return false;
            }, 1000);
            return false;
        });


    },
    // Subscribe end

    signup: function () {
        $("#btn-signup-cleaner").click(function (e) {
            //   Loader.show();
            checkedPackageAmount = $('input[name="signup[signup_package_amount]"]:checked').val();
            var submitted = false
            $('#tab3 label input').each((i, e) => {
                if (e.checked) {
                    submitted = true
                }
            })
            if (submitted) {
            var form = $(this).closest('form');
            var myJSON = JSON.stringify(teamMem);
                $.ajax({
                     url: base_url + "user/saveTeam",
                    type: "POST",
                      dataType: "json",
                    data: {
                          "teamMem": myJSON
                },
                    success: function (data) {
                        //   console(data)
                        console.log("SUCCESS");
                    },
                     error: function (data) {
                  console.log("ERROR");
                    }
                });
            e.preventDefault();
            Loader.show();
            setTimeout(function() {
                var url = form.attr('action');
                var data = new FormData(document.getElementById('signupFormCleaner'));
                jQuery.ajax({
                url: url,
                type: "POST",
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false, 
                dataType: 'json',
                success: function(response) {
                    Loader.hide();
                       AdminToastr.success(response.txt,'You will receive an approval or denial email within 48-72. You are responsible for the background check regardless of approval/denial. In the event you are denied, you will be credited back the subscription fee');
                    setTimeout(function(){
                    if (checkedPackageAmount == "97.95") {
                        // console.log('here');
                        $('#checkoutButton25').click()
                        // $('#checkoutHref25').click()
                        // console.log('here');
                    }
                    if (checkedPackageAmount == "47.95") {
                        $('#checkoutButton10').click()
                        // $('#checkoutHref10').click()

                    }
                    if (checkedPackageAmount == "27.95") {
                        $('#checkoutButton05').click()
                        // $('#checkoutHref05').click()

                    }
                    },2000)
                },
            });  // JQUERY Native Ajax End
                
            }, 4000);
             return false;
            }
            else{
                 AdminToastr.error(`<span for="%s" style="color:#fff" class="has-error help-block">Please select the package</span>`, 'Error');
            }
        });


    },

};


$(document).ready(function () {
    Pscript.init();
});

