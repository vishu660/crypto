@extends('user.main')

@section('content')
<div class="container py-5 col-md-10">
    <div class="row">
        <div class="col-md-8">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card shadow rounded-4 border-0">
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h4 class="mb-0">Add New USDT Address</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('user.store.usdt') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="network" class="form-label fw-semibold">Choose Network</label>
                            <select name="address_id" id="network" class="form-select">
                                <option value="" disabled selected>-- Select Network --</option>
                                @foreach($networks as $network)
                                    <option value="{{ $network->id }}">{{ $network->name }} ({{ $network->address_key }})</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="usdt_address" class="form-label fw-semibold">USDT Address</label>
                            <input type="text" name="usdt_address" id="usdt_address" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="qr_code" class="form-label fw-semibold">QR Code (optional)</label>
                            <input type="file" name="qr_code" id="qr_code" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary rounded-pill">
                            Save Address
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
