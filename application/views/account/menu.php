<!-- <?
      $class = $this->router->fetch_class();
      $method = $this->router->fetch_method();
      ?>
<div class="basicinfo">
  <div class="infoTabs">
    <h4 class='infoContant  <?= ($method == 'info'  && $class == "account") ? 'active' : '' ?>'>
      <a href='<?= ($method == 'info'  && $class == "account") ? 'javascript:void(0)' : g('base_url') . 'account/info' ?>'> Account Info </a>
    </h4>
    <h4 class='infoContant <?= ($method == 'orderhistory'  && $class == "account") ? 'active' : '' ?>'>
      <a href='<?= ($method == 'orderhistory'  && $class == "account") ? 'javascript:void(0)' : g('base_url') . 'account/orderhistory' ?>'> My Order </a>
    </h4>
    <h4 class='infoContant  <?= ($method == 'change_password'  && $class == "account") ? 'active' : '' ?>'>
      <a href='<?= ($method == 'change_password' && $class == "account") ? 'javascript:void(0)' : g('base_url') . 'account/change-password' ?>'> Change Password </a>
    </h4>
    <h4 class='infoContant'>
      <a href="<?= g('base_url') ?>user/logout">Logout</a>
    </h4>
  </div>
  <i class="fas fa-align-left"></i>
</div> -->
<?php
// $data['userEmail'] = $this->session->userdata['logged_in']['email'];
// $data['userdata'] = $this->model_signup->find_by_pk($this->userid);

// $param['where']['signup_type'] = 2;
$user_data = $this->model_signup->find_by_pk($this->userid);
// debug($user_data,1);
?>
<div class="mt50 d-flex align-items-center justify-content-between w-100">
  <?php
  $method = $this->router->fetch_method();
  // debug($method,1);
  ?>
  <?php
  if ($method == 'place_order') { ?>
  <div>
</div>
    <h3 class='orderHeading'>
      Place A New Order
    </h3>
  <? } else {?>
    <?if($_GET['id'] == 1 ){?>
      <div></div>
      <h3 class='orderHeading'>
      Account Settings
    </h3>
    <?}else{?>
      <div></div>
      <h3 class='orderHeading'>
      Welcome To Your Dashboard, <?php echo $user_data['signup_name'] ?> <?php echo ucfirst($user_data['signup_lastname']); ?>!
    </h3>
  <?php
  }}
  ?>
  <div class="dropdown ">
    <button class="btn btn-secondary dropdown-toggle csToggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span>
        <?php echo ucfirst(substr($user_data['signup_name'], 0, 1)); ?> <?php echo ucfirst(substr($user_data['signup_lastname'], 0, 1)) ?></span>
    </button>
    <div class="dropdown-menu forCgh" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="<?= g('base_url') ?>account/orderhistory">Home</a>
      <a class="dropdown-item" href="<?= g('base_url') ?>account/info?id=1">Account Settings</a>
      <a class="dropdown-item" href="<?= g('base_url') ?>user/logout">Sign Out</a>
    </div>
  </div>

</div>