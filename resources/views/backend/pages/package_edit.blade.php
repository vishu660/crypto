@extends('backend.layouts.admin')

@section('title', 'Edit Package')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Edit Package</h5>
                    <form method="POST" action="{{ route('package.update', $package->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Package Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $package->name) }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Investment Amount*</label>
                            <input type="number" class="form-control" name="investment_amount" value="{{ old('investment_amount', $package->investment_amount) }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ROI(%)*</label>
                            <input type="number" class="form-control" name="roi_percent" value="{{ old('roi_percent', $package->roi_percent) }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Validity Days*</label>
                            <input type="number" class="form-control" name="validity_days" value="{{ old('validity_days', $package->validity_days) }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Direct Bonus(%)*</label>
                            <input type="number" class="form-control" name="direct_bonus_percent" value="{{ old('direct_bonus_percent', $package->direct_bonus_percent) }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Referral Code (Admin)</label>
                            <input type="text" class="form-control" name="referral_code" 
                                value="{{ auth()->check() && auth()->user()->referral_id ? auth()->user()->referral_id : (auth()->check() ? auth()->user()->id : '') }}" 
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Type of Investment Days*</label>
                            <select name="type_of_investment_days" class="form-select" id="typeOfInvestmentDays">
                                <option value="daily" {{ old('type_of_investment_days', $package->type_of_investment_days) == 'daily' ? 'selected' : '' }}>Daily</option>
                                <option value="weekly" {{ old('type_of_investment_days', $package->type_of_investment_days) == 'weekly' ? 'selected' : '' }}>Weekly</option>
                                <option value="monthly" {{ old('type_of_investment_days', $package->type_of_investment_days) == 'monthly' ? 'selected' : '' }}>Monthly</option>
                            </select>
                        </div>
                        <div class="mb-3" id="dailyDaysDiv" style="display:none;">
                            <label class="form-label">Select Days:</label>
                            <div class="row">
                                @foreach(['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'] as $day)
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="daily_days[]" value="{{ $day }}"
                                            {{ is_array(old('daily_days', $package->daily_days)) && in_array($day, old('daily_days', $package->daily_days)) ? 'checked' : '' }}>
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
                                    <option value="{{ $day }}" {{ old('weekly_day', $package->weekly_day) == $day ? 'selected' : '' }}>{{ $day }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3" id="monthlyDateDiv" style="display:none;">
                            <label class="form-label">Select Date (1-31):</label>
                            <select name="monthly_date" class="form-select">
                                @for($i=1; $i<=31; $i++)
                                    <option value="{{ $i }}" {{ old('monthly_date', $package->monthly_date) == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="is_active" value="1" {{ old('is_active', $package->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label">Active</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Update Package</button>
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
    </div>
</div>
@endsection 