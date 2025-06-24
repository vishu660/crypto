@extends('backend.layouts.admin')

@section('title', 'Wallet Activation')

@push('styles')
<style>
    .main-content {
        background-color: #101820;
        background-image:
            linear-gradient(rgba(0, 255, 247, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 255, 247, 0.05) 1px, transparent 1px);
        background-size: 40px 40px;
        position: relative;
    }
    .activation-card {
        background-color: #181f2a;
        padding: 30px;
        color: #fff;
        position: relative;
        border: 1px solid #00fff7;
        border-radius: 8px;
    }
    .form-control, .form-select {
        background-color: #101820;
        border: 1px solid #00fff7;
        color: #fff;
    }
    .form-control:focus, .form-select:focus {
        background-color: #101820;
        border-color: #00e0d5;
        box-shadow: 0 0 0 0.2rem rgba(0, 255, 247, 0.25);
        color: #fff;
    }
    .btn-proceed {
        background-color: transparent;
        border: 1px solid #00fff7;
        color: #00fff7;
        font-weight: 600;
        padding: 10px 0;
        width: 100%;
        letter-spacing: 1px;
    }
    .btn-proceed:hover {
        background-color: #00fff7;
        color: #101820;
    }
    .page-footer {
        text-align: center;
        margin-top: 3rem;
        padding-top: 1rem;
        color: #888;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="text-white"><a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:underline;">Dashboard</a> / Activation / Wallet Activation</p>
            <h4 class="mt-2" style="color:#fff;">Wallet Activation</h4>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-lg-7">
            <div class="activation-card">
                <form method="POST" action="#">
                    @csrf
                    <div class="mb-3">
                        <label for="member_id" class="form-label">Member ID*</label>
                        <input type="text" class="form-control" id="member_id" name="member_id" placeholder="Enter Member ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="package" class="form-label">Package*</label>
                        <select class="form-select" id="package" name="package" required>
                            <option value="">Select Package</option>
                            <option value="basic">Basic</option>
                            <option value="standard">Standard</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="wallet" class="form-label">Wallet*</label>
                        <input type="text" class="form-control" id="wallet" name="wallet" value="Topup Wallet" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="remark" class="form-label">Remark*</label>
                        <textarea class="form-control" id="remark" name="remark" rows="3" placeholder="Enter Remark" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-proceed">Proceed</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <footer class="page-footer">
                © 2025 DEMO. All Right Reserved.
            </footer>
        </div>
    </div>
</div>
@endsection 