<? global $config;
$menu_links = array(
    array("title" => "Website", "icon" => "clip-world", "action" => "", "link"=>"",
        "additionals" => array(
            //array("link" => "", "title" => "Dashboard", "icon" => "bar-chart"),
        ),
    ),
    array("title" => "Dashboard", "icon" => "clip-home-3", "action" => "home", "link"=>"home",
        "additionals" => array(
            //array("link" => "", "title" => "Dashboard", "icon" => "bar-chart"),
        ),
    ),



    array("title" => "Layout", "icon" => "clip-screen", "action" => array("promotional_banner", "", "cms_page", "cms_title", "logo","prospect"),
        "additionals" => array(
            //array("link"=>"category/menu","title"=>"Menu Categories", "icon"=>"wallet"),
            //array("link"=>"promotional_banner","title"=>"Promotional Banners", "icon"=>"plus"),
            array("link" => "logo/add/1", "title" => "Manage Logo", "icon" => "folder"),
            array("link" => "cms_page", "title" => "CMS Content", "icon" => "docs"),
           // array("link" => "prospect", "title" => "Prospect", "icon" => "speech"),
            //array("link"=>"inner_banner","title"=>"Manage Inner Banner", "icon"=>"folder"),
            //array("link"=>"cms_content","title"=>"Manage PageContent", "icon"=>"speech"),
            array("link"=>"faq","title"=>"Manage FAQ's", "icon"=>"question"),
            //array("link"=>"client","title"=>"Manage Partners", "icon"=>"users"),
            //array("link"=>"testimonial","title"=>"Manage Testimonials", "icon"=>"speech"),
            //array("link"=>"news","title"=>"Manage News", "icon"=>"note"),
            //array("link"=>"config/update","title"=>"Additional Options", "icon"=>"pencil"),
            // array("link" => "config/update", "title" => "Configuration", "icon" => "pencil"),
            //array("link"=>"channel","title"=>"Channel Config", "icon"=>"speech"),
        ),
    ),


     // Blog Management
    array("title"=>"Blog Management", "icon"=>" fa fa-circle-o-notch" ,"action" => array("blog_category","blog","comment") ,
     "additionals"=>array(
             // array("link"=>"blog_category","title"=>"Category", "icon"=>" fa fa-asterisk"),
         array("link"=>"blog","title"=>"Manage Media", "icon"=>"fa fa-newspaper-o"),
             // array("link"=>"comment","title"=>"Comment", "icon"=>" fa fa-comment-o"),
     ),
 ),

    //Additional Adds Ons
    array("title" => "Additional Adds Ons", "icon" => " fa fa-bullhorn", "action" => "additional_add_ons",
    "additionals" => array(
        array("link"=>"additional_add_ons","title"=>"Manage Additional Add Ons", "icon"=>"speech"),
    ),
),

    // Testimonials
    array("title" => "Testimonial", "icon" => " fa fa-bullhorn", "action" => "testimonial",
        "additionals" => array(
            array("link"=>"testimonial","title"=>"Manage Testimonials", "icon"=>"speech"),
        ),
    ),
   
    // package
    array("title"=>"Package Managment", "icon"=>" fa fa-usd" ,"action" => array("packages") ,"link"=>"Packages",
    "additionals"=>array(
        array("link"=>"packages","title"=>" Packages Cleaner Side", "icon"=>" fa fa-dollar"),
        array("link"=>"package_realtor","title"=>" Packages Realtor Side", "icon"=>"fa fa-dollar"),
        array("link"=>"type_clean_package","title"=>" Packages Service Type", "icon"=>"fa fa-dollar"),
        array("link"=>"package_service","title"=>" Packages Services", "icon"=>"fa fa-dollar"),
        // array("link"=>"coupon","title"=>"Manage Coupons", "icon"=>"  fa fa-plus"),
        array("link"=>"cleaner_percentage/update","title"=>"Cleaner Package Percentage", "icon"=>"  fa fa-plus"),
        array("link"=>"Cleaner_pakage_disclimar/update","title"=>"Package Disclaimer", "icon"=>"  fa fa-plus"),
        // array("link"=>"coupon","title"=>" Add Coupon", "icon"=>"fa fa-dollar"),

    ),
),
// array("title"=>"Coupon Management", "icon"=>" fa fa-user-plus" ,"action" => "coupon" ,
//         "additionals"=>array(
           
//         ),
//     ),
    // cleaner note
    // array("title"=>"Notes", "icon"=>"fa fa-bookmark" ,"action" => array("packages") ,"link"=>"Cleaner_note",
    //     "additionals"=>array(
    //         array("link"=>"cleaner_note","title"=>"Cleaner Notes", "icon"=>"fa fa-user-plus"),
    //     ),
    // ),

//  map
  array("title" => "Map Management", "icon" => "fa fa-map-marker", "action" => "map",
        "additionals" => array(
            array("link"=>"map","title"=>"Add Map Address", "icon"=>"fa fa-map-marker"),
        ),
    ),
    
//   zipcode
array("title" => "ZipCode Management", "icon" => "fa fa-map-pin", "action" => "zip_code",
        "additionals" => array(
            array("link"=>"zip_code","title"=>"Add Zip Code", "icon"=>"fa fa-map-marker"),
        ),
    ),

    // square footage
array("title"=>"Square Footage", "icon"=>" fa fa-usd" ,"action" => array("sqft") ,"link"=>"Sqft",
"additionals"=>array(
    array("link"=>"sqft","title"=>" Sq ft", "icon"=>" fa fa-dollar"),
),
),
    array("title" => "All Orders", "icon" => "fa fa-list", "action" => array("cleaning_service"),"link"=> "cleaning_service",
    // "additionals" => array(
    //     array("link" => "cleaning_service", "title" => "Cleaning Service", "icon" => " fa fa-user-plus"),
    // ),
),
array("title" => "Closed Orders", "icon" => "fa fa-list", "action" => array("cleaning_service_closed"),"link"=> "cleaning_service_closed",
// "additionals" => array(
//     array("link" => "cleaning_service", "title" => "Cleaning Service", "icon" => " fa fa-user-plus"),
// ),
),

// array("title"=>"User Management", "icon"=>" fa fa-user-circle-o" ,"action" => "signup" ,
array("title" => "All Realtors", "icon" => "fa fa-user-circle-o", "action" => array("signup"),"link"=> "signup"),

array("title"=>"All Cleaners", "icon"=>" fa fa-user-circle-o" ,"action" => "signup_cleaner" ,
"additionals" => array(
        array("link" => "signup_cleaner_unapproved", "title" => "New Signup", "icon" => " fa fa-user"),
        array("link" => "signup_cleaner", "title" => "Approved Cleaners", "icon" => " fa fa-user"),
        array("link" => "cleaner_note", "title" => "Cleaner Signup Note", "icon" => " fa fa-user"),
        array("link" => "cleaner_member_amount/update", "title" => "Cleaner BackgroundCheck Amount", "icon" => " fa fa-user"),

    ),
),

            // array("link"=>"signup","title"=>"All Realtor's", "icon"=>"  fa fa-user-o"),
            // array("link"=>"signup_cleaner","title"=>"All Cleaner's", "icon"=>"  fa fa-user-o"),
            // array("title"=>"All Cleaners", "icon"=>" fa fa-user-circle-o" ,"action" => "signup_cleaner" ,)
       
        
        
    // ),
    array("title"=>"Settings", "icon"=>" fa fa-edit" ,"action" => array("config") ,
        "additionals"=>array(
          array("link" => "config/update", "title" => "General", "icon" => " fa fa-edit"),
          array("link" => "emails/update", "title" => "Email System", "icon" => " fa fa-edit"),
          array("link" => "cleaner_invoice/update", "title" => "Invoice Text", "icon" => " fa fa-edit"),


      ),

    ),

   

    array("title" => "Subscribers", "icon" => " fa fa-bookmark", "action" => array("subscribe"),"link"=>"subscribe",
    //     "additionals" => array(
    //         array("link" => "subscribe", "title" => "Subscribers", "icon" => " fa fa-user-plus"),
    // //         //array("link"=>"newsletter","title"=>"View Newsletters", "icon"=>"envelope"),
    //     ),
    ),
    array("title" => "Administrator", "icon" => "clip-users-3", "action" => "admins",
        "additionals" => array(
            array("link" => "admins", "title" => "Admin", "icon" => " fa fa-user"),
        ),
    ),



);
?>

<div class="navbar-content">
    <!-- start: SIDEBAR -->
    <div class="main-navigation navbar-collapse collapse">
        <!-- start: MAIN MENU TOGGLER BUTTON -->
        <div class="navigation-toggler">
            <i class="clip-chevron-left"></i>
            <i class="clip-chevron-right"></i>
        </div>
        <!-- end: MAIN MENU TOGGLER BUTTON -->
        <!-- start: MAIN NAVIGATION MENU -->
        <ul class="main-navigation-menu dnono">
            <?
            foreach ($menu_links as $key=> $menu) {
                if (has_value($config['ci_class'], $menu['action']) || has_value($config['ci_index_page'], $menu['action'])) {
                    $active = "active";
                    $open = "open";
            //$selected = '<span class="selected"></span>';
                } else {
                    $open = "";
                    $active = "";
            //$selected = "";
                }
                ?>
                <?php
                if($key==0){?>
                    <li class="">
                        <a href="<?php echo $config['base_url']?>" target="_blank"><i class="<?= $menu['icon'] ?>"></i>
                            <span class="title"> <?= $menu['title'] ?> </span><?php if(array_filled($menu['additionals'])){?> <i class="icon-arrow"></i> <?php }?>
                            <span class="selected"></span>
                        </a>
                        <?php
                        if(array_filled($menu['additionals'])){
                            ?>
                            <ul class="sub-menu">
                                <?php
                                foreach ($menu['additionals'] as $add) {
                                    if(has_value($config['ci_class'], $add['link']) || ($config['ci_class']=='logo' && $add['link']=='logo/add/1') || ($config['ci_class']=='config' && $add['link']=='config/update')){
                                        $active1 = "active";
                                        $open1 = "open";
                                    }
                                    else{
                                        $active1 = "";
                                        $open1 = "";
                                    }
                                    ?>
                                    <li class="<?php echo $active1; ?> <?php echo $open1; ?>">
                                        <a href="<?php echo $config['base_url'] . "admin/" . $add['link']; ?>">
                                            <span class="title"> <?php echo $add['title']; ?> </span>
                                            <!--<span class="badge badge-new">new</span>-->
                                        </a>
                                    </li>
                                <?php }
                                ?>
                            </ul>
                        <?php }
                        ?>
                    </li>
                <?php }
                else{?>
                    <li class="<?php echo $active; ?> <?php echo $open; ?>">
                        <a href="<?php echo (array_filled($menu['additionals'])) ? 'javascript:void' : $config['base_url'] . "admin/" . $menu['link']?>"><i class="<?= $menu['icon'] ?>"></i>
                            <span class="title"> <?= $menu['title'] ?> </span><?php if(array_filled($menu['additionals'])){?> <i class="icon-arrow"></i> <?php }?>
                            <span class="selected"></span>
                        </a>
                        <?php
                        if(array_filled($menu['additionals'])){
                            ?>
                            <ul class="sub-menu">
                                <?php
                                foreach ($menu['additionals'] as $add) {
                                    if(has_value($config['ci_class'], $add['link']) || ($config['ci_class']=='logo' && $add['link']=='logo/add/1') || ($config['ci_class']=='config' && $add['link']=='config/update')){
                                        $active1 = "active";
                                        $open1 = "open";
                                    }
                                    else{
                                        $active1 = "";
                                        $open1 = "";
                                    }
                                    ?>
                                    <li class="<?php echo $active1; ?> <?php echo $open1; ?>">
                                        <a href="<?php echo $config['base_url'] . "admin/" . $add['link']; ?>">
                                            <span class="title"> <?php echo $add['title']; ?> </span>
                                            <!--<span class="badge badge-new">new</span>-->
                                        </a>
                                    </li>
                                <?php }
                                ?>
                            </ul>
                        <?php }
                        ?>
                    </li>
                <?php }
                ?>
            <?php }
            ?>


        </ul>
        <!-- end: MAIN NAVIGATION MENU -->
    </div>
    <!-- end: SIDEBAR -->
</div>

<script>
    var $windowWidth;
    var $windowHeight;
    var $pageArea;
    var isMobile = false;
    $(function(){
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            isMobile = true;
        }
        runElementsPosition();
        runNavigationToggler();
    });
    $('.main-navigation-menu li.active').addClass('open');
    $('.main-navigation-menu > li a').on('click', function() {
        if($(this).parent().children('ul').hasClass('sub-menu') && ((!$('body').hasClass('navigation-small') || $windowWidth < 767) || !$(this).parent().parent().hasClass('main-navigation-menu'))) {
            if(!$(this).parent().hasClass('open')) {
                $(this).parent().addClass('open');
                $(this).parent().parent().children('li.open').not($(this).parent()).not($('.main-navigation-menu > li.active')).removeClass('open').children('ul').slideUp(200);
                $(this).parent().children('ul').slideDown(200, function() {
                    runContainerHeight();
                });
            } else {
                if(!$(this).parent().hasClass('active')) {
                    $(this).parent().parent().children('li.open').not($('.main-navigation-menu > li.active')).removeClass('open').children('ul').slideUp(200, function() {
                        runContainerHeight();
                    });
                } else {
                    $(this).parent().parent().children('li.open').removeClass('open').children('ul').slideUp(200, function() {
                        runContainerHeight();
                    });
                }
            }
        }
    });

    //function to adapt the Main Content height to the Main Navigation height
    var runContainerHeight = function() {
        mainContainer = $('.main-content > .container');
        mainNavigation = $('.main-navigation');
        if($pageArea < 760) {
            $pageArea = 760;
        }
        if(mainContainer.outerHeight() < mainNavigation.outerHeight() && mainNavigation.outerHeight() > $pageArea) {
            mainContainer.css('min-height', mainNavigation.outerHeight());
        } else {
            mainContainer.css('min-height', $pageArea);
        }
        if($windowWidth < 768) {
            mainNavigation.css('min-height', $windowHeight - $('body > .navbar').outerHeight());
        }
        //$("#page-sidebar .sidebar-wrapper").css('height', $windowHeight - $('body > .navbar').outerHeight()).scrollTop(0).perfectScrollbar('update');
    };

    //function to adjust the template elements based on the window size
    var runElementsPosition = function() {
        $windowWidth = $(window).width();
        $windowHeight = $(window).height();
        $pageArea = $windowHeight - $('body > .navbar').outerHeight() - $('body > .footer').outerHeight();
        if(!isMobile) {
            $('.sidebar-search input').removeAttr('style').removeClass('open');
        }
        runContainerHeight();

    };

    //function to reduce the size of the Main Menu
    var runNavigationToggler = function() {
        $('.navigation-toggler').on('click', function() {
            if(!$('body').hasClass('navigation-small')) {
                $('body').addClass('navigation-small');
            } else {
                $('body').removeClass('navigation-small');
            };
        });
    };

</script>