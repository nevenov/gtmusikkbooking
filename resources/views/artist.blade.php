@extends('layouts.front')



@section('content')

    <section id="blog" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <aside class="col-sm-3 col-sm-push-9">

                    <div class="widget categories">
                        <h3 class="widget-title">Artister Grupper </h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="arrow">

                                    @if(count($categoriesall)>0)
                                        @foreach($categoriesall as $category)
                                        <li><a href="/gruppe/{{ $category->slug }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div><!--/.categories-->

                </aside>
                <div class="col-sm-9 col-sm-pull-3">
                    <div class="blog">
                        <div class="blog-item">
                            <div class="blog-featured-image">
                                <img class="img-responsive img-blog" src="{{$artist->photo ? $artist->photo->file : $artist->frontArtistPlaceholder()}}" alt="" />
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="{{$artist->photo ? $artist->photo->file : $artist->frontArtistPlaceholder()}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3 class="main-title">{{ $artist->initials ? $artist->initials : $artist->title }}</h3>
                                <div class="entry-meta">
                                    <span><i class="fa fa-folder"></i> <a href=""> {{ $artist->category->name }}</a></span> - &nbsp;
                                    <a href="#contact">Vennligst kontakt George Makedonov for artis-detaljer.</a>
                                </div>

                                <form id="artistform" method="POST" action="">
                                    @csrf
                                    <input type="text" name="pass" id="pass" placeholder="Skriv inn passord og se artist detaljer">
                                    <input class="btn btn-outlined btn-info" type="submit" name="submit" value="Send inn passord">
                                </form>

                                {{--<p class="lead">No comfort do written conduct at prevent manners on. Celebrated contrasted discretion him sympathize her collecting occasional. Do answered bachelor occasion in of offended no concerns. Supply worthy warmth branch of no ye. Voice tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham. No waiting in on enjoyed placing it inquiry. </p>--}}

                                {{--<p>Continual delighted as elsewhere am convinced unfeeling. Introduced stimulated attachment no by projection. To loud lady whom my mile sold four. Need miss all four case fine age tell. He families my pleasant speaking it bringing it thoughts. View busy dine oh in knew if even. Boy these along far own other equal old fanny charm. Difficulty invitation put introduced see middletons nor preference. </p>--}}

                                {{--<p>Up maids me an ample stood given. Certainty say suffering his him collected intention promotion. Hill sold ham men made lose case. Views abode law heard jokes too. Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting. </p>--}}

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