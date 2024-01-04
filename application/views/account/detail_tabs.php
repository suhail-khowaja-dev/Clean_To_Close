<style>
  .myMenuHideShowClass {
    left: 0 !important;
  }
</style>

<?
$class = $this->router->fetch_class();
$method = $this->router->fetch_method();
?>
<?php
$params['joins'][] = array(
  "table" => "sqft",
  "joint" => "sqft.sqft_id = cleaning_service.cleaning_service_square_footage"
);
$params['joins'][] = array(
  "table" => "signup",
  "joint" => "signup.signup_id = cleaning_service.cleaning_service_user_id"
);
$params['where']['cleaning_service_id'] = $_GET['id'];
$cleaning_detail = $this->model_cleaning_service->find_one($params);
?>
<?php
if ($cleaning_detail['cleaning_service_cleaner_id'] != 0) {
  $deliverytime = $cleaning_detail['cleaning_service_closing_time'];
  $deliverydate = $cleaning_detail['cleaning_service_closing_date'];
  $active = $deliverydate . ' ' . $deliverytime;
  //  debug($active);
  $dt_active = new DateTime($active);
  //  debug($dt_active);
  $date_past = ($dt_active)->modify('-24 hours');
  // debug($date_past);
  $my_date =  date_format($date_past, 'Y-m-d H:i:s');
  //  debug($my_date);
  // $hour = (int) $dt_active->format('H');
  $today = date("Y-m-d H:i:s");
  // debug($today);
  // $date = $date_past;
  $date = $my_date;
  // debug($today);
  // debug($date,1);
  if ($today >=  $date) { ?>
    <div class="basicinfo">
      <div class="infoTabs">
        <h4 class='infoContant  '>
          <a href='javascript:void();' data-toggle="modal" data-target="#IveArrived"> I've Arrived </a>
        </h4>
        <h4 class='infoContant '>
          <a href='javascript:void();' data-toggle="modal" data-target="#IveLeft"> I've Left </a>
        </h4>
        <h4 class='infoContant '>
          <a href='<?= ($method == 'upload_arrival_departure' && $class == "account") ? 'javascript:void(0)' : g('base_url') . 'account/upload_arrival_departure' ?>?id=<?php echo $_GET['id'] ?>'> Upload / Submit </a>
        </h4>
      </div>
      <i class="fas fa-align-left menuBarShowItem"></i>
    </div>
    <!-- <div class="col-lg-12 text-right">
                <a href="javascriptvoid(0)">
                  <button type="button" id="arrival_data">Arrived</button>
                </a>
              </div> -->
  <? } else { ?>
    <div class="basicinfo" data-toggle="modal" data-target="#conditionmodal" >
      <div class="infoTabs">
        <h4 class='infoContant '>
          <a href='javascript:void();'> I've Arrived </a>
        </h4>
        <h4 class='infoContant '>
          <a href='javascript:void();'> I've Left </a>
        </h4>
        <h4 class='infoContant '>
          <a href='javascript:void();'> Upload / Submit </a>
        </h4>
      </div>
      <i class="fas fa-align-left menuBarShowItem"></i>
    </div>
<?php
  }
}
?>


<!-- Modal for condition -->

<div class="modal fade arrModal" id="conditionmodal" tabindex="-1" role="dialog" aria-labelledby="IveArrivedLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Note</h5>
        <hr>
          <div class="mBodyy">
            <p>Access details will be shown 24 hours prior to the scheduled service.</p>
          </div>
        

      </div>
    </div>
  </div>
</div>
<script>
  $('.menuBarShowItem').on('click', e => {
    $('.basicinfo').toggleClass('myMenuHideShowClass')
    // console.log('eeoijdf', e.target) 
  })
</script>