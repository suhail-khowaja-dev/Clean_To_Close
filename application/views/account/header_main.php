<?

// Banner heading

//$this->load->view('widgets/inner_banner');

// Banner section

?>

<!--Inner Start-->


<!-- BEGIN SIDEBAR -->
<?php if($this->user_type == '1'){?>
<?

$this->load->view("account/menu");

?>
<?}else{?>
<?

// $this->load->view("account/menu_cleaner");
$this->load->view("account/user_name");

?>
<?php
}
?>

<!-- END SIDEBAR -->