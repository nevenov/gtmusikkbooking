@extends('layouts.front')



@section('content')

    <section id="portfolio" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="center gap fade-down section-heading">
                <h2 class="main-title">{{ $category->name }}</h2>
                <hr>
                <p>Lytt til en artist, lytt til hans demonstrasjon og ring oss:</p>
            </div>
            {{--<ul class="portfolio-filter fade-down center">--}}
                {{--<li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">All</a></li>--}}
                {{--<li><a class="btn btn-outlined btn-primary" href="#" data-filter=".1">One man</a></li>--}}
                {{--<li><a class="btn btn-outlined btn-primary" href="#" data-filter=".2">Duo</a></li>--}}
                {{--<li><a class="btn btn-outlined btn-primary" href="#" data-filter=".3">Trio</a></li>--}}
            {{--</ul><!--/#portfolio-filter-->--}}


            @if(count($artists)>0)

                <ul class="portfolio-items col-3 isotope fade-up">

                @foreach($artists as $artist)

                    {{--<li class="portfolio-item apps isotope-item">--}}
                        {{--<div class="item-inner">--}}
                            {{--<img src="/front/images/portfolio/folio01.jpg" alt="">--}}
                            {{--<h5>Portfolio Project</h5>--}}
                            {{--<div class="overlay">--}}
                                {{--<a class="preview btn btn-outlined btn-primary" href="images/portfolio/folio01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li><!--/.portfolio-item-->--}}

                <li class="portfolio-item {{ $loop->iteration }} isotope-item col-md-4">
                    <div class="item-inner">
                        <img src="{{$artist->photo ? $artist->photo->file : $artist->frontPhotoPlaceholder()}}" alt="">
                        {{--<h5>{{ $artist->title }}</h5>--}}
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>
                        </div>
                        <h5><a href="">{{ $artist->initials ? $artist->initials : $artist->title }}</a></h5>

                        @if($artist->audio)
                            <div class="row row-audio">
                            <div class="col-md-3 audio-div audio-div-demo">DEMO:</div>
                            <div class="col-md-9 audio-div">
                                <audio controls class="audio-player">
                                    <source src="{{ $artist->audio->file }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                            </div>
                        @endif
                    </div>
                </li><!--/.portfolio-item-->

                @endforeach


            </ul>

            @endif


        </div>
    </section>


@endsection