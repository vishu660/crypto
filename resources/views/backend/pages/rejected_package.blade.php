@extends('backend.layouts.admin')

@section('title', 'Rejected Package Requests')

@section('content')
<div class="container py-4">
    <h3 class="mb-4 text-white">Rejected Package Requests</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($requests->isEmpty())
        <div class="alert alert-info">No rejected package requests found.</div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-striped align-middle">
                <thead class="table-light text-dark">
                    <tr>
                        <th>#ID</th>
                        <th>User</th>
                        <th>Referral ID</th>
                        <th>Package</th>
                        <th>Investment</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $req)
                        <tr>
                            <td>{{ $req->id }}</td>
                            <td>
                                <strong>{{ $req->user->full_name }}</strong><br>
                                <small>{{ $req->user->email }}</small>
                            </td>
                            <td>
                                <span class="badge bg-info text-dark">{{ $req->user->referral_id ?? 'N/A' }}</span>
                            </td>
                            <td>
                                <strong>{{ $req->package->name }}</strong><br>
                                <small>{{ $req->package->validity_days }} days</small>
                            </td>
                            <td>
                                ₹{{ number_format($req->amount, 2) }}<br>
                                <small class="text-muted">Plan ₹{{ number_format($req->package->investment_amount, 2) }}</small>
                            </td>
                            <td>
                                <span class="badge bg-danger">Rejected</span>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($req->created_at)->format('d M, Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
