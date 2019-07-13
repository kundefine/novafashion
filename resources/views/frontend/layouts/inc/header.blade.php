<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{config('app.name')}}</title>

    <link rel="icon" href="{{asset('/favicon.png')}}" type="image/png" />

    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/font/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/menu/styles.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/compiled/flipclock.css')}}">
    <script src="{{asset('frontend/menu/script.js')}}"></script>


    <!--[if lt IE 9]>
    <script src="{{asset('frontend/js/html5shiv.js')}}"></script>
    <script src="{{asset('frontend/js/respond.min.js')}}"></script>
    <![endif]-->
    <script src="{{asset('frontend/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('frontend/compiled/flipclock.js')}}"></script>
    <script type="text/javascript">
        var clock;

        $(document).ready(function() {
            var clock;

            clock = $('.clock').FlipClock({
                clockFace: 'DailyCounter',
                autoStart: false,
                callbacks: {
                    stop: function() {
                        $('.message').html('The clock has stopped!')
                    }
                }
            });

            clock.setTime(220880);
            clock.setCountdown(true);
            clock.start();

        });
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "480px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
</head><!--/head-->

<body>
<div id="mySidenav" class="sidenav">
    <div class="manu1-heading">
        <ul class="nav2">
            <li class="active"><a href="#women" data-toggle="tab">Women</a></li>
            <li><a href="#curve" data-toggle="tab">Curve</a></li>
            <li><a href="#man" data-toggle="tab">Man</a></li>
            <li> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
        </ul>
    </div>

    <a href="">Shop All</a>
    <a href="">Services</a>
    <a href="">Clients</a>
    <a href="">Contact</a>
</div>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="moneydiv">YOU ARE ONLY <span class="money" data-currency-usd="$75.00 USD" data-currency="USD">$75.00 USD</span> AWAY FROM FREE SHIPPING!</div>

        <div class="cross"><i class="fa fa-times" aria-hidden="true"></i></div>
    </div><!--/header_top-->

    <div class="site-branding-area">
        <div class="head-in-mobile">
            <div class="mobil-head">
                <div class="sid-nav">
                    <span onclick="openNav()">&#9776;</span> <p>SHOP</p>
                </div>
                <div class="logo">
                    <a href="index.html"><img src="{{asset('frontend/images/logo-white2.png')}}"></a>
                </div>
                <ul class="wishlistall-mobi">
                    <li><i class="fa fa-heart" aria-hidden="true"></i><span>0</span></li>
                    <li><i class="fa fa-shopping-bag" aria-hidden="true"></i><span>0</span></li>
                </ul>
            </div>
            <div class="mainmenu-area">
                <div class="container">
                    <div class="row">
                        <div class=" col-12 "style="">
                            <marquee width="100%" behavior="slide" direction="" loop="1000" height="30px;" scrolldelay="200" align="middle"  >
                                <p><i class="fa fa-fighter-jet" aria-hidden="true"></i>  FREE SHIPPING FOR ORDERS OVER $75. USA AND CANADA ONLY  &nbsp; &nbsp;  SHOP NEW ARRIVALS  &nbsp; &nbsp;  SHOP SWIMSUITS HERE!</p>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="">
                    <div class="col-md-5 col-sm-4 col-xs-12 display-mobi-none ">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('frontend/images/logo.svg')}}"></a>
                        </div>
                        <div class="manue">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#women" data-toggle="tab">Women</a></li>
                                    <li><a href="#curve" data-toggle="tab">Curve</a></li>
                                    <li><a href="#man" data-toggle="tab">Man</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                        <div class="charcebox">
                            <form action="" class="fotm1">

                                <li>
                                    <input type="text" placeholder="Search here" id="name" name="name" class="input-text">
                                </li>

                                <li>
                                    <input type="submit" value="" class="subs">
                                    <i class="fa fa-search subsi" aria-hidden="true"></i>
                                </li>
                            </form>
                        </div>
                        <div class="head-in-mobile">
                            <ul class="nav1">
                                <li class="active"><a href="#women" data-toggle="tab">Women</a></li>
                                <li><a href="#curve" data-toggle="tab">Curve</a></li>
                                <li><a href="#man" data-toggle="tab">Man</a></li>
                            </ul>
                        </div>

                        <ul class="wishlistall display-mobi-none">
                            <li><i class="fa fa-user" aria-hidden="true"></i></li>
                            <li><i class="fa fa-heart" aria-hidden="true"></i><span>0</span></li>
                            <li><i class="fa fa-shopping-bag" aria-hidden="true"></i><span>0</span></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body display-mobi-none">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="women">
                    <div id='cssmenu'>
                        <ul class="nav navbar-nav navbar-left">
                            <li class='active'>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> CATEGORIES <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> CATEGORIES  <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> CATEGORIES <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> CATEGORIES  <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>


                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="curve">
                    <div id='cssmenu'>
                        <ul class="nav navbar-nav navbar-left">
                            <li class='active'>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> curve <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> curve  <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> curve <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> curve  <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li><a href='index.html'> curve </a></li>
                            <li><a href='index.html'> curve </a></li>
                            <li><a href='index.html'> curve</a></li>
                            <li><a href='index.html'> curve </a></li>
                            <li><a href='index.html'> curve </a></li>
                            <li><a href='index.html'> curve</a></li>
                            <li><a href='index.html'> curve </a></li>
                            <li><a href='index.html'> curve </a></li>
                            <li><a href='index.html'> curve</a></li>
                            <li><a href='index.html'> curve </a></li>
                            <li><a href='index.html'> curve </a></li>
                            <li><a href='index.html'> curve</a></li>
                            <li><a href='index.html'> curve </a></li>
                            <li><a href='index.html'> curve </a></li>
                            <li><a href='index.html'> curve</a></li>
                            <li><a href='index.html'> curve </a></li>
                            <li><a href='index.html'> curve </a></li>


                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="man">
                    <div id='cssmenu'>
                        <ul class="nav navbar-nav navbar-left">
                            <li class='active'>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> CATEGORIES <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> CATEGORIES  <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> CATEGORIES <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li>
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle " href='index.html'> CATEGORIES  <span > <i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav navbar-nav  dropdown-menu">
                                    <li><a href="Fashion.html" class="">Fashion</a></li>
                                    <li><a href="Smartphone.html">Electronics</a></li>
                                    <li><a href="Furniture.html" class="">Furniture</a></li>

                                </ul>
                            </li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES </a></li>
                            <li><a href='index.html'> CATEGORIES</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--/header-middle-->
    <div class="mainmenu-area display-mobi-none">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-12 "style="">
                    <p><i class="fa fa-fighter-jet" aria-hidden="true"></i>  FREE SHIPPING FOR ORDERS OVER $75. USA AND CANADA ONLY</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col-12 "style="">
                    <p>SHOP NEW ARRIVALS</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 col-12 "style="">
                    <p>SHOP SWIMSUITS HERE!</p>
                </div>
            </div>
        </div>
    </div>
</header><!--/header-->