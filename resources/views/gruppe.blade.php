@extends('layouts.front')



@section('content')

    <section id="portfolio" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="center gap fade-down section-heading">
                <h2 class="main-title">{{ $category->name }}</h2>
                <hr>
                <p>Choose category below:</p>
            </div>
            <ul class="portfolio-filter fade-down center">
                <li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">All</a></li>
                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".1">One man</a></li>
                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".2">Duo</a></li>
                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".3">Trio</a></li>
            </ul><!--/#portfolio-filter-->


            @if(count($artists)>0)

            <ul class="portfolio-items col-3 isotope fade-up">

                @foreach($artists as $artist)

                <li class="portfolio-item {{ $loop->iteration }} isotope-item">
                    <div class="item-inner">
                        <img src="{{$artist->photo ? $artist->photo->file : $artist->photoPlaceholder()}}" alt="">
                        {{--<h5>{{ $artist->title }}</h5>--}}
                        <div class="overlay">
                            <a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>
                        </div>
                        <h5><a href="">{{ $artist->initials ? $artist->initials : $artist->title }}</a></h5>
                    </div>
                </li><!--/.portfolio-item-->

                @endforeach

                {{--<li class="portfolio-item joomla nature isotope-item">--}}
                    {{--<div class="item-inner">--}}
                        {{--<img src="/front/images/portfolio/folio02.jpg" alt="">--}}
                        {{--<h5>Portfolio Project</h5>--}}
                        {{--<div class="overlay">--}}
                            {{--<a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li><!--/.portfolio-item-->--}}
                {{--<li class="portfolio-item bootstrap design isotope-item">--}}
                    {{--<div class="item-inner">--}}
                        {{--<img src="/front/images/portfolio/folio03.jpg" alt="">--}}
                        {{--<h5>Portfolio Project</h5>--}}
                        {{--<div class="overlay">--}}
                            {{--<a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li><!--/.portfolio-item-->--}}
                {{--<li class="portfolio-item joomla design apps isotope-item">--}}
                    {{--<div class="item-inner">--}}
                        {{--<img src="/front/images/portfolio/folio04.jpg" alt="">--}}
                        {{--<h5>Portfolio Project</h5>--}}
                        {{--<div class="overlay">--}}
                            {{--<a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li><!--/.portfolio-item-->--}}
                {{--<li class="portfolio-item joomla apps isotope-item">--}}
                    {{--<div class="item-inner">--}}
                        {{--<img src="/front/images/portfolio/folio05.jpg" alt="">--}}
                        {{--<h5>Portfolio Project</h5>--}}
                        {{--<div class="overlay">--}}
                            {{--<a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li><!--/.portfolio-item-->--}}
                {{--<li class="portfolio-item wordpress nature isotope-item">--}}
                    {{--<div class="item-inner">--}}
                        {{--<img src="/front/images/portfolio/folio06.jpg" alt="">--}}
                        {{--<h5>Portfolio Project</h5>--}}
                        {{--<div class="overlay">--}}
                            {{--<a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li><!--/.portfolio-item-->--}}
                {{--<li class="portfolio-item joomla design apps isotope-item">--}}
                    {{--<div class="item-inner">--}}
                        {{--<img src="/front/images/portfolio/folio07.jpg" alt="">--}}
                        {{--<h5>Portfolio Project</h5>--}}
                        {{--<div class="overlay">--}}
                            {{--<a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li><!--/.portfolio-item-->--}}
                {{--<li class="portfolio-item joomla nature isotope-item">--}}
                    {{--<div class="item-inner">--}}
                        {{--<img src="/front/images/portfolio/folio08.jpg" alt="">--}}
                        {{--<h5>Portfolio Project</h5>--}}
                        {{--<div class="overlay">--}}
                            {{--<a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li><!--/.portfolio-item-->--}}
                {{--<li class="portfolio-item wordpress design isotope-item">--}}
                    {{--<div class="item-inner">--}}
                        {{--<img src="/front/images/portfolio/folio09.jpg" alt="">--}}
                        {{--<h5>Portfolio Project</h5>--}}
                        {{--<div class="overlay">--}}
                            {{--<a class="preview btn btn-outlined btn-primary" href=""><i class="fa fa-link"></i></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li><!--/.portfolio-item-->--}}
            </ul>

            @endif


        </div>
    </section>


@endsection