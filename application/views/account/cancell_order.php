<div class="Main">
  <div class="dashboard  ">
    <div class="contantPart">
      <div class="container">
        <div class="heading mt50 text-center">
          <h1 class="mb1" style="font-size: 36px;">Cancel Order</h1>
        </div>
        <!--<form action="<?= g('base_url') ?>account/ajax_delete_update" method="POST" id="saveForm" class="footTop">-->
        <div class="cancel-body">
          <div class="head mt2 mb1">

            <h5 class="mb2"><?php echo $clean_data['cleaning_service_address'] ?></h4>
              <label for="">Please let us know why you're cancelling this order.</label>
          </div>
          <div class="cancel-drop">
            <label for="reason">Select a reason</label>
            <select class="mb2" name="canceldata[cleaning_service_cancel_other]" id="reason">
              <option value="Home is no longer under contract">Home is no longer under contract</option>
              <option value="Different Provider">Different provider</option>
              <option value="Other" class="other">Other</option>
              <!-- <option value="lorem">lorem</option> -->
            </select>
          </div>
          <div class="reson-canceling">
            <h6>If other please provide the reason for cancelling</h6>
            <input type="text" name="canceldata[cleaning_service_cancel_reson]" id="reson_input">
          </div>
          <div class="butn d-flex justify-content-between">
            <button class="cancel-btn" id="backByhn">Back</button>
            <button class="cancel-btn" data-toggle="modal" data-target="#exampleModal" id="">Cancel Order</button>
          </div>
        </div>
        </form>

      </div>
    </div>
  </div>
</div>





<!-- modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Are you sure want to cancel this order?</h5>
      </div>
      <div class="modal-body">
        <form action="<?= g('base_url') ?>account/ajax_delete_update" method="POST" id="saveForm" class="footTop">
          <p>This action cannot be reversed.</p>
          <input type="hidden" name="canceldata[cleaning_service_id]" value="<?php echo $clean_data['cleaning_service_id'] ?>">
          <input type="hidden" name="canceldata[cleaning_service_user_id]" value="<?php echo $clean_data['cleaning_service_user_id'] ?>">
          <input type="hidden" name="canceldata[cleaning_service_cancel_other]" value="" id="reson_item">
          <input type="hidden" name="canceldata[cleaning_service_cancel_reson]" value="" id="reson_name">
      </div>
      <div class="modal-footer">
        <button type="button" class="never-btn" id="never_mind">Back</button>
        <button type="button" class="mod-cnl-btn" data-dismiss="modal" id="submitInfo">Cancel Order</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {

    $('#never_mind').click(function() {
      $('#exampleModal').hide();
      window.location.href = "<?= g('base_url') ?>account/orderhistory";
    })
    // get reson dropdown value
    $("#reason").change(function() {
      var drop = $("#reason").val();
      var modal = $("#reson_item").val(drop);
    });

    //get reson input value 
    $("#reson_input").keyup(function() {
      var input = $(this).val();
      var modal_name = $("#reson_name").val(input);
    })
  });
</script>
<script>
  $('#backByhn').on('click', () => {
    window.location.href = "<?= g('base_url') ?>account/orderhistory";
  })
  //   $(document).ready(function() {
  //     $(".delete_this").on('click', function() {
  //       var id = $(this).attr("data-pkid");
  //       var userid = $(this).attr("data-userid");
  //       var data = {
  //         id: id,
  //         userid: userid
  //       };
  //       var url = $(this).attr('data-url');
  //       response = AjaxRequest.fire(url, data);

  //       if (response.status)
  //         $("#row-" + id).remove();
  //       location.reload();

  //     });

  //   });
  // 
</script>
<script type="text/javascript">
  $(document).ready(function() {
    var obj;
    $("#submitInfo").click(function(e) {
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
          window.location.href = "<?= g('base_url') ?>account/orderhistory";
        }
        // Add return
        return false;
      }, 3000);
      return false;
    });
  });
</script>