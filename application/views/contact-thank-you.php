<?php 

# Header
include("_header.php");

?>


  <body id="home-section">
    
    <main>


	  <!-- Header -->
      <?php include("_nav-header-not-index.php"); ?>
      <!-- End Header -->




    <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
      <!-- Parallax Image -->
      <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-size-cover g-bg-pos-top-center g-bg-black-opacity-0_2--after" style="height: 140%; background-image: url(<?php print base_url("assets/images/parallax/5.jpg");?>);"></div>
      <!-- End Parallax Image -->

      <!-- Promo Block Content -->
      <div class="container g-color-white text-center g-pt-100 g-pb-70">
        
        <h2 class="g-font-weight-700 g-font-size-80 text-uppercase g-color-white">Thank you</h2>
      </div>
      <!-- Promo Block Content -->
    </section>



      <div class="container g-py-100">
        <div class="u-shadow-v19 g-max-width-645 g-brd-around g-brd-gray-light-v4 text-center rounded mx-auto g-pa-30 g-pa-50--md">
          <span class="u-icon-v3 u-icon-size--lg g-color-white g-bg-primary rounded-circle g-pa-15 mb-5">
            <svg width="30" height="30 version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 497.5 497.5" style="enable-background:new 0 0 497.5 497.5;" xml:space="preserve">
              <g>
                <path d="M487.75,78.125c-13-13-33-13-46,0l-272,272l-114-113c-13-13-33-13-46,0s-13,33,0,46l137,136
                  c6,6,15,10,23,10s17-4,23-10l295-294C500.75,112.125,500.75,91.125,487.75,78.125z" fill="#fff"/>
              </g>
            </svg>
          </span>

          <div class="mb-5">
            <h2 class="mb-4">Thank you!</h2>
            <p>Thank you for contacting us. We will read your message shortly.</p>            
          </div>

          <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="<?php print base_url($lg);?>">Continue</a>
        </div>
      </div>



    </main>      

<?php

# No Contact Footer
include("_no-contact-footer.php");

# Footer
include("_footer.php"); 

?>      