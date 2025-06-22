@extends('backend.layouts.admin')

@section('title', 'Pending Fund Requests')

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
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h4 class="text-white">Dashboard / Fund Requests / Pending Fund Requests</h4>
            <h3 class="text-white mt-3">Pending Fund Requests</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-5">
                             <div class="input-group">
                                <input type="date" class="form-control" placeholder="start date">
                                <span class="input-group-text">to</span>
                                <input type="date" class="form-control" placeholder="end date">
                                <button class="btn btn-outline-info" type="button"><i class="bi bi-search"></i></button>
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
                                    <th>Request Date</th>
                                    <th>Action</th>
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