@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">

        <div class="row mt-2">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Последно добавени/редактирани артисти</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('admin.artists.index') }}" class="btn btn-sm btn-primary">Виж всички</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Снимка</th>
                                    <th scope="col">Инициали / Име</th>
                                    <th scope="col">Група</th>
                                    <th scope="col">Статус</th>
                                    <th scope="col">Добавен на</th>
                                    <th scope="col">Редактиран на</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($artists as $artist)

                                <tr>
                                    <td><img height="50" src="{{ $artist->photo ? $artist->photo->file : $artist->photoPlaceholder() }}" alt="{{ $artist->title }}"></td>
                                    <th scope="row"><a href="{{ route('admin.artists.edit', $artist->id) }}">{{  $artist->initials . " / " . $artist->title }}</a></th>
                                    <td>{{ $artist->category->parent ? $artist->category->parent['name']." / " : '' }}<span class="text-dark">{{ $artist->category->name }}</span></td>
                                    <td><span class="{{ $artist->status=='active' ? 'text-success' : 'text-danger' }}">
                                        {{ $artist->status=='active' ? '' : 'не' }}активен
                                        </span>
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($artist->created_at)->format('d M Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($artist->updated_at)->format('d M Y H:s') }}</td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush