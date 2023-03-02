@extends('layouts.auth')
@section('header')
    <title>Verify Email | {{ env('APP_NAME') }}</title>
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
                                <h1 class="mb-1 fw-bold">Verify your email</h1>
                                <p>We've sent a link to your email address</p>
                                @if (session('status') == 'verification-link-sent')
                                    <div class="mt-4 mb-3 alert-success">
                                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                    </div>
                                @endif
                            </div>
                            <!-- Form -->
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <div>
                                    <!-- Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Resend Verification Email') }}
                                        </button>
                                    </div>

                                </div>

                            </form>
                            <br>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div>
                                    <!-- Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-danger">
                                            {{ __('Log Out') }}
                                        </button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
