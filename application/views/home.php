<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("inc.head.php"); ?>
    </head>
    <body>
        <!-- PRELOADER STARTS
            ========================================================================= --> 
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>
        <!-- /. PRELOADER ENDS
            ========================================================================= -->
        <!-- HEADER STARTS
            ========================================================================= -->
        <div class="navigation fill-black normal normal-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                        <div class="logo">
                            <a href="<?php print base_url();?>">
                                <img src="<?php print base_url("assets/images/logos/logo.png");?>" class="img-responsive" alt="The Chef Affairs">
                            </a>                            
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-4">
                        <ul class="links hidden-md hidden-sm hidden-xs">
                            <li><a href="<?php print base_url($lg);?>"><?php print $TR['home'];?></a></li>
                            <li><a href="#services"><?php print $TR['services'];?></a></li>
                            <li><a href="#about"><?php print $TR['about'];?></a></li>
                            <li><a href="#menus"><?php print $TR['menus'];?></a></li>
                            <li><a href="#testimonials"><?php print $TR['testimonials'];?></a></li>                            
                            <li><a href="#contact"><?php print $TR['contacts'];?></a></li>                             
                            <li><a href="<?php print base_url("en");?>"><img src="<?php print base_url("assets/img/en.jpg");?>" alt="English"></a></li>
                            <li><a href="<?php print base_url("pt");?>"><img src="<?php print base_url("assets/img/pt.gif");?>" alt="Português"></a></li>                          
                        </ul>
                        <ul class="links hidden-lg">
                            <li class="hidden-lg-down"><a id="trigger-overlay"><i class="icon-menu icons"></i></a>                           
                        </li>
                    </div>
                </div>                
            </div>
        </div>
        <!-- /. HEADER ENDS
            ========================================================================= -->
        <!-- NAVIGATION STARTS
            ========================================================================= -->               
        <div class="overlay overlay-genie" data-steps="m 701.56545,809.01175 35.16718,0 0,19.68384 -35.16718,0 z;m 698.9986,728.03569 41.23353,0 -3.41953,77.8735 -34.98557,0 z;m 687.08153,513.78234 53.1506,0 C 738.0505,683.9161 737.86917,503.34193 737.27015,806 l -35.90067,0 c -7.82727,-276.34892 -2.06916,-72.79261 -14.28795,-292.21766 z;m 403.87105,257.94772 566.31246,2.93091 C 923.38284,513.78233 738.73561,372.23931 737.27015,806 l -35.90067,0 C 701.32034,404.49318 455.17312,480.07689 403.87105,257.94772 z;M 51.871052,165.94772 1362.1835,168.87863 C 1171.3828,653.78233 738.73561,372.23931 737.27015,806 l -35.90067,0 C 701.32034,404.49318 31.173122,513.78234 51.871052,165.94772 z;m 52,26 1364,4 c -12.8007,666.9037 -273.2644,483.78234 -322.7299,776 l -633.90062,0 C 359.32034,432.49318 -6.6979288,733.83462 52,26 z;m 0,0 1439.999975,0 0,805.99999 -1439.999975,0 z">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1440 806" preserveAspectRatio="none">
                <path class="overlay-path" d="m 701.56545,809.01175 35.16718,0 0,19.68384 -35.16718,0 z"/>
            </svg>
            <button type="button" class="overlay-close overlay-close-btn">Close</button>   
            <nav>
                <ul>
                    <li><a href="<?php print base_url($lg);?>" class="overlay-close-btn"><?php print $TR['home'];?></a></li>
                    <li><a href="#services" class="overlay-close-btn"><?php print $TR['services'];?></a></li>
                    <li><a href="#about" class="overlay-close-btn"><?php print $TR['about'];?></a></li>
                    <li><a href="#menus" class="overlay-close-btn"><?php print $TR['menus'];?></a></li>
                    <li><a href="#testimonials" class="overlay-close-btn"><?php print $TR['testimonials'];?></a></li>                    
                    <li><a href="#contact" class="overlay-close-btn"><?php print $TR['contacts'];?></a></li>  
                    <li><a href="<?php print base_url("en");?>"><img src="<?php print base_url("assets/img/en.jpg");?>" alt="English"></a></li>
                    <li><a href="<?php print base_url("pt");?>"><img src="<?php print base_url("assets/img/pt.gif");?>" alt="Português"></a></li>                                  
                </ul>
            </nav>
        </div>
        <!-- /. NAVIGATION ENDS
            ========================================================================= -->
        <!-- SLIDER STARTS
            ========================================================================= -->       
        <div class="slider">
            <div id="rev_slider_204_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="fullscreen-button44" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.1.1RC auto mode -->
                <div id="rev_slider_204_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.1.1RC">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-681" data-transition="zoomin" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="The Chef Affairs" data-description="">
                            <!-- MAIN IMAGE -->                         
                            <img src="<?php print base_url("assets/images/slider/slider-thechefaffairs-1.jpg");?>" alt="The Chef Affairs"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="140" data-rotatestart="0" data-rotateend="0" data-offsetstart="500 100" data-offsetend="-500 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" 
                                id="slide-681-layer-1" 
                                data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-40']" 
                                data-fontsize="['40','40','20','20']"
                                data-lineheight="['60','60','60','35']"                              
                                data-height="none"
                                data-color="#ffffff"
                                data-letter-spacing="normal"
                                data-whitespace="nowrap"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="500" 
                                data-splitin="chars" 
                                data-splitout="none" 
                                data-elementdelay="0.05" 
                                data-responsive_offset="on" 
                                style="z-index: 2; white-space: nowrap; letter-spacing:10px; font-weight:bold;"><?php print $slider_title;?>
                            </div>
                            <!-- LAYER NR. 2 -->                            
                            <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0" 
                                id="slide-681-layer-2" 
                                data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"  
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-fontsize="['24','24','24','24']"
                                data-lineheight="['30','30','30','30']"
                                data-width="none"
                                data-height="none"
                                data-color="#ffff00"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_out="x:inherit;y:inherit;" 
                                data-start="800" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                style="z-index: 3; white-space: nowrap; text-transform:uppercase; letter-spacing:3px; font-weight:300;"><?php print $slider_description;?>
                            </div>
                            
                        </li>
                        <!-- /. SLIDE  -->
                        <!-- SLIDE  -->
                        <li data-index="rs-682" data-transition="zoomin" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="The Chef Affairs" data-description="">
                            <!-- MAIN IMAGE -->                         
                            <img src="<?php print base_url("assets/images/slider/slider-thechefaffairs-2.jpg");?>"  alt="The Chef Affairs"  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="130" data-rotatestart="0" data-rotateend="0" data-offsetstart="500 100" data-offsetend="-500 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0" 
                                id="slide-682-layer-1" 
                                data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-40']" 
                                data-fontsize="['40','40','20','20']"
                                data-lineheight="['60','60','60','35']"                              
                                data-height="none"
                                data-color="#ffffff"
                                data-letter-spacing="normal"
                                data-whitespace="nowrap"
                                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                data-start="500" 
                                data-splitin="chars" 
                                data-splitout="none" 
                                data-elementdelay="0.05" 
                                data-responsive_offset="on"
                                style="z-index: 2; white-space: nowrap; letter-spacing:10px; font-weight: bold;"><?php print $slider_title;?>
                            </div>
                            <!-- LAYER NR. 2 -->                            
                            <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0" 
                                id="slide-682-layer-2" 
                                data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"  
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-fontsize="['24','24','24','24']"
                                data-lineheight="['30','30','30','30']"
                                data-width="none"
                                data-height="none"
                                data-color="#ffff00"
                                data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                data-mask_out="x:inherit;y:inherit;" 
                                data-start="800" 
                                data-splitin="none" 
                                data-splitout="none" 
                                data-responsive_offset="on" 
                                style="z-index: 3; white-space: nowrap; text-transform:uppercase; letter-spacing:3px; font-weight:300;"><?php print $slider_description;?>
                            </div>                            
                        </li>
                        <!-- /. SLIDE  -->
                                              
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="height: 3px; background-color: rgba(179, 149, 0, 1);"></div>
                </div>
            </div>
        </div>
        <!-- /. SLIDER ENDS
            ========================================================================= -->
        <!-- HOME INTRO STARTS
            ========================================================================= -->
        <div class="container home-intro">            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">          
                    <div class="icon">
                        <img src="<?php print base_url("assets/images/logos/logo2.png");?>" width="100">
                    </div>          
                    <h1><?php print $welcome_title;?></span></h1>
                    <div class="description"><?php print $welcome_description;?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. HOME INTRO ENDS
            ========================================================================= -->
        <!-- AMAZING FEATURES STARTS
            ========================================================================= -->
        <div id="services"><p>&nbsp;</p></div>
        <div class="parallax-1 amazing-features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1><?php print $services_title;?></h1>
                        <div class="description">
                            <?php print $services_description;?>
                        </div>                                            
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 block">
                        <div class="icon">
                            <a href="<?php print base_url("$lg/section/view/4");?>">
                                <img src="<?php print base_url("assets/images/logos/logo-60x60.png");?>" alt="<?php print $service_tag1;?>" title="<?php print $service_tag1;?>">
                            </a>
                        </div>
                        <div class="caption">
                            <a href="<?php print base_url("$lg/section/view/4");?>"><?php print $service1_title;?></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 block">
                        <div class="icon">
                            <a href="<?php print base_url("$lg/section/view/6");?>">
                                <img src="<?php print base_url("assets/images/logos/logo-60x60.png");?>" alt="<?php print $service_tag2;?>" title="<?php print $service_tag2;?>">
                            </a>
                        </div>
                        <div class="caption">
                            <a href="<?php print base_url("$lg/section/view/6");?>"><?php print $service2_title;?></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 block">
                        <div class="icon">
                            <a href="<?php print base_url("$lg/section/view/5");?>">
                                <img src="<?php print base_url("assets/images/logos/logo-60x60.png");?>" alt="<?php print $service_tag3;?>" title="<?php print $service_tag3;?>">
                            </a>
                        </div>
                        <div class="caption">
                            <a href="<?php print base_url("$lg/section/view/5");?>"><?php print $service3_title;?></a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <!-- /. AMAZING FEATURES ENDS
            ========================================================================= -->   
        <!-- ABOUS US STARTS
            ========================================================================= --> 
        <div id="about"><p>&nbsp;</p></div>      
        <div class="container-fluid what-we-do">
            <div class="row no-gutter-6">
                
                <div class="col-lg-8 col-lg-offset-2">
                    <h1><?php print $about_title;?></h1>
                    <div class="description">
                        
                        <img src="<?php print $about_image;?>" class="about-us-pic pull-right" alt="<?php print $about_tag;?>" title="<?php print $about_tag;?>">
                        
                        <!-- Short Version -->
                        <div class="hidden-lg hidden-md hidden-sm">
                            <?php print $about_short_description;?>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                                <?php print $TR['read_more'];?>
                            </button>
                        </div>
                        
                        <!-- Full Version -->
                        <div class="hidden-xs">
                            <?php print $about_description;?>
                        </div> 
                    </div>
                </div>

            </div>
        </div>

        <!-- About Us Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h1 class="modal-title" id="myModalLabel"><?php print $about_title;?></h1>
                    </div>
                    <div class="modal-body description">
                        <img src="<?php print $about_image;?>" class="about-us-pic pull-right" alt="<?php print $about_tag;?>" title="<?php print $about_tag;?>">
                        <?php print $about_description;?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><?php print $TR['close'];?></button>                        
                    </div>
                </div>
            </div>
        </div>

        <!-- /. ABOUT US ENDS
            ========================================================================= -->
        <!-- MENU STARTS
            ========================================================================= -->
        <div id="menus"><p>&nbsp;</p></div>
        <div class="container-fluid portfolio">
            <div class="row no-gutter-3">
                <div class="portfolio-detail text-center col-lg-8 col-lg-offset-2">
                    
                    <h1><span><?php print $menu_title;?></span></h1>
                    <p>&nbsp;</p>
                    <div class="description"><?php print $menu_description;?></div>
                    <p>&nbsp;</p>
                </div>                

                <!-- Picture Starts 1-->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="picture">
                        <a class="" href="<?php print base_url("$lg/menus/menu/1");?>" title="<?php print $menu_tag[1];?>">
                            <?php /*
                            <img src="<?php print base_url("assets/uploads/$menu1_img");?>" class="img-responsive" alt="<?php print $menu1_title;?>">
                            */ ?>
                            <div class="menu-bgs" style="
                                background: url(<?php print base_url("assets/uploads/$menu1_img");?>) center no-repeat;
                                background-size: cover;
                                width:100%;
                                <?php /* height:400px; */ ?>
                                margin-bottom: 20px;
                            "></div>
                            <!-- Picture Overlay Starts -->                                                 
                            <div class="text-overlay text-center">
                                <h1><?php print $menu1_title;?></h1>                            
                            </div>
                            <!-- Picture Overlay Ends -->
                        </a>
                    </div>
                </div>
                <!-- Picture Ends -->
                <!-- Picture Starts 2-->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="picture">
                        <a class="" href="<?php print base_url("$lg/menus/menu/2");?>" title="<?php print $menu_tag[2];?>">    
                            <?php /*
                            <img src="<?php print base_url("assets/uploads/$menu2_img");?>" class="img-responsive" alt="<?php print $menu2_title;?>">
                            */ ?>
                            <div class="menu-bgs" style="
                                background: url(<?php print base_url("assets/uploads/$menu2_img");?>) center no-repeat;
                                background-size: cover;
                                width:100%;
                                <?php /* height:400px; */ ?>
                                margin-bottom: 20px;
                            "></div>
                            <!-- Picture Overlay Starts -->                                                 
                            <div class="text-overlay text-center">
                                <h1><?php print $menu2_title;?></h1>                            
                            </div>
                            <!-- Picture Overlay Ends -->
                        </a>
                    </div>
                </div>
                <!-- Picture Ends -->
                <!-- Picture Starts 3-->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="picture">
                        <a class="" href="<?php print base_url("$lg/menus/menu/3");?>" title="<?php print $menu_tag[3];?>">   
                            <?php /*
                            <img src="<?php print base_url("assets/uploads/$menu3_img");?>" class="img-responsive" alt="<?php print $menu3_title;?>">
                            */ ?>
                            <div class="menu-bgs" style="
                                background: url(<?php print base_url("assets/uploads/$menu3_img");?>) center no-repeat;
                                background-size: cover;
                                width:100%;
                                <?php /* height:400px; */ ?>
                                margin-bottom: 20px;
                            "></div>
                            <!-- Picture Overlay Starts -->                                                 
                            <div class="text-overlay">
                                <h1><?php print $menu3_title;?></h1>                            
                            </div>
                            <!-- Picture Overlay Ends -->
                        </a>
                    </div>
                </div>
                <!-- Picture Ends -->



                <!-- Picture Starts 4-->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="picture">
                        <a class="" href="<?php print base_url("$lg/menus/themed");?>" title="<?php print $menu_tag[5];?>"> 
                            <?php /*
                            <img src="<?php print base_url("assets/uploads/$menu5_img");?>" class="img-responsive" alt="<?php print $menu5_title;?>">
                            */ ?>
                            <div class="menu-bgs" style="
                                background: url(<?php print base_url("assets/uploads/$menu5_img");?>) center no-repeat;
                                background-size: cover;
                                width:100%;
                                <?php /* height:400px; */ ?>
                                margin-bottom: 20px;
                            "></div>
                            <!-- Picture Overlay Starts -->                                                 
                            <div class="text-overlay">
                                <h1><?php print $menu5_title;?></h1>                            
                            </div>
                            <!-- Picture Overlay Ends -->
                        </a>
                    </div>
                </div>
                <!-- Picture Ends -->


                <!-- Picture Starts 5-->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="picture">
                        <a class="" href="<?php print base_url("$lg/menus/menu/4");?>" title="<?php print $menu_tag[4];?>">
                            <?php /*
                            <img src="<?php print base_url("assets/uploads/$menu4_img");?>" class="img-responsive" alt="<?php print $menu4_title;?>">
                            */ ?>
                            <div class="menu-bgs" style="
                                background: url(<?php print base_url("assets/uploads/$menu4_img");?>) center no-repeat;
                                background-size: cover;
                                width:100%;
                                <?php /* height:400px; */ ?>
                                margin-bottom: 20px;
                            "></div>
                            <!-- Picture Overlay Starts -->                                                 
                            <div class="text-overlay">
                                <h1><?php print $menu4_title;?></h1>                            
                            </div>
                            <!-- Picture Overlay Ends -->
                        </a>
                    </div>
                </div>
                <!-- Picture Ends -->                

                <!-- Picture Starts 6-->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="picture">
                        <a class="" href="<?php print base_url("$lg/menus/menu/8");?>" title="<?php print $menu_tag[8];?>">  
                            <?php /*
                            <img src="<?php print base_url("assets/uploads/$menu6_img");?>" class="img-responsive" alt="<?php print $menu6_title;?>">
                            */ ?>
                            <div class="menu-bgs" style="
                                background: url(<?php print base_url("assets/uploads/$menu8_img");?>) center no-repeat;
                                background-size: cover;
                                width:100%;
                                <?php /* height:400px; */ ?>
                                margin-bottom: 20px;
                            "></div>
                            <!-- Picture Overlay Starts -->                                                 
                            <div class="text-overlay">
                                <h1><?php print $menu8_title;?></h1>                            
                            </div>
                            <!-- Picture Overlay Ends -->
                        </a>
                    </div>
                </div>
                <!-- Picture Ends -->





                <!-- Picture Starts 7-->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="picture">
                        <a class="" href="<?php print base_url("$lg/menus/menu/6");?>" title="<?php print $menu_tag[6];?>">  
                            <?php /*
                            <img src="<?php print base_url("assets/uploads/$menu6_img");?>" class="img-responsive" alt="<?php print $menu6_title;?>">
                            */ ?>
                            <div class="menu-bgs" style="
                                background: url(<?php print base_url("assets/uploads/$menu6_img");?>) center no-repeat;
                                background-size: cover;
                                width:100%;
                                <?php /* height:400px; */ ?>
                                margin-bottom: 20px;
                            "></div>
                            <!-- Picture Overlay Starts -->                                                 
                            <div class="text-overlay">
                                <h1><?php print $menu6_title;?></h1>                            
                            </div>
                            <!-- Picture Overlay Ends -->
                        </a>
                    </div>
                </div>
                <!-- Picture Ends --> 


                <!-- Picture Starts 8-->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="picture">
                        <a class="" href="<?php print base_url("$lg/menus/classes");?>" title="<?php print $menu_tag[7];?>">  
                            <?php /*
                            <img src="<?php print base_url("assets/uploads/$menu6_img");?>" class="img-responsive" alt="<?php print $menu6_title;?>">
                            */ ?>
                            <div class="menu-bgs" style="
                                background: url(<?php print base_url("assets/uploads/$menu7_img");?>) center no-repeat;
                                background-size: cover;
                                width:100%;
                                <?php /* height:400px; */ ?>
                                margin-bottom: 20px;
                            "></div>
                            <!-- Picture Overlay Starts -->                                                 
                            <div class="text-overlay">
                                <h1><?php print $menu7_title;?></h1>                            
                            </div>
                            <!-- Picture Overlay Ends -->
                        </a>
                    </div>
                </div>
                <!-- Picture Ends -->                   


                                            
            </div>
        </div>
        <!-- /. MENU ENDS
            ========================================================================= -->

        <!-- OUR TEAM STARTS
            ========================================================================= -->
        <div id="testimonials"><p>&nbsp;</p></div>
        <div class="container our-team">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h1><span><?php print $testimonials_title;?></span></h1>
                    <div class="description"><?php print $testimonials_description;?></div>
                    <div class="button"><a href="<?php print base_url($lg."/testimonials");?>" class="no-fill-grey"><?php print $TR['explore'];?></a></div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="testimonial-carousel">
                        <!-- Block Starts -->
                        <div class="block">
                            <div class="pic"><img src="<?php print base_url("assets/images/testimonials/roberto.jpg");?>" class="img-responsive" alt="<?php print $testimonial_tag1;?>" title="<?php print $testimonial_tag1;?>"></div>
                            <div class="detail">
                                <div class="icon"><img src="<?php print base_url("assets/images/our-team/icon.png");?>" class="img-responsive" alt="The Chef Affairs"></div>
                                <div class="description">Just a quick email to thank you for sorting such great food when we were in Portugal we were all blown away by your service and will be recommending you to our friends.</div>
                                <div class="name">Neil</div>
                                <div class="signature pull-right"><img src="<?php print base_url("assets/images/logos/logo-100x100.png");?>" class="img-responsive" alt="The Chef Affairs"></div>
                            </div>
                        </div>
                        <!-- Block Ends -->
                        <!-- Block Starts -->
                        <div class="block">
                            <div class="pic"><img src="<?php print base_url("assets/images/testimonials/arriana.jpg");?>" class="img-responsive" alt="<?php print $testimonial_tag2;?>" title="<?php print $testimonial_tag2;?>"></div>
                            <div class="detail">
                                <div class="icon"><img src="<?php print base_url("assets/images/our-team/icon.png");?>" class="img-responsive" alt="The Chef Affairs"></div>
                                <div class="description">Thank you for making my parents' anniversary so special. The food was amazing, as was the service. A perfect evening!</div>
                                <div class="name">Laura</div>
                                <div class="signature pull-right"><img src="<?php print base_url("assets/images/logos/logo-100x100.png");?>" class="img-responsive" alt="The Chef Affairs"></div>
                            </div>
                        </div>
                        <!-- Block Ends -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /. OUR TEAM ENDS
            ========================================================================= -->
        
        <!-- FOOTER STARTS
            ========================================================================= -->
        <div id="contact"><p>&nbsp;</p></div>
        <footer class="parallax-2">
            
            <!-- Contact Info Starts -->
            <?php include("inc.contact.php"); ?>
            <!-- Contact Info Ends -->
            
            <!-- Copyright Starts -->
            <?php include("inc.copyright.php"); ?>
            <!-- Copyright Starts -->
        </footer>
        <!-- /. FOOTER ENDS
            ========================================================================= -->
        <!-- TO TOP STARTS
            ========================================================================= -->
        <a href="#" class="scrollup">Scroll</a>      
        <!-- /. TO TOP ENDS
            ========================================================================= -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!--
        <script src="<?php print base_url("assets/js/bootstrap.min.js");?>"></script>
        -->
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Menu -->       
        <script src="<?php print base_url("assets/js/overlay-menu/js/snap.svg-min.js");?>"></script>
        <script src="<?php print base_url("assets/js/overlay-menu/js/modernizr.custom.js");?>"></script>
        <script src="<?php print base_url("assets/js/overlay-menu/js/classie.js");?>"></script>
        <script src="<?php print base_url("assets/js/overlay-menu/js/overlay-main.js");?>"></script>
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="<?php print base_url("assets/revolution/js/jquery.themepunch.tools.min.js");?>"></script>
        <script type="text/javascript" src="<?php print base_url("assets/revolution/js/jquery.themepunch.revolution.min.js");?>"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
            (Load Extensions only on Local File Systems !  
            The following part can be removed on Server for On Demand Loading) -->  
        <script type="text/javascript" src="<?php print base_url("assets/revolution/js/extensions/revolution.extension.actions.min.js");?>"></script>
        <script type="text/javascript" src="<?php print base_url("assets/revolution/js/extensions/revolution.extension.carousel.min.js");?>"></script>
        <script type="text/javascript" src="<?php print base_url("assets/revolution/js/extensions/revolution.extension.kenburn.min.js");?>"></script>
        <script type="text/javascript" src="<?php print base_url("assets/revolution/js/extensions/revolution.extension.layeranimation.min.js");?>"></script>
        <script type="text/javascript" src="<?php print base_url("assets/revolution/js/extensions/revolution.extension.migration.min.js");?>"></script>
        <script type="text/javascript" src="<?php print base_url("assets/revolution/js/extensions/revolution.extension.navigation.min.js");?>"></script>
        <script type="text/javascript" src="<?php print base_url("assets/revolution/js/extensions/revolution.extension.parallax.min.js");?>"></script>
        <script type="text/javascript" src="<?php print base_url("assets/revolution/js/extensions/revolution.extension.slideanims.min.js");?>"></script>
        <script type="text/javascript" src="<?php print base_url("assets/revolution/js/extensions/revolution.extension.video.min.js");?>"></script>
        <script type="text/javascript">
            var tpj=jQuery;                 
            var revapi112;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_204_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_204_1");
                }else{
                    revapi112 = tpj("#rev_slider_204_1").show().revolution({
                        sliderType:"standard",
                        jsFileLocation:"<?php print base_url("assets/revolution/js");?>/",
                        sliderLayout:"fullscreen",
                        dottedOverlay:"none",
                        delay:6000,
                        navigation: {
                            keyboardNavigation:"off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation:"off",
                            onHoverStop:"off",
                            touch:{
                                touchenabled:"on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            }
                            ,
                            arrows: {
                                        style:"zeus",
                                        enable:true,
                                        hide_onmobile:false,
                                        hide_under:600,
                                        hide_onleave:true,
                                        hide_delay:200,
                                        hide_delay_mobile:1200,
                                        tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                        left: {
                                            h_align:"left",
                                            v_align:"center",
                                            h_offset:30,
                                            v_offset:0
                                        },
                                        right: {
                                            h_align:"right",
                                            v_align:"center",
                                            h_offset:30,
                                            v_offset:0
                                        }
                                    },
                            bullets: {
                                enable:true,
                                hide_onmobile:false,                                
                                style:"hermes",
                                hide_onleave:false,
                                hide_delay:200,
                                hide_delay_mobile:1200,
                                direction:"horizontal",
                                h_align:"center",
                                v_align:"bottom",
                                h_offset:0,
                                v_offset:50,
                                space:20,
                                tmp:''
                            }
                        },
                        viewPort: {
                            enable:true,
                            outof:"pause",
                            visible_area:"80%"
                        },
                        responsiveLevels:[1240,1024,778,480],
                        gridwidth:[1240,1024,778,480],
                        gridheight:[700,600,500,400],
                        lazyType:"none",
                        parallax: {
                            type:"mouse",
                            origo:"slidercenter",
                            speed:2000,
                            levels:[2,3,4,5,6,7,12,16,10,50],
                        },
                        shadow:0,
                        spinner:"off",
                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,
                        shuffle:"off",
                        autoHeight:"off",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            nextSlideOnWindowFocus:"off",
                            disableFocusListener:false,
                        }
                    });
                }
            }); /*ready*/
        </script>
        <!-- Parallax -->
        <script type="text/javascript" src="<?php print base_url("assets/js/parallax/jquery.parallax-1.1.3.js");?>"></script> 
        <script type="text/javascript" src="<?php print base_url("assets/js/parallax/jquery.localscroll-1.2.7-min.js");?>"></script> 
        <script type="text/javascript" src="<?php print base_url("assets/js/parallax/jquery.scrollTo-1.4.2-min.js");?>"></script>
        <!-- Retina --> 
        <script type="text/javascript" src="<?php print base_url("assets/js/retina/retina.js");?>"></script> 
        <!-- Owl Carousel --> 
        <script type="text/javascript" src="<?php print base_url("assets/js/owl-carousel/owl.carousel.js");?>"></script>
        <!-- FitVids --> 
        <script type="text/javascript" src="<?php print base_url("assets/js/fitvids/jquery.fitvids.js");?>"></script>
        <!-- Magnific Popup core JS file -->
        <script type="text/javascript" src="<?php print base_url("assets/js/magnific-popup/jquery.magnific-popup.js");?>"></script>   
        <!-- Counter Up --> 
        <!--
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>      
        -->
<script type="text/javascript">
// Generated by CoffeeScript 1.6.2
/*
jQuery Waypoints - v2.0.3
Copyright (c) 2011-2013 Caleb Troughton
Dual licensed under the MIT license and GPL license.
https://github.com/imakewebthings/jquery-waypoints/blob/master/licenses.txt
*/
(function(){var t=[].indexOf||function(t){for(var e=0,n=this.length;e<n;e++){if(e in this&&this[e]===t)return e}return-1},e=[].slice;(function(t,e){if(typeof define==="function"&&define.amd){return define("waypoints",["jquery"],function(n){return e(n,t)})}else{return e(t.jQuery,t)}})(this,function(n,r){var i,o,l,s,f,u,a,c,h,d,p,y,v,w,g,m;i=n(r);c=t.call(r,"ontouchstart")>=0;s={horizontal:{},vertical:{}};f=1;a={};u="waypoints-context-id";p="resize.waypoints";y="scroll.waypoints";v=1;w="waypoints-waypoint-ids";g="waypoint";m="waypoints";o=function(){function t(t){var e=this;this.$element=t;this.element=t[0];this.didResize=false;this.didScroll=false;this.id="context"+f++;this.oldScroll={x:t.scrollLeft(),y:t.scrollTop()};this.waypoints={horizontal:{},vertical:{}};t.data(u,this.id);a[this.id]=this;t.bind(y,function(){var t;if(!(e.didScroll||c)){e.didScroll=true;t=function(){e.doScroll();return e.didScroll=false};return r.setTimeout(t,n[m].settings.scrollThrottle)}});t.bind(p,function(){var t;if(!e.didResize){e.didResize=true;t=function(){n[m]("refresh");return e.didResize=false};return r.setTimeout(t,n[m].settings.resizeThrottle)}})}t.prototype.doScroll=function(){var t,e=this;t={horizontal:{newScroll:this.$element.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.$element.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};if(c&&(!t.vertical.oldScroll||!t.vertical.newScroll)){n[m]("refresh")}n.each(t,function(t,r){var i,o,l;l=[];o=r.newScroll>r.oldScroll;i=o?r.forward:r.backward;n.each(e.waypoints[t],function(t,e){var n,i;if(r.oldScroll<(n=e.offset)&&n<=r.newScroll){return l.push(e)}else if(r.newScroll<(i=e.offset)&&i<=r.oldScroll){return l.push(e)}});l.sort(function(t,e){return t.offset-e.offset});if(!o){l.reverse()}return n.each(l,function(t,e){if(e.options.continuous||t===l.length-1){return e.trigger([i])}})});return this.oldScroll={x:t.horizontal.newScroll,y:t.vertical.newScroll}};t.prototype.refresh=function(){var t,e,r,i=this;r=n.isWindow(this.element);e=this.$element.offset();this.doScroll();t={horizontal:{contextOffset:r?0:e.left,contextScroll:r?0:this.oldScroll.x,contextDimension:this.$element.width(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:r?0:e.top,contextScroll:r?0:this.oldScroll.y,contextDimension:r?n[m]("viewportHeight"):this.$element.height(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}};return n.each(t,function(t,e){return n.each(i.waypoints[t],function(t,r){var i,o,l,s,f;i=r.options.offset;l=r.offset;o=n.isWindow(r.element)?0:r.$element.offset()[e.offsetProp];if(n.isFunction(i)){i=i.apply(r.element)}else if(typeof i==="string"){i=parseFloat(i);if(r.options.offset.indexOf("%")>-1){i=Math.ceil(e.contextDimension*i/100)}}r.offset=o-e.contextOffset+e.contextScroll-i;if(r.options.onlyOnScroll&&l!=null||!r.enabled){return}if(l!==null&&l<(s=e.oldScroll)&&s<=r.offset){return r.trigger([e.backward])}else if(l!==null&&l>(f=e.oldScroll)&&f>=r.offset){return r.trigger([e.forward])}else if(l===null&&e.oldScroll>=r.offset){return r.trigger([e.forward])}})})};t.prototype.checkEmpty=function(){if(n.isEmptyObject(this.waypoints.horizontal)&&n.isEmptyObject(this.waypoints.vertical)){this.$element.unbind([p,y].join(" "));return delete a[this.id]}};return t}();l=function(){function t(t,e,r){var i,o;r=n.extend({},n.fn[g].defaults,r);if(r.offset==="bottom-in-view"){r.offset=function(){var t;t=n[m]("viewportHeight");if(!n.isWindow(e.element)){t=e.$element.height()}return t-n(this).outerHeight()}}this.$element=t;this.element=t[0];this.axis=r.horizontal?"horizontal":"vertical";this.callback=r.handler;this.context=e;this.enabled=r.enabled;this.id="waypoints"+v++;this.offset=null;this.options=r;e.waypoints[this.axis][this.id]=this;s[this.axis][this.id]=this;i=(o=t.data(w))!=null?o:[];i.push(this.id);t.data(w,i)}t.prototype.trigger=function(t){if(!this.enabled){return}if(this.callback!=null){this.callback.apply(this.element,t)}if(this.options.triggerOnce){return this.destroy()}};t.prototype.disable=function(){return this.enabled=false};t.prototype.enable=function(){this.context.refresh();return this.enabled=true};t.prototype.destroy=function(){delete s[this.axis][this.id];delete this.context.waypoints[this.axis][this.id];return this.context.checkEmpty()};t.getWaypointsByElement=function(t){var e,r;r=n(t).data(w);if(!r){return[]}e=n.extend({},s.horizontal,s.vertical);return n.map(r,function(t){return e[t]})};return t}();d={init:function(t,e){var r;if(e==null){e={}}if((r=e.handler)==null){e.handler=t}this.each(function(){var t,r,i,s;t=n(this);i=(s=e.context)!=null?s:n.fn[g].defaults.context;if(!n.isWindow(i)){i=t.closest(i)}i=n(i);r=a[i.data(u)];if(!r){r=new o(i)}return new l(t,r,e)});n[m]("refresh");return this},disable:function(){return d._invoke(this,"disable")},enable:function(){return d._invoke(this,"enable")},destroy:function(){return d._invoke(this,"destroy")},prev:function(t,e){return d._traverse.call(this,t,e,function(t,e,n){if(e>0){return t.push(n[e-1])}})},next:function(t,e){return d._traverse.call(this,t,e,function(t,e,n){if(e<n.length-1){return t.push(n[e+1])}})},_traverse:function(t,e,i){var o,l;if(t==null){t="vertical"}if(e==null){e=r}l=h.aggregate(e);o=[];this.each(function(){var e;e=n.inArray(this,l[t]);return i(o,e,l[t])});return this.pushStack(o)},_invoke:function(t,e){t.each(function(){var t;t=l.getWaypointsByElement(this);return n.each(t,function(t,n){n[e]();return true})});return this}};n.fn[g]=function(){var t,r;r=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];if(d[r]){return d[r].apply(this,t)}else if(n.isFunction(r)){return d.init.apply(this,arguments)}else if(n.isPlainObject(r)){return d.init.apply(this,[null,r])}else if(!r){return n.error("jQuery Waypoints needs a callback function or handler option.")}else{return n.error("The "+r+" method does not exist in jQuery Waypoints.")}};n.fn[g].defaults={context:r,continuous:true,enabled:true,horizontal:false,offset:0,triggerOnce:false};h={refresh:function(){return n.each(a,function(t,e){return e.refresh()})},viewportHeight:function(){var t;return(t=r.innerHeight)!=null?t:i.height()},aggregate:function(t){var e,r,i;e=s;if(t){e=(i=a[n(t).data(u)])!=null?i.waypoints:void 0}if(!e){return[]}r={horizontal:[],vertical:[]};n.each(r,function(t,i){n.each(e[t],function(t,e){return i.push(e)});i.sort(function(t,e){return t.offset-e.offset});r[t]=n.map(i,function(t){return t.element});return r[t]=n.unique(r[t])});return r},above:function(t){if(t==null){t=r}return h._filter(t,"vertical",function(t,e){return e.offset<=t.oldScroll.y})},below:function(t){if(t==null){t=r}return h._filter(t,"vertical",function(t,e){return e.offset>t.oldScroll.y})},left:function(t){if(t==null){t=r}return h._filter(t,"horizontal",function(t,e){return e.offset<=t.oldScroll.x})},right:function(t){if(t==null){t=r}return h._filter(t,"horizontal",function(t,e){return e.offset>t.oldScroll.x})},enable:function(){return h._invoke("enable")},disable:function(){return h._invoke("disable")},destroy:function(){return h._invoke("destroy")},extendFn:function(t,e){return d[t]=e},_invoke:function(t){var e;e=n.extend({},s.vertical,s.horizontal);return n.each(e,function(e,n){n[t]();return true})},_filter:function(t,e,r){var i,o;i=a[n(t).data(u)];if(!i){return[]}o=[];n.each(i.waypoints[e],function(t,e){if(r(i,e)){return o.push(e)}});o.sort(function(t,e){return t.offset-e.offset});return n.map(o,function(t){return t.element})}};n[m]=function(){var t,n;n=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];if(h[n]){return h[n].apply(null,t)}else{return h.aggregate.call(null,n)}};n[m].settings={resizeThrottle:100,scrollThrottle:30};return i.load(function(){return n[m]("refresh")})})}).call(this);            
        </script>        
        <script src="<?php print base_url("assets/js/counterup/jquery.counterup.min.js");?>"></script>
        <!-- AJAX Contact Form -->          
        <script type="text/javascript" src="<?php print base_url("assets/js/contact/contact-form.js");?>"></script>
        <!-- Custom JS -->
        <script src="<?php print base_url("assets/js/custom/custom.js");?>"></script>

        <?php include("inc.google-analytics.php"); ?>
    </body>
</html>