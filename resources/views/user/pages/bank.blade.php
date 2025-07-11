@extends('user.main')

@section('content')
<style>
    .bank-form-card {
        max-width: 430px;
        /* margin: 0 auto; */
        margin-left: 48px;
    }
    .bank-form-input {
        background: #f7f8fa;
        border: 1.2px solid #a084e8;
        border-radius: 10px;
        min-height: 38px;
        font-size: 1rem;
        padding: 6px 14px;
    }
    .bank-form-label {
        font-size: 1rem;
        margin-bottom: 4px;
    }
    .bank-form-btn {
        padding: 8px 0;
        font-size: 1rem;
        border-radius: 8px;
    }
    @media (max-width: 767px) {
        .bank-form-card {
            margin-left: 0;
        }
    }
    @media (min-width: 1200px) {
        .bank-form-card {
            margin-left: 193px;
        }
    }
</style>
<div class="container py-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card bank-form-card">
                <div class="card-body">
                    <h5 class="mb-3 fw-bold">Bank Details</h5>
                    <form method="POST" action="{{ route('user.saveBankDetails') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-semibold bank-form-label">Account Holder Name</label>
                            <input type="text" name="account_holder" class="form-control bank-form-input" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold bank-form-label">Account Number</label>
                            <input type="text" name="account_number" class="form-control bank-form-input" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold bank-form-label">IFSC Code</label>
                            <input type="text" name="ifsc_code" class="form-control bank-form-input" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold bank-form-label">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control bank-form-input" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold bank-form-label">Remark</label>
                            <input type="text" name="remark" class="form-control bank-form-input">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 fw-semibold bank-form-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
