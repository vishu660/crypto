@extends('backend.layouts.admin')

@section('title', 'All Fund Requests')

@push('styles')
<style>
    /* Aapka existing CSS same as it is rahega */
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
                                <th>Currency</th>
                                <th>Type</th>
                                <th>Purpose</th>
                                <th>Status</th>
                                <th>Gateway</th>
                                <th>Message</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->user_id }}</td>
                                    <td>{{ $transaction->user->full_name ?? 'N/A' }}</td>
                                    <td>USDT {{ number_format($transaction->amount, 2) }}</td>
                                    <td>{{ $transaction->currency }}</td>
                                    <td>{{ ucfirst($transaction->type) }}</td>
                                    <td>{{ ucfirst(str_replace('_', ' ', $transaction->purpose_of_payment)) }}</td>
                                    <td>
                                        @if($transaction->status === 'pending')
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @elseif($transaction->status === 'success')
                                            <span class="badge bg-success">Approved</span>
                                        @else
                                            <span class="badge bg-danger">Failed</span>
                                        @endif
                                    </td>
                                    <td>{{ $transaction->gateway }}</td>
                                    <td>{{ $transaction->message }}</td>
                                    <td>{{ $transaction->created_at->format('d-m-Y H:i') }}</td>
                                    <td>
                                        @if($transaction->status === 'pending')
                                            <form method="POST" action="{{ route('admin.transactions.approve', $transaction->id) }}" style="display: inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to approve this request?')">
                                                    <i class="bi bi-check-circle"></i> Approve
                                                </button>
                                            </form>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="rejectRequest({{ $transaction->id }})">
                                                <i class="bi bi-x-circle"></i> Reject
                                            </button>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center text-white">No fund requests found.</td>
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

function rejectRequest(transactionId) {
    if (confirm('Are you sure you want to reject this request?')) {
        // Create a form and submit it
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = '/admin/transactions/' + transactionId + '/reject';
        
        // Add CSRF token
        var csrfToken = document.createElement('input');
        csrfToken.type = 'hidden';
        csrfToken.name = '_token';
        csrfToken.value = '{{ csrf_token() }}';
        form.appendChild(csrfToken);
        
        document.body.appendChild(form);
        form.submit();
    }
}
</script>
@endpush