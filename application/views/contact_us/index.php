<!-- Banner Row  Ends-->
<?
$phone2 =g('db.admin.phone');
$phonenum2 = str_replace(array(')','(','-',' '),array('','','',''),$phone2);
$address=g('db.admin.company_address_1');
$info_email=g('db.admin.email');
$support_email=g('db.admin.support_email');
?>
<!-- Inpage-->

<?php //$this->load->view('widgets/inner_banner');?>

<!-- <div class="contact-sec">
    <div class="container">

        <div class="row">

            <div class="col-md-6">
                <div class="cntc-info">
                    <h4>Contact Us</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inn-info">
                                <h5>Address</h5>
                                <ul>
                                    <li><?php echo $address;?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inn-info">
                                <h5>Email Address</h5>
                                <ul>
                                    <li><a href="mailto:<?php echo $info_email;?>"><?php echo $info_email;?></a></li>
                                    <li><a href="mailto:<?php echo $support_email;?>"><?php echo $support_email;?></a></li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inn-info">
                                <h5>Phone Number</h5>
                                <ul>
                                    <li><a href="tel:<?php echo $phone2;?>"><?php echo $phone2;?></a></li>
                                    <li><a href="tel:<?php echo $phonenum2;?>"><?php echo $phonenum2;?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inn-info">
                                <h5>Website Address</h5>
                                <ul>
                                    <li><a href="<?php echo g('base_url');?>"><?php echo g('db.admin.domain');?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="cntc-form">
                    <form class="contact-form" id="contact-form" action="<?=g('base_url')?>contact-us/store" method="post">
                            <div class="col-md-12"><label>Name*</label><input type="text" name="inquiry[inquiry_fullname]" placeholder=""></div>
                            <div class="col-md-12"><label>Email ID*</label><input type="email" name="inquiry[inquiry_email]" placeholder=""></div>
                            <div class="col-md-12"><label>Subject*</label><input type="text" name="inquiry[inquiry_subject]" placeholder=""></div>
                            <div class="col-md-12"><label>Message</label><textarea placeholder="" name="inquiry[inquiry_comments]"></textarea></div>
                            <div class="col-md-12"><label>Captcha</label><?php $this->load->view('widgets/google_captcha');?><br></div>
                            <div class="col-md-12"><button class="btn-send">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
-->


<div class="container">
    <div class="row">

        <div class="col-md-12 mt-5">
            <span class="heading">
                <?=$banner['banner_heading']?>
            </span>
        </div>
        
        <div class="col-md-12 mt-2 homeDesc">
            <?=html_entity_decode($banner['banner_description'])?>
        </div>
    </div>
</div>
</div>

<div class="col-lg-12">
<div class="row mt-5">
    <!-- <div class="col-md-12 sbhfirst text-center">
        <h2>Contact Us</h2>
    </div> -->
</div>
</div>
<div class="container contact-us">
    <div class="row">
        <div class="col-md-4">
            <div class="uper">
                <p>Northern Region</p>
                <p><?=g('db.admin.company_address_1')?></p>
                <p><a href="tel:<?=g('db.admin.phone')?>"><?=g('db.admin.phone')?></a></p>
            </div>
            <div class="lower">
                <p>Southern Region</p>
                <p><?=g('db.admin.company_address_2')?></p>
                <p><a href="tel:<?=g('db.admin.phone_2')?>"><?=g('db.admin.phone_2')?></a></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="uper">
                <p>Media Requests</p>
                <p><a href="mailto:<?=g('db.admin.email')?>"><?=g('db.admin.email')?> </a></p>
                <hr style="background:white;width: 51%;">
                <p>Staff Email</p>
                <p><a href="mailto:<?=g('db.admin.staff_email')?>"><?=g('db.admin.staff_email')?> </a></p>
            </div>
            <div class="lower">
                <p>Website/Profile Updates</p>
                <p><a href="mailto:<?=g('db.admin.support_email')?>"><?=g('db.admin.support_email')?> </a></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="uper">
                <h3 style="color: #fff">Central Office</h3>
                <p><?=g('db.admin.central_office')?> </p>
            </div>
            <div class="lower">
                <p>Follow our journey and camp updates!</p>
                <div class="socil-icon cnt-icon">
                    <a href="<?=g('db.admin.facebook')?>" target="_blank">
                        <img src="<?=g('images_root')?>facebook.svg" alt="">
                    </a>
                    <a href="<?=g('db.admin.youtube')?>" target="_blank">
                        <img src="<?=g('images_root')?>youtube.svg" alt="">
                    </a>
                    <a href="<?=g('db.admin.instagram')?>" target="_blank">
                        <img src="<?=g('images_root')?>insta.svg" alt="">
                    </a>
                    <a href="<?=g('db.admin.twitter')?>" target="_blank">
                        <img src="<?=g('images_root')?>twitter.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row" style="margin-top: 6%;">
        <div class="col-md-4">
            <p>Southern Region</p>
            <p><?=g('db.admin.company_address_2')?></p>
            <p><a href="tel:<?=g('db.admin.phone_2')?>"><?=g('db.admin.phone_2')?></a></p>
        </div>
        <div class="col-md-4">
            <p>Website/Profile Updates</p>
            <p><a href="mailto:<?=g('db.admin.support_email')?>"><?=g('db.admin.support_email')?> </a></p>
        </div>
        <div class="col-md-4">
            <p>Follow our journey and camp updates!</p>
            <div class="socil-icon cnt-icon">
                <a href="<?=g('db.admin.facebook')?>" target="_blank">
                    <img src="<?=g('images_root')?>facebook.svg" alt="">
                </a>
                <a href="<?=g('db.admin.youtube')?>" target="_blank">
                    <img src="<?=g('images_root')?>youtube.svg" alt="">
                </a>
                <a href="<?=g('db.admin.instagram')?>" target="_blank">
                    <img src="<?=g('images_root')?>insta.svg" alt="">
                </a>
                <a href="<?=g('db.admin.twitter')?>" target="_blank">
                    <img src="<?=g('images_root')?>twitter.svg" alt="">
                </a>
            </div>
        </div>
    </div> -->


  <div class="container">
              <h3>Checkout Page</h3>
              <br/>
              <h5>Checkout Mode
              </h5>
              <form name="checkout_mode_select">
              <input type="radio" name="checkout_mode" value="modal" checked="checked"> Modal<br/>
              <input type="radio" name="checkout_mode" value="redirect" > Redirect
              
              </form>
              <h5>Payment Method
              </h5>
              <form>
              <input type="radio" value="Affirm" checked="checked"><img id="payment_method-affirm" src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1NzEuNjQgMTY2LjA0Ij48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6IzJiYzJkZjt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmxvZ290eXBlX2JsdWU8L3RpdGxlPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTI5OC4zOSwwQTE3LjU3LDE3LjU3LDAsMSwwLDMxNiwxNy41NywxNy41OSwxNy41OSwwLDAsMCwyOTguMzksMFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMCkiLz48cmVjdCBjbGFzcz0iY2xzLTEiIHg9IjI4My4zIiB5PSI0Ni42OCIgd2lkdGg9IjI5Ljk5IiBoZWlnaHQ9IjExOS4zMSIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTQwMy40Nyw0My42MWMtMTUsMC0zMi4yNSwxMC44LTM3LjkzLDI0LjM0VjQ2LjY4SDMzNy4wOVYxNjZoMzBWMTEwLjU5YzAtMjMuNDUsOS0zNi41NCwyOC42MS0zNi45MUw0MTIuNDQsNDQuM0E2NC4xNyw2NC4xNywwLDAsMCw0MDMuNDcsNDMuNjFaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwIDApIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNTI0LDQzLjY5Yy0xMi44NywwLTI0LjQxLDQuODQtMzIuNSwxMy42MmwtMC40Mi40NS0wLjQxLS40NWMtOC04Ljc4LTE5LjQ4LTEzLjYyLTMyLjM2LTEzLjYyLTI3LjU4LDAtNDcuNiwyMC4xMS00Ny42LDQ3LjgxVjE2NmgyOS41MlY5MC44NmMwLTExLjYzLDcuMS0xOS4xNCwxOC4wOC0xOS4xNHMxOC4wOSw3LjUxLDE4LjA5LDE5LjE0VjE2Nkg1MDZWOTAuODZjMC0xMS42Myw3LjEtMTkuMTQsMTguMDktMTkuMTRzMTguMDksNy41MSwxOC4wOSwxOS4xNFYxNjZoMjkuNTFWOTEuNUM1NzEuNjQsNjMuOCw1NTEuNjIsNDMuNjksNTI0LDQzLjY5WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCAwKSIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTI0NywzNS42OWMwLTMuOTQuNTMtOC42NSwzLjktMTEuMjQsMy42OS0yLjg3LDkuMDktMi4zNCwxMy40Ni0yLjEybDUuODItMjEuNzItMy4xMS0uMTZjLTEyLjUyLS42Ny0yNS42OS0xLjYtMzYuNjcsNS42Ni05LjMxLDYuMTUtMTMuNDUsMTYuNzQtMTMuNDUsMjcuNjF2MTNIMTgxLjE4di0xMWMwLTMuOTIuNTItOC41OCwzLjgyLTExLjIsMy42OS0yLjkzLDkuMTYtMi4zOCwxMy41My0yLjE2bDUuODItMjEuNzItMy4xMS0uMTZjLTEyLjYyLS42OC0yNS45Mi0xLjYtMzYuOTEsNS44Ni05LjEyLDYuMTgtMTMuMTYsMTYuNjgtMTMuMTYsMjcuNDJ2MTNIMTM3LjY1VjY4LjM3aDEzLjUzVjE2NmgzMFY2OC4zN2gzNS43NlYxNjZoMzBWNjguMzdoMjAuNzdWNDYuNjhIMjQ3di0xMVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMCkiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xMjIuNDMsMTY2bDAtMTA1LjM2YTE3LjMyLDE3LjMyLDAsMCwwLTE1LjMyLTE3Yy01LjczLS4zNy0xMS44MiwxLjczLTE1LjQxLDYuMzhMMCwxNjZIMjIuNmM5LDAsMTYuMTgtNC42OSwyMS42MS0xMS43TDk1LDkwLjA3VjE2NmgyNy40NVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgMCkiLz48L3N2Zz4=" height="16px">
              <h5>How does Affirm work?</h5>
              <span>
              Just enter your basic information and get a real-time credit decision. You will complete your payment on the Affirm website. If you're approved and confirm your loan, your purchase will be on its way as soon as it's ready.
              </span>
              </form>
              <input class="btn btn-primary" type="button" value="Affirm Checkout" id="submit-form" />
      </div>
  
</div>



<script>
/**************************************************************\
            Include Affirm.js Snippet
\**************************************************************/
var _affirm_config = {
  public_api_key: "1RNZONP2SEMQ4WPQ",  /* replace with public api key */
  script:         "https://cdn1.affirm.com/js/v2/affirm.js"
};
(function(l,g,m,e,a,f,b){var d,c=l[m]||{},h=document.createElement(f),n=document.getElementsByTagName(f)[0],k=function(a,b,c){return function(){a[b]._.push([c,arguments])}};c[e]=k(c,e,"set");d=c[e];c[a]={};c[a]._=[];d._=[];c[a][b]=k(c,a,b);a=0;for(b="set add save post open empty reset on off trigger ready setProduct".split(" ");a<b.length;a++)d[b[a]]=k(c,e,b[a]);a=0;for(b=["get","token","url","items"];a<b.length;a++)d[b[a]]=function(){};h.async=!0;h.src=g[f];n.parentNode.insertBefore(h,n);delete g[f];d(g);l[m]=c})(window,_affirm_config,"affirm","checkout","ui","script","ready");

var checkout_mode = "modal";

var rad = document.checkout_mode_select.checkout_mode;
    var prev = null;
    for(var i = 0; i < rad.length; i++) {
        rad[i].onclick = function() {
            console.log(this.value);
                checkout_mode = this.value;
        };
    }


/**************************************************************\
          Set Affirm Checkout Values
\**************************************************************/



    
/**************************************************************\
              Handle the form submission
\**************************************************************/
$("#submit-form").click(function(){
affirm.checkout({

  "config": {
    "financial_product_key" : "25A9CLVPU6IQ171S", //replace with your Affirm financial product key
  },

  "merchant": {
    "user_cancel_url"              : "https://google.com",
    "user_confirmation_url"        : "https://google.com",
    "user_confirmation_url_action" : "POST"
  },
  
  "metadata": {
    "mode":checkout_mode
  },

  //shipping contact
  "shipping": {
    "name": {
      "first" : "John",
      "last" : "Doe"
      // You can also include the full name
      // "full" : "John Doe"
    },
    "address": {
      "line1"  : "225 Bush Street",
      "line2"  : "Floor 16",
      "city"   : "San Francisco",
      "state"  : "CA",
      "zipcode": "94104"
    },
    "email"          : "joe.doe@email.com",
    "phone_number"   : "4155555555"
  },

  // cart 
  "items": [{
    "display_name"   : "Acme SLR-NG",
    "sku"            : "ACME-SLR-NG-01",
    "unit_price"     : 200*100,
    "qty"            : 1,
    "item_image_url" : "https://examplemerchant.com/static/item.png",
    "item_url"       : "https://examplemerchant.com/acme-slr-ng-01.htm",
  }],

  // pricing / charge amount
  "currency"        : "USD",
  "discounts": {
    "savemoney123": {
      "discount_amount" : 0
    }
  },
  "tax_amount"      : 0,
  "shipping_amount" : 0,
  "total"           : 200*100
});
    console.log(checkout_mode);
  affirm.checkout.open({
onFail: function(a){console.log(a)},
onSuccess: function(a){console.log(a)}
});
//    affirm.checkout.open();
});
</script>