<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- CSS preloader -->
        <link href="/css/loader.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/megatron-template.css" rel="stylesheet">
        <!-- CSS modules -->
        <link href="css/icomoon.css" rel="stylesheet">
        <link href="css/fontello.css" rel="stylesheet">
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/jcarousel.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/cloudzoom.css" rel="stylesheet">
        <link href="css/sfmenu.css" rel="stylesheet">
        <link href="css/isotope.css" rel="stylesheet">
        <link href="css/smoothness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
        <link href="css/jquery.fancybox.css" rel="stylesheet">
        <link href="css/hoverfold.css" rel="stylesheet">
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/extralayers.css" media="screen" />
       
    </head>
    <body class="responsive">
        <div class="loader">
            <div class="bubblingG"> <span id="bubblingG_1"> </span> <span id="bubblingG_2"> </span> <span id="bubblingG_3"> </span> </div>
        </div>
        <div id="outer">
            <div id="outer-canvas">

                <!-- header -->
                <header>

                    <!-- Back to top -->
                    <div class="back-to-top"><span class="icon-arrow-up-4"></span></div>
                    <!-- //end Back to top -->
                    <section class="navbar">
                        <div class="background">
                        <div class="container">
                            <!-- <div class="wrappertop"> -->
                                <!-- Logo -->
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="navbar-logo pull-left"> <a href="index.html"><img src="images/header-logo.png" alt="Megatron"></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="navbar-secondary-menu pull-right hidden-xs">

                                            <dl class="navbar-main-menu hidden-xs">
                                            <dt class="item">
                                                <ul class="sf-menu">
                                                    <li><span class="btn-main">Categories</span>
                                                        <ul>
                                                            <li><a href="index_header_alt.html">Header Alternative</a></li>
                                                            <li><a href="index_scroll_slider.html">Scroll Slider</a>
                                                            </li>
                                                            <li><a href="home_simpleslider.html">Simple Slider</a></li>
                                                            <li><a href="home_boxed.html">Boxed</a></li>
                                                            <li><a href="home_boxed_with_banners.html">Boxed with banners</a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </dt>
                                            </dl>
                                            </div>
                                        </div>    
                                        <div class="col-sm-4"> 
                                            <div class="navbar-secondary-menu pull-right hidden-xs">

                                            <!-- <dt class="item">
                                                <ul class="sf-menu">
                                                    <li> -->
                                                        <form class="navbar-search form-inline hidden-xs" role="form">
                                                            <div class="form-group">
                                                                <button type="submit" class="button"><span class="icon-search-2"></span></button>
                                                                <input type="text" class="form-control" value="Search">
                                                            </div>
                                                        </form>    
                                                 <!--    </li>
                                                </ul>
                                            </dt> -->
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="navbar-secondary-menu pull-right hidden-xs">

                                                <div class="btn-group compact-hidden"> <a href="#"  class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown"> <span class="icon icon-vcard"></span> Account <span class="caret"></span> </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Account</a></li>
                                                        <li><a href="#">Wishlist</a></li>
                                                        <li><a href="#">Checkout</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="login.html">Log In</a></li>
                                                        <li><a href="login.html">Sign Up</a></li>
                                                    </ul>
                                                </div>

                                                <div class="btn-group shoppingcart"> <a href="#"  class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown"> <span class="compact-hidden">Cart - <strong>$245</strong></span> <span class="icon-xcart-animate"><span class="box">3</span><span class="handle"></span></span> </a>
                                                    <div class="dropdown-menu pull-right shoppingcart-box" role="menu"> Recently added item(s)
                                                        <ul class="list">
                                                            <li class="item"> <a href="product_default.html" class="preview-image"><img class="preview" src="images/products/product-07-small.jpg" alt=""></a>
                                                                <div class="description"> <a href="#">Mauris et ligula quis</a> <strong class="price">1 x $44.95</strong> </div>
                                                            </li>
                                                        </ul>
                                                        <div class="total">Total: <strong>$44.95</strong></div>
                                                        <a href="#" class="btn btn-mega">Proceed to Checkout</a>
                                                        <div class="view-link"><a href="shopping_cart.html">View shopping cart </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div> 
                                </div> 
                        </div>      
                            <!-- </div> -->
                        </div>
                        <!-- Navbar switcher -->
                        <div class="navbar-switcher-container">
                            <div class="navbar-switcher"> <span class="i-inactive"><img src="images/icon-megatron.png" width="35" height="35" alt=""></span> <span class="i-active icon-cancel-3"></span> </div>
                        </div>
                        <!-- //end Navbar switcher -->
                    </section> 
                </header>
                <br><br><br><br>

                <!-- header end  -->
        
                    @yield('content')


                <!-- Footer -->
                <footer>
                    <section class="footer-navbar dark">
                        <div class="container content nopad-xs">
                            <div class="row">
                                <div class="col-sm-6 col-md-3 col-lg-3 collapsed-block">
                                    <h3>Information<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
                                    <div  class="tabBlock" id="TabBlock-3">
                                        <ul class="menu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="#">Shipping &amp; Returns</a></li>
                                            <li><a href="#">Privacy Notice</a></li>
                                            <li><a href="#">Conditions of Use</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 col-lg-3 collapsed-block">
                                    <h3><span class="attention"><span class="attention_icon"></span></span>Customer service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
                                    <div  class="tabBlock" id="TabBlock-4">
                                        <ul class="menu">
                                            <li><a href="#">Online support</a></li>
                                            <li><a href="#">Help & FAQs</a></li>
                                            <li><a href="#">Call Center</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix visible-sm"></div>
                                <div class="col-sm-6 col-md-3 col-lg-3 collapsed-block">
                                    <h3>My account<a class="expander visible-xs" href="#TabBlock-5">+</a></h3>
                                    <div  class="tabBlock" id="TabBlock-5">
                                        <ul class="menu">
                                            <li><a href="#">My Account</a></li>
                                            <li><a href="#">Order history</a></li>
                                            <li><a href="#">Advanced search</a></li>
                                            <li><a href="#">Reviews</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 col-lg-3 collapsed-block">
                                    <h3>CUSTOM HTML BLOCK<a class="expander visible-xs" href="#TabBlock-6">+</a></h3>
                                    <div  class="tabBlock" id="TabBlock-6">
                                        <ul class="menu">
                                            <li><span class="icon icon-house"></span> 7563 St. Vincent Place, Glasgow</li>
                                            <li><span class="icon icon-phone-4"></span> 321321321, 321321321</li>
                                            <li><span class="icon icon-envelop"></span> <a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                                            <li><span class="icon icon-skype-2"></span> <a href="#">shop.test</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="footer-bottom-block container">
                        <div class="row">
                            <div class="col-sm-5 col-md-4 copyright-text"> &copy; 2016 <a href="#">Megatron</a>. All Rights Reserved. </div>
                            <div class="col-sm-3 col-md-4"> Select Store:
                                <div class="btn-group btn-select dropup"> <a href="#" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="value">Main store</span> <span class="caret min"></span> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Simple store</a></li>
                                        <li><a href="#">Style store</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <ul class="payment-list pull-right">
                                    <li><img src="images/icon-payment-01.png" width="36" height="22" alt=""></li>
                                    <li><img src="images/icon-payment-02.png" width="36" height="22" alt=""></li>
                                    <li><img src="images/icon-payment-03.png" width="36" height="22" alt=""></li>
                                    <li><img src="images/icon-payment-04.png" width="36" height="22" alt=""></li>
                                    <li><img src="images/icon-payment-05.png" width="36" height="22" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </footer>
                <div id="outer-overlay"></div>
                <!-- end Footer -->

            </div>
        </div>        
        
    </body>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="js/cloudzoom.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.parallax.js"></script>
    <script src="js/jquery.fancybox.js?v=2.1.5"></script>
    <script src="js/jquery.inview.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/supersubs.js"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="js/megatron.js"></script>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:795,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,

                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"none",

                touchenabled:"on",
                onHoverStop:"on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"off",
                fullScreen:"on",

                spinner:"off",

                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",



                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                hideTimerBar:"on",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                fullScreenOffsetContainer: ".navbar"
            });
    }); //ready
</script>
</html>
