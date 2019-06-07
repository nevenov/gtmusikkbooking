@extends('layouts.app', ['title' => __('Artist edit')])

@section('content')
    @include('layouts.headers.cards')


    @include('includes.tinyeditor')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Редактирай артист') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin.artists.index') }}" class="btn btn-sm btn-primary">{{ __('Всички артисти') }}</a>
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

                        <form method="post" action="{{ route('admin.artists.update', $artist->id) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Редактирай информацията за артиста и натисни бутона "Save"') }}</h6>
                            <div class="pl-lg-4">


                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label class="mr-sm-2" for="input-category_id">{{ __('Група') }}</label>
                                        <select class="custom-select mr-sm-2" name="category_id" id="input-category_id">
                                            {{--@foreach($categories as $key=>$val)--}}
                                            {{--<option value="{{ $val->state_code}}" {{ ((isset($user->state_code) && $user->state_code== $val->state_code)? "selected":"") }}>{{$val->state_name}}</option>--}}
                                            {{--@endforeach--}}
                                            <option value="1">Category1</option>
                                            <option value="2">Category2</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-5 offset-md-1">
                                        <label class="mr-sm-2" for="input-status">{{ __('Статус') }}</label>
                                        <select class="custom-select mr-sm-2" name="status" id="input-status">
                                            <option value="active"{{ $artist->status=='active' ? ' selected=selected' : '' }}>Активен</option>
                                            <option value="inactive"{{ $artist->status=='inactive' ? ' selected=selected' : '' }}>Неактивен</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label class="form-control-label" for="input-title">{{ __('Име') }}</label>
                                        <input type="text" name="title" id="input-title" class="form-control" value="{{ $artist->title }}" placeholder="{{ __('Име на артиста') }}" required autofocus>
                                    </div>
                                </div>


                                {{--<div class="form-row">--}}
                                @if($artist->photo)
                                <div class="col-md-4 float-left">
                                    <img class="mw-100 img-responsive" src="{{ $artist->photo->file }}" alt="">

                                </div>
                                @endif
                                <div class="custom-file col-md-6">
                                    <input type="file" name="photo_id" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Избери снимка</label>
                                    @if($artist->photo)
                                    <div class="pt-4">
                                        <a href="{{ route('admin.photos.delete', $artist->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Сигурен ли сте, че искате да изтриете снимката на този артист?')">Изтрий снимката</a>
                                    </div>
                                    @endif
                                </div>
                                {{--</div>--}}

                                <div class="clearfix"></div>



                                <div class="form-group pt-4">
                                    <label for="body">Описание:</label>
                                    <textarea name="body" class="form-control" rows="25" id="body" placeholder="Описание на артиста ...">{{ $artist->body }}</textarea>
                                </div>



                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label class="form-control-label" for="input-video1">{{ __('Youtube demo') }}</label>
                                        <input type="text" name="video1" id="input-reference1" class="form-control" placeholder="{{ __('Напр.: https://www.youtube.com/watch?v=zVOuRQPPdoo') }}" value="{{ $artist->video1 }}">
                                    </div>
                                </div>


                                <div class="custom-file col-md-8">
                                    <input type="file" name="audio1" class="custom-file-input" id="customFile1">
                                    <label class="custom-file-label" for="customFile1">Избери аудио файл за демо</label>
                                </div>


                                <div class="form-row pt-4">
                                    <div class="form-group col-md-5">
                                        <label class="form-control-label" for="input-reference1">{{ __('Референции') }}</label>
                                        <input type="text" name="reference1" id="input-reference1" class="form-control" placeholder="{{ __('Референция 1') }}" value="{{ $artist->reference1 }}">
                                    </div>

                                    <div class="form-group col-md-5 offset-1">
                                        <label class="form-control-label" for="input-reference2"> &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <input type="text" name="reference2" id="input-reference2" class="form-control" placeholder="{{ __('Референция 2') }}" value="{{ $artist->reference2 }}">
                                    </div>
                                </div>


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