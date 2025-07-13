@extends('user.main')

@section('content')
<div class="container-fluid py-4" style="max-width: 61rem;">
    <div class="row justify-content-center">
        <div class="col-12">
            @if(Auth::check())
                @php $user = Auth::user(); @endphp
            @else
                <div class="alert alert-danger">You are not logged in.</div>
            @endif

            <!-- Header Section -->
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <h1 class="display-6 fw-bold text-dark mb-0">User Profile</h1>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle rounded-3 fw-semibold" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-key me-2"></i>Change Password
                    </button>
                    <ul class="dropdown-menu shadow-lg border-0 rounded-3 mt-2">
                        <li><a class="dropdown-item py-2 px-3 fw-medium" href="#" data-bs-toggle="modal" data-bs-target="#loginPasswordModal">
                            <i class="fas fa-lock me-2"></i>Change Login Password
                        </a></li>
                        <li><a class="dropdown-item py-2 px-3 fw-medium" href="#" data-bs-toggle="modal" data-bs-target="#transactionPasswordModal">
                            <i class="fas fa-shield-alt me-2"></i>Change Transaction Password
                        </a></li>
                    </ul>
                </div>
            </div>

            <!-- Profile Card -->
            <div class="card border-0  rounded-4 profile-card">
                <!-- Profile Header -->
                <div class="card-header border-0 bg-light text-center py-5 rounded-top-4">
                    <div class="position-relative d-inline-block mb-3">
                        @if($user)
                            <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('assets/images/profile/profile-2.jpg') }}" alt="Profile Image" class="rounded-circle profile-avatar border border-3 border-white shadow">
                        @else
                            <img src="{{ asset('assets/images/profile/profile-2.jpg') }}" alt="Profile Image">
                        @endif 
                        <div class="position-absolute bottom-0 end-0 bg-primary rounded-circle avatar-overlay d-flex align-items-center justify-content-center">
                            <i class="fas fa-camera text-white"></i>
                        </div>
                    </div>
                    <h2 class="h1 fw-bold text-dark mb-3">{{ $user->full_name }}</h2>
                    <div class="d-flex justify-content-center align-items-center flex-wrap gap-4">
                        <div class="text-center">
                            <small class="text-muted d-block mb-1">Referral ID</small>
                            <span class="h4 fw-bold text-dark">{{ $user->referral_id }}</span>
                        </div>
                        <div class="vr d-none d-md-block" style="height: 40px;"></div>
                        <div class="text-center">
                            <small class="text-muted d-block mb-1">Total Referrals</small>
                            <span class="h4 fw-bold text-warning">{{ $referral_count ?? 0 }}</span>
                        </div>
                    </div>
                </div>

                <!-- Profile Details -->
                <div class="card-body p-4">
                    <div class="row g-4">
                        <!-- Personal Information -->
                        <div class="col-md-6">
                            <div class="detail-section">
                                <h3 class="h5 fw-bold text-dark mb-3 pb-2 border-bottom border-primary border-3 d-inline-block">Personal Information</h3>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center p-3 bg-light rounded-3 border detail-item">
                                            <div class="bg-primary rounded-3 p-2 me-3 detail-icon">
                                                <i class="fas fa-envelope text-white"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <small class="text-muted d-block mb-1">Email Address</small>
                                                <span class="fw-semibold text-dark">{{ $user->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center p-3 bg-light rounded-3 border detail-item">
                                            <div class="bg-primary rounded-3 p-2 me-3 detail-icon">
                                                <i class="fas fa-phone text-white"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <small class="text-muted d-block mb-1">Mobile Number</small>
                                                <span class="fw-semibold text-dark">{{ $user->mobile_no }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Location Information -->
                        <div class="col-md-6">
                            <div class="detail-section">
                                <h3 class="h5 fw-bold text-dark mb-3 pb-2 border-bottom border-primary border-3 d-inline-block">Location Information</h3>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center p-3 bg-light rounded-3 border detail-item">
                                            <div class="bg-primary rounded-3 p-2 me-3 detail-icon">
                                                <i class="fas fa-city text-white"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <small class="text-muted d-block mb-1">City</small>
                                                <span class="fw-semibold text-dark">{{ $user->city }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center p-3 bg-light rounded-3 border detail-item">
                                            <div class="bg-primary rounded-3 p-2 me-3 detail-icon">
                                                <i class="fas fa-map-marker-alt text-white"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <small class="text-muted d-block mb-1">State</small>
                                                <span class="fw-semibold text-dark">{{ $user->state }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center p-3 bg-light rounded-3 border detail-item">
                                            <div class="bg-primary rounded-3 p-2 me-3 detail-icon">
                                                <i class="fas fa-globe text-white"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <small class="text-muted d-block mb-1">Country</small>
                                                <span class="fw-semibold text-dark">{{ $user->country }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Actions -->
                <div class="card-footer bg-light border-0 text-center py-4">
                    <button type="button" class="btn btn-primary btn-lg rounded-3 fw-semibold px-4" data-bs-toggle="modal" data-bs-target="#updateProfileModal">
                        <i class="fas fa-edit me-2"></i>Update Profile
                    </button>
                </div>
            </div>
            <!-- End of Profile Card -->
        </div>
    </div>
</div>

<!-- Update Profile Modal -->
<div class="modal fade" id="updateProfileModal" tabindex="-1" aria-labelledby="updateProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data" class="modal-content border-0 shadow-lg rounded-4">
            @csrf
            <div class="modal-header bg-primary text-white border-0 rounded-top-4">
                <h5 class="modal-title fw-bold" id="updateProfileModalLabel">
                    <i class="fas fa-user-edit me-2"></i>Update Profile
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="text-center mb-4">
                    <div class="position-relative d-inline-block mb-3">
                        <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('assets/images/profile/profile-2.jpg') }}"
                             alt="Profile Image"
                             class="rounded-circle border border-3 border-light shadow-sm"
                             style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="position-absolute bottom-0 end-0 bg-primary rounded-circle d-flex align-items-center justify-content-center"
                             style="width: 30px; height: 30px;">
                            <i class="fas fa-camera text-white" style="font-size: 0.8rem;"></i>
                        </div>
                    </div>
                    <input type="file" name="profile_image" class="form-control w-auto mx-auto" accept="image/*" style="max-width: 250px;">
                </div>
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-dark">Full Name</label>
                        <input type="text" name="full_name" value="{{ $user->full_name }}" class="form-control border-2 rounded-3 py-2">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-dark">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control border-2 rounded-3 py-2">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-dark">Mobile Number</label>
                        <input type="text" name="mobile_no" value="{{ $user->mobile_no }}" class="form-control border-2 rounded-3 py-2">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-dark">City</label>
                        <input type="text" name="city" value="{{ $user->city }}" class="form-control border-2 rounded-3 py-2">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-dark">State</label>
                        <input type="text" name="state" value="{{ $user->state }}" class="form-control border-2 rounded-3 py-2">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold text-dark">Country</label>
                        <input type="text" name="country" value="{{ $user->country }}" class="form-control border-2 rounded-3 py-2">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 p-4">
                <button type="button" class="btn btn-secondary rounded-3 fw-semibold" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary rounded-3 fw-semibold">Update Profile</button>
            </div>
        </form>
    </div>
</div>

<!-- Login Password Modal -->
<div class="modal fade" id="loginPasswordModal" tabindex="-1" aria-labelledby="loginPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="loginPasswordForm" action="{{ route('user.change.password') }}" method="POST" class="modal-content border-0 shadow-lg rounded-4">
            @csrf
            <div class="modal-header bg-primary text-white border-0 rounded-top-4">
                <h5 class="modal-title fw-bold">
                    <i class="fas fa-lock me-2"></i>Change Login Password
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="mb-3">
                    <label class="form-label fw-semibold text-dark">New Password</label>
                    <input type="password" name="password" id="loginPassword" class="form-control border-2 rounded-3 py-2" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold text-dark">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="loginPasswordConfirm" class="form-control border-2 rounded-3 py-2" required>
                    <div class="invalid-feedback" id="loginPasswordError">Passwords do not match.</div>
                </div>
            </div>
            <div class="modal-footer border-0 p-4">
                <button type="button" class="btn btn-secondary rounded-3 fw-semibold" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary rounded-3 fw-semibold">Update Password</button>
            </div>
        </form>
    </div>
</div>

<!-- Transaction Password Modal -->
<div class="modal fade" id="transactionPasswordModal" tabindex="-1" aria-labelledby="transactionPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="txnPasswordForm" action="{{ route('user.change.txnpassword') }}" method="POST" class="modal-content border-0 shadow-lg rounded-4">
            @csrf
            <div class="modal-header bg-primary text-white border-0 rounded-top-4">
                <h5 class="modal-title fw-bold">
                    <i class="fas fa-shield-alt me-2"></i>Change Transaction Password
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <div class="mb-3">
                    <label class="form-label fw-semibold text-dark">New Transaction Password</label>
                    <input type="password" name="transaction_password" id="txnPassword" class="form-control border-2 rounded-3 py-2" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold text-dark">Confirm Transaction Password</label>
                    <input type="password" name="transaction_password_confirmation" id="txnPasswordConfirm" class="form-control border-2 rounded-3 py-2" required>
                    <div class="invalid-feedback" id="txnPasswordError">Passwords do not match.</div>
                </div>
            </div>
            <div class="modal-footer border-0 p-4">
                <button type="button" class="btn btn-secondary rounded-3 fw-semibold" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-warning rounded-3 fw-semibold">Update Password</button>
            </div>
        </form>
    </div>
</div>

<script>
// Login Password Modal Validation
const loginForm = document.getElementById('loginPasswordForm');
if (loginForm) {
    loginForm.addEventListener('submit', function(e) {
        const pass = document.getElementById('loginPassword').value;
        const confirm = document.getElementById('loginPasswordConfirm').value;
        const error = document.getElementById('loginPasswordError');
        if (pass !== confirm) {
            error.style.display = 'block';
            document.getElementById('loginPasswordConfirm').classList.add('is-invalid');
            e.preventDefault();
        } else {
            error.style.display = 'none';
            document.getElementById('loginPasswordConfirm').classList.remove('is-invalid');
        }
    });
}
// Transaction Password Modal Validation
const txnForm = document.getElementById('txnPasswordForm');
if (txnForm) {
    txnForm.addEventListener('submit', function(e) {
        const pass = document.getElementById('txnPassword').value;
        const confirm = document.getElementById('txnPasswordConfirm').value;
        const error = document.getElementById('txnPasswordError');
        if (pass !== confirm) {
            error.style.display = 'block';
            document.getElementById('txnPasswordConfirm').classList.add('is-invalid');
            e.preventDefault();
        } else {
            error.style.display = 'none';
            document.getElementById('txnPasswordConfirm').classList.remove('is-invalid');
        }
    });
}
</script>

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

<style>
/* Minimal custom CSS for specific styling */
.profile-card {
    transition: transform 0.3s ease;
}

.profile-card:hover {
    transform: translateY(-5px);
}

.profile-avatar {
    width: 120px;
    height: 120px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.profile-avatar:hover {
    transform: scale(1.05);
}

.avatar-overlay {
    width: 35px;
    height: 35px;
}

.detail-item {
    transition: all 0.3s ease;
}

.detail-item:hover {
    background-color: #f8f9fa !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.detail-icon {
    width: 45px;
    height: 45px;
}

.dropdown-item:hover {
    background-color: var(--bs-primary);
    color: white !important;
}

.form-control:focus {
    border-color: var(--bs-primary);
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .vr {
        display: none !important;
    }
    
    .profile-avatar {
        width: 100px;
        height: 100px;
    }
    
    .avatar-overlay {
        width: 30px;
        height: 30px;
    }
}
</style>
@endsection