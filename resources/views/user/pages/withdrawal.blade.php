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
            
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('user.withdraw.submit') }}" method="POST" autocomplete="off">
                @csrf

                <div class="form-group mb-4">
                    <label class="fw-bold">Amount <span class="text-danger">*</span></label>
                    <input type="number" name="amount" class="form-control" placeholder="Enter Withdraw Amount" value="{{ old('amount') }}" required>
                </div>

                <div class="form-group mb-4">
                    <label class="fw-bold">Wallet <span class="text-danger">*</span></label>
                    <input type="text" name="wallet" class="form-control" value="Earning Wallet" readonly>
                </div>

                <div class="form-group mb-4">
                    <label class="fw-bold">Withdraw Method <span class="text-danger">*</span></label>
                    <select name="payment_method" class="form-control" id="payment-method" required>
                        <option value="" disabled selected>Select Method</option>
                        <option value="bank" {{ old('payment_method') == 'bank' ? 'selected' : '' }}>INR - Bank</option>
                        <option value="usdt" {{ old('payment_method') == 'usdt' ? 'selected' : '' }}>USDT (TRC20/ERC20)</option>
                    </select>
                </div>

                <!-- Bank Fields -->
                <div id="bank-fields" style="display: none;">
                    <div class="form-group mb-3">
                        <label class="fw-bold">Account Holder Name</label>
                        <input type="text" name="account_holder" class="form-control" placeholder="Enter Account Holder Name" value="{{ old('account_holder') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="fw-bold">Account Number</label>
                        <input type="text" name="bank_account" class="form-control" placeholder="Enter Bank Account" value="{{ old('bank_account') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="fw-bold">IFSC Code</label>
                        <input type="text" name="ifsc_code" class="form-control" placeholder="Enter IFSC Code" value="{{ old('ifsc_code') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="fw-bold">Bank Name</label>
                        <input type="text" name="bank_name" class="form-control" placeholder="Enter Bank Name" value="{{ old('bank_name') }}">
                    </div>
                </div>

                <!-- USDT Fields -->
                <div id="usdt-fields" style="display: none;">
                    <div class="form-group mb-3">
                        <label class="fw-bold">USDT Address</label>
                        <input type="text" name="usdt_address" class="form-control" placeholder="Enter USDT Wallet Address" value="{{ old('usdt_address') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="fw-bold">Network</label>
                        <select name="usdt_network" class="form-control">
                            <option value="TRC20" {{ old('usdt_network') == 'TRC20' ? 'selected' : '' }}>TRC20</option>
                            <option value="ERC20" {{ old('usdt_network') == 'ERC20' ? 'selected' : '' }}>ERC20</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label class="fw-bold">Remark</label>
                    <textarea name="remark" class="form-control" placeholder="Optional remark...">{{ old('remark') }}</textarea>
                </div>

                <div class="form-group mb-4">
                    <label class="fw-bold">Transaction Password <span class="text-danger">*</span></label>
                    <input type="password" name="transaction_password" class="form-control" placeholder="Enter Transaction Password" required>
                </div>

                <button type="submit" class="btn btn-gradient w-100 fw-bold">Proceed</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const methodSelect = document.getElementById('payment-method');
        const bankFields = document.getElementById('bank-fields');
        const usdtFields = document.getElementById('usdt-fields');

        // Check if elements exist before adding event listeners
        if (methodSelect && bankFields && usdtFields) {
            methodSelect.addEventListener('change', function () {
                const selected = this.value;
                bankFields.style.display = selected === 'bank' ? 'block' : 'none';
                usdtFields.style.display = selected === 'usdt' ? 'block' : 'none';
            });

            // Show appropriate fields on page load
            const selectedMethod = methodSelect.value;
            if (selectedMethod === 'bank') {
                bankFields.style.display = 'block';
                usdtFields.style.display = 'none';
            } else if (selectedMethod === 'usdt') {
                bankFields.style.display = 'none';
                usdtFields.style.display = 'block';
            }
        }
    });
</script>

<style>
body {
    background: #f7f8fa;
    color: #222;
}
.withdraw-card {
    background: #fff;
    border-radius: 24px;
    box-shadow: 0 8px 48px #a084ee33, 0 2px 24px #38ef7d22;
    padding: 3.5rem 2.5rem 2.5rem 2.5rem;
    border: 1.5px solid #f0f0f0;
    position: relative;
    margin-bottom: 40px;
}
.form-control {
    background: #f7f8fa;
    color: #222;
    border: 1.5px solid #a084ee;
    border-radius: 12px;
    padding: 1rem 1.2rem;
}
.btn-gradient {
    background: linear-gradient(90deg, #8e8dfa 0%, #38ef7d 100%);
    color: #fff;
    border: none;
    font-size: 1.3rem;
    border-radius: 12px;
    padding: 1rem 0;
    margin-top: 0.5rem;
}
.btn-gradient:hover {
    background: linear-gradient(90deg, #38ef7d 0%, #8e8dfa 100%);
}
</style>
@endsection
