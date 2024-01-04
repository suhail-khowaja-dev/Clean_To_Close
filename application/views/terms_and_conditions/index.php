
<style>
    .myContitener p, ul {
        text-align: left;
    }
     .myContitener a {
        color: #000000 !important;
     }
      .myContitener a:hover {
          text-decoration:none;
          color:  #000000 !important;
          
      }
</style>

<div class="container-fluid">
    <!-- navbar -->   

    <div class="Main">
        <div class="faqMain text-center">
            <div class="col-lg-12">
                <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo html_entity_decode($terms_service['cms_page_title'])?></h3>
            </div>
         <div class="container myContitener">
            <?php echo html_entity_decode($terms_service['cms_page_content'])?>
         </div>
     </div>
 </div>
