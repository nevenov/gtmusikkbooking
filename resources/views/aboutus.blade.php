@extends('layouts.front')

@section('metatitle', 'G.T.MUSIKKBOOKING - OM OSS' )

@section('metadescription', ' Vi leverer alt innen: Bryllup, Dansearrangementer, Hotell og Restaurantmusikere, Pianobarentertainere, Taffelmusikere, Pubmusikere, Countrymusikere, Pop-Rock musikere, Jazzmusikere, Klassisk Musik, DJ / Karaoke, Barneunderholdning, Event Lyd og Lys, Utleie Lyd og Lysutstyr')

@section('content')

    <section id="about-us" class="white">
        <div class="gap"></div>
        <div class="container">

            @include('includes.about-us-inc')

            <div class="gap"></div>


            {{--<div class="gap"></div>--}}
        </div>
    </section>

@endsection