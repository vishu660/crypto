<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/gif" sizes="16x16">
    <title>Market</title>
    <meta name="og:description" content="Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.">
    <meta name="robots" content="index, follow">
    <meta name="og:title" property="og:title" content="FundRows - Free Bootstrap Crypto Dashboard Template">
    <meta property="og:image" content="https://www.designtocodes.com/wp-content/uploads/2023/10/FundRows-Free-Bootstrap-Crypto-Dashboard-Template-Thumbnail.jpg">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap_5/bootstrap.min.css') }}">
    <!-- animation link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.exchange') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-exchange-alt"></i>
                            </span>
                            <span> Exchange </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.investment') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-coins"></i>
                            </span>
                            <span> Investment </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('user.pages.market') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-chart-line"></i>
                            </span>
                            <span> Market </span>
                        </a>
                    </li>
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.faq') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-question-circle"></i>
                            </span>
                            <span> FAQ </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#form_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="far fa-file-alt"></i>
                            </span>
                            <span> Form </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a>
                        <!-- Child Sub Menu -->
                        <ul class="sub-menu collapse" id="form_dropdown">
                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.basicForm') }}">
                                    <span> Basic Form </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.advancedFrom') }}">
                                    <span> Advanced Form </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.editor') }}">
                                    <span> Editor </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->
                        </ul>
                        <!-- End:Child Sub Menu -->
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#table_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-table"></i>
                            </span>
                            <span> table </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a>
                        <!-- Child Sub Menu -->
                        <ul class="sub-menu collapse" id="table_dropdown">
                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.basicTable') }}">
                                    <span> Basic Table </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.advancedTable') }}">
                                    <span> Advanced Table </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->
                        </ul>
                        <!-- End:Child Sub Menu -->
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#chart_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-chart-pie"></i>
                            </span>
                            <span> Charts </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a>
                        <!-- Child Sub Menu -->
                        <ul class="sub-menu collapse" id="chart_dropdown">
                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.chartjs') }}">
                                    <span> ChartJS</span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.apexCharts') }}">
                                    <span> ApexCharts </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.eCharts') }}">
                                    <span> E-Charts </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.ammCharts') }}">
                                    <span> Amm-Charts </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->
                        </ul>
                        <!-- End:Child Sub Menu -->
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#authentication"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-user-lock"></i>
                            </span>
                            <span> Authentication </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a>
                        <!-- Child Sub Menu -->
                        <ul class="sub-menu collapse" id="authentication">
                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.signUp') }}">
                                    <span> Sing up </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.signIn') }}">
                                    <span> Log In </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.forgetPassword') }}">
                                    <span> Forget Password </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.lockscreen') }}">
                                    <span> Lock Screen </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.404') }}">
                                    <span> 404 </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.505') }}">
                                    <span> 505 </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->
                        </ul>
                        <!-- End:Child Sub Menu -->
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#components" aria-expanded="false"
                            href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-dice-d6"></i>
                            </span>
                            <span> Component </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a>
                        <!-- Child Sub Menu -->
                        <ul class="sub-menu collapse" id="components">
                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.invoice') }}">
                                    <span> Invoice </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.createInvoice') }}">
                                    <span> Create Invoice </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.calender') }}">
                                    <span> Calendar </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('user.pages.components.timeline') }}">
                                    <span> Timeline </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.map') }}">
                                    <span> Map </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.alerts') }}">
                                    <span> Alerts </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.cards') }}">
                                    <span> Cards </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.buttons') }}">
                                    <span> Buttons </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.modals') }}">
                                    <span> Modals </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.badges') }}">
                                    <span> Badges </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.spinners') }}">
                                    <span> Spinners </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.progress') }}">
                                    <span> Progress </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.listGroup') }}">
                                    <span> List Group </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.pagination') }}">
                                    <span> Pagination </span>
                                </a>
                            </li>
                            <!-- End:Child Menu Item -->
                        </ul>
                        <!-- End:Child Sub Menu -->
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.support') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-hands-helping"></i>
                            </span>
                            <span> Support </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.blank') }}">
                            <span class="d2c_icon">
                                <i class="far fa-file"></i>
                            </span>
                            <span> Blank </span>
                        </a>
                    </li>
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
                    <h4 class="text-capitalize fw-bold">Market</h4>
                </div>
            </div>
            <!-- End:Title -->

            <div class="row">
                <!-- small card item -->
                <div class="col-md-6 col-xxl-4 mb-4 d2c_market_card">
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
                                        <div class="w-100 d-flex align-items-center">
                                            <button class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-success">+1256.25%</button>
                                            <span class="text-success fs-4" style="transform: rotate(45deg);">
                                                <i class="fas fa-arrow-alt-circle-up"></i>
                                            </span>
                                        </div>
                                        <h4 class="mb-0 fw-semibold mt-2">$12,208.73</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="d2c_market_chart_1"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- small card item (2) -->
                <div class="col-md-6 col-xxl-4 mb-4 d2c_market_card">
                    <div class="card bg-success bg-opacity-10">
                        <div class="card-body pb-1">
                            <div class="d-flex align-items-center mb-4">
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
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+453.25%</button>
                                            <span class="text-success fs-4" style="transform: rotate(45deg);">
                                                <i class="fas fa-arrow-alt-circle-up"></i>
                                            </span>
                                        </div>
                                        <h4 class="mb-0 fw-semibold mt-2">$34,212.73</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="d2c_market_chart_2"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- small card item (3) -->
                <div class="col-md-6 col-xxl-4 mb-4 d2c_market_card">
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
                                    <div id="d2c_market_chart_3"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- small card item (4) -->
                <div class="col-md-6 col-xxl-4 mb-4 d2c_market_card">
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
                                    <div id="d2c_market_chart_4"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- small card item (5) -->
                <div class="col-md-6 col-xxl-4 mb-4 d2c_market_card">
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
                                    <div id="d2c_market_chart_5"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- small card  (6) -->
                <div class="col-md-6 col-xxl-4 mb-4 d2c_market_card">
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
                                    <div id="d2c_market_chart_6"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- small card item (7) -->
                <div class="col-md-6 col-xxl-4 mb-4 d2c_market_card">
                    <div class="card bg-danger bg-opacity-10">
                        <div class="card-body pb-1">
                            <div class="d-flex align-items-center mb-4">
                                <div class="me-3">
                                    <div class="rounded bg-danger bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                    <div>
                                        <div>
                                            <button class="btn px-3 py-1 me-2 bg-danger bg-opacity-25 rounded-pill text-secondary">-765.25%</button>
                                            <span class="text-danger fs-4" style="transform: rotate(-45deg);">
                                                <i class="fas fa-arrow-alt-circle-down"></i>
                                            </span>
                                        </div>
                                        <h4 class="mb-0 fw-semibold mt-2">$34,212.73</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="d2c_market_chart_7"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- small card item (8) -->
                <div class="col-md-6 col-xxl-4 mb-4 d2c_market_card">
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
                                    <div id="d2c_market_chart_8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- small card item (9) -->
                <div class="col-xxl-4 mb-4 d2c_market_card">
                    <div class="card bg-success bg-opacity-10">
                        <div class="card-body pb-1">
                            <div class="d-flex align-items-center mb-4">
                                <div class="me-3">
                                    <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                        <i class="fab fa-monero"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="text-uppercase fw-semibold mb-0">BNB-USD</h6>
                                    <small class="mb-0 text-muted">Binance USD</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <button class="btn px-3 py-1 me-2 bg-success bg-opacity-25 rounded-pill text-secondary">+432.25%</button>
                                            <span class="text-success fs-4" style="transform: rotate(45deg);">
                                                <i class="fas fa-arrow-alt-circle-up"></i>
                                            </span>
                                        </div>
                                        <h4 class="mb-0 fw-semibold mt-2">$12,43.73</h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="d2c_market_chart_9"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xxl-8 mb-4 mb-xxl-0 d2c_market_volume_chart">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <h5 class="text-capitalize mb-4">Market Volume</h5>
                            <div class="row">
                                <div class="col">
                                    <ul class="nav nav-pills d2c_market_volume_tab mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="currency-1-tab" data-bs-toggle="pill" data-bs-target="#currency-1" type="button" role="tab" aria-controls="currency-1" aria-selected="true">BTC</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="currency-2-tab" data-bs-toggle="pill" data-bs-target="#currency-2" type="button" role="tab" aria-controls="currency-2" aria-selected="false">ETH</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="currency-3-tab" data-bs-toggle="pill" data-bs-target="#currency-3" type="button" role="tab" aria-controls="currency-3" aria-selected="false">BNB</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="currency-4-tab" data-bs-toggle="pill" data-bs-target="#currency-4" type="button" role="tab" aria-controls="currency-4" aria-selected="false">BNB</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                            <div class="tab-content d2c_activity_table_content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="currency-1" role="tabpanel" aria-labelledby="currency-1-tab">                           
                                    <div id="d2c_currency_chart_1"></div>
                                </div>
                                <div class="tab-pane animate__animated animate__fadeInUp" id="currency-2" role="tabpanel" aria-labelledby="currency-2-tab">
                                    <div id="d2c_currency_chart_2"></div>
                                </div>
                                <div class="tab-pane animate__animated animate__fadeInUp" id="currency-3" role="tabpanel" aria-labelledby="currency-3-tab">
                                    <div id="d2c_currency_chart_3"></div>
                                </div>
                                <div class="tab-pane animate__animated animate__fadeInUp" id="currency-4" role="tabpanel" aria-labelledby="currency-4-tab">
                                    <div id="d2c_currency_chart_4"></div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card bg-warning bg-opacity-10">
                        <div class="card-body">
                            <h5 class="text-capitalize">Market Capital</h5>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Rank</th>
                                            <th>Coins</th>
                                            <th style="min-width: 120px;">Last Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="fw-semibold">Bitcoin</td>
                                            <td>$40,000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ethereum</td>
                                            <td>$2,500</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Ripple</td>
                                            <td>$0.80</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Cardano</td>
                                            <td>$1.50</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Binance Coin</td>
                                            <td>$350</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Solana</td>
                                            <td>$50</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>YEN</td>
                                            <td>$8.80</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Pound</td>
                                            <td>$3.50</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Binance</td>
                                            <td>$430</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Solana</td>
                                            <td>$90</td>
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

    <!-- Offcanvas Toggler -->
    <button class="d2c_offcanvas_toggle position-fixed top-50 end-0 translate-middle-y d-block d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar_right" aria-controls="d2c_sidebar_right">
        <i class="fas fa-chevron-left"></i>
    </button>
    <!-- End:Offcanvas Toggler -->

    <!-- Initial  Javascript -->
    <script src="{{ asset('lib/jQuery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap_5/bootstrap.bundle.min.js') }}"></script>

    <!-- Chart Config -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        // market page currency chart 1
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_currency_chart_1') ?? '';

            if (Chart == '') {
                return false;
            } else {
                var options = {
                    chart: {
                        foreColor: '#ccc',
                        type: 'bar',
                        toolbar: {
                            show: false,
                        },
                        fontFamily: 'Poppins, sans-serif',
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
                    series: [
                        {
                            name: 'Income',
                            data: [5343, 8532, 3012, 3002, 9277, 8012, 3203, 4027, 9887, 4509, 9234, 8255],
                        },
                    ],
                    colors: ['#6271eb'],
                    legend: {
                        show: false,
                        position: 'top',
                        horizontalAlign: 'right',
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    xaxis: {
                        categories: ['Jan', 'Feb', 'Marc', 'April', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            formatter: function (y) {
                                return y.toFixed(0) + '$';
                            },
                        },
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            borderRadius: 8,
                            dataLabels: {
                                position: 'center',
                            },
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        offsetY: -20,
                        style: {
                            fontSize: '0.75rem',
                            colors: ['#FFFFFF'],
                        },
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // market page currency chart 2
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_currency_chart_2') ?? '';

            if (Chart == '') {
                return false;
            } else {
                var options = {
                    chart: {
                        foreColor: '#ccc',
                        type: 'bar',
                        toolbar: {
                            show: false,
                        },
                        fontFamily: 'Poppins, sans-serif',
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
                    series: [
                        {
                            name: 'Income',
                            data: [4343, 8532, 2012, 3002, 9277, 8012, 3203, 6565, 7676, 4545, 8765, 8255],
                        },
                    ],
                    colors: ['#6271eb'],
                    legend: {
                        show: false,
                        position: 'top',
                        horizontalAlign: 'right',
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    xaxis: {
                        categories: ['Jan', 'Feb', 'Marc', 'April', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            formatter: function (y) {
                                return y.toFixed(0) + '$';
                            },
                        },
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            borderRadius: 8,
                            dataLabels: {
                                position: 'center',
                            },
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        offsetY: -20,
                        style: {
                            fontSize: '0.75rem',
                            colors: ['#FFFFFF'],
                        },
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // market page currency chart 3
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_currency_chart_3') ?? '';

            if (Chart == '') {
                return false;
            } else {
                var options = {
                    chart: {
                        foreColor: '#ccc',
                        type: 'bar',
                        toolbar: {
                            show: false,
                        },
                        fontFamily: 'Poppins, sans-serif',
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
                    series: [
                        {
                            name: 'Income',
                            data: [4343, 8532, 2012, 3002, 9277, 8012, 3203, 6565, 7676, 4545, 8765, 8255],
                        },
                    ],
                    colors: ['#6271eb'],
                    legend: {
                        show: false,
                        position: 'top',
                        horizontalAlign: 'right',
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    xaxis: {
                        categories: ['Jan', 'Feb', 'Marc', 'April', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            formatter: function (y) {
                                return y.toFixed(0) + '$';
                            },
                        },
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            borderRadius: 8,
                            dataLabels: {
                                position: 'center',
                            },
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        offsetY: -20,
                        style: {
                            fontSize: '0.75rem',
                            colors: ['#FFFFFF'],
                        },
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // market page currency chart 4
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_currency_chart_4') ?? '';

            if (Chart == '') {
                return false;
            } else {
                var options = {
                    chart: {
                        foreColor: '#ccc',
                        type: 'bar',
                        toolbar: {
                            show: false,
                        },
                        fontFamily: 'Poppins, sans-serif',
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
                    series: [
                        {
                            name: 'Income',
                            data: [4343, 8532, 2012, 3002, 9277, 8012, 3203, 6565, 7676, 4545, 8765, 8255],
                        },
                    ],
                    colors: ['#6271eb'],
                    legend: {
                        show: false,
                        position: 'top',
                        horizontalAlign: 'right',
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    xaxis: {
                        categories: ['Jan', 'Feb', 'Marc', 'April', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            formatter: function (y) {
                                return y.toFixed(0) + '$';
                            },
                        },
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            borderRadius: 8,
                            dataLabels: {
                                position: 'center',
                            },
                        },
                    },
                    dataLabels: {
                        enabled: true,
                        offsetY: -20,
                        style: {
                            fontSize: '0.75rem',
                            colors: ['#FFFFFF'],
                        },
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // market chart 1
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_market_chart_1') ?? '';
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
                            opacityFrom: 0,
                            opacityTo: 0,
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

        // market chart 2
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_market_chart_2') ?? '';
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
                            opacityFrom: 0,
                            opacityTo: 0,
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

        // market chart 3
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_market_chart_3') ?? '';
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
                    colors: ['#FC76B7'],
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
                            opacityFrom: 0,
                            opacityTo: 0,
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

        // market chart 4
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_market_chart_4') ?? '';
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
                            opacityFrom: 0,
                            opacityTo: 0,
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

        // market chart 5
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_market_chart_5') ?? '';
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
                    colors: ['#FC76B7'],
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
                            opacityFrom: 0,
                            opacityTo: 0,
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

        // market chart 6
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_market_chart_6') ?? '';
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
                            opacityFrom: 0,
                            opacityTo: 0,
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

         // market chart 7
         (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_market_chart_7') ?? '';
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
                    colors: ['#FC76B7'],
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
                            opacityFrom: 0,
                            opacityTo: 0,
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

         // market chart 8
         (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_market_chart_8') ?? '';
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
                            opacityFrom: 0,
                            opacityTo: 0,
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

         // market chart 9
         (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_market_chart_9') ?? '';
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
                            opacityFrom: 0,
                            opacityTo: 0,
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
