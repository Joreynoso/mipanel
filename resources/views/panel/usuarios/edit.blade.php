@extends('layout.main')

@section('content')

{{-- cabecera --}}
<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0 text-gray-800 ml-1">Editar Usuario</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

{{-- volver btn --}}
<a href="{{ URL::previous() }}" class="btn btn-light shadow-sm mb-3 rounded-pill" style="min-width: 150px;"><i
        class="fas fa-long-arrow-alt-left fs-12 mr-2"></i>Volver</a>

<div class="row">
    <div class="col-lg-6 mb-4 mt-2">
        <div class="card shadow">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                {!! Form::model($user, ['method' => 'PATCH','route' => ['usuarios.update', $user->id]]) !!}

                <div class="form-group">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="name" class="text-black-50">Nombre y apellido:</label>
                            {!! Form::text('name', null, array('placeholder' => 'Nombre y apellido..','class' => 'form-control'))
                            !!}

                            @error('name')
                            <p class="help-block fw-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="text-black-50">Email:</label>
                            {!! Form::text('email', null, array('placeholder' => 'email..','class' => 'form-control'))
                            !!}

                            @error('email')
                            <p class="help-block fw-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="text-black-50">Contraseña:</label>
                            <label for="password" class="float-right text-success">
                                Al menos 6 caracteres <i class="fas fa-check-circle text-success fs-12">
                                </i>
                            </label>                            
                            {!! Form::password('password', array('placeholder' => 'Contraseña..','class' =>
                            'form-control'))
                            !!}

                            @error('password')
                            <p class="help-block fw-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="confirm-password" class="text-black-50">Confirmar Contraseña:</label>
                            {!! Form::password('confirm-password', array('placeholder' => 'Confirmar contraseña..','class' =>
                            'form-control')) !!}

                            @error('confirm-password')
                            <p class="help-block fw-300">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="roles[]" class="text-black-50">Seleccione un Rol:</label>
                            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple'))
                            !!}

                            @error('roles')
                            <p class="help-block fw-300">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary shadow-sm rounded-pill mt-2 mb-2 float-right"
                        style="min-width: 150px;">Editar usuario</button>

                </div>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}


@endsection