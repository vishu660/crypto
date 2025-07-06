@extends('user.main')

@section('content')
<div class="container-fluid py-4 px-2" style="min-height:80vh; background:#f7f8fa;">
    <nav style="--bs-breadcrumb-divider: '>';font-size:1.1rem;">
        <ol class="breadcrumb bg-transparent p-0 mb-2">
            <li class="breadcrumb-item text-success fw-bold">Dashboard</li>
            <li class="breadcrumb-item text-info fw-bold">Payouts</li>
            <li class="breadcrumb-item active text-dark fw-bold" aria-current="page">My Payouts</li>
        </ol>
    </nav>
    <h2 class="fw-bold mb-4" style="color:#222;letter-spacing:1px;">My Payouts</h2>

    <div class="payouts-card-glass p-4">
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
            <table class="table table-hover table-striped align-middle payouts-table w-100">
                <thead class="table-light">
                    <tr>
                        <th class="text-start">Member ID</th>
                        <th class="text-start">Name</th>
                        <th class="text-start">Payment Details</th>
                        <th class="text-start">Withdraw Amount</th>
                        <th class="text-start">Processing Charge</th>
                        <th class="text-start">Payable Amount</th>
                        <th class="text-start">Withdraw Date</th>
                        <th class="text-start">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($withdraws as $withdraw)
                    <tr>
                        <td class="text-start">{{ $withdraw->user->referral_id ?? '-' }}</td>
                        <td class="text-start">{{ $withdraw->user->full_name ?? '-' }}</td>
                        <td class="text-start" style="white-space: pre-wrap;">{{ $withdraw->payment_address }}</td>
                        <td class="text-start fw-bold">₹{{ number_format($withdraw->amount, 2) }}</td>
                        <td class="text-start">₹{{ number_format($withdraw->processing_charge, 2) }}</td>
                        <td class="text-start fw-bold">₹{{ number_format($withdraw->payable_amount, 2) }}</td>
                        <td class="text-start">{{ $withdraw->created_at->format('d-m-Y h:i A') }}</td>
                        <td class="text-start">
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
        box-shadow: 0 8px 48px #a084ee22, 0 2px 24px #38ef7d11;
        border: none;
        margin-bottom: 40px;
        width: 100%;
        overflow-x: auto;
    }
    .payouts-table {
        font-size: 0.9rem;
        white-space: nowrap;
    }
    .payouts-table th, .payouts-table td {
        vertical-align: middle;
        border-bottom: 1px solid #e3e8f0;
        padding: 0.6rem 0.8rem;
        white-space: nowrap;
    }
    .payouts-table td {
        color: #222;
        word-break: break-word;
    }
    .payouts-table th {
        font-weight: 600;
        color: #6c47ff;
        background: #f7f8fa;
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
    .badge.bg-danger {
        background: #ff4d4f;
        color: #fff;
    }
    .filter-input {
        background: #f7f8fa;
        color: #222;
        border: 1.5px solid #a084ee;
        border-radius: 12px;
        font-size: 0.95rem;
        padding: 0.5rem 1rem;
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
        font-size: 0.95rem;
        border-radius: 12px;
        padding: 0.5rem 1.2rem;
        letter-spacing: 1px;
    }
    .btn-gradient:hover {
        background: linear-gradient(90deg, #38ef7d 0%, #8e8dfa 100%);
        color: #fff;
    }
    </style>
    
@endsection
