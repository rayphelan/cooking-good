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
        
        <h2 class="g-font-weight-700 g-font-size-50 text-uppercase g-color-white"><?php print $profile_name;?></h2>
      </div>
      <!-- Promo Block Content -->
    </section>
    <!-- End Promo Block -->

    


    <!-- Profile -->
    <section class="g-mb-100 g-mt-50">
      <div class="container">
        <div class="row">
          
          <!-- Profile Sidebar -->
          <div class="col-lg-3 g-mb-50 g-mb-0--lg">
            <!-- User Image -->
            <div class="u-block-hover g-pos-rel">
              
              <figure>
                <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="http://via.placeholder.com/400x450" alt="Image Description">
              </figure>

              <!-- Figure Caption -->
              <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
                <div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                  <!-- Figure Social Icons -->
                  <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
                    <li class="list-inline-item align-middle g-mx-7">
                      <a class="u-icon-v1 u-icon-size--md g-color-white" href="#!" title="Edit Profile Photo">
                        <i class="fa fa-edit"></i>
                      </a>
                    </li>                    
                  </ul>
                  <!-- End Figure Social Icons -->
                </div>
              </figcaption>
              <!-- End Figure Caption -->

              <!-- User Info -->
              <span class="g-pos-abs g-top-20 g-left-0">
                  <a class="btn btn-sm u-btn-primary rounded-0" href="#!"><?php print $profile_name;?></a>                  
                </span>
              <!-- End User Info -->

            </div>
            <!-- End User Image -->
            <!-- Sidebar Navigation -->
            <div class="list-group list-group-border-0 g-mb-40">
              <!-- Overall -->
              <a href="#" class="list-group-item justify-content-between active">
                <span><i class="icon-home g-pos-rel g-top-1 g-mr-8"></i> Overall</span>
                
              </a>
              <!-- End Overall -->

              <!-- Profile -->
              <a href="#" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-cursor g-pos-rel g-top-1 g-mr-8"></i> Public Profile</span>
              </a>
              <!-- End Profile -->


              <!-- My Recipes -->
              <a href="#" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-layers g-pos-rel g-top-1 g-mr-8"></i> My Recipes</span>                
              </a>
              <!-- End My Recipes -->

              <!-- Saved Recipes -->
              <a href="#" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-heart g-pos-rel g-top-1 g-mr-8"></i> Saved Recipes</span>
              </a>
              <!-- End Saved Recipes -->              

              <!-- Comments -->
              <a href="#" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-bubbles g-pos-rel g-top-1 g-mr-8"></i> Comments</span>
                <span class="u-label g-font-size-11 g-bg-pink g-rounded-20 g-px-8">24</span>
              </a>
              <!-- End Comments -->
              

              <!-- Settings -->
              <a href="#" class="list-group-item list-group-item-action justify-content-between">
                <span><i class="icon-settings g-pos-rel g-top-1 g-mr-8"></i> Settings</span>                
              </a>
              <!-- End Settings -->
            </div>
            <!-- End Sidebar Navigation -->
          </div>
          <!-- End Profile Sidebar -->



<!-- Profile Content -->
          <div class="col-lg-9">
            
            <!-- Projects & Activities Panels -->
            <div class="row g-mb-40">
              <div class="col-lg-6 g-mb-40 g-mb-0--lg">
                
                <!-- Latest Projects Panel -->
                <div class="card border-0">
                  <!-- Panel Header -->
                  <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                    <h3 class="h6 mb-0">
                        <i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> My Recipes
                      </h3>
                    
                  </div>
                  <!-- End Panel Header -->

                  <!-- Panel Body -->
                  <div class="card-block u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0">
                    <ul class="list-unstyled">
                      
                      <?php for($n=1; $n<=5; ++$n) {?>
                      <li class="media g-brd-around g-brd-gray-light-v4 g-brd-left-3 g-brd-blue-left rounded g-pa-20 g-mb-10">
                        <div class="d-flex g-mt-2 g-mr-15">
                          <img class="g-width-40 g-height-40 rounded-circle" src="http://via.placeholder.com/100x100" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <div class="d-flex justify-content-between">
                            <h5 class="h6 g-font-weight-600 g-color-black">Roast Beef</h5>
                            <span class="small text-nowrap g-color-blue">2 days ago</span>
                          </div>
                          <p>Curabitur hendrerit dolor sit amet consectetur. Adipiscing elitut leosit amet, consectetur eleifend.</p>
                          <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">Meat</span>
                          <span class="u-label u-label--sm g-bg-gray-light-v4 g-color-main g-rounded-20 g-px-10">Roast</span>
                          
                        </div>
                      </li>
                      <?php } ?>
                      
                    </ul>
                  </div>
                  <!-- End Panel Body -->
                </div>
                <!-- End Latest Projects Panel -->
              </div>

              <div class="col-lg-6">
                <!-- Activities Panel -->
                <div class="card border-0">
                  <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
                    <h3 class="h6 mb-0">
                        <i class="icon-directions g-pos-rel g-top-1 g-mr-5"></i> Saved Recipes
                      </h3>
                    
                  </div>

                  <div class="card-block  u-info-v1-1 g-bg-white-gradient-v1--after g-height-400 g-pa-0">
                    <ul class="list-unstyled">
                      
                      <?php for($n=1; $n<=5; ++$n) {?>
                      <li class="d-flex justify-content-start g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-10">
                        <div class="g-mt-2">
                          <img class="g-width-50 g-height-50 rounded-circle" src="http://via.placeholder.com/100x100" alt="Image Description">
                        </div>
                        <div class="align-self-center g-px-10">
                          <h5 class="h6 g-font-weight-600 g-color-black g-mb-3">
                              <span class="g-mr-5">Sunday Chicken</span>
                              
                            </h5>
                          <p class="m-0">Nulla ipsum dolor sit amet adipiscing</p>
                        </div>                      
                      </li>
                      <?php } ?>
                      
                    </ul>
                  </div>
                </div>
                <!-- End Activities Panel -->
              </div>
            </div>
            <!-- End Projects & Activities Panels -->

           
          </div>
          <!-- End Profile Content -->
        </div>
      </div>
    </section>
    <!-- End Profile -->




    </main>      

<?php

# No Contact Footer
include("_no-contact-footer.php");

# Footer
include("_footer.php"); 

?>      