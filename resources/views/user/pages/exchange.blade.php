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
@endsection