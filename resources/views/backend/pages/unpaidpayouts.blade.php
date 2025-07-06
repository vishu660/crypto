@extends('backend.layouts.admin')

@section('title', 'Unpaid Payouts')

@push('styles')
<!-- Styles same as your existing CSS (unchanged) -->
<style>
/* ... existing CSS from your message ... */
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h4 class="text-white">Dashboard / Payouts / Unpaid Payouts</h4>
            <h3 class="text-white mt-3">Unpaid Payouts</h3>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="earnings-box">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="filter-box">
                            <input type="text" class="form-control" placeholder="start date">
                            <span class="input-group-text">to</span>
                            <input type="text" class="form-control" placeholder="end date">
                            <button class="btn" type="button"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>

                <button class="export-btn"><span>Export</span> <i class="bi bi-download"></i></button>

                <div class="d-flex align-items-center mb-2">
                    <label class="form-label mb-0 me-2" style="color:#b2f7ef;">Show</label>
                    <select class="form-select form-select-sm me-2" style="width: 70px;">
                        <option>50</option>
                    </select>
                    <label class="form-label mb-0 me-3" style="color:#b2f7ef;">entries</label>
                    <div class="ms-auto d-flex align-items-center">
                        <label for="search" class="form-label me-2 mb-0" style="color:#b2f7ef;">Search:</label>
                        <input type="search" class="form-control" id="search">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Member ID</th>
                                <th>Name</th>
                                <th>Payment Details</th>
                                <th>Withdraw Amount</th>
                                <th>Processing Charge</th>
                                <th>Net Amount</th>
                                <th>Withdraw Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($withdraws as $withdraw)
                            <tr>
                                <td>{{ $withdraw->user->referral_id ?? '-' }}</td>
                                <td>{{ $withdraw->user->full_name ?? '-' }}</td>
                                <td style="white-space: pre-wrap;">{{ $withdraw->payment_address }}</td>
                                <td>₹{{ number_format($withdraw->amount, 2) }}</td>
                                <td>₹{{ number_format($withdraw->processing_charge, 2) }}</td>
                                <td>₹{{ number_format($withdraw->payable_amount, 2) }}</td>
                                <td>{{ $withdraw->created_at->format('d M Y, h:i A') }}</td>
                                <td>
                                    @if($withdraw->status === 'pending')
                                        <form method="POST" action="{{ route('admin.withdraw.approve', $withdraw->id) }}" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success mb-1" onclick="return confirm('Are you sure you want to approve this withdrawal?')">Approve</button>
                                        </form>
                                        <form method="POST" action="{{ route('admin.withdraw.reject', $withdraw->id) }}" style="display: inline;">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to reject this withdrawal?')">Reject</button>
                                        </form>
                                    @else
                                        <span class="badge bg-secondary">{{ ucfirst($withdraw->status) }}</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">No data available in table</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($withdraws instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="row mt-3 align-items-center">
                    <div class="col-md-6">
                        Showing {{ $withdraws->firstItem() ?? 0 }} to {{ $withdraws->lastItem() ?? 0 }} of {{ $withdraws->total() }} entries
                    </div>
                    <div class="col-md-6">
                        <ul class="pagination justify-content-end mb-0">
                            {{ $withdraws->links('pagination::bootstrap-5') }}
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
