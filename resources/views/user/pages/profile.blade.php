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
        <h4 class="text-capitalize fw-bold">User profile</h4>
    </div>
    <div class="col-auto">
        <!-- Role Filter -->
        <select class="form-select" onchange="window.location.href=this.value">
            <option value="{{ route('user.pages.profile') }}" {{ !request()->route('role') ? 'selected' : '' }}>All Users</option>
            @if(isset($availableRoles))
                @foreach($availableRoles as $availableRole)
                    <option value="{{ route('user.pages.profile.by.role', $availableRole) }}" {{ request()->route('role') == $availableRole ? 'selected' : '' }}>
                        {{ ucfirst($availableRole) }} Users
                    </option>
                @endforeach
            @endif
        </select>
    </div>
</div>
<!-- End:Title -->


<div class="row">
    <div class="col-xxl-3 mb-4 mb-xxl-0 d2c_profile_details">
        <div class="card bg-success bg-opacity-10 d2c_profile_info">
            <img src="{{ asset('assets/images/profile_info_bg.jpg') }}" class="img-fluid rounded-top" alt="profile info bg" style="height: 150px; object-fit: cover;">
            <div class="card-body">
                <img src="{{ asset('assets/images/profile/profile-2.jpg') }}" class="img-fluid rounded-circle" style="width: 68px;height: 68px; object-fit: cover;margin-top: -60px;" alt="profile image">
                <h5 class="fw-semibold mt-3">{{ $user->full_name ?? 'User Name' }}</h5>
                <h6 class="fw-semibold text-muted">ID: {{ $user->referral_id ?? 'N/A' }}</h6>
                <h6 class="mt-4 fw-semibold">Bio</h6>
                <p>Amet minim mollit non deserun ullamco & sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
                <!-- contact details -->
                <div>
                    <p class="mb-2 text-secondary d-flex align-items-baseline">
                        <i class="fas fa-headphones-alt me-2"></i>
                        <a href="tel:{{ $user->mobile_no ?? '' }}">{{ $user->mobile_no ?? 'N/A' }}</a>
                    </p>
                    <p class="mb-2 text-secondary d-flex align-items-baseline text-break">
                        <i class="fas fa-envelope-open-text me-2"></i>
                        <a href="mailto:{{ $user->email ?? '' }}">{{ $user->email ?? 'N/A' }}</a>
                    </p>
                    <p class="text-secondary d-flex align-items-baseline">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        {{ $user->city ?? 'N/A' }}, {{ $user->state ?? 'N/A' }}, {{ $user->country ?? 'N/A' }}
                    </p>
                </div>
                <!-- payment method -->
                <div class="d2c_payment_method py-3">
                    <h6 class="fw-semibold">Payment Method</h6>
                    <h6 class="fw-semibold">
                        <i class="fas fa-credit-card"></i>
                        Visa
                    </h6>
                    <h6 class="fw-semibold">0*******7548</h6>
                    <h6 class="fw-semibold">Bank</h6>
                    <h6 class="fw-semibold">ABC Center Bank</h6>
                </div>
                <!-- social link -->
                <div class="d2c_social_link py-3 mb-3">
                    <h6 class="fw-semibold">Social Media</h6>
                    <a href="https://www.facebook.com/Designtocodes" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/DesignToCodes" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/designtocodes/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/channel/UCty3RokJyzzUd2f5hhwDocg" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
                <p class="mb-0">Member since {{ $user->created_at ? $user->created_at->format('M d, Y') : 'N/A' }}</p>
            </div>
        </div>
    </div>
    
    <div class="col-xxl-9 d2c_profile_right">
        <div class="row">
            <!-- card item -->
            <div class="col-md-6 col-lg mb-4">
                <div class="card bg-danger bg-opacity-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-5">
                            <div class="me-3">
                                <div class="rounded bg-danger bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                <button class="btn px-3 py-1 me-2 bg-danger bg-opacity-25 rounded-pill text-danger">+1256.25%</button>
                                <span class="text-danger fs-4" style="transform: rotate(45deg);">
                                    <i class="fas fa-arrow-alt-circle-up"></i>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <!-- <div id="d2c_market_lineChart"></div> -->
                            </div>
                        </div>
                        <h4 class="mb-0 fw-semibold mt-2">$8,208.73</h4>
                    </div>
                </div>
            </div>
            <!-- card item -->
            <div class="col-md-6 col-lg mb-4">
                <div class="card bg-success bg-opacity-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-5">
                            <div class="me-3">
                                <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                    <i class="fas fa-coins"></i>
                                </div>
                            </div>
                            <div>
                                <h6 class="text-uppercase fw-semibold mb-0">BNB-USD</h6>
                                <small class="mb-0 text-muted">Binance USD</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <button class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-success">+1256.25%</button>
                                <span class="text-success fs-4" style="transform: rotate(45deg);">
                                    <i class="fas fa-arrow-alt-circle-up"></i>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <!-- <div id="d2c_market_lineChart"></div> -->
                            </div>
                        </div>
                        <h4 class="mb-0 fw-semibold mt-2">$8,208.73</h4>
                    </div>
                </div>
            </div>
            <!-- card item -->
            <div class="col-xxl mb-4">
                <div class="card bg-success bg-opacity-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-5">
                            <div class="me-3">
                                <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                <button class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-success">+1256.25%</button>
                                <span class="text-success fs-4" style="transform: rotate(45deg);">
                                    <i class="fas fa-arrow-alt-circle-up"></i>
                                </span>
                            </div>
                            <div class="col-md-6">
                                <!-- <div id="d2c_market_lineChart"></div> -->
                            </div>
                        </div>
                        <h4 class="mb-0 fw-semibold mt-2">$8,208.73</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-primary bg-opacity-10 mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <h5 class="text-capitalize fw-semibold mb-4">Transactions</h5>
                    </div>
                    <div class="col-md-7">
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
                            <table class="table align-middle" id="d2c_profile_yearly">
                                <thead>
                                    <tr>
                                        <th style="min-width: 150px;">Coin Name</th>
                                        <th>To</th>
                                        <th style="min-width: 21.875rem;">Date-Time</th>
                                        <th style="min-width: 150px;">Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bitcoin</td>
                                        <td>John</td>
                                        <td>2023-06-10 09:30 AM</td>
                                        <td>0.5 BTC</td>
                                        <td class="text-success">Complete</td>
                                    </tr>
                                    <tr>
                                        <td>Ethereum</td>
                                        <td>Mike</td>
                                        <td>2023-06-11 02:45 PM</td>
                                        <td>5 ETH</td>
                                        <td class="text-danger">Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Ripple</td>
                                        <td>David</td>
                                        <td>2023-06-12 11:15 AM</td>
                                        <td>1000 XRP</td>
                                        <td class="text-success">Complete</td>
                                    </tr>
                                    <tr>
                                        <td>Cardano</td>
                                        <td>Sarah</td>
                                        <td>2023-06-12 03:20 PM</td>
                                        <td>200 ADA</td>
                                        <td class="text-danger">Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Litecoin</td>
                                        <td>Robert</td>
                                        <td>2023-06-13 10:45 AM</td>
                                        <td>2 LTC</td
                                        <td class="text-danger">Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Stellar</td>
                                        <td>Emily</td>
                                        <td>2023-06-13 12:30 PM</td>
                                        <td>500 XLM</td>
                                        <td class="text-success">Complete</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                        <div class="table-responsive">
                            <table class="table align-middle" id="d2c_profile_monthly">
                                <thead>
                                    <tr>
                                        <th style="min-width: 150px;">Coin Name</th>
                                        <th>To</th>
                                        <th style="min-width: 21.875rem;">Date-Time</th>
                                        <th style="min-width: 150px;">Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bitcoin</td>
                                        <td>John</td>
                                        <td>2023-06-10 09:30 AM</td>
                                        <td>0.5 BTC</td>
                                        <td class="text-success">Complete</td>
                                    </tr>
                                    <tr>
                                        <td>Ethereum</td>
                                        <td>Mike</td>
                                        <td>2023-06-11 02:45 PM</td>
                                        <td>5 ETH</td>
                                        <td class="text-danger">Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Ripple</td>
                                        <td>David</td>
                                        <td>2023-06-12 11:15 AM</td>
                                        <td>1000 XRP</td>
                                        <td class="text-success">Complete</td>
                                    </tr>
                                    <tr>
                                        <td>Cardano</td>
                                        <td>Sarah</td>
                                        <td>2023-06-12 03:20 PM</td>
                                        <td>200 ADA</td>
                                        <td class="text-danger">Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Litecoin</td>
                                        <td>Robert</td>
                                        <td>2023-06-13 10:45 AM</td>
                                        <td>2 LTC</td>
                                        <td class="text-danger">Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Stellar</td>
                                        <td>Emily</td>
                                        <td>2023-06-13 12:30 PM</td>
                                        <td>500 XLM</td>
                                        <td class="text-success">Complete</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-weekly" role="tabpanel" aria-labelledby="pills-weekly-tab">
                        <div class="table-responsive">
                            <table class="table align-middle" id="d2c_profile_weekly">
                                <thead>
                                    <tr>
                                        <th style="min-width: 150px;">Coin Name</th>
                                        <th>To</th>
                                        <th style="min-width: 21.875rem;">Date-Time</th>
                                        <th style="min-width: 150px;">Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bitcoin</td>
                                        <td>John</td>
                                        <td>2023-06-10 09:30 AM</td>
                                        <td>0.5 BTC</td>
                                        <td class="text-success">Complete</td>
                                    </tr>
                                    <tr>
                                        <td>Ethereum</td>
                                        <td>Mike</td>
                                        <td>2023-06-11 02:45 PM</td>
                                        <td>5 ETH</td>
                                        <td class="text-danger">Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Ripple</td>
                                        <td>David</td>
                                        <td>2023-06-12 11:15 AM</td>
                                        <td>1000 XRP</td>
                                        <td class="text-success">Complete</td>
                                    </tr>
                                    <tr>
                                        <td>Cardano</td>
                                        <td>Sarah</td>
                                        <td>2023-06-12 03:20 PM</td>
                                        <td>200 ADA</td>
                                        <td class="text-danger">Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Litecoin</td>
                                        <td>Robert</td>
                                        <td>2023-06-13 10:45 AM</td>
                                        <td>2 LTC</td>
                                        <td class="text-danger">Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Stellar</td>
                                        <td>Emily</td>
                                        <td>2023-06-13 12:30 PM</td>
                                        <td>500 XLM</td>
                                        <td class="text-success">Complete</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <!-- User Data Display Section -->
     
            <div class="col-xxl-12">
                <!-- liquidity chart -->
                <div class="card mb-4 bg-success bg-opacity-10">
                    <div class="card-body">
                        <h5 class="text-capitalize fw-semibold mb-4">Liquidity</h5>
                        <div id="d2c_liquidity_chart"></div>
                    </div>
                </div>
                <!-- volume chart -->
                <div class="card bg-primary bg-opacity-10">
                    <div class="card-body">
                        <h5 class="text-capitalize fw-semibold mb-4">Volume</h5>
                        <div id="d2c_volume_chart"></div>
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