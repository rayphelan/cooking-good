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
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url(<?php print base_url("assets/images/parallax/6.jpg");?>);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-pt-100 g-pb-70">
        
        <h2 class="g-font-weight-700 g-font-size-50 text-uppercase g-color-white">Welcome</h2>
      </div>
      <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->



    <!-- Thank you message -->
    <div id="thank-you-section" style="display: none;">
      <div class="container g-py-100 ">
        <div class="u-shadow-v19 g-max-width-645 g-brd-around g-brd-gray-light-v4 text-center rounded mx-auto g-pa-30 g-pa-50--md">
          <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary rounded-circle g-pa-15 mb-5">            
            <i class="fa fa-check"></i>
          </span>
          <div class="mb-5">
            <h2 class="mb-4">Thank you!</h2>
            <p>Thank you for Registering. We have sent you an activation email. Please click on the activation link in that email to verify your new account.</p>            
          </div>
          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="<?php print base_url($lg);?>">Continue</a>
        </div>
      </div>
    </div>
    <!-- End Thank you message -->


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

	  <!-- Signup -->
      <section id="form-section" class="container g-pt-100 g-pb-20">
        <div class="row">
          
          <div class="col-lg-5 order-lg-2 g-mb-80">
            <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
              <header class="text-center mb-4">
                <h1 class="h4 g-color-black g-font-weight-400">Create New Account</h1>
              </header>

              <!-- Form -->
              <form class="g-py-15" id="registerForm" action="<?php print base_url($lg."/register/submit");?>" method="post">
                <div class="row">
                  <div class="col g-mb-20">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="First name" name="first_name" id="first_name">
                  </div>

                  <div class="col g-mb-20">
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 rounded g-py-15 g-px-15" type="text" placeholder="Last name" name="last_name" id="last_name">
                  </div>
                </div>

                <div class="mb-4">
                  <div class="input-group g-rounded-left-3">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v3 g-color-gray-dark-v5">
                      <i class="icon-finance-067 u-line-icon-pro"></i>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" type="email" placeholder="Email Address" name="mail" id="mail">
                  </div>
                </div>

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

                <div class="mb-4">
                  <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-2">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" id="tcs">
                    <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                      <i class="fa" data-check-icon="&#xf00c"></i>
                    </span>
                    I accept the <a href="<?php print base_url($lg."/terms");?>">Terms and Conditions</a>
                  </label>
                </div>

                <div class="mb-4">
                  <div class="g-recaptcha" data-sitekey="6Le2mCkTAAAAADZRfFcgK-o1NuMmyA5bIxUxCaRt"></div>
                </div>

                <button id="registerButton" class="submit-button btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="button">Register</button>
                <div class="loading-spinner" style="display: none"></div>
              </form>
              <!-- End Form -->
            </div>

            <div class="text-center">
              <p class="g-color-gray-dark-v5 mb-0">Already have an account?
                <a class="g-font-weight-600" href="<?php print base_url($lg."/login");?>">Log in</a></p>
            </div>
          </div>
          

          <!-- Message Section -->
          <div class="col-lg-7 order-lg-1 g-mb-80">
            <div class="g-pr-20--lg">
              <div class="mb-5">
                <h2 class="h1 g-font-weight-400 mb-3">Welcome to Cooking Good</h2>
                <p class="g-color-gray-dark-v4">The time has come to bring those recipes to life. Showcase your own recipes or learn from reading other people's recipes.</p>
              </div>

              <div class="row text-center mb-5">
                <div class="col-sm-4 g-mb-10">
                  <!-- Counters -->
                  <div class="g-bg-gray-light-v5 g-pa-20">
                    <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-25 g-line-height-1">52147</div>
                    <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
                    <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Code Lines</h4>
                  </div>
                  <!-- End Counters -->
                </div>

                <div class="col-sm-4 g-mb-10">
                  <!-- Counters -->
                  <div class="g-bg-gray-light-v5 g-pa-20">
                    <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-25 g-line-height-1">24583</div>
                    <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
                    <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Projects</h4>
                  </div>
                  <!-- End Counters -->
                </div>

                <div class="col-sm-4 g-mb-10">
                  <!-- Counters -->
                  <div class="g-bg-gray-light-v5 g-pa-20">
                    <div class="js-counter g-color-gray-dark-v5 g-font-weight-300 g-font-size-25 g-line-height-1">7348</div>
                    <div class="d-inline-block g-width-10 g-height-2 g-bg-gray-dark-v5 mb-1"></div>
                    <h4 class="g-color-gray-dark-v4 g-font-size-12 text-uppercase">Working Hours</h4>
                  </div>
                  <!-- End Counters -->
                </div>
              </div>

              <div class="text-center">
                <h2 class="h4 g-font-weight-400 mb-4">Join more than
                  <span class="g-color-primary">33,000</span> members worldwide</h2>
                <img class="img-fluid g-opacity-0_6" src="<?php print base_url("assets/images/maps/map.png");?>" alt="World Map">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Signup -->





    </main>      

<?php

# No Contact Footer
include("_no-contact-footer.php");

# Footer
include("_footer.php"); 

?>      