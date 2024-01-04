
<div class="container-fluid">
 <!-- navbar -->

 <div class="Main">
  <div class="blogMain text-center">
    <div class="col-lg-12">
      <h3 class="weOnlyHire mt100 wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.5s">BLOG</h3>
    </div>
    <div class="blogGrid text-left">
      <?php foreach($blogs as $key => $value){?>
        <div class="blogGitem wow zoomIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <a href="<?php echo g('base_url')?>blog/<?php echo $value['blog_slug']?>">
            <div class="img">
              <img src="<?php echo get_image($value['blog_image_path'], $value['blog_image'])?>" height="" width="" alt="">
            </div>
            <div class="hed1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
              <?php echo $value['blog_title']?>
            </div>
            <div class="desc wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
              <?php echo html_entity_decode($value['blog_detail'])?>
              <!--  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh  -->
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
