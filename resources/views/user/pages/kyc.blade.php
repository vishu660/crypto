@extends('user.main')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">KYC Portal</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                <div>{{ $err }}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('user.kyc.submit') }}" method="POST" enctype="multipart/form-data" id="kycForm">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label"><strong>Select KYC Document Type</strong></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kyc_type" value="aadhaar" checked>
                                <label class="form-check-label">Aadhaar</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kyc_type" value="pan">
                                <label class="form-check-label">PAN</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kyc_type" value="dl">
                                <label class="form-check-label">Driving Licence</label>
                            </div>
                        </div>
                        <div class="mb-3" id="aadhaarField">
                            <label class="form-label">Aadhaar Number</label>
                            <input type="text" name="aadhaar_number" class="form-control" maxlength="12" value="{{ old('aadhaar_number', $user->aadhaar) }}">
                        </div>
                        <div class="mb-3 d-none" id="panField">
                            <label class="form-label">PAN Number</label>
                            <input type="text" name="pan_number" class="form-control" maxlength="10" value="{{ old('pan_number', $user->pan) }}">
                        </div>
                        <div class="mb-3 d-none" id="dlField">
                            <label class="form-label">Driving Licence Number</label>
                            <input type="text" name="dl_number" class="form-control" maxlength="20" value="{{ old('dl_number', $user->dl) }}">
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Upload Document Front <span class="text-danger">*</span></label>
                                <input type="file" name="front_image" class="form-control" accept="image/*" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Upload Document Back <span class="text-danger">*</span></label>
                                <input type="file" name="back_image" class="form-control" accept="image/*" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Upload Selfie <span class="text-danger">*</span></label>
                                <input type="file" name="selfie" class="form-control" accept="image/*" required>
                            </div>
                        </div>
                        <div class="d-grid mt-3">
                            <button type="submit" class="btn btn-primary">Submit KYC</button>
                        </div>
                    </form>

                    @if($user->kyc_status)
                        <div class="mt-4">
                            <strong>KYC Status:</strong>
                            @if($user->kyc_status == 'approved')
                                <span class="badge bg-success">Approved</span>
                            @elseif($user->kyc_status == 'rejected')
                                <span class="badge bg-danger">Rejected</span>
                            @else
                                <span class="badge bg-warning text-dark">Pending</span>
                            @endif
                        </div>
                        @if($user->kyc_selfie)
                            <div class="mt-2">
                                <strong>Selfie:</strong><br>
                                <img src="{{ asset('storage/' . $user->kyc_selfie) }}" alt="Selfie" style="width:120px; border-radius:8px;">
                            </div>
                        @endif
                        <div class="mt-2">
                            @if($user->aadhaar)
                                <div><strong>Aadhaar:</strong> {{ $user->aadhaar }}</div>
                            @endif
                            @if($user->pan)
                                <div><strong>PAN:</strong> {{ $user->pan }}</div>
                            @endif
                            @if($user->dl)
                                <div><strong>DL:</strong> {{ $user->dl }}</div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 