<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/gif" sizes="16x16">
    <title>Profile</title>
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
                    <li class="nav-item active">
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

        // Area Chart
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_liquidity_chart') ?? '';
            if (Chart == '') {
                return false;
            } else {
                var options = {
                    series: [
                        {
                            name: 'series1',
                            data: [31, 40, 28, 51, 42, 109, 100],
                        },
                    ],
                    colors: ['#23CB62'],
                    chart: {
                        type: 'area',
                        foreColor: '#ccc',
                        toolbar: {
                            show: false,
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    grid:{
                        borderColor: '#00000014',  
                        enabled: false,
                        show: false,
                        padding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        },
                    },
                    stroke: {
                        curve: 'smooth',
                    },
                    legend: {
                        show: false,
                    },
                    xaxis: {
                        type: 'datetime',
                        categories: ['15 Nov','17 Nov','19 Nov','21 Nov','23 Nov','25 Nov','27 Nov'],
                    },
                    tooltip: {
                        x: {
                            format: 'dd/MM/yy HH:mm',
                        },
                    },
                };

                var chart = new ApexCharts(Chart, options);
                chart.render();
            }
        })();
        // volume chart
        (() => {
            'use strict';
            const Chart = document.querySelector('#d2c_volume_chart') ?? '';

            if (Chart == '') {
                return false;
            } else {
                var options = {
                    chart: {
                        foreColor: '#232323',
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
                            data: [300, 350, 500, 200, 750, 600, 350],
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
                        categories: ['Jan', 'Feb', 'Marc', 'April', 'May', 'Jun', 'July'],
                        axisTicks:{
                            show: false,
                        }
                    },
                    yaxis: {
                        axisTicks: {
                            show: false,
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
                        enabled: false,
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
