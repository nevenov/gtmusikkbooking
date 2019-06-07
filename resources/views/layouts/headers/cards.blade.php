<div class="header bg-gradient-primary pb-9 pt-5 pt-md-7">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->

            @if (\Route::current()->getName() == 'admin')


            <div class="row">

                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('admin.artists.index') }}"><h5 class="card-title text-uppercase text-muted mb-0">Артисти</h5></a>
                                    <span class="h2 font-weight-bold mb-0">{{ count($artistsall) }}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('admin.artists.index') }}"><h5 class="card-title text-uppercase text-muted mb-0">Групи</h5></a>
                                    <span class="h2 font-weight-bold mb-0">12</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @endif

        </div>
    </div>
</div>