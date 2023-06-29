<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
{{--
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/user">
        <i class=" fas fa-building"></i><span>Usuarios</span>
    </a>
</li>
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/role">
        <i class=" fas fa-building"></i><span>Roles</span>
    </a>
</li>
<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/proveedors">
        <i class=" fas fa-building"></i><span>Proveedor</span>
    </a>
</li> --}}


<li class="dropdown"><a href="#" data-toggle="dropdown"
    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
<div class="d-sm-none d-lg-inline-block">GESTION DE PERSONAL</div>
</a>
<div class="dropdown-menu dropdown-menu">
<a href="/user" class="dropdown-item has-icon">
<i class="fas fa-sign-in-alt"></i>Usuarios
</a>
<div class="dropdown-divider"></div>
<a href="{{ route('register') }}" class="dropdown-item has-icon">
<i class="fas fa-user-plus"></i>
</a>
</div>
</li>

<li class="dropdown"><a href="#" data-toggle="dropdown"
    class="nav-link dropdown-toggle nav-link-lg nav-link-user">
<div class="d-sm-none d-lg-inline-block">RESERVACIONES</div>
</a>
<div class="dropdown-menu dropdown-menu">
<a href="/reservacions" class="dropdown-item has-icon">
    <i class="fa-solid fa-clipboard"></i>Reservación
</a>
<div class="dropdown-divider"></div>
<a href="/mesas" class="dropdown-item has-icon">
    <i class="fa-solid fa-utensils"></i>Mesa
</a>

<div class="dropdown-divider"></div>
<a href="/clientes" class="dropdown-item has-icon">
<i class="fas fa-user-plus"></i>Clientes
</a>
</div>
</li>

