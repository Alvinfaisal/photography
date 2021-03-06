@extends('auth.layouts.main')

@section('container')
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

              <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
                  <div class="form-group">
                    <label for="email" value="{{ __('Email') }}">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" :value="old('email')" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label" value="{{ __('Password') }}" >Password</label>
                        @if (Route::has('password.request'))
                        <div class="float-right">
                        <a href="{{ route('password.request') }}" class="text-small">
                          {{ __('Forgot your password?') }}
                        </a>
                        </div>
                        @endif
                    </div>

                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember_me">
                      <label class="custom-control-label" for="remember_me">{{ __('Remember me') }}</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      {{ __('Log in') }}
                    </button>
                  </div>
                  <div class="mt-5 text-muted text-center">
                    Belum mempunyai akun? <a href="/register">Buat sekarang!</a>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection