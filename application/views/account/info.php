<div class="Main">
  <div class="dashboard  ">

    <div class="main-div contantPart">
      <div class="container">
        <div class="heading mt50">
          <?php if ($userdata['signup_update_info'] == 2) { ?>
            <? $this->load->view('account/header_main') ?>
          <?
          }
          ?>
          <!-- <h3 class='orderHeading'>
          Place Order
        </h3> -->
        </div>
        <div class="mt50 mb-4">
          <?php if ($userdata['signup_update_info'] == 0) { ?>
            <div></div>
            <h3 class='orderHeading'>
              We Need A Little More Information From You!
            </h3>
          <?
          }
          ?>
        </div>
        <form action="<?= g('base_url') ?>account/update_info" method="post" id="saveForm" class="footTop">
          <div class="row accountInfoRow">
            <div class="col-lg-6 mt30">
              <label for="">First Name</label>
              <input type="hidden" name="signup[signup_password]" value="<?= $userdata['signup_password'] ?>">
              <input type="hidden" name="signup[signup_id]" value="<?= $this->userid ?>">
              <input type="hidden" name="signup[signup_type]" value="<?= $userdata['signup_type'] ?>">
              <input type="hidden" name="signup[signup_update_info]" value="2">
              <input type="hidden" id="" placeholder="" value="1" name="signup[signup_realtor_status]">
              <input type="text" placeholder='Name' class="accountInfoInput stop_spical" value="<?= $userdata['signup_name'] ?>" name="signup[signup_name]" id="name">
            </div>

            <div class="col-lg-6 mt30">
              <label for="">Last Name</label>
              <input type="text" placeholder='Address' name="signup[signup_lastname]" value="<?= $userdata['signup_lastname'] ?>" class="accountInfoInput stop_spical">
            </div>

            <div class="col-lg-6 mt30">
              <label for="">Address</label>
              <input type="text" placeholder='Address' name="signup[signup_address]" id="addressInput" value="<?= $userdata['signup_address'] ?>" class="accountInfoInput stop_spical">
            </div>

            <div class="col-lg-6 mt30">
              <label for="">E-mail</label>
              <input type="email" placeholder='E-mail' class="accountInfoInput" value="<?= $userdata['signup_email'] ?>" name="signup[signup_email]" readonly>
            </div>
            <div class="col-lg-6 mt30">
              <label for="">Phone Number</label>
              <input type="tel" placeholder='Phone Number' name="signup[signup_contact]" value='<?= $userdata['signup_contact'] ?>' class="accountInfoInput phone_number stop_spical" autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="signup_contact_phone">
            </div>

            <div class="col-lg-6 mt30">
              <label for="">Brokerage Name</label>
              <input type="text" placeholder='Brokerage Name' class="accountInfoInput stop_spical" value="<?= $userdata['signup_brokerage_name'] ?>" name="signup[signup_brokerage_name]" id="brokerage_name">
            </div>
            <div class="col-lg-6 mt30">
              <label for="">Office Address</label>
              <input type="text" placeholder='Office Address' class="accountInfoInput stop_spical" value="<?= $userdata['signup_office_address'] ?>" name="signup[signup_office_address]" id="addressInput1">
            </div>

            <div class="col-lg-6 mt30">
              <label for="">Agent License Number</label>
              <input type="text" placeholder='Agent License Number' class="accountInfoInput stop_spical"  value="<?= $userdata['signup_agent_license_number'] ?>" name="signup[signup_agent_license_number]" id="agent_license_number">
            </div>

            <div class="col-lg-6 mt30">
              <label for="">Office License Number</label>
              <input type="text" placeholder='Office License Number' class="accountInfoInput stop_spical" value="<?= $userdata['signup_office_license_number'] ?>" name="signup[signup_office_license_number]" id="office_license_number">
            </div>

            <div class="col-lg-6 mt30">
              <label for="">MLS Network</label>
              <input type="text" placeholder='MLS Network' class="accountInfoInput stop_spical" value="<?= $userdata['signup_mls_network'] ?>" name="signup[signup_mls_network]" id="mls_network">
            </div>
            <div class="col-lg-6 mt30">
              <label for="">MLS ID</label>
              <input type="text" placeholder='MLS ID' class="accountInfoInput stop_spical" value="<?= $userdata['signup_mls_id'] ?>" name="signup[signup_mls_id]" id="mls_id">
            </div>
          </div>

          <div class="row mt20 mb-3">
            <div class="col-lg-12 text-right">
              <button class='saveChangesBtn' value="Save Now" id="submitInfo">Save Changes</button>
            </div>
          </div>
        </form>
      </div>
    </div>


  </div>
</div>

<!-- auto compelte script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCab5ahH6KkodUavDwBCigXTL7ZbrkzS94&libraries=places&callback=initAutocomplete"></script>
<script>
  // autocomplete address script
  var addressInput = 'addressInput';
  $(document).ready(function() {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(addressInput)), {
      type: ['geocode']
    });
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var near_place = autocomplete.getPlace();
    });
  });
</script>
<script>
  // autocomplete address script
  var addressInput1 = 'addressInput1';
  $(document).ready(function() {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(addressInput1)), {
      type: ['geocode']
    });
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var near_place = autocomplete.getPlace();
    });
  });
</script>
<!-- end -->



<!-- other stuff script -->
<script type="text/javascript">
  $(document).ready(function() {

    $('.stop_spical').on('input', function() {
      $(this).val($(this).val().replace(/[^a-z0-9]/gi, ' '));
    });

    var obj;
    $("#submitInfo").click(function(e) {
      // var name = $('#name').val();
      var phone_number = $('.phone_number').val();
      var address = $('#ship-address').val();
      var brokerage_name = $('#brokerage_name').val();
      var office_address = $('#office_address').val();
      var office_license_number = $('#office_license_number').val();
      var agent_license_number = $('#agent_license_number').val();
      var mls_network = $('#mls_network').val();
      var mls_id = $('#mls_id').val();

      if (phone_number == '') {
        AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Phone Number field is required.</span>', 'Error');
        return false;
      }
      if (address == '') {
        AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Address  field is required.</span>', 'Error');
        return false;
      }
      if (brokerage_name == '') {
        AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Brokerage Name field is required.</span>', 'Error');
        return false;
      }
      if (office_address == '') {
        AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Office Address field is required.</span>', 'Error');
        return false;
      }
      if (agent_license_number == '') {
        AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Agent License Number field is required.</span>', 'Error');
        return false;
      }
      if (office_license_number == '') {
        AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Office License Number field is required.</span>', 'Error');
        return false;
      }
      if (mls_network == '') {
        AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Mls Network field is required.</span>', 'Error');
        return false;
      }
      if (mls_id == '') {
        AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Mls Id field is required.</span>', 'Error');
        return false;
      } else {
        e.preventDefault();
        Loader.show();
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

            window.location.href = "<?php echo g('base_url') ?>account/orderhistory";
          }
          // Add return
          return false;
        }, 1000);
        return false;
      }
    });

    // Profile image update start (not implement)
    $("#btn-profile").on('change', function() {
      // Get file obj
      var file_obj = $(this);
      // Define allow extension
      var ext = file_obj.val().split('.').pop().toLowerCase();

      // Check ext empty or not (empty means no file selected)
      if (ext != '') {
        // Other extension
        if ($.inArray(ext, ['png', 'jpg', 'jpeg']) == -1) {
          file_obj.val('');
          AdminToastr.error('Invalid file', 'Error');
        }
        // Upload file
        else {
          var data = new FormData(document.getElementById("form-image"));
          var url = $("#form-image").attr("action");

          FileUploadScript.fire(url, data, 'json', true);

        }
      }
    });
    // Profile image update end
    document.getElementById('signup_contact_phone').addEventListener('input', function(e) {
      var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
      e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });


  });
</script>
<!-- other stuff script -->