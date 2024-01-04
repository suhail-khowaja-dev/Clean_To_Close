<style>
    li p {
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>
<?php
        $data = '2';
        $encrypt_1 = (($data*123456789*5678)/956783);
        $link = "lets-get-to-know?type=" . urlencode(base64_encode($encrypt_1));
        ?>
<div class="container-fluid">

    <div class="Main">
        <div class="faqMain ">
            <div class="faqMain">
                <div class="col-lg-12 text-center">
                    <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">What You Need To Know</h3>
                </div>
               <div class="container videoCon mb2 mt30">
                <iframe width="100%" height="400" src="<?php echo $content['cms_page_video_url']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
                <div class="container">
                   <?php echo html_entity_decode($content['cms_page_content']) ?>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a href="<?= g('base_url') ?><?php echo $link ?>">
                    <button class="csBtn mb5 mt20" type="button">APPLY AS A CLEANER </button>
                </a>
            </div>

        </div>
    </div>
</div>