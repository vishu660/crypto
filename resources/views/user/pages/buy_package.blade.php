

            <!-- Title -->
            @extends('user.main')

            @section('content')
            <!-- End:Title -->
            <div class="container mt-5">
                <h2>Buy Package: {{ $package->name }}</h2>
                <p>Amount: USDT {{ $package->amount }}</p>
        
                <div class="row">
                    <div class="col-6 col-md-8 mb-3 offset-1">
                        <!-- Admin Request Button -->
                        <form action="{{ route('user.package.buyWithRequest') }}" method="POST">
                            @csrf
                            <input type="hidden" name="package_id" value="{{ $package->id }}">
                            <button type="submit" class="btn btn-warning btn-lg w-100 shadow-sm" style="font-weight:700; border-radius: 16px;">
                                <i class="fas fa-paper-plane me-2"></i> Buy with Admin Request
                            </button>
                        </form>
                    </div>
                    <div class="col-6 col-md-8 mb-3 offset-1">
                        <!-- Buy with Crypto Button -->
                        <form id="crypto-buy-form">
                            @csrf
                            <input type="hidden" name="package_id" value="{{ $package->id }}">
                            <input type="hidden" name="amount" value="{{ $package->amount }}">
                            <button type="button" class="btn btn-primary btn-lg w-100 shadow-sm" style="font-weight:700; border-radius: 16px;" onclick="buyWithCrypto()">
                                <i class="fab fa-bitcoin me-2"></i> Buy with Crypto (USDT)
                            </button>
                        </form>
                    </div>
                    <div class="col-6 col-md-8 mb-3 offset-1">
                        <!-- Admin Code Form -->
                        <form action="{{ route('user.package.buyWithCode') }}" method="POST">
                            @csrf
                            <input type="hidden" name="package_id" value="{{ $package->id }}">
                            <input type="text" name="secret_code" placeholder="Enter Secret Code" class="form-control mt-2 mb-2" required>
                            <button type="submit" class="btn btn-success btn-lg w-100 shadow-sm" style="font-weight:700; border-radius: 16px;">
                                <i class="fas fa-key me-2"></i> Buy with Code
                            </button>
                        </form>
                    </div>
                </div>
            </div>
         

            
            <!-- copyright -->
            <div class="d2c_copyright bg-success bg-opacity-10 p-3 text-center mt-4">
                <p class="mb-0 fw-semibold">© 2023 <a href="https://www.designtocodes.com/" target="_blank" class="fw-bold">DesignToCodes</a>, All rights Reserved</p>
            </div>

        </div>
    </div>

    <!-- Offcanvas Toggler -->
    <button class="d2c_offcanvas_toggle position-fixed top-50 end-0 translate-middle-y d-block d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#d2c_sidebar_right" aria-controls="d2c_sidebar_right">
        <i class="fas fa-chevron-left"></i>
    </button>
    <!-- End:Offcanvas Toggler -->

    <!-- Initial  Javascript -->
    

    <script>
     function buyWithCrypto() {
    const form = $('#crypto-buy-form');
    const package_id = form.find('input[name="package_id"]').val();
    const amount = form.find('input[name="amount"]').val();
    
    // Disable button to prevent multiple clicks
    const button = form.find('button[type="button"]');
    button.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i> Processing...');

    $.ajax({
        url: "{{ route('nowpayment.create') }}",
        method: "POST",
        data: {
            _token: '{{ csrf_token() }}',
            amount: amount,
            package_id: package_id
        },
        success: function(response) {
            if (response.success) {
                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: 'Payment Created!',
                    text: 'Redirecting to payment page...',
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    // Open payment URL in new tab
                    window.open(`https://nowpayments.io/payment/?iid=${response.payment_id}`, '_blank');

                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Payment Failed',
                    text: response.message || 'Payment creation failed'
                });
            }
        },
        error: function(xhr) {
            let errorMessage = 'Something went wrong';
            
            if (xhr.responseJSON && xhr.responseJSON.message) {
                errorMessage = xhr.responseJSON.message;
            } else if (xhr.responseJSON && xhr.responseJSON.errors) {
                errorMessage = Object.values(xhr.responseJSON.errors).flat().join(', ');
            }
            
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: errorMessage
            });
        },
        complete: function() {
            // Re-enable button
            button.prop('disabled', false).html('<i class="fab fa-bitcoin me-2"></i> Buy with Crypto (USDT)');
        }
    });
}
    </script>
@endsection
