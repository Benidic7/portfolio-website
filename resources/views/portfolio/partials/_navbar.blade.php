
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="text-brand" style="text-decoration: none;">
        {{ $home->first_name }}<span class="color-b"> {{ $home->last_name }}</span>
      </a>

      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#home" class="nav-link mx-3 scrollto active">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link mx-3 scrollto">About</a>
          </li>
          <li class="nav-item">
            <a href="#resume" class="nav-link mx-3 scrollto">Resume</a>
          </li>
          <li class="nav-item">
            <a href="#portfolio" class="nav-link mx-3 scrollto">Portfolio</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link mx-3 scrollto">Contact</a>
          </li>
        </ul>
      </div>

      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault" style="margin-right: 40px;">
        <a href="{{ route('login')}}" class="btn btn-outline-primary">
            Login
        </a>
      </div>

    </div>
  </nav><!-- End Header/Navbar -->
