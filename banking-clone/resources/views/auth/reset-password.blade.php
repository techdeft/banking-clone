{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 --}}

@extends('layouts.auth')
@section('header')
    <title> Register | {{ env('APP_NAME') }}</title>
@endsection
@section('auth-body')
    <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
        <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
            <!-- Form -->
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">


                <div class="text-center">
                    <div class="mb-5">
                        <h1 class="display-5">Reset Password</h1>
                    </div>


                </div>

                <label class="form-label" for="fullNameSrEmail">Full name</label>


                <!-- Form -->
                <div class="mb-4">
                    <label class="form-label" for="signupSrEmail">Your email</label>
                    <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail"
                        value="{{ old('email', $request->email) }}" aria-label="Markwilliams@site.com" required>
                    <span class="invalid-feedback">Please enter a valid email address.</span>
                    @error('email')
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



                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">{{ __('Reset Password') }}</button>

                </div>
            </form>
            <!-- End Form -->
        </div>
    </div>
    <!-- End Col -->
@endsection
