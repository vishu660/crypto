@extends('user.main')

@section('content')
<div class="usdt-bg-section py-5 col-md-10">
    <div class="container offset-2" style="min-height:70vh;">
        <div>
            <div class="card shadow-lg border-0 rounded-4 bg-white" style="max-width:658px; width:145%;">
                <div class="card-header bg-gradient-primary text-white text-center rounded-top-4 py-4" style="background: linear-gradient(90deg, #4e54c8 10%, #38ef7d 90%);">
                    <h2 class="mb-0"><i class="fas fa-wallet me-2"></i>Add New USDT Address</h2>
                </div>
                <div class="card-body p-4">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('user.store.usdt') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="network" class="form-label fw-semibold">Choose Network</label>
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white"><i class="fas fa-network-wired"></i></span>
                                <select name="address_id" id="network" class="form-select" required>
                                    <option value="" disabled selected>-- Select Network --</option>
                                    @foreach($networks as $network)
                                        <option value="{{ $network->id }}">{{ $network->name }} ({{ $network->address_key }})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="usdt_address" class="form-label fw-semibold">USDT Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white"><i class="fas fa-key"></i></span>
                                <input type="text" name="usdt_address" id="usdt_address" class="form-control" placeholder="Enter your USDT address" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="qr_code" class="form-label fw-semibold">QR Code (optional)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white"><i class="fas fa-qrcode"></i></span>
                                <input type="file" name="qr_code" id="qr_code" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 fw-bold rounded-pill py-3">
                            <i class="fas fa-save me-2"></i>Save Address
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.usdt-bg-section {
    background: linear-gradient(135deg, #e0e7ff 60%, #f7f8fa 100%);
    min-height: 100vh;
}
</style>
@endsection
