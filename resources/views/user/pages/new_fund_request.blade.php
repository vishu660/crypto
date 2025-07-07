@extends('user.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar already included in user.main -->

        <!-- Fund Request Form in center (not full right) -->
        <div class="col-md-9 d-flex justify-content-center align-items-start mt-5">
            <div class="card shadow-lg p-4" style="max-width:480px; width:100%; border-radius:18px; background:#fff;">
                <h2 class="fw-bold mb-4 text-center" style="font-size:2.2rem;">New Fund Request</h2>

                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form method="POST" action="{{ route('user.fund_request.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Member ID*</label>
                        <input type="text" name="referral_id" class="form-control custom-input" value="{{ $user->referral_id }}" readonly>
                    </div>

                    <div class="mb-3">
                        <span class="text-success d-block fw-semibold">Deposit Wallet: ₹{{ number_format($wallet_balance ?? 0, 2) }}</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Amount*</label>
                        <input type="number" class="form-control custom-input" name="amount" placeholder="Enter Withdraw Amount" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Transaction Hash Key*</label>
                        <input type="text" class="form-control custom-input" name="hash_key" placeholder="Transaction Hash Key" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Remark*</label>
                        <textarea class="form-control custom-input" name="remark" placeholder="Optional remark..." required></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-gradient">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.custom-input {
    border: 2px solid #a259f7;
    border-radius: 16px;
    background: #f1fdf1;
    font-size: 1.08rem;
    padding: 0.9rem 1.1rem;
}
.custom-input:focus {
    border-color: #7c3aed;
    box-shadow: 0 0 0 2px #e0d7fa;
    background: #f6f6ff;
}
.btn-gradient {
    background: linear-gradient(90deg, #6a82fb 0%, #fc5c7d 100%);
    color: #fff;
    border: none;
    border-radius: 10px;
    padding: 0.7rem;
    font-weight: 600;
    transition: background 0.3s ease-in-out;
}
.btn-gradient:hover {
    background: linear-gradient(90deg, #fc5c7d 0%, #6a82fb 100%);
    color: #fff;
}
</style>
@endsection
