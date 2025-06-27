<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/logo/logo-sm.png" type="image/gif" sizes="16x16">
    <title>Dashboard - Fundrows</title>
    <meta name="og:description" content="Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.">
    <meta name="robots" content="index, follow">
    <meta name="og:title" property="og:title" content="FundRows – Free Bootstrap Crypto Dashboard Template">
    <meta property="og:image" content="https://www.designtocodes.com/wp-content/uploads/2023/10/FundRows-%E2%80%93-Free-Bootstrap-Crypto-Dashboard-Template-Thumbnail.jpg">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="./lib/bootstrap_5/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="./lib/fontawesome/css/all.min.css">
    <!-- animation link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- DataTable Css -->
    <link rel="stylesheet" href="./lib/DataTables/datatables.min.css">
    <!-- main css -->
  <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
                    <li class="nav-item active">
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
                                    <span> editor </span>
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
                                <a class="nav-link" href="{{ route('user.pages.components.timeline') }}">
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

        @yield('content')


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
                            <a href="{{ route('user.pages.profile') }}">
                                <img class="rounded-circle"
                                    src="{{ asset('assets/images/profile/profile-2.jpg') }}"
                                    alt="Profile Image"
                                    style="height: 40px; width: 40px; object-fit: cover;">
                            </a>
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

    <button class="d2c_offcanvas_toggle position-fixed top-50 end-0 translate-middle-y d-block d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar_right" aria-controls="d2c_sidebar_right">
        <i class="fas fa-chevron-left"></i>
    </button>

    <!-- Initial  Javascript -->
  <!-- jQuery -->
<script src="{{ asset('lib/jQuery/jquery-3.5.1.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('lib/bootstrap_5/bootstrap.bundle.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('lib/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/script.js') }}"></script>

<!-- ApexCharts CDN -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>


    <script>
        // Dashboard overview Line Chart
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_overview_chart') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [
                        {
                            name: 'Desktop',
                            data: [
                                ['2023-02-01', 25000],
                                ['2023-02-02', 28000],
                                ['2023-02-03', 31000],
                                ['2023-02-04', 24000],
                                ['2023-02-05', 28000],
                                ['2023-02-06', 25000],
                                ['2023-02-07', 25000],
                                ['2023-02-08', 31000],
                                ['2023-02-09', 27000],
                                ['2023-02-10', 20000],
                                ['2023-02-11', 25000],
                                ['2023-02-12', 30000],
                                ['2023-02-13', 25000],
                                ['2023-02-14', 24000],
                                ['2023-02-15', 33400],
                                ['2023-02-16', 40000],
                                ['2023-02-17', 50000],
                                ['2023-02-18', 30000],
                                ['2023-02-19', 25000],
                                ['2023-02-20', 50000],
                                ['2023-02-21', 30000],
                                ['2023-02-22', 35000],
                                ['2023-02-23', 30000],
                                ['2023-02-24', 25000],
                                ['2023-02-25', 50000],
                                ['2023-02-26', 60000],
                                ['2023-02-27', 70000],
                                ['2023-02-28', 30000],
                                ['2023-02-29', 40000],
                                ['2023-02-30', 60000],
                                ['2023-02-31', 40000],
                                ['2023-03-01', 70000],
                                ['2023-03-02', 60000],
                                ['2023-03-03', 45000],
                                ['2023-03-04', 45000],
                                ['2023-03-05', 40000],
                                ['2023-03-06', 35000],
                                ['2023-03-07', 30000],
                                ['2023-03-08', 25000],
                                ['2023-03-09', 30000],
                                ['2023-03-10', 25000],
                                ['2023-03-11', 25000],
                                ['2023-03-12', 20000],
                                ['2023-03-13', 30000],
                                ['2023-03-14', 40000],
                                ['2023-03-15', 50000],
                                ['2023-03-16', 45000],
                                ['2023-03-17', 30000],
                                ['2023-03-18', 40000],
                                ['2023-03-19', 30000],
                                ['2023-03-20', 20000],
                                ['2023-03-21', 50000],
                                ['2023-03-22', 60000],
                                ['2023-03-23', 20000],
                                ['2023-03-24', 40000],
                                ['2023-03-25', 30000],
                                ['2023-03-26', 40000],
                                ['2023-03-27', 25000],
                                ['2023-03-28', 60000],
                                ['2023-03-29', 70000],
                                ['2023-03-30', 65000],
                                ['2023-04-01', 55000],
                                ['2023-04-02', 44000],
                                ['2023-04-03', 33000],
                                ['2023-04-04', 39000],
                                ['2023-04-05', 25000],
                                ['2023-04-06', 31000],
                                ['2023-04-07', 44000],
                                ['2023-04-08', 25000],
                                ['2023-04-09', 28000],
                                ['2023-04-10', 34000],
                                ['2023-04-11', 36000],
                                ['2023-04-12', 45000],
                                ['2023-04-13', 58000],
                                ['2023-04-14', 40000],
                                ['2023-04-15', 50000],
                                ['2023-04-16', 60000],
                                ['2023-04-17', 66000],
                                ['2023-04-18', 68000],
                                ['2023-04-19', 52000],
                                ['2023-04-20', 45000],
                                ['2023-04-21', 50000],
                                ['2023-04-22', 60000],
                                ['2023-04-23', 70000],
                                ['2023-04-24', 25000],
                                ['2023-04-25', 35000],
                                ['2023-04-26', 40000],
                                ['2023-04-27', 50000],
                                ['2023-04-28', 52000],
                                ['2023-04-29', 55000],
                                ['2023-04-30', 66000],
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
                            opacityTo: 0.5,
                            stops: [0, 90, 100],
                        },
                    },
                    xaxis: {
                        type: 'datetime',
                        axisBorder: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            formatter: function (y) {
                                return y.toFixed(0) + ' $';
                            },
                        },
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();

        // dashboard small chart 1
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_dashboard_small_chart_1') ?? '';
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

        // d2c_dashboard_small_chart_2
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_dashboard_small_chart_2') ?? '';
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

        // d2c_dashboard_small_chart_3
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_dashboard_small_chart_3') ?? '';
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
    Template Name: FundRows – Free Bootstrap Crypto Dashboard Template
    Template URL: https://www.designtocodes.com/product/fundrows-free-crypto-dashboard-template/
    Description: Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.
    Author: DesignToCodes
    Author URL: https://www.designtocodes.com
    Text Domain: FundRows
-->