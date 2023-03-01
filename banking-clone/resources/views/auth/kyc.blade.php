@extends('layouts.kyc')
@section('header')
    <title> Register | {{ env('APP_NAME') }}</title>
@endsection
@section('auth-body')
    <div class="col-lg-8 d-flex justify-content-center align-items-center m-auto min-vh-lg-100">
        <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
            <!-- Form -->
            @if ($user->kyc()->count() === 0)
                <form method="POST" action="{{ route('kyc.submit') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="text" name="user_id" value="{{ Auth::user()->id }}" readonly hidden>
                    <div class="text-center">
                        <div class="mb-5">
                            <h1 class="display-5">Kyc</h1>

                        </div>

                        <h5 class="display-6 mt-3">Hi! 👋 {{ Auth::user()->last_name }} </h5>
                    </div>



                    <!-- Form -->
                    <div class="mb-4">
                        <label class="form-label" for="phone">{{ _('Full Address') }}</label>
                        <input type="text" class="form-control form-control-lg" name="address"
                            placeholder="Street,Area,City, State,Country" aria-label="address" value="{{ old('address') }}"
                            required>
                        <span class="invalid-feedback">Please enter a valid address.</span>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-4">
                        <label class="form-label" for="phone">{{ _('BVN') }}</label>
                        <input type="number" class="form-control form-control-lg" name="bvn" placeholder="235666669996"
                            aria-label="phone" value="{{ old('bvn') }}" required>
                        <span class="invalid-feedback">Please enter a valid phone.</span>
                        @error('bvn')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- End Form -->
                    <!-- Form -->
                    <div class="mb-4">
                        <label class="form-label" for="phone">{{ _('ID Type') }}</label>
                        <select name="id_type" id="" class="form-control form-control-lg" required>
                            <option value="">Select ID Type </option>
                            <option value="nin">NIN </option>
                            <option value="Int Passport">Int Passport </option>
                        </select>
                        </select>
                        @error('id_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- End Form -->
                    <!-- Form -->
                    <div class="mb-4">
                        <label class="form-label" for="phone">{{ _('ID Number') }}</label>
                        <input type="number" class="form-control form-control-lg" name="id_number"
                            placeholder="235666669996" aria-label="phone" value="{{ old('id_number') }}" required>
                        <span class="invalid-feedback">Please enter a valid ID Number.</span>
                        @error('id_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-4">
                        <label class="form-label" for="phone">{{ _('ID Image') }}</label>
                        <input type="file" class="form-control form-control-lg" name="id_card"
                            value="{{ old('id_card') }}" required>
                        <span class="invalid-feedback">Please enter a valid ID Number.</span>
                        @error('id_card')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- End Form -->





                    <div class="d-grid gap-2">
                        <button type="submit" onclick="submit"
                            class="btn btn-primary btn-lg">{{ __('Register') }}</button>

                    </div>
                </form>
            @else
                <div class="w-75 w-sm-50 mx-auto mb-4">
                    <img class="img-fluid" src="{{ asset('backend/assets/svg/illustrations/oc-collaboration.svg') }}"
                        alt="">
                </div>

                <h1 class="display-5">We are reviewing your Details</h1>
                <p>This process is takes less than 5 mins, you will be redirected shortly</p>
            @endif
            <!-- End Form -->
        </div>
    </div>
    <!-- End Col -->
@endsection
