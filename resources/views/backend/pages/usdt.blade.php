@extends('backend.layouts.admin')

@section('title', 'Manage Addresses')

@push('styles')
<style>
    .earnings-box {
        border: 2px solid #00fff7;
        border-radius: 12px;
        background: #181f2a;
        box-shadow: none;
        padding: 32px 24px;
    }

    .form-section {
        border: 2px solid #00fff7;
        border-radius: 12px;
        padding: 24px;
        margin-top: 40px;
        background: #101820;
    }

    .form-section h1 {
        color: #00fff7;
        margin-bottom: 20px;
    }

    .form-section label {
        display: block;
        color: #cbe7f7;
        margin-bottom: 5px;
    }

    .form-section input {
        width: 100%;
        background: #181f2a;
        border: 1px solid #00fff7;
        color: #fff;
        padding: 10px 12px;
        margin-bottom: 15px;
        border-radius: 6px;
    }

    .form-section button {
        background: #00fff7;
        color: #101820;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
    }

    .form-section button:hover {
        background: #00e0da;
    }

    .table-section {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table th, table td {
        border: 1px solid #00fff733;
        padding: 12px;
        text-align: left;
        color: #fff;
    }

    table thead {
        background: #232b38;
    }

    table thead th {
        color: #cbe7f7;
        font-weight: 600;
    }

    table tbody tr:hover {
        background: #232b38;
    }

    table a {
        color: #00fff7;
        text-decoration: underline;
        margin-right: 10px;
    }

    table form button {
        background: none;
        border: none;
        color: #ff5c5c;
        cursor: pointer;
    }
</style>
@endpush

@section('content')

<div class="table-section">
    <h1 style="color:#00fff7;">Addresses</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Key</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($addresses as $address)
            <tr>
                <td>{{ $address->id }}</td>
                <td>{{ $address->name }}</td>
                <td>{{ $address->address_key }}</td>
                <td>
                    <!-- Edit form trigger - we use same page edit for simplicity -->
                    <button onclick="showEditForm({{ $address->id }}, '{{ $address->name }}', '{{ $address->address_key }}')" class="btn btn-primary">
                        Edit
                    </button>

                    <form action="{{ route('admin.addresses.destroy', $address) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this address?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="form-section">
    <h1 id="formTitle">Create New Address</h1>

    <form id="addressForm" action="{{ route('admin.addresses.store') }}" method="POST">
        @csrf
        <input type="hidden" name="_method" id="formMethod" value="POST">
        <input type="hidden" name="id" id="addressId">

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="nameField" required>
        </div>

        <div>
            <label for="address_key">Key:</label>
            <input type="text" name="address_key" id="keyField" required>
        </div>

        <button type="submit" id="formButton">Save Address</button>
    </form>
</div>

<script>
    function showEditForm(id, name, key) {
        // Change form title
        document.getElementById('formTitle').innerText = 'Edit Address';

        // Set form action to update route
        document.getElementById('addressForm').action = `/admin/addresses/${id}`;
        document.getElementById('formMethod').value = 'PUT';

        // Fill values
        document.getElementById('addressId').value = id;
        document.getElementById('nameField').value = name;
        document.getElementById('keyField').value = key;

        // Change button text
        document.getElementById('formButton').innerText = 'Update Address';
    }
</script>

@endsection
