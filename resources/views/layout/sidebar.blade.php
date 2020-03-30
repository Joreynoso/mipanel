<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Logo -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('principal')}}">
        <div class="sidebar-brand-icon">
            <i class="fab fa-r-project"></i>
        </div>
        <div class="sidebar-brand-text mx-3">RT<sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('panel/principal*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{route('principal')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- cabecera -->
    <div class="sidebar-heading">
        gestion de usuarios
    </div>

    <!-- usuarios -->
    <li class="nav-item {{ (request()->is('panel/usuarios*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{route('usuarios.index')}}">
            <i class="fas fa-users"></i>
            <span>Usuarios</span>
        </a>
    </li>

    <!-- roles -->
    <li class="nav-item {{ request()->is('panel/roles*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-user-tag"></i>
            <span>Roles</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ request()->routeIs('roles*') ? 'show' : ''}}"
            aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-dark py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('roles.index') ? 'active' : '' }}"
                    href="{{ route('roles.index')}}">Lista de roles</a>
                <a class="collapse-item {{ request()->routeIs('roles.create') ? 'active' : '' }}"
                    href="{{ route('roles.create')}}">Crear rol</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- cabecera -->
    <div class="sidebar-heading">
        calendario y tareas
    </div>

    <!-- notas -->
    <li class="nav-item {{ (request()->is('panel/notas*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{route('notas.index')}}">
            <i class="fas fa-sticky-note"></i>
            <span>Notas</span>
        </a>
    </li>

    <!-- notas -->
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-calendar-alt"></i>
            <span>Calendario</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->