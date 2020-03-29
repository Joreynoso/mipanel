@extends('layout.main')

@section('content')

{{-- cabecera --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 fw-400">Mis Notas</h1>
    <a href="{{ route('archivo')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm waves-effect waves-light"><i
            class="fas fa-archive fa-sm text-white-50"></i> archivo notas</a>
</div>

{{-- nuevo --}}
<a href="{{ route('roles.create')}}" class="btn btn-primary shadow-sm mb-2 rounded-pill" style="min-width: 150px;">nueva nota</a>

{{-- existen elementos? --}}
@if ($notas->count() == 0)

@include('layout.nodata')

@else
{{-- notas --}}
<div class="row mt-3 d-fe">
    @foreach ($notas as $item)

    <div class="col-xl-3 col-sm-6 mb-3 d-flex" style="position: relative;">
        <blockquote class="blockquote shadow rounded flex-fill">
            <div class="p-nota">
                <p class="mb-0 fw-400 noselect">{{$item->descripcion}}.</p>
                <hr>
                <footer class="blockquote-footer fw-300 fs-14 mb-3">{{$item->created_at->format('d M Y - H:i:s')}}
                </footer>
            </div>
            <div class="p-2 nota-acciones">
                <div style="background-color: gray;">
                    {{-- <form action="{{route('bajaNota',$item)}}" class="d-inline" method="POST">
                    @method('DELETE')
                    @csrf --}}
                    <button title="archivar" class="btn mr-2 btn-link fw-300 fs-12 text-uppercase float-right"
                        type="submit">archivar
                    </button>
                    </form>
                </div>
            </div>
        </blockquote>
    </div>

    @endforeach
</div>
@endif
@endsection