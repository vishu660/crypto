@extends('backend.layouts.admin')

@section('title', 'Transfer Report')

@push('styles')
<style>
    .main-content {
        background-color: #101820;
        background-image:
            linear-gradient(rgba(0, 255, 247, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 255, 247, 0.05) 1px, transparent 1px);
        background-size: 40px 40px;
        position: relative;
    }
    .report-card {
        background-color: #181f2a;
        padding: 30px;
        color: #fff;
        position: relative;
        border: 1px solid #00fff7;
        border-radius: 8px;
    }
    .form-control, .form-select {
        background-color: #101820;
        border: 1px solid #00fff7;
        color: #fff;
    }
    .form-control:focus, .form-select:focus {
        background-color: #101820;
        border-color: #00e0d5;
        box-shadow: 0 0 0 0.2rem rgba(0, 255, 247, 0.25);
        color: #fff;
    }
    .table {
        --bs-table-bg: transparent;
        --bs-table-color: #fff;
        --bs-table-border-color: #00fff733;
    }
    .table thead th {
        background-color: #2a3442;
        color: #00fff7;
    }
    .table td, .table th {
        border-color: #00fff733;
        vertical-align: middle;
    }
    .dataTables_wrapper .row {
        align-items: center;
    }
    .dataTables_length label, .dataTables_filter label {
        color: #fff;
    }
    .pagination .page-link {
        background-color: transparent;
        border-color: #00fff7;
        color: #00fff7;
    }
    .pagination .page-item.active .page-link {
        background-color: #00fff7;
        border-color: #00fff7;
        color: #101820;
    }
    .pagination .page-item.disabled .page-link {
        background-color: #181f2a;
        border-color: #00fff780;
        color: #00fff780;
    }
    .progress {
        background-color: #00fff733;
    }
    .progress-bar {
        background-color: #00fff7;
    }
    .page-footer {
        text-align: center;
        margin-top: 3rem;
        padding-top: 1rem;
        color: #888;
    }
</style>
@endpush

@section('content')
<div class="container mt-4">
    <h3>Transfer Report</h3>
    <div class="card mt-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Transaction ID</th>
                            <th>Type</th>
                            <th>Purpose</th>
                            <th>Amount</th>
                            <th>Currency</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($transactions) && count($transactions))
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td>TRX{{ str_pad($transaction->id, 6, '0', STR_PAD_LEFT) }}</td>
                                    <td class="{{ $transaction->type === 'credit' ? 'text-success' : 'text-danger' }}">
                                        {{ ucfirst($transaction->type) }}
                                    </td>
                                    <td>{{ ucfirst(str_replace('_', ' ', $transaction->purpose_of_payment)) }}</td>
                                    <td>{{ $transaction->amount }}</td>
                                    <td>{{ $transaction->currency }}</td>
                                    <td>{{ $transaction->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        @if($transaction->status === 'pending')
                                            <span class="text-warning">Pending</span>
                                        @elseif($transaction->status === 'success')
                                            <span class="text-success">Complete</span>
                                        @else
                                            <span class="text-danger">Failed</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">No transactions found for this user.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection 