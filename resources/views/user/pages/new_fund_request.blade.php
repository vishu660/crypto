@extends('user.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar already included in user.main -->

        <!-- Fund Request Form in center (not full right) -->
        <div class="col-md-9 d-flex justify-content-center align-items-start mt-5">
            <div class="fund-request-form-wrapper">
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
                        <label class="form-label">Transaction Password*</label>
                        <input type="text" class="form-control custom-input" name="hash_key" placeholder="Transaction Password" required>
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
.fund-request-form-wrapper {
    max-width: 750px;
    width: 100%;
    /* margin: 0 auto; */
    background: linear-gradient(135deg, #f7f8fa 60%, #e0e7ff 100%);
    border-radius: 22px;
    padding: 2.5rem 2rem 2rem 2rem;
    /* No box-shadow, no border */
    box-shadow: none;
    border: none;
    margin-bottom: 2.5rem;
}

.fund-request-form-wrapper h2 {
    font-size: 2.2rem;
    font-weight: 800;
    background: linear-gradient(90deg, #6a82fb 0%, #fc5c7d 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
    text-align: center;
    margin-bottom: 2rem;
    letter-spacing: 1px;
}

.custom-input {
    border: 2px solid #a259f7;
    border-radius: 16px;
    background: #f1fdf1;
    font-size: 1.08rem;
    padding: 0.9rem 1.1rem;
    margin-bottom: 1.2rem;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
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
    transition: background 0.3s, box-shadow 0.2s;
    box-shadow: 0 2px 12px #fc5c7d22;
    letter-spacing: 0.5px;
}

.btn-gradient:hover {
    background: linear-gradient(90deg, #fc5c7d 0%, #6a82fb 100%);
    color: #fff;
    box-shadow: 0 4px 24px #6a82fb33;
}

@media (max-width: 600px) {
    .fund-request-form-wrapper {
        padding: 1.2rem 0.5rem;
        border-radius: 14px;
    }
    .fund-request-form-wrapper h2 {
        font-size: 1.4rem;
    }
}
</style>
@endsection
