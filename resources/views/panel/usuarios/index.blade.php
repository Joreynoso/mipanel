@extends('layout.main')

@section('content')

{{-- ruta --}}
<div class="d-sm-flex align-items-center justify-content-between d-none mb-4 mt-4">
    <ul class="breadcrumb">
        <li><a href="#" class="link-dark">Panel</a></li>
        <li>Usuarios</li>
    </ul>

    <a href="{{ route('archivo')}}" class="d-sm-inline-block btn btn-dark shadow-sm rounded-circle">
        <i class="fas fa-archive text-white-50 mr-1"></i>
        archivadas</a>
</div>

<div class="list-inline text-right">
    {{--  buscar --}}
    <form action="" class="list-inline-item" style="width: 250px;">
        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-3" style="height: 43px;">
            <div class=" input-group">
                <div class="input-group-prepend">
                    <button id="button-addon2" type="submit" class="btn btn-link text-warning"><i
                            class="fa fa-search"></i></button>
                </div>

                <input type="search" placeholder="Que estas buscando?" aria-describedby="button-addon2"
                    class="form-control border-0 bg-light" style="height: 30px;">
            </div>
        </div>
    </form>

    {{--  ordenar por --}}
    <div class="dropdown mr-2 list-inline-item"">
            <button class=" btn btn-light dropdown-toggle rounded-pill rounded shadow-sm" type="button"
        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ordenar por
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">fecha</a>
            <a class="dropdown-item" href="#">apellido</a>
            <a class="dropdown-item" href="#">nombre</a>
        </div>
    </div>

    <button class="btn btn-light shadow-sm color-primario rounded-pill list-inline-item">Nuevo usuario</button>
</div>

{{-- existen elementos? --}}
@if ($usuarios->count() == 0)

@include('layout.nodata')

@else

{{-- datatable --}}
<div class="card shadow mb-4 mt-1">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-danger">Tabla de usuarios</h6>
        <p style="margin-bottom: 0px; margin-top: 10px;">{{$usuarios->total()}} registros |
            pagina {{$usuarios->currentPage()}}
            de {{$usuarios->lastPage()}}</p>
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
                        <th class="text-center">acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($usuarios as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td class="text-center">
                            <a href="#" title="detalle" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" title="editar" class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="#" title="eliminar" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        {!! $usuarios->render() !!}
    </div>
</div>

@endif

@endsection