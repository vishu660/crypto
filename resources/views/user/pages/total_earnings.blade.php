{{-- Total Earnings Page --}}
@extends('user.main')

@section('content')
<div class="container" style="max-width:1000px; margin-top:40px; margin-left:0;">
    <div class="row mb-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-2">
                    <li class="breadcrumb-item"><span class="text-success fw-bold">Dashboard</span></li>
                    <li class="breadcrumb-item"><span class="text-info fw-bold">Earnings</span></li>
                    <li class="breadcrumb-item active" aria-current="page">Total Earnings</li>
                </ol>
            </nav>
            <h2 class="fw-bold mb-4" style="font-size:2rem;">Total Earnings</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card p-3" style="background:rgba(255,255,255,0.02); border-radius:12px;">
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0" style="font-size:0.97rem; min-width:700px; max-width:950px; margin:auto;">
                        <thead style="background:#bfc9d1;">
                            <tr>
                                <th class="fw-bold" style="font-size:0.8rem;">Member ID</th>
                                <th class="fw-bold" style="font-size:0.8rem;">Name</th>
                                <th class="fw-bold" style="font-size:0.8rem;">Total Earnings</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($earnings as $earning)
                                <tr style="border-bottom:1px solid rgba(255,255,255,0.05);">
                                    <td class="fw-semibold" style="font-size:0.8rem;">{{ $earning->member_id }}</td>
                                    <td class="fw-semibold" style="font-size:0.8rem;">{{ $earning->name }}</td>
                                    <td class="fw-semibold" style="font-size:0.8rem;">{{ $earning->total_earnings }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No earnings found.</td>
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
