<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
  navbar-scroll="true">
  <div class="container-fluid py-1 px-3 custom-nav-style">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">@yield('pagetitle')</li>
      </ol>
    </nav>
    <div class="collapse navbar-collapse justify-content-end d-flex w-full">

      @if (auth()->user()->type == 'admin')
        <h3 class="badge badge-pill badge-lg bg-gradient-primary">Super Admin Panel</h3>
      @else
        <span class="badge badge-pill badge-lg bg-gradient-primary">
          {{ auth()->user()->shop->name }}
        </span>
      @endif
    </div>

    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end custom-navbar-wrap"
      id="navbar">
      <ul class="navbar-nav justify-content-lg-end custom-nav-style">
        <li class="nav-item d-flex align-items-center">
          @if (auth()->user()->photo)
            <img src="{{ asset('assets/images/' . auth()->user()->photo) }}" height="50">
          @else
            <img src="../assets/images/user.webp" class="avatar avatar-sm me-3">
          @endif
          {{-- <i class="fa fa-user me-sm-1"></i> --}}
          <span class="d-sm-inline d-none px-1">{{ auth()->user()->name }}</span>
        </li>

        <li class="nav-item d-flex align-items-center">
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}" class="logout-form-style">
            @csrf

            <x-dropdown-link href="route('logout')"
              onclick="event.preventDefault();
                                        this.closest('form').submit();">
              <i class="fa fa-power-off"></i>
              <span class="d-sm-inline d-none">Sign Out</span>
            </x-dropdown-link>
          </form>
          {{-- <a href="{{ url('/logout')}}" class="nav-link text-body font-weight-bold px-0">
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none">Sign Out</span>
                </a> --}}
        </li>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
