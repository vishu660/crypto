@extends('user.main')

@section('content')
<div class="container py-5 col-md-10">
    <h2 class="mb-4 fw-bold">✨ My USDT Addresses</h2>

    @if($addresses->count())
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle bg-white shadow-sm rounded-4">
                <thead class="table-light">
                    <tr>
                        <th>Network</th>
                        <th>Name</th>
                        <th>USDT Address</th>
                        <th>QR Code</th>
                        <th>Status</th>
                        <th>Added On</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($addresses as $address)
                        <tr>
                            <td>
                                <span class="badge gradient-badge text-uppercase">
                                    {{ $address->address->address_key }}
                                </span>
                            </td>
                            <td class="fw-bold">
                                <i class="fas fa-network-wired me-2 text-primary"></i>
                                {{ $address->address->name }}
                            </td>
                            <td class="text-break" style="max-width: 250px;">
                                {{ $address->usdt_address }}
                            </td>
                            <td class="text-center">
                                @if($address->qr_code)
                                    <img src="{{ asset($address->qr_code) }}" 
                                        alt="QR Code" 
                                        class="img-fluid border border-2 rounded-3 p-1 qr-hover" 
                                        style="max-height: 80px; cursor: pointer;"
                                        onclick="showQRModal('{{ asset($address->qr_code) }}')">
                                @else
                                    <span class="text-muted small">N/A</span>
                                @endif
                            </td>
                            <td>
                                @if($address->is_approved)
                                    <span class="badge bg-success">Approved</span>
                                @else
                                    <span class="badge bg-warning">Pending</span>
                                @endif
                            </td>
                            <td>
                                <i class="far fa-calendar-alt me-1"></i>
                                {{ $address->created_at->format('d M Y') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info">
            You have not added any USDT addresses yet.
        </div>
    @endif

    <div class="mt-5 text-center">
        <a href="{{ route('user.create.usdt') }}" class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm">
            <i class="fas fa-plus me-2"></i> Add New USDT Address
        </a>
    </div>
</div>

<!-- QR Code Modal -->
<div class="modal fade" id="qrModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">QR Code</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalQRImage" src="" alt="QR Code" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background: #f9fafe;
    }

    .gradient-badge {
        background: linear-gradient(135deg, #00bfff, #007bff);
        color: #fff;
        font-weight: 600;
        font-size: 12px;
        padding: 6px 12px;
        border-radius: 20px;
    }

    .qr-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .qr-hover:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
</style>

<script>
function showQRModal(imageSrc) {
    document.getElementById('modalQRImage').src = imageSrc;
    new bootstrap.Modal(document.getElementById('qrModal')).show();
}
</script>
@endsection