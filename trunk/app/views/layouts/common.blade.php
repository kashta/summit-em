<!DOCTYPE html>
<!--[if lte IE 8]>
<html class="ie8 no-js" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie no-js" lang="en"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Summit EM</title>
    <meta name="description" content="Event management site">
    <meta name="keywords" content="event , birthday, corporate, wedding "/>
    <meta name="author" content="XCDSOFT">


    <!-- ### Stylesheets ### -->
    <link rel="stylesheet" href="theme/css/style.css" media="screen"/>
    <link rel="stylesheet" href="theme/css/media-queries.css" media="screen"/>
    <!-- Fancybox styles -->
    <link rel="stylesheet" href="theme/css/fancybox.min.css" media="screen"/>
    <!--  Revolution Slider styles -->
    <link rel="stylesheet" href="theme/js/rs-plugin/css/settings.css" media="screen"/>
    <!-- Google fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,800italic,400,800"/>
    <!-- ### JavaScripts ### -->
    <script src="theme/js/jquery.min.js"></script>
    <!-- Add HTML5 support for older IE browsers -->
    <!--[if lt IE 9]>
    <script src="theme/js/html5.min.js"></script>
    <script src="theme/js/selectivizr-and-extra-selectors.min.js"></script>
    <![endif]-->
    <script src="theme/js/modernizr.custom.js"></script>
    <!-- sound manager -->
    <script src="theme/js/jquery.mplayer.min.js"></script>
    <!-- /sound manager -->
    <script src="theme/js/respond.min.js"></script>
    <script src="theme/js/jquery.fitvids.js"></script>
    <!-- Sliders -->
    <!-- jQuery Nivo slider -->
    <script src="theme/js/jquery.nivo.slider.pack.js"></script>
    <!-- jQuery Revolution Slider  -->
    <script type="text/javascript" src="theme/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="theme/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- /Sliders -->
    <script src="theme/js/jquery.countdown.js"></script>
    <script src="theme/js/jquery.easing-1.3.min.js"></script>
    <script src="theme/js/jquery.isotope.min.js"></script>
    <script src="theme/js/jquery.touchSwipe-1.2.5.min.js"></script>
    <script src="theme/js/jquery.sharrre-1.3.2.min.js"></script>

    <!-- Fancybox -->
    <script src="theme/js/jquery.fancybox-1.3.4.pack.js"></script>
    <!-- /Fancybox -->
    <!-- custom scripts -->
    <script src="theme/js/custom.js"></script>
    <!-- Nomine -->
    <style type="text/css" media="screen">
        .nomine {
            position: absolute;
            right: 0;
            top: 0px;
            z-index: 9990;
        }

        @media only screen and (max-width: 1150px) {
            .nomine {
                display: none;
            }
        }
    </style>
</head>
<body class="page-index">
<!--[if lte IE 7]>
<div id="ie-message"><p>You are using Internet Explorer 7.0 or older to view this site. Your browser is an eight year
    old browser which does not display modern web sites properly. Please upgrade to a newer browser to fully enjoy the
    web. <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Upgrade your browser</a></p></div>
<![endif]-->
<!-- header -->
<header id="header">
    <div class="container">
        <!-- logo -->
        <a href="/" id="logo">
            <strong>Summit EM</strong>
        </a>
        <!-- /logo -->
        <!-- nav -->
        <nav id="main-nav">
            <ul>
                <li class="current">
                    <a href="/">Home</a>
                </li>
                <li >
                    <a href="/about">About Us</a>
                </li>
                <li>
                    <a href="/decor">Decor</a>
                    <ul>
                        <li><a href="decor/wedding">Wedding</a></li>
                        <li><a href="decor/reception">Reception</a></li>
                        <li><a href="decor/engagement">Engagement</a></li>
                        <li><a href="decor/cocktail">Cocktail / Sangeet</a></li>
                        <li><a href="decor/mehendi">Mehendi</a></li>
                        <li><a href="decor/bhajan-sandhya">Bhajan Sandhya</a></li>
                        <li><a href="decor/youngsters">Youngsters</a></li>
                        <li><a href="decor/sufi-night">Sufi Night</a></li>
                        <li><a href="decor/birthday">Birthday</a></li>
                        <li><a href="decor/anniversary">Anniversary</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/venue-selection">Wedding Planning</a>
                    <ul>
                        <li><a href="/venue-selection">Venue Selection</a></li>
                        <li><a href="/catering">Catering</a></li>
                        <li><a href="/entertainment">Entertainment</a></li>
                        <li><a href="/photography">Photography</a></li>
                        <li><a href="/vendor-management">Vendor Management</a></li>
                        <li>
                            <a href="destination-wedding">Destination Wedding</a>
                        </li>
                    </ul>

                </li>
                <li><a href="corporate-evennts">Corporate Events</a></li>
                <li>
                    <a href="gallery">Gallery</a>
                </li>
                <li>
                    <a href="contact-us">Contact Us</a>
                </li>
            </ul>
        </nav>
        <!-- /nav -->
    </div>
</header>
<div>
    @yield('content')
</div>
<!-- footer -->
<footer id="footer" class="clearfix">
    <section class="container clearfix">
        <div class="col-2-3">

            <!-- footer-nav -->
            <nav id="footer-nav" class="clearfix">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Releases</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

        </div>
        <div class="col-1-3 last">
            <!-- social icons -->

            <div class="social-icons ">
                <a href="#" class="social-icon twitter"></a>
                <a href="#" class="social-icon facebook"></a>
            </div>

        </div>
        <div class="col-2-3">
            <!-- /footer-nav -->
            <div class="copyright">
                Copyright &copy;
                {{Util::getYearFromDate(Util::add_date(date('Y-m-d'))) }}
                Summit EM. All rights reserved.
            </div>
        </div>
    </section>
</footer>
<!-- /footer -->
</body>

</html>