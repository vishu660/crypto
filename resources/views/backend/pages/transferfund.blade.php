@extends('backend.layouts.admin')

@section('title', 'Fund Transfer')

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
    .transfer-card {
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
            <p style="color:#00fff7;" class="mb-0">Dashboard / Fund Transfer / New Transfer</p>
            <h4 class="mt-2" style="color:#fff;">New Transfer</h4>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-lg-7">
            <div class="transfer-card">
                <form method="POST" action="{{ route('admin.transfers.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="member_id" class="form-label">Member ID*</label>
                        <input type="text" class="form-control" id="member_id" name="member_id" placeholder="Enter Member ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount*</label>
                        <input type="number" step="0.01" class="form-control" id="amount" name="amount" placeholder="Enter Transfer Amount" required>
                    </div>
                    <div class="mb-3">
                        <label for="wallet" class="form-label">Wallet*</label>
                        <select class="form-select" id="wallet" name="wallet" required>
                            <option value="">----- Select Wallet -----</option>
                            <option value="main">Main Wallet</option>
                            <option value="commission">Commission Wallet</option>
                        </select>
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