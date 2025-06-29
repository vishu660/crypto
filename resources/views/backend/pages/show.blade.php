@extends('backend.layouts.admin')

@section('title', 'Salary Report')

@push('styles')
<style>
    /* Aapka existing CSS same as it is rahega */
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        color: #fff !important;
    }
    .fund-requests-box {
        border: 2px solid #00fff7;
        border-radius: 12px;
        background: #181f2a;
        padding: 32px 24px;
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
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <p class="text-white">Dashboard / Earnings / Salary Report</p>
            <h4 style="color:#fff;">Users Salary Report</h4>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="fund-requests-box">
                <div class="table-responsive">
                    <table id="salaryTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Total Salary (ROI)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                @php
                                    $salary = $user->transactions->sum('amount');
                                @endphp
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>₹{{ number_format($salary, 2) }}</td>
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

@push('scripts')
<script>
$(document).ready(function() {
    $('#salaryTable').DataTable({
        searching: true,
        lengthChange: true,
        paging: true,
        info: true,
        autoWidth: false,
        responsive: true
    });
});
</script>
@endpush
