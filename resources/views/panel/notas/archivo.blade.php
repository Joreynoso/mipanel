@extends('layout.main')

@section('content')

<!-- cabecera -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Archivo de Notas</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


{{-- volver btn --}}
<a href="{{ URL::previous() }}" class="btn btn-primary shadow-sm mb-2 rounded-pill"
    style="min-width: 150px;"><i class="fas fa-long-arrow-alt-left fs-12 mr-2"></i>volver</a>

@include('layout.nodata')

@endsection