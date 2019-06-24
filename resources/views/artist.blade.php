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
                            <div class="blog-content pt-3">
                                {{--<h3 class="main-title">{{ $artist->initials ? $artist->initials : $artist->title }}</h3>--}}


                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="main-title">{{ $artist->title ? $artist->title : "Please, enter artist name" }}</h3>
                                    </div>
                                    @if($artist->audio)
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-2 audio-div audio-div-demo">DEMO:</div>
                                                <div class="col-md-10 audio-div">
                                                    <audio controls class="audio-player">
                                                        <source src="{{ $artist->audio->file }}" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="entry-meta">
                                    <span><i class="fa fa-folder"></i> <a href=""> {{ $artist->category->name }}</a></span> - &nbsp;
                                    <a href="#contact">Vennligst kontakt George Makedonov for artis-detaljer.</a>
                                </div>

                                {{--<form id="artistform" method="POST" action="">--}}
                                    {{--@csrf--}}
                                    {{--<input type="text" name="pass" id="pass" placeholder="Skriv inn passord og se artist detaljer">--}}
                                    {{--<input class="btn btn-outlined btn-info" type="submit" name="submit" value="Send inn passord">--}}
                                {{--</form>--}}

                                {{--<p class="lead"></p>--}}

                                @if($artist->body)
                                    <p>{{ $artist->body }}</p>
                                    <hr>
                                @endif

                                @if($artist->video1)
                                    <div class="iframe-container">
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $artist->youtubeEmbed($artist->video1) }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <hr>
                                @endif


                                @if($artist->reference1)
                                    <p>{{ $artist->reference1 }}</p>
                                    <hr>
                                @endif

                                @if($artist->reference2)
                                    <p>{{ $artist->reference2 }}</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section>

@endsection