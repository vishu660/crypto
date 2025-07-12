@extends('user.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-start">
        <div class="col-lg-9 col-md-10">
            @php $user = Auth::user(); @endphp

            <!-- Header with Buttons -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold">User Profile</h3>
                <div>
                    <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profile</button>
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            Change Password
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#loginPasswordModal">Login Password</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#transactionPasswordModal">Transaction Password</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- User Info Display -->
            <div class="row g-3">
                <div class="col-md-3 text-center">
                    <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('assets/images/profile/profile-2.jpg') }}"
                         alt="Profile Image" class="rounded-circle shadow" style="width: 120px; height: 120px; object-fit: cover;">
                </div>
                <div class="col-md-9">
                    <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Mobile:</strong> {{ $user->mobile_no }}</p>
                    <p><strong>City:</strong> {{ $user->city }}</p>
                    <p><strong>State:</strong> {{ $user->state }}</p>
                    <p><strong>Country:</strong> {{ $user->country }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data" class="modal-content">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title">Edit Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
          <div class="col-md-3 text-center">
            <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('assets/images/profile/profile-2.jpg') }}"
                 alt="Profile Image" class="rounded-circle shadow" style="width: 100px; height: 100px; object-fit: cover;">
            <div class="mt-2">
              <input type="file" name="profile_image" class="form-control form-control-sm">
            </div>
          </div>
          <div class="col-md-9">
            <div class="row">
              <div class="col-sm-6 mb-2">
                <label class="form-label">Full Name</label>
                <input type="text" name="full_name" value="{{ $user->full_name }}" class="form-control">
              </div>
              <div class="col-sm-6 mb-2">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control">
              </div>
              <div class="col-sm-6 mb-2">
                <label class="form-label">Mobile No</label>
                <input type="text" name="mobile_no" value="{{ $user->mobile_no }}" class="form-control">
              </div>
              <div class="col-sm-6 mb-2">
                <label class="form-label">City</label>
                <input type="text" name="city" value="{{ $user->city }}" class="form-control">
              </div>
              <div class="col-sm-6 mb-2">
                <label class="form-label">State</label>
                <input type="text" name="state" value="{{ $user->state }}" class="form-control">
              </div>
              <div class="col-sm-6 mb-2">
                <label class="form-label">Country</label>
                <input type="text" name="country" value="{{ $user->country }}" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Update</button>
      </div>
    </form>
  </div>
</div>

<!-- 🔐 Login Password Modal -->
<div class="modal fade" id="loginPasswordModal" tabindex="-1">
  <div class="modal-dialog">
    <form action="{{ route('user.change.password') }}" method="POST" class="modal-content">
      @csrf
      <div class="modal-body">
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

<!-- 🔐 Transaction Password Modal -->
<div class="modal fade" id="transactionPasswordModal" tabindex="-1">
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
