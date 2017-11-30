
    <!-- JS Global Compulsory -->
    <script src="<?php print base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/jquery-migrate/jquery-migrate.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/jquery.easing/js/jquery.easing.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/popper.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/bootstrap/bootstrap.min.js');?>"></script>

    <!-- JS Implementing Plugins -->
    <script src="<?php print base_url('assets/vendor/appear.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/slick-carousel/slick/slick.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/dzsparallaxer/dzsparallaxer.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/dzsparallaxer/dzsscroller/scroller.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/dzsparallaxer/advancedscroller/plugin.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/fancybox/jquery.fancybox.js');?>"></script>

    <!-- JS Unify -->
    <script src="<?php print base_url('assets/js/hs.core.js');?>"></script>
    <script src="<?php print base_url('assets/js/components/hs.header.js');?>"></script>
    <script src="<?php print base_url('assets/js/helpers/hs.hamburgers.js');?>"></script>
    <script src="<?php print base_url('assets/js/components/hs.scroll-nav.js');?>"></script>
    <script src="<?php print base_url('assets/js/components/hs.counter.js');?>"></script>
    <script src="<?php print base_url('assets/js/components/hs.carousel.js');?>"></script>
    <script src="<?php print base_url('assets/js/components/hs.cubeportfolio.js');?>"></script>
    <script src="<?php print base_url('assets/js/components/hs.popup.js');?>"></script>
    <script src="<?php print base_url('assets/js/components/hs.go-to.js');?>"></script>

    <!-- JS Revolution Slider -->
    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js');?>"></script>

    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js');?>"></script>

    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js');?>"></script>
    <script src="<?php print base_url('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js');?>"></script>

    <!-- JS Customization -->
    <script src="<?php print base_url('assets/js/custom.js');?>"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');
      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700,
          easing: 'easeOutExpo'
        });

        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');
      });

      var tpj = jQuery;

      var revapi1014;
      tpj(document).ready(function () {
        if (tpj("#rev_slider_1014_1").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev_slider_1014_1");
        } else {
          revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
            sliderType: "standard",
            jsFileLocation: "revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
              keyboardNavigation: "off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation: "off",
              mouseScrollReverse: "default",
              onHoverStop: "off",
              touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              },
              arrows: {
                style: "hermes",
                enable: true,
                hide_onmobile: true,
                hide_under: 768,
                hide_onleave: false,
                tmp: '<div class="tp-arr-allwrapper"><div class="tp-arr-imgholder"></div><div class="tp-arr-titleholder">{{title}}</div></div>',
                left: {
                  h_align: "left",
                  v_align: "center",
                  h_offset: 0,
                  v_offset: 0
                },
                right: {
                  h_align: "right",
                  v_align: "center",
                  h_offset: 0,
                  v_offset: 0
                }
              }
            },
            responsiveLevels:[1240,1024,778,778],
            gridwidth:[1240,1024,778,480],
            gridheight:[600,500,400,300],
            lazyType: 'smart',
            scrolleffect: {
              fade: "on",
              grayscale: "on",
              on_slidebg: "on",
              on_parallax_layers: "on",
              direction: "top",
              multiplicator_layers: "1.4",
              tilt: "10",
              disable_on_mobile: "off",
            },
            parallax: {
              type: "scroll",
              origo: "slidercenter",
              speed: 400,
              levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
            },
            shadow: 0,
            spinner: "off",
            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0px",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }

        RsTypewriterAddOn(tpj, revapi1014);
      });
    </script>
  </body>
</html>