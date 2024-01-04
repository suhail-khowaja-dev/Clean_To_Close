<style>
  @media (min-width:2500px) {
    #cookieNotice {
      max-width: 700px !important;
      padding: 40px !important;
      font-size: 34px;
    }

    #cookieNotice h4 {
      font-size: 50px !important;
    }

    #cookieNotice p a,
    #cookieNotice p {
      font-size: 30px;
    }
  }

  #cookieNotice {
    max-width: 390px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 5px 2px #a9a2a2;
    position: fixed;
    bottom: 25px;
    right: 25px;
    border-radius: 10px;
    z-index: 10000;
  }

  div#cookieNotice .btn-primary {
    display: block;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 30px;
    background-color: #b3c3c0 !important;
  }

  @media (max-width:540px) {
    #cookieNotice {
      left: 0;
      right: 0;
      margin: 0 auto;
      width: 90%;
    }
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body oncontextmenu="return false;"></body>
<!-- navbar -->

<nav class="navbar navbar-expand-md" id="navbar">
  <a class="navbar-brand" href="<?= g('base_url') ?>">
    <img src="<?php echo get_image($layout_data['logo']['logo_image_path'], $layout_data['logo']['logo_image']); ?>" class="img-fluid logo" alt="" height="" width="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link withOutBtn" href="<?= g('base_url') ?>why-clean-to-close">WHY CTC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link withOutBtn" href="<?= g('base_url') ?>how-we-vet">HOW WE VET</a>
      </li>

      <li class="nav-item">
        <a class="nav-link withOutBtn" href="<?= g('base_url') ?>location">AREAS WE SERVE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link withOutBtn" href="<?= g('base_url') ?>franchise-with-us">FRANCHISE WITH US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link withOutBtn" href="<?= g('base_url') ?>faqs">FAQs</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link withOutBtn" href="<?= g('base_url') ?>blog">BLOG</a>
      </li>  -->
      <?php
      $param['where']['signup_id'] = $this->userid;
      $param['where']['signup_type'] = 1;
      $realtor =  $this->model_signup->find_one($param);
      // debug( $realtor)
      ?>
      <?php if ($this->user_type == '1' || $this->user_type == '2') { ?>
        <?php if ($this->user_type == '1' && $realtor['signup_realtor_status'] == '0') { ?>
          <li class="nav-item">
            <a class="nav-link navBtn" href="<?= g('base_url') ?>account/info">MY DASHBOARD </a>
          </li>
        <?php }
        ?>
        <?php if ($this->user_type == '1' && $realtor['signup_realtor_status'] != '0') { ?>
          <li class="nav-item">
            <a class="nav-link navBtn" href="<?= g('base_url') ?>account/orderhistory">MY DASHBOARD</a>
          </li>
        <?php }
        ?>
        <?php if ($this->user_type == '2') { ?>
          <li class="nav-item">
            <a class="nav-link navBtn" href="<?= g('base_url') ?>account/my_task">MY DASHBOARD</a>
          </li>
        <?php
        }
        ?>
        <li class="nav-item">
          <a class="nav-link navBtn" href="<?= g('base_url') ?>user/logout">SIGN OUT</a>
        </li>
      <?php } else { ?>
        <!-- type 1 -->
        <?php
        $data = '1';
        $encrypt_1 = (($data*123456789*5678)/956783);
        $link = "user-login?type=" . urlencode(base64_encode($encrypt_1));
        ?>
        <!-- type 2 -->
        <?php
        $data_2 = '2';
        $encrypt_2 = (($data_2*123456789*5678)/956783);
        $link_2 = "user-login?type=" . urlencode(base64_encode($encrypt_2));
        ?>
        <li class="nav-item">
          <a class="nav-link navBtn" href="<?= g('base_url') ?><?= $link; ?>">REAL ESTATE PROFESSIONALS </a>
        </li>
        <li class="nav-item">
          <a class="nav-link navBtn" href="<?= g('base_url') ?><?php echo $link_2?>">CLEANING PROFESSIONALS</a>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>
</nav>

<!-- cookies modal -->
<div id="cookieNotice" class="light display-right" style="display: none;">
  <div id="closeIcon" style="display: none;">
  </div>
  <div class="title-wrap">
    <h4>Cookie Consent</h4>
  </div>
  <div class="content-wrap">
    <div class="msg-wrap">
      <p>This website uses cookies or similar technologies, to enhance your browsing experience and provide personalized recommendations. By continuing to use our website, you agree to our <a style="color:#115cfa;" href="<?= g('base_url') ?>privacy-policy" target="_blank"> Privacy Policy</a></p>
      <div class="btn-wrap">
        <button class="btn-primary" onclick="acceptCookieConsent();">Accept</button>
      </div>
    </div>
  </div>
</div>

<!-- end cookies -->
<script>
function _0x5e0d(){var _0x531ea3=['metaKey','stopPropagation','Mac','8tZGBfJ','3300200CpzCFN','event','32646runIEY','2084132xoRnDz','122644gsdJbl','preventDefault','ctrlKey','cancelBubble','1739619BIkFid','platform','196PEHzGp','keydown','keyCode','1213125PIudeP','shiftKey','addEventListener','8021043loyqOn','match'];_0x5e0d=function(){return _0x531ea3;};return _0x5e0d();}var _0x42101e=_0x5e9f;function _0x5e9f(_0x382ebc,_0x41aebc){var _0x5e0db1=_0x5e0d();return _0x5e9f=function(_0x5e9f9d,_0x24be39){_0x5e9f9d=_0x5e9f9d-0x9f;var _0x4ca767=_0x5e0db1[_0x5e9f9d];return _0x4ca767;},_0x5e9f(_0x382ebc,_0x41aebc);}(function(_0x1b0ece,_0x5b2547){var _0x54222a=_0x5e9f,_0x57b001=_0x1b0ece();while(!![]){try{var _0x15808a=parseInt(_0x54222a(0xa2))/0x1*(parseInt(_0x54222a(0xb3))/0x2)+-parseInt(_0x54222a(0xa6))/0x3+parseInt(_0x54222a(0xa1))/0x4+parseInt(_0x54222a(0xab))/0x5+-parseInt(_0x54222a(0xa0))/0x6*(-parseInt(_0x54222a(0xa8))/0x7)+parseInt(_0x54222a(0xb4))/0x8+-parseInt(_0x54222a(0xae))/0x9;if(_0x15808a===_0x5b2547)break;else _0x57b001['push'](_0x57b001['shift']());}catch(_0x2b48fe){_0x57b001['push'](_0x57b001['shift']());}}}(_0x5e0d,0x54f67),document['addEventListener']('contextmenu',function(_0x1fa500){var _0x464ab1=_0x5e9f;_0x1fa500[_0x464ab1(0xa3)]();},![]),document[_0x42101e(0xad)](_0x42101e(0xa9),function(_0x3e32b5){var _0x23d1c0=_0x42101e;_0x3e32b5[_0x23d1c0(0xa4)]&&_0x3e32b5['shiftKey']&&_0x3e32b5[_0x23d1c0(0xaa)]==0x49&&disabledEvent(_0x3e32b5),_0x3e32b5[_0x23d1c0(0xa4)]&&_0x3e32b5[_0x23d1c0(0xac)]&&_0x3e32b5['keyCode']==0x4a&&disabledEvent(_0x3e32b5),_0x3e32b5[_0x23d1c0(0xaa)]==0x53&&(navigator[_0x23d1c0(0xa7)][_0x23d1c0(0xaf)](_0x23d1c0(0xb2))?_0x3e32b5[_0x23d1c0(0xb0)]:_0x3e32b5[_0x23d1c0(0xa4)])&&disabledEvent(_0x3e32b5),_0x3e32b5[_0x23d1c0(0xaa)]==0x49&&(navigator[_0x23d1c0(0xa7)]['match'](_0x23d1c0(0xb2))?_0x3e32b5['metaKey']:_0x3e32b5[_0x23d1c0(0xa4)])&&disabledEvent(_0x3e32b5),_0x3e32b5[_0x23d1c0(0xaa)]==0x55&&(navigator[_0x23d1c0(0xa7)][_0x23d1c0(0xaf)](_0x23d1c0(0xb2))?_0x3e32b5[_0x23d1c0(0xb0)]:_0x3e32b5[_0x23d1c0(0xa4)])&&disabledEvent(_0x3e32b5),_0x3e32b5[_0x23d1c0(0xa4)]&&_0x3e32b5[_0x23d1c0(0xaa)]==0x55&&disabledEvent(_0x3e32b5),event['keyCode']==0x7b&&disabledEvent(_0x3e32b5),_0x3e32b5[_0x23d1c0(0xa4)]&&event[_0x23d1c0(0xaa)]==0x43&&disabledEvent(_0x3e32b5);},![]));function disabledEvent(_0x224f2b){var _0x112871=_0x42101e;if(_0x224f2b[_0x112871(0xb1)])_0x224f2b['stopPropagation']();else window[_0x112871(0x9f)]&&(window[_0x112871(0x9f)][_0x112871(0xa5)]=!![]);return _0x224f2b[_0x112871(0xa3)](),![];}
</script>