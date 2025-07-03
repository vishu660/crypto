@extends('user.main')

@section('content')
<div class="container-fluid py-4 w-auto">

    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-bold">User Profile</h4>
        <a href="{{ route('user') }}" class="btn btn-primary">Dashboard</a>
    </div>

    <div class="row">
        <!-- Sidebar Profile Info -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Profile</h5>
                </div>
                <div class="card-body">
                    @php
                        $user = Auth::user();
                    @endphp

                    @if($user)
                        <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('assets/images/profile/profile-2.jpg') }}"
                            alt="Profile Image"
                            class="rounded-circle mb-3"
                            style="width: 100px; height: 100px; object-fit: cover;">
                        <h4 class="fw-bold">{{ $user->full_name }}</h4>
                        <div class="mb-2"><strong>Email:</strong> {{ $user->email }}</div>
                        <div class="mb-2"><strong>Mobile No:</strong> {{ $user->mobile_no }}</div>
                        <div class="mb-2"><strong>Referral ID:</strong> {{ $user->referral_id ?? '-' }}</div>
                        <div class="mb-2"><strong>City:</strong> {{ $user->city ?? '-' }}</div>
                        <div class="mb-2"><strong>State:</strong> {{ $user->state ?? '-' }}</div>
                        <div class="mb-2"><strong>Country:</strong> {{ $user->country ?? '-' }}</div>
                        <a href="#profile-update-form" class="btn btn-outline-primary mt-2">Update Profile</a>
                    @else
                        <div class="alert alert-warning">User not logged in.</div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Right Panel Content -->
        <div class="col-md-8">

            <!-- PV Cards -->
            <div class="row mb-4">
                <div class="col-md-4 mb-3">
                    <div class="card text-center bg-info bg-opacity-10">
                        <div class="card-body">
                            <h6 class="fw-bold">Personal PV</h6>
                            <h4 class="mb-0 fw-semibold">{{ $user->personal_pv ?? 0 }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center bg-success bg-opacity-10">
                        <div class="card-body">
                            <h6 class="fw-bold">Group PV</h6>
                            <h4 class="mb-0 fw-semibold">{{ $user->group_pv ?? 0 }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center bg-warning bg-opacity-10">
                        <div class="card-body">
                            <h6 class="fw-bold">Right Carry</h6>
                            <h4 class="mb-0 fw-semibold">{{ $user->right_carry ?? 0 }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h6 class="mb-0">KYC Portal</h6>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <p><strong>KYC Status:</strong>
                        @if(Auth::user()->kyc_status == 'approved')
                            <span class="badge bg-success">Approved</span>
                        @elseif(Auth::user()->kyc_status == 'rejected')
                            <span class="badge bg-danger">Rejected</span>
                        @else
                            <span class="badge bg-warning text-dark">Pending</span>
                        @endif
                    </p>

                    <form action="{{ route('user.profile.kyc.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- KYC Type Selection -->
                        <div class="mb-3">
                            <label class="form-label">Select KYC Type</label><br>
                            <label><input type="radio" name="kyc_type" value="aadhaar" checked> Aadhaar Card</label><br>
                            <label><input type="radio" name="kyc_type" value="pan"> PAN Card</label><br>
                            <label><input type="radio" name="kyc_type" value="driving"> Driving Licence</label>
                        </div>

                        <!-- Aadhaar Uploads -->
                        <div id="aadhaar_fields">
                            <div class="mb-3">
                                <label>Aadhaar Front</label>
                                <input type="file" name="aadhaar_front" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Aadhaar Back</label>
                                <input type="file" name="aadhaar_back" class="form-control">
                            </div>
                        </div>

                        <!-- PAN Upload -->
                        <div id="pan_fields" style="display: none;">
                            <div class="mb-3">
                                <label>PAN Card</label>
                                <input type="file" name="pan_card" class="form-control">
                            </div>
                        </div>

                        <!-- Driving Licence Uploads -->
                        <div id="driving_fields" style="display: none;">
                            <div class="mb-3">
                                <label>Driving Licence Front</label>
                                <input type="file" name="driving_front" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Driving Licence Back</label>
                                <input type="file" name="driving_back" class="form-control">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Upload/Update KYC</button>
                    </form>
                </div>
            </div>

            <!-- Profile Tabs -->
            <div class="card">
                <div class="card-body">
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs mb-3" id="profileTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab">Personal Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bank-tab" data-bs-toggle="tab" data-bs-target="#bank" type="button" role="tab">Bank Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab">Contact Details</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="profileTabsContent">
                        <!-- Personal Details -->
                        <div class="tab-pane fade show active" id="personal" role="tabpanel">
                            <form id="profile-update-form" action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                                @csrf
                                <div class="mb-3">
                                    <label>Profile Image</label>
                                    <input type="file" name="profile_image" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Full Name</label>
                                    <input type="text" name="full_name" class="form-control" value="{{ old('full_name', $user->full_name) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label>Mobile No</label>
                                    <input type="text" name="mobile_no" class="form-control" value="{{ old('mobile_no', $user->mobile_no) }}">
                                </div>
                                <div class="mb-3">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control" value="{{ old('city', $user->city) }}">
                                </div>
                                <div class="mb-3">
                                    <label>State</label>
                                    <input type="text" name="state" class="form-control" value="{{ old('state', $user->state) }}">
                                </div>
                                <div class="mb-3">
                                    <label>Country</label>
                                    <input type="text" name="country" class="form-control" value="{{ old('country', $user->country) }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>

                        <!-- Bank Details -->
                        <div class="tab-pane fade" id="bank" role="tabpanel">
                            <form action="{{ route('user.profile.bank.update') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label>Bank Name</label>
                                    <input type="text" name="bank_name" class="form-control" value="{{ $user->bank_name ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label>Account Number</label>
                                    <input type="text" name="account_number" class="form-control" value="{{ $user->account_number ?? '' }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>

                        <!-- Contact Details -->
                        <div class="tab-pane fade" id="contact" role="tabpanel">
                            <form action="{{ route('user.profile.contact.update') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ $user->phone ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" value="{{ $user->address ?? '' }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
