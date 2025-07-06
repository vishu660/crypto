@extends('user.main')

@section('content')
<div class="container-fluid py-4" style="min-height:80vh; background:#f7f8fa;">
    <nav style="--bs-breadcrumb-divider: '>';font-size:1.1rem;">
        <ol class="breadcrumb bg-transparent p-0 mb-2">
            <li class="breadcrumb-item text-success fw-bold">Dashboard</li>
            <li class="breadcrumb-item text-info fw-bold">Payouts</li>
            <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">My Payouts</li>
        </ol>
    </nav>
    <h2 class="fw-bold mb-4" style="color:#222;letter-spacing:1px;">My Payouts</h2>
    <div class="payouts-card-glass p-4 mx-auto">
        <div class="d-flex flex-wrap align-items-center mb-3 gap-3">
            <div class="d-flex align-items-center gap-2">
                <input type="date" class="form-control filter-input" placeholder="start date" style="max-width:150px;">
                <span class="text-secondary">to</span>
                <input type="date" class="form-control filter-input" placeholder="end date" style="max-width:150px;">
                <button class="btn btn-gradient ms-2"><i class="bi bi-search"></i></button>
            </div>
            <div class="ms-auto">
                <input type="search" class="form-control filter-input" placeholder="Search..." style="max-width:200px;">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table payouts-table table-borderless table-hover" style="min-width:900px;">
                <thead>
                    <tr style="background:rgba(160,132,238,0.08);">
                        <th>Member ID</th>
                        <th>Name</th>
                        <th>Payment Details</th>
                        <th>Withdraw Amount</th>
                        <th>Processing Charge</th>
                        <th>Payable Amount</th>
                        <th>Withdraw Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($withdraws as $withdraw)
                    <tr>
                        <td>{{ $withdraw->user->referral_id ?? '-' }}</td>
                        <td>{{ $withdraw->user->full_name ?? '-' }}</td>
                        <td style="white-space: pre-wrap;">{{ $withdraw->payment_address }}</td>
                        <td>₹{{ number_format($withdraw->amount, 2) }}</td>
                        <td>₹{{ number_format($withdraw->processing_charge, 2) }}</td>
                        <td>₹{{ number_format($withdraw->payable_amount, 2) }}</td>
                        <td>{{ $withdraw->created_at->format('d-m-Y h:i A') }}</td>
                        <td>
                            @if($withdraw->status === 'pending')
                                <span class="badge bg-secondary">Pending</span>
                            @elseif($withdraw->status === 'approved')
                                <span class="badge bg-success">Approved</span>
                            @elseif($withdraw->status === 'rejected')
                                <span class="badge bg-danger">Rejected</span>
                            @else
                                <span class="badge bg-secondary">{{ ucfirst($withdraw->status) }}</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">No withdrawal requests found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            @if($withdraws->hasPages())
            <div class="d-flex justify-content-between align-items-center mt-2 text-secondary" style="font-size:0.98rem;">
                <span>Showing {{ $withdraws->firstItem() ?? 0 }} to {{ $withdraws->lastItem() ?? 0 }} of {{ $withdraws->total() }} entries</span>
                <nav>
                    {{ $withdraws->links('pagination::bootstrap-5') }}
                </nav>
            </div>
            @endif
        </div>
    </div>
</div>
<style>
body {
    background: #f7f8fa;
    color: #222;
}
.payouts-card-glass {
    background: linear-gradient(135deg, #f7f8fa 60%, #e3e8f0 100%);
    border-radius: 32px;
    box-shadow: 0 8px 48px #a084ee22, 0 2px 24px #38ef7d11, 0 0 0 1px #e3e8f0;
    border: none;
    position: relative;
    margin-bottom: 40px;
    width: 100%;
    max-width: 1100px;
    transition: box-shadow 0.2s;
}
.payouts-card-glass:hover {
    box-shadow: 0 12px 64px #a084ee33, 0 4px 32px #38ef7d22;
}
.payouts-table th, .payouts-table td {
    vertical-align: middle;
    font-size: 1.08rem;
    border-bottom: 1px solid #e3e8f0;
}
.payouts-table th {
    font-weight: 600;
    color: #6c47ff;
    letter-spacing: 0.5px;
    background: #f7f8fa;
}
.payouts-table td {
    color: #222;
    background: transparent;
}
.payouts-table tr:hover {
    background: #f3f7ff;
}
.badge.bg-success {
    background: linear-gradient(90deg, #38ef7d 0%, #11998e 100%);
    color: #fff;
}
.badge.bg-secondary {
    background: linear-gradient(90deg, #a084ee 0%, #8e8dfa 100%);
    color: #fff;
}
.filter-input {
    background: #f7f8fa;
    color: #222;
    border: 1.5px solid #a084ee;
    border-radius: 12px;
    font-size: 1.08rem;
    padding: 0.5rem 1rem;
    box-shadow: none;
}
.filter-input:focus {
    border-color: #38ef7d;
    box-shadow: 0 0 0 2px #38ef7d44;
    background: #fff;
    color: #222;
}
.btn-gradient {
    background: linear-gradient(90deg, #8e8dfa 0%, #38ef7d 100%);
    color: #fff;
    border: none;
    font-size: 1.1rem;
    border-radius: 12px;
    padding: 0.5rem 1.2rem;
    letter-spacing: 1px;
    transition: background 0.2s, color 0.2s;
}
.btn-gradient:hover {
    background: linear-gradient(90deg, #38ef7d 0%, #8e8dfa 100%);
    color: #fff;
}
.breadcrumb {
    background: transparent;
}
@media (max-width: 900px) {
    .payouts-card-glass {
        padding: 1.2rem 0.5rem 1.2rem 0.5rem;
        max-width: 99vw;
    }
}
</style>
@endsection 