@extends('layouts.wrapper-auth')

@section('content')
    <div class="justify-content">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-transparent text-center py-4">
                        <h4 class="mb-3 text-center">
                            {{ __('Sign up') }}
                        </h4>
                        <div class="text-center">
                            @guest
                                @if (Route::has('login'))
                                    <a class="btn btn-sm gap-2 rounded-pill px-4 align-items-center" href="{{ route('login') }}">
                                        {{ __('Do you have an account? Login') }} <i class="bi bi-box-arrow-in-right"></i>
                                    </a>
                                @endif
                            @endguest
                        </div>
                    </div>

                    <div class="card-body p-4 p-lg-5">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name Field -->
                            <div class="mb-4">
                                <label for="name" class="form-label text-muted small mb-1">{{ __('Name') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-person text-muted"></i>
                                    </span>
                                    <input id="name" type="text"
                                        class="form-control border-start-0 @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Your name">
                                </div>
                                @error('name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="mb-4">
                                <label for="email" class="form-label text-muted small mb-1">{{ __('Email') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-envelope text-muted"></i>
                                    </span>
                                    <input id="email" type="email"
                                        class="form-control border-start-0 @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
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
                                        name="password" required autocomplete="new-password" placeholder="••••••••">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Confirm Password Field -->
                            <div class="mb-4">
                                <label for="password-confirm"
                                    class="form-label text-muted small mb-1">{{ __('Confirm password') }}</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-lock text-muted"></i>
                                    </span>
                                    <input id="password-confirm" type="password" class="form-control border-start-0"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="••••••••">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid mb-4">
                                <button type="submit" class="btn btn-sm btn-primary rounded-pill py-2 fw-bold">
                                    <i class="bi bi-person-plus me-2"></i> {{ __('Sign in') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection