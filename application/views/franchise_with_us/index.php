<style>
    .Main{
        height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    }
</style>
<?
// Banner heading
///$this->load->view('widgets/inner_banner');
// Banner section
?>

<!-- <section class="contentStyle">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h2 class="title text-center"><?php echo html_entity_decode($privacy_policy['cms_page_title'])?></h2>
                <?php echo html_entity_decode($privacy_policy['cms_page_content'])?>
            </div>
        </div>
    </div>
</section> -->

<div class="container-fluid">
    <!-- navbar -->   

    <div class="Main">
        <div class="faqMain text-center">
            <div class="col-lg-12">
                <h3 class="weOnlyHire mt100 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"><?php echo html_entity_decode($franchise_with_us['cms_page_title'])?></h3>
            </div>
            <!-- <div class="container mb5 mt70">

                    <div class="collapseCard wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div  class="demo collapsed" data-toggle="collapse" data-target="#demo">
                            <span><?php echo $franchise_with_us['cms_page_title']?></span>
                            <i class="fa fa-arrow-down"></i>
                        </div>
                        <div id="demo" class="collapsible collapse">
                         <?php echo html_entity_decode($value['faq_content'])?>
                     </div>
                 </div>

         </div> -->
         <div class="container">
             <?php echo html_entity_decode($franchise_with_us['cms_page_content'])?>
         </div>
     </div>
 </div>
</div>

