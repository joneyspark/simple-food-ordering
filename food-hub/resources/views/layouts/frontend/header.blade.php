<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Delivery - Home</title>

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

  <!-- custom css -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
  <link rel="icon" href="{{ asset('frontend/assets/images/favicon.png') }}">

</head>

<body>
  <div id="v-app">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 border-bottom sticky-header">

      <div class="container" id="header-cart">
        <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0 flex-sm-grow-0 flex-grow-1"
          href="/">
          <!-- <img src="frontend/assets/images/logo.webp" alt="site icon"> -->
          <span class="logo-text text-uppercase flex-grow-1"><i class="fas fa-utensils"></i> FOOD HUB</span>
        </a>

        <div class="order-lg-2 nav-btns header-cart d-flex">
          <span class="item-counter">@{{ totalQuantity }}</span>
          <a href="{{ url('cart') }}">
            <button type="button" class="btn position-relative">
              <i class="fas fa-shopping-cart"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
            </button>
          </a>
          @if (auth()->user())
            <div>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')" onclick="event.preventDefault();
            this.closest('form').submit();"
                  target="_blank" role="button" aria-pressed="true">
                  <button type="button" class="btn position-relative">
                    <i class="fa fa-power-off"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-warning"></span>
                  </button>
                </a>
              </form>
            </div>
          @else
            <a href="{{ url('/login') }}">
              <button type="button" class="btn position-relative">
                <i class="fa fa-user-plus"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
              </button>
            </a>
          @endif

        </div>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-lg-1 food-hub-menu" id="navMenu">
          <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item px-2 py-2">
              <a class="nav-link text-uppercase {{ Request::is('/') ? 'active-menu' : '' }}" href="{{ url('/') }}">
                Home
              </a>

            </li>
            <li class="nav-item px-2 py-2">
              <a class="nav-link text-uppercase {{ Request::is('menu') ? 'active-menu' : '' }}"
                href="{{ url('/menu') }}">
                Menu
              </a>
            </li>
            <li class="nav-item px-2 py-2">
              <a class="nav-link text-uppercase {{ Request::is('about') ? 'active-menu' : '' }}"
                href="{{ url('/about') }}">
                About us
              </a>

            </li>

            <li class="nav-item px-2 py-2 border-0">
              <a class="nav-link text-uppercase {{ Request::is('contact') ? 'active-menu' : '' }}"
                href="{{ url('/contact') }}">
                Contact us
              </a>

            </li>
            @if (auth()->user())
              <li class="nav-item px-2 py-2 border-0">
                <a class="nav-link text-uppercase {{ Request::is('myaccount') ? 'active-menu' : '' }}"
                  href="{{ url('/myaccount') }}">
                  My Orders
                </a>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
