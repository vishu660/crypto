@extends('backend.layouts.admin')

@section('title', 'System Controls')

@push('styles')
<style>
    .system-box {
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
    .system-form-label {
        color: #b2f7ef;
        font-weight: 500;
        margin-bottom: 6px;
    }
    .system-form-input {
        background: #101820 !important;
        color: #fff;
        border: 1.5px solid #00fff7;
        border-radius: 6px;
        padding: 10px 14px;
        margin-bottom: 18px;
    }
    .system-form-input:focus {
        outline: none !important;
        box-shadow: none !important;
        border-color: #00fff7;
    }
    .system-form-input::placeholder {
        color: #fff;
        opacity: 1;
    }
    .system-form-btn {
        width: 100%;
        background: transparent;
        color: #00fff7;
        border: 2px solid #00fff7;
        border-radius: 6px;
        padding: 10px 0;
        font-weight: 600;
        font-size: 1.1em;
        transition: background 0.2s, color 0.2s;
    }
    .system-form-btn:hover {
        background: #00fff7;
        color: #101820;
    }
    </style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <p class="text-white"><a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:underline;">Dashboard</a> / Settings / System Controls</p>
            <h3 class="text-white mt-3">System Controls</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="system-box">
                <h5 class="text-white mb-3">System Controls</h5>
                <form>
                    <label class="system-form-label">Sign In</label>
                    <input type="text" class="system-form-input w-100" value="Open">
                    <label class="system-form-label">Sign Up</label>
                    <input type="text" class="system-form-input w-100" value="Open">
                    <label class="system-form-label">Website</label>
                    <input type="text" class="system-form-input w-100" value="Open">
                    <button type="submit" class="system-form-btn">Proceed</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 