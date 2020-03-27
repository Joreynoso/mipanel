@extends('layout.main')

@section('content')

<!-- cabecera -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">formulario de roles y permisos</h6>
            </div>
            <div class="card-body">
                <label for="name"><strong>Nombre:</strong></label>
                {!! Form::text('name', null, array('placeholder' => 'Nombre nuevo rol..','class' => 'form-control')) !!}
                @error('name')
                <p class="help-block">{{ $message }}</p>
                @enderror
                <br>

                <div class="form-group">
                    <label for="name"><strong>Permisos:</strong></label>
                    @error('name')
                    <p class="help-block">{{ $message }}</p>
                    @enderror
                    <br />
                    <ul class="list-group">
                        @foreach($permission as $value)
                        <li class="list-group-item rounded-0">
                            <div class="custom-control custom-checkbox">
                                {{--  <label>
                                    <input name="permission[]" type="checkbox" value="{{$value->id}}">
                                </label>  --}}

                                <input class="custom-control-input" 
                                name="permission[]" type="checkbox"  
                                value="{{$value->id}}"
                                id="{{$value->id}}">

                                <label class="cursor-pointer font-italic d-block custom-control-label"
                                    for="{{$value->id}}">{{$value->name}}</label>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <button type="submit" class="btn btn-primary shadow-sm rounded-pill mt-4 mb-3 float-right"
                    style="min-width: 150px;">confirmar</button>

            </div>
        </div>
    </div>
</div>


{!! Form::close() !!}

@endsection