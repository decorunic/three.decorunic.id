<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ '/' }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-vr-cardboard"></i>
        </div>
        <div class="sidebar-brand-text ml-3">3D Decorunic</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ ($title === 'Dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="{{ '/dashboard' }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        3D Model Management
    </div>
    <li class="nav-item {{ ($title === 'Product List') ? 'active' : ''}}">
        <a class="nav-link" href="{{ '/products/list' }}">
            <i class="fas fa-fw fa-box"></i>
            <span>Products</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
