<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link text-center">
      <span class="brand-text font-weight-light">Portfolio Website</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('images/'. Auth::user()->homes->first()->propic) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Session::get('USERNAME') }}</a>
        </div>
      </div>


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
            <a href="{{ route('admin.home') }}" class="nav-link {{ Request::routeIs('admin.home') || Request::routeIs('home.create') || Request::routeIs('home.edit') ? 'active' : '' }}">
                <i class="fa-solid fa-house mr-2"></i>
              <p>
                Home Page
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('about.index') }}" class="nav-link {{ Request::routeIs('about.index') || Request::routeIs('about.create') || Request::routeIs('about.edit') ? 'active' : '' }}">
                <i class="fa-regular fa-address-card mr-2"></i>
              <p>
                About Page
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contact.index') }}" class="nav-link {{ Request::routeIs('contact.index') || Request::routeIs('contact.create') || Request::routeIs('contact.edit') ? 'active' : '' }}">
                <i class="fa-solid fa-phone mr-2"></i>
              <p>
                Contact Page
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('resume.index') }}" class="nav-link {{ Request::routeIs('resume.index') || Request::routeIs('resume.create') || Request::routeIs('resume.edit') || Request::routeIs('education.create') || Request::routeIs('education.edit') || Request::routeIs('experience.create') || Request::routeIs('experience.edit') ? 'active' : '' }}">
                <i class="fa-solid fa-newspaper mr-2"></i>
              <p>
                Resume
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('skills.index') }}" class="nav-link {{ Request::routeIs('skills.index') || Request::routeIs('skills.create') || Request::routeIs('skills.edit') || Request::routeIs('skills.show') ? 'active' : '' }}">
                <i class="fas fa-code mr-2"></i>
              <p>
                Skills
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('blog.index') }}" class="nav-link {{ Request::routeIs('blog.index') || Request::routeIs('blog.create') || Request::routeIs('blog.edit') || Request::routeIs('blog.show') ? 'active' : '' }}">
                <i class="fas fa-newspaper mr-2"></i>
              <p>
                Blogs
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
