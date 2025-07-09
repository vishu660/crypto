@extends('backend.layouts.admin')

@section('title', 'E-Pin')

@push('styles')
<style>
    .dropdown-menu {
        background-color: #ffffff !important;
    }
    .dropdown-menu .dropdown-item {
        color: #000 !important;
    }
    .dropdown-menu .dropdown-item:hover {
        background-color: #f4f4f5 !important;
    }
    input.form-control,
    select.form-select {
        background-color: #ffffff !important;
        color: #000000 !important;
        border: 1px solid #ced4da;
    }
    input.form-control::placeholder {
        color: #6c757d !important;
    }
    .form-label {
        font-weight: 600;
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Active E-Pins</h5>
                    <h3>{{ $epins->where('status', 'active')->count() ?? 0 }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">E-Pin Balance</h5>
                    <h3>$ {{ number_format($epins->where('status', 'active')->sum('amount') ?? 0, 2) }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mb-4">
        <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#epinPurchaseModal">
            <i class="bi bi-plus-lg"></i> Generate E-pin
        </button>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>E-pin</th>
                            <th>Plan</th>
                            <th>Status</th>
                            <th>Expiry Date</th>
                            <th>Created Date</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($epins as $epin)
                            <tr>
                                <td>{{ $epin->code }}</td>
                                <td>{{ $epin->plan }}</td>
                                <td>
                                    @if($epin->status == 'active')
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-secondary">Used</span>
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($epin->expiry_date)->format('d M Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($epin->created_at)->format('d M Y h:i A') }}</td> {{-- ✅ Added Line --}}

                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No E-Pins Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- E-pin Purchase Offcanvas --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="epinPurchaseModal">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Generate E-pin</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <form method="POST" action="{{ route('epin.purchase.submit') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Plan</label>
            <select name="plan" class="form-select" required>
                <option value="">Select Plan</option>
                @foreach($packages as $package)
                    <option value="{{ $package->name }}">{{ $package->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Count</label>
            <input type="number" name="count" class="form-control" required min="1" placeholder="Enter number of E-pins">
        </div>
        <div class="mb-3">
            <label class="form-label">PIN Prefix (2 characters)</label>
            <input type="text" name="prefix" class="form-control" maxlength="2" placeholder="Ex: AB" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Expiry Date</label>
            <div class="d-flex align-items-center">
                <input type="date" name="expiry_date" id="expiry-date-input" class="form-control me-2" required>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="enable-expiry-date" checked>
                    <label class="form-check-label" for="enable-expiry-date">
                        Enable Date
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-info text-white w-100">Generate E-pins</button>
    </form>
  </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function () {
    $('#enable-expiry-date').on('change', function() {
        if ($(this).is(':checked')) {
            $('#expiry-date-input').prop('disabled', false);
        } else {
            $('#expiry-date-input').val('').prop('disabled', true);
        }
    });
});
</script>
@endpush
