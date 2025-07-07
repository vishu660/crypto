{{-- Referral List Page --}}
@extends('user.main')

@section('content')
<div class="container" style="max-width:950px; margin-top:40px; margin-left:0;">
    <div class="row mb-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-2">
                    <li class="breadcrumb-item"><span class="text-success fw-bold">Dashboard</span></li>
                    <li class="breadcrumb-item"><span class="text-info fw-bold">Network</span></li>
                    <li class="breadcrumb-item active" aria-current="page">Referral List</li>
                </ol>
            </nav>
            <h2 class="fw-bold mb-4" style="font-size:2rem;">Referral List</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card p-3" style="background:rgba(255,255,255,0.02); border-radius:12px;">
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0" style="font-size:0.93rem; min-width:700px; max-width:900px; margin:auto;">
                        <thead style="background:#bfc9d1;">
                            <tr>
                                <th class="fw-bold" style="font-size:1rem;">Member ID</th>
                                <th class="fw-bold" style="font-size:1rem;">Name</th>
                                <th class="fw-bold" style="font-size:1rem;">Referral ID</th>
                                <th class="fw-bold" style="font-size:1rem;">Name</th>
                                <th class="fw-bold" style="font-size:1rem;">Package</th>
                                <th class="fw-bold" style="font-size:1rem;">Join Date</th>
                                <th class="fw-bold" style="font-size:1rem;">Activation Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($referrals as $ref)
                                <tr style="border-bottom:1px solid rgba(255,255,255,0.05);">
                                    <td class="fw-semibold">{{ $ref->member_id }}</td>
                                    <td class="fw-semibold">{{ $ref->name }}</td>
                                    <td class="fw-semibold">{{ $ref->referral_id }}</td>
                                    <td class="fw-semibold">{{ $ref->referrer_name }}</td>
                                    <td class="fw-semibold">{{ $ref->package ?? 'Inactive' }}</td>
                                    <td class="fw-semibold">{{ $ref->join_date ? \Carbon\Carbon::parse($ref->join_date)->format('d-m-Y h:i:a') : '' }}</td>
                                    <td class="fw-semibold">{{ $ref->activation_date ? \Carbon\Carbon::parse($ref->activation_date)->format('d-m-Y h:i:a') : '----' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No referrals found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
