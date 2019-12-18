    <section id="contact" class="white">
        <div class="container">

            <div class="gap"></div>

            <div class="center gap fade-down section-heading">
                <h2 class="main-title">~ Ta kontakt ~</h2>
                <hr>
                <p>Velg en artist og send inn forespørselen din her. Vi svarer så snart som mulig.</p>
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 fade-up">
                    <h3>Kontakt</h3>
                    <p>
                        <span class="icon icon-home"></span>George Makedonov<br/>
                        <span class="icon icon-phone"></span>+47 916 95 449<br/>
                        <span class="icon icon-envelop"></span> <a href="mailto:gt-music@online.no">gt-music@online.no</a>
                        <br/><br/>

                        <span class="icon icon-home"></span>Vesa Makedonova<br/>
                        <span class="icon icon-phone"></span>+47 915 26 43<br/>
                        <span class="icon icon-envelop"></span> <a href="mailto:vesai@online.no">vesai@online.no</a> <br/>

                    </p>
                </div><!-- col -->

                <div class="col-md-8 fade-up">
                    <h3>Send oss en melding</h3>
                    <br>
                    <br>
                    @if (session('message'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif

                    <form method="POST" action="/contact#contact" id="contactform">

                        @csrf

                        <input type="text" name="name" id="name" placeholder="Navn" value="{{ old('name') }}" />
                        <div class="text-danger">{{ $errors->first('name') }}</div>


                        <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}" />
                        <div class="text-danger">{{ $errors->first('email') }}</div>


                        <textarea name="comments" id="comments" placeholder="Din beskjed">{{ old('comments') }}</textarea>
                        <div class="text-danger">{{ $errors->first('comments') }}</div>

                        <div class="clearfix"></div>

                        <input class="btn btn-outlined btn-primary mt-3" type="submit" value="Sende melding" />

                    </form>
                </div><!-- col -->
            </div><!-- row -->
            <div class="gap"></div>
        </div>
    </section>