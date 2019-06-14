<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Stoyan Nedev">
    <title>G.T.MUSIKKBOOKING - ARTISTER AGENTUR</title>
    <link href="{{ asset('front') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/pe-icons.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/style.css" rel="stylesheet">
    <script src="{{ asset('front') }}/js/jquery.js"></script>
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
                <li><a href="{{ url('/') }}#single-page-slider">Hjem</a></li>
                <li><a href="{{ url('/') }}#about-us">Om oss</a></li>
                <li><a href="{{ url('/') }}#artists">Artister</a></li>
                <li><a href="{{ url('/') }}#contact">Kontakt oss</a></li>
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
                                <p class="boxed animation animated-item-2 fade-up">Våre eksperter vil finne den beste musikken for deg til suksess.</p>
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

    <section id="contact" class="white">
        <div class="container">
            <!--- <div class="gap"></div> --->
            <div class="center gap fade-down section-heading">
                <h2 class="main-title">~ Ta kontakt ~</h2>
                <hr>
                <p>Velg en artist og send inn forespørselen din her. Vi svarer så snart som mulig.</p>
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 fade-up">
                    <h3>Kontakt</h3>
                    <p><span class="icon icon-home"></span>Time Square, New York<br/>
                        <span class="icon icon-phone"></span>+36 65984 405<br/>
                        <span class="icon icon-mobile"></span>+36 65984 405<br/>
                        <span class="icon icon-envelop"></span> <a href="#">email@infinityteam.com</a> <br/>
                        <span class="icon icon-twitter"></span> <a href="#">@infinityteam.com</a> <br/>
                        <span class="icon icon-facebook"></span> <a href="#">Infinity Agency</a> <br/>
                    </p>
                </div><!-- col -->

                <div class="col-md-8 fade-up">
                    <h3>Send oss en melding</h3>
                    <br>
                    <br>
                    <div id="message"></div>
                    <form method="post" action="sendemail.php" id="contactform">
                        <input type="text" name="name" id="name" placeholder="Name" />
                        <input type="text" name="email" id="email" placeholder="Email" />
                        <input type="text" name="website" id="website" placeholder="Website" />
                        <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                        <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Submit" />
                    </form>
                </div><!-- col -->
            </div><!-- row -->
            <div class="gap"></div>
        </div>
    </section>
</div>

<div id="footer-wrapper">
    <section id="bottom" class="">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 about-us-widget">
                    <h4 style="margin: 30px 0;">Global dekning</h4>
                    <p>Vi kan formidle sangere, artister og musikere fra hele verden.</p>
                </div><!--/.col-md-3-->

                <div class="col-md-2"></div>

                <div class="col-md-3 col-sm-6">
                    <h4>Kontakt oss</h4>
                    <address>
                        <strong>Norge</strong><br>
                        Carl Platous gt.4,<br>
                        3511 Hønefoss<br>
                        <abbr title="Phone"><i class="fa fa-phone"></i></abbr> +47 916 95 449
                    </address>

                </div><!--/.col-md-3-->

                <div class="col-md-1"></div>

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


<script src="{{ asset('front') }}/js/plugins.js"></script>
<script src="{{ asset('front') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('front') }}/js/jquery.prettyPhoto.js"></script>
<script src="{{ asset('front') }}/js/init.js"></script>
</body>
</html>
