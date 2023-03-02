@extends('layouts.auth')
@section('header')
    <title>Login | {{ env('APP_NAME') }}</title>
@endsection
@section('auth-body')
    <main>
        <section class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center g-0 min-vh-100">
                <div class="col-lg-6 col-md-8 py-8 py-xl-0">
                    <!-- Card -->
                    <div class="card shadow">
                        <!-- Card body -->
                        <div class="card-body p-6">
                            <div class="mb-4">
                                <a href="#"><img src="{{ asset('assets/images/brand/logo/logo-icon.svg') }}"
                                        class="mb-4" alt="" /></a>
                                <h1 class="mb-1 fw-bold">Sign up</h1>
                                <span>Already have an account?
                                    <a href="{{ route('login') }}" class="ms-1">Sign in</a></span>
                            </div>
                            <!-- Form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row">
                                    <!-- Username -->
                                    <div class="mb-3 col">
                                        <label for="username" class="form-label">First Name</label>
                                        <input type="text" id="username" class="form-control" name="first_name"
                                            placeholder="First Name" value="{{ old('first_name') }}" required />
                                        @error('first_name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                    <!-- Username -->
                                    <div class="mb-3 col">
                                        <label for="username" class="form-label">Last Name</label>
                                        <input type="text" id="username" class="form-control" name="last_name"
                                            placeholder="Last Name" value="{{ old('last_name') }}" required />
                                        @error('last_name')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                </div>
                                <!-- Username -->
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tell" id="tell" class="form-control" name="phone"
                                        placeholder="081XXXXXXXX" value="{{ old('phone') }}" required />
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" name="email"
                                        placeholder="Email address here" value="{{ old('email') }}" required />
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="**************" required />
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label"> Confirm Password</label>
                                    <input type="password" id="password" class="form-control" name="password_confirmation"
                                        placeholder="**************" required />
                                    @error('password_confirmation')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <!-- Checkbox -->
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="agreeCheck" />
                                        <label class="form-check-label" for="agreeCheck"><span>I agree to the
                                                <a href="terms-condition-page.html">Terms of Service </a>and
                                                <a href="terms-condition-page.html">Privacy Policy.</a></span></label>
                                    </div>
                                </div>
                                <div>
                                    <!-- Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Create Free Account') }}
                                        </button>
                                    </div>
                                </div>
                                {{-- <hr class="my-4" />
                                <div class="mt-4 text-center">
                                    <!--Facebook-->
                                    <a href="#" class="btn-social btn-social-outline btn-facebook">
                                        <i class="mdi mdi-facebook fs-4"></i>
                                    </a>
                                    <!--Twitter-->
                                    <a href="#" class="btn-social btn-social-outline btn-twitter">
                                        <i class="mdi mdi-twitter fs-4"></i>
                                    </a>
                                    <!--LinkedIn-->
                                    <a href="#" class="btn-social btn-social-outline btn-linkedin">
                                        <i class="mdi mdi-linkedin"></i>
                                    </a>
                                    <!--GitHub-->
                                    <a href="#" class="btn-social btn-social-outline btn-github">
                                        <i class="mdi mdi-github"></i>
                                    </a>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
