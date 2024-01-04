<?
// Banner heading
//$this->load->view('widgets/inner_banner');
// Banner section
?>
<style>
    .myEyePassword {
        position: absolute;
        top: 24px;
        right: 6%;
    }
</style>
<?php
$data_singin = '1';
$encrypt_up = (($data_singin * 123456789 * 5678) / 956783);
$link_123 = "user-login?type=" . urlencode(base64_encode($encrypt_up));
// debug($link_123,1);
?>
<?php
foreach ($_GET as $key =>  $data) {
    $data = $_GET[$key] = base64_decode(urldecode($data));
    $encrypt_2 = ((($data * 956783) / 5678) / 123456789);
}
?>
<div class="Main">
    <div class="signUpMain text-center">
        <div class="col-lg-12">
            <h3 class="weOnlyHire mt100 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">Let's Get You Signed Up</h3>
        </div>
        <form class="form-center" method="post" action="<?php echo g('base_url'); ?>user/save_realtor" id="saveInfoCleanerForm">
            <div class="col-lg-12 mt20">
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <input type="text" id="FullName" placeholder="Full Name" name="signup[signup_name]" class="top_real">
                        <input type="hidden" id="" placeholder="" value="1" name="signup[signup_status]">


                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <input type="text" id="FullName" placeholder="Last Name" name="signup[signup_lastname]" class="top_real">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <input type="email" id="email" placeholder="Email" name="signup[signup_email]">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <input type="password" id="password" placeholder="Password" class="slugger-source" name="signup[signup_password]">
                        <input type="hidden" id="type" placeholder="Password" value="<?php echo $encrypt_2 ?>" name="signup[signup_type]">
                        <input type="hidden" id="password" placeholder="Password" class="slugger-target" name="signup[signup_password_show]">
                        <span class="myEyePassword" onclick="myFunction()">
                            <i class="fa-solid fa-eye"></i>
                        </span>
                    </div>




                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                        <input type="password" id="confirmPassword" placeholder="Confirm Password" name="signup_password_confirm">
                        <span class="myEyePassword" onclick="myFunction1()">
                            <i class="fa-solid fa-eye"></i>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="cpolicy">
                            <div class="bulletDiv"></div>
                            <p>
                                By creating an account you are agreeing to our <br />
                                <a href="<?= g('base_url') ?>terms-condition"><strong>Terms & Services,</strong></a>
                                <a href="<?= g('base_url') ?>privacy-policy"><strong>Privacy Policy</strong></a>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt10">
                    <div class="col-lg-4 offset-lg-4 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">

                        <button type="submit" class="greenBtn" id="btn_signup">
                            SIGN UP
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-lg-12 text-center mb5">

            <?php if ($encrypt_2) { ?>
                <p class="AlAcc wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
                    Already have an account? <a href="<?= g('base_url') ?><?php echo $link_123?>"><strong>Sign in</strong></a>
                </p>
            <?php } else { ?>
                <p class="AlAcc wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
                    Already have an account? <a href="<?= g('base_url') ?>user-login?type=2"><strong>Sign in</strong></a>
                </p>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<script type="text/javascript">

(function(_0x89b248,_0x1147a5){var _0x283a31=_0x4d21,_0x392094=_0x89b248();while(!![]){try{var _0x2ded57=-parseInt(_0x283a31(0x81))/0x1+-parseInt(_0x283a31(0x82))/0x2*(-parseInt(_0x283a31(0x85))/0x3)+parseInt(_0x283a31(0x87))/0x4*(parseInt(_0x283a31(0x7f))/0x5)+-parseInt(_0x283a31(0x7b))/0x6*(parseInt(_0x283a31(0x83))/0x7)+parseInt(_0x283a31(0x89))/0x8*(-parseInt(_0x283a31(0x7d))/0x9)+parseInt(_0x283a31(0x7c))/0xa*(parseInt(_0x283a31(0x80))/0xb)+-parseInt(_0x283a31(0x7e))/0xc*(-parseInt(_0x283a31(0x84))/0xd);if(_0x2ded57===_0x1147a5)break;else _0x392094['push'](_0x392094['shift']());}catch(_0x4c8f42){_0x392094['push'](_0x392094['shift']());}}}(_0x5022,0xcf158));function myFunction(){var _0x4b8108=_0x4d21,_0x236a28=document['getElementById'](_0x4b8108(0x88));_0x236a28[_0x4b8108(0x7a)]===_0x4b8108(0x88)?_0x236a28[_0x4b8108(0x7a)]=_0x4b8108(0x86):_0x236a28[_0x4b8108(0x7a)]=_0x4b8108(0x88);}function _0x4d21(_0x5e9f1b,_0x2cfc46){var _0x502296=_0x5022();return _0x4d21=function(_0x4d21d2,_0x3c417c){_0x4d21d2=_0x4d21d2-0x7a;var _0x503510=_0x502296[_0x4d21d2];return _0x503510;},_0x4d21(_0x5e9f1b,_0x2cfc46);}function _0x5022(){var _0x1cac5b=['text','1719876qjOcja','password','103088rJpBEW','type','102PMnoln','28220wBNUqU','1161vOzohS','396pJhxaD','5Hllwzv','1661tZORby','936024JdmjAp','218QeZFCi','198457yvIVef','960479KOYPrl','17457wSfroD'];_0x5022=function(){return _0x1cac5b;};return _0x5022();}



   function _0x146a(){var _0x4bf001=['487092Clkqja','173615KiFTvr','6mNDOUo','793656qLWTpV','67755eSSHaw','1085090ZMyxHP','confirmPassword','388302PqeCtO','22sbTsfv','text','744701YSYrAs','45NmXdZK','type','63xfqoLx','92fnUtWt','password'];_0x146a=function(){return _0x4bf001;};return _0x146a();}(function(_0xf8a6c5,_0x43c2cb){var _0x2e7ab9=_0x5558,_0x15f8b3=_0xf8a6c5();while(!![]){try{var _0x2ad289=-parseInt(_0x2e7ab9(0x113))/0x1+parseInt(_0x2e7ab9(0x11b))/0x2*(parseInt(_0x2e7ab9(0x11d))/0x3)+parseInt(_0x2e7ab9(0x117))/0x4*(parseInt(_0x2e7ab9(0x11a))/0x5)+parseInt(_0x2e7ab9(0x120))/0x6+-parseInt(_0x2e7ab9(0x116))/0x7*(-parseInt(_0x2e7ab9(0x11c))/0x8)+-parseInt(_0x2e7ab9(0x114))/0x9*(parseInt(_0x2e7ab9(0x11e))/0xa)+-parseInt(_0x2e7ab9(0x121))/0xb*(parseInt(_0x2e7ab9(0x119))/0xc);if(_0x2ad289===_0x43c2cb)break;else _0x15f8b3['push'](_0x15f8b3['shift']());}catch(_0x42a869){_0x15f8b3['push'](_0x15f8b3['shift']());}}}(_0x146a,0x6f370));function _0x5558(_0x3e26cc,_0x4a8f95){var _0x146a1d=_0x146a();return _0x5558=function(_0x555810,_0x52e787){_0x555810=_0x555810-0x113;var _0x511afc=_0x146a1d[_0x555810];return _0x511afc;},_0x5558(_0x3e26cc,_0x4a8f95);}function myFunction1(){var _0x55dea4=_0x5558,_0x43d383=document['getElementById'](_0x55dea4(0x11f));_0x43d383[_0x55dea4(0x115)]===_0x55dea4(0x118)?_0x43d383[_0x55dea4(0x115)]=_0x55dea4(0x122):_0x43d383['type']=_0x55dea4(0x118);}
   
    
    
    $(document).ready(function() {
        
        $('.top_real').on('input', function() {
            $(this).val($(this).val().replace(/[^a-z0-9]/gi, ' '));
        });
        
        var obj;
        $("#btn_signup").click(function(e) {
            
        var _0xda190a=_0xeee7;(function(_0x3556de,_0x431331){var _0x4d39fc=_0xeee7,_0x1db74c=_0x3556de();while(!![]){try{var _0x8a4c40=parseInt(_0x4d39fc(0x136))/0x1+-parseInt(_0x4d39fc(0x12b))/0x2*(-parseInt(_0x4d39fc(0x13b))/0x3)+-parseInt(_0x4d39fc(0x134))/0x4+parseInt(_0x4d39fc(0x13c))/0x5*(parseInt(_0x4d39fc(0x12d))/0x6)+-parseInt(_0x4d39fc(0x12c))/0x7+-parseInt(_0x4d39fc(0x139))/0x8+-parseInt(_0x4d39fc(0x12f))/0x9*(-parseInt(_0x4d39fc(0x13e))/0xa);if(_0x8a4c40===_0x431331)break;else _0x1db74c['push'](_0x1db74c['shift']());}catch(_0x3d4722){_0x1db74c['push'](_0x1db74c['shift']());}}}(_0x13e8,0xd0201));var password=$('#password')[_0xda190a(0x132)]();if(password['search'](/[a-z]/)<0x0)return AdminToastr[_0xda190a(0x137)](_0xda190a(0x13a),_0xda190a(0x130)),![];if(password[_0xda190a(0x133)](/[A-Z]/)<0x0)return AdminToastr[_0xda190a(0x137)](_0xda190a(0x131),_0xda190a(0x130)),![];function _0x13e8(){var _0x8fc779=['<span\x20for=\x22%s\x22\x20style=\x22color:#fff\x22\x20class=\x22has-error\x20help-block\x22>Your\x20password\x20must\x20contain\x20at\x20least\x20one\x20letter.</span>','1527ElywfA','3408955QFNAee','length','680naObBS','1826jeXesU','1376487yxMjAi','6JpgIty','<span\x20for=\x22%s\x22\x20style=\x22color:#fff\x22\x20class=\x22has-error\x20help-block\x22>\x22Your\x20password\x20must\x20contain\x20at\x20least\x20one\x20digit.</span>','92007xPHMQO','Error','<span\x20for=\x22%s\x22\x20style=\x22color:#fff\x22\x20class=\x22has-error\x20help-block\x22>Your\x20password\x20must\x20contain\x20at\x20least\x20one\x20Upper\x20letter.</span>','val','search','2839972LxyXlW','<span\x20for=\x22%s\x22\x20style=\x22color:#fff\x22\x20class=\x22has-error\x20help-block\x22>\x22Your\x20password\x20must\x20contain\x20at\x20least\x20one\x20Special\x20Character.</span>','201090QslOzG','error','<span\x20for=\x22%s\x22\x20style=\x22color:#fff\x22\x20class=\x22has-error\x20help-block\x22>Your\x20password\x20must\x20be\x20at\x20least\x208\x20characters.</span>','2269176GFUjST'];_0x13e8=function(){return _0x8fc779;};return _0x13e8();}if(password[_0xda190a(0x133)](/[0-9]/)<0x0)return AdminToastr[_0xda190a(0x137)](_0xda190a(0x12e),_0xda190a(0x130)),![];function _0xeee7(_0x25fb71,_0x133ea4){var _0x13e800=_0x13e8();return _0xeee7=function(_0xeee709,_0x146443){_0xeee709=_0xeee709-0x12b;var _0x2dd750=_0x13e800[_0xeee709];return _0x2dd750;},_0xeee7(_0x25fb71,_0x133ea4);}if(password[_0xda190a(0x133)](/[_\-!\"@;,.:#$&*^()]/)<0x0)return AdminToastr[_0xda190a(0x137)](_0xda190a(0x135),_0xda190a(0x130)),![];if(password[_0xda190a(0x13d)]<0x8)return AdminToastr[_0xda190a(0x137)](_0xda190a(0x138),_0xda190a(0x130)),![];
        else {
                e.preventDefault();
                Loader.show();
                setTimeout(function() {
                    // Prevent form submit
                    var obj = $("#saveInfoCleanerForm");
                    // Get form data
                    var data = obj.serialize();
                    // Get post url
                    var url = obj.attr('action');
                    // Submit action
                    var response = AjaxRequest.fire(url, data);
                    if (response.status) {
                        // return false;
                        window.location.href = "<?php echo g('base_url') ?>account/info";
                        //   $("#saveInfoCleanerModal").hide();
                        //   $("#exampleModal").show();
                    }
                    // Add return
                    return false;
                }, 1000);
                return false;
            }
        });
    });
</script>



<script>
   const _0x5593ab=_0x4391;function _0x4391(_0x1e6a09,_0x14a109){const _0x556e6f=_0x556e();return _0x4391=function(_0x439181,_0x11077b){_0x439181=_0x439181-0x172;let _0x1fb3e7=_0x556e6f[_0x439181];return _0x1fb3e7;},_0x4391(_0x1e6a09,_0x14a109);}(function(_0x2f177b,_0x1d04d8){const _0x1ec3f9=_0x4391,_0x55a202=_0x2f177b();while(!![]){try{const _0x5689bd=-parseInt(_0x1ec3f9(0x17c))/0x1*(parseInt(_0x1ec3f9(0x17f))/0x2)+parseInt(_0x1ec3f9(0x172))/0x3+parseInt(_0x1ec3f9(0x182))/0x4+parseInt(_0x1ec3f9(0x17b))/0x5+parseInt(_0x1ec3f9(0x174))/0x6+parseInt(_0x1ec3f9(0x181))/0x7+-parseInt(_0x1ec3f9(0x183))/0x8*(parseInt(_0x1ec3f9(0x177))/0x9);if(_0x5689bd===_0x1d04d8)break;else _0x55a202['push'](_0x55a202['shift']());}catch(_0x10c55b){_0x55a202['push'](_0x55a202['shift']());}}}(_0x556e,0xb9c27));let source=$(_0x5593ab(0x17e)),target=$(_0x5593ab(0x175));source[_0x5593ab(0x176)](function(){transformStringToSlug(source,target);}),target[_0x5593ab(0x176)](function(){transformStringToSlug(target,target);});function transformStringToSlug(_0xfb74d0,_0x154435){const _0x3d03c1=_0x5593ab;string=_0xfb74d0[_0x3d03c1(0x17a)]();var _0x3e3f86=string[_0x3d03c1(0x180)]();_0x3e3f86=_0x3e3f86[_0x3d03c1(0x178)]('\x20')['join']('-'),_0x3e3f86=_0x3e3f86[_0x3d03c1(0x178)]('--')[_0x3d03c1(0x17d)]('-');var _0x3aa2d5=_0x3e3f86[_0x3d03c1(0x173)](_0x3e3f86[_0x3d03c1(0x179)]-0x1,_0x3e3f86[_0x3d03c1(0x179)]);_0x3aa2d5=='-'&&(_0x3e3f86=_0x3e3f86[_0x3d03c1(0x173)](0x0,_0x3e3f86[_0x3d03c1(0x179)]-0x1)),_0x154435[_0x3d03c1(0x17a)](_0x3e3f86);}function _0x556e(){const _0x5a96fb=['length','val','7025160qJUvdq','1PytaLo','join','.slugger-source','1675076FcBdAu','replace','3135902UErEki','3787544swQOwQ','2264OyXeDl','4488828DAAFFR','substring','6585252sCirIb','.slugger-target','keyup','120699iNrgiC','split'];_0x556e=function(){return _0x5a96fb;};return _0x556e();}
</script>