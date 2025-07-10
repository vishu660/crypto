@extends('user.main')

@section('content')
<div class="container py-5 col-md-9">
    <h2 class="mb-4 fw-bold">✨ My USDT Addresses</h2>

    @if($addresses->count())
        <div class="row g-4">
            @foreach($addresses as $address)
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-0 rounded-4 h-100 position-relative overflow-hidden card-hover bg-light-custom">
                        <div class="card-body p-4">
                            <span class="badge gradient-badge text-uppercase mb-3 shadow-sm">
                                {{ $address->address->address_key }}
                            </span>

                            <h5 class="card-title fw-bold mb-3">
                                <i class="fas fa-network-wired me-2 text-primary"></i>
                                {{ $address->address->name }}
                            </h5>

                            <p class="card-text small mb-3">
                                <strong>USDT Address:</strong><br>
                                <span class="text-break">{{ $address->usdt_address }}</span>
                            </p>

                            @if($address->qr_code)
                                <div class="mb-3 text-center">
                                    <img src="{{ asset('storage/' . $address->qr_code) }}"
                                         alt="QR Code"
                                         class="img-fluid border border-2 rounded-3 p-1 qr-hover"
                                         style="max-height: 160px;">
                                </div>
                            @endif

                            <p class="text-muted mb-0 small">
                                <i class="far fa-calendar-alt me-1"></i>
                                Added on: {{ $address->created_at->format('d M Y') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
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

<style>
    body {
        background: #f9fafe;
    }

    .card-hover {
        transition: all 0.4s ease;
    }

    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .gradient-badge {
        background: linear-gradient(135deg, #00bfff, #007bff);
        color: #fff;
        font-weight: 600;
        font-size: 12px;
        padding: 6px 12px;
        border-radius: 20px;
    }

    .bg-light-custom {
        background: #ffffff;
    }

    .qr-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .qr-hover:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
</style>
@endsection
