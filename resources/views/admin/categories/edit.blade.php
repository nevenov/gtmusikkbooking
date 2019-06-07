@extends('layouts.app', ['title' => __('Category edit')])

@section('content')
    @include('layouts.headers.cards')


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Редактирай категорията') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-primary">{{ __('Всички категории') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="col-12">
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>

                        <form method="post" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Редактирай категорията и натисни бутона "Save"') }}</h6>
                            <div class="pl-lg-4">


                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label class="form-control-label" for="input-title">{{ __('Име') }}</label>
                                        <input type="text" name="name" id="input-title" class="form-control" value="{{ $category->name }}" placeholder="{{ __('Име на групата') }}" required autofocus>
                                    </div>
                                </div>


                                {{--<div class="form-row">--}}
                                @if($category->photo)
                                    <div class="col-md-4 float-left">
                                        <img class="mw-100 img-responsive" src="{{ $category->photo->file }}" alt="">

                                    </div>
                                @endif
                                <div class="custom-file col-md-6">
                                    <input type="file" name="photo_id" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Избери снимка</label>
                                    @if($category->photo)
                                        <div class="pt-4">
                                            <a href="{{ route('admin.photos.categories.delete', $category->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Сигурен ли сте, че искате да изтриете снимката на този артист?')">Изтрий снимката</a>
                                        </div>
                                    @endif
                                </div>
                                {{--</div>--}}

                                <div class="clearfix"></div>

                                <div class="text-left">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')

    <script>
        $( document ).ready(function() {
            // The name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        });
    </script>

@endpush