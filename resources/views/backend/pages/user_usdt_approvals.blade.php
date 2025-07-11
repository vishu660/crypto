@extends('backend.layouts.admin')

@section('title', 'User USDT Addresses Approval')

@section('content')
<div class="container-fluid mt-4">
    <div class="card shadow">
            <h2 class="mb-0" style="color:#fff;">User USDT Addresses</h2>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle border rounded-3 overflow-hidden" style="font-size:1.08rem;">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>ID</th>
                            <th>Network</th>
                            <th>Address</th>
                            <th>QR</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pendingAddresses as $ua)
                            <tr style="border-left: 6px solid {{ $ua->is_approved ? '#28a745' : '#fd7e14' }}; transition: box-shadow 0.2s;" onmouseover="this.style.boxShadow='0 4px 24px rgba(0,0,0,0.10)';" onmouseout="this.style.boxShadow='none';">
                                <td class="text-center fw-semibold">{{ $ua->id }}</td>
                                <td class="fw-bold">{{ $ua->address->name }} <span class="badge bg-info ms-1">{{ $ua->address->address_key }}</span></td>
                                <td><code>{{ $ua->usdt_address }}</code></td>
                                <td class="text-center">
                                    @if($ua->qr_code)
                                        <img src="{{ asset('storage/' . $ua->qr_code) }}" style="height:60px;" class="img-thumbnail shadow-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="QR Code">
                                    @else
                                        <span class="text-muted small">No QR</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($ua->is_approved)
                                        <span class="badge bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Approved">Approved</span>
                                    @else
                                        <span class="badge bg-warning text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Pending">Pending</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if(!$ua->is_approved)
                                        <form action="{{ route('admin.user-addresses.approve', $ua) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button class="btn btn-success btn-sm px-3 me-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve"><i class="fas fa-check"></i>Approve</button>
                                        </form>
                                    @else
                                        <form action="{{ route('admin.user-addresses.reject', $ua) }}" method="POST" style="display:inline;">
                                            @csrf
                                            <button class="btn btn-warning btn-sm px-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Reject"><i class="fas fa-times"></i>Reject</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    // Enable Bootstrap tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>
@endsection
