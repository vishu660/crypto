<body>
    <!-- Preloader Start -->
    <div class="preloader">
        {{-- <img src="{{ asset('assets/images/logo/logo.png') }}" alt="DesignToCodes" > --}}
    </div>
    <!-- Preloader End -->
    <div class="d2c_wrapper">
        
        <!-- Main sidebar -->
        <div class="d2c_sidebar offcanvas-lg offcanvas-start px-2 py-4" tabindex="-1" id="d2c_sidebar">
            <div class="d-flex flex-column">
                <!-- Logo -->
                <a href="./index.html" class="brand-icon">
                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="DesignToCodes" style="width: 73.5%; padding-bottom: 20px;">
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
                        <a class="nav-link" href="{{ route('user.pages.plans') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-exchange-alt"></i>
                            </span>
                            <span> Plan </span>
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
                        <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#payoutMenu" role="button" aria-expanded="false" aria-controls="payoutMenu">
                            <span>
                                <i class="fas fa-money-bill-wave me-2" style="color:#1de9b6;"></i>Payout Details
                            </span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="collapse submenu" id="payoutMenu">
                            <a class="nav-link ps-5 fw-bold" href="{{ route('withdraw.create') }}">Withdraw Now</a>
                            <a class="nav-link ps-5" href="{{ route('user.payouts') }}">My Payouts</a>
                        </div>
                    </li>
                    <!-- End:Payout Details -->

                    <!-- Profile Collapsible Menu -->
                    <li class="nav-item mb-2">
                        <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#profileMenu" role="button" aria-expanded="false" aria-controls="profileMenu">
                            <span>
                                <i class="far fa-user me-2"></i>Profile
                            </span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="collapse submenu" id="profileMenu">
                            <a class="nav-link" href="{{ route('user.pages.bank') }}">Bank Details</a>
                            <a class="nav-link" href="{{ route('user.pages.profile') }}">Personal Details</a>
                            <a class="nav-link" href="{{ route('user.pages.verification_to_kyc') }}">Identification</a>
                            <a class="nav-link" href="#">Other Information</a>
                        </div>
                    </li>
                    <!-- End:Profile Collapsible Menu -->

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
                        <a class="nav-link" href="{{ route('user.pages.activity')}}">
                            <span class="d2c_icon">
                                <i class="fas fa-recycle"></i>
                            </span>
                            <span> Activity </span>
                        </a>
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
                    <form action="{{ route('logout') }}" method="POST" class="d-flex justify-content-end">
                            @csrf
                            <button type="submit"
                                class="nav-link d-flex align-items-center"
                                style="background: none; border: none;  color: inherit; cursor: pointer;">
                                <i class="fas fa-sign-out-alt me-2"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </li>
                    <!-- End:Menu Item -->
                </ul>
                <!-- End:Menu -->
            </div>
        </div>
        <!-- End:Sidebar -->