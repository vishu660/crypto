@extends('user.main')

@section('content')
<div class="container py-5" style="min-height:80vh;">
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';font-size:1.1rem;">
            <ol class="breadcrumb bg-transparent p-0 mb-2">
                <li class="breadcrumb-item text-success fw-bold">Dashboard</li>
                <li class="breadcrumb-item text-info fw-bold">Payout</li>
                <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">Withdraw Now</li>
            </ol>
        </nav>
        <p class="fw-bold mb-4" style="color:#222;letter-spacing:1px;font-size:2.2rem;">Withdraw Now</p>
    </div>
    <div class="offset-md-1">
        <div class="withdraw-card" style="width:100%; max-width:700px;">
            <form action="#" method="POST" autocomplete="off">
                @csrf
                <div class="form-group mb-4">
                    <label class="fw-bold" style="font-size:1.15rem;">Amount<span class="text-danger">*</span></label>
                    <input type="number" name="amount" class="form-control" style="font-size:1.15rem; height:3.2rem;" placeholder="Enter Withdraw Amount" required>
                </div>
                <div class="form-group mb-4">
                    <label class="fw-bold" style="font-size:1.15rem;">Wallet<span class="text-danger">*</span></label>
                    <input type="text" name="wallet" class="form-control" style="font-size:1.15rem; height:3.2rem;" value="Earning Wallet" readonly>
                </div>
                <div class="form-group mb-4">
                    <label class="fw-bold" style="font-size:1.15rem;">Remark</label>
                    <textarea name="remark" class="form-control" style="font-size:1.15rem; min-height:3.2rem;" placeholder="Enter Remark"></textarea>
                </div>
                <div class="form-group mb-4">
                    <label class="fw-bold" style="font-size:1.15rem;">Transaction Password<span class="text-danger">*</span></label>
                    <input type="password" name="transaction_password" class="form-control" style="font-size:1.15rem; height:3.2rem;" placeholder="Transaction Password" required>
                </div>
                <button type="submit" class="btn btn-gradient w-100 fw-bold" style="font-size:1.3rem; padding:1rem 0;">Proceed</button>
            </form>
        </div>
    </div>
</div>
<style>
body {
    background: #f7f8fa;
    color: #222;
}
.gradient-purple {
    background: linear-gradient(135deg, #8e8dfa 0%, #a084ee 100%);
    border-radius: 18px;
    padding: 1.5rem 2rem;
    box-shadow: 0 2px 16px #a084ee33;
}
.gradient-green {
    background: linear-gradient(135deg, #38ef7d 0%, #11998e 100%);
    border-radius: 18px;
    padding: 1.5rem 2rem;
    box-shadow: 0 2px 16px #38ef7d33;
}
.withdraw-card {
    background: #fff;
    border-radius: 24px;
    box-shadow: 0 8px 48px #a084ee33, 0 2px 24px #38ef7d22;
    padding: 3.5rem 2.5rem 2.5rem 2.5rem;
    border: 1.5px solid #f0f0f0;
    position: relative;
    margin-bottom: 40px;
    width: 100%;
    max-width: 700px;
}
.form-label, label {
    color: #222;
    font-weight: 500;
    margin-bottom: 0.4rem;
}
.form-control {
    background: #f7f8fa;
    color: #222;
    border: 1.5px solid #a084ee;
    border-radius: 12px;
    font-size: 1.15rem;
    padding: 1rem 1.2rem;
    transition: border-color 0.2s, box-shadow 0.2s;
    box-shadow: none;
}
.form-control:focus {
    border-color: #38ef7d;
    box-shadow: 0 0 0 2px #38ef7d44;
    background: #fff;
    color: #222;
}
.btn-gradient {
    background: linear-gradient(90deg, #8e8dfa 0%, #38ef7d 100%);
    color: #fff;
    border: none;
    font-size: 1.3rem;
    border-radius: 12px;
    padding: 1rem 0;
    margin-top: 0.5rem;
    letter-spacing: 1px;
    transition: background 0.2s, color 0.2s;
}
.btn-gradient:hover {
    background: linear-gradient(90deg, #38ef7d 0%, #8e8dfa 100%);
    color: #fff;
}
.breadcrumb {
    background: transparent;
}
@media (max-width: 768px) {
    .withdraw-card {
        padding: 2rem 0.7rem 1.5rem 0.7rem;
        max-width: 98vw;
    }
    .fw-bold.mb-4 {
        font-size: 1.3rem !important;
    }
}
</style>
@endsection 