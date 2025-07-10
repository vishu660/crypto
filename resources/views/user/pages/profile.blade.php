@extends('user.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-start">
        <div class="col-lg-9 col-md-10">
            @if(Auth::check())
    @php $user = Auth::user(); @endphp
@else
    <div class="alert alert-danger">You are not logged in.</div>
@endif
            <!-- Page Heading and Dropdown -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold">User Profile</h3>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Change Password
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginPasswordModal">Change Login Password</a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#transactionPasswordModal">Change Transaction Password</a></li>
                    </ul>
                </div>
            </div>

            <!-- Profile Card -->
            <div class="card shadow border-0 mb-4" style="border-radius: 20px; background-color: #ffffff;">
                <div class="card-body p-4">
                    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body p-4">
                            @php $user = Auth::user(); @endphp
                            <div class="row align-items-center g-4">
                                <div class="col-md-3 text-center">
                                    <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('assets/images/profile/profile-2.jpg') }}"
                                         alt="Profile Image"
                                         class="rounded-circle shadow"
                                         style="width: 120px; height: 120px; object-fit: cover;">
                                    <div class="mt-2">
                                        <input type="file" name="profile_image" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h4 class="fw-bold mb-3">{{ $user->full_name }}</h4>
                    
                                    <div class="row text-md-start text-center">
                                        <div class="col-sm-6 mb-2">
                                            <label class="form-label fw-semibold">Full Name</label>
                                            <input type="text" name="full_name" value="{{ $user->full_name }}" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <label class="form-label fw-semibold">Email</label>
                                            <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <label class="form-label fw-semibold">Mobile No</label>
                                            <input type="text" name="mobile_no" value="{{ $user->mobile_no }}" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <label class="form-label fw-semibold">City</label>
                                            <input type="text" name="city" value="{{ $user->city }}" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <label class="form-label fw-semibold">State</label>
                                            <input type="text" name="state" value="{{ $user->state }}" class="form-control">
                                        </div>
                                        <div class="col-sm-6 mb-2">
                                            <label class="form-label fw-semibold">Country</label>
                                            <input type="text" name="country" value="{{ $user->country }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Update Button -->
                            <div class="text-end mt-4">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                    
        </div>
    </div>
</div>

<!-- Login Password Modal -->
<div class="modal fade" id="loginPasswordModal" tabindex="-1" aria-labelledby="loginPasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{ route('user.change.password') }}" method="POST" class="modal-content">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title">Change Login Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
              <label>Current Password</label>
              <input type="password" name="current_password" class="form-control" required>
          </div>
          <div class="mb-3">
              <label>New Password</label>
              <input type="password" name="password" class="form-control" required>
          </div>
          <div class="mb-3">
              <label>Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>

<!-- Transaction Password Modal -->
<div class="modal fade" id="transactionPasswordModal" tabindex="-1" aria-labelledby="transactionPasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{ route('user.change.txnpassword') }}" method="POST" class="modal-content">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title">Change Transaction Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
              <label>New Transaction Password</label>
              <input type="password" name="transaction_password" class="form-control" required>
          </div>
          <div class="mb-3">
              <label>Confirm Transaction Password</label>
              <input type="password" name="transaction_password_confirmation" class="form-control" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Update</button>
      </div>
    </form>
  </div>
</div>
@endsection
