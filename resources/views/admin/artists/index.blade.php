@extends('layouts.app', ['title' => __('Artists Management')])

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0 pb-3">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-2">
                                <h3 class="mb-0"><a href="{{ route('admin.artists.index') }}">{{ __('Артисти') }}</a></h3>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <form action="{{ route('admin.artists.search') }}" method="post">
                                    @csrf
                                    <div class="input-group">
                                        <input class="form-control form-control-sm py-2" type="search" name="search" value="{{ old('search') }}">
                                        <span class="input-group-append">
                                            <button class="btn btn-sm btn-primary" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 text-right mb-2">
                                <a href="{{ route('admin.artists.create') }}" class="btn btn-sm btn-primary">{{ __('Добави нов артист') }}</a>
                            </div>
                        </div>
                    </div>

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

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">{{ __('Снимка') }}</th>
                                <th scope="col">{{ __('Име') }}</th>
                                <th scope="col">{{ __('Група') }}</th>
                                <th scope="col">{{ __('Статус') }}</th>
                                <th scope="col">{{ __('Добавен на') }}</th>
                                <th scope="col">{{ __('Редактиран на') }}</th>
                                <th scope="col" class="px-0"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($artists as $artist)
                                <tr>
                                    <td class="pr-0"><img height="50" src="{{ $artist->photo ? $artist->photo->file : $artist->photoPlaceholder() }}" alt="{{ $artist->title }}"></td>
                                    <th scope="col"><a href="{{ route('admin.artists.edit', $artist->id) }}">{{ $artist->title }}</a></th>

                                    <td class="pr-0">
                                        {!! ($artist->category->parent ? ($artist->category->parent['name'])."/" : '').'<span class="text-dark">'.$artist->category->name.'</span>' !!}
                                    </td>

                                    <td class="pr-0"><span class="{{ $artist->status=='active' ? 'text-success' : 'text-danger' }}">
                                        {{ $artist->status=='active' ? '' : 'не' }}активен
                                        </span>
                                    </td>
                                    <td>{{ $artist->created_at->format('d M Y') }}</td>
                                    <td>{{ $artist->updated_at->format('d M Y') }}</td>
                                    <td class="text-right px-0">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                <form action="{{ route('admin.artists.destroy', $artist->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="dropdown-item" href="{{ route('admin.artists.edit', $artist->id) }}">{{ __('Edit') }}</a>
                                                    <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $artists->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection