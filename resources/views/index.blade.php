@extends('layouts.front')

@section('metatitle', 'G.T.MUSIKKBOOKING - ARTISTER AGENTUR' )

@section('metadescription', 'Våre eksperter vil finne den beste musikken for deg til suksess. Velg ønsket artister kategori/gruppe.')

@section('content')

    <section id="artists" class="white">
        <div class="container">

            <div class="gap"></div>

            <div class="center gap fade-down section-heading">
                <h2 class="main-title">~ Artister ~</h2>
                <hr>
                <p>Velg ønsket artister kategori/gruppe:</p>
            </div>
            <div class="gap"></div>

            <div class="row purewhite">

                @if(count($categories)>0)
                    @foreach($categories as $category)
                        <div class="col-md-3 col-sm-6">
                            <div class="center team-member">
                                <div class="team-image">
                                    <img class="img-responsive img-thumbnail bounce-in" src="{{ $category->photo ? $category->photo->file : $category->frontPhotoPlaceholder() }}" alt="">
                                    <div class="overlay">
                                        <a class="preview btn btn-outlined btn-primary" href="/gruppe/{{ $category->slug }}"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="team-content fade-up">
                                    <h5><a href="/gruppe/{{ $category->slug }}">{{ $category->name }}</a>
                                        <small class="role muted"><br><a href="/gruppe/{{ $category->slug }}">Se artister</a></small>
                                    </h5>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div><!--/#artists-->



            <div id="about-us" class="gap"></div>

            @include('includes.about-us-inc')


            {{--<div class="gap"></div>--}}
        </div>
    </section>

    @include('includes.contact-us-inc')

@endsection