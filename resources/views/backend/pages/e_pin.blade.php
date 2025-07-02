@extends('backend.layouts.admin')

@section('title', 'E-Pin')

@section('content')
<div class="container-fluid">
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

    <ul class="nav nav-tabs mb-3" id="epinTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="epin-list-tab" data-bs-toggle="tab" data-bs-target="#epin-list" type="button" role="tab" aria-controls="epin-list" aria-selected="true">E-pin List</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pending-request-tab" data-bs-toggle="tab" data-bs-target="#pending-request" type="button" role="tab" aria-controls="pending-request" aria-selected="false">Pending Request</button>
        </li>
    </ul>
    <div class="tab-content" id="epinTabContent">
        <div class="tab-pane fade show active" id="epin-list" role="tabpanel" aria-labelledby="epin-list-tab">
            <div class="card">
                <div class="card-body">
                    <form class="row g-2 mb-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="Epin">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="Amount">
                        </div>
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
                                            <img src="{{ asset('assets/images/no-data.svg') }}" alt="No data" style="width:60px;opacity:0.5;">
                                            <div class="mt-2 text-muted">No data found...</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>Showing 0 to 0 of 0 entries</div>
                        <div>
                            <button class="btn btn-light btn-sm" disabled>&lt;</button>
                            <button class="btn btn-light btn-sm" disabled>&gt;</button>
                        </div>
                        <div>
                            Show
                            <select class="form-select d-inline-block w-auto" style="width:60px;">
                                <option>10</option>
                                <option>25</option>
                                <option>50</option>
                            </select>
                            entries
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pending-request" role="tabpanel" aria-labelledby="pending-request-tab">
            <!-- Pending Request Content Here -->
        </div>
    </div>
</div>
@endsection