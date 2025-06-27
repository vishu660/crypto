@extends('backend.layouts.admin')

@section('title', 'Compose Mail')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h4 class="breadcrumb-title">
                <a href="{{ route('admin-dashboard') }}" style="color:#00fff7;">Dashboard</a> / 
                <a href="{{ route('admin.mail.compose') }}" style="color:#00fff7;">Compose</a>
            </h4>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Sidebar -->
     

        <!-- Compose Form -->
        <div class="col-lg-3">
            <div class="mail-card p-3 mb-4">
                <a href="{{ route('admin.mail.compose') }}" class="btn compose-btn w-100 mb-3">Compose</a>
                <ul class="nav flex-column mail-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.mail.inbox') ? 'active' : '' }} d-flex justify-content-between align-items-center" href="{{ route('admin.mail.inbox') }}">
                            <span><i class="bi bi-inbox-fill me-2"></i> Inbox</span>
                            <span class="badge">{{ $inboxCount ?? 0 }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.mail.sent') ? 'active' : '' }} d-flex justify-content-between align-items-center" href="{{ route('admin.mail.sent') }}">
                            <span><i class="bi bi-send-fill me-2"></i> Sent Mail</span>
                            <span class="badge">{{ $sentCount ?? 0 }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        

        <!-- New Mail Form -->
        <div class="col-lg-9">
            <div class="mail-card">
                <h5 class="card-title mb-4">New Mail</h5>
                <form action="{{ route('admin.mail.send') }}" method="POST">
                    @csrf
                
                    <div class="mb-3">
                        <label for="receiverId" class="form-label">Receiver ID*</label>
                        <input type="text" name="referral_id" class="form-control" placeholder="Enter Referral ID" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject*</label>
                        <select class="form-select" name="subject" required>
                            <option value="" disabled selected>------- Select Subject -------</option>
                            <option value="BONUS">BONUS</option>
                            <option value="WITHDRAWAL">WITHDRAWAL</option>
                            <option value="DEPOSIT">DEPOSIT</option>
                            <option value="PROFILE CHANGE">PROFILE CHANGE</option>
                            <option value="ACTIVATE NEW ID">ACTIVATE NEW ID</option>
                            <option value="REGISTRATION">REGISTRATION</option>
                        </select>
                    </div>
                
                    <div class="mb-3">
                        <label for="message" class="form-label">Message*</label>
                        <textarea class="form-control" name="message" rows="6" placeholder="Enter your message here..." required></textarea>
                    </div>
                
                    <button type="submit" class="btn send-btn">SEND</button>
                </form>
                
                
                
            </div>
        </div>
    </div>
</div>
@endsection
