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
        font-size: 0.92rem;
    }
    .table thead th {
        color: #00fff7;
    }
    .table td, .table th {
        border-color: #00fff733;
        padding-top: 0.35rem;
        padding-bottom: 0.35rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
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
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Hide number input spinners for Firefox */
    input[type="number"] {
        -moz-appearance: textfield;
    }
    .custom-pagination {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }
    .custom-pagination .pagination {
        background: transparent;
        border-radius: 6px;
        padding: 0;
        box-shadow: none;
        gap: 6px;
    }
    .custom-pagination .page-item .page-link {
        color: #00fff7;
        background: #181f2a;
        border: 1px solid #00fff7;
        margin: 0 2px;
        border-radius: 4px;
        min-width: 38px;
        min-height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 500;
        font-size: 1.1rem;
        transition: background 0.2s, color 0.2s;
    }
    .custom-pagination .page-item.active .page-link {
        background: #00fff7;
        color: #181f2a;
        border-color: #00fff7;
    }
    .custom-pagination .page-item.disabled .page-link {
        color: #00fff780;
        border-color: #00fff780;
        background: #232b38;
    }
    .custom-pagination .page-link:hover {
        background: #00fff71a;
        color: #00fff7;
    }
    /* Tailwind pagination override */
    nav[role="navigation"] {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }
    nav[role="navigation"] > div {
        display: flex !important;
        align-items: center !important;
        gap: 0 !important;
    }
    nav[role="navigation"] > div > span,
    nav[role="navigation"] > div > a {
        background: #181f2a !important;
        color: #00fff7 !important;
        border: 1px solid #00fff7 !important;
        border-radius: 4px !important;
        margin: 0 2px !important;
        min-width: 38px;
        min-height: 38px;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        font-weight: 500;
        font-size: 1.1rem;
        transition: background 0.2s, color 0.2s;
        box-shadow: none !important;
        padding: 0 !important;
        vertical-align: middle !important;
    }
    nav[role="navigation"] > div > span[aria-current="page"] {
        background: #00fff7 !important;
        color: #181f2a !important;
        border-color: #00fff7 !important;
    }
    nav[role="navigation"] > div > span[aria-disabled="true"] {
        color: #00fff780 !important;
        border-color: #00fff780 !important;
        background: #232b38 !important;
    }
    nav[role="navigation"] > div > a:hover {
        background: #00fff71a !important;
        color: #00fff7 !important;
    }
    nav[role="navigation"] svg {
        width: 20px !important;
        height: 20px !important;
        color: #00fff7 !important;
        stroke: #00fff7 !important;
        fill: none !important;
        display: block;
        margin: auto;
    }
    nav[role="navigation"] > div > span[aria-disabled="true"] svg {
        color: #00fff780 !important;
        stroke: #00fff780 !important;
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
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
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
                            <input type="text" class="form-control" name="roi_percent" value="{{ old('roi_percent') }}" placeholder="Enter ROI Percentage">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Validity Days*</label>
                            <input type="number" class="form-control" name="validity_days" value="{{ old('validity_days') }}" placeholder="Enter Validity Days">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" name="enableBreackDown" value="1" {{ old('enableBreackDown', $package->enableBreackDown ?? false) ? 'checked' : '' }}>
                            <label class="form-check-label" for="enableBreackDown">Enable  Breakdown</label>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">referral Income</label>
                            <input type="text" class="form-control" name="referral_income" value="{{  old('referral_income') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Referral Show Income</label>
                            <input type="text" class="form-control" name="referral_show_income" value="{{ old('referral_show_income') }}">
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="is_show_active" value="1" {{ old('is_show_active') ? 'checked' : '' }}>
                            <label class="form-check-label">Show Active</label>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}>
                            <label class="form-check-label"> Plan Active</label>
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
                </div>
            </div>
        </div>

        <!-- Package Details Table -->
        <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Package Name</th>
                                <th>Investment Amount</th>
                                <th>ROI (%)</th>
                                <th>Validity Days</th>
                                <th>Direct Bonus (%)</th>
                                <th>Referral Income</th>
                                <th>Referral Show Income</th> <!-- ✅ New -->
                                <th>Show Active</th>          <!-- ✅ New -->
                                <th>Breakdown</th>            <!-- ✅ New -->
                                <th>Status</th>
                                <th>Type of Investment Days</th>
                                <th>Selected Days/Date</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tbody>
                                @foreach($packages as $package)
                                <tr>
                                    <td>{{ $package->name }}</td>
                                    <td>USDT {{ $package->investment_amount }}</td>
                                    <td>{{ $package->roi_percent }} %</td>
                                    <td>{{ $package->validity_days }}</td>
                                    <td>{{ $package->direct_bonus_percent }} %</td>
                                    <td>{{ $package->referral_income }}</td>
                                    <td>{{ $package->referral_show_income ?? '-' }}</td> <!-- ✅ Referral Show Income -->
                                   
                                    <td>
                                        <span class="badge bg-{{ $package->enableBreackDown ? 'success' : 'secondary' }}">
                                            {{ $package->enableBreackDown ? 'Yes' : 'No' }}
                                        </span>
                                    </td> <!-- ✅ Breakdown -->
                                    <td>
                                        <span class="badge bg-{{ $package->is_active ? 'success' : 'danger' }}">
                                            {{ $package->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>{{ ucfirst($package->type_of_investment_days) }}</td>
                                    <td>
                                        @if($package->type_of_investment_days == 'daily')
                                            {{ is_array($package->daily_days ?? null) ? implode(', ', $package->daily_days) : ($package->daily_days ?? '-') }}
                                        @elseif($package->type_of_investment_days == 'weekly')
                                            {{ $package->weekly_day ?? '-' }}
                                        @elseif($package->type_of_investment_days == 'monthly')
                                            {{ $package->monthly_date ?? '-' }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($package->created_at)->format('d-m-Y h:i:a') }}</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="{{ route('package.edit', $package->id) }}" class="btn btn-sm btn-outline-info me-1">
                                            <i class="bi bi-pencil-square"></i> 
                                        </a>
                                        <form action="{{ route('package.destroy', $package->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this package?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                
                        
                        @if($packages->isEmpty())
                            <tr>
                                <td colspan="11" class="text-center text-muted">No packages found.</td>
                            </tr>
                        @endif
                        
                        </tbody>
                    </table>
                </div>

                {{-- Pagination (optional) --}}
                @if($packages->hasPages())
                    <div class="custom-pagination">
                        {{ $packages->appends(request()->query())->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Wrap everything in a try-catch to prevent errors from breaking the page
    try {
        const typeSelect = document.getElementById('typeOfInvestmentDays');
        const dailyDiv = document.getElementById('dailyDaysDiv');
        const weeklyDiv = document.getElementById('weeklyDayDiv');
        const monthlyDiv = document.getElementById('monthlyDateDiv');

        // Check if all required elements exist
        if (!typeSelect) {
            console.warn('typeOfInvestmentDays element not found');
            return;
        }
        if (!dailyDiv) {
            console.warn('dailyDaysDiv element not found');
            return;
        }
        if (!weeklyDiv) {
            console.warn('weeklyDayDiv element not found');
            return;
        }
        if (!monthlyDiv) {
            console.warn('monthlyDateDiv element not found');
            return;
        }

        function showInvestmentFields() {
            try {
                const type = typeSelect.value;
                
                // Hide all divs first
                dailyDiv.style.display = 'none';
                weeklyDiv.style.display = 'none';
                monthlyDiv.style.display = 'none';
                
                // Show the relevant div based on selection
                switch(type) {
                    case 'daily':
                        dailyDiv.style.display = 'block';
                        break;
                    case 'weekly':
                        weeklyDiv.style.display = 'block';
                        break;
                    case 'monthly':
                        monthlyDiv.style.display = 'block';
                        break;
                }
            } catch (error) {
                console.error('Error in showInvestmentFields:', error);
            }
        }

        // Add event listener with error handling
        try {
            typeSelect.addEventListener('change', showInvestmentFields);
            // Initial call to show correct fields on page load
            showInvestmentFields();
        } catch (error) {
            console.error('Error adding event listener:', error);
        }

    } catch (error) {
        console.error('Error in DOMContentLoaded:', error);
    }

    // Fix pagination issues by ensuring proper DOM structure
    try {
        // Wait a bit for pagination to render
        setTimeout(function() {
            const paginationNav = document.querySelector('nav[role="navigation"]');
            if (paginationNav) {
                // Ensure pagination has proper structure
                const paginationDiv = paginationNav.querySelector('div');
                if (paginationDiv && !paginationDiv.parentElement) {
                    console.warn('Pagination structure issue detected');
                }
            }
        }, 100);
    } catch (error) {
        console.error('Error handling pagination:', error);
    }
});

// Global error handler to catch any remaining parentElement errors
window.addEventListener('error', function(e) {
    if (e.message && e.message.includes('parentElement')) {
        console.warn('Caught parentElement error:', e.message);
        e.preventDefault(); // Prevent the error from breaking the page
        return true;
    }
});
</script>
@endpush
@endsection