@extends('layout.main')

@section('content')

{{-- cabecera --}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 ml-1">Crear Usuario</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

{{-- volver btn --}}
<a href="{{ URL::previous() }}" class="btn btn-primary shadow-sm mb-2 rounded-pill" style="min-width: 150px;"><i
        class="fas fa-long-arrow-alt-left fs-12 mr-2"></i>volver</a>

<div class="row">
    <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4 mt-2">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">formulario nuevo usuario</h6>
            </div>
            <div class="card-body">
                {!! Form::open(array('route' => 'usuarios.store','method'=>'POST')) !!}
                <div class="form-group">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'nombre..','class' => 'form-control')) !!}

                        @error('name')
                        <p class="help-block">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'email..','class' => 'form-control')) !!}

                        @error('email')
                        <p class="help-block">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Contraseña:</strong>
                        {!! Form::password('password', array('placeholder' => 'contraseña..','class' => 'form-control'))
                        !!}

                        @error('password')
                        <p class="help-block">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Confirmar Contraseña:</strong>
                        {!! Form::password('confirm-password', array('placeholder' => 'confirmar contraseña..','class'
                        =>
                        'form-control')) !!}

                        @error('confirm-password')
                        <p class="help-block">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <strong>Seleccione Un Rol:</strong>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}

                        @error('confirm-password')
                        <p class="help-block">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary shadow-sm rounded-pill mt-2 mb-2 float-right"
                    style="min-width: 150px;">confirmar</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection