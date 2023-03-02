@extends('layouts.auth')
@section('header')
    <title>Forgot Password | {{ env('APP_NAME') }}</title>
@endsection
@section('auth-body')
    <main>
        <section class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center g-0 min-vh-100">
                <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                    <!-- Card -->
                    <div class="card shadow">
                        <!-- Card body -->
                        <div class="card-body p-6">
                            <div class="mb-4">
                                <a href="#"><img src="{{ asset('assets/images/brand/logo/logo-icon.svg') }}"
                                        class="mb-4" alt="" /></a>
                                <h1 class="mb-1 fw-bold">Forgot Password</h1>
                                <p>Fill the form to reset your password.</p>
                            </div>
                            <!-- Form -->
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf


                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label"> Your Email</label>
                                    <input type="email" id="email" name="email" class="form-control" name="email"
                                        placeholder="Email address here" required />

                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <!-- Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Email Password Reset Link') }}
                                        </button>
                                    </div>
                                    <span>Return to <a href="{{ route('login') }}">sign-in</a> </span>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
