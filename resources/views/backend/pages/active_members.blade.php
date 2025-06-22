@extends('backend.layouts.admin')

@section('content')
<div class="members-container">
    <h2 class="members-title">Active Members</h2>
    <div class="filter-bar compact-bar">
        <form method="GET" action="" class="filter-form compact-form">
            <div class="filter-group compact-group">
                <span class="filter-label">Show</span>
                <select name="entries" class="filter-select">
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
                <span class="filter-label">entries</span>
                <input type="date" name="start_date" class="filter-input compact-input" placeholder="start date">
                <span class="filter-to">to</span>
                <input type="date" name="end_date" class="filter-input compact-input" placeholder="end date">
                <button type="submit" class="filter-btn compact-btn"><i class="bi bi-search"></i></button>
            </div>
            <div class="filter-search-group compact-search-group">
                <span class="filter-label">Search:</span>
                <input type="text" name="search" id="search" class="filter-search-input compact-search-input" placeholder="Search...">
            </div>
        </form>
    </div>
    <div class="members-table-wrapper compact-table-wrapper">
        <table class="members-table compact-table">
            <thead>
                <tr>
                    <th>Member ID</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email ID</th>
                    <th>Join Date</th>
                    <th>Activation Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr>
                    <td>{{ $member->id ?? '-' }}</td>
                    <td>{{ $member->full_name ?? '-' }}</td>
                    <td>{{ $member->mobile_no ?? '-' }}</td>
                    <td>{{ $member->email_id ?? '-' }}</td>
                    <td>{{ $member->created_at ? $member->created_at->format('d-m-Y h:i a') : '-' }}</td>
                    <td>{{ $member->updated_at ? $member->updated_at->format('d-m-Y h:i a') : '-' }}</td>
                    <td>
                        <button class="btn-details">Details</button>
                        <button class="btn-block">Block Now</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
    font-weight: 600;
    border-bottom: 2px solid #00e6fb;
}
.members-table tr:last-child td {
    border-bottom: none;
}
.btn-details {
    background: #ffb400;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 7px 16px;
    font-weight: 600;
    margin-right: 6px;
    cursor: pointer;
    transition: background 0.2s;
}
.btn-details:hover {
    background: #ff9800;
}
.btn-block {
    background: #ff5c6c;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 7px 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.2s;
}
.btn-block:hover {
    background: #e53935;
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
.compact-bar {
    background: transparent;
    margin-bottom: 0;
    padding-bottom: 0;
    border-radius: 0;
    border-bottom: none;
    box-shadow: none;
}
.compact-form {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    gap: 0;
    margin-bottom: 0;
}
.compact-group {
    display: flex;
    align-items: center;
    gap: 8px;
}
.filter-label {
    color: #b8c7ce;
    font-size: 1rem;
    font-weight: 500;
}
.filter-select {
    background: #b8c7ce;
    color: #232b33;
    border: none;
    border-radius: 3px;
    padding: 2px 8px;
    font-size: 1rem;
    font-weight: 600;
    outline: none;
}
.compact-input {
    width: 120px;
    padding: 4px 8px;
    font-size: 0.98rem;
}
.compact-btn {
    background: #b8c7ce;
    color: #232b33;
    border-radius: 3px;
    padding: 4px 10px;
    font-size: 1rem;
    margin-left: 4px;
    border: none;
    transition: background 0.2s;
}
.compact-btn:hover {
    background: #00e6fb;
    color: #181f26;
}
.compact-search-group {
    display: flex;
    align-items: center;
    gap: 6px;
}
.compact-search-input {
    width: 140px;
    padding: 4px 8px;
    font-size: 0.98rem;
    background: #232b33;
    border: 1px solid #b8c7ce;
    color: #fff;
    border-radius: 3px;
}
.compact-table-wrapper {
    margin-top: 0;
}
.compact-table {
    border-radius: 0;
    box-shadow: none;
    border: none;
    margin-top: 0;
}
.compact-table th {
    background: #b8c7ce;
    color: #232b33;
    font-weight: bold;
    border-bottom: 2px solid #b8c7ce;
    font-size: 1.05rem;
}
.compact-table td {
    background: #232b33;
    color: #fff;
    font-size: 1rem;
}
.compact-table tr:last-child td {
    border-bottom: none;
}
@media (max-width: 900px) {
    .members-container {
        padding: 12px 2px;
    }
    .members-title {
        font-size: 1.3rem;
    }
    .compact-table th, .compact-table td {
        padding: 8px 6px;
        font-size: 0.95rem;
    }
    .compact-input, .compact-search-input {
        width: 80px;
        font-size: 0.9rem;
    }
}
</style>
@endsection 