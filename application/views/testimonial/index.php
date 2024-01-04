
<style>
    .myNewCArdBoxs {
        border-radius: 10px;
        padding: 18px;
        box-shadow: 0px 0px 13px -6px black;
        margin-left: auto;
        margin-right: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        width: 30%;
    } 
    .myNewCArdBoxsimg {
        width: 110px;
        height: 110px;
        /* margin-top: px; */
    }
    .myNewCArdBoxs img {
        float: left;
        margin-right: 1rem !important;
        margin-bottom: 0rem;
        height: 100% !important; 
        width: 100% !important;
        border-radius: 50%;
        object-fit: cover;
    }
    .testimonH h3 {
        font-size: 28px;
        color: gray;
        text-align: center;
        font-family: gilroybold;
        margin-bottom: 2rem;
    }
    /* .sspan */
    /* p {*/
    /*    line-break: anywhere;*/
    /*}*/
    
      @media only screen and (max-width:1024px) {
        .myNewCArdBoxs {
            width: 95%;
        }
        .myNewCArdBoxsimg img {
            display: block !important;
        }
    }


</style>


<div class="Main">
  <div class="blogViewMain text-center">
    

    <div class="col-lg-12 forMt text-left">
    <div class="testimonH">
        <h3>
            Testimonial
        </h3>
    </div>
      <div class="row">
        <div class="col-lg-12 blogViewP" style="padding: 0 2rem;margin-bottom: 5rem;">
            <div class="myNewCArdBoxs">
                <!-- <p> -->
                    <div class="myNewCArdBoxsimg">
                        <img src="<?php echo get_image($testimonial_details['testimonial_image_path'], $testimonial_details['testimonial_image'])?>" height="" width="" alt="" class="deskImg wow zoomIn" data-wow-duration="2.5s" data-wow-delay="0.5s">
                    </div>
                    <div class="myNewCArdBoxsName">
                        <span class="mainH wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <?php echo $testimonial_details['testimonial_name'] ?>
                        </span>
                    </div>
               
                    <?php echo html_entity_decode($testimonial_details['testimonial_description'])?>
            </div>
        </div>

        
      </div>
    </div>

  </div>
</div>

<script>       
  function ajaxcommentform(form) {
    var data  = $('#'+form).serialize();
    var url = $('#'+form).attr('action');
    var res = AjaxRequest.formrequest(url, data) ;
    if(res.status === 1)
    {
      AdminToastr.success(res.txt,'Success'); 

      $('#'+form)[0].reset();

      if(res.reload === 1)
      {
                  // window.location  = res.url;
                  setTimeout(function() {
                    window.location.reload();
                  }, 2000)
                }
                return false;
              }
              else
              {
                AdminToastr.error(res.txt,'Error'); 

              }
              return false;
            }
          </script>