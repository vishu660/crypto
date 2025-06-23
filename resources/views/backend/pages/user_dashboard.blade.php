@extends('backend.layouts.user')
@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <!-- Crypto Rates & Conversion -->
        <div class="col-lg-8 mb-3">
            <div class="d-flex flex-wrap gap-3 align-items-stretch">
                <div style="min-width:320px;flex:1;">
                    <div class="card p-0" style="background:#fff1; border:1px solid #00fff7;">
                        <div class="d-flex flex-column flex-md-row">
                            <div class="p-3 flex-fill">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="https://cryptologos.cc/logos/bitcoin-btc-logo.png" alt="BTC" style="height:24px; margin-right:8px;"> <b>BTC</b>
                                    <span class="ms-auto text-danger fw-bold">$99,611.00 <small>(-3.38%)</small></span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <img src="https://cryptologos.cc/logos/ethereum-eth-logo.png" alt="ETH" style="height:24px; margin-right:8px;"> <b>ETH</b>
                                    <span class="ms-auto text-danger fw-bold">$2,189.27 <small>(-8.78%)</small></span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <img src="https://cryptologos.cc/logos/xrp-xrp-logo.png" alt="XRP" style="height:24px; margin-right:8px;"> <b>XRP</b>
                                    <span class="ms-auto text-danger fw-bold">$1.98 <small>(-5.65%)</small></span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <img src="https://cryptologos.cc/logos/binance-usd-busd-logo.png" alt="BUSD" style="height:24px; margin-right:8px;"> <b>BUSD</b>
                                    <span class="ms-auto text-success fw-bold">$0.996880 <small>(0.73%)</small></span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="https://cryptologos.cc/logos/tether-usdt-logo.png" alt="USDT" style="height:24px; margin-right:8px;"> <b>USDT</b>
                                    <span class="ms-auto text-light fw-bold">$1.00 <small>(-0.00%)</small></span>
                                </div>
                                <div class="mt-2">
                                    <select class="form-select form-select-sm w-auto d-inline-block" style="background:#101820; color:#00fff7; border:1px solid #00fff7;">
                                        <option>USD</option>
                                    </select>
                                    <span class="ms-2" style="color:#00ffb7;">Powered by <b>CoinGecko</b></span>
                                </div>
                            </div>
                            <div class="p-3 flex-fill" style="min-width:260px;">
                                <div class="mb-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <img src="https://cryptologos.cc/logos/bitcoin-btc-logo.png" alt="BTC" style="height:24px; margin-right:8px;"> <b>BTC</b>
                                        <input type="text" class="form-control ms-2" value="1" style="max-width:80px; background:#e6e6e6;">
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <b>USD</b>
                                        <input type="text" class="form-control ms-2" value="99610" style="max-width:120px; background:#e6e6e6;">
                                    </div>
                                </div>
                                <div class="text-end">
                                    <span style="color:#00ffb7; font-size:13px;">Powered by <b>CoinGecko</b></span>
                                    <a href="#" style="color:#00ffb7; font-size:13px; margin-left:8px;">View Bitcoin Price Chart</a>
                                </div>
                            </div>
                            <div class="p-3 flex-fill" style="min-width:220px;">
                                <div class="card" style="background:#14343c; border:1px solid #00fff7;">
                                    <div class="text-center mb-2" style="color:#00aaff; font-weight:700;">Scan & Pay</div>
                                    <div class="d-flex justify-content-center mb-2">
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?data=TL1FaEjsfyjk3pzj4hmHqYw&size=120x120" alt="QR" style="height:120px;">
                                    </div>
                                    <div class="text-center" style="color:#b2f7ef; font-size:14px;">Payable Wallet Address:</div>
                                    <div class="text-center mb-2">
                                        <input type="text" class="form-control text-center" value="TL1FaEjsfyjk3pzj4hmHqYw" readonly style="background:#14343c; color:#fff; border:1px solid #00fff7;">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-success btn-sm" style="background:#00fff7; color:#181f2a; border:none;">Copy Address</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- User Info, Wallet Summary, Referral Link -->
    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="card h-100" style="background:#181f2a; border:1px solid #00fff7;">
                <div class="text-center" style="color:#00aaff; font-weight:700;">WELCOME</div>
                <div class="text-center" style="font-size:1.5rem; color:#00fff7; font-weight:700;">VISHAL SAIN</div>
                <div class="text-center mb-2" style="color:#b2f7ef;">PNZ719166<br>Date: 23-06-2025<br>Account : <span style="color:#ff6666;">Inactive</span></div>
                <div class="d-flex justify-content-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" style="height:64px; width:64px; border-radius:50%; object-fit:cover;">
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100" style="background:#181f2a; border:1px solid #00fff7;">
                <div class="fw-bold" style="color:#fff;">WALLET SUMMARY</div>
                <div class="d-flex justify-content-between" style="color:#00fff7; font-size:14px;">
                    <span>Credit <i class="bi bi-arrow-up"></i></span>
                    <span>Debit <i class="bi bi-arrow-down"></i></span>
                    <span>Balance</span>
                </div>
                <div class="d-flex justify-content-between mb-2" style="color:#b2f7ef;">
                    <span>Earning Wallet</span>
                    <span>0</span>
                    <span>0</span>
                    <span>0</span>
                </div>
                <div class="d-flex justify-content-between" style="color:#b2f7ef;">
                    <span>Topup Wallet</span>
                    <span>0</span>
                    <span>0</span>
                    <span>0</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100" style="background:#181f2a; border:1px solid #00fff7;">
                <div class="fw-bold" style="color:#00aaff;">Share Referral Link</div>
                <div class="mb-2">
                    <input type="text" class="form-control text-center" value="https://codechroma.com/newsingle/xyz" readonly style="background:#14343c; color:#fff; border:1px solid #00fff7;">
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-warning btn-sm" style="background:#ff9900; color:#fff; border:none;">Copy Link</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard Cards -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background:#181f2a; border:1px solid #00fff7;">
                <div style="color:#fff;">Total Earnings</div>
                <div class="d-flex align-items-center" style="font-size:2rem; color:#00fff7;"><i class="bi bi-currency-dollar"></i> 0</div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background:#181f2a; border:1px solid #00fff7;">
                <div style="color:#fff;">My Team</div>
                <div class="d-flex align-items-center" style="font-size:2rem; color:#00fff7;"><i class="bi bi-people"></i> 0</div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background:#181f2a; border:1px solid #00fff7;">
                <div style="color:#fff;">My Referrals</div>
                <div class="d-flex align-items-center" style="font-size:2rem; color:#00fff7;"><i class="bi bi-person-plus"></i> 0</div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background:#181f2a; border:1px solid #00fff7;">
                <div style="color:#fff;">Package</div>
                <div class="d-flex align-items-center" style="font-size:1.2rem; color:#fff;">Inactive <i class="bi bi-cash-coin ms-2"></i></div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background:#181f2a; border:1px solid #00fff7;">
                <div style="color:#fff;">ROI Income</div>
                <div class="d-flex align-items-center" style="font-size:2rem; color:#00fff7;"><i class="bi bi-cash"></i> 0</div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background:#181f2a; border:1px solid #00fff7;">
                <div style="color:#fff;">Passive Income</div>
                <div class="d-flex align-items-center" style="font-size:2rem; color:#00fff7;"><i class="bi bi-cash"></i> 0</div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background:#181f2a; border:1px solid #00fff7;">
                <div style="color:#fff;">Direct Income</div>
                <div class="d-flex align-items-center" style="font-size:2rem; color:#00fff7;"><i class="bi bi-cash"></i> 0</div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card h-100" style="background:#181f2a; border:1px solid #00fff7;">
                <div style="color:#fff;">Royalty</div>
                <div class="d-flex align-items-center" style="font-size:2rem; color:#00fff7;"><i class="bi bi-cash"></i> 0</div>
            </div>
        </div>
    </div>
    <!-- Levels Grid -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="fw-bold mb-2" style="color:#b2f7ef; font-size:1.2rem;">LEVELS</div>
            <div class="row g-3">
                @for ($i = 1; $i <= 15; $i++)
                <div class="col-md-4 col-lg-3">
                    <div class="card h-100" style="background:#1de9b6; color:#181f2a; border:1px solid #00fff7;">
                        <div class="fw-bold mb-1">Level {{ $i }}</div>
                        <div style="font-size:1.1rem;"><i class="bi bi-people"></i> Members: 0</div>
                        <div style="font-size:1.1rem;"><i class="bi bi-currency-dollar"></i> Earnings: 0</div>
                    </div>
                </div>
                @endfor
            </div>  
        </div>
    </div>
</div>
@endsection