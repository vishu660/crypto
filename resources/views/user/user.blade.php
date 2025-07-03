@extends('user.main')

@section('content')
<!-- Main Body-->
<div class="d2c_main p-4">

    <!-- Title -->
    <div class="row align-items-center mb-4">
        <div class="col-2 d-block d-lg-none">
            <!-- Offcanvas Toggler -->
            <button class="btn btn-primary px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar"
                aria-controls="d2c_sidebar">
                <i class="fa fa-bars p-0"></i>
            </button>
            <!-- End:Offcanvas Toggler -->
        </div>
        <div class="col">
            <p class="mb-0">Welcome Back</p>
            <h4 class="text-capitalize fw-bold">Fundrows home</h4>
        </div>
    </div>
    <!-- End:Title -->

    <!-- Transaction Statistics -->
    <div class="row mb-4">
        <div class="col-md-6 mb-3">
            <div class="card bg-primary bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <div
                                class="rounded bg-primary bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-primary d2c_card_icon_wrapper">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-0">Total Transaction</h6>
                            <h4 class="mb-0 fw-bold">{{ $allTransactions->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card bg-success bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <div
                                class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-success d2c_card_icon_wrapper">
                                <i class="fas fa-check-circle"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-0">Completed</h6>
                            <h4 class="mb-0 fw-bold">{{ $allTransactions->where('status', 'success')->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card bg-warning bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <div
                                class="rounded bg-warning bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-warning d2c_card_icon_wrapper">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-0">Pending</h6>
                            <h4 class="mb-0 fw-bold">{{ $allTransactions->where('status', 'pending')->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card bg-danger bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <div
                                class="rounded bg-danger bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-danger d2c_card_icon_wrapper">
                                <i class="fas fa-times-circle"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="fw-semibold mb-0">Failed</h6>
                            <h4 class="mb-0 fw-bold">{{ $allTransactions->where('status', 'failed')->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End:Transaction Statistics -->

    <div class="row">
        @php
        $colors = ['#6271ebe0', '#23cb62e0', '#fc76b7eb'];
        @endphp

        @forelse($packages as $index => $package)
        @php $color = $colors[$index % count($colors)]; @endphp

        <div class="col-md-6 col-xxl-4">
            <div class="card position-relative mb-4" style="
                    background: linear-gradient(180deg, {{ $color }} 0%, #6271ebd6 270.67%),
                    url(./assets/images/triangle_bg.png);
                    background-repeat: no-repeat;
                    background-size: cover;
                    border-radius: 15px;
                    overflow: hidden;
                    padding: 30px;
                    color: #fff;
                ">

                <form method="POST" action="{{ route('packages.buy') }}">
                    @csrf
                    <input type="hidden" name="package_id" value="{{ $package->id }}">
                    <button type="submit" class="btn btn-success position-absolute" style="
                            top: 15px;
                            right: 15px;
                            border-radius: 30px;
                            padding: 6px 16px;
                            font-weight: 600;
                            font-size: 14px;
                        ">
                        Buy
                    </button>
                </form>

                <!-- Main Balance -->
                <p class="mb-1 text-white">Investment</p>
                <h3 class="fw-bold mb-5 text-white">
                    ${{ number_format($package->investment_amount, 2) }}
                </h3>

                <!-- Bottom Details (like Balance card) -->
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="mb-1 text-white">Package</p>
                        <h6 class="fw-semibold text-white">{{ $package->name }}</h6>
                    </div>
                    <div>
                        <p class="mb-1 text-white">Valid date</p>
                        <h6 class="fw-semibold text-white">
                            {{ now()->addDays($package->validity_days)->format('m/Y') }}
                        </h6>
                    </div>
                </div>

                <!-- Extra Details Below -->
                <div class="d-flex justify-content-between">
                    <div class="mt-4">
                        <p class="mb-1 text-white"><strong>ROI:</strong></p>
                        <p class="mb-1 text-white"><strong>Bonus:</strong></p>
                        <p class="mb-1 text-white"><strong>Referral:</strong></p>
                        <p class="mb-1 text-white"><strong>Type:</strong></p>

                        @if($package->type_of_investment_days == 'daily')
                        <p class="mb-1 text-white"><strong>Daily Days:</strong></p>
                        @elseif($package->type_of_investment_days == 'weekly')
                        <p class="mb-1 text-white"><strong>Weekly Day:</strong></p>
                        @elseif($package->type_of_investment_days == 'monthly')
                        <p class="mb-1 text-white"><strong>Monthly Date:</strong></p>
                        @endif

                        <p class="mb-1 text-white"><strong>Status:</strong></p>
                    </div>

                    <div class="mt-4">
                        <p class="mb-1 text-white">{{ $package->roi_percent }}%</p>
                        <p class="mb-1 text-white">{{ $package->direct_bonus_percent }}%</p>
                        <p class="mb-1 text-white">{{ $package->referral_income }}%</p>
                        <p class="mb-1 text-white">{{ ucfirst($package->type_of_investment_days) }}</p>

                        @if($package->type_of_investment_days == 'daily' && $package->daily_days)
                        <p class="mb-1 text-white">{{ implode(', ', $package->daily_days) }}</p>
                        @elseif($package->type_of_investment_days == 'weekly' && $package->weekly_day)
                        <p class="mb-1 text-white">{{ $package->weekly_day }}</p>
                        @elseif($package->type_of_investment_days == 'monthly' && $package->monthly_date)
                        <p class="mb-1 text-white">{{ $package->monthly_date }}</p>
                        @endif

                        <p class="mb-0 text-white">{{ $package->is_active ? 'Active' : 'Inactive' }}</p>
                    </div>
                </div>

            </div>
        </div>

        @empty
        <div class="col-12 text-center">
            <div class="alert alert-warning">
                No active packages available at the moment.
            </div>
        </div>
        @endforelse
    </div>







    {{-- <div class="row">
        <!-- small card item -->
        <div class="col-md-6 col-xxl-3 mb-4 d2c_balance_card">
            <div class="card bg-success bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                        <div class="me-3">
                            <div
                                class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                <i class="fab fa-btc"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-uppercase fw-semibold mb-0">BTC-USD</h6>
                            <small class="mb-0 text-muted">Bitcoin USD</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <button
                                class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+1256.25%</button>
                            <span class="text-success fs-4" style="transform: rotate(45deg);">
                                <i class="fas fa-arrow-alt-circle-up"></i>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <!-- <div id="d2c_market_lineChart"></div> -->
                        </div>
                    </div>

                    <h4 class="mb-0 fw-semibold mt-2">$12,208.73</h4>

                </div>
            </div>
        </div>

        <!-- small card item (2) -->
        <div class="col-md-6 col-xxl-3 mb-4 d2c_balance_card">
            <div class="card bg-success bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                        <div class="me-3">
                            <div
                                class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                <i class="fab fa-bitcoin"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-uppercase fw-semibold mb-0">BNB-USD</h6>
                            <small class="mb-0 text-muted">Binance USD</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <button
                                class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+453.25%</button>
                            <span class="text-success fs-4" style="transform: rotate(45deg);">
                                <i class="fas fa-arrow-alt-circle-up"></i>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <!-- <div id="d2c_market_lineChart"></div> -->
                        </div>
                    </div>

                    <h4 class="mb-0 fw-semibold mt-2">$34,212.73</h4>

                </div>
            </div>
        </div>
        <!-- small card item (3) -->
        <div class="col-md-6 col-xxl-3 mb-4 d2c_balance_card">
            <div class="card bg-danger bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                        <div class="me-3">
                            <div
                                class="rounded bg-danger bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                <i class="fab fa-ethereum"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-uppercase fw-semibold mb-0">ETH-USD</h6>
                            <small class="mb-0 text-muted">Ethereum USD</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <button
                                class="btn px-3 py-1 me-2 bg-danger bg-opacity-25 rounded-pill text-secondary">-765.25%</button>
                            <span class="text-danger fs-4" style="transform: rotate(-45deg);">
                                <i class="fas fa-arrow-alt-circle-down"></i>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <!-- <div id="d2c_market_lineChart"></div> -->
                        </div>
                    </div>

                    <h4 class="mb-0 fw-semibold mt-2">$22,143.71</h4>

                </div>
            </div>
        </div>
        <!-- small card item (4) -->
        <div class="col-md-6 col-xxl-3 mb-4 d2c_balance_card">
            <div class="card bg-success bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                        <div class="me-3">
                            <div
                                class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                <i class="fab fa-monero"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-uppercase fw-semibold mb-0">XMR-USD</h6>
                            <small class="mb-0 text-muted">Monero USD</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <button
                                class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+223.25%</button>
                            <span class="text-success fs-4" style="transform: rotate(45deg);">
                                <i class="fas fa-arrow-alt-circle-up"></i>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <!-- <div id="d2c_market_lineChart"></div> -->
                        </div>
                    </div>

                    <h4 class="mb-0 fw-semibold mt-2">$21,212.73</h4>

                </div>
            </div>
        </div>

        <!-- small card item (5) -->
        <div class="col-md-6 col-xxl-4 mb-4 d2c_balance_card">
            <div class="card bg-success bg-opacity-10">
                <div class="card-body pb-1">
                    <div class="d-flex align-items-center mb-4">
                        <div class="me-3">
                            <div
                                class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                <i class="fab fa-monero"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-uppercase fw-semibold mb-0">XMR-USD</h6>
                            <small class="mb-0 text-muted">Monero USD</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <div>
                                <div class="d-flex align-items-center">
                                    <button
                                        class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+223.25%</button>
                                    <span class="text-success fs-4" style="transform: rotate(45deg);">
                                        <i class="fas fa-arrow-alt-circle-up"></i>
                                    </span>
                                </div>
                                <h4 class="mb-0 fw-semibold mt-2">$21,212.73</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="d2c_dashboard_small_chart_1"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- small card item (6) -->
        <div class="col-md-6 col-xxl-4 mb-4 d2c_balance_card">
            <div class="card bg-danger bg-opacity-10">
                <div class="card-body pb-1">
                    <div class="d-flex align-items-center mb-4">
                        <div class="me-3">
                            <div
                                class="rounded bg-danger bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                <i class="fab fa-ethereum"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-uppercase fw-semibold mb-0">ETH-USD</h6>
                            <small class="mb-0 text-muted">Ethereum USD</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <div>
                                <div class="d-flex align-items-center">
                                    <button
                                        class="btn px-3 py-1 me-2 bg-danger bg-opacity-25 rounded-pill text-secondary">-765.25%</button>
                                    <span class="text-danger fs-4" style="transform: rotate(-45deg);">
                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                    </span>
                                </div>
                                <h4 class="mb-0 fw-semibold mt-2">$22,143.71</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="d2c_dashboard_small_chart_2"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- small card  (7) -->
        <div class="col-xxl-4 mb-4 d2c_balance_card">
            <div class="card bg-success bg-opacity-10">
                <div class="card-body pb-1">
                    <div class="d-flex align-items-center mb-4">
                        <div class="me-3">
                            <div
                                class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                <i class="fab fa-btc"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-uppercase fw-semibold mb-0">BTC-USD</h6>
                            <small class="mb-0 text-muted">Bitcoin USD</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <div>
                                <div class="d-flex align-items-center">
                                    <button
                                        class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+1256.25%</button>
                                    <span class="text-success fs-4" style="transform: rotate(45deg);">
                                        <i class="fas fa-arrow-alt-circle-up"></i>
                                    </span>
                                </div>
                                <h4 class="mb-0 fw-semibold mt-2">$12,208.73</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="d2c_dashboard_small_chart_3"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xxl-8 mb-4 d2c_market_overview_column">
            <div class="row mb-4">
                <div class="col-md-6 mb-4 mb-md-0">
                    <!-- wallet balance -->
                    <div class="card bg-danger bg-opacity-10">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="d2c_progress_bar_wrapper text-center">
                                        <!-- you can change progressbar value from css -->
                                        <div class="d2c_progress_bar d2c_dashboard_progressbar_1 fw-bold text-danger">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-1">Wallet Balance</h6>
                                        <h3 class="fw-semibold mb-0">$994.78</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- wallet balance -->
                    <div class="card bg-success bg-opacity-10">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="d2c_progress_bar_wrapper text-center">
                                        <!-- you can change progressbar value from css -->
                                        <div class="d2c_progress_bar d2c_dashboard_progressbar_2 fw-bold text-success">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div>
                                        <h6 class="mb-1">Earn Balance</h6>
                                        <h3 class="fw-semibold mb-0">$1208.73</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- market overview chart -->
            <div class="card bg-primary bg-opacity-10">
                <div class="card-body">
                    <h5 class="text-capitalize fw-semibold">Market Overview</h5>
                    <div id="d2c_overview_chart"></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 mb-4 d2c_buy_sell_column">
            <div class="card bg-warning bg-opacity-10 overflow-hidden">
                <div class="card-body">
                    <h5 class="text-capitalize fw-semibold mb-4">Buy / Sell</h5>
                    <ul class="nav nav-pills d2c_buy_sell__tab mb-3 bg-warning bg-opacity-25 rounded" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-buy-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-buy" type="button" role="tab" aria-controls="pills-buy"
                                aria-selected="true">Buy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-sell-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-sell" type="button" role="tab" aria-controls="pills-sell"
                                aria-selected="false">Sell</button>
                        </li>
                    </ul>
                    <div class="tab-content d2c_transaction_table_content" id="pills-tabContent">
                        <div class="tab-pane show active animate__animated animate__zoomIn" id="pills-buy"
                            role="tabpanel" aria-labelledby="pills-buy-tab">
                            <form action="#">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-secondary fw-semibold">Buy Coin</p>
                                    </div>
                                    <div class="col-7 text-end">
                                        <p class="text-secondary fw-semibold">$4235.23</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Payment method :</label>
                                    <div class="input-group">
                                        <span class="input-group-text w-100 p-0 border-0 bg-transparent">
                                            <select
                                                class="form-select rounded rounded-end bg-warning bg-opacity-25 form-control pe-5"
                                                aria-label="Default select example">
                                                <option selected>Credit Card</option>
                                                <option value="1">Debit Card</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Add Amount :</label>
                                    <div class="input-group">
                                        <span class="input-group-text p-0 border-0 bg-transparent">
                                            <select
                                                class="form-select rounded-0 text-secondary rounded-start bg-warning bg-opacity-50 form-control pe-5"
                                                aria-label="Default select example">
                                                <option selected>BTC</option>
                                                <option value="1">ETH</option>
                                                <option value="2">BNB</option>
                                            </select>
                                        </span>
                                        <input type="number" class="form-control bg-warning bg-opacity-25"
                                            placeholder="Amount">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control bg-warning bg-opacity-25"
                                            placeholder="$0.00" required>
                                        <span class="input-group-text border-0 bg-warning bg-opacity-25">USD</span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">To</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control bg-warning bg-opacity-25"
                                            placeholder="$0.00" required>
                                        <span class="input-group-text border-0 bg-warning bg-opacity-25">USD</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Buy Total Amount :</label>
                                    <input type="number" class="form-control bg-warning bg-opacity-25"
                                        placeholder="$10,775" required>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 fw-semibold text-capitalize">Buy
                                    Coin</button>
                            </form>
                        </div>
                        <div class="tab-pane animate__animated animate__zoomIn" id="pills-sell" role="tabpanel"
                            aria-labelledby="pills-sell-tab">
                            <form action="#">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-secondary fw-semibold">Sell Coin</p>
                                    </div>
                                    <div class="col-7 text-end">
                                        <p class="text-secondary fw-semibold">$7869.12</p>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Payment method :</label>
                                    <div class="input-group">
                                        <span class="input-group-text w-100 p-0 border-0 bg-transparent">
                                            <select
                                                class="form-select rounded rounded-end bg-warning bg-opacity-25 form-control pe-5"
                                                aria-label="Default select example">
                                                <option selected>Credit Card</option>
                                                <option value="1">Debit Card</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Add Amount :</label>
                                    <div class="input-group">
                                        <span class="input-group-text p-0 border-0 bg-transparent">
                                            <select
                                                class="form-select rounded-0 text-secondary rounded-start bg-warning bg-opacity-50 form-control pe-5"
                                                aria-label="Default select example">
                                                <option selected>BTC</option>
                                                <option value="1">ETH</option>
                                                <option value="2">BNB</option>
                                            </select>
                                        </span>
                                        <input type="number" class="form-control bg-warning bg-opacity-25"
                                            placeholder="Amount">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control bg-warning bg-opacity-25"
                                            placeholder="$0.00">
                                        <span class="input-group-text border-0 bg-warning bg-opacity-25">USD</span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">To</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control bg-warning bg-opacity-25"
                                            placeholder="$0.00">
                                        <span class="input-group-text border-0 bg-warning bg-opacity-25">USD</span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Sell Total Amount :</label>
                                    <input type="number" class="form-control bg-warning bg-opacity-25"
                                        placeholder="$6,775">
                                </div>

                                <button type="submit" class="btn btn-primary w-100 fw-semibold text-capitalize">Sell
                                    Coin</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="card d2c_trading_activities_wrapper bg-primary bg-opacity-10">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="text-capitalize fw-semibold mb-0">Recent Trading Activities</h5>
                <a href="{{ route('user.pages.transactions') }}" class="btn btn-primary btn-sm">View All
                    Transactions</a>
            </div>
            <div class="table-responsive">
                <table class="table align-middle" id="d2c_trading_activities">
                    <thead>
                        <tr>
                            <th style="min-width: 12.5rem;">Transaction ID</th>
                            <th>Type</th>
                            <th>Purpose</th>
                            <th style="min-width: 12.5rem;">Amount</th>
                            <th style="min-width: 150px;">Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentTransactions as $transaction)
                        <tr>
                            <td>TRX{{ str_pad($transaction->id, 6, '0', STR_PAD_LEFT) }}</td>
                            <td class="{{ $transaction->type === 'credit' ? 'text-success' : 'text-danger' }}">
                                {{ ucfirst($transaction->type) }}
                            </td>
                            <td>{{ ucfirst(str_replace('_', ' ', $transaction->purpose_of_payment)) }}</td>
                            <td>₹{{ number_format($transaction->amount, 2) }}</td>
                            <td>{{ $transaction->created_at->format('d-m-Y') }}</td>
                            <td>
                                @if($transaction->status === 'pending')
                                <span class="text-warning">Pending</span>
                                @elseif($transaction->status === 'success')
                                <span class="text-success">Complete</span>
                                @else
                                <span class="text-danger">Failed</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No recent transactions found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

    <!-- copyright -->
    {{-- <div class="d2c_copyright bg-success bg-opacity-10 p-3 text-center mt-4">
        <p class="mb-0 fw-semibold">© 2023 <a href="https://www.designtocodes.com/" target="_blank"
                class="fw-bold">DesignToCodes</a>, All rights Reserved</p>
    </div> --}}

</div>

<!-- Right Sidebar canvas -->
<div class="d2c_sidebar d2c_sidebar_right offcanvas-xl offcanvas-end p-3" tabindex="-1" id="d2c_sidebar_right">
    @php
        $walletBalance = Auth::user()->wallets->sum('balance') ?? 0;
    @endphp
    <div class="card mb-3">
        <div class="card-body">
            <h5>My Balance</h5>
            <h2>${{ number_format($walletBalance, 2) }}</h2>
            <div class="mt-3 p-3" style="background: #8e7cf0; border-radius: 12px;">
                <div style="color: #fff;">
                    <div>Balance</div>
                    <div style="font-size: 1.5rem;">${{ number_format($walletBalance, 2) }}</div>
                    <div class="d-flex justify-content-between mt-2">
                        <span>Card Holder<br><b>{{ Auth::user()->full_name }}</b></span>
                        <span>Valid Thru<br><b>08/2023</b></span>
                    </div>
                </div>
            </div>
            <div class="mt-4">
    <h6>Quick Convert</h6>
    <label>Amount (USDT)</label>
    <input type="number" id="usdt-amount" class="form-control mb-2" placeholder="0.00" min="0">

    <label>Convert Coin (INR)</label>
    <input type="text" id="inr-amount" class="form-control mb-2" placeholder="0.00" readonly>

    <button class="btn btn-success w-100" id="convert-btn">Convert</button>
</div>

            
        </div>
    </div>
</div>
@push('scripts')
<!-- ✅ Load jQuery first if not already loaded -->
<script>
    const USDT_TO_INR = 85.45;

    $(document).ready(function () {
        // 🔄 Convert on input
        $('#usdt-amount').on('input', function () {
            let usdt = parseFloat($(this).val()) || 0;
            let inr = usdt * USDT_TO_INR;
            $('#inr-amount').val(inr.toFixed(2) + ' INR');
        });

        // 🟢 Convert button click (for confirmation)
        $('#convert-btn').on('click', function (e) {
            e.preventDefault();
            alert('Converted: ' + $('#inr-amount').val());
        });
    });
</script>
@endpush


@endsection