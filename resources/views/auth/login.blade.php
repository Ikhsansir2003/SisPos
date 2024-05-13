@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: #D8ECE9;">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-lg-4">
            <div class="card border-0 shadow-lg" style="background-color: #ffffff;">
                <div class="card-body p-5">
                    <h2 class="card-title text-center mb-5" style="color: #333;">{{ __('Welcome Back!') }}</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label visually-hidden">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control py-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email" style="border-color: #ccc;">

                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label visually-hidden">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control py-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password" style="border-color: #ccc;">

                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember" style="color: #666;">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3" style="background-color: #4caf50; border-color: #4caf50;">{{ __('Login') }}</button>

                        @if (Route::has('password.request'))
                            <p class="text-center mb-0">
                                <a class="link-muted" href="{{ route('password.request') }}" style="color: #666;">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
