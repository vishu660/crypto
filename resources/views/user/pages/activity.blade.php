@extends('user.main')
@section('content')
        <!-- Main Body-->
        <div class="d2c_main p-4">

            <!-- Title -->
            <div class="align-items-center mb-4">
                <div class="col-2 d-block d-lg-none">
                    <!-- Offcanvas Toggler -->
                    <button class="btn btn-primary px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar" aria-controls="d2c_sidebar">
                        <i class="fa fa-bars p-0"></i>
                    </button>
                    <!-- End:Offcanvas Toggler -->
                </div>
                <div class="col">
                    <p class="mb-0">Welcome Back</p>
                    <h4 class="text-capitalize">Activity</h4>
                </div>
            </div>
            <!-- End:Title -->

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <ul class="nav nav-pills d2c_activity_tab mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-all-activity-tab" data-bs-toggle="pill" data-bs-target="#pills-all-activity" type="button" role="tab" aria-controls="pills-all-activity" aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-withdraw-tab" data-bs-toggle="pill" data-bs-target="#pills-withdraw" type="button" role="tab" aria-controls="pills-withdraw" aria-selected="false">Withdraws</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-deposit-tab" data-bs-toggle="pill" data-bs-target="#pills-deposit" type="button" role="tab" aria-controls="pills-deposit" aria-selected="false">Deposit</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content d2c_activity_table_content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-all-activity" role="tabpanel" aria-labelledby="pills-all-activity-tab">                           
                            <div class="table-responsive">
                                <table class="table align-middle" id="d2c_all_activity_table">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 50px">Asset</th>
                                            <th style="min-width: 50px">Type</th>
                                            <th style="min-width: 50px">Amount</th>
                                            <th style="min-width: 120px">Transaction Id</th>
                                            <th style="min-width: 50px">Date</th>
                                            <th style="min-width: 50px">Available</th>
                                            <th style="min-width: 100px">Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($activities as $activity)
                                            <tr>
                                                <td>{{ $activity['asset'] }}</td>
                                                <td>
                                                    @if(strtolower($activity['type']) == 'buy' || strtolower($activity['type']) == 'deposit' || strtolower($activity['type']) == 'roi' || strtolower($activity['type']) == 'profit')
                                                        <span class="text-success">{{ $activity['type'] }}</span>
                                                    @else
                                                        <span class="text-danger">{{ $activity['type'] }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(strtolower($activity['type']) == 'buy' || strtolower($activity['type']) == 'deposit' || strtolower($activity['type']) == 'roi' || strtolower($activity['type']) == 'profit')
                                                        <span class="text-success">{{ $activity['amount'] }} {{ $activity['asset'] }}</span>
                                                    @else
                                                        <span class="text-danger">-{{ $activity['amount'] }} {{ $activity['asset'] }}</span>
                                                    @endif
                                                </td>
                                                <td>{{ $activity['transaction_id'] }}</td>
                                                <td>{{ $activity['date']->format('d-m-Y H:i') }}</td>
                                                <td>{{ $activity['status'] }}</td>
                                                <td>{{ $activity['fee'] }}%</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No activity found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-withdraw" role="tabpanel" aria-labelledby="pills-withdraw-tab">
                            <div class="table-responsive">
                                <table class="table align-middle" id="d2c_withdraw_activity_table">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 100px">Asset</th>
                                            <th style="min-width: 50px">Type</th>
                                            <th style="min-width: 150px">Amount</th>
                                            <th style="min-width: 150px">Transaction Id</th>
                                            <th style="min-width: 210px">Date</th>
                                            <th style="min-width: 120px">Available</th>
                                            <th style="min-width: 100px">Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($activities as $activity)
                                            <tr>
                                                <td>{{ $activity['asset'] }}</td>
                                                <td>
                                                    @if(strtolower($activity['type']) == 'buy' || strtolower($activity['type']) == 'deposit' || strtolower($activity['type']) == 'roi' || strtolower($activity['type']) == 'profit')
                                                        <span class="text-success">{{ $activity['type'] }}</span>
                                                    @else
                                                        <span class="text-danger">{{ $activity['type'] }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(strtolower($activity['type']) == 'buy' || strtolower($activity['type']) == 'deposit' || strtolower($activity['type']) == 'roi' || strtolower($activity['type']) == 'profit')
                                                        <span class="text-success">{{ $activity['amount'] }} {{ $activity['asset'] }}</span>
                                                    @else
                                                        <span class="text-danger">-{{ $activity['amount'] }} {{ $activity['asset'] }}</span>
                                                    @endif
                                                </td>
                                                <td>{{ $activity['transaction_id'] }}</td>
                                                <td>{{ $activity['date']->format('d-m-Y H:i') }}</td>
                                                <td>{{ $activity['status'] }}</td>
                                                <td>{{ $activity['fee'] }}%</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No activity found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-deposit" role="tabpanel" aria-labelledby="pills-deposit-tab">
                            <div class="table-responsive">
                                <table class="table align-middle" id="d2c_deposit_activity_table">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 100px">Asset</th>
                                            <th style="min-width: 50px">Type</th>
                                            <th style="min-width: 150px">Amount</th>
                                            <th style="min-width: 150px">Transaction Id</th>
                                            <th style="min-width: 210px">Date</th>
                                            <th style="min-width: 120px">Available</th>
                                            <th style="min-width: 100px">Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($activities as $activity)
                                            <tr>
                                                <td>{{ $activity['asset'] }}</td>
                                                <td>
                                                    @if(strtolower($activity['type']) == 'buy' || strtolower($activity['type']) == 'deposit' || strtolower($activity['type']) == 'roi' || strtolower($activity['type']) == 'profit')
                                                        <span class="text-success">{{ $activity['type'] }}</span>
                                                    @else
                                                        <span class="text-danger">{{ $activity['type'] }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(strtolower($activity['type']) == 'buy' || strtolower($activity['type']) == 'deposit' || strtolower($activity['type']) == 'roi' || strtolower($activity['type']) == 'profit')
                                                        <span class="text-success">{{ $activity['amount'] }} {{ $activity['asset'] }}</span>
                                                    @else
                                                        <span class="text-danger">-{{ $activity['amount'] }} {{ $activity['asset'] }}</span>
                                                    @endif
                                                </td>
                                                <td>{{ $activity['transaction_id'] }}</td>
                                                <td>{{ $activity['date']->format('d-m-Y H:i') }}</td>
                                                <td>{{ $activity['status'] }}</td>
                                                <td>{{ $activity['fee'] }}%</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No activity found.</td>
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