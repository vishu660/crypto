@extends('backend.layouts.admin')

@section('title', 'Wallet Balance')

@push('styles')
<style>
    .earnings-box {
        border: 2px solid #00fff7;
        border-radius: 12px;
        background: #181f2a;
        box-shadow: none;
        padding: 32px 24px;
    }
    .filter-box {
        border: 2px solid #00fff7;
        border-radius: 8px;
        padding: 8px 12px 8px 12px;
        display: flex;
        align-items: center;
        margin-bottom: 24px;
        background: transparent;
        width: fit-content;
    }
    .filter-box .form-control {
        border: none !important;
        box-shadow: none !important;
        background: #101820 !important;
        color: #fff;
    }
    .filter-box .form-control:focus {
        outline: none !important;
        box-shadow: none !important;
    }
    .filter-box .form-control::placeholder {
        color: #fff;
        opacity: 1;
    }
    .filter-box .input-group-text {
        border: none !important;
        background: transparent !important;
        color: #fff;
    }
    .filter-box .btn {
        border: none !important;
        box-shadow: none !important;
        background: transparent !important;
        color: #00fff7;
        padding: 0 10px;
    }
    .filter-box .btn:hover {
        background: #00fff7 !important;
        color: #101820 !important;
        border: none !important;
    }
    .table {
        --bs-table-bg: transparent;
        --bs-table-color: #fff;
        --bs-table-border-color: #00fff733;
        color: var(--bs-table-color);
        border-color: var(--bs-table-border-color);
    }
    .table thead th {
        color: #cbe7f7;
        background: #232b38;
        font-weight: 600;
    }
    .table td, .table th {
        border-color: #00fff733;
    }
    .table-hover tbody tr:hover {
        background-color: #232b38;
        color: #fff;
    }
    .table-hover tbody tr:hover > td,
    .table-hover tbody tr:hover > th {
        color: #fff;
    }
    .pagination .page-link {
        background-color: transparent;
        border-color: #00fff7;
        color: #00fff7;
        margin: 0 2px;
        border-radius: 0.25rem;
    }
    .pagination .page-item.active .page-link {
        background-color: #00fff7;
        border-color: #00fff7;
        color: #101820;
    }
    .pagination .page-item.disabled .page-link {
        background-color: transparent;
        border-color: #00fff780;
        color: #00fff780;
    }
    .pagination .page-link:hover {
        background-color: #00fff71a;
        color: #00fff7;
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <p class="text-white"><a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:underline;">Dashboard</a> / Wallets Details / Wallet Balance</p>
            <h3 class="text-white mt-3">Wallet Balance</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="earnings-box">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Member ID</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Currency</th>
                            <th>Message</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($wallets as $wallet)
                            <tr>
                                <td>{{ $wallet->user->id }}</td>
                                <td>{{ $wallet->user->full_name }}</td>
                                <td>USDT {{ number_format($wallet->amount, 2) }}</td>
                                <td>
                                    <span class="badge bg-{{ $wallet->type === 'credit' ? 'success' : 'danger' }}">
                                        {{ ucfirst($wallet->type) }}
                                    </span>
                                </td>
                                <td>{{ $wallet->currency }}</td>
                                <td>{{ $wallet->message ?? '—' }}</td>
                                <td>{{ $wallet->created_at->format('d M, Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 