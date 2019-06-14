@extends('layouts.front')



@section('content')

    <section id="about-us" class="white">
        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">~ Om oss ~</h2>
                        <hr>
                        <p>We started our business 20 years ago.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 fade-up">
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>

                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                </div>
                <div class="col-md-4 fade-up">

                </div>
            </div>
            <div class="gap"></div>

            <div class="gap"></div>

            <div class="center gap fade-down section-heading">
                <h2 class="main-title">~ Artister ~</h2>
                <hr>
                <p>Velg ønsket artister kategori/gruppe:</p>
            </div>
            <div class="gap"></div>

            <div id="artists" class="row purewhite">

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

            <!--- <div class="gap"></div> --->
        </div>
    </section>

@endsection