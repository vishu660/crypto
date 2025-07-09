@extends('user.main')

@php
    $filter = $filter ?? 'all';
    $messages = $messages ?? collect();
@endphp

@section('content')
<div class="container py-4">
    <h4 class="mb-4">Inbox</h4>

    <!-- Filter -->
    <form method="GET" class="mb-4 d-flex gap-2 align-items-center">
        <label class="fw-semibold me-2">Filter:</label>
        <button type="submit" name="filter" value="all" class="btn btn-outline-primary btn-sm {{ $filter == 'all' ? 'active' : '' }}">All</button>
        <button type="submit" name="filter" value="today" class="btn btn-outline-success btn-sm {{ $filter == 'today' ? 'active' : '' }}">Today</button>
        <button type="submit" name="filter" value="daily" class="btn btn-outline-info btn-sm {{ $filter == 'daily' ? 'active' : '' }}">Daily</button>
    </form>

    @if($filter === 'daily')
        @php
            $grouped = $messages->groupBy(fn($msg) => $msg->created_at->format('d-m-Y'));
        @endphp
        @forelse($grouped as $date => $msgs)
            <h6 class="mt-4 mb-2 text-primary">{{ $date }}</h6>
            @foreach($msgs as $msg)
                <x-message-card :msg="$msg" />
            @endforeach
        @empty
            <p>No messages found.</p>
        @endforelse
    @else
        @forelse($messages as $msg)
            <x-message-card :msg="$msg" />
        @empty
            <p>No messages found.</p>
        @endforelse

        @if($messages instanceof \Illuminate\Pagination\LengthAwarePaginator || $messages instanceof \Illuminate\Pagination\Paginator)
            <div>
                {{ $messages->appends(request()->query())->links() }}
            </div>
        @endif
    @endif
</div>
@endsection
