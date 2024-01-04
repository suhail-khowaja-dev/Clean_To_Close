<style>
    .search_main {
        max-width: 100%;
        margin: 20px 0px;
        display: flex;
        justify-content: end;
    }

    .search_main form {
        width: 350px;
        max-width: 100%;
        background-color: #fff;
        box-shadow: 5x 5px 5px 5px #000 !important;
        padding: 0px 0px 0px 10px;
        display: flex;
        justify-content: space-between;
        border-radius: 30px;
        border: 2px solid #b3c3c0;
    }

    .search_main form button.upload {
        border-radius: 30px;
        position: relative;
        margin-right: -1px;
    }

    .search_main form input[type="search"] {
        width: 70%;
        background-color: transparent;
        border: none;
        outline: none;
        padding: 8px;
        color: #000;
    }
    .div_btn_upload {
        text-align: left;
    }
    button.upload.btn_upload {
        margin: 50px 0px 20px;
    }
</style>


<div class="container-fluid" style="background-color: #F2F2F2;">
    <!-- navbar -->

    <div class="Main">
        <div class="faqMain text-center">
            <div class="col-lg-12">
                <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">FAQs</h3>
            </div>

            <div class="container mb5 mt70">
                <div class="search_main">
                    <form action="<?= g('base_url'); ?>faqs/searchFaq" method="post">
                        <input type="search" name="search_input" placeholder="Search here...">
                        <button class="upload">Search</button>
                    </form>
                </div>
                <?php if ($manual == "manual") { ?>
                <?php foreach ($faqs as $key => $value) { ?>
                    <div class="collapseCard" >
                        <div class="demo collapsed" data-toggle="collapse" data-target="#demo<?php echo $key ?>">
                            <span><?php echo $value['faq_title'] ?></span>
                            <i class="fa fa-arrow-down"></i>
                        </div>
                        <div id="demo<?php echo $key ?>" class="collapsible collapse">
                            <?php echo html_entity_decode($value['faq_content']) ?>
                            <div class="img">
                                <img src="<?php echo get_image($value['faq_image_path'], $value['faq_image']) ?>" height="" width="" alt="">
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php } ?>
                <?php if ($search == "search") { ?>
                    <?php if ($search_faqs == null) { ?>
                        <div class="demo collapsed" data-toggle="collapse">
                                <span>No result found</span>
                            </div>
                        <?php } ?>
                    <?php foreach ($search_faqs as $key => $value) { ?>
                        <div class="collapseCard " >
                            <div class="demo collapsed" data-toggle="collapse" data-target="#demo<?php echo $key ?>">
                                <span><?php echo $value['faq_title'] ?></span>
                                <i class="fa fa-arrow-down"></i>
                            </div>
                            <div id="demo<?php echo $key ?>" class="collapsible collapse">
                                <?php echo html_entity_decode($value['faq_content']) ?>
                                <div class="img">
                                    <img src="<?php echo get_image($value['faq_image_path'], $value['faq_image']) ?>" height="" width="" alt="">
                                </div>
                            </div>
                        </div>
                        

                    <?php } ?>
                    <div class="div_btn_upload">
                            <button class="upload btn_upload"><a href="<?= g('base_url'); ?>faqs"  class="upload">Back</a></button>
                        </div>
                <?php } ?>


            </div>
        </div>
    </div>