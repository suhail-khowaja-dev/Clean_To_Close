<div class="Main">
          <div class="dashboard  ">
          <? $this->load->view('account/header_main') ?>
              <div class="contantPart">
                <div class="mt50 text-center">
                  <h3 class='orderHeading'>
                      Change Password
                  </h3>
              </div>
              <form id="forgotform" method="post">
              <div class="row accountInfoRow mt30">
                
                  <div class="col-lg-12 text-center">
                    <input type="password" placeholder='New Password' name="signup[signup_password]" class="changePasswordInput"  id="forgotpass">
                  </div>
              </div>
              
              <div class="row mt20">
                  <div class="col-lg-12 text-center">
                    <a href="javascript:void(0)" id="typebtn" class=" changePasswrodbtn cancel btnnext ">
                    Change Password
                    </a>
                    <!-- <button  class='changePasswrodbtn' href="javascript:void(0)" id="typebtn" type="submit">Confirm Changes</button> -->
                  </div>
              </div>
              </form>
          </div>


              </div>
          </div>
        </div>