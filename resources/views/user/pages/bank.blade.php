@extends('user.main')

@section('content')
<div class="d2c_main p-4">
    <div class="row align-items-center mb-4">
        <div class="col">
            <h4 class="text-capitalize fw-bold">Bank Details</h4>
            <p class="mb-0">Manage your bank account information for withdrawals and transfers.</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card bg-primary bg-opacity-10">
                <div class="card-body p-4">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form method="POST" action="#">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Account Holder Name</label>
                            <input type="text" class="form-control" name="account_holder" placeholder="Enter account holder name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bank Name</label>
                            <input type="text" class="form-control" name="bank_name" placeholder="Enter bank name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Account Number</label>
                            <input type="text" class="form-control" name="account_number" placeholder="Enter account number" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">IFSC Code</label>
                            <input type="text" class="form-control" name="ifsc_code" placeholder="Enter IFSC code" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Save Bank Details</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 