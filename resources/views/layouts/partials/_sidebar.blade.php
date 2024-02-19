<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
      <span class="brand-text font-weight-light">Portfolio Website</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/img/Picture1.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ config('app.name', 'Benidic Espinosa') }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('admin') }}" class="nav-link {{ Request::routeIs('admin') ? 'active' : '' }}">
                <i class="fa-solid fa-table-columns mr-2"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.home') }}" class="nav-link {{ Request::routeIs('admin.home') ? 'active' : '' }}">
                <i class="fa-solid fa-house mr-2"></i>
              <p>
                Home Page
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.about') }}" class="nav-link {{ Request::routeIs('admin.about') ? 'active' : '' }}">
                <i class="fa-regular fa-address-card mr-2"></i>
              <p>
                About Page
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.contact') }}" class="nav-link {{ Request::routeIs('admin.contact') ? 'active' : '' }}">
                <i class="fa-solid fa-phone mr-2"></i>
              <p>
                Contact Page
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.resume') }}" class="nav-link {{ Request::routeIs('admin.resume') ? 'active' : '' }}">
                <i class="fa-solid fa-newspaper mr-2"></i>
              <p>
                Resume
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
