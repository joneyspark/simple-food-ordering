<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
  id="sidenav-main" x-data="{ open: false }">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
      <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="...">
      <span class="ms-3 font-weight-bold">FOOD HUB</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ url('dashboard') }}">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-chart-pie"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      

    
      @if (auth()->user()->type == 'admin')
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#applicationsExamples"
            class="nav-link {{ Request::is('shops*') ? 'active' : '' }}" href="{{ url('shops') }}"
            aria-controls="applicationsExamples" role="button" aria-expanded="false">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <i class="fa-solid fa-shop-lock"></i>
            </div>
            <span class="nav-link-text ms-1">Shops</span>
          </a>
          <div class="collapse {{ Request::is('shops*') ? 'show' : '' }}" id="applicationsExamples" style="">
            <ul class="nav ms-4 ps-3">
              <li class="nav-item ">
                <a class="nav-link {{ Request::is('shops') ? 'active' : '' }}" href="{{ url('shops') }}">

                  <span class="sidenav-normal"> Shop List </span>
                </a>
              </li>

              <li class="nav-item ">
                <a class="nav-link {{ Request::is('shops/create') ? 'active' : '' }}"
                  href="{{ url('shops/create') }}">

                  <span class="sidenav-normal"> Add New Shop </span>
                </a>
              </li>

            </ul>
          </div>
        </li>
        
        
      @endif

      <li class="nav-link mb-0">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a href="route('logout')" onclick="event.preventDefault();
          this.closest('form').submit();"
            class="btn btn-primary btn-md active px-5 text-white" target="_blank" role="button"
            aria-pressed="true">
            Log Out</a>
        </form>
      </li>
    </ul>
  </div>

</aside>
