@extends('backend.layouts.admin')

@section('title', 'User USDT Addresses Approval')

@section('content')
    <h1 style="color:#00fff7;">User USDT Addresses</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Network</th>
                <th>Address</th>
                <th>QR</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendingAddresses as $ua)
                <tr>
                    <td>{{ $ua->id }}</td>
                    <td>{{ $ua->user->name }}</td>
                    <td>{{ $ua->address->name }} ({{ $ua->address->address_key }})</td>
                    <td>{{ $ua->usdt_address }}</td>
                    <td>
                        @if($ua->qr_code)
                            <img src="{{ asset('storage/' . $ua->qr_code) }}" style="height:60px;">
                        @endif
                    </td>
                    <td>
                        @if($ua->is_approved)
                            <span style="color:limegreen;">Approved</span>
                        @else
                            <span style="color:orange;">Pending</span>
                        @endif
                    </td>
                    <td>
                        @if(!$ua->is_approved)
                            <form action="{{ route('admin.user-addresses.approve', $ua) }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="btn btn-success">Approve</button>
                            </form>
                        @else
                            <form action="{{ route('admin.user-addresses.reject', $ua) }}" method="POST" style="display:inline;">
                                @csrf
                                <button class="btn btn-warning">Reject</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
