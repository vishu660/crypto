@extends('backend.layouts.admin')

@section('title', 'Update Password')

@push('styles')
<style>
    .update-password-card {
        background-color: #181f2a;
        border: 1px solid #00fff7;
        color: #fff;
        border-radius: 8px;
        padding: 32px 28px 24px 28px;
        max-width: 600px;
        margin: 0 auto;
    }
    .update-password-card h5 {
        color: #00fff7;
        font-weight: 700;
        margin-bottom: 24px;
    }
    .form-control {
        background-color: #101820;
        border: 1px solid #00fff7;
        color: #fff;
    }
    .form-control:focus {
        background-color: #101820;
        border-color: #00e0d5;
        color: #fff;
        box-shadow: 0 0 0 0.2rem rgba(0, 255, 247, 0.25);
    }
    .form-control::placeholder {
        color: #888;
    }
    .btn-primary {
        background-color: #00fff7;
        border-color: #00fff7;
        color: #101820;
        font-weight: 600;
        width: 100%;
    }
    .btn-primary:hover {
        background-color: #00e0d5;
        border-color: #00d0c5;
        color: #101820;
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            <h4 class="me-auto mb-0"><a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:underline;">Dashboard</a> / Security / Update Password</h4>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="update-password-card mt-2">
                <h5>Update Password</h5>
                <form>
                    <div class="mb-3">
                        <label class="form-label">New Password*</label>
                        <input type="password" class="form-control" placeholder="New Password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Retype New Password*</label>
                        <input type="password" class="form-control" placeholder="Retype New Password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Current Password*</label>
                        <input type="password" class="form-control" placeholder="Current Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 