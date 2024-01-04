<?php
// $data['userEmail'] = $this->session->userdata['logged_in']['email'];
// $data['userdata'] = $this->model_signup->find_by_pk($this->userid);

// $param['where']['signup_type'] = 2;
$user_data = $this->model_signup->find_by_pk($this->userid);
// debug($data['user_data'],1);
?>

<div class="mt50 d-flex align-items-center justify-content-between w-100">
<?php
$method = $this->router->fetch_method();
// debug($method,1);
?>
<?php
if ($method == 'browse_task') { ?>
  <div>
  </div>
  <h3 class='orderHeading'>
  Available Jobs
  </h3>
  <? } else { ?>
    <?if($_GET['id'] == 2){?>
      <div></div>
      <h3 class='orderHeading'>
      Account Settings
      </h3>
      <?}elseif($method == 'upload_arrival_departure'){?>
        <!-- <div></div>
        <h1 class="text-center">Upload/Submission Page</h1> -->
        <?}else{?>
          <div></div>
          <h3 class='orderHeading'>
          Welcome To Your Dashboard, <?php echo $user_data['signup_name'] ?> <?php echo $user_data['signup_lastname'] ?>!
          </h3>
          <?php
        }}
        ?>
        <!-- <h3 class='orderHeading'>
        My Info
        </h3> -->
        
        <div class="dropdown ">
        <button class="btn btn-secondary dropdown-toggle csToggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span>
        <?php echo ucfirst(substr($user_data['signup_name'], 0, 1)); ?> <?php echo ucfirst(substr($user_data['signup_lastname'], 0, 1)) ?></span>
        </button>
        <div class="dropdown-menu forCgh" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="<?= g('base_url') ?>account/my_task">Home</a>
        <a class="dropdown-item" href="<?= g('base_url') ?>account/info_cleaner?id=2">Account Settings</a>
        <a class="dropdown-item" href="<?= g('base_url') ?>user/logout">Sign Out</a>
        </div>
        </div>
        
        </div>