<?
$class = $this->router->fetch_class();
$method = $this->router->fetch_method();
?>
<div class="basicinfo">
  <div class="infoTabs">
    <h4 class='infoContant  <?= ($method == 'info_cleaner'  && $class == "account") ? 'active' : '' ?>'>
      <a href='<?= ($method == 'info_cleaner'  && $class == "account") ? 'javascript:void(0)' : g('base_url') . 'account/info_cleaner' ?>'> My Info </a>
    </h4>
    <h4 class='infoContant <?= ($method == 'browse_task'  && $class == "account") ? 'active' : '' ?>'>
      <a href='<?= ($method == 'browse_task'  && $class == "account") ? 'javascript:void(0)' : g('base_url') . 'account/browse_task' ?>'> Browse Task </a>
    </h4>
    <h4 class='infoContant <?= ($method == 'my_task'  && $class == "account") ? 'active' : '' ?>'>
      <a href='<?= ($method == 'my_task'  && $class == "account") ? 'javascript:void(0)' : g('base_url') . 'account/my_task' ?>'> My Tasks </a>
    </h4>
    <h4 class='infoContant  <?= ($method == 'change_password'  && $class == "account") ? 'active' : '' ?>'>
      <a href='<?= ($method == 'change_password' && $class == "account") ? 'javascript:void(0)' : g('base_url') . 'account/change-password' ?>'> Change Password </a>
    </h4>
    <h4 class='infoContant'>
      <a href="<?= g('base_url') ?>user/logout">Logout</a>
    </h4>
  </div>
  <i class="fas fa-align-left"></i>
</div>