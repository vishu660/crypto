<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/gif" sizes="16x16">
    <title>Transaction</title>
    <meta name="og:description" content="Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.">
    <meta name="robots" content="index, follow">
    <meta name="og:title" property="og:title" content="FundRows - Free Bootstrap Crypto Dashboard Template">
    <meta property="og:image" content="https://www.designtocodes.com/wp-content/uploads/2023/10/FundRows-Free-Bootstrap-Crypto-Dashboard-Template-Thumbnail.jpg">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap_5/bootstrap.min.css') }}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="{{ asset('lib/fontawesome/css/all.min.css') }}">
    <!-- DataTable Css -->
    <link rel="stylesheet" href="{{ asset('lib/DataTables/datatables.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="DesignToCodes">
    </div>
    <!-- Preloader End -->
    <div class="d2c_wrapper">
        
        <!-- Main sidebar -->
        <div class="d2c_sidebar offcanvas-lg offcanvas-start px-2 py-4" tabindex="-1" id="d2c_sidebar">
            <div class="d-flex flex-column">
                <!-- Logo -->
                <a href="{{ route('user') }}" class="brand-icon">
                    <img class="navbar-brand" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                </a>
                <!-- End:Logo -->

                <!-- Menu -->
                <ul class="navbar-nav flex-grow-1">
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-home"></i>
                            </span>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.exchange') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-exchange-alt"></i>
                            </span>
                            <span> Exchange </span>
                        </a>
                    </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.plans') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-coins"></i>
                            </span>
                            <span> Plans </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.market') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-chart-line"></i>
                            </span>
                            <span> Market </span>
                        </a>
                    </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.wallet') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-wallet"></i>
                            </span>
                            <span> Wallet </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.profile') }}">
                            <span class="d2c_icon">
                                <i class="far fa-user"></i>
                            </span>
                            <span> Profile </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.notification') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-bell"></i>
                            </span>
                            <span> Notifications </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    
                    <!-- Menu Item -->
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('user.pages.transactions') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </span>
                            <span> Transaction </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.transfer') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-random"></i>
                            </span>
                            <span> Transfer </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.email') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </span>
                            <span> Mail </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.activity') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-recycle"></i>
                            </span>
                            <span> Activity </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.faq') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-question-circle"></i>
                            </span>
                            <span> FAQ </span>
                        </a>
                    </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#form_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="far fa-file-alt"></i>
                            </span>
                            <span> Form </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a> -->
                        <!-- Child Sub Menu -->
                        <!-- <ul class="sub-menu collapse" id="form_dropdown">
                            <!-- Child Menu Item -->
                           <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.basicForm') }}">
                                    <span> Basic Form </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.advancedFrom') }}">
                                    <span> Advanced Form </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.editor') }}">
                                    <span> Editor </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->
                        <!-- </ul> -->
                        <!-- End:Child Sub Menu -->
                    <!-- </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#table_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-table"></i>
                            </span>
                            <span> table </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a> -->
                        <!-- Child Sub Menu -->
                        <!-- <ul class="sub-menu collapse" id="table_dropdown">
                            <!-- Child Menu Item -->
                           <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.basicTable') }}">
                                    <span> Basic Table </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.advancedTable') }}">
                                    <span> Advanced Table </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->
                        <!-- </ul> -->
                        <!-- End:Child Sub Menu -->
                    <!-- </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#chart_dropdown"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-chart-pie"></i>
                            </span>
                            <span> Charts </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a> -->
                        <!-- Child Sub Menu -->
                        <!-- <ul class="sub-menu collapse" id="chart_dropdown"> -->
                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.chartjs') }}">
                                    <span> ChartJS</span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.apexCharts') }}">
                                    <span> ApexCharts </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.eCharts') }}">
                                    <span> E-Charts </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.ammCharts') }}">
                                    <span> Amm-Charts </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->
                        <!-- </ul> -->
                        <!-- End:Child Sub Menu -->
                    <!-- </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#authentication"
                            aria-expanded="false" href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-user-lock"></i>
                            </span>
                            <span> Authentication </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a> -->
                        <!-- Child Sub Menu -->
                        <!-- <ul class="sub-menu collapse" id="authentication">
                            <!-- Child Menu Item -->
                           <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.signUp') }}">
                                    <span> Sing up </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.signIn') }}">
                                    <span> Log In </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.forgetPassword') }}">
                                    <span> Forget Password </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.lockscreen') }}">
                                    <span> Lock Screen </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.404') }}">
                                    <span> 404 </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.authentication.505') }}">
                                    <span> 505 </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->
                        <!-- </ul> -->
                        <!-- End:Child Sub Menu -->
                    <!-- </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#components" aria-expanded="false"
                            href="#">
                            <span class="d2c_icon">
                                <i class="fas fa-dice-d6"></i>
                            </span>
                            <span> Component </span>
                            <span class="fas fa-chevron-right ms-auto text-end"></span>
                        </a> -->
                        <!-- Child Sub Menu -->
                        <!-- <ul class="sub-menu collapse" id="components"> -->
                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.invoice') }}">
                                    <span> Invoice </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.createInvoice') }}">
                                    <span> Create Invoice </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.calender') }}">
                                    <span> Calendar </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link active" href="{{ route('user.pages.components.timeline') }}">
                                    <span> Timeline </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.map') }}">
                                    <span> Map </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.alerts') }}">
                                    <span> Alerts </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.cards') }}">
                                    <span> Cards </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.buttons') }}">
                                    <span> Buttons </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.modals') }}">
                                    <span> Modals </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.badges') }}">
                                    <span> Badges </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.spinners') }}">
                                    <span> Spinners </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.progress') }}">
                                    <span> Progress </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.listGroup') }}">
                                    <span> List Group </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->

                            <!-- Child Menu Item -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.pages.components.pagination') }}">
                                    <span> Pagination </span>
                                </a>
                            </li> -->
                            <!-- End:Child Menu Item -->
                        <!-- </ul> -->
                        <!-- End:Child Sub Menu -->
                    <!-- </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.support') }}">
                            <span class="d2c_icon">
                                <i class="fas fa-hands-helping"></i>
                            </span>
                            <span> Support </span>
                        </a>
                    </li> -->
                    <!-- End:Menu Item -->

                    <!-- Menu Item -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pages.blank') }}">
                            <span class="d2c_icon">
                                <i class="far fa-file"></i>
                            </span>
                            <span> Blank </span>
                        </a>
                    </li> -->
                    <!-- End:Menu Item -->
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="d2c_icon">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>
                            <span> Logout </span>
                        </a>
                    </li>
                    <!-- End:Menu Item -->
                </ul>
                <!-- End:Menu -->
            </div>
        </div>
        <!-- End:Sidebar -->

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
                                                <td>₹{{ number_format($transaction->amount, 2) }}</td>
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
                                                <td>₹{{ number_format($transaction->amount, 2) }}</td>
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
                                                <td>₹{{ number_format($transaction->amount, 2) }}</td>
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
        
    </div>

    <!-- Offcanvas Toggler -->
    <button class="d2c_offcanvas_toggle position-fixed top-50 end-0 translate-middle-y d-block d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar_right" aria-controls="d2c_sidebar_right">
        <i class="fas fa-chevron-left"></i>
    </button>
    <!-- End:Offcanvas Toggler -->

    <!-- Initial  Javascript -->
    <script src="{{ asset('lib/jQuery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap_5/bootstrap.bundle.min.js') }}"></script>

    <!-- DataTable JS -->
    <script src="{{ asset('lib/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/script.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</body>

</html>


<!-- 
    Template Name: FundRows - Free Bootstrap Crypto Dashboard Template
    Template URL: https://www.designtocodes.com/product/fundrows-free-crypto-dashboard-template/
    Description: Build a user-friendly crypto dashboard with FundRows free crypto dashboard template. Enjoy full responsiveness, and customizable for your crypto projects. With FundRows, developers can create a unique crypto admin dashboard that is visually impressive.
    Author: DesignToCodes
    Author URL: https://www.designtocodes.com
    Text Domain: FundRows
 -->
