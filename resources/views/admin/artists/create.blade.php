@extends('layouts.app', ['title' => __('Artist create')])

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
                                <h3 class="mb-0">{{ __('Добави артист') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin.artists.index') }}" class="btn btn-sm btn-primary">{{ __('Всички артисти') }}</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('admin.artists.store') }}" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Попълни информацията за артиста и натисни бутон "Save"') }}</h6>
                            <div class="pl-lg-4">


                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label class="mr-sm-2" for="input-category_id">{{ __('Група') }}</label>
                                        <select class="custom-select mr-sm-2" name="category_id" id="input-category_id">
                                            @foreach($categories as $category)

                                                <option value="{{ $category->id }}" {{count($category->children)>0 ? " disabled" : ""}}>{{ $category->name }}</option>
                                                @foreach ($category->children as $children)
                                                    <option value="{{ $children->id }}"> --&nbsp;Подгрупа --&nbsp;{{ $children->name }}</option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-5 offset-md-1">
                                        <label class="mr-sm-2" for="input-status">{{ __('Статус') }}</label>
                                        <select class="custom-select mr-sm-2" name="status" id="input-status">
                                            <option value="active">Активен</option>
                                            <option value="inactive">Неактивен</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-row pb-4">
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label" for="input-title">{{ __('Име') }}</label>
                                        <input type="text" name="title" id="input-title" class="form-control" placeholder="{{ __('Име на артиста') }}" value="{{ old('title') }}" required autofocus>
                                    </div>

                                    {{--<div class="form-group col-md-3">--}}
                                        {{--<label class="form-control-label" for="input-initials">{{ __('Инициали') }}</label>--}}
                                        {{--<input type="text" name="initials" id="input-initials" class="form-control" placeholder="{{ __('Инициали') }}" value="{{ old('initials') }}">--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group col-md-2">--}}
                                        {{--<label class="form-control-label" for="input-pass">{{ __('Код') }}</label>--}}
                                        {{--<input type="text" name="pass" id="input-pass" class="form-control" placeholder="{{ __('Код') }}" value="{{ old('pass') }}">--}}
                                    {{--</div>--}}
                                </div>


                                <div class="custom-file col-md-8">
                                    <input type="file" name="photo_id" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Избери снимка</label>
                                </div>


                                <div class="form-group pt-5 pb-4">
                                    <label for="body">Описание:</label>
                                    <textarea name="body" class="form-control" rows="25" id="body" placeholder="Описание на артиста ...">{{ old('body') }}</textarea>
                                </div>



                                <div class="form-row pb-4">
                                    <div class="form-group col-md-8">
                                        <label class="form-control-label" for="input-video1">{{ __('Youtube demo') }}</label>
                                        <input type="text" name="video1" id="input-reference1" class="form-control" placeholder="{{ __('Напр.: https://www.youtube.com/watch?v=zVOuRQPPdoo') }}" value="{{ old('video1') }}">
                                    </div>
                                </div>


                                <div class="custom-file col-md-8">
                                    <input type="file" name="audio_id" class="custom-file-input" id="customFile1">
                                    <label class="custom-file-label" for="customFile1">Избери mp3 файл за демо</label>
                                </div>


                                <div class="form-row pt-5">
                                    <div class="form-group col-lg-10">
                                        <label class="form-control-label" for="input-reference1">{{ __('Референции') }}</label>
                                        <textarea name="reference1" class="form-control" rows="3" id="input-reference1" placeholder="Референция 1 текст ...">{{ old('reference1') }}</textarea>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-lg-10">
                                        <label class="form-control-label" for="input-reference2"> </label>
                                        <textarea name="reference2" class="form-control" rows="3" id="input-reference2" placeholder="Референция 2 текст ...">{{ old('reference2') }}</textarea>
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