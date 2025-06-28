@extends('user.user_layout')

@section('content')
       <!-- Main Body-->
        <div class="d2c_main p-4">

            <!-- Title -->
            <div class="row align-items-center mb-4">
                <div class="col-2 d-block d-lg-none">
                    <!-- Offcanvas Toggler -->
                    <button class="btn btn-primary px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar" aria-controls="d2c_sidebar">
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

            <div class="row">
    @php
        $colors = ['#6271ebe0', '#23cb62e0', '#fc76b7eb'];
    @endphp

    @forelse($packages as $index => $package)
        @php $color = $colors[$index % count($colors)]; @endphp

        <div class="col-md-6 col-xxl-4">
            <div class="card position-relative mb-4"
                style="
                    background: linear-gradient(180deg, {{ $color }} 0%, #6271ebd6 270.67%),
                    url(./assets/images/triangle_bg.png);
                    background-repeat: no-repeat;
                    background-size: cover;
                    border-radius: 15px;
                    overflow: hidden;
                    padding: 30px;
                    color: #fff;
                ">

                <!-- Buy Button -->
                <a href="#"
                   class="btn btn-success position-absolute"
                   style="
                       top: 15px;
                       right: 15px;
                       border-radius: 30px;
                       padding: 6px 16px;
                       font-weight: 600;
                       font-size: 14px;
                   ">
                    Buy
                </a>

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
                                    <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                    <button class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+1256.25%</button>
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
                                    <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                    <button class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+453.25%</button>
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
                                    <div class="rounded bg-danger bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                    <button class="btn px-3 py-1 me-2 bg-danger bg-opacity-25 rounded-pill text-secondary">-765.25%</button>
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
                                    <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                    <button class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+223.25%</button>
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
                                    <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                            <button class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+223.25%</button>
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
                                    <div class="rounded bg-danger bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                            <button class="btn px-3 py-1 me-2 bg-danger bg-opacity-25 rounded-pill text-secondary">-765.25%</button>
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
                                    <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                            <button class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+1256.25%</button>
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
                                                <div class="d2c_progress_bar d2c_dashboard_progressbar_1 fw-bold text-danger"></div>
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
                                                <div class="d2c_progress_bar d2c_dashboard_progressbar_2 fw-bold text-success"></div>
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
                            <ul class="nav nav-pills d2c_buy_sell__tab mb-3 bg-warning bg-opacity-25 rounded" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-buy-tab" data-bs-toggle="pill" data-bs-target="#pills-buy" type="button" role="tab" aria-controls="pills-buy" aria-selected="true">Buy</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-sell-tab" data-bs-toggle="pill" data-bs-target="#pills-sell" type="button" role="tab" aria-controls="pills-sell" aria-selected="false">Sell</button>
                                </li>
                            </ul>
                            <div class="tab-content d2c_transaction_table_content" id="pills-tabContent">
                                <div class="tab-pane show active animate__animated animate__zoomIn" id="pills-buy" role="tabpanel" aria-labelledby="pills-buy-tab">
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
                                                    <select class="form-select rounded rounded-end bg-warning bg-opacity-25 form-control pe-5" aria-label="Default select example">
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
                                                    <select class="form-select rounded-0 text-secondary rounded-start bg-warning bg-opacity-50 form-control pe-5" aria-label="Default select example">
                                                        <option selected>BTC</option>
                                                        <option value="1">ETH</option>
                                                        <option value="2">BNB</option>
                                                    </select>
                                                </span>
                                                <input type="number" class="form-control bg-warning bg-opacity-25" placeholder="Amount">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Price</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control bg-warning bg-opacity-25" placeholder="$0.00" required>
                                                <span class="input-group-text border-0 bg-warning bg-opacity-25">USD</span>
                                            </div>
                                        </div>
        
                                        <div class="mb-3">
                                            <label class="form-label">To</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control bg-warning bg-opacity-25" placeholder="$0.00" required>
                                                <span class="input-group-text border-0 bg-warning bg-opacity-25">USD</span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Buy Total Amount :</label>
                                            <input type="number" class="form-control bg-warning bg-opacity-25" placeholder="$10,775" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary w-100 fw-semibold text-capitalize">Buy Coin</button>
                                    </form>
                                </div>
                                <div class="tab-pane animate__animated animate__zoomIn" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab">
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
                                                    <select class="form-select rounded rounded-end bg-warning bg-opacity-25 form-control pe-5" aria-label="Default select example">
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
                                                    <select class="form-select rounded-0 text-secondary rounded-start bg-warning bg-opacity-50 form-control pe-5" aria-label="Default select example">
                                                        <option selected>BTC</option>
                                                        <option value="1">ETH</option>
                                                        <option value="2">BNB</option>
                                                    </select>
                                                </span>
                                                <input type="number" class="form-control bg-warning bg-opacity-25" placeholder="Amount">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Price</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control bg-warning bg-opacity-25" placeholder="$0.00">
                                                <span class="input-group-text border-0 bg-warning bg-opacity-25">USD</span>
                                            </div>
                                        </div>
        
                                        <div class="mb-3">
                                            <label class="form-label">To</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control bg-warning bg-opacity-25" placeholder="$0.00">
                                                <span class="input-group-text border-0 bg-warning bg-opacity-25">USD</span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Sell Total Amount :</label>
                                            <input type="number" class="form-control bg-warning bg-opacity-25" placeholder="$6,775">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary w-100 fw-semibold text-capitalize">Sell Coin</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="card d2c_trading_activities_wrapper bg-primary bg-opacity-10">
                <div class="card-body">
                    <h5 class="text-capitalize fw-semibold mb-4">Recent Trading Activities</h5>
                    <div class="table-responsive">
                        <table class="table align-middle" id="d2c_trading_activities">
                            <thead>
                                <tr>
                                    <th style="min-width: 12.5rem;">Transaction ID</th>
                                    <th>Type</th>
                                    <th>Coins</th>
                                    <th style="min-width: 12.5rem;">To</th>
                                    <th style="min-width: 150px;">Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TRX001</td>
                                    <td class="text-success">Buy</td>
                                    <td>Bitcoin</td>
                                    <td>John Doe</td>
                                    <td>2022-03-01</td>
                                    <td>$10,000</td>
                                    <td class="text-success">Complete</td>
                                </tr>
                                <tr>
                                    <td>ETH002</td>
                                    <td class="text-danger">Sold</td>
                                    <td>Ethereum</td>
                                    <td>Jane Smith</td>
                                    <td>2022-02-28</td>
                                    <td>$5,500</td>
                                    <td class="text-success">Complete</td>
                                </tr>
                                <tr>
                                    <td>BTC003</td>
                                    <td class="text-success">Buy</td>
                                    <td>Bitcoin</td>
                                    <td>Michael Johnson</td>
                                    <td>2022-02-27</td>
                                    <td>$7,200</td>
                                    <td class="text-success">Complete</td>
                                </tr>
                                <tr>
                                    <td>XRP004</td>
                                    <td class="text-danger">Sold</td>
                                    <td>Ripple</td>
                                    <td>Sarah Davis</td>
                                    <td>2022-02-26</td>
                                    <td>$2,300</td>
                                    <td class="text-success">Complete</td>
                                </tr>
                                <tr>
                                    <td>LTC005</td>
                                    <td class="text-success">Buy</td>
                                    <td>Litecoin</td>
                                    <td>Andrew Thompson</td>
                                    <td>2022-02-25</td>
                                    <td>$3,800</td>
                                    <td class="text-danger">Pending</td>
                                </tr>
                                <tr>
                                    <td>ETH006</td>
                                    <td class="text-danger">Sold</td>
                                    <td>Ethereum</td>
                                    <td>Emily Wilson</td>
                                    <td>2022-02-24</td>
                                    <td>$6,000</td>
                                    <td class="text-danger">Pending</td>
                                </tr>
                                <tr>
                                    <td>BTC007</td>
                                    <td class="text-success">Buy</td>
                                    <td>Bitcoin</td>
                                    <td>David Johnson</td>
                                    <td>2022-02-23</td>
                                    <td>$4,500</td>
                                    <td class="text-success">Complete</td>
                                </tr>
                                <tr>
                                    <td>XRP008</td>
                                    <td class="text-danger">Sold</td>
                                    <td>Ripple</td>
                                    <td>Emma Thompson</td>
                                    <td>2022-02-22</td>
                                    <td>$1,800</td>
                                    <td class="text-danger">Pending</td>
                                </tr>
                                <tr>
                                    <td>LTC009</td>
                                    <td class="text-success">Buy</td>
                                    <td>Litecoin</td>
                                    <td>Oliver Smith</td>
                                    <td>2022-02-21</td>
                                    <td>$2,200</td>
                                    <td class="text-danger">Pending</td>
                                </tr>
                                <tr>
                                    <td>BTC010</td>
                                    <td class="text-success">Buy</td>
                                    <td>YEN</td>
                                    <td>David Malan</td>
                                    <td>2022-03-21</td>
                                    <td>$8,500</td>
                                    <td class="text-success">Complete</td>
                                </tr>
                                <tr>
                                    <td>XRP011</td>
                                    <td class="text-danger">Sold</td>
                                    <td>LIRA</td>
                                    <td>Emma Alex</td>
                                    <td>2022-04-12</td>
                                    <td>$2,600</td>
                                    <td class="text-danger">Pending</td>
                                </tr>
                                <tr>
                                    <td>LTC012</td>
                                    <td class="text-success">Buy</td>
                                    <td>EURO</td>
                                    <td>Steven Smith</td>
                                    <td>2022-02-30</td>
                                    <td>$4,200</td>
                                    <td class="text-danger">Pending</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}} 

            <!-- copyright -->
            {{-- <div class="d2c_copyright bg-success bg-opacity-10 p-3 text-center mt-4">
                <p class="mb-0 fw-semibold">© 2023 <a href="https://www.designtocodes.com/" target="_blank" class="fw-bold">DesignToCodes</a>, All rights Reserved</p>
            </div> --}}

        </div>
        <!-- End:Main Body -->

        <!-- Right Sidebar canvas -->
        <div class="d2c_sidebar d2c_sidebar_right offcanvas-xl offcanvas-end p-3" tabindex="-1" id="d2c_sidebar_right">
            <div class="d-flex flex-column py-4">
                <div class="row mb-3 border-bottom pb-2">
                    <div class="col-4 d-flex align-items-center">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <button class="btn p-1"><i class="fas fa-search"></i></button>
                            </li>
                            <!-- Notification -->
                            <li class="list-inline-item position-relative me-3">
                                <a class="nav-link p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-warning border border-light rounded-circle"></span>
                                </a>
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow border-0 py-0 mt-3">
                                    <h6 class="dropdown-header text-white bg-primary rounded-top py-3">Notifications</h6>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('user.pages.notification') }}">
                                        <div>
                                            <p class="d2c_notification_first_letter bg-info text-info fw-bold bg-opacity-10 d-flex align-items-center justify-content-center fs-6 fs-md-5 me-2 me-md-3 text-uppercase">w</p>
                                        </div>
                                        <div class="text-truncate d-block">
                                            <h6 class="mb-0">Hi there! I am wondering if you can help me with a problem I've been having.</h6>
                                            <p class="mb-0"><small>With our newest listing, we're welcoming Wrapped Bitcoin (wBTC) to our DeFi Innovation Zone! You can now deposit…</small></p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('user.pages.notification') }}">
                                        <div>
                                            <p class="d2c_notification_first_letter bg-danger text-danger fw-bold bg-opacity-10 d-flex align-items-center justify-content-center fs-6 fs-md-5 me-2 me-md-3 text-uppercase">A</p>
                                        </div>
                                        <div class="text-truncate d-block">
                                            <h6 class="mb-0">Airdrop BCHA - 0.25118470 Your airdrop for Nov 15, 2020.</h6>
                                            <p class="mb-0"><small>With our newest listing, we're welcoming Wrapped Bitcoin (wBTC) to our DeFi Innovation Zone! You can now deposit…</small></p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('user.pages.notification') }}">
                                        <div>
                                            <p class="d2c_notification_first_letter bg-success text-success fw-bold bg-opacity-10 d-flex align-items-center justify-content-center fs-6 fs-md-5 me-2 me-md-3 text-uppercase">C</p>
                                        </div>
                                        <div class="text-truncate d-block">
                                            <h6 class="mb-0">CyberVeinToken is Now Available on Unity Exchange</h6>
                                            <p class="mb-0"><small>With our newest listing, we're welcoming Wrapped Bitcoin (wBTC) to our DeFi Innovation Zone! You can now deposit…</small></p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('user.pages.notification') }}">
                                        <div>
                                            <p class="d2c_notification_first_letter bg-primary text-primary fw-bold bg-opacity-10 d-flex align-items-center justify-content-center fs-6 fs-md-5 me-2 me-md-3 text-uppercase">U</p>
                                        </div>
                                        <div class="text-truncate d-block">
                                            <h6 class="mb-0">Unification is Now Available on Unity Exchange</h6>
                                            <p class="mb-0"><small>With our newest listing, we're welcoming Wrapped Bitcoin (wBTC) to our DeFi Innovation Zone! You can now deposit…</small></p>
                                        </div>
                                    </a>
                                    <a class=" dropdown-item text-center small text-gray-500 d2c_all_notification_btn"
                                        href="{{ route('user.pages.notification') }}">See All
                                        Notifications</a>
                                </div>
                            </li>
                            <!-- End:Notification -->
                        </ul>
                    </div>

                    <div class="col-8">
                        <div class="row">
                            <div class="col-8 d-flex align-items-center text-end pe-0">
                                <div class="w-100">
                                    <p class="mb-0 fw-semibold d2c_profile_name">Wade Warren</p>
                                    <small>Trader</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <a href="./pages/profile.html"><img class="rounded-circle" src="./assets/images/profile/profile-2.jpg" alt="Profile Image" style="height: 40px; width: 40px; object-fit: cover;"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d2c_balance mb-2">
                    <p class="mb-1">My Balance</p>
                    <div class="row">
                        <div class="col">
                            <h5 class="fw-semibold">$10,208.73</h5>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center d2c_percentage_rate ">
                                <span class="d-inline-flex px-2 py-1 fw-semibold text-success bg-success bg-opacity-25 rounded-2">+1.25%</span>
                                <i class="fas fa-arrow-right text-white bg-success rounded-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card d2c_wallet_card mb-4" style="background: linear-gradient(180deg, #6271ebe0 0%, #fc76b7 373.31%), url('./assets/images/triangle_bg.png');">
                    <div class="card-body">
                        <div class="mb-4">
                            <p class="mb-1 text-white">Balance</p>
                            <h5 class="fw-semibold">$10,208.73</h5>
                        </div>
                        <div class="row">
                            <div class="col">
                                <small>Card Holder</small>
                                <h6>Esther Howard</h6>
                            </div>
                            <div class="col-5">
                                <small>Valid Thru</small>
                                <h6>08/2023</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d2c_convert mb-4">
                    <p class="fw-semibold">Quick Convert</p>

                    <form class="form-validation" novalidate>
                        <label for="conver_amount">Amount</label>
                        <div class="input-group border-0 mb-3">
                            <input type="number" class="form-control border-0" id="conver_amount" placeholder="0.00" required>
                            <select class="form-select form-control border-0 pe-0" id="inputGroupSelect01">
                                <option value="1" selected>ETH</option>
                                <option value="2">USD</option>
                            </select>
                        </div>
                        <label for="convert_coin">Convert Coin</label>
                        <div class="input-group border-0 mb-3">
                            <input type="number" class="form-control border-0" id="convert_coin" placeholder="0.00" required>
                            <select class="form-select form-control border-0 pe-0" id="inputGroupSelect02">
                                <option value="1">ETH</option>
                                <option value="2" selected>USD</option>
                            </select>
                        </div>
                        <button type="submit" class="btn w-100 text-success bg-success bg-opacity-25">Convert</button>
                    </form>
                </div>

                <div class="d2c_convert form-validation">
                    <p class="fw-semibold">Quick Transfer</p>

                    <form class="form-validation" novalidate>
                        <label for="send_email">To</label>
                        <div class="input-group border-0 mb-3">
                            <input type="email" class="form-control border-0" id="send_email" placeholder="fundrows@mail.com" required>
                        </div>
                        <label for="send_amount">Amount</label>
                        <div class="input-group border-0 mb-3">
                            <input type="number" class="form-control border-0" id="send_amount" placeholder="0.00" required>
                            <select class="form-select form-control border-0 pe-0" id="inputGroupSelect03">
                                <option value="1" selected>ETH</option>
                                <option value="2">USD</option>
                            </select>
                        </div>
                        <button type="submit" class="btn w-100 text-success bg-success bg-opacity-25">Transfer</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End:Right Sidebar -->
        
    </div>
    
          
        </div>
@endsection