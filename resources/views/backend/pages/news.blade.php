@extends('backend.layouts.admin')

@section('title', 'Manage News')

@section('content')

<div class="container">
    @if(isset($editNews))
        <h1>Edit News</h1>
        <form method="POST" action="{{ route('news.update', $editNews->id) }}">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>Title</label>
                <input name="title" class="form-control" value="{{ $editNews->title }}" required>
            </div>
            <div class="mb-3">
                <label>Content</label>
                <textarea name="content" class="form-control">{{ $editNews->content }}</textarea>
            </div>
            <button class="btn btn-primary">Update</button>
            <a href="{{ route('news.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    @else
        <h1>Add News</h1>
        <form method="POST" action="{{ route('news.store') }}">
            @csrf
            <div class="mb-3">
                <label>Title</label>
                <input name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Content</label>
                <textarea name="content" class="form-control"></textarea>
            </div>
            <button class="btn btn-primary">Save</button>
        </form>
    @endif
</div>

<div class="container mt-5">
    <h1>All News</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr><th>ID</th><th>Title</th><th>Content</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($news as $item)
                @if(is_object($item))
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->content }}</td>
                        <td>
                            <a href="{{ route('news.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>

@endsection
