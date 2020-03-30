@extends('layout.main')

@section('content')

{{-- cabecera --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 ml-1">Usuarios</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

{{-- nuevo --}}
<a href="{{ route('usuarios.create')}}" class="btn btn-primary shadow-sm mb-2 rounded-pill"
    style="min-width: 150px;">nuevo usuario</a>

{{-- existen elementos? --}}
@if ($data->count() == 0)

@include('layout.nodata')

@else

{{-- datatable --}}
<div class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabla de usuarios</h6>
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
                        <th>nombre</th>
                        <th>email</th>
                        <th>creado</th>
                        <th>actualizado</th>
                        <th>rol</th>
                        <th class="text-center">acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $key => $user)
                    <tr>
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
                            <a href="#" title="detalle" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('usuarios.edit', $user->id )}}" title="editar"
                                class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form action="{{ route('usuarios.destroy',$user) }}" class="d-inline" method="POST">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        {!! $data->render() !!}
    </div>
</div>

@endif

@endsection