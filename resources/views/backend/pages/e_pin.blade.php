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

    .list-group-item {
        cursor: pointer;
    }

    #user-search-result {
        position: absolute;
        width: 100%;
        z-index: 1000;
        max-height: 200px;
        overflow-y: auto;
        background: #fff;
        border: 1px solid #ced4da;
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-2"><i class="bi bi-credit-card-2-front" style="font-size:2rem;"></i></div>
                    <h5 class="card-title">Active E-Pins</h5>
                    <h3>{{ $epins->where('status', 'active')->count() ?? 0 }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-2"><i class="bi bi-wallet2" style="font-size:2rem;"></i></div>
                    <h5 class="card-title">E-Pin Balance</h5>
                    <h3>$ {{ number_format($epins->where('status', 'active')->sum('amount') ?? 0, 2) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mb-2"><i class="bi bi-clock-history" style="font-size:2rem;"></i></div>
                    <h5 class="card-title">Pending Request</h5>
                    <h3>0</h3>
                </div>
            </div>
        </div>
    </div>

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
                        <div class="col-md-2">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                       
                        <div class="col-md-2">
                            <select class="form-select" name="status">
                                <option value="">Status</option>
                                <option value="active">Active</option>
                                <option value="used">Used</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">Search</button>
                        </div>
                        <div class="col-md-2">
                            <button type="reset" class="btn btn-light w-100">Reset</button>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th><input type="checkbox" disabled></th>
                                    <th>Allocated Member</th>
                                    <th>E-pin</th>
                                    <th>Amount</th>
                                    <th>Balance Amount</th>
                                    <th>Status</th>
                                    <th>Expiry Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($epins as $epin)
                                    <tr>
                                        <td><input type="checkbox" disabled></td>
                                        <td>{{ $epin->user->full_name ?? 'N/A' }}</td>
                                        <td>{{ $epin->code }}</td>
                                        <td>₹{{ number_format($epin->amount, 2) }}</td>
                                        <td>₹{{ number_format($epin->amount, 2) }}</td>
                                        <td>
                                            @if($epin->status == 'active')
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-secondary">Used</span>
                                            @endif
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($epin->expiry_date)->format('d M Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            <div style="padding:40px 0;">
                                                <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" alt="No data" width="60" style="opacity:0.5;">
                                                <div class="mt-2" style="color:#888;">No data found...</div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pending-request" role="tabpanel">
            <div class="card">
                <div class="card-body text-center text-muted">
                    <p>No pending requests found.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- E-pin Purchase Offcanvas --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="epinPurchaseModal">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">E-pin Generate</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <form method="POST" action="{{ route('epin.purchase.submit') }}">
        @csrf

        <div class="mb-3" style="position:relative;">
            <label class="form-label">Search User</label>
            <input type="text" id="user-search" class="form-control" placeholder="Search by name or username" autocomplete="off" required>
            <input type="hidden" name="user_id" id="selected-user-id">
            <div id="user-search-result" class="list-group mt-1" style="position:absolute; width:100%; z-index:1000;"></div>
        </div>

        <div class="mb-3">
            <label class="form-label">Amount</label>
            <input type="number" name="amount" class="form-control" required>
        </div>

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
            <input type="number" name="count" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Expiry Date</label>
            <input type="date" name="expiry_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Generate E-pins</button>
    </form>
  </div>
</div>

{{-- E-pin Transfer Offcanvas --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="epinTransferModal">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">E-pin Transfer</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <form method="POST" action="{{ route('admin.epin.transfer.submit') }}">
        @csrf

        <div class="mb-3" style="position:relative;">
            <label class="form-label">Search Email</label>
            <input type="text" id="email-search" class="form-control" placeholder="Search by email" autocomplete="off" required>
            <input type="hidden" name="from_username" id="selected-email">
            <div id="email-search-result" class="list-group mt-1" style="position:absolute; width:100%; z-index:1000;"></div>
        </div>

        <div class="mb-3">
            <label class="form-label">E-pin Code</label>
            <input type="text" name="epin_code" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Transfer</button>
    </form>
  </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    // User search for purchase
    $('#user-search').on('input', function () {
        let query = $(this).val();
        if (query.length >= 1) {
            $.ajax({
                url: '{{ route('admin.user.search') }}',
                data: { q: query },
                success: function (data) {
                    $('#user-search-result').empty();
                    if (data.length > 0) {
                        data.forEach(function (user) {
                            $('#user-search-result').append(`
                                <a href="#" class="list-group-item list-group-item-action" data-id="${user.id}">
                                    <strong>${user.full_name}</strong><br>
                                    <small>Email: ${user.email} | Referral ID: ${user.referral_id}</small>
                                </a>
                            `);
                        });
                    } else {
                        $('#user-search-result').append('<div class="list-group-item">No users found</div>');
                    }
                }
            });
        } else {
            $('#user-search-result').empty();
        }
    });
    $('#user-search-result').on('click', '.list-group-item-action', function (e) {
        e.preventDefault();
        $('#user-search').val($(this).text());
        $('#selected-user-id').val($(this).data('id'));
        $('#user-search-result').empty();
    });

    // Email search for transfer
    $('#email-search').on('input', function () {
        let query = $(this).val();
        if (query.length >= 1) {
            $.ajax({
                url: '{{ route('admin.user.search') }}',
                data: { q: query },
                success: function (data) {
                    $('#email-search-result').empty();
                    if (data.length > 0) {
                        data.forEach(function (user) {
                            $('#email-search-result').append(`
                                <a href="#" class="list-group-item list-group-item-action" data-email="${user.email}">${user.email}</a>
                            `);
                        });
                    } else {
                        $('#email-search-result').append('<div class="list-group-item">No users found</div>');
                    }
                }
            });
        } else {
            $('#email-search-result').empty();
        }
    });
    $('#email-search-result').on('click', '.list-group-item-action', function (e) {
        e.preventDefault();
        $('#email-search').val($(this).text());
        $('#selected-email').val($(this).data('email'));
        $('#email-search-result').empty();
    });
});
// Global error handler to suppress parentElement errors
window.addEventListener('error', function(event) {
    if (event.message && event.message.includes('parentElement')) {
        event.preventDefault();
    }
});
</script>
@endpush

