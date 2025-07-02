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
        <h4 class="text-capitalize fw-bold">Transfer</h4>
    </div>
</div>
<!-- End:Title -->

<div class="row">
    <div class="col-md-10 col-xl-10 col-xxl-6 offset-md-1 offset-xl-1 offset-xxl-3 d2c_balance_transfer_wrapper">
        <div class="card bg-success bg-opacity-10">
            <div class="card-body p-4 p-lg-5 p-xxl-4">
                <div class="p-3 mb-4 p-xxl-4 bg-primary bg-opacity-70 d2c_balance_transfer">
                    <div class="row">
                        <div class="col-md">
                            <h5 class="text-white">Available balance</h5>
                        </div>
                        <div class="col-md text-md-end">
                            <h5 class="text-white" id="converted_inr">
                                @if(!empty($convertedInr))
                                    ₹{{ number_format($convertedInr, 2) }}
                                @else
                                    not found
                                @endif
                            </h5>
                        </div>
                        
                    </div>
                </div>
                <form action="#" class="needs-validation" novalidate>
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
                    <div class="mb-3">
                        <label class="form-label">Remarks (Optional)</label>
                        <input type="text" class="form-control" name="remarks" placeholder="Remarks (optional)">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Form</label>
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected>Margin</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">To</label>
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected>Fiat and Spot</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Coin</label>
                        <select class="form-select form-control" aria-label="Default select example">
                            <option selected>ETH Ethereum</option>
                            <option value="1">BTC</option>
                            <option value="2">EURO</option>
                            <option value="3">YEN</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Amount to Transfer</label>
                        <div class="input-group">
                            <input type="number" class="form-control border-0" required placeholder="Enter amount">
                            <button class="btn ps-0 border-0" type="button" id="button-addon2"><i class="far fa-eye-slash"></i></button>
                        </div>
                    </div>
                    <p>2,5653 ETH available</p>
                    <div class="row">
                        <div class="col-md">
                            <button type="submit" class="btn bg-success bg-opacity-25 text-success w-100 text-uppercase">Cancel</button>
                        </div>
                        <div class="col-md">
                            <button type="submit" class="btn btn-primary w-100 text-uppercase">Transfer</button>
                        </div>
                    </div>
                </form>
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