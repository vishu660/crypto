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

    .badge {
        font-size: 13px;
        padding: 5px 8px;
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

    {{-- Series Salary Edit --}}
    <div class="row mt-4">
        <div class="col-12">
            <div class="series-edit-box">
                <h5 class="text-white mb-3">Edit Series Level Salary</h5>
                <form action="{{ route('admin.series.salary.update') }}" method="POST" class="row g-3">
                    @csrf
                    @method('PUT')
                    @foreach($series_levels->sortBy('level') as $level)
                        <div class="col-md-6 mb-3">
                            <label>Level {{ $level->level }} Amount (₹)</label>
                            <input type="number" name="amounts[{{ $level->level }}]" step="0.01" value="{{ $level->amount }}" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Period (Months)</label>
                            <input type="number" name="period_months[{{ $level->level }}]" step="1" value="{{ $level->period_months }}" class="form-control" required>
                        </div>
                    @endforeach
                    <div class="col-md-12 mt-3">
                        <button class="btn btn-success">Update Series Salary</button>
                        <a href="{{ route('admin.series.salary.create') }}" class="btn btn-info ms-2">+ Add New Level</a>
                    </div>
                </form>
            </div>

            <div class="mt-4">
                <h6 class="text-white">Current Series Level Rates:</h6>
                <ul class="p-0" style="list-style: none;">
                    @foreach($series_levels->sortBy('level') as $level)
                        <li style="background: #101820; color: #fff; border: 2px dashed #00fff7; border-radius: 10px; margin-bottom: 14px; padding: 12px 18px;">
                            Level {{ $level->level }}: ₹{{ number_format($level->amount, 2) }} for {{ $level->period_months }} months
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    {{-- Referral Setting --}}
    <div class="series-edit-box mt-4">
        <h5 class="text-white mb-3">Referral Qualification Setting</h5>
        <form action="{{ route('admin.referral.setting.update') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label class="text-white">Required Direct Referrals to Qualify</label>
                <input type="number" name="required_referrals" value="{{ $referral_setting->required_referrals ?? 2 }}" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="text-white">Referral Time Limit (in Hours)</label>
                <input type="number" name="qualification_time_hours" value="{{ $referral_setting->qualification_time_hours ?? 24 }}" class="form-control" required>
            </div>
            <div class="col-md-12 mt-3">
                <button class="btn btn-success">Update Qualification</button>
            </div>
        </form>
    </div>

    {{-- Salary Table --}}
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
                                <th>Date</th>
                                <th>Total Salary (ROI)</th>
                                <th>Direct Referrals</th>
                                <th>Qualified</th>
                                <th>Series Level</th>
                                <th>Salary Paid?</th>
                                <th>Level Duration</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                @php
                                    $salary = $user->wallets->sum('amount');
                                    $referrals = $user->directReferrals;
                                    $required = $referral_setting->required_referrals ?? 2;
                                    $timeLimit = $referral_setting->qualification_time_hours ?? 24;
                                    $qualified = false;

                                    if ($referrals->count() >= $required) {
                                        $firstRefs = $referrals->sortBy('created_at')->take($required);
                                        $first = $firstRefs->first()?->created_at;
                                        $last = $firstRefs->last()?->created_at;
                                        if ($first && $last && $last->diffInHours($first) <= $timeLimit) {
                                            $qualified = true;
                                        }
                                    }
                                @endphp
                                <tr id="user-row-{{ $user->id }}">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ optional($user->created_at)->format('d-m-Y') }}</td>
                                    <td>₹{{ number_format($salary, 2) }}</td>
                                    <td>{{ $referrals->count() }}</td>
                                    <td>
                                        @if($qualified)
                                            <span class="badge bg-success">Qualified</span>
                                        @else
                                            <span class="badge bg-danger">Not Qualified</span>
                                        @endif
                                    </td>
                                    <td>{{ $user->series_level }} Level</td>
                                    <td>
                                        @if($user->series_salary_paid_at)
                                            <span class="badge bg-success">Paid</span>
                                        @else
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @endif
                                    </td>
                                    <td>
                                        @php $levelData = $series_levels->where('level', $user->series_level)->first(); @endphp
                                        @if($levelData)
                                            <br><small style="color: #000;">Time: {{ $levelData->period_months }} Months</small>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-info" onclick="showEditLevel({{ $user->id }})">Edit</button>
                                    </td>
                                </tr>
                                <tr id="edit-row-{{ $user->id }}" style="display:none;">
                                    <td colspan="10">
                                        <form method="POST" action="{{ route('admin.series.update', $user->id) }}" class="d-flex align-items-center flex-wrap" style="gap: 10px;">
                                            @csrf
                                            @method('PUT')
                                            <label class="me-2 mb-0 text-white">Level:</label>
                                            <select name="series_level" class="form-select w-auto me-2" required onchange="updateTime(this, {{ $user->id }})">
                                                @for($i = 0; $i <= 10; $i++)
                                                    <option value="{{ $i }}" {{ intval($user->series_level) === $i ? 'selected' : '' }}>Level {{ $i }}</option>
                                                @endfor
                                            </select>
                                            <small id="time-display-{{ $user->id }}" class="ms-2" style="color: black;">
                                                Time: {{ $series_levels->where('level', $user->series_level)->first()->period_months ?? 0 }} Months
                                            </small>
                                            <button type="submit" class="btn btn-success btn-sm me-2">Save</button>
                                            <button type="button" class="btn btn-secondary btn-sm" onclick="cancelEditLevel({{ $user->id }})">Cancel</button>
                                        </form>
                                    </td>
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
    const seriesLevelData = @json($series_levels->pluck('period_months', 'level'));

    function updateTime(selectElement, userId) {
        const selectedLevel = selectElement.value;
        const time = seriesLevelData[selectedLevel] ?? 0;
        document.getElementById('time-display-' + userId).innerText = 'Time: ' + time + ' Months';
    }

    function showEditLevel(userId) {
        document.getElementById('user-row-' + userId).style.display = 'none';
        document.getElementById('edit-row-' + userId).style.display = 'table-row';
    }

    function cancelEditLevel(userId) {
        document.getElementById('edit-row-' + userId).style.display = 'none';
        document.getElementById('user-row-' + userId).style.display = 'table-row';
    }

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
