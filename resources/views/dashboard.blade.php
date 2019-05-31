@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">

        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Последно добавени артисти</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">Виж всички</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Име</th>
                                    <th scope="col">Група</th>
                                    <th scope="col">Преглеждания</th>
                                    <th scope="col">Добавен на</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        Alice Cooper
                                    </th>
                                    <td>
                                        Rock'n'Roll
                                    </td>
                                    <td>
                                        340
                                    </td>
                                    <td>
                                        20.06.2019
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Alice Cooper
                                    </th>
                                    <td>
                                        Rock'n'Roll
                                    </td>
                                    <td>
                                        340
                                    </td>
                                    <td>
                                        20.06.2019
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Alice Cooper
                                    </th>
                                    <td>
                                        Rock'n'Roll
                                    </td>
                                    <td>
                                        340
                                    </td>
                                    <td>
                                        20.06.2019
                                    </td>
                                </tr>
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