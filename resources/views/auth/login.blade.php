@extends('layouts.wrapper-auth')

@section('content')
    <div class="justify-content">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-transparent text-center py-4">
                        <h4 class="mb-3 text-center">
                            </i> {{ __('Login') }}
                        </h4>
                        <div class="text-center">
                            @guest
                                @if (Route::has('register'))
                                    <a class="btn btn-sm gap-2 rounded-pill px-4 align-items-center" href="{{ route('register') }}">
                                        {{ __('Don\'t have an account? Sign Up') }} <i class="bi bi-person-plus"></i>
                                    </a>
                                @endif
                            @endguest
                        </div>
                    </div>

                    <div class="card-body p-4 p-lg-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Field -->
                            <div class="mb-4">
                                <label for="email" class="form-label text-muted small mb-1">{{ __('Email') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-envelope text-muted"></i>
                                    </span>
                                    <input id="email" type="email"
                                        class="form-control border-start-0 @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="example@domain.com">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="mb-4">
                                <label for="password" class="form-label text-muted small mb-1">{{ __('Password') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-lock text-muted"></i>
                                    </span>
                                    <input id="password" type="password"
                                        class="form-control border-start-0 @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" placeholder="••••••••">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="mb-4 form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label text-muted small" for="remember">
                                    {{ __('Remember me') }}
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid mb-4">
                                <button type="submit" class="btn btn-sm btn-primary rounded-pill py-2 fw-bold">
                                    <i class="bi bi-box-arrow-in-right me-2"></i> {{ __('Login') }}
                                </button>
                            </div>

                            <!-- Forgot Password Link -->
                            @if (Route::has('password.request'))
                                <div class="text-center">
                                    <a class="text-decoration-none text-muted small" href="{{ route('password.request') }}">
                                        {{ __('Forgot password?') }}
                                    </a>
                                </div>
                            @endif
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection