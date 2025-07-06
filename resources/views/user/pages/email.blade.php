@extends('user.main')
@section('content')
<div class="container py-4">
    <h4 class="mb-4">Inbox</h4>
    <!-- Filter Bar -->
    <form method="GET" class="mb-4 d-flex gap-2 align-items-center">
        <label class="fw-semibold me-2">Filter:</label>
        <button type="submit" name="filter" value="all" class="btn btn-outline-primary btn-sm {{ request('filter', 'all') == 'all' ? 'active' : '' }}">All</button>
        <button type="submit" name="filter" value="today" class="btn btn-outline-success btn-sm {{ request('filter') == 'today' ? 'active' : '' }}">Today</button>
        <button type="submit" name="filter" value="daily" class="btn btn-outline-info btn-sm {{ request('filter') == 'daily' ? 'active' : '' }}">Daily</button>
    </form>
    <!-- End Filter Bar -->

    {{--
        In your controller, filter messages like:
        $query = Message::where('receiver_id', $user->id);
        if ($request->filter == 'today') {
            $query->whereDate('created_at', today());
        } elseif ($request->filter == 'daily') {
            // For daily grouping, fetch all and groupBy date in Blade
        }
        $messages = $query->latest()->paginate(10);
    --}}

    @if(request('filter') == 'daily')
        @php
            $grouped = $messages->groupBy(fn($msg) => $msg->created_at->format('d-m-Y'));
        @endphp
        @forelse($grouped as $date => $msgs)
            <h6 class="mt-4 mb-2 text-primary">{{ $date }}</h6>
            @foreach($msgs as $msg)
                <div class="card shadow-sm mb-2 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="fw-bold text-dark">From:</span>
                            <span class="text-muted small">{{ $msg->created_at->format('h:i A') }}</span>
                        </div>
                        <div class="mb-1">
                            @php
                                $referrerName = null;
                                $referrerReferralId = null;
                                $referrerIsAdmin = false;
                                if (!empty($msg->sender->referral_by)) {
                                    $refUser = \App\Models\User::find($msg->sender->referral_by);
                                    if ($refUser) {
                                        $referrerName = $refUser->full_name;
                                        $referrerReferralId = $refUser->referral_id;
                                        $referrerIsAdmin = ($refUser->role ?? null) === 'admin' || $refUser->id == 1;
                                    }
                                }
                            @endphp
                            <span class="fw-semibold">
                                @if(!empty($msg->sender->referral_by) && $referrerIsAdmin)
                                    Admin
                                @else
                                    {{ $msg->sender->full_name ?? 'Unknown User' }}
                                    @if(!empty($msg->sender->referral_by) && $referrerName && !$referrerIsAdmin)
                                        <span class="badge bg-secondary ms-2">{{ $referrerReferralId }} - {{ $referrerName }}</span>
                                    @endif
                                @endif
                            </span>
                        </div>
                        <div class="mb-1"><span class="fw-bold">Subject:</span> {{ $msg->subject }}</div>
                        <div><span class="fw-bold">Message:</span> {{ $msg->message }}</div>
                    </div>
                </div>
            @endforeach
        @empty
            <p>No messages found.</p>
        @endforelse
    @else
        @forelse($messages as $msg)
            <div class="card shadow-sm mb-3 border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="fw-bold text-dark">From:</span>
                        <span class="text-muted small">{{ $msg->created_at->format('d-m-Y h:i A') }}</span>
                    </div>
                    <div class="mb-1">
                        @php
                            $referrerName = null;
                            $referrerReferralId = null;
                            $referrerIsAdmin = false;
                            if (!empty($msg->sender->referral_by)) {
                                $refUser = \App\Models\User::find($msg->sender->referral_by);
                                if ($refUser) {
                                    $referrerName = $refUser->full_name;
                                    $referrerReferralId = $refUser->referral_id;
                                    $referrerIsAdmin = ($refUser->role ?? null) === 'admin' || $refUser->id == 1;
                                }
                            }
                        @endphp
                        <span class="fw-semibold">
                            @if(!empty($msg->sender->referral_by) && $referrerIsAdmin)
                                Admin
                            @else
                                {{ $msg->sender->full_name ?? 'Unknown User' }}
                                @if(!empty($msg->sender->referral_by) && $referrerName && !$referrerIsAdmin)
                                    <span class="badge bg-secondary ms-2">{{ $referrerReferralId }} - {{ $referrerName }}</span>
                                @endif
                            @endif
                        </span>image.png
                    </div>
                    <div class="mb-1"><span class="fw-bold">Subject:</span> {{ $msg->subject }}</div>
                    <div><span class="fw-bold">Message:</span> {{ $msg->message }}</div>
                </div>
            </div>
        @empty
            <p>No messages found.</p>
        @endforelse
    @endif

    <div>
        {{ $messages->appends(request()->query())->links() }}
    </div>
</div>
@endsection