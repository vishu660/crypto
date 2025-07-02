@extends('user.main')
@section('content')
        <!-- Main Body-->
        <div class="d2c_main p-4">

            <!-- Title -->
            <div class="align-items-center mb-4">
                <div class="col-2 d-block d-lg-none">
                    <!-- Offcanvas Toggler -->
                    <button class="btn btn-primary px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar" aria-controls="d2c_sidebar">
                        <i class="fa fa-bars p-0"></i>
                    </button>
                    <!-- End:Offcanvas Toggler -->
                </div>
                <div class="col">
                    <p class="mb-0">Welcome Back</p>
                    <h4 class="text-capitalize">Activity</h4>
                </div>
            </div>
            <!-- End:Title -->

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <ul class="nav nav-pills d2c_activity_tab mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-all-activity-tab" data-bs-toggle="pill" data-bs-target="#pills-all-activity" type="button" role="tab" aria-controls="pills-all-activity" aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-withdraw-tab" data-bs-toggle="pill" data-bs-target="#pills-withdraw" type="button" role="tab" aria-controls="pills-withdraw" aria-selected="false">Withdraws</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-deposit-tab" data-bs-toggle="pill" data-bs-target="#pills-deposit" type="button" role="tab" aria-controls="pills-deposit" aria-selected="false">Deposit</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content d2c_activity_table_content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-all-activity" role="tabpanel" aria-labelledby="pills-all-activity-tab">                           
                            <div class="table-responsive">
                                <table class="table align-middle" id="d2c_all_activity_table">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 100px">Asset</th>
                                            <th style="min-width: 50px">Type</th>
                                            <th style="min-width: 150px">Amount</th>
                                            <th style="min-width: 150px">Transaction Id</th>
                                            <th style="min-width: 210px">Date</th>
                                            <th style="min-width: 120px">Available</th>
                                            <th style="min-width: 100px">Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-btc"></i>
                                                    </div>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465125</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>112.30 BTC</td>
                                            <td>0.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-primary text-primary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-ethereum"></i>
                                                    </div>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.009231 ETH</span></td>
                                            <td>124153465126</td>
                                            <td>2-4-2023 06:22am</td>
                                            <td>923.81 ETH</td>
                                            <td>0.4%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000232 MNR</span></td>
                                            <td>124153465127</td>
                                            <td>2-5-2023 03:26am</td>
                                            <td>231.45 MNR</td>
                                            <td>0.05%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-info text-info bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    Dollar
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">4345.432 Dollar</span></td>
                                            <td>124153465128</td>
                                            <td>2-4-2023 05:12am</td>
                                            <td>5,553.00 DLR</td>
                                            <td>0.23%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-success text-success bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465129</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465130</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>1.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000342 MNR</span></td>
                                            <td>124153465124</td>
                                            <td>2-7-2023 03:11am</td>
                                            <td>786.45 MNR</td>
                                            <td>0.12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-btc"></i>
                                                    </div>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465125</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>112.30 BTC</td>
                                            <td>0.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-primary text-primary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-ethereum"></i>
                                                    </div>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.009231 ETH</span></td>
                                            <td>124153465126</td>
                                            <td>2-4-2023 06:22am</td>
                                            <td>923.81 ETH</td>
                                            <td>0.4%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000232 MNR</span></td>
                                            <td>124153465127</td>
                                            <td>2-5-2023 03:26am</td>
                                            <td>231.45 MNR</td>
                                            <td>0.05%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-info text-info bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    Dollar
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">4345.432 Dollar</span></td>
                                            <td>124153465128</td>
                                            <td>2-4-2023 05:12am</td>
                                            <td>5,553.00 DLR</td>
                                            <td>0.23%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-success text-success bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465129</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-secondary text-secondary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.000242 BTC</span></td>
                                            <td>124153465136</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.04%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-btc"></i>
                                                    </div>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465125</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>112.30 BTC</td>
                                            <td>0.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-primary text-primary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-ethereum"></i>
                                                    </div>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.009231 ETH</span></td>
                                            <td>124153465126</td>
                                            <td>2-4-2023 06:22am</td>
                                            <td>923.81 ETH</td>
                                            <td>0.4%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000232 MNR</span></td>
                                            <td>124153465127</td>
                                            <td>2-5-2023 03:26am</td>
                                            <td>231.45 MNR</td>
                                            <td>0.05%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-info text-info bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    Dollar
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">4345.432 Dollar</span></td>
                                            <td>124153465128</td>
                                            <td>2-4-2023 05:12am</td>
                                            <td>5,553.00 DLR</td>
                                            <td>0.23%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-success text-success bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465129</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.12%</td>
                                        </tr>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-withdraw" role="tabpanel" aria-labelledby="pills-withdraw-tab">
                            <div class="table-responsive">
                                <table class="table align-middle" id="d2c_withdraw_activity_table">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 100px">Asset</th>
                                            <th style="min-width: 50px">Type</th>
                                            <th style="min-width: 150px">Amount</th>
                                            <th style="min-width: 150px">Transaction Id</th>
                                            <th style="min-width: 210px">Date</th>
                                            <th style="min-width: 120px">Available</th>
                                            <th style="min-width: 100px">Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-btc"></i>
                                                    </div>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465125</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>112.30 BTC</td>
                                            <td>0.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-primary text-primary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-ethereum"></i>
                                                    </div>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.009231 ETH</span></td>
                                            <td>124153465126</td>
                                            <td>2-4-2023 06:22am</td>
                                            <td>923.81 ETH</td>
                                            <td>0.4%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000232 MNR</span></td>
                                            <td>124153465127</td>
                                            <td>2-5-2023 03:26am</td>
                                            <td>231.45 MNR</td>
                                            <td>0.05%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-info text-info bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    Dollar
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">4345.432 Dollar</span></td>
                                            <td>124153465128</td>
                                            <td>2-4-2023 05:12am</td>
                                            <td>5,553.00 DLR</td>
                                            <td>0.23%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-success text-success bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465129</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465130</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>1.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000342 MNR</span></td>
                                            <td>124153465124</td>
                                            <td>2-7-2023 03:11am</td>
                                            <td>786.45 MNR</td>
                                            <td>0.12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-btc"></i>
                                                    </div>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465125</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>112.30 BTC</td>
                                            <td>0.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-primary text-primary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-ethereum"></i>
                                                    </div>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.009231 ETH</span></td>
                                            <td>124153465126</td>
                                            <td>2-4-2023 06:22am</td>
                                            <td>923.81 ETH</td>
                                            <td>0.4%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000232 MNR</span></td>
                                            <td>124153465127</td>
                                            <td>2-5-2023 03:26am</td>
                                            <td>231.45 MNR</td>
                                            <td>0.05%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-info text-info bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    Dollar
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">4345.432 Dollar</span></td>
                                            <td>124153465128</td>
                                            <td>2-4-2023 05:12am</td>
                                            <td>5,553.00 DLR</td>
                                            <td>0.23%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-success text-success bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465129</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-secondary text-secondary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.000242 BTC</span></td>
                                            <td>124153465136</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.04%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-btc"></i>
                                                    </div>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465125</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>112.30 BTC</td>
                                            <td>0.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-primary text-primary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-ethereum"></i>
                                                    </div>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.009231 ETH</span></td>
                                            <td>124153465126</td>
                                            <td>2-4-2023 06:22am</td>
                                            <td>923.81 ETH</td>
                                            <td>0.4%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000232 MNR</span></td>
                                            <td>124153465127</td>
                                            <td>2-5-2023 03:26am</td>
                                            <td>231.45 MNR</td>
                                            <td>0.05%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-info text-info bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    Dollar
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">4345.432 Dollar</span></td>
                                            <td>124153465128</td>
                                            <td>2-4-2023 05:12am</td>
                                            <td>5,553.00 DLR</td>
                                            <td>0.23%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-success text-success bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465129</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.12%</td>
                                        </tr>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-deposit" role="tabpanel" aria-labelledby="pills-deposit-tab">
                            <div class="table-responsive">
                                <table class="table align-middle" id="d2c_deposit_activity_table">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 100px">Asset</th>
                                            <th style="min-width: 50px">Type</th>
                                            <th style="min-width: 150px">Amount</th>
                                            <th style="min-width: 150px">Transaction Id</th>
                                            <th style="min-width: 210px">Date</th>
                                            <th style="min-width: 120px">Available</th>
                                            <th style="min-width: 100px">Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-btc"></i>
                                                    </div>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465125</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>112.30 BTC</td>
                                            <td>0.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-primary text-primary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-ethereum"></i>
                                                    </div>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.009231 ETH</span></td>
                                            <td>124153465126</td>
                                            <td>2-4-2023 06:22am</td>
                                            <td>923.81 ETH</td>
                                            <td>0.4%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000232 MNR</span></td>
                                            <td>124153465127</td>
                                            <td>2-5-2023 03:26am</td>
                                            <td>231.45 MNR</td>
                                            <td>0.05%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-info text-info bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    Dollar
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">4345.432 Dollar</span></td>
                                            <td>124153465128</td>
                                            <td>2-4-2023 05:12am</td>
                                            <td>5,553.00 DLR</td>
                                            <td>0.23%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-success text-success bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465129</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465130</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>1.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000342 MNR</span></td>
                                            <td>124153465124</td>
                                            <td>2-7-2023 03:11am</td>
                                            <td>786.45 MNR</td>
                                            <td>0.12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-btc"></i>
                                                    </div>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465125</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>112.30 BTC</td>
                                            <td>0.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-primary text-primary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-ethereum"></i>
                                                    </div>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.009231 ETH</span></td>
                                            <td>124153465126</td>
                                            <td>2-4-2023 06:22am</td>
                                            <td>923.81 ETH</td>
                                            <td>0.4%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000232 MNR</span></td>
                                            <td>124153465127</td>
                                            <td>2-5-2023 03:26am</td>
                                            <td>231.45 MNR</td>
                                            <td>0.05%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-info text-info bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    Dollar
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">4345.432 Dollar</span></td>
                                            <td>124153465128</td>
                                            <td>2-4-2023 05:12am</td>
                                            <td>5,553.00 DLR</td>
                                            <td>0.23%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-success text-success bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465129</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-secondary text-secondary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.000242 BTC</span></td>
                                            <td>124153465136</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.04%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-btc"></i>
                                                    </div>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465125</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>112.30 BTC</td>
                                            <td>0.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-primary text-primary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-ethereum"></i>
                                                    </div>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.009231 ETH</span></td>
                                            <td>124153465126</td>
                                            <td>2-4-2023 06:22am</td>
                                            <td>923.81 ETH</td>
                                            <td>0.4%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000232 MNR</span></td>
                                            <td>124153465127</td>
                                            <td>2-5-2023 03:26am</td>
                                            <td>231.45 MNR</td>
                                            <td>0.05%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-info text-info bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    Dollar
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">4345.432 Dollar</span></td>
                                            <td>124153465128</td>
                                            <td>2-4-2023 05:12am</td>
                                            <td>5,553.00 DLR</td>
                                            <td>0.23%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-success text-success bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465129</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.12%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-secondary text-secondary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.000242 BTC</span></td>
                                            <td>124153465136</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.04%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-danger text-danger bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-btc"></i>
                                                    </div>
                                                    Bitcoin
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465125</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>112.30 BTC</td>
                                            <td>0.02%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-primary text-primary bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-ethereum"></i>
                                                    </div>
                                                    Ethereum
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">0.009231 ETH</span></td>
                                            <td>124153465126</td>
                                            <td>2-4-2023 06:22am</td>
                                            <td>923.81 ETH</td>
                                            <td>0.4%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-warning text-warning bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fab fa-monero"></i>
                                                    </div>
                                                    Monero
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">0.000232 MNR</span></td>
                                            <td>124153465127</td>
                                            <td>2-5-2023 03:26am</td>
                                            <td>231.45 MNR</td>
                                            <td>0.05%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-info text-info bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </div>
                                                    Dollar
                                                </div>
                                            </td>
                                            <td><span class="text-success">Buy</span></td>
                                            <td><span class="text-success">4345.432 Dollar</span></td>
                                            <td>124153465128</td>
                                            <td>2-4-2023 05:12am</td>
                                            <td>5,553.00 DLR</td>
                                            <td>0.23%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d2c_coin_icon_wrapper px-2 py-1 bg-success text-success bg-opacity-10 me-2 d-flex align-items-center justify-content-center rounded">
                                                        <i class="fas fa-pound-sign"></i>
                                                    </div>
                                                    Pound
                                                </div>
                                            </td>
                                            <td><span class="text-danger">Sold</span></td>
                                            <td><span class="text-danger">-0.000242 BTC</span></td>
                                            <td>124153465129</td>
                                            <td>2-4-2023 06:24am</td>
                                            <td>$5,553.00</td>
                                            <td>0.12%</td>
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