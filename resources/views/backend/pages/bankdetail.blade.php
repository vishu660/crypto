@extends('backend.layouts.admin')

@section('title', 'User Bank Detail Requests')

@section('content')
<div class="container py-4">
    <h4 class="mb-4">User Bank Details (Approval Panel)</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Filter + Search -->
    <form method="GET" class="row mb-3">
        <div class="col-md-4">
            <select name="status" class="form-select" onchange="this.form.submit()">
                <option value="">-- Filter by Status --</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Approved</option>
            </select>
        </div>
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Search by user/email"
                value="{{ request('search') }}">
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary w-100">Search</button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('admin.bank') }}" class="btn btn-secondary w-100">Reset</a>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>User</th>
                    <th>Account Holder</th>
                    <th>Bank</th>
                    <th>Account Number</th>
                    <th>IFSC</th>
                    <th>Status</th>
                    <th>Approved At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($banks as $bank)
                    <tr>
                        <td>
                            <strong>{{ $bank->user->full_name ?? 'N/A' }}</strong><br>
                            <small>{{ $bank->user->email ?? '' }}</small>
                        </td>
                        <td>{{ $bank->account_holder }}</td>
                        <td>{{ $bank->bank_name }}</td>
                        <td>{{ $bank->account_number }}</td>
                        <td>{{ $bank->ifsc_code }}</td>
                        <td>
                            @if($bank->is_approved)
                                <span class="badge bg-success">Approved</span>
                            @else
                                <span class="badge bg-warning text-dark">Pending</span>
                            @endif
                        </td>
                        <td>{{ $bank->approved_at ? $bank->approved_at->format('d-M-Y h:i A') : '-' }}</td>
                        <td>
                            @if(!$bank->is_approved)
                                <form action="{{ route('admin.bank_approve', $bank->id) }}" method="POST" onsubmit="return confirm('Approve this bank detail?');">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success">Approve</button>
                                </form>
                            @else
                                <button class="btn btn-sm btn-secondary" disabled>Approved</button>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No bank detail requests found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $banks->appends(request()->query())->links() !!}
        </div>
    </div>
</div>
@endsection
