 <!-- ======= Header ======= -->
  <header id="header" class="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center">
    <img src="assets/img/logo.png" style="height: 30%; width: 4%;">
      <h1 class="logo me-auto"><a href="/">Antricare</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="home">Home</a></li>
 
          <li><a class="nav-link scrollto" href="/AboutUs">AboutUs</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      @auth
        <div class="dropdown ms-3">
            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu">
              @if (auth()->user()->roles === 'admin')
                <li><a class="dropdown-item" href="/dashboard">Dashboard </a></li>
              @else
                <li><a class="dropdown-item" href="/antrian">Menu Antrian </a></li>
              @endif    
              
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <span class="align-middle">Keluar</span>
                  </button>
                </form>

            </ul>
        </div>
      @else
        <a href="/login" class="appointment-btn scrollto">Login</a>
      @endauth

    </div>
  </header><!-- End Header -->