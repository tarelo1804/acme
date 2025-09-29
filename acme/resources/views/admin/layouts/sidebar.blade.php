<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ACME</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Usuarios -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Usuarios</span>
        </a>
    </li>

    <!-- Nav Item - Arquitectos -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.architects.index') }}">
            <i class="fas fa-fw fa-hard-hat"></i>
            <span>Arquitectos</span>
        </a>
    </li>

    <!-- Nav Item - Clientes -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.customers.index') }}">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Clientes</span>
        </a>
    </li>

    <!-- Nav Item - Proyectos -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.projects.index') }}">
            <i class="fas fa-fw fa-project-diagram"></i>
            <span>Proyectos</span>
        </a>
    </li>

    <!-- Nav Item - Planos -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.drawings.index') }}">
            <i class="fas fa-fw fa-drafting-compass"></i>
            <span>Planos Arquitectónicos</span>
        </a>
    </li>

    <!-- Nav Item - Revisiones -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.reviews.index') }}">
            <i class="fas fa-fw fa-clipboard-check"></i>
            <span>Revisiones</span>
        </a>
    </li>

    <!-- Nav Item - Zonas -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.zones.index') }}">
            <i class="fas fa-fw fa-map-marker-alt"></i>
            <span>Zonas</span>
        </a>
    </li>

</ul>
<!-- End of Sidebar -->