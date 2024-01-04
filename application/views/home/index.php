

<style>
  .mygridImage img {
    border-radius: 50%;
    object-fit: cover;
  }

  .homeMain .card {
    height: 280px;
  }

  .revCardImageBoxSizing {
    height: 156px;
    width: 150px;
  }

  .revCardImageBoxSizing img {
    border-radius: 50%;
    object-fit: cover;
    width: 100% !important;
    height: 100%;
  }

  .cardBTNNow {
    font-family: gilroybold;
    color: #000;
    background-color: #b3c3c0;
    width: 110px;
    border-radius: 5px;
    border: none;
    outline: none;
    color: #fff;
    font-size: 12px;
    padding: 8px;
    margin-left: auto;
    margin-right: auto;
    margin-top: auto;
    margin-bottom: 1rem;
  }
  
  @media only screen and (max-width: 600px) {
      .revCardImageBoxSizing img {
          margin-left: 0 !important;
      }
  }

  .revCaro .owl-carousel .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav {
    display: block !important;
    position: absolute;
    width: 100%;
    top: 45%;
  }
  .revCaro .owl-carousel .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav button.owl-prev {
    position: absolute;
    left: 0;
    font-size: 65px;
    height: 50px;
  }
  .revCaro .owl-carousel .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav button.owl-next {
    position: absolute;
    right: 0;
    font-size: 65px;
    height: 50px;
  }
  .revCaro .owl-carousel  .owl-nav [class*=owl-]:hover {
    background-color: unset;
    color: #000;
  }
  /*  .desc::before {*/
  /*  content: '"';*/
  /*  position: absolute;*/
  /*  top: -5px;*/
  /*  left: 26px;*/
  /*}*/
  /*.desc::after {*/
  /*  content: '"';*/
  /*  position: absolute;*/
  /*  right: 28px;*/
  /*  top: -5px;*/
  /*}*/
</style>
<?php
        $data = '1';
        $encrypt_1 = (($data*123456789*5678)/956783);
        $link = "user/signup?type=" . urlencode(base64_encode($encrypt_1));
        ?>
<!-- homeMain -->

 <div class="Main">
   <div class="homeMain text-center">
     <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">New favorite saying...</h1>
     <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">"Your home is now Clean To Close<sup>TM</sup>"</h2>
     <div class="twoMaincards">
       <div class="card1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.25s">
         <div class="image">
           <img src="<?= g('images_root') ?>homeicon.svg" height="" width="" alt="">
         </div>
         <div class="txt1">
           Real Estate Pro
         </div>
         <div class="txt2">
           Schedule A Service
         </div>
         <?php if ($this->user_type == '1' || $this->user_type == '2') { ?>
           <button type="hidden" style="display: none;">HIRE CLEANER</button>
         <?php } else { ?>
           <a href="<?= g('base_url') ?><?php echo  $link ?>">
             <button type="button" class="hidden">HIRE CLEANER</button>
           </a>
         <?php
          }
          ?>
       </div>
       <div class="card2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.25s">
         <div class="image">
           <img src="<?= g('images_root') ?>cleanicon.svg" height="" width="" alt="">
         </div>
         <div class="txt1">
           Cleaner
         </div>
         <div class="txt2">
           Work On A Task
         </div>
         <?php if ($this->user_type == '1' || $this->user_type == '2') { ?>
           <button type="hidden" style="display: none;">APPLY AS A CLEANER</button>
         <?php } else { ?>
           <a href="<?= g('base_url') ?>account/video_page">
             <button type="button">APPLY AS A CLEANER</button>
           </a>
           </a>
         <?php
          }
          ?>
       </div>
     </div>
     <!-- We only hire section -->
     <div class="col-lg-12">
       <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">We only hire the best vetted and insured <br />cleaning professionals</h3>
     </div>
     <div class="col-lg-12">
       <div class="grid mt90">
         <div class="griditem wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
           <div class="gridImg mygridImage">
             <img src="<?php echo get_image($content1['cms_page_image_path'], $content1['cms_page_image']) ?>" alt="" height="" width="">
           </div>
           <div class="gridtxt">
             <label>
               <?php echo $content1['cms_page_title'] ?>
             </label>
           </div>
         </div>
         <div class="griditem wow zoomIn" data-wow-duration="1s" data-wow-delay="0.75s">
           <div class="gridImg mygridImage">
             <img src="<?php echo get_image($content2['cms_page_image_path'], $content2['cms_page_image']) ?>" alt="" height="" width="">
           </div>
           <div class="gridtxt">
             <label>
               <?php echo $content2['cms_page_title'] ?>
             </label>
           </div>
         </div>
         <div class="griditem wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
           <div class="gridImg mygridImage">
             <img src="<?php echo get_image($content3['cms_page_image_path'], $content3['cms_page_image']) ?>" alt="" height="" width="">
           </div>
           <div class="gridtxt">
             <label>
               <?php echo $content3['cms_page_title'] ?>
             </label>
           </div>
         </div>
         <div class="griditem wow zoomIn" data-wow-duration="1s" data-wow-delay="1.25s">
           <div class="gridImg mygridImage">
             <img src="<?php echo get_image($content4['cms_page_image_path'], $content4['cms_page_image']) ?>" alt="" height="" width="">
           </div>
           <div class="gridtxt">
             <label>
               <?php echo $content4['cms_page_title'] ?>
             </label>
           </div>
         </div>
       </div>
     </div>
     <div class="col-lg-12">
       <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo $content5['cms_page_title'] ?></h3>
     </div>
  
     <div class="col-lg-12 revCaro">
      <div class="owl-carousel owl-theme wow zoomIn" data-wow-duration="2.5s" data-wow-delay="0.5s">
        <?php foreach ($testimonial as $key => $value) { ?>
          <div class="item">
            <div class="card">
              <div class="img">
                <div class="revCardImageBoxSizing">
                  <img src="<?php echo get_image($value['testimonial_image_path'], $value['testimonial_image']) ?>" height="" width="" alt="">
                </div>
                <label><?php echo $value['testimonial_name'] ?></label>
              </div>
              <div class="desc">

                <?php echo html_entity_decode(substr($value['testimonial_description'], 0, 50)) ?> ...
              </div>
              <div class="quote1">
                <img src="<?= g('images_root') ?>quots-8.png" height="" width="" alt="">
              </div>
              <div class="quote2">
                <img src="<?= g('images_root') ?>quots-8.png" height="" width="" alt="">
              </div>

                <button class="cardBTNNow">
                  <a href="<?php echo g('base_url')?>testimonial/detail/<?php echo $value['testimonial_slug']?>">
                  Read More
                  </a>
                </button>
                
              
            </div>
          </div>
        <? } ?>
      
      </div>
    </div>



     <!-- how it works -->
     <div class="col-lg-12">
       <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">How It Works</h3>
     </div>
     <!-- it work sec -->
     <div class="itWork">
       <div class="col-lg-12">
         <div class="row">
           <div class="col-lg-4 col-md-4 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.25s">
             <div class="img">
               <img src="<?php echo get_image($content6['cms_page_image_path'], $content6['cms_page_image']) ?>" height="" width="" alt="">
             </div>
             <div class="itWorTxt">
               <h3>
                 <?php echo $content6['cms_page_title'] ?>
               </h3>
             </div>
           </div>
           <div class="col-lg-4 col-md-4 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
             <div class="img">
               <img src="<?php echo get_image($content7['cms_page_image_path'], $content7['cms_page_image']) ?>" height="" width="" alt="">
             </div>
             <div class="itWorTxt">
               <h3>
                 <?php echo $content7['cms_page_title'] ?>
               </h3>
               
             </div>
           </div>
           <div class="col-lg-4 col-md-4 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.75s">
             <div class="img">
               <img src="<?php echo get_image($content8['cms_page_image_path'], $content8['cms_page_image']) ?>" height="" width="" alt="">
             </div>
             <div class="itWorTxt">
               <h3>
                 <?php echo $content8['cms_page_title'] ?>
               </h3>
              
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- like Waht you See -->
     <div class="likeSec">
       <div class="col-lg-12">
         <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Like What You See?<br />
           Partner With Us in 3 Easy Steps</h3>
       </div>
       <div class="twoMaincards">
        
         <div class="card1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.25s">
           <div class="image">
             <img src="<?= g('images_root') ?>homeicon.svg" height="" width="" alt="">
           </div>
           <div class="txt1">
             Real Estate Pro
           </div>
           <div class="txt2">
             Schedule A Service
           </div>
           <?php if ($this->user_type == '1' || $this->user_type == '2') { ?>
             <button type="hidden" style="display: none;">HIRE CLEANER</button>
           <?php } else { ?>
             <a href="<?= g('base_url') ?><?php echo  $link ?>">
               <button type="button" class="hidden">HIRE CLEANER</button>
             </a>
           <?php
            }
            ?>
         </div>
         <div class="card2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.25s">
           <div class="image">
             <img src="<?= g('images_root') ?>cleanicon.svg" height="" width="" alt="">
           </div>
           <div class="txt1">
             Cleaner
           </div>
           <div class="txt2">
             Work On A Task
           </div>
           <?php if ($this->user_type == '1' || $this->user_type == '2') { ?>
             <button type="hidden" style="display: none;">APPLY AS A CLEANER</button>
           <?php } else { ?>
             <a href="<?= g('base_url') ?>account/video_page">
               <button type="button">APPLY AS A CLEANER</button>
             </a>
             </a>
           <?php
            }
            ?>
         </div>
       </div>
     </div>
     <!-- question -->
     <div class="col-lg-12">
       <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">"Subscribe To Our Newsletter"</h3>
     </div>
     <div class="col-lg-4 offset-lg-4">
       <form action="<?php echo g('base_url'); ?>subscribe/store" method="post" id="form-subscribe">
         <div class="inpWBtn wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
           <input type="text" placeholder="Enter Email Address" name="subscribe[subscribe_email]">
           <button type="submit" class="greenBtn">
             Send
           </button>
         </div>
       </form>
     </div>
   </div>
 </div>

