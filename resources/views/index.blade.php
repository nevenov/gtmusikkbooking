@extends('layouts.front')

@section('metatitle', 'G.T.MUSIKKBOOKING - ARTISTER AGENTUR' )

@section('metadescription', 'GT Musikk Booking består av to musikere med bred erfaring fra bransjen. Vi kan bidra med gode løsninger for både musikere og arrangører til alle typer arrangementer')

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
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">~ Om oss ~</h2>
                        <hr>
                        <p>
                            Carl Platous gate 4, 3511 Hønefoss <span style="font-size: 12px;">&#9679;</span>
                            Tlf: +47 916 95 449 <span style="font-size: 12px;">&#9679;</span> Mob:+47 915 26 43
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 fade-up">
                    <p>
                        GT Musikk Booking består av to musikere med bred erfaring fra bransjen.
                        Vi kan bidra med gode løsninger for både musikere og arrangører til alle typer arrangementer.
                    </p>

                    <p>
                        Topp kvalitet, over 350 musikere, service og ikke minst deres budsjett!
                        Det lønner seg å være raskt ute med bestillingen!
                        GT Musikk Booking er answarlig for musikerens kvalitet.
                    </p>

                    <p>
                        Med dette håper vi at du kan finne noe til ditt arrangement, stort eller lite.
                        Vi kan være behjelpelig med å skaffe artister/orkester - lokalt, nasjonalt og internasjonalt.
                    </p>

                    <div class="row under-about-us">
                        <div class="col-md-12">Vi leverer alt innen:</div>

                        <div class="col-md-4">
                            <ul class="about-us-list">
                                <li>Bryllup</li>
                                <li>Dansearrangementer</li>
                                <li>Hotell og Restaurantmusikere</li>
                                <li>Pianobarentertainere</li>
                                <li>Taffelmusikere</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="about-us-list">
                                <li>Pubmusikere</li>
                                <li>Countrymusikere</li>
                                <li>Pop-Rock musikere</li>
                                <li>Jazzmusikere</li>
                                <li>Klassisk Musik</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="about-us-list">
                                <li>DJ / Karaoke</li>
                                <li>Barneunderholdning</li>
                                <li>Event Lyd og Lys</li>
                                <li>Utleie Lyd og Lysutstyr</li>
                                <li>Alle typer artister m.m</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 fade-up">

                </div>
            </div>
            {{--<div class="gap"></div>--}}
        </div>
    </section>

@endsection