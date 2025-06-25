<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card bg-secondary p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-3">OTP Verification</h3>

        <div class="alert alert-info">
            OTP sent to: <strong>{{ $user->mobile_no }}</strong>
        </div>

        <form action="{{ route('verify-otp.post') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">

            <div class="mb-3">
                <label for="otp" class="form-label">Enter OTP</label>
                <input type="text" name="otp" class="form-control" placeholder="Enter 4-digit OTP" required>
            </div>

            <button type="submit" class="btn btn-warning w-100">Verify OTP</button>
        </form>

        <div class="mt-4">
            <p><strong>Login Password:</strong> {{ $rawPassword }}</p>
            <p><strong>Txn Password:</strong> {{ $rawTxnPassword }}</p>
        </div>
    </div>
</div>

</body>
</html>
