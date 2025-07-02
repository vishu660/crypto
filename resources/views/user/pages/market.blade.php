@extends('user.main')
@section('content')
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
@endsection