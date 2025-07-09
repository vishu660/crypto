@extends('backend.layouts.admin')

@section('title', 'Pending Fund Requests')

@push('styles')
<style>
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        color: #fff !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, 
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, 
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
        color: #6c757d !important;
    }
    .fund-requests-box {
        border: 2px solid #00fff7;
        border-radius: 12px;
        background: #181f2a;
        box-shadow: none;
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
            <p class="text-white">
                <a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:underline;">Dashboard</a> 
                / Fund Requests / Pending Fund Requests
            </p>
            <h3 class="text-white mt-3">Pending Fund Requests</h3>
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
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transactions as $transaction)
                                @if($transaction->status == 'pending')
                                    <tr>
                                        <td>{{ $transaction->id }}</td>
                                        <td>{{ $transaction->user->referral_id ?? 'N/A' }}</td>
                                        <td>{{ $transaction->user->full_name ?? 'N/A' }}</td>
                                        <td>USDT {{ number_format($transaction->amount, 2) }}</td>
                                        <td>{{ $transaction->remark ?? '-' }}</td>
                                        <td>
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        </td>
                                        <td>{{ $transaction->created_at->format('d-m-Y H:i') }}</td>
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center ">No pending fund requests found.</td>
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
        "searching": true,
        "lengthChange": true,
        "paging": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "language": {
            "search": "Search:",
            "lengthMenu": "Show _MENU_ entries",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "paginate": {
                "first": "First",
                "last": "Last",
                "next": "Next",
                "previous": "Previous"
            }
        }
    });
});
</script>
@endpush
