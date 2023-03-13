<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Codescandy">



    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}">


    <!-- Libs CSS -->
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">




    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

    <title>SASS | Home </title>
</head>

<body class="bg-white overflow-hidden">

    <!-- Navbar -->
    <!-- navbar login -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-default shadow-none ">
        <div class="container px-0">
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/brand/logo/logo.svg') }}"
                    alt=""></a>

            <!-- Button -->
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="icon-bar top-bar mt-0"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav">


                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarAccount" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Accounts
                        </a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
                            <li>
                                <h4 class="dropdown-header">Accounts</h4>
                            </li>

                        </ul>
                    </li> --}}

                </ul>


                @auth
                    <div class="ms-auto mt-3 mt-lg-0">
                        <div class="d-flex align-items-center">

                            <a class="btn btn-primary" href="{{ route('dashboard') }}">
                                👋 {{ Auth::user()->first_name }}
                            </a>



                        </div>
                    </div>
                @else
                    <div class="ms-auto mt-3 mt-lg-0">
                        <div class="d-flex align-items-center">
                            <a href="#"
                                class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle me-2 ">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>

                            </a>

                            <a href="{{ route('login') }}" class="btn btn-primary ">Login</a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <main>
        <!-- Page Content -->
        <section class="py-lg-14 py-10 position-relative bg-cover"
            style="background-image:
      url(assets/images/background/gradient-bg.png);">
            <!-- Image -->
            <div class="container">
                <div class="row align-items-center mb-6">
                    <div class="col-12 col-lg-7 order-md-2">
                        <div class="mb-2 mb-md-0">
                            <img src="{{ asset('assets/images/background/graphics.svg') }}" alt=""
                                class="img-fluid mw-md-130">
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 order-md-1">
                        <!-- Heading -->
                        <h1 class="display-2 mb-5 fw-bold">
                            Digital Banking made easy
                        </h1>
                        <!-- list -->
                        <ul class="list-unstyled fs-3 text-dark
               mb-6 fw-medium">
                            <li class="mb-1 d-flex"><i
                                    class="mdi mdi-check-circle text-success
                  me-2"></i>Free inter
                                bank
                                transfer</li>
                            <li class="mb-1 d-flex"><i
                                    class="mdi mdi-check-circle text-success
                  me-2"></i>Unlimited USD
                                virtual card </li>
                            <li class="mb-1 d-flex"><i
                                    class="mdi mdi-check-circle text-success
                  me-2"></i>Free
                                Debit/Credit card</li>
                            <li class="mb-1 d-flex"><i
                                    class="mdi mdi-check-circle text-success
                  me-2"></i>Bill and tax
                                payment
                                cashback </li>
                        </ul>
                        <!-- Buttons -->
                        <div class="mb-8 mb-lg-0">
                            <a href="{{ route('register') }}" class="btn btn-primary me-3 mb-2 mb-lg-0">
                                Get started for Free
                            </a>

                            <a href="#" class="text-nowrap btn-link">
                                Questions? Talk to an expert
                            </a>
                        </div>

                    </div>
                </div>
                <!-- Hero Section -->
                <!-- row -->
                <div class="row mt-10">
                    <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                        <!-- Heading -->
                        <div class="text-center mb-6 px-md-8">
                            <span class="ls-md">TRUSTED BY MILLIONS OF DEVELOPERS
                                & THOUSANDS OF ENTERPRISE TEAMS</span>
                        </div>
                        <!-- row -->
                        <div class="row text-center">
                            <!-- col -->
                            <div class="col">
                                <div class="mb-4 mb-lg-0">
                                    <img src="{{ asset('assets/images/brand/gray-logo-airbnb.svg') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col">
                                <div class="mb-4 mb-lg-0">
                                    <img src="{{ asset('assets/images/brand/gray-logo-discord.svg') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-4 mb-lg-0">
                                    <img src="{{ asset('assets/images/brand/gray-logo-intercom.svg') }}"
                                        alt="" class="">
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col">
                                <div class="mb-4 mb-lg-0">
                                    <img src="{{ asset('assets/images/brand/gray-logo-stripe.svg') }}" alt=""
                                        class="">
                                </div>
                            </div>
                            <!-- col -->
                            <div class="col">
                                <div class="mb-4 mb-lg-0">
                                    <img src="{{ asset('assets/images/brand/gray-logo-netflix.svg') }}"
                                        alt="" class="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Client logo -->

    </main>

    <!-- footer -->
    <!-- footer -->
    <footer class="pt-lg-10 pt-5 footer bg-white">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- about company -->
                    <div class="mb-4">
                        <img src="../../assets/images/brand/logo/logo.svg" alt="" class="logo-inverse ">
                        <div class="mt-4">
                            <p>Geek is feature-rich components and beautifully Bootstrap UIKit for developers, built
                                with bootstrap responsive framework.</p>
                            <!-- social media -->
                            <div class="fs-4 mt-4">
                                <a href="#" class="mdi mdi-facebook fs-4 text-muted me-2"></a>
                                <a href="#" class="mdi mdi-twitter text-muted me-2"></a>
                                <a href="#" class="mdi mdi-instagram text-muted "></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
                    <div class="mb-4">
                        <!-- list -->
                        <h3 class="fw-bold mb-3">Company</h3>
                        <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                            <li><a href="#" class="nav-link">About</a></li>
                            <li><a href="#" class="nav-link">Pricing</a></li>
                            <li><a href="#" class="nav-link">Blog</a></li>
                            <li><a href="#" class="nav-link">Careers</a></li>
                            <li><a href="#" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="mb-4">
                        <!-- list -->
                        <h3 class="fw-bold mb-3">Support</h3>
                        <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                            <li><a href="#" class="nav-link">Help and Support</a></li>
                            <li><a href="#" class="nav-link">Become Instructor</a></li>
                            <li><a href="#" class="nav-link">Get the app</a></li>
                            <li><a href="#" class="nav-link">FAQ’s</a></li>
                            <li><a href="#" class="nav-link">Tutorial</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <!-- contact info -->
                    <div class="mb-4">
                        <h3 class="fw-bold mb-3">Get in touch</h3>
                        <p>339 McDermott Points Hettingerhaven, NV 15283</p>
                        <p class="mb-1">Email: <a href="#">support@geeksui.com</a></p>
                        <p>Phone: <span class="text-dark fw-semi-bold">(000) 123 456 789</span></p>

                    </div>
                </div>
            </div> --}}
            <div class="row align-items-center g-0 border-top py-2 mt-6">
                <!-- Desc -->
                <div class="col-lg-4 col-md-5 col-12">
                    <span>© 2022 Geeks-UI, Inc. All Rights Reserved</span>
                </div>

                <!-- Links -->
                <div class="col-12 col-md-7 col-lg-8 d-md-flex justify-content-end">
                    <nav class="nav nav-footer">
                        <a class="nav-link ps-0" href="#">Privacy Policy</a>
                        <a class="nav-link px-2 px-md-3" href="#">Cookie Notice </a>
                        <a class="nav-link d-none d-lg-block" href="#">Do Not Sell My Personal Information </a>
                        <a class="nav-link" href="#">Terms of Use</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->

    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>


    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>




    <script src="{{ asset('assets/libs/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/pricing.js') }}"></script>


</body>



</html>
