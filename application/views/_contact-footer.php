<footer id="contact-section" class="g-pos-rel">
        <!-- Content -->
        <div class="g-bg-size-cover g-bg-img-hero u-bg-overlay g-bg-black-opacity-0_7--after g-pt-120 g-pb-70" style="background-image: url(<?php print base_url('assets/images/parallax/4.jpg');?>);">
          <div class="container u-bg-overlay__inner">
            <div class="row align-items-center">
              <div class="col-md-4 g-mb-50">
                <h3 class="h4 g-color-white mb-4">Contact Info</h3>


                <!-- Icon Block -->
                <div class="media align-items-center mb-4">
                  <div class="d-flex">
                    <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                      <i class="icon-hotel-restaurant-235 u-line-icon-pro"></i>
                    </span>
                  </div>
                  <div class="media-body">
                    <p class="g-color-white-opacity-0_6 mb-0">Co. Longford, Ireland</p>
                  </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="media align-items-center mb-4">
                  <div class="d-flex">
                    <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                      <i class="icon-communication-033 u-line-icon-pro"></i>
                    </span>
                  </div>
                  <div class="media-body">
                    <p class="g-color-white-opacity-0_6 mb-0">+353 (0) 85 722 8681</p>
                  </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="media align-items-center g-mb-60">
                  <div class="d-flex">
                    <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                      <i class="icon-communication-062 u-line-icon-pro"></i>
                    </span>
                  </div>
                  <div class="media-body">
                    <p class="g-color-white-opacity-0_6 mb-0">x17119847@student.ncirl.ie</p>
                  </div>
                </div>
                <!-- End Icon Block -->                

              </div>

              <div class="col-md-8 g-mb-50">
                <div class="g-brd-around g-brd-white-opacity-0_6 g-px-45 g-py-60">
                  <div class="row">
                    <div class="col-md-4 g-mb-30">
                      <h2 class="h1 g-color-white">Contact Us</h2>
                    </div>

                    <div class="col-md-8 g-mb-30">
                      <!-- Contact Form -->
                      <form id="contactForm" action="<?php print base_url($lg."/contact/submit");?>" method="post" target="iframe">

                        <div class="mb-3">
                          <select id="mood" name="mood" class="col-md-12 form-control g-brd-none g-brd-bottom g-brd-white g-bg-transparent rounded-0 g-px-0 mb-2 g-color-gray-dark-v5">
                            <option value="" selected="">Please select your mood</option>
                            <option value="happy">Happy</option>
                            <option value="sad">Sad</option>
                            <option value="angry">Angry</option>
                            <option value="neutral">Neutral</option>
                            <option value="frustrated">Frustrated</option>
                          </select>
                        </div>

                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <input class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 rounded-0 g-py-13 g-px-0 mb-2" type="text" placeholder="First Name" name="first_name" id="first_name">
                          </div>

                          <div class="mb-3 col-md-6">
                            <input class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 rounded-0 g-py-13 g-px-0 mb-2" type="text" placeholder="Last Name" name="last_name" id="last_name">
                          </div>
                        </div>

                        <div class="mb-3">
                          <input class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 rounded-0 g-py-13 g-px-0 mb-2" type="email" placeholder="Email" name="mail" id="mail">
                        </div>

                        <div class="mb-4">
                          <textarea class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 g-resize-none rounded-0 g-py-13 g-px-0 mb-5" rows="5" placeholder="Message" name="message" id="message"></textarea>
                        </div>

                        <div class="row">
                          <div class="col-md-6 mb-3 g-color-gray-light-v5">
                            <p class="g-color-gray-light-v5">Do you want a reply?</p>
                            <label for="reply_yes">Yes</label>
                            <input type="radio" name="reply" value="yes" id="reply_yes" checked="checked">
                            <label for="reply_no">No</label>
                            <input type="radio" name="reply" value="no" id="reply_no">
                          </div>                          
                          <div class="col-md-6 mb-3 g-color-gray-light-v5">
                            <p class="g-color-gray-light-v5">Have you eaten?</p>
                            <label for="eaten_yes">Yes</label>
                            <input type="radio" name="eaten" value="yes" id="eaten_yes" checked="checked">
                            <label for="eaten_no">No</label>
                            <input type="radio" name="eaten" value="no" id="eaten_no">
                          </div>                          
                        </div>

                        <div class="mb-3">                          
                          <input type="checkbox" name="love" id="love" value="love"> <label for="love" class="g-color-gray-light-v5">Sent with love</label>
                        </div>

                        <div class="mb-3">
                          <div class="g-recaptcha" data-sitekey="6Le2mCkTAAAAADZRfFcgK-o1NuMmyA5bIxUxCaRt"></div>
                        </div>
                        
                        <button class="btn u-btn-primary g-bg-secondary g-color-primary g-color-white--hover g-bg-primary--hover g-font-weight-600 g-font-size-12 g-rounded-30 g-py-15 g-px-35" type="button" role="button" id="contactButton">Send Message</button>

                      </form>
                      <iframe name="iframe" scrolling="no" frameborder="0" width="0" height="0" src=""></iframe>
                      <!-- End Contact Form -->

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Content -->

        <!-- Go To Top -->
        <a class="js-go-to text-center g-color-main g-color-primary--hover g-left-50x g-ml-minus-100" href="#!"
           data-type="absolute"
           data-position='{
             "bottom": 65
           }'
           data-offset-top="400"
           data-compensation="#js-header"
           data-show-effect="fadeInUp">
          <svg version="1.1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="208px" height="50px">
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M111.042,0h-0.085C81.962,0.042,50.96,42.999,6,42.999c-6,0-6,0-6,0v1h214v-1v-0.015C169.917,42.349,139.492,0.042,111.042,0z"/>
          </svg>
          <i class="g-font-size-20 g-pos-abs g-bottom-20 g-left-50x g-ml-2 fa fa-angle-double-up"></i>
        </a>
        <!-- End Go To Top -->

        <!-- Copyright -->
        <div class="container text-center g-py-30">
          <p class="g-font-size-13 mb-0">&#169; 2017 Raymond Phelan | NCI Student No.: 17119847</p>
        </div>
        <!-- End Copyright -->
      </footer>

