@extends('layouts.front')



@section('content')

    <section id="blog" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <aside class="col-sm-3 col-sm-push-9">

                    <div class="widget categories">
                        <h3 class="widget-title">Artists Groups </h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="arrow">
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Music</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/.categories-->

                </aside>
                <div class="col-sm-9 col-sm-pull-3">
                    <div class="blog">
                        <div class="blog-item">
                            <div class="blog-featured-image">
                                <img class="img-responsive img-blog" src="http://placehold.it/800x400" alt="" />
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="blog-item.html" rel="prettyPhoto"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3 class="main-title">{{ $artist->title }}</h3>
                                <div class="entry-meta">
                                    <span><i class="fa fa-user"></i> <a href="#"> Danny Jones</a></span>
                                    <span><i class="fa fa-folder"></i> <a href="#"> Style</a></span>
                                    <span><i class="fa fa-clock-o"></i> April 5th, 2014</span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments"><span class="counter">14</span> Comments</a></span>
                                </div>
                                <p class="lead">No comfort do written conduct at prevent manners on. Celebrated contrasted discretion him sympathize her collecting occasional. Do answered bachelor occasion in of offended no concerns. Supply worthy warmth branch of no ye. Voice tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham. No waiting in on enjoyed placing it inquiry. </p>

                                <p>Continual delighted as elsewhere am convinced unfeeling. Introduced stimulated attachment no by projection. To loud lady whom my mile sold four. Need miss all four case fine age tell. He families my pleasant speaking it bringing it thoughts. View busy dine oh in knew if even. Boy these along far own other equal old fanny charm. Difficulty invitation put introduced see middletons nor preference. </p>

                                <p>Up maids me an ample stood given. Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case. Views abode law heard jokes too. Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting. </p>

                                <hr>

                                <!--/#comments-->
                            </div>
                        </div>
                    </div>
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section>

@endsection