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
        <div class="divimage dzsparallaxer--target w-100 g-bg-pos-top-center g-bg-cover g-bg-black-opacity-0_1--after" style="height: 200%; background-image: url(<?php print base_url("assets/images/slideshow/2.jpg");?>); background-position: bottom"></div>

        <div class="container g-color-white g-pt-100 g-pb-40">
          <div class="g-mb-50">
            <span class="d-block g-color-white-opacity-0_8 g-font-weight-300 g-font-size-20">Get inspired!</span>
            <h3 class="g-color-white g-font-size-50 g-font-size-90--md g-line-height-1_2 mb-0">Recipes</h3>
            <p class="g-color-white g-font-weight-600 g-font-size-20 text-uppercase">Cooking Good</p>
          </div>

          <div class="d-flex justify-content-end">
            <ul class="u-list-inline g-bg-gray-dark-v1 g-font-weight-300 g-rounded-50 g-py-5 g-px-20">
              <li class="list-inline-item g-mr-5">
                <a class="u-link-v5 g-color-white g-color-primary--hover" href="<?php print base_url($lg);?>">Home</a>
                <i class="g-color-white-opacity-0_5 g-ml-5">/</i>
              </li>
              <li class="list-inline-item g-color-primary g-font-weight-400">
                <span>Recipes</span>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- End Promo Block -->

      <!-- Products -->
      <div class="container">
        <div class="row">
          <!-- Content -->
          <div class="col-md-9 order-md-2">
            <div class="g-pl-15--lg">
              <!-- Filters -->
              <div class="d-flex justify-content-end align-items-center g-brd-bottom g-brd-gray-light-v4 g-pt-40 g-pb-20">
                <!-- Show -->
                <div class="g-mr-60">
                  <h2 class="h6 align-middle d-inline-block g-font-weight-400 text-uppercase g-pos-rel g-top-1 mb-0">Show:</h2>

                  <!-- Secondary Button -->
                  <div class="d-inline-block btn-group g-line-height-1_2">
                    <button type="button" class="btn btn-secondary dropdown-toggle h6 align-middle g-brd-none g-color-gray-dark-v5 g-color-black--hover g-bg-transparent text-uppercase g-font-weight-300 g-font-size-12 g-pa-0 g-pl-10 g-ma-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      9
                    </button>
                    <div class="dropdown-menu rounded-0">
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">All</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">9</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">18</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">36</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">72</a>
                    </div>
                  </div>
                  <!-- End Secondary Button -->
                </div>
                <!-- End Show -->

                <!-- Sort By -->
                <div class="g-mr-60">
                  <h2 class="h6 align-middle d-inline-block g-font-weight-400 text-uppercase g-pos-rel g-top-1 mb-0">Sort by:</h2>

                  <!-- Secondary Button -->
                  <div class="d-inline-block btn-group g-line-height-1_2">
                    <button type="button" class="btn btn-secondary dropdown-toggle h6 align-middle g-brd-none g-color-gray-dark-v5 g-color-black--hover g-bg-transparent text-uppercase g-font-weight-300 g-font-size-12 g-pa-0 g-pl-10 g-ma-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Most Recent
                    </button>
                    <div class="dropdown-menu rounded-0">
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Most Recent</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Most Popular</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Easiest to cook</a>
                      <a class="dropdown-item g-color-gray-dark-v4 g-font-weight-300" href="#!">Quickest to cook</a>
                    </div>
                  </div>
                  <!-- End Secondary Button -->
                </div>
                <!-- End Sort By -->

                
              </div>
              <!-- End Filters -->

              <!-- Products -->
              <div class="row g-pt-30 g-mb-50">
                
                <?php foreach($recipes as $recipe) {?>
                <div class="col-6 col-lg-4 g-mb-30">                  
                  <!-- Product -->
                  <figure class="g-pos-rel g-mb-20">
                    <a href="<?php print $recipe['link'];?>">
                      <img class="img-fluid" src="<?php print $recipe['image'];?>" alt="<?php print $recipe['title'];?>">                    
                    </a>
                  </figure>

                  <div class="media">
                    <!-- Product Info -->
                    <div class="d-flex flex-column">
                      <h4 class="h6 g-color-black mb-1">
                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="<?php print $recipe['link'];?>">
                          <?php print $recipe['title'];?>
                        </a>
                      </h4>
                      <span class="d-inline-block g-color-gray-dark-v5 g-font-size-13"><?php print $recipe['owner'];?></span>                      
                    </div>
                    <!-- End Product Info -->

                    <!-- Products Icons -->
                    <ul class="list-inline media-body text-right">                      
                      <li class="list-inline-item align-middle mx-0">
                        <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-15 rounded-circle" href="#!"
                           data-toggle="tooltip"
                           data-placement="top"
                           title="Save Recipe">
                          <i class="icon-medical-022 u-line-icon-pro"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- End Products Icons -->
                  </div>
                  <!-- End Product -->
                </div>
                <?php } ?>

                
              </div>
              <!-- End Products -->

              <hr class="g-mb-60">

              <!-- Pagination -->
              <nav class="g-mb-100" aria-label="Page Navigation">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item hidden-down">
                    <a class="active u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--active g-color-white g-bg-primary--active g-font-size-12 rounded-circle g-pa-5" href="#!">1</a>
                  </li>
                  <li class="list-inline-item hidden-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="#!">2</a>
                  </li>
                  <li class="list-inline-item g-hidden-xs-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="#!">3</a>
                  </li>
                  <li class="list-inline-item hidden-down">
                    <span class="g-width-30 g-height-30 g-color-gray-dark-v5 g-font-size-12 rounded-circle g-pa-5">...</span>
                  </li>
                  <li class="list-inline-item g-hidden-xs-down">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5" href="#!">15</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="u-pagination-v1__item g-width-30 g-height-30 g-brd-gray-light-v3 g-brd-primary--hover g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle g-pa-5 g-ml-15" href="#!" aria-label="Next">
                      <span aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                      </span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                  <li class="list-inline-item float-right">
                    <span class="u-pagination-v1__item-info g-color-gray-dark-v4 g-font-size-12 g-pa-5">Page 1 of 15</span>
                  </li>
                </ul>
              </nav>
              <!-- End Pagination -->
            </div>
          </div>
          <!-- End Content -->

          <!-- Filters -->
          <div class="col-md-3 order-md-1 g-brd-right--lg g-brd-gray-light-v4 g-pt-40">
            <div class="g-pr-15--lg g-pt-60">
              <!-- Categories -->
              <div class="g-mb-30">
                <h3 class="h5 mb-3">Categories</h3>

                <ul class="list-unstyled">
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">BBQ & Grill
                      <span class="float-right g-font-size-12">511</span>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Snacks
                      <span class="float-right g-font-size-12">44</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Seafood
                      <span class="float-right g-font-size-12">398</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Dessert
                      <span class="float-right g-font-size-12">56</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Dinner
                      <span class="float-right g-font-size-12">71</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Breakfast
                      <span class="float-right g-font-size-12">943</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Lunch
                      <span class="float-right g-font-size-12">109</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Healthy
                      <span class="float-right g-font-size-12">88</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Pasta
                      <span class="float-right g-font-size-12">111</span></a>
                  </li>
                  <li class="my-3">
                    <a class="d-block u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Curry
                      <span class="float-right g-font-size-12">5</span></a>
                  </li>
                </ul>
              </div>
              <!-- End Categories -->

              
            </div>
          </div>
          <!-- End Filters -->
        </div>
      </div>
      <!-- End Products -->


    </main>      

<?php

# No Contact Footer
include("_no-contact-footer.php");

# Footer
include("_footer.php"); 

?>      