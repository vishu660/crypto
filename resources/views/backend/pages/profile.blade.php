@extends('backend.layouts.admin')

@section('title', 'Profile')

@push('styles')
<style>
    .profile-card {
        background-color: #181f2a;
        border: 1px solid #00fff7;
        color: #fff;
        border-radius: 8px;
        padding: 24px 18px;
        min-height: 420px;
        text-align: center;
    }
    .profile-card img {
        width: 100%;
        max-width: 180px;
        border-radius: 8px;
        margin-bottom: 18px;
        object-fit: cover;
    }
    .profile-card .profile-name {
        font-size: 1.3rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 2px;
    }
    .profile-card .profile-id {
        color: #00fff7;
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 10px;
    }
    .profile-card .profile-info {
        color: #b2f7ef;
        font-size: 1rem;
        margin-bottom: 6px;
        display: flex;
        align-items: center;
        gap: 6px;
        justify-content: center;
    }
    .profile-card .profile-info i {
        color: #00fff7;
    }
    .profile-card .profile-email {
        color: #b2f7ef;
        font-size: 1rem;
        word-break: break-all;
    }
    .profile-section {
        background-color: #181f2a;
        border: 1px solid #00fff7;
        border-radius: 8px;
        padding: 32px 28px 24px 28px;
        color: #fff;
    }
    .profile-section h5 {
        color: #00fff7;
        font-weight: 700;
        margin-bottom: 24px;
    }
    .form-control, .form-select {
        background-color: #101820;
        border: 1px solid #00fff7;
        color: #fff;
    }
    .form-control:focus, .form-select:focus {
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
    }
    .btn-primary:hover {
        background-color: #00e0d5;
        border-color: #00d0c5;
        color: #101820;
    }
    @media (max-width: 991.98px) {
        .profile-section {
            padding: 18px 6px;
        }
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-3">
            <h4 class="me-auto mb-0"><a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:underline;">Dashboard</a> / Profile</h4>
        </div>
    </div>
    <div class="row">
        <!-- Profile Card -->
        <div class="col-lg-3 mb-4 mb-lg-0">
            <div class="profile-card">
                <img src="https://i.ibb.co/6bQ6Q0P/location-logo.png" alt="Profile" />
                <div class="profile-name">DEMO</div>
                <div class="profile-id">1234567891</div>
                <div class="profile-info"><i class="bi bi-geo-alt"></i> Pune, Maharastra</div>
                <div class="profile-info"><i class="bi bi-globe"></i> India</div>
                <div class="profile-email"><i class="bi bi-envelope"></i> xxxx@gmail.comt</div>
            </div>
        </div>
        <!-- Profile Update Form -->
        <div class="col-lg-9">
            <div class="profile-section">
                <h5>Update Profile</h5>
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label">Company Name*</label>
                            <input type="text" class="form-control" value="DEMO">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Contact No*</label>
                            <input type="text" class="form-control" value="1234567891">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label">Email*</label>
                            <input type="email" class="form-control" value="xxxx@gmail.comt">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">City*</label>
                            <input type="text" class="form-control" value="Pune">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label">State*</label>
                            <input type="text" class="form-control" value="Maharastra">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Country*</label>
                            <input type="text" class="form-control" value="India">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Profile Image*</label>
                        <input type="file" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 