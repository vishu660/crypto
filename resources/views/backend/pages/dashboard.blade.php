@extends('backend.layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>Total Users</h6>
            <h3>13</h3>
            <small>1 Active, 12 Inactive</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>Total Activation</h6>
            <h3>250</h3>
            <small>Today: 0, Week: 0, Month: 0</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>Total Earnings</h6>
            <h3>₹0</h3>
            <small>Today: ₹0, Week: ₹0, Month: ₹0</small>
        </div>
    </div>
    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>Payouts</h6>
            <h3>0</h3>
            <small>Unpaid: 0, Paid: 0, Today: 0</small>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="dashboard-card">
            <h6>Activations & Earnings</h6>
            <canvas id="earningsChart" height="100"></canvas>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dashboard-card">
            <h6>Team Summary</h6>
            <canvas id="teamChart" height="100"></canvas>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Dummy data for charts
    const ctx = document.getElementById('earningsChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Activations',
                data: [0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                backgroundColor: '#7fffd4',
            }, {
                label: 'Earnings',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                backgroundColor: '#00bcd4',
            }]
        },
        options: {
            plugins: { legend: { labels: { color: '#fff' } } },
            scales: { x: { ticks: { color: '#fff' } }, y: { ticks: { color: '#fff' } } }
        }
    });
    const ctx2 = document.getElementById('teamChart').getContext('2d');
    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['ROI Income', 'Passive Income', 'Direct Income', 'Royalty', 'Rewards'],
            datasets: [{
                data: [0, 0, 0, 0, 0],
                backgroundColor: ['#7fffd4', '#00bcd4', '#4caf50', '#ff9800', '#e91e63'],
            }]
        },
        options: {
            plugins: { legend: { labels: { color: '#fff' } } }
        }
    });
</script>
@endpush 