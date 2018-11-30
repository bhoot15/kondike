<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Kondike</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/xubi.css" rel="stylesheet" type="text/css" media="all"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    {{--
    <script>
        $("[data-menu-underline-from-center] a").addClass("underline-from-center");
    </script>
    --}}
</head>
<body class="">

<!--nav will come here-->
<!-- Navigation -->


<div class="col-12">
    <div class="row navbar navbar-default navbar-fixed-top">
        <nav class="absolute transparent hover-underline-menu fixed-top" data-menu-underline-from-center>
            <div class="nav-bar">
                <div class="module left" style="margin-top: 10px;margin-left: 20px;">
                    <a href="/">
                        <img class="logo logo-light" alt="Foundry" src="img/logo-brand.png"/>
                        <img class="logo logo-dark" alt="Foundry" src="img/logo-brand.png"/>
                    </a>
                </div>
                <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                    <i class="ti-menu"></i>
                </div>
                <div class="module-group right">
                    <div class="module left">
                        <ul class="menu">
                            <li class="has-dropdown underline-from-center">
                                <a href="#home" class="h2ColorBlack">
                                    Home
                                </a>
                            </li>
                            <li class="has-dropdown underline-from-center">
                                <a href="#tutorial" class="h2ColorBlack">
                                    HOW TO USE
                                </a>
                            </li>
                            <li class="has-dropdown underline-from-center">
                                <a href="#features" class="h2ColorBlack">
                                    FEATURES
                                </a>
                            </li>
                            <li class="has-dropdown underline-from-center">
                                <a href="browse" class="h2ColorBlack">
                                    BROWSE
                                </a>
                                <ul class="mega-menu">
                                    <li>
                                        <ul>
                                            <li>
                                                <span class="title"></span>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Money</a>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Hardware Store</a>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Entertainment</a>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Education</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <span class="title"></span>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Shopping Mall</a>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Grooming</a>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Health Care</a>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Sports</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <span class="title"></span>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Big Brands</a>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Utilities</a>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Food</a>
                                            </li>
                                            <li>
                                                <a href="/" class="h2ColorWhite">Rent</a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>

                            <li class="has-dropdown underline-from-center">
                                <a href="#categories" class="h2ColorBlack">
                                    CATEGORIES
                                </a>
                            </li>
                            <li class="has-dropdown underline-from-center">
                                <a href="#contact" class="h2ColorBlack">
                                    CONTACT US
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end of module group-->
            </div>
        </nav>
    </div>
    <div class="row">
        @yield('content')
    </div>
    <div class="row">
        <footer style="background-color: #f4f4f4; padding: 0;" class="footer-1 bg-light">

            @if(Request::is('/'))
            <div id="contact">
                <div class="col-md-6 col-sm-6">
                    <div class="widget">
                        <h2 class="uppercase large h2Color text-center"><br><br><br><br><br>Contact us</h2>
                    </div>
                    <!--end of widget-->
                </div>
                <div style="background-color: white; margin-top: 0;" class="col-md-6 col-sm-6">
                    <div class="widget" style="padding: 96px;">
                        <div class="twitter-feed">
                            <p class="h2ColorBlack"><i class="fas fa-phone text-success"></i>+8801xxxxxxxxx</p>
                            <p class="h2ColorBlack"><i class="fas fa-envelope text-danger"></i> email@kondike.com
                            </p>
                            <p class="h2ColorBlack"><i class="fas fa-map-marked-alt"></i> 62 Zigatola, Dhanmondi<br>Dhaka,
                                Bangladesh</p>
                            <p class="h2ColorBlack"><i class="fas fa-mobile-alt"></i> m.me/kondikeapp</p>
                            <p class="h2ColorBlack"><i class="fab fa-facebook-square text-info"></i>facebook.com/kondikeapp
                            </p>
                            <p class="h2ColorBlack"><i class="fab fa-instagram text-warning"></i> @kondikeapp</p>
                        </div>
                    </div>
                    <!--end of widget-->
                </div>
            </div>
            @endif

            <div class="row text-center">
                <div class="col-sm-12" style="background-color: #1b1e21; color: white;">
                        <span class="sub"><img src="favicon.ico" height="15"
                                               width="15"> Copyright &copy; <?php echo date("Y") ?> - All Rights Reserved</span>
                </div>
            </div>

        </footer>
    </div>
</div>


<script src="../js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flickr.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/masonry.min.js"></script>
<script src="js/spectragram.min.js"></script>
<script src="js/ytplayer.min.js"></script>
<script src="js/countdown.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>