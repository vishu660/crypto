@extends('user.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-4">
            <div class="shadow-lg p-4" style="border-radius:18px; background:#fff; max-width:958px; width:100%;">
                <h2 class="fw-bold mb-4" style="font-size:1.6rem;">Fund Requests</h2>
                <div class="table-responsive">
                    <table class="table table-sm table-hover align-middle compact-table" id="fundRequestsTable" style="min-width:600px;">
                        <thead class="table-light">
                            <tr>
                                <th>Member ID</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Transaction Password</th>
                                <th>Member's Remark</th>
                                <th>Request Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($fundRequests as $request)
                            <tr>
                                <td>{{ $request->user->referral_id ?? 'N/A' }}</td>
                                <td>{{ $request->user->full_name ?? 'N/A' }}</td>
                                <td>₹{{ number_format($request->amount, 2) }}</td>
                                <td>{{ $request->hash_key }}</td>
                                <td>{{ $request->remark }}</td>
                                <td>{{ $request->created_at->format('d-m-Y h:i a') }}</td>
                                <td>
                                    @if($request->status == 'pending')
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @elseif($request->status == 'approved')
                                        <span class="badge bg-success">Approved</span>
                                    @else
                                        <span class="badge bg-danger">Rejected</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center text-secondary py-4" style="font-size:1.1rem;">
                                    No fund requests found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.compact-table th, .compact-table td {
    padding: 0.18rem 0.28rem !important;
    font-size: 0.85rem;
}
#fundRequestsTable {
    border-radius: 8px;
    overflow: hidden;
    background: #f8fafd;
}
.table-light th {
    background: #bfc9d1 !important;
    color: #222 !important;
    font-weight: 700;
    font-size: 0.8rem;
    text-align: center;
}
.table-hover tbody tr:hover td {
    background: #f3f7ff !important;
}
.card {
    max-width: 800px;
    margin: auto;
}
@media (max-width: 900px) {
    #fundRequestsTable { min-width: 400px; }
    .card { max-width: 98vw; }
}
</style>
@endsection
