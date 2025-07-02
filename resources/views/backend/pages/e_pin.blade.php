@extends('backend.layouts.admin')

@section('title', 'E-Pin')

@push('styles')
<style>
    /* Dropdown styles */
    .dropdown-menu {
        background-color: #ffffff !important;
    }

    .dropdown-menu .dropdown-item {
        color: #000 !important;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #f4f4f5 !important;
    }

    /* Input field styles */
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

    <!-- Dropdown -->
    <div class="d-flex justify-content-end mb-4">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="addEpinDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-plus-lg"></i> Add E-pin
            </button>
            <ul class="dropdown-menu" aria-labelledby="addEpinDropdown">
                <li><a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#epinTransferModal">E-pin Transfer</a></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#epinPurchaseModal">E-pin Purchase</a></li>
            </ul>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-2">
                        <i class="bi bi-envelope fa-2x text-primary"></i>
                    </div>
                    <h6 class="mb-1">Active E-Pins</h6>
                    <h3 class="mb-0">0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-2">
                        <i class="bi bi-camera fa-2x text-primary"></i>
                    </div>
                    <h6 class="mb-1">E-Pin Balance</h6>
                    <h3 class="mb-0 text-success">$ 0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-2">
                        <i class="bi bi-clock fa-2x text-primary"></i>
                    </div>
                    <h6 class="mb-1">Pending Request</h6>
                    <h3 class="mb-0">0</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Tabs -->
    <ul class="nav nav-tabs mb-3" id="epinTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="epin-list-tab" data-bs-toggle="tab" data-bs-target="#epin-list" type="button" role="tab">E-pin List</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pending-request-tab" data-bs-toggle="tab" data-bs-target="#pending-request" type="button" role="tab">Pending Request</button>
        </li>
    </ul>

    <div class="tab-content" id="epinTabContent">
        <div class="tab-pane fade show active" id="epin-list" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <form class="row g-2 mb-3">
                        <div class="col-md-3"><input type="text" class="form-control" placeholder="Username"></div>
                        <div class="col-md-2"><input type="text" class="form-control" placeholder="Epin"></div>
                        <div class="col-md-2"><input type="text" class="form-control" placeholder="Amount"></div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option>Active</option>
                                <option>Used</option>
                                <option>Expired</option>
                            </select>
                        </div>
                        <div class="col-md-3 d-flex">
                            <button type="submit" class="btn btn-primary me-2">Search</button>
                            <button type="reset" class="btn btn-light">Reset</button>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th>Allocated Member</th>
                                    <th>E-pin</th>
                                    <th>Amount</th>
                                    <th>Balance Amount</th>
                                    <th>Status</th>
                                    <th>Expiry Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="7" class="text-center py-5">
                                        <div>
                                            <i class="fas fa-database" style="font-size: 48px; color: #aaa;"></i>
                                            <div class="mt-2 text-muted">No data found...</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pending-request" role="tabpanel">
            <!-- Pending Request Content Here -->
        </div>
    </div>
</div>

<!-- E-pin Transfer Offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="epinTransferModal">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">E-pin Transfer</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <form>
      <div class="mb-3">
        <label class="form-label">From Username <span class="text-danger">*</span></label>
        <input type="text" class="form-control mt-2" placeholder="Enter Username" required>
      </div>
      <div class="mb-3">
        <label class="form-label">To Username <span class="text-danger">*</span></label>
        <input type="text" class="form-control mt-2" placeholder="Enter Username" required>
      </div>
      <div class="mb-3">
        <label class="form-label">E-pin <span class="text-danger">*</span></label>
        <input type="text" class="form-control mt-2" placeholder="Enter E-pin" required>
      </div>
      <button type="submit" class="btn btn-primary">E-pin Transfer</button>
    </form>
  </div>
</div>

<!-- E-pin Purchase Offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="epinPurchaseModal">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">E-pin Purchase</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <form>
      <div class="mb-3">
        <label class="form-label">Username <span class="text-danger">*</span></label>
        <input type="text" class="form-control" placeholder="Enter Username" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Amount <span class="text-danger">*</span></label>
        <input type="number" class="form-control" placeholder="Enter Amount" required>
      </div>
      <div class="mb-3">
        <label class="form-label">E-Pin Count <span class="text-danger">*</span></label>
        <input type="number" class="form-control" placeholder="Enter Count" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Expiry Date <span class="text-danger">*</span></label>
        <input type="date" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">E-pin Purchase</button>
    </form>
  </div>
</div>
@endsection
