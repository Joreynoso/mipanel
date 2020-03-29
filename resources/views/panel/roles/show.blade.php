@extends('layout.main')

@section('content')

<!-- cabecera -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Show rol</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

{{-- volver btn --}}
<a href="{{ URL::previous() }}" class="btn btn-primary shadow-sm mb-2 rounded-pill"
    style="min-width: 150px;"><i class="fas fa-long-arrow-alt-left fs-12 mr-2"></i>volver</a>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>rol: {{$role->name}}</strong>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
    </div>
</div>

@endsection