@extends('layouts.front')


@section('metatitle', $category->name )

@section('metadescription', $category->name.' - Lytt til en artist, lytt til hans demonstrasjon og ring oss')


@section('content')

    <section id="portfolio" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="center gap fade-down section-heading">
                <h2 class="main-title">{{ $category->name }}</h2>
                <hr>
                <p>
                    @if($category->slug=='utleie-lyd-og-lysutstyr' || $category->slug=='event-lyd-og-lys' || $category->slug=='dancearrangementer' || $category->slug=='kurs-og-konferanser' || $category->slug=='baatsharter' || $category->slug=='nightliner')
                        &nbsp;
                    @else
                        Lytt til en artist, lytt til hans demonstrasjon og ring oss:
                    @endif
                </p>
                @if(isset($subCategories) && count($subCategories)>0)
                    <div style="padding: 12px 30px; margin-top: 10px; color: white; background-color: #0c85d0; display: inline-block;"> -- VELG ØNSKET ARTISTER KATEGORI / GRUPPE OG LYTT DEMO -- </div>
                @endif
            </div>

            @if(isset($subCategories) && count($subCategories)>0)
            <ul class="portfolio-filter fade-down center">
                {{--<li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">All</a></li>--}}
                @foreach($subCategories as $subCategory)
                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".{{ $subCategory->id }}">{{ $subCategory->name }}</a></li>

                {{--<li><a class="btn btn-outlined btn-primary--}}
                {{--@if($subCategory->id==18)--}}
                    {{--active--}}
                {{--@endif " href="/gruppe/restaurantmusikere">{{ $subCategory->name }}</a></li>--}}
                @endforeach
            </ul><!--/#portfolio-filter-->
            @endif


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

                <li class="portfolio-item {{ $artist->category_id }} isotope-item col-md-4 @if($category->id==7)
                        hidden
                        @endif">
                    <div class="item-inner">
                        <img src="{{$artist->photo ? $artist->photo->file : $artist->frontPhotoPlaceholder()}}" alt="">
                        {{--<h5>{{ $artist->title }}</h5>--}}
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href="{{ route('artist.show', $artist->id) }}"><i class="fa fa-link"></i></a>
                        </div>

                        <h5>
                            <a href="{{ route('artist.show', $artist->id) }}">{{ $artist->title ? $artist->title : $artist->initials }}</a>

                            <a class="see-more-artist" href="{{ route('artist.show', $artist->id) }}">mer <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </h5>


                        @if(isset($artist->audio_id) && $artist->audio_id!='/audio/')
                            <div class="row row-audio">
                            <div class="col-md-4 audio-div audio-div-demo">DEMO&nbsp1:</div>
                            <div class="col-md-8 audio-div">
                                <audio controls class="audio-player">
                                    <source src="{{ $artist->audio_id }}" type="audio/mpeg">
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