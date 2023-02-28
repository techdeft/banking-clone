{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout> --}}

@extends('layouts.auth')
@section('header')
    <title> Verify Email | {{ env('APP_NAME') }}</title>
@endsection
@section('auth-body')
    <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
        <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
            <div class="text-center">
                <div class="mb-4">
                    <img class="avatar avatar-xxl avatar-4x3"
                        src="{{ asset('backend/assets/svg/illustrations/oc-email-verification.svg') }}"
                        alt="Image Description" data-hs-theme-appearance="default">
                    <img class="avatar avatar-xxl avatar-4x3"
                        src="{{ asset('backend/assets/svg/illustrations-light/oc-email-verification.svg') }}"
                        alt="Image Description" data-hs-theme-appearance="dark">
                </div>

                <h1 class="display-5">Verify your email</h1>

                <p class="mb-1">We've sent a link to your email address</p>

                <span class="d-block text-dark fw-semibold mb-1">mark@gmail.com</span>


                <p>Please follow the link inside to continue.</p>

                @if (session('status') == 'verification-link-sent')
                    <div class="mt-4 mb-3 alert-success">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <div class="mt-4 mb-3">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-danger" type="submit">{{ __('Log Out') }}</button>

                    </form>

                </div>
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <p>
                            <button class="btn text-primary" type="submit">{{ __('Resend Verification Email') }}
                            </button>
                        </p>


                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- End Col -->
@endsection
