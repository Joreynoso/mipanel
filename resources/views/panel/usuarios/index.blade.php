@extends('layout.main')

@section('content')

{{-- includes --}}
@include('layout.modal-delete')

{{-- cabecera --}}
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0 text-gray-800 ml-1">Usuarios</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

{{-- nuevo --}}
<a href="{{ route('usuarios.create') }}" data-remote="true" class="btn btn-primary shadow-sm mb-3 rounded-pill"
    style="min-width: 150px;">Nuevo usuario</a>

{{-- existen elementos? --}}
@if ($data->count() == 0)

@include('layout.nodata')

@else

{{-- datatable --}}
<div class="card shadow mb-4 mt-2 d-none d-sm-block d-md-block d-lg-block">
    <div class="card-header py-3">
        <h6 class="m-0 text-primary">Tabla de usuarios</h6>
        <p style="margin-bottom: 0px; margin-top: 10px;">{{$data->total()}} registros |
            pagina {{$data->currentPage()}}
            de {{$data->lastPage()}}</p>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Creado</th>
                        <th>Actualizado</th>
                        <th>Rol</th>
                        <th class="text-center">acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $key => $user)
                    <tr data-id="{{$user->id}}">

                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>

                        <td>
                            @if (!empty($user->getRoleNames()))

                            @foreach($user->getRoleNames() as $rol)
                            <label class="badge badge-success">{{ $rol }}</label>
                            @endforeach
                            @endif
                        </td>

                        <td class="text-center">
                            <a href="{{ route('usuarios.edit', $user->id )}}" title="editar"
                                class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-pen"></i>
                            </a>

                            <a href="{{ route('usuarios.destroy', $user->id )}}" title="editar"
                                class="delete-record btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        {!! $data->render() !!}
    </div>
</div>

{{-- SECTION VISTA PARA CELULARES --}}
<div class="d-sm-none">
    <p class="fs-16 fw-400 text-primary">{{$data->total()}} registros | 
        pagina {{$data->currentPage()}}
        de {{$data->lastPage()}}</p>

    @foreach ($data as $key => $user)
    <div class="card mb-3 shadow py-2">
        <div class="card-body pb-1">
            <h5 class="card-title fs-16 fw-700"><span><i class="far fa-user mr-2"></i></span>{{$user->name}}</h5>
            <div class="border-bottom mb-2" style="opacity: 0.6"></div>

            <p class="card-text fw-400 mb-1">Email: <span class="fw-300">{{$user->email}}</span></p>

            @if (!empty($user->getRoleNames()))

            @foreach($user->getRoleNames() as $rol)
            <p class="card-text fw-400 mb-1">Rol: <span class="fw-300">{{ $rol }}</span></p>
            @endforeach
            @endif

            <p class="card-text fw-400 mb-3">Creado: <span
                    class="fw-300">{{$user->created_at->format('l jS \\of F Y')}}</span></p>

            <div class="border-bottom mb-2" style="opacity: 0.6"></div>
            <div class="float-right">
                <a href="{{ route('usuarios.edit', $user->id )}}" class="card-link fw-300 fs-12 text-uppercase"
                    style="color: black;">editar</a>
                <a href="#" class="card-link fw-300 fs-12 text-uppercase" style="color: black;">eliminar</a>
            </div>
        </div>
    </div>
    @endforeach
    {!! $data->render() !!}
</div>
@endif
@endsection