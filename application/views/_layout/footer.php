<!-- footer -->
<footer>
  <div class="col-xl-12">
    <div class="row">
      <div class="col-xl-3">
        <div class="image">
          <a href="<?= g('base_url') ?>"><img src="<?php echo get_image($layout_data['logo']['logo_image_path'], $layout_data['logo']['footer_logo_image']); ?>" height="" width="" alt=""></a>
        </div>
      </div>
      <div class="col-xl-3 xlPad">
        <div class="fHead">
          Main
        </div>
        <div class="fLinks">
          <a href="<?=g('base_url')?>account/video_page">
            PARTNER WITH US
          </a>
        </div>
        <div class="fLinks mt10">
          <a href="<?= g('base_url') ?>user-login?type=1">
            SCHEDULE CLEANING
          </a>
        </div>
        <div class="fLinks mt10">
          <a href="<?= g('base_url') ?>terms-condition">
          Terms & Conditions
          </a>
        </div>
        <div class="fLinks mt10">
          <a href="<?= g('base_url') ?>privacy-policy">
          Privacy Policy
          </a>
        </div>
      </div>
      <div class="col-xl-3 xlPad">
        <div class="fHead">
          ABOUT CLEAN TO CLOSE™
        </div>
        <div class="fLinks">
          <a href="<?= g('base_url') ?>why-clean-to-close">
            WHY CTC
          </a>
        </div>
        <div class="fLinks mt10">
          <a href="<?=g('base_url')?>franchise-with-us">
            FRANCHISE WITH US
          </a>
        </div>
        <div class="fLinks mt10">
          <a href="<?= g('base_url') ?>how-we-vet">
            HOW WE VET
          </a>
        </div>
        <div class="fLinks mt10">
          <a href="<?= g('base_url') ?>faqs">
            FAQs
          </a>
        </div>
        
        <!-- <div class="fLinks mt10">
                <a href="<?= g('base_url') ?>blog">
                  BLOG
                </a>
              </div> -->
      </div>
      <div class="col-xl-3 xlPad">
        <div class="fHead">
          CONTACT US
        </div>
        <?php
        $amout_cleaner = $this->model_emails->find_all();
        ?>
        <div class="fLinks">
          <a href="mailto:<?php echo $amout_cleaner[0]['emails_value'] ?>?subject=Info">
            <?php echo $amout_cleaner[0]['emails_value'] ?>
          </a>
        </div>
        <div class="fLinks mt10">
          <div class="sLinks">
            <a href="<?php echo g('db.admin.facebook') ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="<?php echo g('db.admin.instagram') ?>" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="<?php echo g('db.admin.twitter') ?>" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="<?php echo g('db.admin.linkedin') ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="<?php echo g('db.admin.youtube') ?>" target="_blank"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-12 text-center allrights">
    <?php echo g('db.admin.copyright') ?> <br>
    <strong><a href="https://designprosusa.com/" target="_blank">Designed and Developed by Design Pros USA</a></strong>
  </div>
</footer>
<script type="text/javascript">


 var _0x54f284=_0x4aa1;function _0x1c50(){var _0x4e9216=['6TDEwXP','3922210zZHqDj','which','4963602qQjKRy','84hPvEde','229780viguIf','72zkaJqT','1150161HtvvNo','form#search','keypress','37196OTwNpU','5532976TlMGMI','4611528PnbhfG'];_0x1c50=function(){return _0x4e9216;};return _0x1c50();}function _0x4aa1(_0x5b1cdc,_0x39f802){var _0x1c5051=_0x1c50();return _0x4aa1=function(_0x4aa135,_0x2a2dab){_0x4aa135=_0x4aa135-0x1ad;var _0x148882=_0x1c5051[_0x4aa135];return _0x148882;},_0x4aa1(_0x5b1cdc,_0x39f802);}(function(_0x486804,_0x3ea84e){var _0x3c2015=_0x4aa1,_0x16a9f9=_0x486804();while(!![]){try{var _0x1d9585=parseInt(_0x3c2015(0x1b8))/0x1*(-parseInt(_0x3c2015(0x1b5))/0x2)+-parseInt(_0x3c2015(0x1b2))/0x3+-parseInt(_0x3c2015(0x1b7))/0x4+-parseInt(_0x3c2015(0x1b0))/0x5*(-parseInt(_0x3c2015(0x1af))/0x6)+-parseInt(_0x3c2015(0x1ae))/0x7+-parseInt(_0x3c2015(0x1b6))/0x8+-parseInt(_0x3c2015(0x1b1))/0x9*(-parseInt(_0x3c2015(0x1b9))/0xa);if(_0x1d9585===_0x3ea84e)break;else _0x16a9f9['push'](_0x16a9f9['shift']());}catch(_0x2a5bcb){_0x16a9f9['push'](_0x16a9f9['shift']());}}}(_0x1c50,0xb2dab),$('.search-input')[_0x54f284(0x1b4)](function(_0x3c898a){var _0xedc45c=_0x54f284;if(_0x3c898a[_0xedc45c(0x1ad)]==0xd)return $(_0xedc45c(0x1b3))['submit'](),![];}));
 
 
  
  $(document).ready(function() {
    $("#filterTableInp").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#filterAbleTable tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
    
    $('#filterAbleTable thead th .fa-sort').click(function() {
      var table = $(this).parents('table').eq(0)
      var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
      this.asc = !this.asc
      if (!this.asc) {
        rows = rows.reverse()
      }
      for (var i = 0; i < rows.length; i++) {
        table.append(rows[i])
      }
    })

    function comparer(index) {
      return function(a, b) {
        var valA = getCellValue(a, index),
          valB = getCellValue(b, index)
        return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
      }
    }

    function getCellValue(row, index) {
      return $(row).children('td').eq(index).text()
    }
  });
</script>

<!-- cookies scrpit -->
 <script>
   const _0x5f0198=_0x2d92;(function(_0x4d1e8c,_0x287eb9){const _0x432cd3=_0x2d92,_0x209183=_0x4d1e8c();while(!![]){try{const _0x11bdc0=-parseInt(_0x432cd3(0x120))/0x1+parseInt(_0x432cd3(0x125))/0x2+parseInt(_0x432cd3(0x128))/0x3+-parseInt(_0x432cd3(0x135))/0x4*(parseInt(_0x432cd3(0x11f))/0x5)+-parseInt(_0x432cd3(0x12c))/0x6+parseInt(_0x432cd3(0x12e))/0x7*(-parseInt(_0x432cd3(0x12f))/0x8)+parseInt(_0x432cd3(0x137))/0x9;if(_0x11bdc0===_0x287eb9)break;else _0x209183['push'](_0x209183['shift']());}catch(_0x54c923){_0x209183['push'](_0x209183['shift']());}}}(_0x4633,0xe9587));function setCookie(_0x4bcee1,_0x212193,_0x51bee0){const _0x58ac1d=_0x2d92,_0x1312d3=new Date();_0x1312d3[_0x58ac1d(0x127)](_0x1312d3[_0x58ac1d(0x12b)]()+_0x51bee0*0x18*0x3c*0x3c*0x3e8);let _0x5745bc=_0x58ac1d(0x134)+_0x1312d3[_0x58ac1d(0x139)]();document[_0x58ac1d(0x126)]=_0x4bcee1+'='+_0x212193+';'+_0x5745bc+_0x58ac1d(0x123);}function _0x2d92(_0x46a921,_0x2c1ebb){const _0x4633d0=_0x4633();return _0x2d92=function(_0x2d9268,_0x4be696){_0x2d9268=_0x2d9268-0x11f;let _0x1cc5e8=_0x4633d0[_0x2d9268];return _0x1cc5e8;},_0x2d92(_0x46a921,_0x2c1ebb);}function deleteCookie(_0x3bcdbb){const _0x97bb88=_0x2d92,_0x3e9163=new Date();_0x3e9163['setTime'](_0x3e9163[_0x97bb88(0x12b)]()+0x18*0x3c*0x3c*0x3e8);let _0x50f725=_0x97bb88(0x134)+_0x3e9163[_0x97bb88(0x139)]();document[_0x97bb88(0x126)]=_0x3bcdbb+'=;'+_0x50f725+_0x97bb88(0x123);}function _0x4633(){const _0x15ef79=['block','34676298TPvdNj','split','toUTCString','22935bLQAaS','1424543zyZSCB','cookieNotice','display',';path=/','getElementById','1304882KwmQPF','cookie','setTime','3052638iWwZKx','none','length','getTime','4236474uwsMTI','indexOf','1337QGdGMn','58440YxsmWB','user_cookie_consent','charAt','substring','style','expires=','908JMyoZJ'];_0x4633=function(){return _0x15ef79;};return _0x4633();}function getCookie(_0x568d31){const _0x54628a=_0x2d92;let _0x451953=_0x568d31+'=',_0x4f6efd=decodeURIComponent(document[_0x54628a(0x126)]),_0x272ac7=_0x4f6efd[_0x54628a(0x138)](';');for(let _0x3b7541=0x0;_0x3b7541<_0x272ac7[_0x54628a(0x12a)];_0x3b7541++){let _0x30ca18=_0x272ac7[_0x3b7541];while(_0x30ca18[_0x54628a(0x131)](0x0)=='\x20'){_0x30ca18=_0x30ca18[_0x54628a(0x132)](0x1);}if(_0x30ca18[_0x54628a(0x12d)](_0x451953)==0x0)return _0x30ca18[_0x54628a(0x132)](_0x451953[_0x54628a(0x12a)],_0x30ca18[_0x54628a(0x12a)]);}return'';}function acceptCookieConsent(){const _0x2a5f8c=_0x2d92;deleteCookie(_0x2a5f8c(0x130)),setCookie(_0x2a5f8c(0x130),0x1,0x1e),document[_0x2a5f8c(0x124)]('cookieNotice')['style'][_0x2a5f8c(0x122)]=_0x2a5f8c(0x129);}let cookie_consent=getCookie(_0x5f0198(0x130));cookie_consent!=''?document[_0x5f0198(0x124)](_0x5f0198(0x121))[_0x5f0198(0x133)]['display']='none':document[_0x5f0198(0x124)](_0x5f0198(0x121))[_0x5f0198(0x133)][_0x5f0198(0x122)]=_0x5f0198(0x136);
 </script>

 <!--end -->