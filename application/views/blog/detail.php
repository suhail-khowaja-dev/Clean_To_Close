


<div class="Main">
  <div class="blogViewMain text-center">

    <div class="col-lg-12 forMt text-left">
      <div class="row">
        <div class="col-lg-12 blogViewP" style="padding: 0 2rem;margin-bottom: 5rem;">
          <p>
            <img src="<?php echo get_image($blog_details['blog_image_path'], $blog_details['blog_image'])?>" height="" width="" alt="" class="deskImg wow zoomIn" data-wow-duration="2.5s" data-wow-delay="0.5s">
            <span class="mainH wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <?php echo $blog_details['blog_title'] ?>
            </span>
            <br/>
            <span class="date wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              Date:-
              <?php echo date("F j, Y ",strtotime($blog_details['blog_date']))?>
            </span>
            <br/>
            <br/>
            <img src="assets/img/1x/blog.png" height="" width="" alt="" class="mblImg">
            <br/>
            <?php echo html_entity_decode($blog_details['blog_detail'])?>
            <!-- Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis <br/><br/>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.  <br/><br/>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis <br/><br/>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis <br/><br/>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis  <br/><br/>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis  -->
          </p>
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