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

    <div class="table-responsive">
        <table class="table payouts-table">
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

<style>
    body {
        background: #f7f8fa;
        color: #222;
    }
    th.text-start {
        font-size: .8rem;
    }
    .payouts-table {
        font-size: 1rem;
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        background: #fff;
        margin-bottom: 0;
    }

    .payouts-table th {
        font-weight: 700;
        color: #6c47ff;
        background: #f7f8fa;
        border-bottom: 2px solid #a084ee33;
        padding: 1rem 0.8rem;
        text-align: left;
        letter-spacing: 0.5px;
    }

    .payouts-table td {
        color: #222;
        background: #fff;
        border-bottom: 1px solid #e3e8f0;
        padding: 0.9rem 0.8rem;
        vertical-align: middle;
        transition: background 0.2s;
    }

    .payouts-table tr:hover td {
        background: #e0e7ff55;
    }

    .badge.bg-success {
        background: linear-gradient(90deg, #38ef7d 0%, #11998e 100%);
        color: #fff;
        font-weight: 600;
        letter-spacing: 0.5px;
        border-radius: 8px;
        padding: 0.5em 1em;
    }

    .badge.bg-secondary {
        background: linear-gradient(90deg, #a084ee 0%, #8e8dfa 100%);
        color: #fff;
        font-weight: 600;
        letter-spacing: 0.5px;
        border-radius: 8px;
        padding: 0.5em 1em;
    }

    .badge.bg-danger {
        background: #ff4d4f;
        color: #fff;
        font-weight: 600;
        letter-spacing: 0.5px;
        border-radius: 8px;
        padding: 0.5em 1em;
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

    body, .withdraw-page-bg {
        background: linear-gradient(135deg, #e0f7fa 60%, #e0e7ff 100%) !important;
        color: #222;
        min-height: 100vh;
    }

    .withdraw-card-glass {
        background: linear-gradient(135deg, #f7f8fa 60%, #e3e8f0 100%);
        border-radius: 32px;
        box-shadow: 0 8px 48px #a084ee22, 0 2px 24px #38ef7d11;
        border: none;
        margin-bottom: 40px;
        width: 100%;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
        overflow-x: auto;
    }

    .withdraw-form-group {
        margin-bottom: 1.4rem;
    }

    .withdraw-label {
        font-weight: 700;
        margin-bottom: 0.4rem;
        color: #6c47ff;
        display: block;
        letter-spacing: 0.5px;
    }

    .withdraw-input {
        background: #fff;
        color: #222;
        border: 1.5px solid #a084ee;
        border-radius: 12px;
        padding: 1rem 1.2rem;
        font-size: 1.08rem;
        width: 100%;
        transition: border-color 0.2s, box-shadow 0.2s;
        box-shadow: 0 1px 8px #4e54c80a;
    }

    .withdraw-input:focus {
        border-color: #38ef7d;
        box-shadow: 0 0 0 2px #38ef7d44;
        outline: none;
    }

    .withdraw-btn {
        background: linear-gradient(90deg, #8e8dfa 0%, #38ef7d 100%);
        color: #fff;
        border: none;
        font-size: 1.18rem;
        border-radius: 12px;
        padding: 0.95rem 0;
        margin-top: 0.5rem;
        transition: background 0.2s, box-shadow 0.2s;
        box-shadow: 0 2px 12px #38ef7d22;
        letter-spacing: 0.5px;
    }

    .withdraw-btn:hover {
        background: linear-gradient(90deg, #38ef7d 0%, #8e8dfa 100%);
        color: #fff;
        box-shadow: 0 4px 24px #38ef7d33;
    }
    th.fw-bold {
        width: 144px;
    }
</style>
    
@endsection
