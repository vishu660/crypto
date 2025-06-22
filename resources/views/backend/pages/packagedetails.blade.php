@extends('backend.layouts.admin')

@section('title', 'Package Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex align-items-center mb-3">
                <h4 class="me-auto mb-0">Dashboard / Package / Package Details</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Add New Package Form -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Add New Package</h5>
                    <form>
                        <div class="mb-3">
                            <label for="packageAmount" class="form-label">Package Amount*</label>
                            <input type="text" class="form-control" id="packageAmount" placeholder="Enter Package Amount">
                        </div>
                        <div class="mb-3">
                            <label for="roiPercentage" class="form-label">ROI(%)*</label>
                            <input type="text" class="form-control" id="roiPercentage" placeholder="Enter ROI Precentage">
                        </div>
                        <div class="mb-3">
                            <label for="directBonus" class="form-label">Direct Bonus(%)*</label>
                            <input type="text" class="form-control" id="directBonus" placeholder="Enter Direct Bonus(%)">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Proceed</button>
                    </form>
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