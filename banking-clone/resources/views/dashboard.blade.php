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
                        <h1 class="mb-0 h2 fw-bold">Hi! 👋 {{ Auth::user()->first_name }}</h1>
                    </div>
                    {{-- <div class="d-flex">
                        <div class="input-group me-3  ">
                            <input class="form-control flatpickr" type="text" placeholder="Select Date"
                                aria-describedby="basic-addon2">

                            <span class="input-group-text text-muted" id="basic-addon2"><i
                                    class="fe fe-calendar"></i></span>

                        </div>
                        <a href="#" class="btn btn-primary">Setting</a>
                    </div> --}}
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
                            ${{ Auth::user()->wallet->balance }}
                        </h2>
                        <span class="text-success fw-semi-bold"><i class="fe fe-trending-up me-1"></i>+20.9$</span>
                        <span class="ms-1 fw-medium">history</span>
                        <div class="row my-3">
                            <div class="col-5 col-md-3 bg-primary p-3 rounded m-2 text-white">

                                <a href="" class="text-white" data-bs-toggle="modal" data-bs-target="#payModal">
                                    <i class="fe fe-credit-card fs-3"> </i>
                                    <span class="fs-6 text-uppercase fw-semi-bold">Fund</span>
                                </a>

                            </div>
                            <div class="col-5 col-md-3 bg-black p-3 rounded m-2 text-white">
                                <a class="text-white" data-bs-toggle="modal" data-bs-target="#Transfer">
                                    <i class="fe fe-arrow-up fs-3"></i>
                                    <span class="fs-6 text-uppercase fw-semi-bold">Send</span>
                                </a>

                            </div>
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
            <div class="col-xl-5 col-lg-12 col-md-12 col-12 mb-2">
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
                        <div id="donutchart" class="apex-charts d-flex justify-content-center"
                            style="width:100%; width:100%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12 col-md-12 col-12">
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
                        <div class="table-responsive">
                            <!-- Table -->
                            <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
                                <!-- Table Head -->
                                <thead class="table-light">
                                    <tr>
                                        <th>Trx_ref</th>
                                        <th>Trx</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        {{-- <th>Summary</th> --}}

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table body -->
                                    @forelse ($trx as $item)
                                        <tr>
                                            <td>{{ $item->trx_ref }}</td>
                                            <td>
                                                @if ($item->type == 'credit')
                                                    <div class="text-success">{{ ucfirst($item->type) }}</div>
                                                @else
                                                    <div class="text-danger">{{ ucfirst($item->type) }}</div>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $item->created_at }}
                                            </td>

                                            <td>
                                                @if ($item->type == 'credit')
                                                    <div class="text-success">+${{ $item->amount }}</div>
                                                @else
                                                    <div class="text-danger">-${{ $item->amount }}</div>
                                                @endif
                                            </td>


                                            {{-- <td>
                                                {{ $item->summary }}
                                            </td> --}}


                                        </tr>
                                    @empty

                                        <img src="{{ asset('assets/images/avater-1.jpg') }}" alt="">
                                        <h5>😞 No transactions Found</h5>
                                    @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>



    @include('customer.partials.modals')


    @include('customer.partials.ajax')


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Type', 'count'],
                ['Credit', 10],
                ['Debit', 0],

            ]);

            var options = {
                // title: 'Trx summary',
                legend: 'none',
                pieSliceText: 'label',
                pieStartAngle: 100,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));

            chart.draw(data, options);
        }
    </script>
@endsection
