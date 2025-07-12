{{-- Downline Team Page --}}
@extends('user.main')

@section('content')
<div class="container" style="max-width:989px; margin-top:40px; margin-left:0;">
    <div class="row mb-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-2">
                    <li class="breadcrumb-item"><span class="text-success fw-bold">Dashboard</span></li>
                    <li class="breadcrumb-item"><span class="text-info fw-bold">Network</span></li>
                    <li class="breadcrumb-item active" aria-current="page">Downline Team</li>
                </ol>
            </nav>
            <h2 class="fw-bold mb-4" style="font-size:2rem;">Downline Team</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card p-3" style="background:rgba(255,255,255,0.02); border-radius:12px;">
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0" style="font-size:0.91rem; min-width:650px; max-width:850px; margin:auto;">
                        <thead style="background:#bfc9d1;">
                            <tr>
                                <th class="fw-bold" style="font-size:0.8rem;">Member ID</th>
                                <th class="fw-bold" style="font-size:0.8rem;">Name</th>
                                <th class="fw-bold" style="font-size:0.8rem;">Referral ID</th>
                                <th class="fw-bold" style="font-size:0.8rem;">Name</th>
                                <th class="fw-bold" style="font-size:0.8rem;">Level</th>
                                <th class="fw-bold" style="font-size:0.8rem;">Package</th>
                                <th class="fw-bold" style="font-size:0.8rem;">Join Date</th>
                                <th class="fw-bold" style="font-size:0.8rem;">Activation Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($downlines as $down)
                                <tr style="border-bottom:1px solid rgba(255,255,255,0.05);">
                                    <td class="fw-semibold">{{ $down->member_id }}</td>
                                    <td class="fw-semibold">{{ $down->name }}</td>
                                    <td class="fw-semibold">{{ $down->referral_id }}</td>
                                    <td class="fw-semibold">{{ $down->referrer_name }}</td>
                                    <td class="fw-semibold">{{ $down->level }}</td>
                                    <td class="fw-semibold">{{ $down->package ?? 'Inactive' }}</td>
                                    <td class="fw-semibold">{{ $down->join_date ? \Carbon\Carbon::parse($down->join_date)->format('d-m-Y h:i:a') : '' }}</td>
                                    <td class="fw-semibold">{{ $down->activation_date ? \Carbon\Carbon::parse($down->activation_date)->format('d-m-Y h:i:a') : '----' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">No downline members found.</td>
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
