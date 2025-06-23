@extends('backend.layouts.admin')

@section('title', 'Payout Controls')

@push('styles')
<style>
    .payout-box {
        border: 2px solid #00fff7;
        border-radius: 12px;
        background: #181f2a;
        box-shadow: none;
        padding: 32px 24px;
        margin-bottom: 24px;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }
    .payout-form-label {
        color: #b2f7ef;
        font-weight: 500;
        margin-bottom: 6px;
    }
    .payout-form-input {
        background: #101820 !important;
        color: #fff;
        border: 1.5px solid #00fff7;
        border-radius: 6px;
        padding: 10px 14px;
        margin-bottom: 18px;
    }
    .payout-form-input:focus {
        outline: none !important;
        box-shadow: none !important;
        border-color: #00fff7;
    }
    .payout-form-input::placeholder {
        color: #fff;
        opacity: 1;
    }
    .payout-form-btn {
        width: 100%;
        background: transparent;
        color: #00fff7;
        border: 2px solid #00fff7;
        border-radius: 6px;
        padding: 10px 0;
        font-weight: 600;
        font-size: 1.1em;
        transition: background 0.2s, color 0.2s;
        margin-top: 10px;
    }
    .payout-form-btn:hover {
        background: #00fff7;
        color: #101820;
    }
    </style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <p class="text-white">Dashboard / System Controls / Payout Controls</p>
            <h3 class="text-white mt-3">Payout Controls</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="payout-box">
                <h5 class="text-white mb-3">Payout Control</h5>
                <form>
                    <label class="payout-form-label">Minimum Withdraw*</label>
                    <input type="text" class="payout-form-input w-100" value="10">
                    <label class="payout-form-label">Maximum Withdraw*</label>
                    <input type="text" class="payout-form-input w-100" value="100">
                    <label class="payout-form-label">Multiple of Amount*</label>
                    <input type="text" class="payout-form-input w-100" value="10">
                    <label class="payout-form-label">Processing Charge(%)*</label>
                    <input type="text" class="payout-form-input w-100" value="10">
                    <label class="payout-form-label">Mon</label>
                    <input type="text" class="payout-form-input w-100" value="Open">
                    <label class="payout-form-label">Tue</label>
                    <input type="text" class="payout-form-input w-100" value="Open">
                    <label class="payout-form-label">Wed</label>
                    <input type="text" class="payout-form-input w-100" value="Open">
                    <label class="payout-form-label">Thu</label>
                    <input type="text" class="payout-form-input w-100" value="Open">
                    <label class="payout-form-label">Fri</label>
                    <input type="text" class="payout-form-input w-100" value="Open">
                    <label class="payout-form-label">Sat</label>
                    <input type="text" class="payout-form-input w-100" value="Open">
                    <label class="payout-form-label">Sun</label>
                    <input type="text" class="payout-form-input w-100" value="Open">
                    <button type="submit" class="payout-form-btn">Proceed</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 