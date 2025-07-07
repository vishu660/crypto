@extends('user.main')

@section('content')
<div class="container-fluid p-0" style="background: #f8fafd; min-height: 100vh; max-width:900px; margin:auto;">
    <!-- Top Action Buttons and Socials -->
    <div class="row align-items-center pt-3 ps-2 pe-2 mb-2">
        <div class="col-8 d-flex gap-2">
            <button class="btn btn-white border fw-bold" style="border-radius:7px; min-width:120px;">Downloads</button>
            <button class="btn btn-white border fw-bold" style="border-radius:7px; min-width:120px;">Activation</button>
            <button class="btn btn-white border fw-bold" style="border-radius:7px; min-width:120px;">Withdraw</button>
            <button class="btn fw-bold" style="background:#23d6a7; color:#fff; border-radius:7px; min-width:140px;">New Joining +</button>
        </div>
        <div class="col-4 d-flex justify-content-end gap-2">
            <a href="#" class="" style="background:#6ea8fe; border-radius:7px; width:38px; height:38px; display:flex; align-items:center; justify-content:center;"><i class="fab fa-facebook-f text-white"></i></a>
            <a href="#" class="" style="background:#25d366; border-radius:7px; width:38px; height:38px; display:flex; align-items:center; justify-content:center;"><i class="fab fa-whatsapp text-white"></i></a>
            <a href="#" class="" style="background:#6ea8fe; border-radius:7px; width:38px; height:38px; display:flex; align-items:center; justify-content:center;"><i class="fab fa-twitter text-white"></i></a>
        </div>
    </div>
    <!-- Top Info Cards -->
    <div class="row g-2 pt-3 ps-2 pe-2">
        <div class="col-6 col-md-3">
            <div class="card text-center p-1" style="background:#fff; border-radius:7px; border:1px solid #e0e0e0; min-width:90px;">
                <div class="mb-1" style="color:#1de9b6; font-size:0.82rem;">FRESH EPINS</div>
                <div class="fw-bold" style="font-size:1.05rem; color:#222;">{{ $freshEpins }}</div>
                <div><i class="fas fa-lock" style="color:#bfc9d1; font-size:1rem;"></i></div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card text-center p-1" style="background:#fff; border-radius:7px; border:1px solid #e0e0e0; min-width:90px;">
                <div class="mb-1" style="color:#1de9b6; font-size:0.82rem;">APPLIED EPINS</div>
                <div class="fw-bold" style="font-size:1.05rem; color:#222;">{{ $appliedEpins }}</div>
                <div><i class="fas fa-lock-open" style="color:#bfc9d1; font-size:1rem;"></i></div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card text-center p-1" style="background:#fff; border-radius:7px; border:1px solid #e0e0e0; min-width:90px;">
                <div class="mb-1" style="color:#1de9b6; font-size:0.82rem;">MY REFERRALS</div>
                <div class="fw-bold" style="font-size:1.05rem; color:#222;">{{ $myReferrals }}</div>
                <div><i class="fas fa-user-plus" style="color:#bfc9d1; font-size:1rem;"></i></div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card text-center p-1" style="background:#fff; border-radius:7px; border:1px solid #e0e0e0; min-width:90px;">
                <div class="mb-1" style="color:#1de9b6; font-size:0.82rem;">MY TEAM</div>
                <div class="fw-bold" style="font-size:1.05rem; color:#222;">{{ $myTeamCount }}</div>
                <div><i class="fas fa-users" style="color:#bfc9d1; font-size:1rem;"></i></div>
            </div>
        </div>
    </div>

    <!-- Profile & Earnings Section -->
    <div class="row g-2 mt-2 ps-2 pe-2">
        <div class="col-lg-6">
            <div class="card p-2" style="background:#fff; border-radius:7px; border:1px solid #e0e0e0; color:#222;">
                <div class="d-flex align-items-center mb-1">
                    <img src="/assets/images/eth_logo.png" alt="ETH" style="width:24px; height:24px; border-radius:50%; background:#f3f3f3; margin-right:7px;">
                    <div>
                        <div class="fw-bold" style="font-size:0.89rem;">{{ $user->referral_id }}</div>
                        <div style="font-size:0.82rem;">{{ $user->full_name ?? $user->name }}</div>
                    </div>
                </div>
                <table class="table table-borderless mb-1" style="font-size:0.81rem; color:#222;">
                    <tr><td>Package</td><td class="text-success fw-bold">{{ $packages->first()->amount ?? 0 }}</td></tr>
                    <tr><td>Earning Wallet</td><td class="text-success fw-bold">{{ number_format($earningWallet,2) }}</td></tr>
                    <tr><td>Deposit Wallet</td><td class="text-success fw-bold">{{ number_format($depositWallet,2) }}</td></tr>
                    <tr><td>Fund Requested</td><td class="text-success fw-bold">{{ number_format($fundRequested,2) }}</td></tr>
                    <tr><td>Matching Bonus</td><td class="text-success fw-bold">{{ $matchingBonus }}</td></tr>
                </table>
                <div class="fw-bold mt-1 mb-1" style="font-size:0.82rem;">MY TEAM</div>
                <div style="font-size:0.81rem;">Left : {{ $leftTeam }} &nbsp; &nbsp; Right : {{ $rightTeam }}</div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card p-2" style="background:#fff; border-radius:7px; border:1px solid #e0e0e0; color:#222; min-height:120px;">
                <div class="fw-bold mb-1" style="font-size:0.89rem;">MY EARNINGS</div>
                <canvas id="earningsChart" height="40"></canvas>
                <div class="row mt-1">
                    <div class="col-6">
                        <div class="fw-bold" style="font-size:0.82rem;">MY EARNINGS</div>
                        <div style="font-size:0.89rem;">{{ $myEarnings }}</div>
                        <div class="text-success" style="font-size:0.81rem;">REFER BONUS {{ $referBonus }}</div>
                        <div class="text-success" style="font-size:0.81rem;">LEVEL BONUS {{ $levelBonus }}</div>
                    </div>
                    <div class="col-6">
                        <div class="fw-bold" style="font-size:0.82rem;">MY PAYOUTS</div>
                        <div style="font-size:0.89rem;">{{ $myPayouts }}</div>
                        <div class="text-warning" style="font-size:0.81rem;">PENDING {{ $pendingPayouts }}</div>
                        <div class="text-success" style="font-size:0.81rem;">APPROVED {{ $approvedPayouts }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scan & Pay + Notifications -->
    <div class="row g-2 mt-2 ps-2 pe-2">
        <div class="col-lg-6">
            <div class="card p-2 text-center" style="background:#fff; border-radius:7px; border:1px solid #e0e0e0; color:#222;">
                <div class="fw-bold mb-1" style="font-size:0.89rem;">Scan & Pay</div>
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=80x80&data={{ $ethAddress }}" alt="QR Code" width="100px" style="margin-bottom:4px;">
                <div class="mb-1" style="font-size:0.81rem;">Payable ETH Address:</div>
                <div class="input-group mb-1" style="max-width:180px; margin:auto;">
                    <input type="text" class="form-control" value="{{ $ethAddress }}" readonly style="background:#f3f3f3; color:#1de9b6; border:1px solid #1de9b6; font-size:0.81rem;">
                    <button class="btn btn-success btn-sm" style="font-size:0.81rem;" onclick="navigator.clipboard.writeText('{{ $ethAddress }}')">Copy</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card p-2" style="background:#fff; border-radius:7px; border:1px solid #e0e0e0; color:#222; min-height:70px;">
                <div class="fw-bold mb-1" style="font-size:0.89rem;">NEWS & NOTIFICATIONS</div>
                <ul class="list-group list-group-flush">
                    @foreach($notifications as $note)
                    <li class="list-group-item d-flex justify-content-between align-items-center" style="background:#f8fafd; color:#222; border:0; font-size:0.81rem;">
                        <span><i class="fas fa-circle" style="color:#1de9b6; font-size:0.6rem;"></i> {{ $note['text'] }}</span>
                        <span style="font-size:0.78rem; color:#888;">{{ $note['date'] }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js for Earnings Chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var ctx = document.getElementById('earningsChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Earnings',
                data: @json($earningsChart),
                backgroundColor: '#1de9b6',
                borderRadius: 2,
            }]
        },
        options: {
            plugins: { legend: { display: false } },
            scales: {
                x: { grid: { display: false }, ticks: { color: '#888', font: { size: 10 } } },
                y: { grid: { color: '#eee' }, ticks: { color: '#888', font: { size: 10 } } }
            }
        }
    });
});
</script>
@endsection