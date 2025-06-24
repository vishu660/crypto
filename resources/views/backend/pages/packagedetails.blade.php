@extends('backend.layouts.admin')

@section('title', 'Package Details')

@push('styles')
<style>
    h4, .card-title {
        color: #00fff7;
    }
    .card {
        background-color: #181f2a;
        border: 1px solid #00fff7;
        color: #fff;
    }
    .form-control, .form-select {
        background-color: #101820;
        border: 1px solid #00fff7;
        color: #fff;
    }
    .form-control:focus, .form-select:focus {
        background-color: #101820;
        border-color: #00e0d5;
        color: #fff;
        box-shadow: 0 0 0 0.2rem rgba(0, 255, 247, 0.25);
    }
    .form-control::placeholder {
        color: #888;
    }
    .btn-primary {
        background-color: #00fff7;
        border-color: #00fff7;
        color: #101820;
        font-weight: 600;
    }
    .btn-primary:hover {
        background-color: #00e0d5;
        border-color: #00d0c5;
        color: #101820;
    }
    .table {
        --bs-table-bg: transparent;
        --bs-table-striped-bg: #2a3442;
        --bs-table-hover-bg: #232b38;
        --bs-table-color: #fff;
        --bs-table-border-color: #00fff733;
        color: var(--bs-table-color);
        border-color: var(--bs-table-border-color);
    }
    .table thead th {
        color: #00fff7;
    }
    .table td, .table th {
        border-color: #00fff733;
    }
    .table-hover tbody tr:hover {
        background-color: #2a3442;
        color: #fff;
    }
    .table-hover tbody tr:hover > td,
    .table-hover tbody tr:hover > th {
        color: #fff;
    }
    .badge.bg-success {
        background-color: #28a745 !important;
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
            <div class="d-flex align-items-center mb-3">
                <h4 class="me-auto mb-0"><a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:underline;">Dashboard</a> / Package / Package Details</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Add New Package Form -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Add New Package</h5>

                    <form method="POST" action="{{ route('package.store') }}">
                        @csrf

                        <input type="hidden" name="id" value="{{ old('id') }}">
                        <input type="hidden" name="consultation_income_debit" value="0">
                        <input type="hidden" name="consultation_test_user_debit" value="0">

                        <div class="mb-3">
                            <label class="form-label">Package Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Package Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Investment Amount*</label>
                            <input type="number" class="form-control" name="investment_amount" value="{{ old('investment_amount') }}" placeholder="Enter Package Amount">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ROI(%)*</label>
                            <input type="number" class="form-control" name="roi_percent" value="{{ old('roi_percent') }}" placeholder="Enter ROI Percentage">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Validity Days*</label>
                            <input type="number" class="form-control" name="validity_days" value="{{ old('validity_days') }}" placeholder="Enter Validity Days">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Direct Bonus(%)*</label>
                            <input type="number" class="form-control" name="direct_bonus_percent" value="{{ old('direct_bonus_percent') }}" placeholder="Enter Direct Bonus(%)">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">IBOT Investment*</label>
                            <input type="number" class="form-control" name="ibot_investment" value="{{ old('ibot_investment') }}" placeholder="Enter IBOT Investment">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}>
                            <label class="form-check-label">Active</label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type of Investment Days*</label>
                            <select name="type_of_investment_days" class="form-select" id="typeOfInvestmentDays">
                                <option value="daily" {{ old('type_of_investment_days') == 'daily' ? 'selected' : '' }}>Daily</option>
                                <option value="weekly" {{ old('type_of_investment_days') == 'weekly' ? 'selected' : '' }}>Weekly</option>
                                <option value="monthly" {{ old('type_of_investment_days') == 'monthly' ? 'selected' : '' }}>Monthly</option>
                            </select>
                        </div>

                        <div class="mb-3" id="dailyDaysDiv" style="display:none;">
                            <label class="form-label">Select Days:</label>
                            <div class="row">
                                @foreach(['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] as $day)
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="daily_days[]" value="{{ $day }}"
                                            {{ is_array(old('daily_days')) && in_array($day, old('daily_days')) ? 'checked' : '' }}>
                                            <label class="form-check-label">{{ $day }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-3" id="weeklyDayDiv" style="display:none;">
                            <label class="form-label">Select One Day:</label>
                            <select name="weekly_day" class="form-select">
                                @foreach(['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'] as $day)
                                    <option value="{{ $day }}" {{ old('weekly_day') == $day ? 'selected' : '' }}>{{ $day }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3" id="monthlyDateDiv" style="display:none;">
                            <label class="form-label">Select Date (1-31):</label>
                            <select name="monthly_date" class="form-select">
                                @for($i=1; $i<=31; $i++)
                                    <option value="{{ $i }}" {{ old('monthly_date') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3">Proceed</button>
                    </form>

                    <script>
                        function showInvestmentFields() {
                            var type = document.getElementById('typeOfInvestmentDays').value;
                            document.getElementById('dailyDaysDiv').style.display = (type === 'daily') ? 'block' : 'none';
                            document.getElementById('weeklyDayDiv').style.display = (type === 'weekly') ? 'block' : 'none';
                            document.getElementById('monthlyDateDiv').style.display = (type === 'monthly') ? 'block' : 'none';
                        }
                        document.getElementById('typeOfInvestmentDays').addEventListener('change', showInvestmentFields);
                        window.onload = showInvestmentFields;
                    </script>
                </div>
            </div>
        </div>

        <!-- Package Details Table -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <label for="entries" class="form-label me-2">Show</label>
                            <select class="form-select form-select-sm me-2" id="entries" style="width: 70px;">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option selected value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span class="me-3">entries</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="date" class="form-control form-control-sm me-2">
                            <span class="me-2">to</span>
                            <input type="date" class="form-control form-control-sm me-2">
                            <button class="btn btn-sm btn-outline-info me-3"><i class="bi bi-search"></i></button>
                        </div>
                        <div class="d-flex align-items-center">
                             <label for="search" class="form-label me-2">Search:</label>
                             <input type="search" class="form-control form-control-sm" id="search">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Package Amount</th>
                                    <th scope="col">ROI</th>
                                    <th scope="col">Direct Bonus</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>250</td>
                                    <td>5 %</td>
                                    <td>5 %</td>
                                    <td>20-06-2025 02:32:pm</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                 <tr>
                                    <td>500</td>
                                    <td>6 %</td>
                                    <td>5 %</td>
                                    <td>21-02-2024 01:42:pm</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                <tr>
                                    <td>699</td>
                                    <td>2 %</td>
                                    <td>10 %</td>
                                    <td>30-03-2025 07:44:pm</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                <tr>
                                    <td>1500</td>
                                    <td>7 %</td>
                                    <td>5 %</td>
                                    <td>21-02-2024 01:42:pm</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                <tr>
                                    <td>3345</td>
                                    <td>34 %</td>
                                    <td>345 %</td>
                                    <td>14-06-2025 04:13:pm</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                <tr>
                                    <td>10000</td>
                                    <td>9 %</td>
                                    <td>5 %</td>
                                    <td>21-02-2024 01:42:pm</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                 <tr>
                                    <td>50000</td>
                                     <td>10 %</td>
                                    <td>5 %</td>
                                    <td>21-02-2024 01:42:pm</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                <tr>
                                    <td>100000</td>
                                    <td>12 %</td>
                                    <td>5 %</td>
                                    <td>21-02-2024 01:42:pm</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                                <tr>
                                    <td>500000</td>
                                    <td>8 %</td>
                                    <td>5 %</td>
                                    <td>27-02-2024 12:04:pm</td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td><button class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection