<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/gif" sizes="16x16">
    <title>Exchange</title>
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
                    <li class="nav-item active">
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
                    <li class="nav-item">
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
                    <h4 class="text-capitalize fw-bold">Exchange</h4>
                </div>
            </div>
            <!-- End:Title -->

            <div class="row">
                <div class="col-xxl-8 mb-4 d2c_exchange_chart_and_table">
                    <div class="card bg-success bg-opacity-10">
                        <div class="card-body">
                            <h5 class="text-capitalize mb-4 fw-semibold">CandleStick Chart</h5>
                            <div id="d2c_exchange_chart"></div>
                        </div>
                    </div>
                    <div class="card mt-4 bg-danger bg-opacity-10">
                        <div class="card-body">
                            <h5 class="text-capitalize mb-4 fw-semibold">Latest Sold Transaction</h5>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 150px">Coin Name</th>
                                            <th style="min-width: 150px">To</th>
                                            <th style="min-width: 210px">Date</th>
                                            <th style="min-width: 120px">Amount</th>
                                            <th style="min-width: 120px">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bitcoin</td>
                                            <td>John Cooper</td>
                                            <td>2023-06-10 09:30 AM</td>
                                            <td>$6,764.89</td>
                                            <td class="text-success">Complete</td>
                                        </tr>
                                        <tr>
                                            <td>Ethereum</td>
                                            <td>Wade Warren</td>
                                            <td>2023-06-11 02:45 PM</td>
                                            <td>$2,322.21</td>
                                            <td class="text-danger">Pending</td>
                                        </tr>
                                        <tr>
                                            <td>Ripple</td>
                                            <td>Esth Howard</td>
                                            <td>2023-06-12 11:15 AM</td>
                                            <td>$8,222.89</td>
                                            <td class="text-success">Complete</td>
                                        </tr>
                                        <tr>
                                            <td>Cardano</td>
                                            <td>Jenny Wilson</td>
                                            <td>2023-06-12 03:20 PM</td>
                                            <td>$9,287.23</td>
                                            <td class="text-danger">Pending</td>
                                        </tr>
                                        <tr>
                                            <td>Litecoin</td>
                                            <td>Robert</td>
                                            <td>2023-06-13 10:45 AM</td>
                                            <td>$1,221.33</td>
                                            <td class="text-danger">Pending</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 mb-4 d2c_market_preview">
                    <div class="card bg-warning bg-opacity-10">
                        <div class="card-body">
                            <h5 class="text-capitalize mb-4 fw-semibold">Market Previews</h5>
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
                                            <div class="rounded bg-warning bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                            <div class="rounded bg-danger bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                                    <p class="text-danger">4,24%</p>
                                </div>
                            </div>
                            <!-- market previews item -->
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3">
                                            <div class="rounded bg-warning bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-4 mb-4 mb-xxl-0 d2c_margin_trade">
                    <div class="card bg-warning bg-opacity-10">
                        <div class="card-body">
                            <h5 class="text-capitalize mb-4">Margin Trade</h5>
                            <p class="fw-semibold mb-2">Exchange</p>
                            <form action="#" class="d2c_trade_form">
                                <div class="mb-3">
                                    <label class="form-label">Form</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control bg-warning bg-opacity-25" placeholder="Amount">
                                        <span class="input-group-text p-0 border-0 bg-transparent">
                                            <select class="form-select rounded-0 text-secondary fw-semibold rounded-end bg-warning form-control" aria-label="Default select example">
                                                <option selected>BTC</option>
                                                <option value="1">ETH</option>
                                                <option value="2">BNB</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">To</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control bg-warning bg-opacity-25" placeholder="Amount">
                                        <span class="input-group-text p-0 border-0 bg-transparent">
                                            <select class="form-select rounded-0 text-secondary fw-semibold rounded-end bg-warning form-control" aria-label="Default select example">
                                                <option selected>BTC</option>
                                                <option value="1">ETH</option>
                                                <option value="2">BNB</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-lg">
                                        <label class="form-label">Price</label>
                                        <input type="number" class="form-control bg-warning bg-opacity-25" placeholder="Amount" required>
                                    </div>
                                    <div class="col-lg">
                                        <label class="form-label">Expires in</label>
                                        <div class="input-group">
                                            <span class="input-group-text w-100 p-0 border-0 bg-transparent">
                                                <select class="form-select rounded text-secondary fw-semibold rounded-end bg-warning bg-opacity-25 form-control" aria-label="Default select example">
                                                    <option selected>1 Day</option>
                                                    <option value="1">2 Day</option>
                                                    <option value="2">3 Day</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col">
                                        <p class="text-muted">Price</p>
                                    </div>
                                    <div class="col-7 text-end">
                                        <p class="text-muted">1 BST=5549.56 NSE</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="text-muted">Inverse Price</p>
                                    </div>
                                    <div class="col-7 text-end">
                                        <p class="text-muted">1 NSE=5549.56 BST</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning w-100 text-secondary fw-semibold text-capitalize">Buy Coin</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-8 d2c_exchange_chart">
                    <div class="card bg-primary bg-opacity-10">
                        <div class="card-body">
                            <h5>Exchange overview chart</h5>
                            <div id="d2c_exchange_lineChart"></div>
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
        // exchange page
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_exchange_chart') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [{
                        data: [{
                                x: new Date(1538778600000),
                                y: [6629.81, 6650.5, 6623.04, 6633.33]
                            },
                            {
                            x: new Date(1538780400000),
                            y: [6632.01, 6643.59, 6620, 6630.11]
                            },
                            {
                            x: new Date(1538782200000),
                            y: [6630.71, 6648.95, 6623.34, 6635.65]
                            },
                            {
                            x: new Date(1538784000000),
                            y: [6635.65, 6651, 6629.67, 6638.24]
                            },
                            {
                            x: new Date(1538785800000),
                            y: [6638.24, 6640, 6620, 6624.47]
                            },
                            {
                            x: new Date(1538787600000),
                            y: [6624.53, 6636.03, 6621.68, 6624.31]
                            },
                            {
                            x: new Date(1538789400000),
                            y: [6624.61, 6632.2, 6617, 6626.02]
                            },
                            {
                            x: new Date(1538791200000),
                            y: [6627, 6627.62, 6584.22, 6603.02]
                            },
                            {
                            x: new Date(1538793000000),
                            y: [6605, 6608.03, 6598.95, 6604.01]
                            },
                            {
                            x: new Date(1538794800000),
                            y: [6604.5, 6614.4, 6602.26, 6608.02]
                            },
                            {
                            x: new Date(1538796600000),
                            y: [6608.02, 6610.68, 6601.99, 6608.91]
                            },
                            {
                            x: new Date(1538798400000),
                            y: [6608.91, 6618.99, 6608.01, 6612]
                            },
                            {
                            x: new Date(1538800200000),
                            y: [6612, 6615.13, 6605.09, 6612]
                            },
                            {
                            x: new Date(1538802000000),
                            y: [6612, 6624.12, 6608.43, 6622.95]
                            },
                            {
                            x: new Date(1538803800000),
                            y: [6623.91, 6623.91, 6615, 6615.67]
                            },
                            {
                            x: new Date(1538805600000),
                            y: [6618.69, 6618.74, 6610, 6610.4]
                            },
                            {
                            x: new Date(1538807400000),
                            y: [6611, 6622.78, 6610.4, 6614.9]
                            },
                            {
                            x: new Date(1538809200000),
                            y: [6614.9, 6626.2, 6613.33, 6623.45]
                            },
                            {
                            x: new Date(1538811000000),
                            y: [6623.48, 6627, 6618.38, 6620.35]
                            },
                            {
                            x: new Date(1538812800000),
                            y: [6619.43, 6620.35, 6610.05, 6615.53]
                            },
                            {
                            x: new Date(1538814600000),
                            y: [6615.53, 6617.93, 6610, 6615.19]
                            },
                            {
                            x: new Date(1538816400000),
                            y: [6615.19, 6621.6, 6608.2, 6620]
                            },
                            {
                            x: new Date(1538818200000),
                            y: [6619.54, 6625.17, 6614.15, 6620]
                            },
                            {
                            x: new Date(1538820000000),
                            y: [6620.33, 6634.15, 6617.24, 6624.61]
                            },
                            {
                            x: new Date(1538821800000),
                            y: [6625.95, 6626, 6611.66, 6617.58]
                            },
                            {
                            x: new Date(1538823600000),
                            y: [6619, 6625.97, 6595.27, 6598.86]
                            },
                            {
                            x: new Date(1538825400000),
                            y: [6598.86, 6598.88, 6570, 6587.16]
                            },
                            {
                            x: new Date(1538827200000),
                            y: [6588.86, 6600, 6580, 6593.4]
                            },
                            {
                            x: new Date(1538829000000),
                            y: [6593.99, 6598.89, 6585, 6587.81]
                            },
                            {
                            x: new Date(1538830800000),
                            y: [6587.81, 6592.73, 6567.14, 6578]
                            },
                            {
                            x: new Date(1538832600000),
                            y: [6578.35, 6581.72, 6567.39, 6579]
                            },
                            {
                            x: new Date(1538834400000),
                            y: [6579.38, 6580.92, 6566.77, 6575.96]
                            },
                            {
                            x: new Date(1538836200000),
                            y: [6575.96, 6589, 6571.77, 6588.92]
                            },
                            {
                            x: new Date(1538838000000),
                            y: [6588.92, 6594, 6577.55, 6589.22]
                            },
                            {
                            x: new Date(1538839800000),
                            y: [6589.3, 6598.89, 6589.1, 6596.08]
                            },
                            {
                            x: new Date(1538841600000),
                            y: [6597.5, 6600, 6588.39, 6596.25]
                            },
                            {
                            x: new Date(1538843400000),
                            y: [6598.03, 6600, 6588.73, 6595.97]
                            },
                            {
                            x: new Date(1538845200000),
                            y: [6595.97, 6602.01, 6588.17, 6602]
                            },
                            {
                            x: new Date(1538847000000),
                            y: [6602, 6607, 6596.51, 6599.95]
                            },
                            {
                            x: new Date(1538848800000),
                            y: [6600.63, 6601.21, 6590.39, 6591.02]
                            },
                            {
                            x: new Date(1538850600000),
                            y: [6591.02, 6603.08, 6591, 6591]
                            },
                            {
                            x: new Date(1538852400000),
                            y: [6591, 6601.32, 6585, 6592]
                            },
                            {
                            x: new Date(1538854200000),
                            y: [6593.13, 6596.01, 6590, 6593.34]
                            },
                            {
                            x: new Date(1538856000000),
                            y: [6593.34, 6604.76, 6582.63, 6593.86]
                            },
                            {
                            x: new Date(1538857800000),
                            y: [6593.86, 6604.28, 6586.57, 6600.01]
                            },
                            {
                            x: new Date(1538859600000),
                            y: [6601.81, 6603.21, 6592.78, 6596.25]
                            }
                        ]
                    }],
                    chart: {
                        type: 'candlestick',
                        foreColor: '#373D3F',
                        height: 350,
                        toolbar: {
                            show: false,
                        },
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
                    title: {
                        show:false,
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
                        axisTicks: {
                            show: false,
                        },
                    },
                    yaxis: {
                        tooltip: {
                            enabled: true
                        },
                        labels:{
                            show: false,
                        }
                    }
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // exchange page overview Line Chart
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_exchange_lineChart') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [
                        {
                            name: 'Desktop',
                            data: [
                                ['2023-05-01', 150],
                                ['2023-05-02', 160],
                                ['2023-05-03', 170],
                                ['2023-05-04', 161],
                                ['2023-05-05', 167],
                                ['2023-05-06', 162],
                                ['2023-05-07', 161],
                                ['2023-05-08', 152],
                                ['2023-05-09', 141],
                                ['2023-05-10', 144],
                                ['2023-05-11', 154],
                                ['2023-05-12', 166],
                                ['2023-05-13', 176],
                                ['2023-05-14', 187],
                                ['2023-05-15', 198],
                                ['2023-05-16', 210],
                                ['2023-05-17', 196],
                                ['2023-05-18', 207],
                                ['2023-05-19', 200],
                                ['2023-05-20', 187],
                                ['2023-05-21', 192],
                                ['2023-05-22', 204],
                                ['2023-05-23', 193],
                                ['2023-05-24', 204],
                                ['2023-05-25', 193],
                                ['2023-05-26', 204],
                                ['2023-05-27', 208],
                                ['2023-05-28', 196],
                                ['2023-05-29', 193],
                                ['2023-05-30', 178],
                                ['2023-05-31', 204],
                                ['2023-06-01', 218],
                                ['2023-06-02', 211],
                                ['2023-06-03', 218],
                                ['2023-06-04', 216],
                                ['2023-06-05', 197],
                                ['2023-06-06', 190],
                                ['2023-06-07', 179],
                                ['2023-06-08', 172],
                                ['2023-06-09', 158],
                                ['2023-06-10', 159],
                                ['2023-06-11', 147],
                                ['2023-06-12', 152],
                                ['2023-06-13', 137],
                                ['2023-06-14', 136],
                                ['2023-06-15', 123],
                                ['2023-06-16', 112],
                                ['2023-06-17', 99],
                                ['2023-06-18', 100],
                                ['2023-06-19', 95],
                                ['2023-06-20', 105],
                                ['2023-06-21', 116],
                                ['2023-06-22', 125],
                                ['2023-06-23', 124],
                                ['2023-06-24', 133],
                                ['2023-06-25', 129],
                                ['2023-06-26', 116],
                                ['2023-06-27', 119],
                                ['2023-06-28', 109],
                                ['2023-06-29', 115],
                                ['2023-06-30', 111],
                                ['2023-07-01', 96],
                                ['2023-07-02', 104],
                                ['2023-07-03', 102],
                                ['2023-07-04', 116],
                                ['2023-07-05', 126],
                                ['2023-07-06', 117],
                                ['2023-07-07', 130],
                                ['2023-07-08', 124],
                                ['2023-07-09', 126],
                                ['2023-07-10', 131],
                                ['2023-07-11', 143],
                                ['2023-07-12', 130],
                                ['2023-07-13', 116],
                                ['2023-07-14', 118],
                                ['2023-07-15', 122],
                                ['2023-07-16', 132],
                                ['2023-07-17', 126],
                                ['2023-07-18', 136],
                                ['2023-07-19', 123],
                                ['2023-07-20', 112],
                                ['2023-07-21', 116],
                                ['2023-07-22', 113],
                                ['2023-07-23', 109],
                                ['2023-07-24', 99],
                                ['2023-07-25', 100],
                                ['2023-07-26', 93],
                                ['2023-07-27', 85],
                                ['2023-07-28', 79],
                                ['2023-07-29', 64],
                                ['2023-07-30', 79],
                            ],
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
                    colors: ['#6271eb'],
                    dataLabels: {
                        enabled: false,
                    },
                    markers: {
                        size: 0,
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
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            inverseColors: false,
                            opacityFrom: 0.5,
                            opacityTo: 0,
                            stops: [0, 90, 100],
                        },
                    },
                    xaxis: {
                        type: 'datetime',
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
