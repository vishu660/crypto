@extends('backend.layouts.admin')

@section('title', 'Paid Payouts')

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
            <h4 class="text-white">Dashboard / Payouts / Paid Payouts</h4>
            <h3 class="text-white mt-3">Paid Payouts</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="earnings-box">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="filter-box">
                            <input type="text" class="form-control" placeholder="start date">
                            <span class="input-group-text">to</span>
                            <input type="text" class="form-control" placeholder="end date">
                            <button class="btn" type="button"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <label class="form-label mb-0 me-2" style="color:#b2f7ef;">Show</label>
                    <select class="form-select form-select-sm me-2" style="width: 70px;">
                        <option>50</option>
                    </select>
                    <label class="form-label mb-0 me-3" style="color:#b2f7ef;">entries</label>
                    <div class="ms-auto d-flex align-items-center">
                        <label for="search" class="form-label me-2 mb-0" style="color:#b2f7ef;">Search:</label>
                        <input type="search" class="form-control" id="search">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Member ID</th>
                                <th>Name</th>
                                <th>Payment Details</th>
                                <th>Withdraw Amount</th>
                                <th>Processing Charge</th>
                                <th>Net Amount</th>
                                <th>Withdraw Date</th>
                                <th>Transaction Hash Key</th>
                                <th>Remark</th>
                                <th>Paid Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="10" class="text-center">No data available in table</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-md-6">
                        Showing 0 to 0 of 0 entries
                    </div>
                    <div class="col-md-6">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 