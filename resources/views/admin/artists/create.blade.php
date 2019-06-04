@extends('layouts.app', ['title' => __('Artist create')])

@section('content')
    @include('layouts.headers.cards')

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
                                <a href="{{ route('admin.artists.index') }}" class="btn btn-sm btn-primary">{{ __('Обратно') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.artists.store') }}" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Попълни информация за артиста') }}</h6>
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
                                            <option value="active">Активен</option>
                                            <option value="inactive">Неактивен</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-10{{ $errors->has('title') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-title">{{ __('Име') }}</label>
                                        <input type="text" name="title" id="input-title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Име на артиста') }}" value="{{ old('title') }}" required autofocus>

                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Избери снимка</label>
                                </div>


                                <div class="form-group pt-4">
                                    <label for="body">Описание:</label>
                                    <textarea name="body" class="form-control" rows="5" id="body" placeholder="Описание на артиста ..."></textarea>
                                </div>

                                <div class="text-left">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Запиши') }}</button>
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
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        });
    </script>

@endpush