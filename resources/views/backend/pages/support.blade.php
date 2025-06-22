@extends('backend.layouts.admin')

@section('title', 'Support - Mail')

@push('styles')
<style>
    /* Page-specific styles can go here */
    .mail-nav .nav-link {
        color: #b2f7ef;
        padding: 10px 15px;
        border-left: 3px solid transparent;
        transition: all 0.2s;
    }
    .mail-nav .nav-link.active, .mail-nav .nav-link:hover {
        border-left-color: #00fff7;
        background-color: #00fff71a;
        color: #fff;
    }
    .mail-nav .nav-link .badge {
        background-color: #00fff7 !important;
        color: #101820 !important;
        font-weight: 600;
    }
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h4 class="mb-0 breadcrumb-title">Dashboard / Mail</h4>
        </div>
    </div>
    <div class="row mt-4">
        <!-- Mail Sidebar -->
        <div class="col-lg-3">
            <div class="mail-card p-3 mb-4">
                <a href="#" class="btn compose-btn w-100 mb-3">Compose</a>
                <ul class="nav flex-column mail-nav">
                    <li class="nav-item">
                        <a class="nav-link active d-flex justify-content-between align-items-center" href="#">
                            <span><i class="bi bi-inbox-fill me-2"></i> Inbox</span>
                            <span class="badge">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center" href="#">
                            <span><i class="bi bi-send-fill me-2"></i> Sent Mail</span>
                            <span class="badge">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- New Mail Form -->
        <div class="col-lg-9">
            <div class="mail-card">
                <h5 class="card-title mb-4">New Mail</h5>
                <form>
                    <div class="mb-3">
                        <label for="receiverId" class="form-label">Receiver ID*</label>
                        <input type="text" class="form-control" id="receiverId" placeholder="Receiver ID">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject*</label>
                        <select class="form-select" id="subject">
                            <option selected>------- Select Subject -------</option>
                            <option value="1">General Inquiry</option>
                            <option value="2">Technical Support</option>
                            <option value="3">Billing Question</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message*</label>
                        <textarea class="form-control" id="message" rows="8" placeholder="Enter message here"></textarea>
                    </div>
                    <button type="submit" class="btn send-btn">SEND</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 