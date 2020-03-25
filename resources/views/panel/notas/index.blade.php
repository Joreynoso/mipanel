@extends('layout.main')

@section('content')

{{-- ruta --}}
<div class="d-sm-flex align-items-center justify-content-between d-none mb-4 mt-4">
    <ul class="breadcrumb">
        <li><a href="#" class="link-dark">Panel</a></li>
        <li>Notas</li>
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

    <button class="btn btn-light shadow-sm color-primario rounded-pill list-inline-item">Nueva nota</button>
</div>

{{-- existen elementos? --}}
@if ($notas->count() == 0)

@include('layout.nodata')

@else
{{-- notas --}}
<div class="row mt-3">
    @foreach ($notas as $item)

    <!-- urgencia = alta , nota color amarillo -->
    @if ($item->urgencia == 'alta')
    <div class="col-xl-3 col-sm-6 mb-3">
        <blockquote class="blockquote blockquote-custom nota-color p-5 shadow rounded">
            {{-- <div class="blockquote-custom-icon bg-dark shadow-sm"><i class="fa fa-paperclip text-white"></i></div> --}}
            <p class="mb-0 mt-2 noselect">"{{$item->descripcion}}."</p>
            <footer class="blockquote-footer texto-fecha pt-4 mt-4 border-top noselect">urgencia: {{$item->urgencia}}
                <p class="mb-0 mt-2 texto-fecha non-selectable noselect">
                    {{$item->created_at->format('d M Y - H:i:s')}}</p>
                <br>
                {{-- <form action="{{route('bajaNota',$item)}}" class="d-inline" method="POST"> --}}
                @method('DELETE')
                @csrf
                <div class="eliminar">
                    <button title="archivar" class="btn btn-link red archivar" type="submit">archivar
                        <i class="fas fa-archive ml-1"></i>
                    </button>
                </div>
                </form>
            </footer>
        </blockquote>
    </div>

    @else

    <!-- urgencia = baja , nota color verde -->
    <div class="col-xl-3 col-sm-6 mb-3">
        <blockquote class="blockquote blockquote-custom nota-color3 p-5 shadow rounded">
            {{-- <div class="blockquote-custom-icon bg-dark   shadow-sm"><i class="fa fa-paperclip text-white"></i></div> --}}
            <p class="mb-0 mt-2 noselect">"{{$item->descripcion}}."</p>
            <footer class="blockquote-footer texto-fecha pt-4 mt-4 border-top noselect">urgencia: {{$item->urgencia}}
                <p class="mb-0 mt-2 texto-fecha font-italic non-selectable noselect">
                    {{$item->created_at->format('d M Y - H:i:s')}}</p>
                <br>
                {{-- <form action="{{route('bajaNota',$item)}}" class="d-inline" method="POST"> --}}
                @method('DELETE')
                @csrf
                <div class="eliminar">
                    <button title="archivar" class="btn btn-link red archivar" type="submit">archivar
                        <i class="fas fa-archive ml -1"></i>
                    </button>
                </div>
                </form>
            </footer>
        </blockquote>
    </div>

    @endif
    @endforeach
</div>

@endif

@endsection