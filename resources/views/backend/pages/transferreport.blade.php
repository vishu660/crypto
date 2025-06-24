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
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <p class="text-white"><a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:underline;">Dashboard</a> / Transfer Fund / Transfer Report</p>
            <h4 class="mt-2" style="color:#fff;">Transfer Report</h4>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="report-card">
                <div>
                    <div class="row mb-3">
                        <div class="col-md-5 d-flex align-items-center">
                            <input type="text" class="form-control" placeholder="start date">
                            <span class="mx-2">to</span>
                            <input type="text" class="form-control" placeholder="end date">
                            <button class="btn btn-outline-info ms-2"><i class="bi bi-search"></i></button>
                        </div>
                        <div class="col-md-3 d-flex align-items-center text-white">
                            Show <select class="form-select form-select-sm mx-2" style="width: 70px;"><option>50</option></select> entries
                        </div>
                        <div class="col-md-4 d-flex align-items-center">
                             <label for="search" class="form-label me-2 mb-0">Search:</label>
                             <input type="search" class="form-control" id="search">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Wallet</th>
                                    <th>Remark</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6" class="text-center">No data available in table</td>
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
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="progress mt-3" style="height: 4px;">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <footer class="page-footer">
                © 2025 DEMO. All Right Reserved.
            </footer>
        </div>
    </div>
</div>
@endsection 