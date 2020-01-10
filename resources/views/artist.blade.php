@extends('layouts.front')

@section('metatitle', $artist->title )

@section('metadescription', Str::limit(html_entity_decode(strip_tags($artist->body), 160, "")) )

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


                                @if($artist->video1)
                                    <div class="blog-content" style="border-bottom: none;">
                                    <div class="iframe-container">
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $artist->youtubeEmbed($artist->video1) }}?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    </div>
                                @else
                                    <img class="img-responsive img-blog" src="{{$artist->photo ? $artist->photo->file : $artist->frontArtistPlaceholder()}}" alt="" />
                                    <div class="overlay">
                                        <a class="preview btn btn-outlined btn-primary" href="{{$artist->photo ? $artist->photo->file : $artist->frontArtistPlaceholder()}}" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                    </div>
                                @endif
                            </div>
                            <div class="blog-content pt-3">
                                {{--<h3 class="main-title">{{ $artist->initials ? $artist->initials : $artist->title }}</h3>--}}


                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="main-title">{{ $artist->title ? $artist->title : "Please, enter artist name" }}</h3>
                                    </div>
                                    @if(isset($artist->audio2) && $artist->audio2!='/audio/')
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-2 audio-div audio-div-demo">DEMO&nbsp2:</div>
                                                <div class="col-md-10 audio-div">
                                                    <audio controls class="audio-player">
                                                        <source src="{{ $artist->audio2 }}" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif(isset($artist->audio_id) && $artist->audio_id!='/audio/')
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-2 audio-div audio-div-demo">DEMO&nbsp2:</div>
                                                <div class="col-md-10 audio-div">
                                                    <audio controls class="audio-player">
                                                        <source src="{{ $artist->audio_id }}" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                {{--@if(isset($artist->audio2) && $artist->audio2!='/audio/')--}}
                                {{--<div class="row">--}}

                                    {{--<div class="col-md-6 col-md-offset-6">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-2 audio-div audio-div-demo">DEMO2:</div>--}}
                                            {{--<div class="col-md-10 audio-div">--}}
                                                {{--<audio controls class="audio-player">--}}
                                                    {{--<source src="{{ $artist->audio2 }}" type="audio/mpeg">--}}
                                                    {{--Your browser does not support the audio element.--}}
                                                {{--</audio>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--@endif--}}


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
                                    <p>{!! $artist->body !!}</p>
                                    <hr>
                                @endif


                                @if($artist->reference1)
                                    <p>{!! nl2br($artist->reference1) !!}</p>
                                    <hr>
                                @endif

                                @if($artist->reference2)
                                    <p>{!! nl2br($artist->reference2) !!}</p>
                                    <hr>
                                @endif

                            </div>
                        </div>
                    </div>
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section>

@endsection