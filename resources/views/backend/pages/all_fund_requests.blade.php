@extends('backend.layouts.admin')

@section('title', 'All Fund Requests')

@push('styles')
<style>
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        color: #fff !important;
    }
    .fund-requests-box {
        border: 2px solid #00fff7;
        border-radius: 12px;
        background: #181f2a;
        padding: 32px 24px;
    }
    .fund-requests-box table {
        background: transparent;
        color: #fff;
    }
    .fund-requests-box th {
        background: #101820;
        color: #fff;
        border-bottom: 2px solid #00fff7;
    }
    .fund-requests-box td, .fund-requests-box th {
        border-color: #00fff7;
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <p class="text-white">Dashboard / Fund Requests / All Fund Requests</p>
            <h3 class="text-white mt-3">All Fund Requests</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="fund-requests-box">
                <div class="table-responsive">
                    <table id="fundRequestsTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Member ID</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Remark</th>
                                <th>Status</th>
                                <th>Requested At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($fundRequests as $request)
                                <tr>
                                    <td>{{ $request->id }}</td>
                                    <td>{{ $request->user->referral_id ?? 'N/A' }}</td>
                                    <td>{{ $request->user->full_name ?? 'N/A' }}</td>
                                    <td>₹{{ number_format($request->amount, 2) }}</td>
                                    <td>{{ $request->remark }}</td>
                                    <td>
                                        @if($request->status === 'pending')
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @elseif($request->status === 'approved')
                                            <span class="badge bg-success">Approved</span>
                                        @else
                                            <span class="badge bg-danger">Rejected</span>
                                        @endif
                                    </td>
                                    <td>{{ $request->created_at->format('d-m-Y H:i') }}</td>
                                    <td>
                                        @if($request->status === 'pending')
                                            <form method="POST" action="{{ route('admin.fund-request.approve', $request->id) }}" style="display: inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Approve this request?')">
                                                    Approve
                                                </button>
                                            </form>

                                            <button type="button" class="btn btn-danger btn-sm" onclick="rejectRequest({{ $request->id }})">
                                                Reject
                                            </button>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center text-white">No fund requests found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#fundRequestsTable').DataTable({
        searching: true,
        lengthChange: true,
        paging: true,
        info: true,
        autoWidth: false,
        responsive: true
    });
});

function rejectRequest(fundRequestId) {
    if (confirm('Reject this request?')) {
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = '/admin/fund-requests/' + fundRequestId + '/reject'; // ✅ make sure route matches
        
        var csrf = document.createElement('input');
        csrf.type = 'hidden';
        csrf.name = '_token';
        csrf.value = '{{ csrf_token() }}';
        form.appendChild(csrf);

        document.body.appendChild(form);
        form.submit();
    }
}
</script>
@endpush
