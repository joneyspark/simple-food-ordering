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
                  <h3 class="font-weight-bolder text-info text-gradient">Register in Food Hub</h3>
                  <p class="mb-0">Enter your information to Register</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="md-3">
                      <label for="name">Name</label>
                      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required  autofocus />

                      <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                    </div>

                    <label>Email</label>
                    <div class="mb-3">
                      <x-text-input id="email" type="email" name="email" :value="old('email')"  autofocus required />
                      <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>

                    <label>Password</label>
                    <div class="mb-3">
                      <x-text-input id="password" type="password" name="password" 
                        autocomplete="current-password" required />

                      <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

                    </div>

                    <label>Confirm Password</label>
                    <div class="mb-3">

                      <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required />

                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                          {{ __('Already registered?') }}
                        </a>
                
                        <x-primary-button class="ml-4">
                          {{ __('Register') }}
                        </x-primary-button>
                      </div>
                    
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center login-regisger-img">
              <img src="{{ asset('assets/images/food-reg.svg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
