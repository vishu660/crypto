@extends('user.main')
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
        <h4 class="text-capitalize fw-bold">Wallet</h4>
    </div>
</div>
<!-- End:Title -->

<div class="row">
    <!-- Current Balance Box -->
    <div class="col-md-6 col-xxl-4 d2c_balance_card">
        <div class="card d2c_wallet_card mb-4" style="background: linear-gradient(180deg, #6271ebe0 0%, #fc76b7 373.31%), url('../assets/images/triangle_bg.png');background-repeat: no-repeat;background-size: cover;">
            <div class="card-body">
                <div class="mb-4">
                    <p class="mb-1 text-white">Balance</p>
                    <h5 class="fw-semibold">₹{{ number_format($balance, 2) }}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- After Balance Box -->
    <div class="col-md-6 col-xxl-4 d2c_balance_card">
        <div class="card d2c_wallet_card mb-4" style="background: linear-gradient(180deg, #23cb62e0 0%, #6271ebd6 270.67%), url(../assets/images/triangle_bg.png);background-repeat: no-repeat;background-size: cover;">
            <div class="card-body">
                <div class="mb-4">
                    <p class="mb-1 text-white">After Balance</p>
                    <h5 class="fw-semibold">₹{{ number_format($afterBalance, 2) }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card bg-primary bg-opacity-10 mb-4 d2c_card_details">
    <div class="card-body">
        <h5 class="text-capitalize fw-semibold mb-4">Card Details</h5>
        <div class="row">
            <div class="col-xxl-6">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0 text-secondary">Card Owner</p>
                        <h5 class="fw-semibold mb-3">Esther Howard</h5>
                        <p class="mb-0 text-secondary">Valid Date</p>
                        <h5 class="mb-3">08/21</h5>
                        <p class="mb-0 text-secondary">Card Number</p>
                        <h5>**** **** **** 1234</h5>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0 text-secondary">Bank Name</p>
                        <h5 class="fw-semibold mb-3">ABC Center Bank</h5>
                        <p class="mb-0 text-secondary">Card Holder</p>
                        <h5 class="mb-3">Esther Howard</h5>
                        <p class="mb-1 text-secondary">Card Theme</p>
                        <div class="d-flex">
                            <div class="bg-primary rounded me-2" style="width: 36px;height: 36px;"></div>
                            <div class="bg-warning rounded me-2" style="width: 36px;height: 36px;"></div>
                            <div class="bg-danger rounded me-2" style="width: 36px;height: 36px;"></div>
                            <div class="bg-success rounded me-2" style="width: 36px;height: 36px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- progress bar column -->
            <div class="col-xxl-6 mt-4 mt-xxl-0">
                <h5 class="fw-semibold mb-4">Monthly Limits</h5>
                <div class="d-flex justify-content-between">
                    <div class="d2c_progress_bar_wrapper text-center">
                        <!-- you can change progressbar value from css -->
                        <div class="d2c_progress_bar d2c_progressbar_1 fw-bold text-primary"></div>
                        <p class="mb-0 mt-3 fw-semibold">Main Limits</p>
                        <h6 class="fw-bold">$10,000.00</h6>
                    </div>
                      
                    <div class="d2c_progress_bar_wrapper text-center">
                        <!-- you can change progressbar value from css -->
                        <div class="d2c_progress_bar d2c_progressbar_2 fw-bold text-warning">
                        </div>
                        <p class="mb-0 mt-3 fw-semibold">Seconds</p>
                        <h6 class="fw-bold">$4,500.00</h6>
                    </div>
                      
                    <div class="d2c_progress_bar_wrapper text-center">
                        <!-- you can change progressbar value from css -->
                        <div class="d2c_progress_bar d2c_progressbar_3 fw-bold text-danger"></div>
                        <p class="mb-0 mt-3 fw-semibold">Others</p>
                        <h6 class="fw-bold">$2,500.00</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-8 mb-4 mb-xxl-0 d2c_wallet_activity">
        <div class="card bg-success bg-opacity-10">
            <div class="card-body">
                <h5 class="text-capitalize fw-semibold mb-4">Wallet Activity</h5>
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="text-capitalize fw-semibold mb-xxl-4">Transactions</h5>
                    </div>
                    <div class="col-md">
                        <ul class="nav nav-pills d2c_profile_transaction_tab mb-3 justify-content-end" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="true">Yearly</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="false">Monthly</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-weekly-tab" data-bs-toggle="pill" data-bs-target="#pills-weekly" type="button" role="tab" aria-controls="pills-weekly" aria-selected="false">Weekly</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content d2c_profile_transaction_content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Source</th>
                                        <th>Amount</th>
                                        <th>Balance After</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($wallets as $wallet)
                                        <tr>
                                            <td>{{ $wallet->created_at->format('d M Y, H:i') }}</td>
                                            <td>
                                                @if($wallet->type === 'credit')
                                                    <span class="text-success">Credit</span>
                                                @else
                                                    <span class="text-danger">Debit</span>
                                                @endif
                                            </td>
                                            <td>{{ ucfirst($wallet->source) }}</td>
                                            <td>
                                                @if($wallet->type === 'credit')
                                                    <span class="text-success">+{{ number_format($wallet->amount, 2) }}</span>
                                                @else
                                                    <span class="text-danger">-{{ number_format($wallet->amount, 2) }}</span>
                                                @endif
                                            </td>
                                            <td>{{ number_format($wallet->balance_after, 2) }}</td>
                                            <td>{{ $wallet->message ?? '-' }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No wallet transactions found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Source</th>
                                        <th>Amount</th>
                                        <th>Balance After</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($wallets as $wallet)
                                        <tr>
                                            <td>{{ $wallet->created_at->format('d M Y, H:i') }}</td>
                                            <td>
                                                @if($wallet->type === 'credit')
                                                    <span class="text-success">Credit</span>
                                                @else
                                                    <span class="text-danger">Debit</span>
                                                @endif
                                            </td>
                                            <td>{{ ucfirst($wallet->source) }}</td>
                                            <td>
                                                @if($wallet->type === 'credit')
                                                    <span class="text-success">+{{ number_format($wallet->amount, 2) }}</span>
                                                @else
                                                    <span class="text-danger">-{{ number_format($wallet->amount, 2) }}</span>
                                                @endif
                                            </td>
                                            <td>{{ number_format($wallet->balance_after, 2) }}</td>
                                            <td>{{ $wallet->message ?? '-' }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No wallet transactions found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-weekly" role="tabpanel" aria-labelledby="pills-weekly-tab">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Source</th>
                                        <th>Amount</th>
                                        <th>Balance After</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($wallets as $wallet)
                                        <tr>
                                            <td>{{ $wallet->created_at->format('d M Y, H:i') }}</td>
                                            <td>
                                                @if($wallet->type === 'credit')
                                                    <span class="text-success">Credit</span>
                                                @else
                                                    <span class="text-danger">Debit</span>
                                                @endif
                                            </td>
                                            <td>{{ ucfirst($wallet->source) }}</td>
                                            <td>
                                                @if($wallet->type === 'credit')
                                                    <span class="text-success">+{{ number_format($wallet->amount, 2) }}</span>
                                                @else
                                                    <span class="text-danger">-{{ number_format($wallet->amount, 2) }}</span>
                                                @endif
                                            </td>
                                            <td>{{ number_format($wallet->balance_after, 2) }}</td>
                                            <td>{{ $wallet->message ?? '-' }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No wallet transactions found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4 d2c_wallet_activity">
        <div class="card bg-warning bg-opacity-10">
            <div class="card-body">
                <h5 class="fw-semibold text-capitalize mb-4">Wallet Activity</h5>
                <!-- market previews item -->
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center mb-3">
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
                    </div>
                    <div class="col-3">
                        <h6 class="mb-0">125.45</h6>
                        <p class="text-success">1,24%</p>
                    </div>
                </div>
                <!-- market previews item -->
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <div class="rounded bg-danger bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                    <i class="fab fa-monero"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="text-uppercase fw-semibold mb-0">XMR-USD</h6>
                                <small class="mb-0 text-muted">Monero USD</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mb-0">213.45</h6>
                        <p class="text-danger">2,24%</p>
                    </div>
                </div>
                <!-- market previews item -->
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <div class="rounded bg-info bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                    <i class="fab fa-ethereum"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="text-uppercase fw-semibold mb-0">ETH-USD</h6>
                                <small class="mb-0 text-muted">Ethereum USD</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mb-0">211.45</h6>
                        <p class="text-success">0,24%</p>
                    </div>
                </div>
                <!-- market previews item -->
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                    <i class="fas fa-bold"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="text-uppercase fw-semibold mb-0">BNB-USD</h6>
                                <small class="mb-0 text-muted">Binance USD</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mb-0">111.45</h6>
                        <p class="text-success">8,24%</p>
                    </div>
                </div>
                <!-- market previews item -->
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <div class="rounded bg-dark bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                    <i class="fas fa-bold"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="text-uppercase fw-semibold mb-0">BNB-USD</h6>
                                <small class="mb-0 text-muted">Binance USD</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mb-0">433.45</h6>
                        <p class="text-success">4,24%</p>
                    </div>
                </div>
                <!-- market previews item -->
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center mb-3">
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
                    </div>
                    <div class="col-3">
                        <h6 class="mb-0">125.45</h6>
                        <p class="text-success">1,24%</p>
                    </div>
                </div>
                <!-- market previews item -->
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <div class="rounded bg-danger bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                    <i class="fab fa-monero"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="text-uppercase fw-semibold mb-0">XMR-USD</h6>
                                <small class="mb-0 text-muted">Monero USD</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mb-0">541.45</h6>
                        <p class="text-danger">6,24%</p>
                    </div>
                </div>
                <!-- market previews item -->
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <div class="rounded bg-info bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                    <i class="fab fa-monero"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="text-uppercase fw-semibold mb-0">BNB-USD</h6>
                                <small class="mb-0 text-muted">Binance USD</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="mb-0">232.45</h6>
                        <p class="text-danger">1,24%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- copyright -->
<div class="d2c_copyright bg-success bg-opacity-10 p-3 text-center mt-4">
    <p class="mb-0 fw-semibold">© 2023 <a href="https://www.designtocodes.com/" target="_blank" class="fw-bold">DesignToCodes</a>, All rights Reserved</p>
</div>

</div>
<!-- End:Main Body -->
@endsection