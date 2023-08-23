@extends('layouts.user_type.auth')

@section('content')
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />
  <div class="main-content mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container login-blade-style">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto custom-p-m-login">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                      {{-- <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon"
                    required autofocus> --}}
                      {{-- @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror --}}
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <x-text-input id="password" type="password" name="password" required
                        autocomplete="current-password" />

                      <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    </div>
                    <div class="flex items-center justify-end mt-4">
                      <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('New Customer Sign up ?') }}
                      </a>

                    </div>
                    <div class="text-center">
                      <x-primary-button>
                        {{ __('Log in') }}
                      </x-primary-button>
                      {{-- <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button> --}}
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center login-regisger-img">
              <img src="{{ asset('assets/images/food.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
