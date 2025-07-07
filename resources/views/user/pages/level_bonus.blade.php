{{-- Level Bonus Page --}}
@extends('user.main')

@section('content')
<div class="container" style="max-width:1100px; margin-top:40px; margin-left:0;">
    <div class="row mb-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-2">
                    <li class="breadcrumb-item"><span class="text-success fw-bold">Dashboard</span></li>
                    <li class="breadcrumb-item"><span class="text-info fw-bold">Earnings</span></li>
                    <li class="breadcrumb-item active" aria-current="page">Level Bonus</li>
                </ol>
            </nav>
            <h2 class="fw-bold mb-4" style="font-size:2rem;">Level Bonus</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card p-3" style="background:rgba(255,255,255,0.02); border-radius:12px;">
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0" style="font-size:0.97rem; min-width:700px; max-width:1050px; margin:auto;">
                        <thead style="background:#bfc9d1;">
                            <tr>
                                <th class="fw-bold" style="font-size:1rem;">Member ID</th>
                                <th class="fw-bold" style="font-size:1rem;">Name</th>
                                <th class="fw-bold" style="font-size:1rem;">Info</th>
                                <th class="fw-bold" style="font-size:1rem;">Level Bonus</th>
                                <th class="fw-bold" style="font-size:1rem;">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($levelBonuses as $bonus)
                                <tr style="border-bottom:1px solid rgba(255,255,255,0.05);">
                                    <td class="fw-semibold">{{ $bonus->member_id }}</td>
                                    <td class="fw-semibold">{{ $bonus->name }}</td>
                                    <td class="fw-semibold">
                                        Downline ID: {{ $bonus->downline_id }}<br>
                                        Level: {{ $bonus->level }}
                                    </td>
                                    <td class="fw-semibold">{{ $bonus->level_bonus }}</td>
                                    <td class="fw-semibold">{{ $bonus->date ? \Carbon\Carbon::parse($bonus->date)->format('d-m-Y h:i:a') : '' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No level bonuses found.</td>
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
