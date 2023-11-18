<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('bookings') }}">
    <div class="sidebar-brand-icon">
      <i class="fa fa-home"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Administração</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->

  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('bookings') }}">
      <i class="fa fa-list"></i>
      <span>Lista de Reservas</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('guests') }}">
      <i class="fa fa-users"></i>
      <span>Hóspedes</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('rooms') }}">
      <i class="fa fa-bed"></i>
      <span>Informações - Quartos</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('room_types') }}">
      <i class="fa fa-door-open"></i>
      <span>Tipos de Quartos</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('services') }}">
      <i class="fa fa-bell"></i>
      <span>Serviços</span></a>
  </li>
<!--  
  <li class="nav-item">
  <a class="nav-link" href="{{ route('profile') }}">
      <i class="fa fa-user"></i>
      <span>Perfil</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('settings') }}">
      <i class="fa fa-cog"></i>
      <span>Configurações</span></a>
  </li>  
-->
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>