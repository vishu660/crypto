@extends('user.main')
@section('content')
    <!-- Main Body-->
    <div class="d2c_main p-4">

<!-- Title -->
<div class="row align-items-center mb-4">
    <div class="col-2 d-block d-lg-none">
        <!-- Offcanvas Toggler -->
        <button class="btn btn-primary px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar" aria-controls="d2c_sidebar">
            <i class="fa fa-bars p-0"></i>
        </button>
        <!-- End:Offcanvas Toggler -->
    </div>
    <div class="col">
        <p class="mb-0">Welcome Back</p>
        <h4 class="text-capitalize fw-bold">Transaction</h4>
    </div>
</div>
<!-- End:Title -->

<div class="card bg-primary bg-opacity-10">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <h5 class="text-capitalize fw-semibold mb-4">Transactions</h5>
            </div>
            <div class="col">
                <ul class="nav nav-pills d2c_transaction_tab mb-3 justify-content-end" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-yearly-tab" data-bs-toggle="pill" data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly" aria-selected="true">Yearly</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly" aria-selected="false">Monthly</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-weekly-tab" data-bs-toggle="pill" data-bs-target="#pills-weekly" type="button" role="tab" aria-controls="pills-weekly" aria-selected="false">Weekly</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content d2c_transaction_table_content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
                <div class="table-responsive">
                    <table class="table align-middle" id="d2c_yearly_transaction_table">
                        <thead>
                            <tr>
                                <th style="min-width: 120px;">Transaction ID</th>
                                <th style="min-width: 120px;">Type</th>
                                <th style="min-width: 120px;">Purpose</th>
                                <th style="min-width: 120px;">Amount</th>
                                <th style="min-width: 120px;">Currency</th>
                                <th style="min-width: 120px;">Date</th>
                                <th style="min-width: 120px;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transactions as $transaction)
                                <tr>
                                    <td>TRX{{ str_pad($transaction->id, 6, '0', STR_PAD_LEFT) }}</td>
                                    <td class="{{ $transaction->type === 'credit' ? 'text-success' : 'text-danger' }}">
                                        {{ ucfirst($transaction->type) }}
                                    </td>
                                    <td>{{ ucfirst(str_replace('_', ' ', $transaction->purpose_of_payment)) }}</td>
                                    <td>USDT {{ number_format($transaction->amount, 2) }}</td>
                                    <td>{{ $transaction->currency }}</td>
                                    <td>{{ $transaction->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        @if($transaction->status === 'pending')
                                            <span class="text-warning">Pending</span>
                                        @elseif($transaction->status === 'success')
                                            <span class="text-success">Complete</span>
                                        @else
                                            <span class="text-danger">Failed</span>
                                        @endif
                                    </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No transactions found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                <div class="table-responsive">
                    <table class="table align-middle" id="d2c_monthly_transaction_table">
                        <thead>
                            <tr>
                                <th style="min-width: 120px;">Transaction ID</th>
                                <th style="min-width: 120px;">Type</th>
                                <th style="min-width: 120px;">Purpose</th>
                                <th style="min-width: 120px;">Amount</th>
                                <th style="min-width: 120px;">Currency</th>
                                <th style="min-width: 120px;">Date</th>
                                <th style="min-width: 120px;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transactions->where('created_at', '>=', now()->startOfMonth()) as $transaction)
                                <tr>
                                    <td>TRX{{ str_pad($transaction->id, 6, '0', STR_PAD_LEFT) }}</td>
                                    <td class="{{ $transaction->type === 'credit' ? 'text-success' : 'text-danger' }}">
                                        {{ ucfirst($transaction->type) }}
                                    </td>
                                    <td>{{ ucfirst(str_replace('_', ' ', $transaction->purpose_of_payment)) }}</td>
                                    <td>USDT {{ number_format($transaction->amount, 2) }}</td>
                                    <td>{{ $transaction->currency }}</td>
                                    <td>{{ $transaction->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        @if($transaction->status === 'pending')
                                            <span class="text-warning">Pending</span>
                                        @elseif($transaction->status === 'success')
                                            <span class="text-success">Complete</span>
                                        @else
                                            <span class="text-danger">Failed</span>
                                        @endif
                                    </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No transactions found for this month.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-weekly" role="tabpanel" aria-labelledby="pills-weekly-tab">
                <div class="table-responsive">
                    <table class="table align-middle" id="d2c_weekly_transaction_table">
                        <thead>
                            <tr>
                                <th style="min-width: 120px;">Transaction ID</th>
                                <th style="min-width: 120px;">Type</th>
                                <th style="min-width: 120px;">Purpose</th>
                                <th style="min-width: 120px;">Amount</th>
                                <th style="min-width: 120px;">Currency</th>
                                <th style="min-width: 120px;">Date</th>
                                <th style="min-width: 120px;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($transactions->where('created_at', '>=', now()->startOfWeek()) as $transaction)
                                <tr>
                                    <td>TRX{{ str_pad($transaction->id, 6, '0', STR_PAD_LEFT) }}</td>
                                    <td class="{{ $transaction->type === 'credit' ? 'text-success' : 'text-danger' }}">
                                        {{ ucfirst($transaction->type) }}
                                    </td>
                                    <td>{{ ucfirst(str_replace('_', ' ', $transaction->purpose_of_payment)) }}</td>
                                    <td>USDT {{ number_format($transaction->amount, 2) }}</td>
                                    <td>{{ $transaction->currency }}</td>
                                    <td>{{ $transaction->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        @if($transaction->status === 'pending')
                                            <span class="text-warning">Pending</span>
                                        @elseif($transaction->status === 'success')
                                            <span class="text-success">Complete</span>
                                        @else
                                            <span class="text-danger">Failed</span>
                                        @endif
                                    </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No transactions found for this week.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- copyright -->
<div class="d2c_copyright bg-success bg-opacity-10 p-3 text-center mt-4">
    <p class="mb-0 fw-semibold">© 2023 <a href="https://www.designtocodes.com/" target="_blank" class="fw-bold">DesignToCodes</a>, All rights Reserved</p>
</div>

</div>
<!-- End:Main Body -->
@endsection