@extends('layout.main')

@section('content')

{{-- cabecera --}}
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0 text-gray-800 ml-1">Roles</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

{{-- nuevo --}}
<a href="{{ route('roles.create')}}" class="btn btn-primary shadow mb-3 rounded-pill" style="min-width: 150px;">Nuevo Rol</a>

{{-- datatable --}}
<div class="card shadow mb-3 mt-2">
    <div class="card-header py-3">
        <h6 class="m-0 text-primary">Lista de Roles</h6>
        <p style="margin-bottom: 0px; margin-top: 10px;">{{$roles->total()}} registros |
            pagina {{$roles->currentPage()}}
            de {{$roles->lastPage()}}</p>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>#</th>
                    <th>rol</th>
                    <th width="50%">permisos</th>
                    <th width="20%" class="text-center">acciones</th>
                </tr>
                @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ $role->id}}</td>
                    <td>{{ $role->name }}</td>

                    <td>
                        @foreach ($role->permissions as $item)
                        <span class="badge badge-secondary mr-1">{{$item->name}}</span>
                        @endforeach
                    </td>

                    <td class="text-center">
                        <a href="{{ route('roles.show',$role->id) }}" class="btn btn-info btn-circle btn-sm">
                            <i class="fas fa-eye"></i>
                        </a>

                        @can('role-edit')
                        <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-warning btn-circle btn-sm">
                            <i class="fas fa-pen"></i></a>
                        @endcan

                        @can('role-delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                        $role->id],'style'=>'display:inline']) !!}
                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-circle btn-sm'] )  }}
                        {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        {!! $roles->render() !!}
    </div>
</div>

@endsection