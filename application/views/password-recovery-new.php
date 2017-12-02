<?php 

# Header
include("_header.php");

?>


  <body id="home-section">
    
    <main>


	  <!-- Header -->
      <?php include("_nav-header-not-index.php"); ?>
      <!-- End Header -->


<!-- Promo Block -->
    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url(<?php print base_url("assets/images/parallax/4.jpg");?>);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-pt-100 g-pb-70">
        
        <h2 class="g-font-weight-700 g-font-size-80 text-uppercase g-color-white">Need help?</h2>
      </div>
      <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->




    <!-- Password Recovery -->
    <div id="form-section">
      <div class="container g-py-100 ">
        <div class="u-shadow-v19 g-max-width-645 g-brd-around g-brd-gray-light-v4 text-center rounded mx-auto g-pa-30 g-pa-50--md">
          <div class="mb-5">
            <h2 class="mb-4">Password Recovery</h2>
            <p>Please insert your new password.</p>            
          </div>
          

        
              <!-- Form -->
              <form id="newPWForm" method="post" action="<?php print base_url($lg."/resetpassword/reset");?>" class="g-py-15">
                <input type="hidden" name="reset_password_code" value="<?php print $reset_password_code;?>">
                <input type="hidden" name="email_code" value="<?php print $email_code;?>">

                <div class="mb-4">
                  <div class="input-group g-rounded-left-3 mb-4">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v3 g-color-gray-dark-v5">
                      <i class="icon-media-094 u-line-icon-pro"></i>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" type="password" placeholder="Password" name="password" id="password">
                  </div>
                </div>

                <div class="mb-4">
                  <div class="input-group g-rounded-left-3 mb-4">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v3 g-color-gray-dark-v5">
                      <i class="icon-media-094 u-line-icon-pro"></i>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password">
                  </div>
                </div>

                <div class="mb-1">
                  <button id="newPWButton" class="submit-button btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="button">Reset Password</button>
                </div>
                <div class="loading-spinner" style="display: none"></div>


                <div class="row justify-content-between mb-5">
                  <div class="col align-self-center text-right">
                    <a class="g-font-size-13" href="<?php print base_url($lg."/login");?>">Return to Login</a>
                  </div>
                </div>


              </form>
              <!-- End Form -->

        </div>
      </div>
    </div>
    <!-- End Password Recovery --> 	  




    <!-- Error Message -->
    <div id="error-section" style="display: none;">
      <div class="container g-py-100">
        <div class="u-shadow-v19 g-max-width-645 g-brd-around g-brd-gray-light-v4 text-center rounded mx-auto g-pa-30 g-pa-50--md">          
          <div class="mb-5">
            <h2 class="mb-4" id="error-title"></h2>
            <p id="error-message"></p>            
          </div>
          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="javascript:void(0);" onclick="errorMessageOK()">OK</a>
        </div>
      </div>
    </div>
    <!-- End Thank you message --> 



    <!-- Thank you message -->
    <div id="thank-you-section" style="display: none;">
      <div class="container g-py-100 ">
        <div class="u-shadow-v19 g-max-width-645 g-brd-around g-brd-gray-light-v4 text-center rounded mx-auto g-pa-30 g-pa-50--md">
          <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary rounded-circle g-pa-15 mb-5">            
            <i class="fa fa-check"></i>
          </span>
          <div class="mb-5">
            <h2 class="mb-4">Password reset</h2>
            <p>You have successfully reset your password. Please proceed with Log in.</p>            
          </div>
          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="<?php print base_url($lg."/login");?>">Log in</a>
        </div>
      </div>
    </div>
    <!-- End Thank you message -->


    </main>      

<?php

# No Contact Footer
include("_no-contact-footer.php");

# Footer
include("_footer.php"); 

?>      