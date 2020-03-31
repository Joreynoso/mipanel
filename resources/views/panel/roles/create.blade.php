@extends('layout.main')

@section('content')

<!-- cabecera -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0 text-gray-800 ml-1">Crear Rol</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

{{-- volver btn --}}
<a href="{{ URL::previous() }}" class="btn btn-light shadow-sm mb-3 rounded-pill" style="min-width: 150px;"><i
        class="fas fa-long-arrow-alt-left fs-12 mr-2"></i>Volver</a>

{!! Form::open(array('route' => 'roles.store','method'=>'POST' )) !!}
<div class="row">
    <div class="col-lg-6 mb-3 mt-2">
        <div class="card shadow mb-4">
            <div class="card-header  py-3">
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="form-group">
                        <label for="name" class="text-black-50">Nombre:</label>
                        {!! Form::text('name', null, array('placeholder' => 'Nombre nuevo rol..','class' =>
                        'form-control form-control-user'))
                        !!}
                        @error('name')
                        <p class="help-block fw-300">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name" class="text-black-50">Selecciona los permisos:</label>
                        <ul class="list-group">
                            @foreach($permission as $value)
                            <li class="list-group-item rounded-0">
                                <div class="custom-control custom-checkbox">
                                    {{--  <label>
                                            <input name="permission[]" type="checkbox" value="{{$value->id}}">
                                    </label> --}}

                                    <input class="custom-control-input" name="permission[]" type="checkbox"
                                        value="{{$value->id}}" id="{{$value->id}}">

                                    <label class="cursor-pointer font-italic d-block custom-control-label"
                                        for="{{$value->id}}">{{$value->name}}</label>
                                </div>
                            </li>
                            @endforeach
                        </ul>

                        @error('roles')
                        <p class="help-block fw-300">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary shadow-sm rounded-pill mt-2 mb-2 float-right"
                    style="min-width: 150px;">Crear rol</button>

            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}

@endsection