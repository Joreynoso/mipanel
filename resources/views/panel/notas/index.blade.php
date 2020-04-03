@extends('layout.main')

@section('content')

{{-- cabecera --}}
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0 text-gray-800 fw-400">Mis Notas</h1>
    <a href="{{ route('archivo')}}"
        class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm waves-effect waves-light"><i
            class="fas fa-archive fa-sm text-white-50"></i> archivo notas</a>
</div>

{{-- nuevo --}}
<button class="btn btn-primary shadow-sm mb-3 rounded-pill" data-toggle="modal" data-target="#myModal" id="open"
    style="min-width: 150px;">
    Nueva nota
</button>

{{-- existen elementos? --}}
@if ($notas->count() == 0)

@include('layout.nodata')

@else
{{-- notas --}}
<div class="row mt-2">

    @foreach ($notas as $item)

    <div class="col-xl-3 col-sm-6 mb-3 d-flex" style="position: relative;">
        <blockquote class="blockquote bg-white shadow rounded flex-fill">
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
                        type="submit" style="color: black;">archivar
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

{{-- modal --}}
<form method="post" id="form">
    @csrf

    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">Nueva nota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {{-- body modal --}}
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="descripcion" class="text-black-50">Descripcion:</label>
                            <input type="text" name="descripcion" class="form-control"
                                placeholder="Ingrese descripcion.." id="descripcion">
                        </div>
                    </div>
                </div>{{-- final body modal --}}

                {{-- modal footer --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-light shadow-sm mb-3 rounded-pill" data-dismiss="modal"
                        style="opacity: 0.7">Cancelar</button>
                    <button class="btn btn-primary shadow-sm mb-3 rounded-pill" id="ajaxSubmit">Crear nota</button>
                </div>
            </div>
        </div>
    </div>
</form>