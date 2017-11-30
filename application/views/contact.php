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
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url(<?php print base_url("assets/images/parallax/5.jpg");?>);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-pt-150 g-pb-200">
        <h3 class="h2 g-font-weight-300 mb-0 g-color-white">You came to the right place</h3>
        <h2 class="g-font-weight-700 g-font-size-80 text-uppercase g-color-white">Let's Talk</h2>
      </div>
      <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->

    <!-- Contact Form -->
    <section class="container">
      <!-- Icon Blocks -->
      <div class="row no-gutters u-shadow-v21 g-mt-minus-100">
        <div class="col-sm-6 col-md-4 g-brd-right--md g-brd-gray-light-v4">
          <!-- Icon Blocks -->
          <div class="g-bg-white text-center g-py-100">
            <span class="u-icon-v1 u-icon-size--xl g-color-primary mb-3">
                <i class="icon-real-estate-027 u-line-icon-pro"></i>
              </span>
            <h4 class="h5 g-font-weight-600 g-mb-5">Address</h4>
            <span class="d-block">Newtown Forbes, Co. Longford, Ireland</span>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-6 col-md-4 g-hidden-xs-down g-brd-right--md g-brd-gray-light-v4">
          <!-- Icon Blocks -->
          <div class="g-bg-white text-center g-py-100">
            <span class="u-icon-v1 u-icon-size--xl g-color-primary mb-3">
                <i class="icon-communication-062 u-line-icon-pro"></i>
              </span>
            <h4 class="h5 g-font-weight-600 g-mb-5">Phone Number</h4>
            <span class="d-block">+353 (0) 85 722 8681</span>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-sm-6 col-md-4 g-hidden-sm-down">
          <!-- Icon Blocks -->
          <div class="g-bg-white text-center g-py-100">
            <span class="u-icon-v1 u-icon-size--xl g-color-primary mb-3">
                <i class="icon-electronics-005 u-line-icon-pro"></i>
              </span>
            <h4 class="h5 g-font-weight-600 g-mb-5">Email</h4>
            <span class="d-block">x17119847@student.ncirl.ie</span>
          </div>
          <!-- End Icon Blocks -->
        </div>
      </div>
      <!-- End Icon Blocks -->

      <div class="g-py-100">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h3 class="g-color-black g-font-weight-600 text-center mb-5">Who are you, and how can we help?</h3>
            <form id="contactForm" action="<?php print base_url($lg."/contact/submit");?>" method="post">
              <div class="row">
                <div class="col-md-6 form-group g-mb-20">
                  <label class="g-color-gray-dark-v2 g-font-size-13">First Name</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="text" placeholder="First name" name="first_name" id="first_name">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <label class="g-color-gray-dark-v2 g-font-size-13">Last Name</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="text" placeholder="Last name" name="last_name" id="last_name">
                </div>

                <div class="col-md-6 form-group g-mb-20">
                  <label class="g-color-gray-dark-v2 g-font-size-13">Email</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="email" placeholder="Email" name="mail" id="mail">
                </div>                

                <div class="col-md-6 form-group g-mb-20">
                  <label class="g-color-gray-dark-v2 g-font-size-13">Phone</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="tel" placeholder="Phone number" name="phone" id="phone">
                </div>

                <div class="col-md-12 form-group g-mb-40">
                  <label class="g-color-gray-dark-v2 g-font-size-13">Message</label>
                  <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-resize-none rounded-3 g-py-13 g-px-15" rows="4" placeholder="Hi there, I would like to ..." style="overflow: hidden" name="message" id="message"></textarea>
                </div>

                <div class="col-md-12 form-group g-mb-40">
                  <select name="mood" id="mood" class="js-custom-select u-select-v1 g-brd-gray-light-v3 g-color-gray-dark-v5 rounded g-py-12" style="width: 100%;">
                    <option value="" selected="">How are you feeling?</option>
                    <option value="happy">Happy</option>
                    <option value="sad">Sad</option>
                    <option value="angry">Angry</option>
                    <option value="neutral">Neutral</option>
                    <option value="frustrated">Frustrated</option>
                  </select>
                </div>

                <div class="col-md-6 form-group g-mb-20">                  
                  <label for="reply_yes">Please reply</label>
                  <input type="radio" name="reply" value="yes" id="reply_yes" checked="checked">
                  &nbsp; | &nbsp;
                  <label for="reply_no">No need to reply</label>
                  <input type="radio" name="reply" value="no" id="reply_no">
                </div>

                <div class="col-md-6 form-group g-mb-20">                  
                  <label for="eaten_yes">I have eaten well today</label>
                  <input type="radio" name="eaten" value="yes" id="eaten_yes" checked="checked">
                  <label for="eaten_no">I am hungry!</label>
                  <input type="radio" name="eaten" value="no" id="eaten_no">
                </div>

                <div class="col-md-6 text-center">
                  <div class="g-recaptcha" data-sitekey="6Le2mCkTAAAAADZRfFcgK-o1NuMmyA5bIxUxCaRt"></div>
                </div>

                <div class="col-md-6 text-left g-mt-10">
                  <button id="contactButton" class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase g-rounded-25 g-py-15 g-px-30" type="button" role="button">Send Request</button>
                </div>

              </div>
            
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Form -->	  





    </main>      

<?php

# No Contact Footer
include("_no-contact-footer.php");

# Footer
include("_footer.php"); 

?>      