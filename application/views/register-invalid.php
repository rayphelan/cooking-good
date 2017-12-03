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
        
        <h2 class="g-font-weight-700 g-font-size-50 text-uppercase g-color-white">Cooking Good</h2>
      </div>
      <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->





    <!-- Error Message -->
    <div id="error-section">
      <div class="container g-py-100">
        <div class="u-shadow-v19 g-max-width-645 g-brd-around g-brd-gray-light-v4 text-center rounded mx-auto g-pa-30 g-pa-50--md">          
          <div class="mb-5">
            <h2 class="mb-4" id="error-title">We are sorry</h2>
            <p id="error-message">We were unable to verify your email account. Please make sure your are registered.</p>            
          </div>
          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="<?php print base_url($lg."/register")?>">OK</a>
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