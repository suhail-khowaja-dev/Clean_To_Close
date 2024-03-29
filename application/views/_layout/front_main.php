<? global $config;
// Define plugins for page
$my_tools = array(
    "datetime-picker" => array(
        "css" => array("css/jquery.datetimepicker.css"),
        "js" => array("js/jquery.datetimepicker.js"),
    ),
    "datatables" => array(
        "css" => array("datatables.min.css"),
        "js" => array("datatables.min.js"),
    ),
    "select2" => array(
        "css" => array("select2.css"),
        "js" => array("select2.js","select2_custom.js"),
    ),
    "fb" => array(
        "css" => array("style.css"),
        "js" => array("jquery.fancybox.min.js"),
    ),
    "fancybox" => array(
        "css" => array("jquery.fancybox.min.css"),
        "js" => array("jquery.fancybox.min.js"),
    ),
    "owl-carousel" => array(
        "css" => array("owl.carousel.css","owl.theme.css"),
        "js" => array("owl.carousel.js"),
    ),
    "slick" => array(
        "css" => array("slick.css","slick-theme.css"),
        "js" => array("slick.js"),
    ),
    "jquery-file-upload"=> array(
        "js" => array(
            "js/vendor/jquery.ui.widget.js",
            "js/vendor/tmpl.min.js",
            "js/vendor/load-image.min.js",
            "js/vendor/canvas-to-blob.min.js",
            //"blueimp-gallery/jquery.blueimp-gallery.min.js",
            "js/jquery.iframe-transport.js",
            "js/jquery.fileupload.js",
            "js/jquery.fileupload-process.js",
            "js/jquery.fileupload-image.js",
            "js/jquery.fileupload-audio.js",
            "js/jquery.fileupload-video.js",
            "js/jquery.fileupload-validate.js",
            "js/jquery.fileupload-ui.js",
        ),
        "css" => array(
            "blueimp-gallery/blueimp-gallery.min.css",
            "css/jquery.fileupload.css",
            //"css/jquery.fileupload-ui.css",
        ),
    ),
    "bootstrap-switch" => array(
        "css" => array("css/bootstrap-switch.min.css"),
        "js" => array("js/bootstrap-switch.min.js"),
    ),
    "bootbox"=> array(
        "js" => array("bootbox.min.js"),
    ),
    "ckeditor"=> array(
        "js" => array("ckeditor.js","config.js"),
    ),
    "bootstrap-fileupload" => array(
        "js" => array("bootstrap-fileupload.js"),
        "css" => array("bootstrap-fileupload.css")
    ),
);

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
/*        $class = $this->router->fetch_class();
    */?><!--
    <?php
/*        if ($class == 'home') {
    */?>
        <title><?/*= $title */?></title>
    <?php
/*        }
        else{
    */?>
        <title><?/*= ucfirst(humanize($class))." | ".$title */?></title>
    --><?php
/*        }
    */?>

    <title><?= $title ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?=Links::img($layout_data['logo']['logo_image_path'],$layout_data['logo']['logo_favicon'])?>">

    <?
    foreach ($meta_data AS $meta_name => $meta_val) {
        ?>
        <meta name="<?= $meta_name ?>" content="<?= $meta_val ?>">
    <? } ?>

    <!-- Google Fonts -->
    <!--<link href="<?php /*echo l('assets/front_assets/fonts/font.css')*/?>" rel="stylesheet">-->

<!-- owl -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
    <!-- font-awsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- owl carousal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <!-- wow -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="<?= g('js_root') . $js ?>mapdata.js"></script>
    <script src="<?= g('js_root') . $js ?>usmap.js"></script>



    <!-- Loading css file -->
    <? foreach ($css_files AS $css) { ?>
        <link href="<?= g('css_root') . $css ?>" rel="stylesheet" type="text/css"/>
    <?
    }
    // Load js file
    if (is_array($js_files_init)) {
        foreach ($js_files_init as $js) { ?>
            <script src="<?= g('js_root') . $js ?>"></script>
        <?
        }
    }
    // Load additional files css
    if (is_array($additional_tools) && count($additional_tools)) {
        foreach ($additional_tools AS $tool) {
            if (is_array($my_tools[$tool]['css']))
                foreach ($my_tools[$tool]['css'] AS $script) {
                    if ($script) {
                        ?>
                        <link rel="stylesheet" href="<?= g('plugins_root') . $tool . "/" . $script; ?>"/><?
                    }

                }
        }
    }
    // Load additional files js
    if (array_filled($additional_tools)) {
        foreach ($additional_tools AS $tool) {
            if (is_array($my_tools[$tool]['js']))
                foreach ($my_tools[$tool]['js'] AS $script) {
                    $tool_activators .= "toolset.tool_" . str_replace("-", "_", $tool) . " = true;";
                    ?>
                    <script src="<?= g('plugins_root') . $tool . "/" . $script; ?>"></script>
                <?
                }
        }
    }
    ?>
    <script type="text/javascript"> var base_url = "<?php  echo base_url(); ?>";</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

    <!-- Fonts Links -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<!--     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->

<script>
    $(function() {
    $(".dataTables").dataTable({
      // "aaSorting": [ [0,'desc'], [1,'desc'] ],
      "bPaginate": true,
      "bLengthChange": true,
      "bFilter": true,
      "bInfo": false,
      "searching": true,
      "bSort": false,
      // "pageLength": 50
    });
  });
</script>
</head>

<body class="">

<style>
    #preloader {
        display: flex;
        flex-direction: column;
    }
    #preloader p {
         color: #fff !important;
        font-size: 18px;
        text-align: center;
        margin-top: 20px;
        font-family: gilroybold !important;
    }
</style>

<div id="preloader" style="display:none;">  
    <div class="loading">
        <!--<span>Loading...</span>-->
    </div>
       <p>Kindly wait while data is processing. <br> Do not close this window!</p>
</div>

<!-- PRE LOADER start-->
<div id="st-preloader">
    <div id="pre-status">
        <div class="preload-placeholder"></div>
    </div>
</div>
<!-- PRE LOADER end-->

<!-- PRE LOADER start-->
<!-- <div id="st-preloader">
    <div id="pre-status">
        <div class="preload-placeholder"></div>
    </div>
</div> -->
<!-- PRE LOADER end-->

<!-- Wrapper Start -->
<?$this->load->view("_layout/header");
// Page content Start
echo $content_block;
// Page content End
$this->load->view("_layout/footer");
// Search
//$this->load->view("_layout/search");
// Wrapper End

// Load modal

// Load js files
foreach ($js_files as $js) { ?>
    <script src="<?= g('js_root') . $js ?>"></script>
<?
}
?>

<script>
    $(document).ready(function(){
        <?if((isset($_GET['msgtype'])) && ($_GET['msgtype']) && ($_GET['msg'])){?>
        AdminToastr.<?=$_GET['msgtype']?>("<?=$_GET['msg']?>", "<?=$_GET['msgtype']?>" , {positionClass:"toast-top-full-width"} );
        <?}?>

    });
</script>
<!-- owl -->
 <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>
<script>
      $('.owl-carousel').owlCarousel({
        loop:false,
        margin:20,
        nav:false,
        dots: false,
        // autoplay:true,
        autoplayTimeout:2000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            },
            2000:{
                items:5
            }
        }
      })
      new WOW().init();
    </script>
 </body>
 
</html>