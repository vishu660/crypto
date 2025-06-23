@extends('backend.layouts.admin')

@section('content')
<div class="members-container">
    <div class="row">
        <div class="col-12">
            <p class="text-white"><a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:underline;">Dashboard</a>/TeamMembers' Password</p>
        </div>
    </div>
    <h2 class="members-title">Members' Password</h2>
    <div class="filter-bar">
        <form method="GET" action="" class="filter-form">
            <div class="filter-group">
                <span class="filter-label">Show</span>
                <select name="entries" class="filter-select">
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
                <span class="filter-label">entries</span>
                <input type="date" name="start_date" class="filter-input" placeholder="start date">
                <span class="filter-to">to</span>
                <input type="date" name="end_date" class="filter-input" placeholder="end date">
                <button type="submit" class="filter-btn"><i class="bi bi-search"></i></button>
            </div>
            <div class="filter-search-group">
                <span class="filter-label">Search:</span>
                <input type="text" name="search" id="search" class="filter-search-input" placeholder="Search...">
            </div>
        </form>
    </div>
    <div class="members-table-wrapper">
        <table class="members-table">
            <thead>
                <tr>
                    <th>Member ID</th>
                    <th>Name</th>
                    <th>Account Password</th>
                    <th>Transaction Password</th>
                </tr>
            </thead>
            <tbody>
                @if($members->count() > 0)
                    @foreach($members as $member)
                    <tr>
                        <td>{{ $member->id ?? '-' }}</td>
                        <td>{{ $member->full_name ?? '-' }}</td>
                        <td>{{ $member->password ?? '-' }}</td>
                        <td>{{ $member->transaction_password ?? '-' }}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center text-muted">No data available in table</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <div class="d-flex justify-content-between align-items-center mt-2">
            <div class="datatable-info">
                Showing 0 to 0 of 0 entries
            </div>
            <div class="datatable-pagination">
                <button class="btn btn-sm btn-secondary me-1" disabled>Previous</button>
                <button class="btn btn-sm btn-secondary" disabled>Next</button>
            </div>
        </div>
    </div>
</div>

<style>
.members-container {
    background: #181f26;
    border-radius: 12px;
    padding: 32px 24px;
    margin: 32px auto;
    max-width: 98vw;
    box-shadow: 0 0 16px 0 #0ff2ff33;
    border: 2px solid #00e6fb;
}
.members-title {
    color: #fff;
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 24px;
    letter-spacing: 1px;
}
.members-table-wrapper {
    overflow-x: auto;
}
.members-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    background: #232b33;
    color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 8px #00e6fb44;
    border: 1.5px solid #00e6fb;
}
.members-table th, .members-table td {
    padding: 14px 18px;
    border-bottom: 1px solid #00e6fb33;
    text-align: left;
    font-size: 1rem;
}
.members-table th {
    background: #b8c7ce;
    color: #232b33;
    font-weight: bold;
    border-bottom: 2px solid #b8c7ce;
    font-size: 1.05rem;
}
.members-table tr:last-child td {
    border-bottom: none;
}
.datatable-info {
    color: #b8c7ce;
    font-size: 1rem;
}
.datatable-pagination .btn-secondary {
    background: #232b33;
    color: #b8c7ce;
    border: 1px solid #b8c7ce;
    border-radius: 4px;
    font-size: 0.95rem;
    padding: 2px 14px;
    opacity: 0.7;
}
.datatable-pagination .btn-secondary:disabled {
    opacity: 0.5;
}
@media (max-width: 900px) {
    .members-container {
        padding: 12px 2px;
    }
    .members-title {
        font-size: 1.3rem;
    }
    .members-table th, .members-table td {
        padding: 8px 6px;
        font-size: 0.95rem;
    }
}
.filter-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 18px;
    background: transparent;
}
.filter-form {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
}
.filter-group {
    display: flex;
    align-items: center;
    gap: 6px;
}
.filter-input {
    background: #232b33;
    border: 1px solid #b8c7ce;
    color: #fff;
    border-radius: 4px;
    padding: 6px 10px;
    font-size: 1rem;
    width: 130px;
}
.filter-to {
    color: #b8c7ce;
    margin: 0 4px;
}
.filter-btn {
    background: #b8c7ce;
    border: none;
    color: #232b33;
    border-radius: 4px;
    padding: 6px 12px;
    font-size: 1.1rem;
    cursor: pointer;
    margin-left: 6px;
    transition: background 0.2s;
}
.filter-btn:hover {
    background: #00e6fb;
    color: #181f26;
}
.filter-search-group {
    display: flex;
    align-items: center;
    gap: 6px;
}
.filter-label {
    color: #b8c7ce;
    font-size: 1rem;
}
.filter-search-input {
    background: #232b33;
    border: 1px solid #b8c7ce;
    color: #fff;
    border-radius: 4px;
    padding: 6px 10px;
    font-size: 1rem;
    width: 160px;
}
</style>
@endsection 