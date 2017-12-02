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
        
        <h2 class="g-font-weight-700 g-font-size-80 text-uppercase g-color-white">Cooking Good</h2>
      </div>
      <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->




    <!-- Thank you message -->
    <div id="thank-you-section">
      <div class="container g-py-100 ">
        <div class="u-shadow-v19 g-max-width-645 g-brd-around g-brd-gray-light-v4 text-center rounded mx-auto g-pa-30 g-pa-50--md">
          <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary rounded-circle g-pa-15 mb-5">            
            <i class="fa fa-check"></i>
          </span>
          <div class="mb-5">
            <h2 class="mb-4">Thank you!</h2>
            <p>Your email account has been verified. You may start browsing and sharing recipes, or you may update your profile.</p>            
          </div>
          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="<?php print base_url($lg."/recipes");?>">Recipes</a>
          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="<?php print base_url($lg."/me");?>">Profile</a>
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