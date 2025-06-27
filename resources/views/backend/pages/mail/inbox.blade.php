@extends('backend.layouts.admin')

@section('title', 'Inbox')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h4 class="breadcrumb-title">
                <a href="{{ route('admin-dashboard') }}" style="color:#00fff7; text-decoration:none;">Dashboard</a> /
                <a href="{{ route('admin.mail.inbox') }}" style="color:#00fff7; text-decoration:none;">Inbox</a>
            </h4>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Sidebar -->
      

        <!-- Inbox Messages -->
        <div class="col-lg-9">
            <div class="mail-card">
                <h5 class="card-title mb-4">📥 Inbox</h5>

                @forelse($messages as $msg)
                    <div class="p-4 mb-4 rounded shadow-sm" style="background-color: #101820; border: 1px solid #00fff7;">
                        <p class="mb-1"><strong style="color:#00fff7;">From:</strong> {{ $msg->sender->full_name ?? 'Unknown' }}</p>
                        <p class="mb-1"><strong style="color:#00fff7;">Subject:</strong> {{ $msg->subject }}</p>
                        <p class="mb-2"><strong style="color:#00fff7;">Message:</strong> {{ $msg->message }}</p>
                        <p class="small mb-0" style="color: #ffffff;">🕒 {{ $msg->created_at->format('d M Y h:i A') }}</p>
                    </div>
                @empty
                    <p class="text-white">No inbox messages found.</p>
                @endforelse

                <div class="mt-3">
                    {{ $messages->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
