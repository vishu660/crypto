@extends('backend.layouts.admin')

@section('title', 'News')

@push('styles')
<style>
    .news-box {
        border: 2px solid #00fff7;
        border-radius: 12px;
        background: #181f2a;
        box-shadow: none;
        padding: 32px 24px;
        margin-bottom: 24px;
    }
    .news-form-label {
        color: #b2f7ef;
        font-weight: 500;
        margin-bottom: 6px;
    }
    .news-form-input, .news-form-textarea {
        background: #101820 !important;
        color: #fff;
        border: 1.5px solid #00fff7;
        border-radius: 6px;
        padding: 10px 14px;
        margin-bottom: 18px;
        width: 100%;
    }
    .news-form-input:focus, .news-form-textarea:focus {
        outline: none !important;
        box-shadow: none !important;
        border-color: #00fff7;
    }
    .news-form-input::placeholder, .news-form-textarea::placeholder {
        color: #fff;
        opacity: 1;
    }
    .news-form-btn {
        width: 100%;
        background: transparent;
        color: #00fff7;
        border: 2px solid #00fff7;
        border-radius: 6px;
        padding: 10px 0;
        font-weight: 600;
        font-size: 1.1em;
        transition: background 0.2s, color 0.2s;
    }
    .news-form-btn:hover {
        background: #00fff7;
        color: #101820;
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
        margin-left: auto;
        margin-right: auto;
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
            <p class="text-white"><a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:underline;">Dashboard</a> / Settings / News</p>
            <h3 class="text-white mt-3">News</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="news-box">
                <h5 class="text-white mb-3">Add News</h5>
                <form>
                    <label class="news-form-label">Title*</label>
                    <input type="text" class="news-form-input" placeholder="Title">
                    <label class="news-form-label">News*</label>
                    <textarea class="news-form-textarea" rows="3" placeholder="Enter news details"></textarea>
                    <button type="submit" class="news-form-btn">Proceed</button>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="filter-box mb-3">
                <input type="text" class="form-control" placeholder="start date">
                <span class="input-group-text">to</span>
                <input type="text" class="form-control" placeholder="end date">
                <button class="btn" type="button"><i class="bi bi-search"></i></button>
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
                            <th>Title</th>
                            <th>News</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3" class="text-center">No data available in table</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="datatable-info">
                    Showing 0 to 0 of 0 entries
                </div>
                <div class="datatable-pagination">
                    <button class="btn btn-sm btn-secondary me-1" disabled>Previous</button>
                    <button class="btn btn-sm btn-secondary" disabled>Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 