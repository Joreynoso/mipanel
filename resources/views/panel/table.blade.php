@extends('layout.main')

@section('content')

{{-- ruta --}}
<div class="d-sm-flex align-items-center justify-content-between d-none mb-4 mt-4">
    <ul class="breadcrumb">
        <li><a href="#" class="link-dark">Panel</a></li>
        <li>Notas</li>
    </ul>

    <a href="{{ route('archivo')}}" class="d-sm-inline-block btn btn-dark shadow-sm rounded-circle">
        <i class="fas fa-archive text-white-50 mr-1"></i>
        archivadas</a>
</div>


<div class="list-inline text-right">
    {{--  buscar --}}
    <form action="" class="list-inline-item" style="width: 250px;">
        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-3" style="height: 43px;">
            <div class=" input-group">
                <div class="input-group-prepend">
                    <button id="button-addon2" type="submit" class="btn btn-link text-warning"><i
                            class="fa fa-search"></i></button>
                </div>

                <input type="search" placeholder="Que estas buscando?" aria-describedby="button-addon2"
                    class="form-control border-0 bg-light" style="height: 30px;">
            </div>
        </div>
    </form>

    {{--  ordenar por --}}
    <div class="dropdown mr-2 list-inline-item"">
            <button class=" btn btn-light dropdown-toggle rounded-pill rounded shadow-sm" type="button"
        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ordenar por
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">fecha</a>
            <a class="dropdown-item" href="#">apellido</a>
            <a class="dropdown-item" href="#">nombre</a>
        </div>
    </div>

    <button class="btn btn-light shadow-sm color-primario rounded-pill list-inline-item">Nueva nota</button>
</div>

{{-- datatable --}}
<div class="card shadow mb-4 mt-1">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-danger">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection