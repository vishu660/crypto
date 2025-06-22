@extends('backend.layouts.admin')

@section('title', 'Approved Fund Requests')

@push('styles')
<style>
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        color: #fff !important;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, 
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, 
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
        color: #6c757d !important;
    }
    .fund-requests-box {
        border: 2px solid #00fff7;
        border-radius: 12px;
        background: #181f2a;
        box-shadow: none;
        padding: 32px 24px;
    }
    .fund-requests-box .input-group,
    .fund-requests-box .input-group .form-control,
    .fund-requests-box .input-group .input-group-text {
        background: #101820;
        color: #fff;
        border: 1px solid #00fff7;
    }
    .fund-requests-box .input-group .form-control:focus {
        border-color: #00fff7;
        box-shadow: none;
    }
    .fund-requests-box .input-group .btn {
        border: 1px solid #00fff7;
        color: #00fff7;
        background: transparent;
    }
    .fund-requests-box .input-group .btn:hover {
        background: #00fff7;
        color: #101820;
    }
    .fund-requests-box table {
        background: transparent;
        color: #fff;
    }
    .fund-requests-box th {
        background: #101820;
        color: #fff;
        border-bottom: 2px solid #00fff7;
    }
    .fund-requests-box td, .fund-requests-box th {
        border-color: #00fff7;
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
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h4 class="text-white">Dashboard / Fund Requests / Approved Fund Requests</h4>
            <h3 class="text-white mt-3">Approved Fund Requests</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="fund-requests-box">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="filter-box">
                            <input type="text" class="form-control" placeholder="dd-mm-yyyy">
                            <span class="input-group-text">to</span>
                            <input type="text" class="form-control" placeholder="dd-mm-yyyy">
                            <button class="btn" type="button"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="fundRequestsTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Member ID</th>
                                <th>Name</th>
                                <th>Request Amount</th>
                                <th>Scan Copy</th>
                                <th>Transaction Hash Key</th>
                                <th>Member's Remark</th>
                                <th>Company's Remark</th>
                                <th>Request Date</th>
                                <th>Approved Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be populated by DataTables -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#fundRequestsTable').DataTable({
        "searching": true,
        "lengthChange": true,
        "paging": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "language": {
            "search": "Search:",
            "lengthMenu": "Show _MENU_ entries",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "paginate": {
                "first": "First",
                "last": "Last",
                "next": "Next",
                "previous": "Previous"
            }
        }
    });
});
</script>
@endpush 