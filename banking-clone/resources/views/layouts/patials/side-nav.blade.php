<!-- Sidebar -->
<nav class="navbar-vertical navbar navbar-dark">
    <div class="vh-100" data-simplebar>
        <!-- Brand logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/brand/logo/logo-inverse.svg') }}" alt="">
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link  " href="{{ route('dashboard') }}">
                    <i class="nav-icon fe fe-home me-2"></i> Dashboard
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link  " href="{{ route('airtime') }}">
                    <i class="nav-icon fe fe-phone-forwarded me-2"></i> Buy Airtime
                </a>

            </li>








        </ul>
        <!-- Card -->
        <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
            <div class="card-body py-6">
                <img src="{{ asset('assets/images/background/giftbox.png') }}" alt="">
                <div class="mt-4">
                    <h5 class="text-white">Unlimited Access</h5>
                    <p class="text-white-50 fs-6">
                        Upgrade your plan from a Free trial, to select ‘Business Plan’. Start Now
                    </p>
                    <a href="#" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
                </div>
            </div>
        </div>
    </div>
</nav>
