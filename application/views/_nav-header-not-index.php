<header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance u-header--change-logo"
              data-header-fix-moment="0">
        <div class="u-header__section g-bg-black-opacity-0_2 g-transition-0_3 g-py-7 g-py-23--md"
             data-header-fix-moment-exclude="g-bg-black-opacity-0_5 g-py-23--md"
             data-header-fix-moment-classes="u-shadow-v19 g-bg-white g-py-15--md">
          <nav class="navbar navbar-expand-lg g-py-0">
            <div class="container g-pos-rel">
              

              <!-- Logo -->
              <a href="<?php print base_url($lg."/home");?>" class="navbar-brand u-header__logo"
                 data-type="static">
                <img class="u-header__logo-img u-header__logo-img--main g-width-90" src="<?php print base_url('assets/images/logo/logo.png');?>" alt="<?php print WEBSITE_TITLE;?>">
                <img class="u-header__logo-img g-width-90" src="<?php print base_url('assets/images/logo/logo-dark.png');?>" alt="<?php print WEBSITE_TITLE;?>">
              </a>
              <!-- End Logo -->


              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row" id="navBar">
                <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-letter-spacing-1 g-font-size-12 g-pt-20 g-pt-0--lg ml-auto">
                  <li class="nav-item g-mr-15--lg g-mb-7 g-mb-0--lg">
                    <a href="<?php print base_url($lg."/home#home-section");?>" class="nav-link p-0">Home</a>
                  </li>                  
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="<?php print base_url($lg."/home#selected-recipes");?>" class="nav-link p-0">Highlights</a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="<?php print base_url($lg."/home#category-section");?>" class="nav-link p-0">Categories</a>
                  </li>                  
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="<?php print base_url($lg."/recipes");?>" class="nav-link p-0 <?php if(PAGE=='recipes') print 'active';?>">Recipes</a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="<?php print base_url($lg."/contact");?>" class="nav-link p-0 <?php if(PAGE=='contact') print 'active';?>">Contact</a>
                  </li>
                  
                  <?php if(!$_SESSION['CG_user_id']) {?>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="<?php print base_url($lg."/login");?>" class="nav-link p-0 <?php if(PAGE=='login') print 'active';?>">Log in</a>
                  </li>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg">
                    <a href="<?php print base_url($lg."/register");?>" class="nav-link p-0 <?php if(PAGE=='register') print 'active';?>">Register</a>
                  </li>
                  <?php } ?>

                  <?php if($_SESSION['CG_user_id']) {?>
                  <li class="nav-item g-mx-15--lg g-mb-7 g-mb-0--lg dropdown">
                  
                  <div class=" g-mb-0 g-mb-0--md">
                    <span class="d-block g-color-primary--hover g-cursor-pointer g-mr-minus-5 g-pa-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      My Account
                    </span>
                    <div class="dropdown-menu dropdown-menu-right rounded-0 g-mt-10">
                      <a class="dropdown-item g-px-10" href="<?php print base_url($lg."/");?>">
                        Upload Recipe
                      </a>
                      <a class="dropdown-item g-px-10" href="<?php print base_url($lg."/profile/me");?>">
                        My Profile
                      </a>

                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item g-px-10" href="<?php print base_url($lg."/logout");?>">
                        Logout
                      </a>
                    </div>
                  </div>                                   
                                            
                  </li>
                  <?php } ?>  

                </ul>
              </div>
              <!-- End Navigation -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler btn btn-sm u-btn-primary u-btn-skew u-btn-hover-v2-1 g-font-weight-600 g-letter-spacing-0_5 text-uppercase g-brd-2 g-rounded-0 g-pos-abs g-top-15 g-right-0" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="u-btn-skew__inner">
                  MENU
                </span>
              </button>
              <!-- End Responsive Toggle Button -->
            </div>
          </nav>
        </div>
      </header>


      