@extends('backend.layouts.admin')

@section('title', 'Activation Report')

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
        color: #cbe7f7;
        font-weight: 600;
        font-size: 1.05em;
    }
    .table td, .table th {
        border-color: #00fff733;
        vertical-align: middle;
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
    .page-footer {
        text-align: center;
        margin-top: 3rem;
        padding-top: 1rem;
        color: #888;
    }
    .search-bar {
        display: flex;
        gap: 8px;
        align-items: center;
        margin-bottom: 18px;
    }
    .search-bar input[type="text"] {
        min-width: 140px;
    }
    .search-bar .btn {
        border: 1px solid #00fff7;
        color: #00fff7;
        background: transparent;
    }
    .search-bar .btn:hover {
        background: #00fff7;
        color: #101820;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="text-white"><a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:underline;">Dashboard</a> / Activation / Activation Report</p>
            <h4 class="mt-2" style="color:#fff;">Activation Report</h4>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-lg-11">
            <div class="report-card">
                <div class="search-bar mb-3">
                    <div class="d-flex align-items-center" style="gap:8px;">
                        <input type="text" class="form-control" placeholder="start date">
                        <span style="color:#b2f7ef;">to</span>
                        <input type="text" class="form-control" placeholder="end date">
                        <button class="btn"><i class="bi bi-search"></i></button>
                    </div>
                    <div class="ms-auto d-flex align-items-center" style="gap:12px;">
                        <label class="form-label mb-0" style="color:#b2f7ef;">Show</label>
                        <select class="form-select form-select-sm" style="width: 70px;">
                            <option>50</option>
                        </select>
                        <label class="form-label mb-0" style="color:#b2f7ef;">entries</label>
                    </div>
                    <div class="ms-3 d-flex align-items-center">
                        <label for="search" class="form-label me-2 mb-0" style="color:#b2f7ef;">Search:</label>
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
                                <th>Remark</th>
                                <th>ROI</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PNZ00001</td>
                                <td>DEMO</td>
                                <td>250.00</td>
                                <td>Test</td>
                                <td>0.50 %</td>
                                <td>21-02-2024 01:54:am</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-md-6">
                        Showing 1 to 1 of 1 entries
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
    <div class="row">
        <div class="col-12">
            <footer class="page-footer">
                © 2025 DEMO. All Right Reserved.
            </footer>
        </div>
    </div>
</div>
@endsection 