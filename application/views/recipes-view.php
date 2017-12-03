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
      <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall" data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
        <div class="rayblur divimage dzsparallaxer--target w-100 g-bg-pos-top-center g-bg-cover g-bg-black-opacity-0_1--after" style="height: 200%; background-image: url(<?php print $recipe['image'];?>); background-position: bottom"></div>

        <div class="container g-color-white g-pt-100 g-pb-40">
          <div class="g-mb-50">
            <span class="d-block g-color-white-opacity-0_8 g-font-weight-300 g-font-size-20"></span>
            <h3 class="g-color-white g-font-size-50 g-font-size-90--md g-line-height-1_2 mb-0"><?php print $recipe['title'];?></h3>
            <p class="g-color-white g-font-weight-600 g-font-size-20 text-uppercase"><?php print $recipe['owner'];?></p>
          </div>

          <div class="d-flex justify-content-end">
            <ul class="u-list-inline g-bg-gray-dark-v1 g-font-weight-300 g-rounded-50 g-py-5 g-px-20">
              <li class="list-inline-item g-mr-5">
                <a class="u-link-v5 g-color-white g-color-primary--hover" href="<?php print base_url($lg);?>">Home</a>
                <i class="g-color-white-opacity-0_5 g-ml-5">/</i>
              </li>
              <li class="list-inline-item g-mr-5">
                <a class="u-link-v5 g-color-white g-color-primary--hover" href="<?php print base_url($lg."/recipes");?>">Recipes</a>
                <i class="g-color-white-opacity-0_5 g-ml-5">/</i>
              </li>
              <li class="list-inline-item g-color-primary g-font-weight-400">
                <span><?php print $recipe['title'];?></span>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- End Promo Block -->



<!-- Product Description -->
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
          <div class="col-lg-7">
            <!-- Carousel -->
            <div id="carouselCus1" class="js-carousel g-pt-10 g-mb-10"
                 data-infinite="true"
                 data-fade="true"
                 data-arrows-classes="u-arrow-v1 g-brd-around g-brd-white g-absolute-centered--y g-width-45 g-height-45 g-font-size-14 g-color-white g-color-primary--hover rounded-circle"
                 data-arrow-left-classes="fa fa-angle-left g-left-40"
                 data-arrow-right-classes="fa fa-angle-right g-right-40"
                 data-nav-for="#carouselCus2">
              <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
                <img class="img-fluid w-100" src="<?php print $recipe['image'];?>" alt="<?php print $recipe['title'];?>">
              </div>            
            </div>            
            <!-- End Carousel -->
            <a class="btn u-btn-primary g-font-size-12 text-uppercase g-py-12 g-px-25" href="javascript:void(0);">
              Save to My Recipes
            </a>            
          </div>

          <div class="col-lg-5">
            <div class="g-px-40--lg g-pt-70">
              <!-- Product Info -->
              <div class="g-mb-30">
                <h1 class="g-font-weight-300 mb-4"><?php print $recipe['title'];?></h1>
                <h4 class="g-pb-10"><?php print $recipe['owner'];?></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <!-- End Product Info -->

              
            </div>
          </div>
        </div>
      </div>
      <!-- End Product Description -->

      <!-- Description -->
      <div class="container">
        <div class="g-brd-y g-brd-gray-light-v4 g-pt-20 g-pb-70">
          

          <div class="row">
            <div class="col-md-8 g-mb-30">
              <h2 class="h4 mb-3">Instructions</h2>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
              <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>

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

            <div class="col-md-4 g-mb-0 g-mb-30--md">
              <!-- List -->
              <h4>Ingredients</h4>
              <ul class="list-unstyled g-color-text">
                <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                  <span>Ingredient 1:</span>
                  <span class="float-right g-color-black">500 gram</span>
                </li>
                <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                  <span>Ingredient 2:</span>
                  <span class="float-right g-color-black">3 spoons</span>
                </li>
                <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                  <span>Ingredient 3:</span>
                  <span class="float-right g-color-black">1 pinch</span>
                </li>
                <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                  <span>Ingredient 4:</span>
                  <span class="float-right g-color-black">1 litre</span>
                </li>
                <li class="g-brd-bottom--dashed g-brd-gray-light-v3 pt-1 mb-3">
                  <span>Ingredient 5:</span>
                  <span class="float-right g-color-black">1 Sprinkle</span>
                </li>
              </ul>
              <!-- End List -->
            </div>

            
          </div>
        </div>
      </div>
      <!-- End Description -->      


    </main>      

<?php

# No Contact Footer
include("_no-contact-footer.php");

# Footer
include("_footer.php"); 

?>      