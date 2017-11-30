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
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url(<?php print base_url("assets/images/parallax/1.jpg");?>);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-pt-100 g-pb-70">
        
        <h2 class="g-font-weight-700 g-font-size-80 text-uppercase g-color-white">Welcome Back</h2>
      </div>
      <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->

	  <!-- Login -->
      <section class="container g-pt-10 g-pb-20 mt-5">
        <div class="row justify-content-between">
          <div class="col-md-6 col-lg-5 order-lg-2 g-mb-80">
            <div class="g-brd-around g-brd-gray-light-v3 g-bg-white rounded g-px-30 g-py-50 mb-4">
              <header class="text-center mb-4">
                <h1 class="h4 g-color-black g-font-weight-400">Login to Your Account</h1>
              </header>

              <!-- Form -->
              <form class="g-py-15">
                <div class="mb-4">
                  <div class="input-group g-rounded-left-3">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v3 g-color-gray-dark-v5">
                      <i class="icon-finance-067 u-line-icon-pro"></i>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" type="email" placeholder="Email Address">
                  </div>
                </div>

                <div class="mb-4">
                  <div class="input-group g-rounded-left-3 mb-4">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v3 g-color-gray-dark-v5">
                      <i class="icon-media-094 u-line-icon-pro"></i>
                    </span>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-rounded-left-0 g-rounded-right-3 g-py-15 g-px-15" type="password" placeholder="Password">
                  </div>
                </div>

                <div class="row justify-content-between mb-5">
                  <div class="col align-self-center">
                    <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25 mb-0">
                      <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                      <span class="d-block u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon="&#xf00c"></i>
                      </span>
                      Keep signed in
                    </label>
                  </div>
                  <div class="col align-self-center text-right">
                    <a class="g-font-size-13" href="page-password-recovery-1.html">Forgot password?</a>
                  </div>
                </div>

                <div class="mb-1">
                  <button class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" type="button">Login</button>
                </div>

                
              </form>
              <!-- End Form -->
            </div>

            <div class="text-center">
              <p class="g-color-gray-dark-v5 mb-0">Don't have an account?
                <a class="g-font-weight-600" href="<?php print base_url($lg."/register");?>">signup</a></p>
            </div>
          </div>

          <div class="col-md-6 order-lg-1 g-mb-80">
            <div class="mb-5">
              <h2 class="h1 g-font-weight-400 mb-3">Welcome back to Cooking Good</h2>
              <p class="g-color-gray-dark-v4">We're glad to see you again. Log in to your account and lets start cooking!</p>
            </div>

            <div class="row">
              <div class="col-lg-9">
                <!-- Icon Blocks -->
                <div class="media mb-5">
                  <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary g-mr-15 g-mb-15">
					  <i class="fa fa-cutlery"></i>
					</span>                   
                  </div>
                  <div class="media-body align-self-center">
                    <h3 class="h5 g-font-weight-400">Learn</h3>
                    <p class="g-color-gray-dark-v5 mb-0">Learn how to make new dishes by reading other people's recipes</p>
                  </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media mb-5">
                  <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary g-mr-15 g-mb-15">
					  <i class="fa fa-share"></i>
					</span>
                  </div>
                  <div class="media-body align-self-center">
                    <h3 class="h5 g-font-weight-400">Share</h3>
                    <p class="g-color-gray-dark-v5 mb-0">Share your recipes with others and showcase your work</p>
                  </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media">
                  <div class="d-flex mr-3">
                    <span class="align-self-center u-icon-v1 u-icon-size--lg g-color-primary g-mr-15 g-mb-15">
					  <i class="fa fa-heart"></i>
					</span>
                  </div>
                  <div class="media-body align-self-center">
                    <h3 class="h5 g-font-weight-400">Enjoy</h3>
                    <p class="g-color-gray-dark-v5 mb-0">Most importantly, enjoy cooking and eating good food!</p>
                  </div>
                </div>
                <!-- End Icon Blocks -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Login -->





    </main>      

<?php

# No Contact Footer
include("_no-contact-footer.php");

# Footer
include("_footer.php"); 

?>      