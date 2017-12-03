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
        
        <h2 class="g-font-weight-700 g-font-size-50 text-uppercase g-color-white">Categories</h2>
      </div>
      <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->

    

    <div class="container g-pt-50 g-pb-40">
      <div class="row">
        <div class="col-lg-12 g-pb-20">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- CookingGood-Ad2 -->
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-1916083344486962"
               data-ad-slot="9295729346"
               data-ad-format="auto"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">

          <!-- Categories Panel -->
          <div class="card border-0 rounded-0 g-mb-50">
            <!-- Panel Header -->
            <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
              <h3 class="h6 mb-0">
                  <i class="icon-notebook g-pos-rel g-top-1 g-mr-5"></i> Categories
                </h3>              
            </div>
            <!-- End Panel Header -->

            <div class="row">

              <?php foreach($categories as $category) {?>
              <div class="col-md-4 g-mb-30 g-mb-10--md">
                <!-- Figure -->
                <figure class="g-bg-white g-brd-around g-brd-gray-light-v4 g-brd-cyan--hover g-transition-0_2 text-center">
                  <div class="g-py-40 g-px-20">
                    <!-- Figure Image -->
                    <a href="<?php print $category['link'];?>">
                      <img class="g-width-100 g-height-100 rounded-circle g-mb-20" src="<?php print $category['image'];?>" alt="<?php print $category['title'];?>">
                    </a>
                    <!-- Figure Image -->

                    <!-- Figure Info -->
                    <h4 class="h5 g-mb-5"><a href="<?php print $category['link'];?>"><?php print $category['title'];?></a></h4>
                    
                    <!-- End Figure Info -->
                  </div>

                  
                  <!-- End Figure List -->
                </figure>
                <!-- End Figure -->
              </div>

              <?php } ?>

            </div>


          </div>
          <!-- End Categories Panel -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <ins class="adsbygoogle"
                   style="display:block; text-align:center;"
                   data-ad-layout="in-article"
                   data-ad-format="fluid"
                   data-ad-client="ca-pub-1916083344486962"
                   data-ad-slot="5065017902"></ins>
              <script>
                   (adsbygoogle = window.adsbygoogle || []).push({});
              </script>

              
        </div>
      </div>
    </div>


    </main>      

<?php

# No Contact Footer
include("_no-contact-footer.php");

# Footer
include("_footer.php"); 

?>      