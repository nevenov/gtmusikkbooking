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
                                <h3 class="mb-0">Последно добавени артисти</h3>
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
                                    <th scope="col">Име</th>
                                    <th scope="col">Група</th>
                                    <th scope="col">Добавен на</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($artists as $artist)

                                <tr>
                                    <td>{{ $artist->photo_id }}</td>
                                    <th scope="row">{{ $artist->title }}</th>
                                    <td>{{ $artist->category_id }}</td>
                                    <td>{{ \Carbon\Carbon::parse($artist->created_at)->format('d M Y') }}</td>
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