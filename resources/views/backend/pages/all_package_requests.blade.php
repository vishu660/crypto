@extends('backend.layouts.admin')

@section('title', 'All Package Requests')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
<div class="container py-4">
    <h3 class="mb-4 text-white">All Package Requests</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($requests->isEmpty())
        <div class="alert alert-info">No package requests found.</div>
    @else
        <div class="table-responsive">
            <table id="packageRequestsTable" class="table table-bordered table-dark table-striped align-middle">
                <thead class="table-light text-dark">
                    <tr>
                        <th>#ID</th>
                        <th>User Info</th>
                        <th>Referral ID</th>
                        <th>Package</th>
                        <th>Investment</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $req)
                        <tr>
                            <td>{{ $req->id }}</td>

                            <td>
                                <strong>{{ $req->user->full_name }}</strong><br>
                              
                            </td>

                            <td>
                                <span class="badge bg-info text-dark">
                                    {{ $req->user->	referral_id ?? 'N/A' }}
                                </span>
                            </td>

                            <td>
                                <strong>{{ $req->package->name }}</strong><br>
                                <small>{{ $req->package->validity_days }} days</small>
                            </td>

                            <td>
                                ₹{{ number_format($req->amount, 2) }}
                                <br>
                                <small class="text-muted">Plan ₹{{ number_format($req->package->investment_amount, 2) }}</small>
                            </td>

                            <td>
                                @php
                                    $status = $req->status;
                                    $badgeClass = match($status) {
                                        'approved' => 'success',
                                        'pending' => 'warning text-dark',
                                        'rejected' => 'danger',
                                        default => 'secondary',
                                    };
                            
                                    $statusText = match($status) {
                                        'approved' => 'Approved',
                                        'pending' => 'Pending',
                                        'rejected' => 'Rejected',
                                        default => ucfirst($status),
                                    };
                                @endphp
                            
                                <span class="badge bg-{{ $badgeClass }}">
                                    {{ $statusText }}
                                </span>
                            </td>
                              

                            <td>{{ $req->created_at->format('d M, Y') }}</td>

                            <td class="text-center">
                                @php $status = strtolower($req->status); @endphp
                            
                                @if($status === 'pending')
                                <form action="{{ route('package-requests.approve', ['id' => $req->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                        <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                    </form>
                            
                                    <form action="{{ route('package-requests.reject', ['id' => $req->id]) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                    </form>
                                @else
                                    <em>No Action</em>
                                @endif
                            </td>
                            
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#packageRequestsTable').DataTable({
                responsive: true,
                paging: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false
            });
        });
    </script>
@endpush
