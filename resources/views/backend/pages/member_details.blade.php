@extends('backend.layouts.admin')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <div class="card-header text-white rounded-top-4" style="background: linear-gradient(90deg, #4e54c8 0%, #8f94fb 100%);">
                    <div class="d-flex align-items-center gap-3">
                        <div>
                            <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : 'https://ui-avatars.com/api/?name=' . urlencode($user->full_name) . '&background=4e54c8&color=fff&size=128' }}" alt="Avatar" class="rounded-circle border border-3 border-white shadow" style="width:70px; height:70px; object-fit:cover; transition: box-shadow 0.3s;">
                        </div>
                        <div>
                            <h2 class="mb-0 fw-bold"><i class="fas fa-user-circle me-2"></i>Member Details</h2>
                            <span class="text-light small">ID: {{ $user->id }}</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-4 bg-light bg-gradient text-dark" style="color:#232b33;">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <p class="mb-2"><i class="fas fa-user text-primary me-2"></i><strong class="text-dark">Full Name:</strong> <span class="fw-semibold text-dark">{{ $user->full_name }}</span></p>
                            <p class="mb-2"><i class="fas fa-envelope text-info me-2"></i><strong class="text-dark">Email:</strong> <span class="text-dark">{{ $user->email }}</span></p>
                            <p class="mb-2"><i class="fas fa-phone text-success me-2"></i><strong class="text-dark">Mobile:</strong> <span class="text-dark">{{ $user->mobile_no }}</span></p>
                            <p class="mb-2">
                                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                                <strong class="text-dark">Address:</strong>
                                <span class="text-dark">{{ $user->address->name ?? '-' }}</span>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2"><i class="fas fa-user-friends text-warning me-2"></i><strong class="text-dark">Referral ID:</strong> <span class="text-info">{{ $user->referral_id }}</span></p>
                            <p class="mb-2"><i class="fas fa-user-tag text-secondary me-2"></i><strong class="text-dark">Referral Name:</strong> <span class="fw-semibold text-dark">{{ $user->referralUser->full_name ?? '-' }}</span></p>
                            <p class="mb-2"><i class="fas fa-user-shield text-dark me-2"></i><strong class="text-dark">Status:</strong> <span class="badge {{ $user->status == 'banned' ? 'bg-danger' : 'bg-success' }} px-3 py-2">{{ ucfirst($user->status) }}</span></p>
                            <p class="mb-2"><i class="fas fa-calendar-alt text-primary me-2"></i><strong class="text-dark">Joined At:</strong> <span class="text-dark">{{ $user->created_at->format('d-m-Y H:i') }}</span></p>
                        </div>
                    </div>
                    <div class="mt-4 text-end">
                        <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#updateMemberModal">
                            <i class="fas fa-edit me-1"></i> Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Update Member Modal -->
<div class="modal fade" id="updateMemberModal" tabindex="-1" aria-labelledby="updateMemberModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="{{ route('admin.member.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="updateMemberModalLabel"><i class="fas fa-edit me-2"></i>Update Member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $user->full_name }}" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
          </div>
          <div class="mb-3">
            <label for="mobile_no" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ $user->mobile_no }}">
          </div>
          <div class="mb-3">
            <label for="address_id" class="form-label">Address</label>
            <select class="form-control" id="address_id" name="address_id">
                @foreach($addresses as $address)
                    <option value="{{ $address->id }}"
                        data-image="{{ asset('storage/'.$address->image) }}"
                        {{ $user->address_id == $address->id ? 'selected' : '' }}>
                        {{ $address->name }} ({{ $address->address_key }})
                    </option>
                @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                <option value="banned" {{ $user->status == 'banned' ? 'selected' : '' }}>Banned</option>
                <option value="blocked" {{ $user->status == 'blocked' ? 'selected' : '' }}>Blocked</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
    </div>
</div>
@endsection

