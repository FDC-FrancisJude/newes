<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <h1 class="sitename">
          Madridejos
          <br>
          Community
          <br>
          College
        </h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ url('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
          <li><a href="{{ url('courses') }}" class="{{ Request::is('courses') || Request::is('course-details') ? 'active' : '' }}">Courses</a></li>
          <li><a href="{{ url('instructors') }}" class="{{ Request::is('instructors') || Request::is('instructor-details') ? 'active' : '' }}">Instructors</a></li>
          <li><a href="{{ url('events') }}" class="{{ Request::is('events') ? 'active' : '' }}">Events</a></li>
          <li><a href="{{ url('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
          <li><a href="{{ url('why-us') }}" class="{{ Request::is('why-us') ? 'active' : '' }}">Why Us?</a></li>

          @if (auth()->check())
            <li class="dropdown">
              <a href="#">
              <img src="{{ auth()->check() && auth()->user()->avatar ? asset(auth()->user()->avatar) : (auth()->check() ? Avatar::create(auth()->user()->name)->toBase64() : asset('assets/img/logo.png')) }}" alt="Avatar" class="profile-avatar">
              </a>
              <ul>
                  <li><a href="dashboard"><i class="bi bi-speedometer"></i> Dashboard</a></li>
                  <li><a href="profile"><i class="bi bi-person-circle"></i> Profile</a></li>
                  <!-- <li><a href="settings"><i class="bi bi-gear"></i> Settings</a></li> -->
                  <li>
                      <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                          @csrf
                      </form>
                      <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right"></i> Logout</a>
                  </li>
              </ul>
            </li>
          @else
            <li><a href="{{ url('login') }}" class="login-btn btn btn-sm btn-outline-danger">Login</a></li>
          @endif

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

        <a class="btn-getstarted" href="pre-enroll">Pre-enroll Now</a>
        <a class="btn-getstarted d-none login-modal" data-bs-toggle="modal" data-bs-target="#signInModal" ></a>
    </div>
  </header>