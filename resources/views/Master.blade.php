<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Home One || Grand</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Fonts -->
    

<!-- End: injected by Adguard -->
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    @yield("css")
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/icon/favicon.ico">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    @yield("preloader")
    <!-- header-start -->
    <header class="header-3">
    @if (Route::has('login'))
    <div class="login">
        @auth
        <a href="#">User</a>
        <a href="#">Log Out</a>
        @else
        <a href="#">Sign Up</a>
        <a href="#">Log in</a>
        @endauth
    </div>
    @endif
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="h3-logo">
                        <a href="index-3.html"><img src="img/home1/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-10 hidden-sm hidden-xs">
                    <div class="menu-area-3 main-menu">
                        <nav>
                            <ul class="menu">
                                <li class="active"><a href="index.html">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home One</a>
                                        </li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                        <li><a href="index-3.html">Home Three</a></li>
                                        <li><a href="index-4.html">Home Four</a>
                                            <ul class="tlevel-menu">
                                                <li><a href="#">Demo</a></li>
                                                <li><a href="#">Demo</a></li>
                                                <li><a href="#">Demo</a></li>
                                                <li><a href="#">Demo</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog-standard.html">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog-standard.html">Blog Standard</a></li>
                                        <li><a href="blog-standard-2.html">Blog Standard 2</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery-standard.html">Gallery</a>
                                    <ul class="dropdown">
                                        <li><a href="gallery-standard.html">Gallery Standard</a></li>
                                        <li><a href="gallery-masonary.html">Gallery Masonary</a></li>
                                        <li><a href="gallery-full-width.html">Gallery Full Width</a></li>
                                        <li><a href="gallery-details.html">Gallery Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="rooms.html">Rooms</a>
                                    <ul class="dropdown">
                                        <li><a href="rooms.html">Rooms</a></li>
                                        <li><a href="rooms-2.html">Rooms 2</a></li>
                                        <li><a href="rooms-details.html">Rooms Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="service.html">Service</a>
                                    <ul class="dropdown">
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="staff.html">Staff</a>
                                    <ul class="dropdown from-right">
                                        <li><a href="staff.html">Staff</a>
                                            <li><a href="staff-details.html">Staff Details</a></li>
                                    </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown from-right">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="contact-2.html">Contact 2</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- mobile-menu-start -->
    <div class="mobile-menu-area visible-xs visible-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile_menu">
                        <nav id="mobile_menu_active">
                            <ul class="menu">
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home One</a>
                                        </li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                        <li><a href="index-3.html">Home Three</a></li>
                                        <li><a href="index-4.html">Home Four</a>
                                            <ul>
                                                <li><a href="#">Demo</a></li>
                                                <li><a href="#">Demo</a></li>
                                                <li><a href="#">Demo</a></li>
                                                <li><a href="#">Demo</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog-standard.html">Blog</a>
                                    <ul>
                                        <li><a href="blog-standard.html">Blog Standard</a></li>
                                        <li><a href="blog-standard-2.html">Blog Standard 2</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery-standard.html">Gallery</a>
                                    <ul>
                                        <li><a href="gallery-standard.html">Gallery Standard</a></li>
                                        <li><a href="gallery-masonary.html">Gallery Masonary</a></li>
                                        <li><a href="gallery-full-width.html">Gallery Full Width</a></li>
                                        <li><a href="gallery-details.html">Gallery Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="rooms.html">Rooms</a>
                                    <ul>
                                        <li><a href="rooms.html">Rooms</a></li>
                                        <li><a href="rooms-2.html">Rooms 2</a></li>
                                        <li><a href="rooms-details.html">Rooms Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="service.html">Service</a>
                                    <ul>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="staff.html">Staff</a>
                                    <ul>
                                        <li><a href="staff.html">Staff</a></li>
                                        <li><a href="staff-details.html">Staff Details</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="choose-date.html">Choose Date</a></li>
                                        <li><a href="choose-room.html">Choose Room</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="contact-2.html">Contact 2</a></li>
                                        <li><a href="make-payment.html">Make Payment</a></li>
                                        <li><a href="make-payment-confirmation.html">Make Payment Confrimation</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-end -->
    @yield("content")
    <div class="footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-logo-widget">
                            <div class="footer-logo">
                                <img src="img/home1/logo.png" alt="">
                            </div>
                            <div class="footer-social">
                                <span>Follow Us:</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-news-widget">
                            <h4 class="widget-title">Latest news</h4>
                            <ul>
                                <li><a href="#">Aenean tristique justo et nibh molestie, non porttitor eros suscipit</a></li>
                                <li><a href="#">Phasellus dapibus dictum augue, ut ultricies</a></li>
                                <li><a href="#">Phasellus dapibus dictum augue, ut ultricies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-flicker-widget">
                            <h4 class="widget-title">Latest news</h4>
                            <ul>
                                <li><a href="img/home1/flicker1.jpg" data-fancybox="images"><img src="img/home1/flicker1.jpg" alt="" /></a></li>
                                <li><a href="img/home1/flicker2.jpg" data-fancybox="images"><img src="img/home1/flicker2.jpg" alt="" /></a></li>
                                <li><a href="img/home1/flicker3.jpg" data-fancybox="images"><img src="img/home1/flicker3.jpg" alt="" /></a></li>
                                <li><a href="img/home1/flicker4.jpg" data-fancybox="images"><img src="img/home1/flicker4.jpg" alt="" /></a></li>
                                <li><a href="img/home1/flicker5.jpg" data-fancybox="images"><img src="img/home1/flicker5.jpg" alt="" /></a></li>
                                <li><a href="img/home1/flicker6.jpg" data-fancybox="images"><img src="img/home1/flicker6.jpg" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-contact-widget">
                            <h4 class="widget-title">Contact us</h4>
                            <div class="contact-widget-box">
                                <span class="cwb-title">Address :</span>
                                <span class="cwb-text">8500 Lorem Street, Chicago, IL, 55030</span>
                            </div>
                            <div class="contact-widget-box">
                                <span class="cwb-title">Call Us :</span>
                                <span class="cwb-text">(123) 456-78-90</span>
                            </div>
                            <div class="contact-widget-box">
                                <span class="cwb-title">Email:</span>
                                <span class="cwb-text">sales@yoursite.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-bottom">
                            <p>Copyright ThemeInnovation @2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
    @yield("script")

</body>

</html>