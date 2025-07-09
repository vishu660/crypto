{{-- resources/views/components/message-card.blade.php --}}
@props(['msg'])

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
            </span>
        </div>
        <div class="mb-1"><span class="fw-bold">Subject:</span> {{ $msg->subject }}</div>
        <div><span class="fw-bold">Message:</span> {{ $msg->message }}</div>
    </div>
</div> 