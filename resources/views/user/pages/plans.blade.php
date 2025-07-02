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
@endsection