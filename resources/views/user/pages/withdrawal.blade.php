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
        <p class="fw-bold mb-4 note-withdrowal" style="color:#222;letter-spacing:1px;font-size:1.2rem;">Withdraw Now</p>
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

            @php
                $bankDetail = \App\Models\UserBankDetail::where('user_id', $user->id)->first();
            @endphp

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
                        <option value="usdt" {{ old('payment_method') == 'usdt' ? 'selected' : '' }}>USDT (TRC20/ERC20/BEP20)</option>
                    </select>
                </div>

                <!-- Bank Fields -->
                <div id="bank-fields" style="display: none;">
                    <div class="form-group mb-3">
                        <label class="fw-bold">Account Holder Name <span class="text-danger">*</span></label>
                        <input type="text" name="account_holder" class="form-control"
                            value="{{ old('account_holder', $bankDetail->account_holder ?? '') }}"
                            {{ $bankDetail ? 'readonly' : '' }}>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fw-bold">Account Number <span class="text-danger">*</span></label>
                        <input type="text" name="bank_account" class="form-control"
                            value="{{ old('bank_account', $bankDetail->account_number ?? '') }}"
                            {{ $bankDetail ? 'readonly' : '' }}>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fw-bold">IFSC Code <span class="text-danger">*</span></label>
                        <input type="text" name="ifsc_code" class="form-control"
                            value="{{ old('ifsc_code', $bankDetail->ifsc_code ?? '') }}"
                            {{ $bankDetail ? 'readonly' : '' }}>
                    </div>
                    <div class="form-group mb-3">
                        <label class="fw-bold">Bank Name <span class="text-danger">*</span></label>
                        <input type="text" name="bank_name" class="form-control"
                            value="{{ old('bank_name', $bankDetail->bank_name ?? '') }}"
                            {{ $bankDetail ? 'readonly' : '' }}>
                    </div>
                </div>

                <!-- USDT Fields -->
                <!-- USDT Withdrawal Fields Only -->
<!-- USDT Fields -->
<div id="usdt-fields" style="display: none;">
    <div class="form-group mb-3">
        <label class="fw-bold">USDT Address</label>
        <input type="text" name="usdt_address" class="form-control" placeholder="Enter USDT Wallet Address" value="{{ old('usdt_address') }}">
    </div>

    <div class="form-group mb-3">
        <label class="fw-bold">Network <span class="text-danger">*</span></label>
        @if(!empty($usdtKey) && count($usdtKey) > 0)
            <select name="usdt_network" class="form-control" required>
                <option value="" disabled {{ old('usdt_network') ? '' : 'selected' }}>Select Network</option>
                @foreach($usdtKey as $network)
                    <option value="{{ $network }}" {{ old('usdt_network') == $network ? 'selected' : '' }}>
                        {{ strtoupper($network) }}
                    </option>
                @endforeach
            </select>
        @else
            <select class="form-control" disabled>
                <option>No USDT Network Found</option>
            </select>
        @endif
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

        if (methodSelect && bankFields && usdtFields) {
            // Function to toggle fields and required attributes
            function toggleFields(selectedMethod) {
                const bankInputs = bankFields.querySelectorAll('input');
                const usdtInputs = usdtFields.querySelectorAll('input, select');

                if (selectedMethod === 'bank') {
                    bankFields.style.display = 'block';
                    usdtFields.style.display = 'none';
                    
                    // Make bank fields required
                    bankInputs.forEach(input => {
                        if (input.name !== 'remark') {
                            input.setAttribute('required', 'required');
                        }
                    });
                    
                    // Remove required from USDT fields
                    usdtInputs.forEach(input => {
                        input.removeAttribute('required');
                    });
                    
                } else if (selectedMethod === 'usdt') {
                    bankFields.style.display = 'none';
                    usdtFields.style.display = 'block';
                    
                    // Make USDT fields required
                    usdtInputs.forEach(input => {
                        if (input.name !== 'remark') {
                            input.setAttribute('required', 'required');
                        }
                    });
                    
                    // Remove required from bank fields
                    bankInputs.forEach(input => {
                        input.removeAttribute('required');
                    });
                    
                } else {
                    bankFields.style.display = 'none';
                    usdtFields.style.display = 'none';
                    
                    // Remove required from all conditional fields
                    bankInputs.forEach(input => input.removeAttribute('required'));
                    usdtInputs.forEach(input => input.removeAttribute('required'));
                }
            }

            // Listen for changes
            methodSelect.addEventListener('change', function() {
                toggleFields(this.value);
            });

            // Initialize on page load
            toggleFields(methodSelect.value);
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
    border-radius: 12px;
    padding: 2rem 1rem 1rem 1rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
.form-control {
    background: #f7f8fa;
    color: #222;
    border: 1.5px solid #a084ee;
    border-radius: 12px;
    padding: 1rem 1.2rem;
    transition: border-color 0.3s ease;
}
.form-control:focus {
    border-color: #8e8dfa;
    box-shadow: 0 0 0 0.2rem rgba(142, 141, 250, 0.25);
}
.btn-gradient {
    background: linear-gradient(90deg, #8e8dfa 0%, #38ef7d 100%);
    color: #fff;
    border: none;
    font-size: 1.3rem;
    border-radius: 12px;
    padding: 1rem 0;
    margin-top: 0.5rem;
    transition: all 0.3s ease;
}
.btn-gradient:hover {
    background: linear-gradient(90deg, #38ef7d 0%, #8e8dfa 100%);
    transform: translateY(-2px);
}
.alert {
    border-radius: 12px;
    margin-bottom: 1rem;
}
.breadcrumb-item + .breadcrumb-item::before {
    content: ">";
    color: #6c757d;
}
</style>
@endsection