<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Stoyan Nedev">

    <title>@yield('metatitle', 'G.T.MUSIKKBOOKING - ARTISTER AGENTUR')</title>

    <meta name="description" content="@yield('metadescription', 'GT Musikk Booking består av to musikere med bred erfaring fra bransjen. Vi kan bidra med gode løsninger for både musikere og arrangører til alle typer arrangementer')">

    <link href="{{ asset('front') }}/css/bootstrap.min.css" rel="stylesheet">
    <noscript>
        <link href="{{ asset('front') }}/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('front') }}/css/pe-icons.css" rel="stylesheet">
        <link href="{{ asset('front') }}/css/prettyPhoto.css" rel="stylesheet">
        <link href="{{ asset('front') }}/css/animate.css" rel="stylesheet">
    </noscript>
    <link href="{{ asset('front') }}/css/style.css" rel="stylesheet">
    <script src="{{ asset('front') }}/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <!--[if lt IE 9]>
    <script src="{{ asset('front') }}/js/html5shiv.js"></script>
    <script src="{{ asset('front') }}/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('front') }}/images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('front') }}/images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('front') }}/images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('front') }}/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="{{ asset('front') }}/images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
        jQuery(document).ready(function($){
            'use strict';
            jQuery('body').backstretch([
                "{{ asset('front') }}/images/bg/concert-1.jpg",
                "{{ asset('front') }}/images/bg/breadcumb3.jpg",
                "{{ asset('front') }}/images/bg/bg-4.jpg"
            ], {duration: 5000, fade: 500, centeredY: true });
        });
    </script>
</head><!--/head-->
<body>
<div id="preloader"></div>
<header class="navbar navbar-inverse navbar-fixed-top " role="banner">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><h1>G.T.MUSIKKBOOKING</h1></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}#artists">Artister / Arrangementer</a></li>
                <li><a href="{{ url('/') }}/om-oss#about-us">Om oss</a></li>
                <li><a href="{{ url('/') }}/contacts#contact">Kontakt oss</a></li>
            </ul>
        </div>
    </div>
</header><!--/header-->

<section id="single-page-slider" class="no-margin">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <span class="home-icon pe-7s-gleam bounce-in"></span>
                                <h2 class="boxed animation animated-item-1 fade-down">VELKOMMEN TIL G.T.MUSIKKBOOKING ARTISTER AGENTUR</h2>
                                <p class="boxed animation animated-item-2 fade-up">Vi kan bidra med gode løsninger for både musikere / artister og arrangører til alle typer arrangementer. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
</section><!--/#main-slider-->

<div id="content-wrapper">


    @yield('content')


</div>

<div id="footer-wrapper">
    <section id="bottom" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 about-us-widget">
                    <h4>Kontakt oss</h4>
                    <address>
                        <strong>Norge</strong><br>
                        Carl Platous gt.4, 3511 Hønefoss<br>
                        <abbr title="Phone"><i class="fa fa-phone"></i></abbr> +47 916 95 449<br>
                        <abbr title="Email"><i class="fa fa-envelope"></i></abbr> gt-music@online.no<br>
                        George Makedonov<br>
                    </address>
                </div><!--/.col-md-3-->

                <div class="col-md-1"></div>

                <div class="col-md-3 col-sm-6 about-us-widget">
                    <h4>&nbsp;</h4>
                    <address>
                        <strong>Norge</strong><br>
                        Carl Platous gt.4, 3511 Hønefoss<br>
                        <abbr title="Phone"><i class="fa fa-phone"></i></abbr> +47 915 26 43<br>
                        <abbr title="Email"><i class="fa fa-envelope"></i></abbr> vesai@online.no<br>
                        Vesa Makedonova<br>
                    </address>

                </div><!--/.col-md-3-->

                <div class="col-md-2"></div>

                <div class="col-md-3 col-sm-6">
                    <h4>Partnere</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="//tritonosmusikk.no/">Tritonos Musikksenter</a></li>
                            <li><a href="https://simplephpscripts.com">SimplePHPscripts</a></li>
                            <li><a href="/admin">Admin</a></li>
                        </ul>
                    </div>
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    &copy; {{ date('Y') }} <a href="{{ url('/') }}">GTMUSIKKBOOKING.COM</a>. Alle rettigheter reservert.
                </div>
                <div class="col-sm-4">
                    <ul class="pull-right">
                        <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
</div>


<script type="text/javascript">
    /* font-awesome CSS File */
    var giftofspeed3 = document.createElement('link');
    giftofspeed3.rel = 'stylesheet';
    giftofspeed3.href = '{{ asset("front") }}/css/font-awesome.min.css';
    giftofspeed3.type = 'text/css';
    var godefer3 = document.getElementsByTagName('link')[0];
    godefer3.parentNode.insertBefore(giftofspeed3, godefer3);

    /* Pretty Photo CSS File */
    var giftofspeed = document.createElement('link');
    giftofspeed.rel = 'stylesheet';
    giftofspeed.href = '{{ asset("front") }}/css/prettyPhoto.css';
    giftofspeed.type = 'text/css';
    var godefer = document.getElementsByTagName('link')[0];
    godefer.parentNode.insertBefore(giftofspeed, godefer);


    /* pe-icons CSS File */
    var giftofspeed2 = document.createElement('link');
    giftofspeed2.rel = 'stylesheet';
    giftofspeed2.href = '{{ asset("front") }}/css/pe-icons.css';
    giftofspeed2.type = 'text/css';
    var godefer2 = document.getElementsByTagName('link')[0];
    godefer2.parentNode.insertBefore(giftofspeed2, godefer2);

    /* animate CSS File */
    var giftofspeed4 = document.createElement('link');
    giftofspeed4.rel = 'stylesheet';
    giftofspeed4.href = '{{ asset("front") }}/css/animate.css';
    giftofspeed4.type = 'text/css';
    var godefer4 = document.getElementsByTagName('link')[0];
    godefer4.parentNode.insertBefore(giftofspeed4, godefer4);
</script>

<script src="{{ asset('front') }}/js/plugins.js" defer></script>
<script src="{{ asset('front') }}/js/bootstrap.min.js" defer></script>
<script src="{{ asset('front') }}/js/jquery.prettyPhoto.js" defer></script>
<script src="{{ asset('front') }}/js/init.js" defer></script>
</body>
</html>
