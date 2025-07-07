{{-- Available Epins Page --}}
@extends('user.main')

@section('content')
<div class="container" style="max-width:900px; margin-top:40px; margin-left:0;">
    <div class="row mb-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-2">
                    <li class="breadcrumb-item"><span class="text-success fw-bold">Dashboard</span></li>
                    <li class="breadcrumb-item"><span class="text-info fw-bold">Epin</span></li>
                    <li class="breadcrumb-item active" aria-current="page">Available Epins</li>
                </ol>
            </nav>
            <h2 class="fw-bold mb-4" style="font-size:2rem;">Available Epins</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card p-3" style="background:rgba(255,255,255,0.02); border-radius:12px;">
                <div class="table-responsive">
                    <table class="table table-borderless align-middle mb-0" style="font-size:1rem;">
                        <thead style="background:#bfc9d1;">
                            <tr>
                                <th class="fw-bold" style="font-size:1.1rem;">Amount</th>
                                <th class="fw-bold" style="font-size:1.1rem;">Epin</th>
                                <th class="fw-bold" style="font-size:1.1rem;">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($epins as $epin)
                                <tr style="border-bottom:1px solid rgba(255,255,255,0.05);">
                                    <td class="fw-semibold">{{ $epin->amount }}</td>
                                    <td class="fw-semibold" style="letter-spacing:1px;">
                                        <i class="fas fa-thumbtack me-2 text-info"></i>{{ $epin->code }}
                                    </td>
                                    <td class="fw-semibold">
                                        {{ $epin->created_at ? $epin->created_at->format('d-m-Y h:i:a') : '' }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No available epins found.</td>
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
