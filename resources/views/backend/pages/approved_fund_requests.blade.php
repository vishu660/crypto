@extends('backend.layouts.admin')

@section('title', 'Approved Fund Requests')

@push('styles')
<!-- (existing styles remain same - skip here for brevity) -->
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h4 class="text-white">Dashboard / Fund Requests / Approved Fund Requests</h4>
            <h3 class="text-white mt-3">Approved Fund Requests</h3>
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
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->user->referral_id ?? 'N/A' }}</td>
                                    <td>{{ $transaction->user->full_name ?? 'N/A' }}</td>
                                    <td>₹{{ number_format($transaction->amount, 2) }}</td>
                                    <td>{{ $transaction->remark ?? '-' }}</td>
                                    <td>
                                        <span class="badge bg-success">Approved</span>
                                    </td>
                                    <td>{{ $transaction->created_at->format('d-m-Y H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center ">No approved fund requests found.</td>
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
