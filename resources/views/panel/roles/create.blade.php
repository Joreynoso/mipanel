@extends('layout.main')

@section('content')

<!-- cabecera -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

{{-- formulario --}}
<div class="row">
    <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">formulario de roles y permisos</h6>
            </div>
            <div class="card-body">
                <form class="form-group" action="{{route('roles.store')}}" method="POST">
                    @csrf

                    <label for="name"><strong>Nombre Rol:</strong></label>
                    <input type="text" name="name" placeholder="nombre nuevo rol.." class="form-control">
                    @error('name')
                    <p class="help-block">{{ $message }}</p>
                    @enderror
                    <br>

                    <label for="nombre" style="margin-bottom: 0!important;"><strong>Lista de Permisos:</strong></label>
                    @error('name')
                    <p class="help-block">{{ $message }}</p>
                    @enderror
                    
                    <ul class="list-group">
                        @foreach ($permission as $value)
                        <li class="list-group-item rounded-0">
                            <div class="custom-control custom-checkbox">
                                <input name="permission" class="custom-control-input" id="{{$value->id}}" value="{{$value->id}}" type="checkbox">
                                <label class="cursor-pointer font-italic d-block custom-control-label" 
                                for="{{$value->id}}">{{$value->name}}</label>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                  
                    <button type="submit" 
                    class="btn btn-primary shadow-sm rounded-pill mt-4 mb-3 float-right"
                    style="min-width: 150px;">confirmar</button>

                </form>
            </div>
        </div>

    </div>
</div>

@endsection