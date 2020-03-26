@extends('layout.main')

@section('content')


{{-- cabecera --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Roles</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

{{-- nuevo --}}
<a href="{{ route('roles.create')}}" class="btn btn-primary shadow-sm mb-2" style="min-width: 150px;">nuevo</a>
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
                    <button title="archivar" class="btn btn-link" type="submit">archivar
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
                    <button title="archivar" class="btn btn-link" type="submit">archivar
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