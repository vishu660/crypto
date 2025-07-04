@extends('user.main')

@section('content')
<div class="d2c_main p-4">
    <div class="row align-items-center mb-4">
        <div class="col">
            <h4 class="text-capitalize fw-bold">Bank Details</h4>
            <p class="mb-0">Manage your bank account information for withdrawals and transfers.</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card bg-primary bg-opacity-10">
                <div class="card-body p-4">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @php
                        $bank = auth()->user()->bankDetail;
                    @endphp

                    @if($bank)
                        <div class="mb-3">
                            <label class="form-label">Account Holder:</label>
                            <div class="form-control">{{ $bank->account_holder }}</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bank Name:</label>
                            <div class="form-control">{{ $bank->bank_name }}</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Account Number:</label>
                            <div class="form-control">{{ $bank->account_number }}</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">IFSC Code:</label>
                            <div class="form-control">{{ $bank->ifsc_code }}</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status:</label>
                            @if($bank->is_approved)
                                <span class="badge bg-success">✅ Approved</span>
                            @else
                                <span class="badge bg-warning text-dark">⏳ Pending Approval</span>
                            @endif
                        </div>

                        @if($bank->is_approved)
                        <a href="#" class="btn btn-primary w-100 mt-3" data-bs-toggle="modal" data-bs-target="#updateModal">Update Bank Details</a>
                        @endif

                        <!-- Modal for Update (optional) -->
                        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Update Bank Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form method="POST" action="{{ route('user.bank.save') }}">
                                  @csrf
                                  <div class="modal-body">
                                      <div class="mb-3">
                                          <label>Account Holder</label>
                                          <input type="text" class="form-control" name="account_holder" value="{{ $bank->account_holder }}" required>
                                      </div>
                                      <div class="mb-3">
                                          <label>Bank Name</label>
                                          <input type="text" class="form-control" name="bank_name" value="{{ $bank->bank_name }}" required>
                                      </div>
                                      <div class="mb-3">
                                          <label>Account Number</label>
                                          <input type="text" class="form-control" name="account_number" value="{{ $bank->account_number }}" required>
                                      </div>
                                      <div class="mb-3">
                                          <label>IFSC Code</label>
                                          <input type="text" class="form-control" name="ifsc_code" value="{{ $bank->ifsc_code }}" required>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="submit" class="btn btn-success w-100">Update</button>
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>
                    @else
                        <!-- First time form -->
                        <form method="POST" action="{{ route('user.bank.save') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Account Holder Name</label>
                                <input type="text" class="form-control" name="account_holder" placeholder="Enter account holder name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bank Name</label>
                                <input type="text" class="form-control" name="bank_name" placeholder="Enter bank name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Account Number</label>
                                <input type="text" class="form-control" name="account_number" placeholder="Enter account number" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">IFSC Code</label>
                                <input type="text" class="form-control" name="ifsc_code" placeholder="Enter IFSC code" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Save Bank Details</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
