<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/gif" sizes="16x16">
    <title>Wallet - Fundrows</title>
    <meta name="og:description" content="Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.">
    <meta name="robots" content="index, follow">
    <meta name="og:title" property="og:title" content="FundRows - Free Bootstrap Crypto Dashboard Template">
    <meta property="og:image" content="https://www.designtocodes.com/wp-content/uploads/2023/10/FundRows-Free-Bootstrap-Crypto-Dashboard-Template-Thumbnail.jpg">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap_5/bootstrap.min.css') }}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="{{ asset('lib/fontawesome/css/all.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="DesignToCodes">
    </div>
    <!-- Preloader End -->
    <div class="d2c_wrapper">
        
        <!-- Main sidebar -->
        <div class="d2c_sidebar offcanvas-lg offcanvas-start px-2 py-4" tabindex="-1" id="d2c_sidebar">
            <div class="d-flex flex-column">
                <!-- Logo -->
                <a href="{{ route('user') }}" class="brand-icon">
                    <img class="navbar-brand" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                </a>
                <!-- End:Logo -->

                <!-- Menu -->
                <ul class="navbar-nav flex-grow-1">
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-home"></i>
                            </span>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.exchange') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-exchange-alt"></i>
                            </span>
                            <span> Exchange </span>
                        </a>
                    </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.plans') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-coins"></i>
                            </span>
                            <span> Plans </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.market') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-chart-line"></i>
                            </span>
                            <span> Market </span>
                        </a>
                    </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('user.pages.wallet') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-wallet"></i>
                            </span>
                            <span> Wallet </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.profile') }}">
                            <span class="d2c_icon">
                                <i class="far fa-user"></i>
                            </span>
                            <span> Profile </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.notification') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-bell"></i>
                            </span>
                            <span> Notifications </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.transactions') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </span>
                            <span> Transaction </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.transfer') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-random"></i>
                            </span>
                            <span> Transfer </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.email') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </span>
                            <span> Mail </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.activity') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-recycle"></i>
                            </span>
                            <span> Activity </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.faq') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-question-circle"></i>
                            </span>
                            <span> FAQ </span>
                        </a>
                    </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#form_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="far fa-file-alt"></i>
                            </span>
                            <span> Form </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a> -->
                        <!-- Child Sub Menu -->
                        <!-- <ul class="sub-menu collapse" id="form_dropdown"> -->
                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.basicForm') }}">
                                    <span> Basic Form </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.advancedFrom') }}">
                                    <span> Advanced Form </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.editor') }}">
                                    <span> Editor </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->
                        <!-- </ul> -->
                        <!-- End:Child Sub Menu -->
                    <!-- </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#table_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-table"></i>
                            </span>
                            <span> table </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a> -->
                        <!-- Child Sub Menu -->
                        <!-- <ul class="sub-menu collapse" id="table_dropdown"> -->
                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.basicTable') }}">
                                    <span> Basic Table </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.advancedTable') }}">
                                    <span> Advanced Table </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->
                        <!-- </ul> -->
                        <!-- End:Child Sub Menu -->
                    <!-- </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#chart_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-chart-pie"></i>
                            </span>
                            <span> Charts </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a> -->
                        <!-- Child Sub Menu -->
                        <!-- <ul class="sub-menu collapse" id="chart_dropdown"> -->
                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.chartjs') }}">
                                    <span> ChartJS</span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.apexCharts') }}">
                                    <span> ApexCharts </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.eCharts') }}">
                                    <span> E-Charts </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.ammCharts') }}">
                                    <span> Amm-Charts </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->
                        <!-- </ul> -->
                        <!-- End:Child Sub Menu -->
                    <!-- </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#authentication"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-user-lock"></i>
                            </span>
                            <span> Authentication </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a> -->
                        <!-- Child Sub Menu -->
                        <!-- <ul class="sub-menu collapse" id="authentication"> -->
                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.signUp') }}">
                                    <span> Sing up </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.signIn') }}">
                                    <span> Log In </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.forgetPassword') }}">
                                    <span> Forget Password </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.lockscreen') }}">
                                    <span> Lock Screen </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.404') }}">
                                    <span> 404 </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.505') }}">
                                    <span> 505 </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->
                        <!-- </ul> -->
                        <!-- End:Child Sub Menu -->
                    <!-- </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#components" aria-expanded="false"
                            href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-dice-d6"></i>
                            </span>
                            <span> Component </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a> -->
                        <!-- Child Sub Menu -->
                        <!-- <ul class="sub-menu collapse" id="components"> -->
                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.invoice') }}">
                                    <span> Invoice </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.createInvoice') }}">
                                    <span> Create Invoice </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.calender') }}">
                                    <span> Calendar </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link active" href="{{ route('user.pages.components.timeline') }}">
                                    <span> Timeline </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.map') }}">
                                    <span> Map </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.alerts') }}">
                                    <span> Alerts </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.cards') }}">
                                    <span> Cards </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.buttons') }}">
                                    <span> Buttons </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.modals') }}">
                                    <span> Modals </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.badges') }}">
                                    <span> Badges </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.spinners') }}">
                                    <span> Spinners </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.progress') }}">
                                    <span> Progress </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.listGroup') }}">
                                    <span> List Group </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.pagination') }}">
                                    <span> Pagination </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->
                        <!-- </ul> -->
                        <!-- End:Child Sub Menu -->
                    <!-- </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.support') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-hands-helping"></i>
                            </span>
                            <span> Support </span>
                        </a>
                    </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.blank') }}">
                            <span class="d2c_icon">
                                <i class="far fa-file"></i>
                            </span>
                            <span> Blank </span>
                        </a>
                    </li> -->
                    <!-- End:Menu Item -->
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>
                            <span> Logout </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->
                </ul>
                <!-- End:Menu -->
            </div>
        </div>
        <!-- End:Sidebar -->

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
    </div>

    <button class="d2c_offcanvas_toggle position-fixed top-50 end-0 translate-middle-y d-block d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar_right" aria-controls="d2c_sidebar_right">
        <i class="fas fa-chevron-left"></i>
    </button>

    <!-- Initial  Javascript -->
    <script src="{{ asset('lib/jQuery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap_5/bootstrap.bundle.min.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>

<!-- 
    Template Name: FundRows - Free Bootstrap Crypto Dashboard Template
    Template URL: https://www.designtocodes.com/product/fundrows-free-crypto-dashboard-template/
    Description: Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.
    Author: DesignToCodes
    Author URL: https://www.designtocodes.com
    Text Domain: FundRows
 -->
