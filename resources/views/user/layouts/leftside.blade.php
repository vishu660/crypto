
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
                <a href="{{ route('user') }}" class="brand-icon mb-2">
                    <img src="{{ asset('images/logo.3.png') }}" alt="Logo" style="height:32px; margin-right:8px;">
                    <span style="
                    font-weight:700;
                    letter-spacing:1px;
                    font-size:14px;
                    background: linear-gradient(45deg, #ff69b4, #00bfff); /* pink + blue */
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                ">
                    DIGITAL LEVEL MARKETING
                </span>                </a>
                <!-- End:Logo -->

                <!-- Menu -->
                <ul id="sidebarAccordion" class="navbar-nav flex-grow-1">
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
                        <a class="nav-link d-flex justify-content-between align-items-center {{ request()->routeIs('withdraw.create') || request()->routeIs('user.payouts') ? 'active' : '' }}"
                           data-bs-toggle="collapse"
                           href="#payoutMenu"
                           role="button"
                           aria-expanded="{{ request()->routeIs('withdraw.create') || request()->routeIs('user.payouts') ? 'true' : 'false' }}"
                           aria-controls="payoutMenu">
                            <span>
                                <i class="fas fa-money-bill-wave me-2"></i>Payout Details
                            </span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="collapse submenu {{ request()->routeIs('withdraw.create') || request()->routeIs('user.payouts') ? 'show' : '' }}" id="payoutMenu" data-bs-parent="#sidebarAccordion">
                            <a class="nav-link ps-5 fw-bold {{ request()->routeIs('withdraw.create') ? 'active' : '' }}" href="{{ route('withdraw.create') }}">Withdraw Now</a>
                            <a class="nav-link ps-5 {{ request()->routeIs('user.payouts') ? 'active' : '' }}" href="{{ route('user.payouts') }}">My Payouts</a>
                        </div>
                    </li>
                    <!-- End:Payout Details -->

                    {{-- e-pin  --}}
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center {{ request()->routeIs('available_epins') || request()->routeIs('applied_epins') ? 'active' : '' }}"
                           data-bs-toggle="collapse"
                           href="#epinMenu"
                           role="button"
                           aria-expanded="{{ request()->routeIs('available_epins') || request()->routeIs('applied_epins') ? 'true' : 'false' }}"
                           aria-controls="epinMenu">
                            <span>
                                <i class="fas fa-thumbtack me-2"></i>Epin Details
                            </span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="collapse submenu {{ request()->routeIs('available_epins') || request()->routeIs('applied_epins') ? 'show' : '' }}" id="epinMenu" data-bs-parent="#sidebarAccordion">
                            <a class="nav-link ps-5 fw-bold {{ request()->routeIs('available_epins') ? 'active' : '' }}" href="{{ route('available_epins') }}">Available Epins</a>
                            <a class="nav-link ps-5 {{ request()->routeIs('applied_epins') ? 'active' : '' }}" href="{{ route('applied_epins') }}">Applied Epins</a>
                        </div>
                    </li>
                    {{-- e-pin end --}}
                    {{-- Earnings --}}
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center {{ request()->routeIs('total_earnings') || request()->routeIs('refer_bonus') || request()->routeIs('level_bonus') || request()->routeIs('matching_bonus') ? 'active' : '' }}"
                           data-bs-toggle="collapse"
                           href="#epinMenu2"
                           role="button"
                           aria-expanded="{{ request()->routeIs('total_earnings') || request()->routeIs('refer_bonus') || request()->routeIs('level_bonus') || request()->routeIs('matching_bonus') ? 'true' : 'false' }}"
                           aria-controls="epinMenu2">
                            <span>
                                <i class="fas fa-coins me-2"></i>Earnings
                            </span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="collapse submenu {{ request()->routeIs('total_earnings') || request()->routeIs('refer_bonus') || request()->routeIs('level_bonus') || request()->routeIs('matching_bonus') ? 'show' : '' }}" id="epinMenu2" data-bs-parent="#sidebarAccordion">
                            <a class="nav-link ps-5 fw-bold {{ request()->routeIs('total_earnings') ? 'active' : '' }}" href="{{ route('total_earnings') }}">Total Earnings</a>
                            <a class="nav-link ps-5 {{ request()->routeIs('refer_bonus') ? 'active' : '' }}" href="{{ route('refer_bonus') }}">Refer Bonus</a>
                            <a class="nav-link ps-5 fw-bold {{ request()->routeIs('level_bonus') ? 'active' : '' }}" href="{{ route('level_bonus') }}">Level Bonus</a>
                            <a class="nav-link ps-5 {{ request()->routeIs('matching_bonus') ? 'active' : '' }}" href="{{ route('matching_bonus') }}">Matching Bonus</a>
                        </div>
                    </li>
                    {{--  Earnings end  --}}

                    {{-- team li --}}
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center {{ request()->routeIs('tree_view') || request()->routeIs('referral_list') || request()->routeIs('downline_team') ? 'active' : '' }}"
                           data-bs-toggle="collapse"
                           href="#networkMenu"
                           role="button"
                           aria-expanded="{{ request()->routeIs('tree_view') || request()->routeIs('referral_list') || request()->routeIs('downline_team') ? 'true' : 'false' }}"
                           aria-controls="networkMenu">
                            <span>
                                <i class="fas fa-project-diagram me-2"></i>Network
                            </span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="collapse submenu {{ request()->routeIs('tree_view') || request()->routeIs('referral_list') || request()->routeIs('downline_team') ? 'show' : '' }}" id="networkMenu" data-bs-parent="#sidebarAccordion">
                            <a class="nav-link ps-5 fw-bold {{ request()->routeIs('tree_view') ? 'active' : '' }}" href="{{ route('tree_view') }}">Tree View</a>
                            <a class="nav-link ps-5 {{ request()->routeIs('referral_list') ? 'active' : '' }}" href="{{ route('referral_list') }}">Referral List</a>
                            <a class="nav-link ps-5 fw-bold {{ request()->routeIs('downline_team') ? 'active' : '' }}" href="{{ route('downline_team') }}">Downline Team</a>
                        </div>
                    </li>
                    {{-- team end  --}}
                      {{-- fund request --}}
                      <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center {{ request()->routeIs('fund_request.create') || request()->routeIs('user.fund-requests') ? 'active' : '' }}"
                           data-bs-toggle="collapse"
                           href="#fundRequestMenu"
                           role="button"
                           aria-expanded="{{ request()->routeIs('fund_request.create') || request()->routeIs('user.fund-requests') ? 'true' : 'false' }}"
                           aria-controls="fundRequestMenu">
                            <span>
                                <i class="fas fa-hand-holding-usd me-2"></i>Fund Request
                            </span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="collapse submenu {{ request()->routeIs('fund_request.create') || request()->routeIs('user.fund-requests') ? 'show' : '' }}" id="fundRequestMenu" data-bs-parent="#sidebarAccordion">
                            <a class="nav-link ps-5 fw-bold {{ request()->routeIs('fund_request.create') ? 'active' : '' }}" href="{{ route('fund_request.create') }}">Request Now</a>
                            <a class="nav-link ps-5 {{ request()->routeIs('user.fund-requests') ? 'active' : '' }}" href="{{ route('user.fund-requests') }}">Requests Details</a>
                        </div>
                    </li>
                      {{-- fund end  --}}

                    <!-- Profile Collapsible Menu -->
                    <li class="nav-item mb-2">
                        <a class="nav-link d-flex justify-content-between align-items-center {{ request()->routeIs('user.pages.bank') || request()->routeIs('user.pages.profile') || request()->routeIs('user.pages.verification_to_kyc') || request()->routeIs('user.create.usdt') || request()->routeIs('user.view.usdt') || request()->routeIs('user.pages.activity') ? 'active' : '' }}"
                           data-bs-toggle="collapse"
                           href="#profileMenu"
                           role="button"
                           aria-expanded="{{ request()->routeIs('user.pages.bank') || request()->routeIs('user.pages.profile') || request()->routeIs('user.pages.verification_to_kyc') || request()->routeIs('user.create.usdt') || request()->routeIs('user.view.usdt') || request()->routeIs('user.pages.activity') ? 'true' : 'false' }}"
                           aria-controls="profileMenu">
                            <span>
                                <i class="far fa-user me-2"></i>Profile
                            </span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <div class="collapse submenu {{ request()->routeIs('user.pages.bank') || request()->routeIs('user.pages.profile') || request()->routeIs('user.pages.verification_to_kyc') || request()->routeIs('user.create.usdt') || request()->routeIs('user.view.usdt') || request()->routeIs('user.pages.activity') ? 'show' : '' }}" id="profileMenu" data-bs-parent="#sidebarAccordion">
                            <a class="nav-link {{ request()->routeIs('user.pages.bank') ? 'active' : '' }}" href="{{ route('user.pages.bank') }}">Bank Details</a>
                            <a class="nav-link {{ request()->routeIs('user.pages.profile') ? 'active' : '' }}" href="{{ route('user.pages.profile') }}">Personal Details</a>
                            <a class="nav-link {{ request()->routeIs('user.pages.verification_to_kyc') ? 'active' : '' }}" href="{{ route('user.pages.verification_to_kyc') }}">Identification</a>
                            <a class="nav-link {{ request()->routeIs('user.create.usdt') ? 'active' : '' }}" href="{{ route('user.create.usdt') }}">Add USDT Address</a>
                            <a class="nav-link {{ request()->routeIs('user.view.usdt') ? 'active' : '' }}" href="{{ route('user.view.usdt') }}">My USDT Addresses</a>
                            <a class="nav-link {{ request()->routeIs('user.pages.activity') ? 'active' : '' }}" href="{{ route('user.pages.activity') }}">Activity</a>
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
                  
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                  
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