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
                <div class="card mb-4 bg-primary border-primary text-white">
                    <!-- Card body -->
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semi-bold text-white">Total Balance</span>
                            </div>
                            <div class="text-white">
                                <span>Account Number</span>
                                <h4 class="text-white">{{ Auth::user()->account }}</h4>
                            </div>

                        </div>
                        <h2 class="fw-bold mb-1 text-white">
                            ${{ Auth::user()->wallet->balance }}
                        </h2>
                        <span class="text-success fw-semi-bold text-white"><i
                                class="fe fe-trending-up me-1 text-white"></i>+20.9$</span>
                        <span class="ms-1 fw-medium text-white">history</span>
                        {{-- <div class="row my-3">
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
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                <div class="card p-2">
                    <div class="card-header">
                        <h5>Buy Airtime</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('airtime.buy') }}" method="POST">
                            @csrf

                            <div class="d-inline-flex">
                                <div class="form-check me-2">
                                    <input type="radio" id="paymentRadioOne" name="biller_name" class="form-check-input"
                                        required>
                                    <label class="form-check-label" for="paymentRadioOne"><img
                                            src="../assets/images/mtn.png" alt=""
                                            style="height:50px; width:40px;"></label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="paymentRadioFive" name="biller_name" class="form-check-input"
                                        required>
                                    <label class="form-check-label" for="paymentRadioFive"><img
                                            src="../assets/images/9mobile.png" style="height:50px; width:40px;"
                                            alt=""></label>
                                </div>
                                <!-- Radio button -->
                                <div class="form-check me-2">
                                    <input type="radio" id="paymentRadioTwo" name="biller_name" class="form-check-input"
                                        required>
                                    <label class="form-check-label" for="paymentRadioTwo"><img
                                            src="../assets/images/airtel.jpeg" style="height:50px; width:40px;"
                                            alt=""></label>
                                </div>

                                <!-- Radio button -->
                                <div class="form-check">
                                    <input type="radio" id="paymentRadioFour" name="biller_name" class="form-check-input"
                                        required>
                                    <label class="form-check-label" for="paymentRadioFour"><img
                                            src="../assets/images/glo.jpeg" style="height:50px; width:40px;"
                                            alt=""></label>
                                </div>

                            </div>
                            <div class="form-group my-2">
                                <label for="">Phone </label>
                                <input type="text" class="form-control lg" placeholder="08065*******" name="phone"
                                    required>
                            </div>
                            <div class="form-group my-2">
                                <label for="">Amount</label>
                                <input type="text" class="form-control" placeholder="100"
                                    max="{{ Auth::user()->wallet->balance }}" name="amount" required>
                            </div>

                            <div class="form-group my-2">
                                <label for="">Transaction Pin</label>
                                <input type="password" class="form-control" name="pin" required>
                            </div>

                            <button class="btn btn-primary" type="submit"> Buy Now</button>

                        </form>
                    </div>

                </div>

            </div>
        </div>


    </section>



    {{-- @include('customer.partials.modals')


    @include('customer.partials.ajax') --}}


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
