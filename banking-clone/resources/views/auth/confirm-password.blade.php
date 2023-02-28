@extends('layouts.auth')
@section('header')
    <title> Confirm Password | {{ env('APP_NAME') }}</title>
@endsection
@section('auth-body')
    <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
        <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
            <!-- Form -->
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="text-center">
                    <div class="mb-5">
                        <h1 class="display-5">Confirm password?</h1>
                        <p>{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                        </p>
                    </div>
                </div>

                <!-- Form -->
                <div class="mb-4">
                    <label class="form-label" for="resetPasswordSrEmail" tabindex="0">Your Password</label>

                    <input type="password" class="form-control form-control-lg" name="password" id="resetPasswordSrEmail"
                        tabindex="1" required>
                    <span class="invalid-feedback">Please enter a valid password.</span>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- End Form -->

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">{{ __('Confirm') }}</button>

                </div>
            </form>
            <!-- End Form -->
        </div>
    </div>
    <!-- End Col -->
@endsection
