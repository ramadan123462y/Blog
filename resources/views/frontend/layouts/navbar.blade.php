<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('blog') }}" class="logo d-flex align-items-center">
        <img src="{{ URL::asset('assets/img/logo.png') }}" alt="">

        <span>BLOG</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>

          <li><a class="nav-link scrollto" href="{{ url('/') }}">Team</a></li>
          <li><a href="{{ url('blog') }}">Blog</a></li>

          <li><a class="nav-link scrollto" href="{{ url('/') }}">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{ url('blog') }}">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
