@extends('backend.layouts.admin')

@section('title', 'Approved Package Requests')

@section('content')
<div class="container py-4">
    <h3 class="mb-4 text-white">Approved Package Requests</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($requests->isEmpty())
        <div class="alert alert-info">No approved package requests found.</div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-striped align-middle">
                <thead class="table-light text-dark">
                    <tr>
                        <th>#ID</th>
                        <th>User</th>
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
                                <strong>{{ $req->user->full_name }}</strong>
                            </td>
                            <td>
                                <strong>{{ $req->package->name }}</strong><br>
                                <small>{{ $req->package->validity_days }} days</small>
                            </td>
                            <td>₹{{ number_format($req->amount, 2) }}</td>
                            <td>
                                <span class="badge bg-success">Approved</span>
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
