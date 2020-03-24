@extends('layout.main')

@section('content')

<div class="row mt-5">
    <!-- Illustrations -->
    <div class="col-12">
        <div class="card" style="background: transparent; border: none;">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4 mt-4" style="width: 25rem;"
                    src="{{URL::asset('/img/undraw_empty.svg')}}" alt="">

                <p class="text-center">oops! parece que no has archivado ninguna nota aun!</p>
                <a href="{{ route('notas.index')}}">regresar &rarr;</a>
            </div>
        </div>
    </div>
</div>

@endsection