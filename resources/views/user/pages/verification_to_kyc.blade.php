@extends('user.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center justify-content-md-start">
        <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 ms-md-5">
            <div class="card bg-dark text-white shadow-lg border-0" style="border-radius: 18px;">
                <div class="card-body p-4 p-md-5">
                    <div class="d-flex align-items-center mb-3 flex-column flex-sm-row text-center text-sm-start">
                        <span class="bg-danger rounded-circle d-flex align-items-center justify-content-center me-0 me-sm-3 mb-3 mb-sm-0" style="width:48px;height:48px;">
                            <i class="bi bi-x-lg" style="font-size:2rem;color:#fff;"></i>
                        </span>
                        <h2 class="mb-0 fw-bold fs-4 fs-md-2">Verification Unsuccessful</h2>
                    </div>
                    <p class="text-danger mb-4" style="font-size:1.1rem;">
                        <i class="bi bi-exclamation-circle me-2"></i>
                        Your verification seems to be incomplete. Please try again.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 mb-4">
                        <a href="{{ url('/user/pages/kyc-step1-new') }}" class="btn btn-warning btn-lg fw-bold flex-fill">Varification</a>
                        <a href="#" class="btn btn-secondary btn-lg fw-bold flex-fill" data-bs-toggle="modal" data-bs-target="#restartModal">Start from Beginning</a>
                    </div>
                    <!-- <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-headphones"></i>
                        <span>Need help?</span>
                        <a href="#" class="text-white ms-2"><i class="bi bi-question-circle"></i> Identity Verification FAQ</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Restart Modal -->
<div class="modal fade" id="restartModal" tabindex="-1" aria-labelledby="restartModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-white text-center" style="border-radius: 18px;">
      <div class="modal-body p-4 p-md-5">
        <div class="mb-3">
          <span class="d-inline-flex align-items-center justify-content-center bg-warning bg-opacity-25 rounded-circle" style="width:70px;height:70px;">
            <span class="fs-1 text-warning">&#33;</span>
          </span>
        </div>
        <div class="mb-4 fs-6 fs-md-5">All saved progress will be reset, including your country of residence.</div>
        <div class="d-grid gap-2">
          <a href="{{ route('user.pages.kyc_step1_new') }}" class="btn btn-yellow btn-lg fw-bold">Restart</a>
          <button type="button" class="btn btn-secondary btn-lg fw-bold" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush
@endsection 