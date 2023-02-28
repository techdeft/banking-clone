@extends('layouts.auth')
@section('header')
    <title> Register | {{ env('APP_NAME') }}</title>
@endsection
@section('auth-body')
    <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
        <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
            <!-- Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="text-center">
                    <div class="mb-5">
                        <h1 class="display-5">Create your account</h1>
                        <p>Already have an account? <a class="link" href="{{ route('login') }}">Sign in
                                here</a></p>
                    </div>


                </div>

                <label class="form-label" for="fullNameSrEmail">Full name</label>

                <!-- Form -->
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <input type="text" class="form-control form-control-lg" name="first_name"
                                id="fullNameSrEmail" placeholder="First Name" value="{{ old('first_name') }}"
                                aria-label="Mark" required>
                            <span class="invalid-feedback">Please enter your first name.</span>
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- End Form -->
                    </div>

                    <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <input type="text" class="form-control form-control-lg" name="last_name"
                                placeholder="Last Name" aria-label="Williams" value="{{ old('last_name') }}" required>
                            <span class="invalid-feedback">Please enter your last name.</span>
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- End Form -->
                    </div>
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                    <label class="form-label" for="signupSrEmail">Your email</label>
                    <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail"
                        placeholder="Markwilliams@site.com" aria-label="Markwilliams@site.com" value="{{ old('email') }}"
                        required>
                    <span class="invalid-feedback">Please enter a valid email address.</span>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="tell" class="form-control form-control-lg" name="phone" id="signupSrEmail"
                        placeholder="+2348165049996" aria-label="phone" value="{{ old('phone') }}" required>
                    <span class="invalid-feedback">Please enter a valid phone.</span>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                    <label class="form-label" for="signupSrPassword">Password</label>

                    <div class="input-group input-group-merge" data-hs-validation-validate-class>
                        <input type="password" class="js-toggle-password form-control form-control-lg" name="password"
                            id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required"
                            required minlength="8"
                            data-hs-toggle-password-options='{
                       "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                       "defaultClass": "bi-eye-slash",
                       "showClass": "bi-eye",
                       "classChangeTarget": ".js-toggle-password-show-icon-1"
                     }'>
                        <a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;">
                            <i class="js-toggle-password-show-icon-1 bi-eye"></i>
                        </a>
                    </div>

                    <span class="invalid-feedback">Your password is invalid. Please try again.</span>
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                    <label class="form-label" for="signupSrConfirmPassword">Confirm password</label>

                    <div class="input-group input-group-merge" data-hs-validation-validate-class>
                        <input type="password" class="js-toggle-password form-control form-control-lg"
                            name="password_confirmation" id="signupSrConfirmPassword" placeholder="8+ characters required"
                            aria-label="8+ characters required" required minlength="8"
                            data-hs-toggle-password-options='{
                       "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                       "defaultClass": "bi-eye-slash",
                       "showClass": "bi-eye",
                       "classChangeTarget": ".js-toggle-password-show-icon-2"
                     }'>
                        <a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;">
                            <i class="js-toggle-password-show-icon-2 bi-eye"></i>
                        </a>
                    </div>

                    <span class="invalid-feedback">Password does not match the confirm password.</span>
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </div>
                <!-- End Form -->

                <!-- Form Check -->
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="termsCheckbox" required>
                    <label class="form-check-label" for="termsCheckbox">
                        I accept the <a href="#">Terms and Conditions</a>
                    </label>
                    <span class="invalid-feedback">Please accept our Terms and Conditions.</span>
                </div>
                <!-- End Form Check -->

                <div class="d-grid gap-2">
                    <button type="submit" onclick="submit" class="btn btn-primary btn-lg">{{ __('Register') }}</button>

                </div>
            </form>
            <!-- End Form -->
        </div>
    </div>
    <!-- End Col -->
@endsection
