@extends('layouts.auth')
@section('header')
    <title> Confirm Password | {{ env('APP_NAME') }}</title>
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
                                <h1 class="mb-1 fw-bold">Confirm Password</h1>
                                <p>{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                                </p>
                            </div>
                            <!-- Form -->
                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf


                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        name="password" placeholder="**************" required />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <!-- Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Confirm') }}
                                        </button>
                                    </div>
                                </div>
                                <hr class="my-4" />

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
