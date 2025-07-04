@extends('user.main')
@section('content')
    <!-- Main Body-->
    <div class="d2c_main p-4">

<!-- Title -->
<div class="row align-items-center mb-4">
    <div class="col-2 d-block d-lg-none">
        <!-- Offcanvas Toggler -->
        <button class="btn btn-primary px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar" aria-controls="d2c_sidebar">
            <i class="fa fa-bars p-0"></i>
        </button>
        <!-- End:Offcanvas Toggler -->
    </div>
    <div class="col">
        <p class="mb-0">Welcome Back</p>
        <h4 class="text-capitalize fw-bold">plans</h4>
    </div>
</div>
<!-- End:Title -->

@php
$colors = ['#6271ebe0', '#23cb62e0', '#fc76b7eb', '#fcb676eb', '#76b7fceb', '#eb76fc', '#76fcb7'];
@endphp
<div class="row">
    @forelse($packages as $index => $package)
        @php $color = $colors[$index % count($colors)]; @endphp
        <div class="col-md-6 col-xxl-4 mb-4">
            <div class="card position-relative" style="border-radius: 20px; overflow: hidden; padding: 36px 32px 32px 32px; color: #fff; background: {{ $color }}; min-height: 520px;">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span style="font-size: 1.2rem; font-weight: 700;">Investment</span>
                    @if(Auth::user()->packages->contains($package->id))
                        <span class="badge bg-dark" style="font-size: 1rem; padding: 8px 18px; border-radius: 20px; font-weight: 700;">Active</span>
                    @endif
                </div>
                <div style="font-size: 2.1rem; font-weight: 800; margin-bottom: 1.2rem; letter-spacing: 1px;">USDT {{ number_format($package->investment_amount, 2) }}</div>
                <div class="d-flex justify-content-between mb-2">
                    <div>
                        <div style="font-size: 1rem;">Package</div>
                        <div class="fw-bold" style="font-size: 1.1rem;">{{ $package->name }}</div>
                    </div>
                    <div>
                        <div style="font-size: 1rem;">Valid date</div>
                        <div class="fw-bold" style="font-size: 1.1rem;">{{ now()->addDays($package->validity_days)->format('m/Y') }}</div>
                    </div>
                </div>
                <div class="mt-3">
                    <div><b>ROI:</b> <span style="font-weight:600;">{{ number_format($package->roi_percent, 2) }}%</span></div>
                    <div><b>Bonus:</b> <span style="font-weight:600;">{{ number_format($package->direct_bonus_percent, 2) }}%</span></div>
                    <div><b>Referral:</b><span style="font-weight:600;">{{ number_format($package->referral_income, 2) }}%</span></div>
                    <div><b>Type:</b> <span style="font-weight:600;">{{ ucfirst($package->type_of_investment_days) }}</span></div>
                    @if($package->type_of_investment_days == 'daily' && !empty($package->daily_days))
                        <div><b>Daily</b> <span style="font-weight:600;">{{ is_array($package->daily_days) ? implode(', ', $package->daily_days) : $package->daily_days }}</span></div>
                    @elseif($package->type_of_investment_days == 'weekly' && $package->weekly_day)
                        <div><b>Days:</b> <span style="font-weight:600;">{{ $package->weekly_day }}</span></div>
                    @elseif($package->type_of_investment_days == 'monthly' && $package->monthly_date)
                        <div><b>Days:</b> <span style="font-weight:600;">{{ $package->monthly_date }}</span></div>
                    @endif
                    @if(!empty($package->days))
                        <div><b>Days:</b> <span style="font-weight:600;">{{ is_array($package->days) ? implode(', ', $package->days) : $package->days }}</span></div>
                    @endif
                    @if(!empty($package->status_days))
                        <div><b>Status:</b> <span style="font-weight:600;">{{ is_array($package->status_days) ? implode(', ', $package->status_days) : $package->status_days }}</span></div>
                    @endif
                    <div><b>Status:</b> <span style="font-weight:600;">{{ $package->is_active ? 'Active' : 'Inactive' }}</span></div>
                </div>
                @if(!Auth::user()->packages->contains($package->id))
                    <form method="POST" action="{{ route('user.buy', $package->id) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="package_id" value="{{ $package->id }}">
                        <button type="submit" class="btn btn-light text-dark w-100" style="border-radius: 22px; font-weight: 800; font-size: 1.15rem; margin-top: 2.2rem; box-shadow: 0 2px 12px rgba(0,0,0,0.10); padding: 16px 0;">Buy</button>
                    </form>
                @endif
            </div>
        </div>
    @empty
        <div class="col-12 text-center">
            <div class="alert alert-warning">No plans available at the moment.</div>
        </div>
    @endforelse
</div>

<!-- copyright -->
<div class="d2c_copyright bg-success bg-opacity-10 p-3 text-center mt-4">
    <p class="mb-0 fw-semibold">© 2023 <a href="https://www.designtocodes.com/" target="_blank" class="fw-bold">DesignToCodes</a>, All rights Reserved</p>
</div>

</div>
<!-- End:Main Body -->
@endsection