<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/gif" sizes="16x16">
    <title>Investment</title>
    <meta name="og:description" content="Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.">
    <meta name="robots" content="index, follow">
    <meta name="og:title" property="og:title" content="FundRows - Free Bootstrap Crypto Dashboard Template">
    <meta property="og:image" content="https://www.designtocodes.com/wp-content/uploads/2023/10/FundRows-%E2%80%93-Free-Bootstrap-Crypto-Dashboard-Template-Thumbnail.jpg">
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
                    <li class="nav-item active">
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
                    <li class="nav-item">
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
                            <!-- <li class="nav-item"> -->
                                <!-- <a class="nav-link" href="{{ route('user.pages.components.chartjs') }}">
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
                        <!-- <ul class="sub-menu collapse" id="components">
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
                    <h4 class="text-capitalize fw-bold">Investment</h4>
                </div>
            </div>
            <!-- End:Title -->

            <div class="row">
                <!-- small card item -->
                <div class="col-xxl-4 mb-4 d2c_investment_card">
                    <div class="card bg-success bg-opacity-10">
                        <div class="card-body pb-1">
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                                    <i class="fab fa-btc"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="text-capitalize fw-semibold mb-0">Total Investments</h6>
                                                <small class="mb-0 text-muted">Bitcoin USD</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-success dropdown-toggle px-3 py-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                BTC
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">ETH</a></li>
                                                <li><a class="dropdown-item" href="#">BNB</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="w-100">
                                        <p class="mb-0 text-secondary">Investment Ratio</p>
                                        <h4 class="mb-0 fw-semibold mt-1">$12,208.73</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- investment ratio chart -->
                                    <div id="d2c_investment_ratio"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- small card item (2) -->
                <div class="col-xxl-4 mb-4 d2c_investment_card">
                    <div class="card bg-success bg-opacity-10">
                        <div class="card-body pb-1">
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                                    <i class="fab fa-btc"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="text-capitalize fw-semibold mb-0">Investment Number</h6>
                                                <small class="mb-0 text-muted">Bitcoin USD</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-success dropdown-toggle px-3 py-1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                BTC
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href="#">ETH</a></li>
                                                <li><a class="dropdown-item" href="#">BNB</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="w-100">
                                        <p class="mb-0 text-secondary">Investments</p>
                                        <h4 class="mb-0 fw-semibold mt-1">$34,212.73</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- investment chart -->
                                    <div id="d2c_investment_chart"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- small card item (3) -->
                <div class="col-xxl-4 mb-4 d2c_investment_card d2c_investment_card_3">
                    <div class="card bg-success bg-opacity-10">
                        <div class="card-body pb-1">
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <div class="me-3">
                                                <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                                    <i class="fab fa-btc"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="text-capitalize fw-semibold mb-0">Rate of Return</h6>
                                                <small class="mb-0 text-muted">Bitcoin USD</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 text-end">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-success dropdown-toggle px-3 py-1" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                                BTC
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                <li><a class="dropdown-item" href="#">ETH</a></li>
                                                <li><a class="dropdown-item" href="#">BNB</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="w-100">
                                        <p class="mb-0 text-secondary">Rate of Return</p>
                                        <h4 class="mb-0 fw-semibold mt-1">$22,143.71</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- return chart -->
                                    <div id="d2c_return_chart"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- investment trading chart -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-capitalize fw-semibold mb-4">Investment Trading</h5>
                            <div id="d2c_investment_trading_chart"></div>
                        </div>
                    </div>
                </div>

                <!-- investment progress -->
                <div class="col-xxl-6 mb-4 mb-xxl-0">
                    <div class="card bg-success bg-opacity-10">
                        <div class="card-body">
                            <h5 class="text-capitalize fw-semibold mb-4">Investment Progress</h5>
                            <div id="d2c_investment_progress_chart"></div>
                            <p class="mt-3">Better your investment process, get more advantage in trading</p>
                        </div>
                    </div>
                </div>

                <!-- crypto investment -->
                <div class="col-xxl-6">
                    <div class="card bg-primary bg-opacity-10">
                        <div class="card-body">
                            <h5 class="text-capitalize fw-semibold mb-4">Crypto investment</h5>
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 100px;">Coins</th>
                                            <th style="min-width: 170px;">Invest Amount</th>
                                            <th style="min-width: 170px;">Return Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>BTC</td>
                                            <td>$22,00.00</td>
                                            <td class="text-success">+15% <i class="fas fa-upload"></i></td>
                                        </tr>
                                        <tr>
                                            <td>BNB</td>
                                            <td>$66,00.00</td>
                                            <td class="text-success">+18% <i class="fas fa-upload"></i></td>
                                        </tr>
                                        <tr>
                                            <td>ETH</td>
                                            <td>$54,00.00</td>
                                            <td class="text-danger">-10% <i class="fas fa-download"></i></td>
                                        </tr>
                                        <tr>
                                            <td>XRP</td>
                                            <td>$12,00.00</td>
                                            <td class="text-success">+20% <i class="fas fa-upload"></i></td>
                                        </tr>
                                        <tr>
                                            <td>DAI</td>
                                            <td>$27,00.00</td>
                                            <td class="text-success">+25% <i class="fas fa-upload"></i></td>
                                        </tr>
                                        <tr>
                                            <td>TRON</td>
                                            <td>$83,00.00</td>
                                            <td class="text-danger">-23% <i class="fas fa-download"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                <a href="{{ route('user.pages.profile') }}"><img class="rounded-circle" src="{{ asset('assets/images/profile/profile-2.jpg') }}" alt="Profile Image" style="height: 40px; width: 40px; object-fit: cover;"></a>
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


                <div class="card d2c_wallet_card mb-4" style="background: linear-gradient(180deg, #6271ebe0 0%, #fc76b7 373.31%), url('{{ asset('assets/images/triangle_bg.png') }}');">
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
                            <input type="email" class="form-control border-0" id="send_email" placeholder="Send Email" required>
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

    <button class="d2c_offcanvas_toggle position-fixed top-50 end-0 translate-middle-y d-block d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar_right" aria-controls="d2c_sidebar_right">
        <i class="fas fa-chevron-left"></i>
    </button>

    <!-- Initial  Javascript -->
    <script src="{{ asset('lib/jQuery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap_5/bootstrap.bundle.min.js') }}"></script>

    <!-- Chart Config -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // investment page trading page
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_investment_trading_chart') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [
                        {
                            data: [
                                {
                                    x: new Date(1538793000000),
                                    y: [6605, 6608.03, 6598.95, 6604.01],
                                },
                                {
                                    x: new Date(1538794800000),
                                    y: [6604.5, 6614.4, 6602.26, 6608.02],
                                },
                                {
                                    x: new Date(1538796600000),
                                    y: [6608.02, 6610.68, 6601.99, 6608.91],
                                },
                                {
                                    x: new Date(1538798400000),
                                    y: [6608.91, 6618.99, 6608.01, 6612],
                                },
                                {
                                    x: new Date(1538800200000),
                                    y: [6612, 6615.13, 6605.09, 6612],
                                },
                                {
                                    x: new Date(1538802000000),
                                    y: [6612, 6624.12, 6608.43, 6622.95],
                                },
                                {
                                    x: new Date(1538803800000),
                                    y: [6623.91, 6623.91, 6615, 6615.67],
                                },
                                {
                                    x: new Date(1538805600000),
                                    y: [6618.69, 6618.74, 6610, 6610.4],
                                },
                                {
                                    x: new Date(1538807400000),
                                    y: [6611, 6622.78, 6610.4, 6614.9],
                                },
                                {
                                    x: new Date(1538809200000),
                                    y: [6614.9, 6626.2, 6613.33, 6623.45],
                                },
                                {
                                    x: new Date(1538811000000),
                                    y: [6623.48, 6627, 6618.38, 6620.35],
                                },
                                {
                                    x: new Date(1538812800000),
                                    y: [6619.43, 6620.35, 6610.05, 6615.53],
                                },
                                {
                                    x: new Date(1538814600000),
                                    y: [6615.53, 6617.93, 6610, 6615.19],
                                },
                                {
                                    x: new Date(1538816400000),
                                    y: [6615.19, 6621.6, 6608.2, 6620],
                                },
                                {
                                    x: new Date(1538818200000),
                                    y: [6619.54, 6625.17, 6614.15, 6620],
                                },
                                {
                                    x: new Date(1538820000000),
                                    y: [6620.33, 6634.15, 6617.24, 6624.61],
                                },
                                {
                                    x: new Date(1538821800000),
                                    y: [6625.95, 6626, 6611.66, 6617.58],
                                },
                                {
                                    x: new Date(1538823600000),
                                    y: [6619, 6625.97, 6595.27, 6598.86],
                                },
                                {
                                    x: new Date(1538825400000),
                                    y: [6598.86, 6598.88, 6570, 6587.16],
                                },
                                {
                                    x: new Date(1538827200000),
                                    y: [6588.86, 6600, 6580, 6593.4],
                                },
                                {
                                    x: new Date(1538829000000),
                                    y: [6593.99, 6598.89, 6585, 6587.81],
                                },
                                {
                                    x: new Date(1538830800000),
                                    y: [6587.81, 6592.73, 6567.14, 6578],
                                },
                                {
                                    x: new Date(1538832600000),
                                    y: [6578.35, 6581.72, 6567.39, 6579],
                                },
                                {
                                    x: new Date(1538834400000),
                                    y: [6579.38, 6580.92, 6566.77, 6575.96],
                                },
                                {
                                    x: new Date(1538836200000),
                                    y: [6575.96, 6589, 6571.77, 6588.92],
                                },
                                {
                                    x: new Date(1538838000000),
                                    y: [6588.92, 6594, 6577.55, 6589.22],
                                },
                            ],
                        },
                    ],
                    chart: {
                        type: 'candlestick',
                        foreColor: '#ccc',
                        height: 370,
                        toolbar: {
                            show: false,
                        },
                    },

                    legend: {
                        show: false,
                    },
                    stroke: {
                        width: [3, 1],
                    },
                    grid:{
                        borderColor: '#00000014',  
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        }, 
                    },
                    plotOptions: {
                        candlestick: {
                            colors: {
                                upward: '#23CB62',
                                downward: '#FC76B7',
                            },
                        },
                    },
                    xaxis: {
                        type: 'datetime',
                        axisBorder: {
                            show: false,
                        },
                    },
                    responsive: [
                        {
                            breakpoint: 1500,
                            options: {
                                chart: {
                                    height: 490,
                                },
                            },
                        },
                        {
                            breakpoint: 1200,
                            options: {
                                chart: {
                                    height: 370,
                                },
                            },
                        },
                    ],
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // investment page progress chart
        (()=>{
            var options = {
                series: [65],
                chart: {
                    type: 'radialBar',
                    offsetY: -20,
                    sparkline: {
                        enabled: true
                    }
                },
                colors: ['#23CB62'],
                plotOptions: {
                    radialBar: {
                        startAngle: -90,
                        endAngle: 90,
                        track: {
                            background: "#D0F4DA",
                            strokeWidth: '97%',
                            margin: 10,
                        
                        },
                        dataLabels: {
                            name: {
                                show: false
                            },
                            value: {
                                offsetY: -2,
                                fontSize: '24px'
                            }
                        }
                    }
                },
                grid: {
                    padding: {
                        top: -10
                    },
                    padding: {
                        top: 0,
                        right: 0,
                        bottom: 0,
                        left: 0
                    }, 
                },
                fill: {
                    color: "#23CB62",
                },
                labels: ['Average Results'],
            };

            var chart = new ApexCharts(document.querySelector("#d2c_investment_progress_chart"), options);
            chart.render();
        })();


        // investment ratio chart
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_investment_ratio') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [
                        {
                            name: 'Desktop',
                            data: [90, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,90, 85, 105, 130, 92, 110, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82],
                        },
                    ],
                    chart: {
                        type: 'area',
                        foreColor: '#373D3F',
                        stacked: false,
                        zoom: {
                            type: 'x',
                            enabled: true,
                            autoScaleYaxis: true,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ['#23CB62'],
                    dataLabels: {
                        enabled: false,
                    },
                    markers: {
                        size: 0,
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            inverseColors: false,
                            opacityFrom: 0.7,
                            opacityTo: .5,
                            stops: [0, 90, 100],
                        },
                    },
                    grid: {
                        show: false,
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        },
                    },
                    xaxis: {
                        show: false,
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        }
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // investment ratio chart
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_investment_chart') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [
                        {
                            name: 'Desktop',
                            data: [90, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,90, 85, 105, 130, 92, 110, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82],
                        },
                    ],
                    chart: {
                        type: 'area',
                        foreColor: '#373D3F',
                        stacked: false,
                        zoom: {
                            type: 'x',
                            enabled: true,
                            autoScaleYaxis: true,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ['#23CB62'],
                    dataLabels: {
                        enabled: false,
                    },
                    markers: {
                        size: 0,
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            inverseColors: false,
                            opacityFrom: 0.7,
                            opacityTo: .5,
                            stops: [0, 90, 100],
                        },
                    },
                    grid: {
                        show: false,
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        },
                    },
                    xaxis: {
                        show: false,
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        }
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // investment return chart
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_return_chart') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [
                        {
                            name: 'Desktop',
                            data: [90, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,90, 85, 105, 130, 92, 110, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82,80, 85, 105, 130, 92, 80, 120, 102, 98, 145, 92, 82],
                        },
                    ],
                    chart: {
                        type: 'area',
                        foreColor: '#373D3F',
                        stacked: false,
                        zoom: {
                            type: 'x',
                            enabled: true,
                            autoScaleYaxis: true,
                        },
                        toolbar: {
                            show: false,
                        },
                    },
                    colors: ['#23CB62'],
                    dataLabels: {
                        enabled: false,
                    },
                    markers: {
                        size: 0,
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            inverseColors: false,
                            opacityFrom: 0.7,
                            opacityTo: .5,
                            stops: [0, 90, 100],
                        },
                    },
                    grid: {
                        show: false,
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        },
                    },
                    xaxis: {
                        show: false,
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            show: false,
                        },
                        axisTicks: {
                            show: false,
                        }
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

    </script>

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
