<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
  id="sidenav-main" x-data="{ open: false }">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="align-items-center d-flex m-0 navbar-brand text-wrap logo-text" href="{{ route('dashboard') }}">
      <span class="text-uppercase"><i class="fas fa-utensils"></i> FOOD HUB</span>
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
          <a data-bs-toggle="collapse" href="#category"
            class="nav-link {{ Request::is('category*') ? 'active' : '' }}" href="{{ url('category') }}"
            aria-controls="category" role="button" aria-expanded="false">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <i class="fa-solid fa-shop-lock"></i>
            </div>
            <span class="nav-link-text ms-1">Category</span>
          </a>
          <div class="collapse {{ Request::is('category*') ? 'show' : '' }}" id="category" style="">
            <ul class="nav ms-4 ps-3">
              <li class="nav-item ">
                <a class="nav-link {{ Request::is('category') ? 'active' : '' }}" href="{{ url('category') }}">

                  <span class="sidenav-normal"> Category List </span>
                </a>
              </li>

              <li class="nav-item ">
                <a class="nav-link {{ Request::is('category/create') ? 'active' : '' }}"
                  href="{{ url('category/create') }}">

                  <span class="sidenav-normal"> Add New Category </span>
                </a>
              </li>

            </ul>
          </div>
        </li>
        
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#foodItems"
            class="nav-link {{ Request::is('foods*') ? 'active' : '' }}" href="{{ url('foods') }}"
            aria-controls="foodItems" role="button" aria-expanded="false">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <i class="fa-solid fa-shop-lock"></i>
            </div>
            <span class="nav-link-text ms-1">Foods</span>
          </a>
          <div class="collapse {{ Request::is('foods*') ? 'show' : '' }}" id="foodItems" style="">
            <ul class="nav ms-4 ps-3">
              <li class="nav-item ">
                <a class="nav-link {{ Request::is('foods') ? 'active' : '' }}" href="{{ url('foods') }}">

                  <span class="sidenav-normal"> Food List </span>
                </a>
              </li>

              <li class="nav-item ">
                <a class="nav-link {{ Request::is('foods/create') ? 'active' : '' }}"
                  href="{{ url('foods/create') }}">

                  <span class="sidenav-normal"> Add New Food </span>
                </a>
              </li>

            </ul>
          </div>
        </li>
        
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#orders"
            class="nav-link {{ Request::is('orders*') ? 'active' : '' }}" href="{{ url('orders') }}"
            aria-controls="orders" role="button" aria-expanded="false">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
              <i class="fa-solid fa-shop-lock"></i>
            </div>
            <span class="nav-link-text ms-1">Orders</span>
          </a>
          <div class="collapse {{ Request::is('orders*') ? 'show' : '' }}" id="orders" style="">
            <ul class="nav ms-4 ps-3">
              <li class="nav-item ">
                <a class="nav-link {{ Request::is('orders') ? 'active' : '' }}" href="{{ url('orders') }}">
                  <span class="sidenav-normal"> Order List </span>
                </a>
              </li>
              
              <li class="nav-item ">
                <a class="nav-link {{ Request::is('pending-orders') ? 'active' : '' }}" href="{{ url('pending-orders') }}">
                  <span class="sidenav-normal"> Pending Order </span>
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
