@extends('user.main')

@section('content')

<div class="container-fluid col-md-9 min-vh-100 bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg border-bottom">
        <div class="container">
            <a class="navbar-brand text-dark fw-bold" href="#">
                <i class="fas fa-coins me-2"></i>Crypto Dashboard
            </a>
            <div class="d-flex">
                <div class="dropdown me-3">
                    <button class="btn btn-link text-dark" type="button" data-bs-toggle="dropdown">
                        <a class="dropdown-item text-dark" href="#"><i class="fas fa-bell"></i></a>
                    </button>
                </div>
                <div class="dropdown">
                    <button class="btn btn-link text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dashboard-card text-dark" style="z-index:2000;">
                        <li><a class="dropdown-item text-dark" href="#">Profile</a></li>
                        <li><a class="dropdown-item text-dark" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider border-secondary"></li>
                        <li><a class="dropdown-item text-dark" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container py-4 ">

        <!-- Profile Section -->
        <div class="dashboard-card p-4 rounded mb-4">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="me-3 position-relative">
                        @php
                            $avatar = $user->avatar_url ?? ($user->profile_image ? asset('storage/' . $user->profile_image) : asset('default-avatar.png'));
                        @endphp
                        <img src="{{ asset('assets/images/avatar/man-1.png') }}" class="rounded-circle border dashboard-badge" width="80" height="80" alt="Avatar">
                        @if($user->vip_level && $user->vip_level !== 'Regular User')
                            <span class="position-absolute bottom-0 end-0 translate-middle p-1 dashboard-badge rounded-circle">
                                <i class="fas fa-crown text-dark fs-6"></i>
                            </span>
                        @endif
                    </div>
                    <div>
                        <h4 class="mb-0">{{ $user->name }}</h4>
                        <small class="dashboard-text-secondary">gourav</small>
                        <div>
                            <span class="badge dashboard-badge">{{ $user->vip_level ?? 'Regular User' }}</span>
                            <span class="badge dashboard-badge-dark">UID: {{ $user->uid }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <div class="row text-center g-2">
                        <div class="col-6 col-md-3 dashboard-card p-3 rounded">
                            <h5 class="text-dark">{{ $user->following_count ?? 0 }}</h5>
                            <small class="dashboard-text-secondary">USDT</small>
                        </div>
                        <div class="col-6 col-md-3 dashboard-card p-3 rounded">
                            <h5 class="text-dark">{{ $user->followers_count ?? 0 }}</h5>
                            <small class="dashboard-text-secondary">Count Refer</small>
                        </div>
                        <div class="col-6 col-md-3 dashboard-card p-3 rounded">
                            <h5 class="text-dark">{{ $user->salary_eligibility ?? 'N/A' }}</h5>
                            <small class="dashboard-text-secondary">Salary</small>
                        </div>
                        <div class="col-6 col-md-3 dashboard-card p-3 rounded">
                            <h5 class="text-dark">{{ $user->roi ?? '0%' }}</h5>
                            <small class="dashboard-text-secondary">ROI</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Widgets -->
        <div class="row g-4">

            <!-- Markets -->
            <div class="col-lg-8">
                <div class="dashboard-card p-4 rounded">
                    <h5 class="text-dark"><i class="fas fa-chart-line me-2"></i>Markets</h5>
                    <div class="mt-3">
                        <div class="mb-2 p-3 dashboard-card rounded d-flex justify-content-between">
                            <div  class="text-dark">
                                <strong>BTC/USDT</strong><br>
                                <small class="dashboard-text-secondary">Bitcoin</small>
                            </div>
                            <div class="text-end">
                                <strong class="text-dark">$43,250.50</strong><br>
                                <small class="dashboard-success">+2.45%</small>
                            </div>
                        </div>
                        <div class="mb-2 p-3 dashboard-card rounded d-flex justify-content-between">
                            <div class="text-dark">
                                <strong>ETH/USDT</strong><br>
                                <small class="dashboard-text-secondary">Ethereum</small>
                            </div>
                            <div class="text-end">
                                <strong class="text-dark">$2,680.30</strong><br>
                                <small class="dashboard-success">+1.23%</small>
                            </div>
                        </div>
                        <div class="p-3 dashboard-card rounded d-flex justify-content-between">
                            <div class="text-dark">
                                <strong class="text-dark">BNB/USDT</strong><br>
                                <small class="dashboard-text-secondary">Binance Coin</small>
                            </div>
                            <div class="text-end">
                                <strong class="text-dark">$312.80</strong><br>
                                <small class="dashboard-danger">-0.87%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Discover -->
            <div class="col-lg-4">
                <div class="dashboard-card p-4 rounded">
                    <h5 class="text-dark"><i class="fas fa-compass me-2"></i>Discover</h5>
                    <div class="mt-3">
                        <div class="mb-2 p-3 dashboard-card rounded">
                            <strong class="text-dark">#CryptoNews</strong><br>
                            <small class="dashboard-text-secondary">Latest updates from the crypto world</small><br>
                            <small class="text-dark">2.5k posts</small>
                        </div>
                        <div class="mb-2 p-3 dashboard-card rounded">
                            <strong class="text-dark">#DeFi</strong><br>
                            <small class="dashboard-text-secondary">Decentralized Finance discussions</small><br>
                            <small class="text-dark">1.8k posts</small>
                        </div>
                        <div class="p-3 dashboard-card rounded">
                            <strong class="text-dark">#NFT</strong><br>
                            <small class="dashboard-text-secondary">Non-Fungible Tokens community</small><br>
                            <small class="text-dark">3.2k posts</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Announcements -->
            <div class="col-lg-6">
                <div class="dashboard-card p-4 rounded">
                    <h5 class="text-dark"><i class="fas fa-bullhorn me-2"></i>Announcements</h5>
                    <div class="mt-3">
                        <div class="mb-2 p-3 dashboard-card rounded">
                            <strong class="text-dark">System Maintenance</strong><br>
                            <small class="dashboard-text-secondary">Scheduled maintenance on March 15th, 2024</small><br>
                            <small class="text-dark">2 hours ago</small>
                        </div>
                        <div class="mb-2 p-3 dashboard-card rounded">
                            <strong class="text-dark">New Features Available</strong><br>
                            <small class="dashboard-text-secondary">Check out our latest trading features</small><br>
                            <small class="text-dark">1 day ago</small>
                        </div>
                        <div class="p-3 dashboard-card rounded">
                            <strong class="text-dark">Security Update</strong><br>
                            <small class="dashboard-text-secondary">Enhanced security measures implemented</small><br>
                            <small class="text-dark">3 days ago</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transactions -->
            <div class="col-lg-6">
                <div class="dashboard-card p-4 rounded">
                    <h5 class="text-dark"><i class="fas fa-history me-2"></i>Recent Transactions</h5>
                    <div class="mt-3">
                        <div class="mb-2 p-3 dashboard-card rounded d-flex justify-content-between">
                            <div>
                                <strong class="text-dark">BTC Purchase</strong><br>
                                <small class="dashboard-text-secondary">0.001 BTC</small>
                            </div>
                            <div class="text-end">
                                <strong class="text-dark">$43.25</strong><br>
                                <span class="badge dashboard-success">Completed</span>
                            </div>
                        </div>
                        <div class="mb-2 p-3 dashboard-card rounded d-flex justify-content-between">
                            <div>
                                <strong class="text-dark">ETH Transfer</strong><br>
                                <small class="dashboard-text-secondary">0.05 ETH</small>
                            </div>
                            <div class="text-end">
                                <strong class="text-dark">$134.02</strong><br>
                                <span class="badge dashboard-warning text-dark">Pending</span>
                            </div>
                        </div>
                        <div class="p-3 dashboard-card rounded d-flex justify-content-between">
                            <div>
                                <strong class="text-dark">USDT Withdrawal</strong><br>
                                <small class="dashboard-text-secondary">100 USDT</small>
                            </div>
                            <div class="text-end">
                                <strong class="text-dark">$100.00</strong><br>
                                <span class="badge dashboard-success">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Square -->
            <div class="col-12">
                <div class="dashboard-card p-4 rounded">
                    <h5 class="text-dark"><i class="fas fa-square me-2"></i>Square</h5>
                    <div class="row mt-3">
                        <div class="col-lg-8">
                            <div class="mb-3 dashboard-card p-3 rounded">
                                <strong class="text-dark">Bitcoin Reaches New Heights</strong><br>
                                <small class="dashboard-text-secondary">Bitcoin has reached a new all-time high...</small><br>
                                <small class="text-dark">2 hours ago</small>
                            </div>
                            <div class="mb-3 dashboard-card p-3 rounded">
                                <strong class="text-dark">Ethereum 2.0 Update</strong><br>
                                <small class="dashboard-text-secondary">Major updates coming to Ethereum...</small><br>
                                <small class="text-dark">5 hours ago</small>
                            </div>
                            <div class="dashboard-card p-3 rounded">
                                <strong class="text-dark">DeFi Protocol Launch</strong><br>
                                <small class="dashboard-text-secondary">New decentralized finance protocol launches...</small><br>
                                <small class="text-dark">1 day ago</small>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-2 dashboard-card p-3 rounded">
                                <strong class="text-dark">#CryptoEducation</strong><br>
                                <small class="dashboard-text-secondary">Learn about blockchain technology</small><br>
                                <small class="text-dark">4.2k posts</small>
                            </div>
                            <div class="mb-2 dashboard-card p-3 rounded">
                                <strong class="text-dark">#TradingTips</strong><br>
                                <small class="dashboard-text-secondary">Share your trading strategies</small><br>
                                <small class="text-dark">2.1k posts</small>
                            </div>
                            <div class="dashboard-card p-3 rounded">
                                <strong class="text-dark">#CryptoArt</strong><br>
                                <small class="dashboard-text-secondary">Digital art and NFTs</small><br>
                                <small class="text-dark">1.9k posts</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection
