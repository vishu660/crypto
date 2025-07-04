@extends('backend.layouts.admin')

@section('title', 'Add Series Level')

@push('styles')
<style>
    .card {
        background-color: #181f2a;
        border: 2px solid #00fff7;
        border-radius: 12px;
        color: #fff;
    }
    .form-label {
        color: #00fff7;
    }
    .form-control {
        background-color: #101820;
        border: 1px solid #00fff7;
        color: #fff;
    }
    .form-control:focus {
        border-color: #00e0d5;
        box-shadow: 0 0 0 0.2rem rgba(0, 255, 247, 0.25);
    }
    .btn-primary {
        background-color: #00fff7;
        border: none;
        color: #101820;
        font-weight: bold;
    }
    .btn-primary:hover {
        background-color: #00e0d5;
        color: #101820;
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <p class="text-white">Dashboard / Earnings / <a href="{{ route('admin.series.salary.index') }}" class="text-info text-decoration-underline">Salary Report</a> / Add New Level</p>
            <h4 class="text-white">Add New Series Level</h4>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success text-dark">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card p-4">
                <form method="POST" action="{{ route('admin.series.salary.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Level Number</label>
                        <input type="number" name="level" class="form-control" required placeholder="Enter Level Number">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Amount (USDT)</label>
                        <input type="number" step="0.01" name="amount" class="form-control" required placeholder="Enter Salary Amount">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Period (in Months)</label>
                        <input type="number" name="period_months" class="form-control" required placeholder="Enter Period in Months">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Add Series Level</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
