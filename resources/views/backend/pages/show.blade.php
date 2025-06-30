@extends('backend.layouts.admin')

@section('title', 'Salary Report')

@push('styles')
<style>
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

    .series-edit-box {
        background: #101820;
        border: 2px dashed #00fff7;
        padding: 20px;
        border-radius: 12px;
        margin-bottom: 30px;
    }

    .series-edit-box label {
        color: #fff;
        font-weight: 500;
    }

    .series-edit-box .form-control {
        background-color: #fff !important;
        color: #000 !important;
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

    {{-- ✅ Series Salary Edit Box --}}
    <div class="row mt-4">
        <div class="col-12">
            <div class="series-edit-box">
                <h5 class="text-white mb-3">Edit Series Level Salary</h5>
                <form action="{{ route('admin.series.salary.update') }}" method="POST" class="row g-3">
                    @csrf
                    @method('PUT') {{-- ✅ यह Laravel को बताएगा कि यह PUT method है --}}
                
                    @foreach($series_levels as $level)
                        <div class="col-md-3">
                            <label>Level {{ $level->level }} Amount (₹)</label>
                            <input type="number" name="amounts[{{ $level->level }}]" step="0.01" value="{{ $level->amount }}" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <label>Period (Months)</label>
                            <input type="number" name="period_months[{{ $level->level }}]" step="1" value="{{ $level->period_months }}" class="form-control" required>
                        </div>
                    @endforeach
                
                    <div class="col-md-12 mt-3">
                        <button class="btn btn-success">Update Series Salary</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    {{-- ✅ Salary Report Table --}}
    <div class="row mt-3">
        <div class="col-12">
            <div class="fund-requests-box">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table id="salaryTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Total Salary (ROI)</th>
                                <th>Series Level</th>
                                <th>Action</th> {{-- 👈 Add this --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($users as $user)
                                @php
                                    $salary = $user->wallets->sum('amount');
                                @endphp
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>₹{{ number_format($salary, 2) }}</td>
                                    <td>
                                        Level {{ $user->series_level ?? 'N/A' }}
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.series.update', $user->id) }}" method="POST" class="d-flex">
                                            @csrf
                                            @method('PUT')
                                            <select name="series_level" class="form-select me-2" required>
                                                @for($i = 0; $i <= 5; $i++)
                                                    <option value="{{ $i }}" {{ intval($user->series_level) === $i ? 'selected' : '' }}>
                                                        Level {{ $i }}
                                                    </option>
                                                @endfor
                                            </select>
                                            
                                            <button class="btn btn-sm btn-warning">Save</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach --}}
                            @foreach($users as $user)
    @php
        $salary = $user->wallets->sum('amount');
    @endphp
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->full_name }}</td>
        <td>{{ $user->email }}</td>
        <td>₹{{ number_format($salary, 2) }}</td>
        <td>Level {{ $user->series_level }}</td>
        <td>--</td> {{-- Action column disabled --}}
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
    $(document).ready(function () {
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
