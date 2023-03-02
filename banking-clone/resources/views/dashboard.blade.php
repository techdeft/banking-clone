@extends('layouts.app')
@section('header')
    <title>Dashboard | Geeks - Bootstrap 5 Admin Dashboard Template</title>
@endsection
@section('main-body')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-4 mb-4 d-lg-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="mb-0 h2 fw-bold">👋 {{ Auth::user()->first_name }}</h1>
                    </div>
                    <div class="d-flex">
                        <div class="input-group me-3  ">
                            <input class="form-control flatpickr" type="text" placeholder="Select Date"
                                aria-describedby="basic-addon2">

                            <span class="input-group-text text-muted" id="basic-addon2"><i
                                    class="fe fe-calendar"></i></span>

                        </div>
                        <a href="#" class="btn btn-primary">Setting</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card body -->
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semi-bold">Total Balance</span>
                            </div>
                            <div>
                                <span>Account Number</span>
                                <h4>{{ Auth::user()->account }}</h4>
                            </div>

                        </div>
                        <h2 class="fw-bold mb-1">
                            $10,800
                        </h2>
                        <span class="text-success fw-semi-bold"><i class="fe fe-trending-up me-1"></i>+20.9$</span>
                        <span class="ms-1 fw-medium">history</span>
                        <div class="row my-3">
                            <div class="col-5 col-md-3 bg-primary p-3 rounded m-2 text-white">

                                <a href="" class="text-white">
                                    <i class="fe fe-credit-card fs-3"> </i>
                                    <span class="fs-6 text-uppercase fw-semi-bold">Fund</span>
                                </a>

                            </div>
                            <div class="col-5 col-md-3 bg-black p-3 rounded m-2 text-white">
                                <i class="fe fe-arrow-up fs-3"></i>
                                <span class="fs-6 text-uppercase fw-semi-bold">Send</span>
                            </div>
                            {{-- <div class="col-3 col-md-3 bg-black p-3 rounded m-2 text-white">
                                <i class="fe fe-dollar-sign fs-3"> </i>
                                <span class="fs-6 text-uppercase fw-semi-bold">Withdraw</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body p-3">
                                <i class="fe fe-phone-forwarded"></i>
                                <h5 class=" fw-bold mb-0">
                                    Buy Airtime
                                </h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body p-3">
                                <i class="fe fe-globe"></i>
                                <h5 class="fw-bold mb-0">
                                    Buy Data Plan
                                </h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body p-3">
                                <i class="fe fe-phone-forwarded"></i>
                                <h5 class=" fw-bold mb-0">
                                    Bill Payment
                                </h5>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body p-3">
                                <i class="fe fe-phone-forwarded"></i>
                                <h5 class=" fw-bold mb-0">
                                    Remita Payment
                                </h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body p-3">
                                <i class="fe fe-gift"></i>
                                <h5 class=" fw-bold mb-0">
                                    Buy Gift Card
                                </h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-4">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body p-3">
                                <i class="fe fe-tv"></i>
                                <h5 class=" fw-bold mb-0">
                                    Cable Sub
                                </h5>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card h-100 mb-4">
                    <!-- Card header -->
                    <div
                        class="card-header d-flex align-items-center
                  justify-content-between card-header-height">
                        <h4 class="mb-0">Transactions</h4>
                        <a href="#" class="btn btn-outline-secondary btn-sm">View all</a>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- List group -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0 pt-0 ">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-offline">
                                            <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-1.jpg') }}"
                                                class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n3">
                                        <h4 class="mb-0 h5">Rob Percival</h4>
                                        <span class="me-2 fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">42</span>Courses</span>
                                        <span class="me-2 fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">1,10,124</span>Students</span>
                                        <span class="fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">32,000</span> Reviews
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown7" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0 ">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-2.jpg') }}"
                                                class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n3">
                                        <h4 class="mb-0 h5">Jose Portilla</h4>
                                        <span class="me-2 fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">12</span>Courses</span>
                                        <span class="me-2 fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">21,567</span>Students</span>
                                        <span class="fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">22,000
                                            </span> Reviews
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown8" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                            </li>

                            <!-- List group -->
                            <li class="list-group-item px-0 ">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-info">
                                            <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-6.jpg') }}"
                                                class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n3">
                                        <h4 class="mb-0 h5">March Delson</h4>
                                        <span class="me-2 fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">23</span>Courses</span>
                                        <span class="me-2 fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">6,304</span>Students</span>
                                        <span class="fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">56,000</span> Reviews
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown10" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0 ">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-busy">
                                            <img alt="avatar" src="{{ asset('assets/images/avatar/avatar-7.jpg') }}"
                                                class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n3">
                                        <h4 class="mb-0 h5">Sina Ray</h4>
                                        <span class="me-2 fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">14</span>Courses</span>
                                        <span class="me-2 fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">8,000</span>Students</span>
                                        <span class="fs-6">
                                            <span class="text-dark  me-1 fw-semi-bold">33,000</span> Reviews
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                                role="button" id="courseDropdown11" data-bs-toggle="dropdown"
                                                data-bs-offset="-20,20" aria-expanded="false">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                                                <span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-edit dropdown-item-icon "></i>Edit</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fe fe-trash dropdown-item-icon "></i>Remove</a>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card mb-4">
                    <!-- Card header -->
                    <div
                        class="card-header align-items-center card-header-height  d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="mb-0">Trasaction</h4>
                        </div>
                        <div>
                            <div class="dropdown dropstart">
                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                                    id="courseDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="courseDropdown2">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#"><i
                                            class="fe fe-external-link dropdown-item-icon "></i>Export</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fe fe-mail dropdown-item-icon "></i>Email
                                        Report</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fe fe-download dropdown-item-icon "></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div id="traffic" class="apex-charts d-flex justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
