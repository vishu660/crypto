@extends('backend.layouts.admin')
@section('content')
<div class="container">
    <h2>KYC Requests</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Document</th>
                <th>Status</th>
                <th>Selfie</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}<br>{{ $user->email }}</td>
                <td>
                    @if($user->aadhaar) Aadhaar: {{ $user->aadhaar }} <br>@endif
                    @if($user->pan) PAN: {{ $user->pan }} <br>@endif
                    @if($user->dl) DL: {{ $user->dl }} @endif
                </td>
                <td>
                    @if($user->kyc_status == 'approved')
                        <span class="badge bg-success">Approved</span>
                    @elseif($user->kyc_status == 'rejected')
                        <span class="badge bg-danger">Rejected</span>
                    @else
                        <span class="badge bg-warning text-dark">Pending</span>
                    @endif
                </td>
                <td>
                    @if($user->kyc_selfie)
                        <img src="{{ asset('storage/' . $user->kyc_selfie) }}" width="60">
                    @endif
                </td>
                <td>
                    @if($user->kyc_status != 'approved')
                        <form action="{{ route('admin.kyc.approve', $user) }}" method="POST" style="display:inline;">
                            @csrf
                            <button class="btn btn-success btn-sm">Approve</button>
                        </form>
                    @endif
                    @if($user->kyc_status != 'rejected')
                        <form action="{{ route('admin.kyc.reject', $user) }}" method="POST" style="display:inline;">
                            @csrf
                            <button class="btn btn-danger btn-sm">Reject</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection 