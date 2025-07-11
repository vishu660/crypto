@extends('user.main')

@section('content')

<style>
    input, select {
    background-color: #eaffea;
    border: none;
    font-weight: 500;
}
</style>
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
            <h4 class="text-capitalize fw-bold">DIGITAL LEVEL MARKETING</h4>
        </div>
    </div>
    <!-- End:Title -->

    <div class="row">
        <div class="col-md-6 col-xxl-4 d2c_balance_card">
            <!-- card item 1 -->
            <div class="card d2c_wallet_card mb-4" style="background: linear-gradient(180deg, #6271ebe0 0%, #fc76b7 373.31%), url('./assets/images/triangle_bg.png');background-repeat: no-repeat;background-size: cover;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
                                <p class="mb-1 text-white">Balance</p>
                                <h5 class="fw-semibold">$  {{ number_format($usdtBalance, 2) }}</h5>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="bg-white d-flex align-items-center justify-content-center rounded ms-auto" style="width: 40px;height: 40px;">
                                <img src="{{ asset('images/usdt.png') }}" alt="USDT" style="width: 28px; height: 28px;">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <small>Card Holder</small>
                            <h6>{{ $user->full_name }}</h6>
                        </div>
                        <div class="col-5 col-xxl-4">
                            <small>Valid Thru</small>
                            <h6>08/2023</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-4 d2c_balance_card">
            <!-- card item 2 -->
            <div class="card d2c_wallet_card mb-4" style="background: linear-gradient(180deg, #23cb62e0 0%, #6271ebd6 270.67%), url(./assets/images/triangle_bg.png);background-repeat: no-repeat;background-size: cover;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
                                <p class="mb-1 text-white">Balance</p>
                                <h5 class="fw-semibold">${{ number_format($inrBalance, 2) }}</h5>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="bg-white d-flex align-items-center justify-content-center rounded ms-auto" style="width: 40px;height: 40px;">
                                <i class="fas fa-rupee-sign" style="font-size: 28px; color: #28a745;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <small>Card Holder</small>
                            <h6>Stuart Alan</h6>
                        </div>
                        <div class="col-5 col-xxl-4">
                            <small>Valid Thru</small>
                            <h6>03/2023</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4 d2c_balance_card d2c_balance_card_3">
            <!-- card item 3 -->
            <div class="card d2c_wallet_card mb-4" style="background: linear-gradient(180deg, #fc76b7eb 0%, #6271ebd1 277.28%), url(./assets/images/triangle_bg.png);background-repeat: no-repeat;background-size: cover; min-height: 240px;">
                <div class="card-body d-flex flex-column align-items-center justify-content-center" style="height: 100%;">
                    <div class="mb-2 d-flex flex-column align-items-center">
                        <div class="bg-white text-danger d-flex align-items-center justify-content-center rounded-circle mb-2" style="width: 56px; height: 56px; box-shadow: 0 2px 8px rgba(0,0,0,0.07);">
                            <i class="fa-solid fa-hand-holding-heart" style="font-size: 2rem;"></i>
                        </div>
                        <h4 class="fw-bold text-white mb-3" style="letter-spacing: 1px;">Plans</h4>
                    </div>
                    <a href="{{ route('user.pages.plans') }}" class="btn btn-primary d-flex align-items-center justify-content-center" style="font-size: 1.2rem; font-weight: 600; padding: 16px 36px; border-radius: 12px; min-width: 220px;">
                        <i class="bi bi-eye me-2" style="font-size: 1.4rem;"></i> View All Plans
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- small card item -->
        <div class="col-md-6 col-xxl-3 mb-4 d2c_balance_card">
            <div class="card bg-success bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                        <div class="me-3">
                            <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                <i class="fab fa-btc"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-uppercase fw-semibold mb-0">BTC-USDT</h6>
                            <small class="mb-0 text-muted">Bitcoin USDT</small>
                        </div>
                    </div>
                    @php
                    $coin = 'bitcoin'; // 'ethereum', 'binancecoin', 'monero' के लिए बदलिए
                    $live = $livePrice[$coin] ?? null;
                
                    $price = isset($live['price']) ? number_format($live['price'], 2) : '0.00';
                    $change = isset($live['change']) ? number_format($live['change'], 2) : '0.00';
                    $trend = $live['trend'] ?? 'up';
                    $isUp = $trend === 'up';
                @endphp
                
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <button class="btn px-3 py-1 me-2 
                            {{ $isUp ? 'bg-success bg-opacity-25 text-success' : 'bg-danger bg-opacity-25 text-danger' }} 
                            rounded-pill">
                            {{ $isUp ? '+' : '' }}{{ $change }}%
                        </button>
                        <span class="{{ $isUp ? 'text-success' : 'text-danger' }} fs-4" style="transform: rotate({{ $isUp ? '45deg' : '-45deg' }});">
                            <i class="fas fa-arrow-alt-circle-{{ $isUp ? 'up' : 'down' }}"></i>
                        </span>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <span class="text-muted fw-semibold">Price: ${{ $price }}</span> --}}
                    </div>
                </div>
                

                    <h4 class="mb-0 fw-semibold mt-2">${{ number_format($prices['bitcoin']['usdt'] ?? 0, 2) }}
                    </h4>
                  
                
                </div>
            </div>
        </div>

        <!-- small card item (2) -->
        <div class="col-md-6 col-xxl-3 mb-4 d2c_balance_card">
            <div class="card bg-success bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                        <div class="me-3">
                            <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                <i class="fab fa-bitcoin"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-uppercase fw-semibold mb-0">BNB-USDT</h6>
                            <small class="mb-0 text-muted">Binance USDT</small>
                        </div>
                    </div>
                    @php
                    $coin = 'binancecoin'; // 'ethereum', 'binancecoin', 'monero' के लिए बदलिए
                    $live = $livePrice[$coin] ?? null;
                
                    $price = isset($live['price']) ? number_format($live['price'], 2) : '0.00';
                    $change = isset($live['change']) ? number_format($live['change'], 2) : '0.00';
                    $trend = $live['trend'] ?? 'up';
                    $isUp = $trend === 'up';
                @endphp
                
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <button class="btn px-3 py-1 me-2 
                            {{ $isUp ? 'bg-success bg-opacity-25 text-success' : 'bg-danger bg-opacity-25 text-danger' }} 
                            rounded-pill">
                            {{ $isUp ? '+' : '' }}{{ $change }}%
                        </button>
                        <span class="{{ $isUp ? 'text-success' : 'text-danger' }} fs-4" style="transform: rotate({{ $isUp ? '45deg' : '-45deg' }});">
                            <i class="fas fa-arrow-alt-circle-{{ $isUp ? 'up' : 'down' }}"></i>
                        </span>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <span class="text-muted fw-semibold">Price: ${{ $price }}</span> --}}
                    </div>
                </div>
                

                    <h4 class="mb-0 fw-semibold mt-2">${{ number_format($prices['binancecoin']['usdt'], 2) }}</h4>
                    
                </div>
            </div>
        </div>
        <!-- small card item (3) -->
        <div class="col-md-6 col-xxl-3 mb-4 d2c_balance_card">
            <div class="card bg-danger bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                        <div class="me-3">
                            <div class="rounded bg-danger bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                <i class="fab fa-ethereum"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-uppercase fw-semibold mb-0">ETH-USDT</h6>
                            <small class="mb-0 text-muted">Ethereum USDT</small>
                        </div>
                    </div>
                    @php
                                $coin = 'ethereum'; // 'ethereum', 'binancecoin', 'monero' के लिए बदलिए
                                $live = $livePrice[$coin] ?? null;

                                $price = isset($live['price']) ? number_format($live['price'], 2) : '0.00';
                                $change = isset($live['change']) ? number_format($live['change'], 2) : '0.00';
                                $trend = $live['trend'] ?? 'up';
                                $isUp = $trend === 'up';
                            @endphp

                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <button class="btn px-3 py-1 me-2 
                                        {{ $isUp ? 'bg-success bg-opacity-25 text-success' : 'bg-danger bg-opacity-25 text-danger' }} 
                                        rounded-pill">
                                        {{ $isUp ? '+' : '' }}{{ $change }}%
                                    </button>
                                    <span class="{{ $isUp ? 'text-success' : 'text-danger' }} fs-4" style="transform: rotate({{ $isUp ? '45deg' : '-45deg' }});">
                                        <i class="fas fa-arrow-alt-circle-{{ $isUp ? 'up' : 'down' }}"></i>
                                    </span>
                                </div>
                                <div class="col-md-6 text-end">
                                    {{-- <span class="text-muted fw-semibold">Price: ${{ $price }}</span> --}}
                                </div>
                            </div>


                    <h4 class="mb-0 fw-semibold mt-2">${{ number_format($prices['ethereum']['usdt'], 2) }}</h4>
                    
                </div>
            </div>
        </div>
        <!-- small card item (4) -->
        <div class="col-md-6 col-xxl-3 mb-4 d2c_balance_card">
            <div class="card bg-success bg-opacity-10">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-5">
                        <div class="me-3">
                            <div class="rounded bg-success bg-opacity-25 d-flex align-items-center justify-content-center fs-5 text-secondary d2c_card_icon_wrapper">
                                <i class="fab fa-monero"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="text-uppercase fw-semibold mb-0">XMR-USDT</h6>
                            <small class="mb-0 text-muted">Monero USDT</small>
                        </div>
                    </div>
                    @php
                    $coin = 'monero'; // 'ethereum', 'binancecoin', 'monero' के लिए बदलिए
                    $live = $livePrice[$coin] ?? null;
                
                    $price = isset($live['price']) ? number_format($live['price'], 2) : '0.00';
                    $change = isset($live['change']) ? number_format($live['change'], 2) : '0.00';
                    $trend = $live['trend'] ?? 'up';
                    $isUp = $trend === 'up';
                @endphp
                
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <button class="btn px-3 py-1 me-2 
                            {{ $isUp ? 'bg-success bg-opacity-25 text-success' : 'bg-danger bg-opacity-25 text-danger' }} 
                            rounded-pill">
                            {{ $isUp ? '+' : '' }}{{ $change }}%
                        </button>
                        <span class="{{ $isUp ? 'text-success' : 'text-danger' }} fs-4" style="transform: rotate({{ $isUp ? '45deg' : '-45deg' }});">
                            <i class="fas fa-arrow-alt-circle-{{ $isUp ? 'up' : 'down' }}"></i>
                        </span>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <span class="text-muted fw-semibold">Price: ${{ $price }}</span> --}}
                    </div>
                </div>
                

                    <h4 class="mb-0 fw-semibold mt-2">${{ number_format($prices['monero']['usdt'], 2) }}</h4>
                    
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
                            @if(auth()->check())
                            <p class="mb-0 fw-semibold d2c_profile_name">{{ auth()->user()->full_name }}</p>
                        @endif
                                                </div>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('user.pages.profile') }}"><img class="rounded-circle" src="./assets/images/profile/profile-2.jpg" alt="Profile Image" style="height: 40px; width: 40px; object-fit: cover;"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="d2c_balance mb-2">
            <p class="mb-1">My Balance</p>
            <div class="row">
                <div class="col">
                    <h5 class="fw-semibold">${{ $totalUsdtBalance }}</h5>
                </div>
            </div>
        </div>


        <div class="card d2c_wallet_card mb-4" style="background: linear-gradient(180deg, #6271ebe0 0%, #fc76b7 373.31%), url('./assets/images/triangle_bg.png');">
            <div class="card-body">
                <!-- ✅ News Marquee -->
                <marquee style="color: #fff; font-weight: bold;">
                    @foreach($news as $item)
                        {{ $item->title }} &nbsp; :-- &nbsp;
                        {{ $item->content }} &nbsp; | &nbsp;
                    @endforeach
                </marquee>
            </div>
        </div>

        <div class="d2c_convert mb-4">
            <p class="fw-semibold">Quick Convert</p>
        
            <form method="POST" action="{{ route('user.convert') }}" class="form-validation" novalidate>
                @csrf
        
                <label for="conver_amount">Amount</label>
                <div class="input-group border-0 mb-3">
                    <input type="number" class="form-control border-0 bg-light" name="amount" id="conver_amount" placeholder="0.00" required step="0.01">
                    <select class="form-select border-0 bg-light pe-0" name="from_currency" id="inputGroupSelect01">
                        <option value="USDT" selected>USDT</option>
                        <option value="INR">INR</option>
                    </select>
                </div>
        
                <label for="convert_coin">Convert Coin</label>
                <div class="input-group border-0 mb-3">
                    <input type="number" class="form-control border-0 bg-light" id="convert_coin" placeholder="0.00" readonly>
                    <select class="form-select border-0 bg-light pe-0" id="inputGroupSelect02" name="to_currency">
                        <option value="INR">INR</option>
                        <option value="USDT">USDT</option>
                    </select>
                </div>
        
                <button type="submit" class="btn w-100 text-success bg-success bg-opacity-25">Convert</button>
            </form>
        
            @if(session('error'))
                <div class="alert alert-danger mt-2">{{ session('error') }}</div>
            @endif
        
            @if(session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif
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

@endsection

<script>
    let usdtRate = 83; // fallback
    async function fetchUSDTPrice() {
        try {
            const res = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=tether&vs_currencies=inr');
            const data = await res.json();
            usdtRate = data.tether.inr;
        } catch (e) {
            console.error("Failed to fetch USDT price, using fallback.");
        }
    }

    fetchUSDTPrice();

    document.addEventListener('input', function () {
        let amount = parseFloat(document.getElementById('conver_amount').value) || 0;
        let from = document.getElementById('inputGroupSelect01').value;
        let to = document.getElementById('inputGroupSelect02').value;

        if (from === to) {
            document.getElementById('convert_coin').value = amount;
        } else if (from === 'USDT' && to === 'INR') {
            document.getElementById('convert_coin').value = (amount * usdtRate).toFixed(2);
        } else if (from === 'INR' && to === 'USDT') {
            document.getElementById('convert_coin').value = (amount / usdtRate).toFixed(4);
        }
    });
</script>

