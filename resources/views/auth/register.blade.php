<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background: #101820;
      color: #fff;
      font-family: 'Poppins', sans-serif;
    }

    .signup-card {
      background-color: #181f2a;
      padding: 35px 25px;
      border-radius: 18px;
      max-width: 400px;
      width: 100%;
      margin: 6% auto;
      color: #fff;
      border: 1px solid #00fff7;
      box-shadow: 0 6px 15px rgba(0, 255, 247, 0.15);
    }

    .form-control,
    .input-group-text,
    .country-code-select {
      background-color: #101820;
      border: 1px solid #00fff7;
      color: #fff;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #00e0d5;
      box-shadow: 0 0 0 0.2rem rgba(0, 255, 247, 0.25);
      background-color: #101820;
      color: #fff;
    }

    .form-control::placeholder {
      color: #888;
    }

    .form-select option {
      background-color: #101820;
      color: #fff;
    }

    .logo {
      display: block;
      margin: 0 auto 15px;
      width: 70px;
    }

    h2 {
      text-align: center;
      font-size: 1.9rem;
      font-weight: 700;
      color: #00fff7;
      margin-bottom: 25px;
    }

    .signup-btn {
      background-color: #00fff7;
      color: #101820;
      font-weight: 600;
      border: none;
      padding: 12px;
      font-size: 1rem;
    }

    .signup-btn:hover {
      background-color: #00e0d5;
    }

    .signup-btn:disabled {
      background-color: #666;
      cursor: not-allowed;
    }

    .country-code-select {
      max-width: 90px;
    }

    .text-danger {
      font-size: 0.8rem;
    }

    .form-check-input {
      background-color: #101820;
      border: 1px solid #00fff7;
    }

    .form-check-input:checked {
      background-color: #00fff7;
      border-color: #00fff7;
    }

    .form-check-label a,
    .text-center a {
      color: #00fff7;
      text-decoration: none;
    }

    .form-check-label a:hover,
    .text-center a:hover {
      text-decoration: underline;
    }

    .referral-feedback {
      margin-top: 5px;
      font-size: 0.85rem;
    }

    .text-success {
      color: #28a745 !important;
    }

    .text-danger {
      color: #dc3545 !important;
    }

    .text-warning {
      color: #ffc107 !important;
    }

    @media (max-width: 576px) {
      .signup-card {
        padding: 25px 20px;
        margin: 30px 10px;
      }

      h2 {
        font-size: 1.5rem;
      }

      .signup-btn {
        padding: 10px;
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body>

<div class="signup-card shadow">
  <img src="{{ asset('images/logo.2.png') }}" class="logo" alt="Company Logo">  
  <h2>SIGN UP</h2>

  <form action="{{ route('register') }}" method="POST" id="registrationForm">
    @csrf

    <!-- Full Name -->
    <div class="mb-3">
      <label for="fullname" class="form-label">Full Name *</label>
      <input type="text" class="form-control" id="fullname" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}" required>
      @error('full_name')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <!-- Email -->
    <div class="mb-3">
      <label for="email" class="form-label">Email ID *</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email ID" value="{{ old('email') }}" required>
      @error('email')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <!-- Mobile No -->
    <div class="mb-3">
      <label class="form-label">Mobile No. *</label>
      <div class="input-group mb-1">
        <select class="form-select country-code-select" name="country_code" required>
          <option value="+91" {{ old('country_code') == '+91' ? 'selected' : '' }}>+91 (IN)</option>
          <option value="+1" {{ old('country_code') == '+1' ? 'selected' : '' }}>+1 (US)</option>
          <option value="+44" {{ old('country_code') == '+44' ? 'selected' : '' }}>+44 (GB)</option>
          <option value="+971" {{ old('country_code') == '+971' ? 'selected' : '' }}>+971 (AE)</option>
          <option value="+61" {{ old('country_code') == '+61' ? 'selected' : '' }}>+61 (AU)</option>
          <option value="+81" {{ old('country_code') == '+81' ? 'selected' : '' }}>+81 (JP)</option>
          <option value="+880" {{ old('country_code') == '+880' ? 'selected' : '' }}>+880 (BD)</option>
          <option value="+92" {{ old('country_code') == '+92' ? 'selected' : '' }}>+92 (PK)</option>
          <option value="+86" {{ old('country_code') == '+86' ? 'selected' : '' }}>+86 (CN)</option>
          <option value="+49" {{ old('country_code') == '+49' ? 'selected' : '' }}>+49 (DE)</option>
          <option value="+33" {{ old('country_code') == '+33' ? 'selected' : '' }}>+33 (FR)</option>
          <option value="+7" {{ old('country_code') == '+7' ? 'selected' : '' }}>+7 (RU)</option>
          <option value="+977" {{ old('country_code') == '+977' ? 'selected' : '' }}>+977 (NP)</option>
          <option value="+55" {{ old('country_code') == '+55' ? 'selected' : '' }}>+55 (BR)</option>
          <option value="+62" {{ old('country_code') == '+62' ? 'selected' : '' }}>+62 (ID)</option>
          <option value="+27" {{ old('country_code') == '+27' ? 'selected' : '' }}>+27 (ZA)</option>
          <option value="+966" {{ old('country_code') == '+966' ? 'selected' : '' }}>+966 (SA)</option>
          <option value="+234" {{ old('country_code') == '+234' ? 'selected' : '' }}>+234 (NG)</option>
          <option value="+94" {{ old('country_code') == '+94' ? 'selected' : '' }}>+94 (LK)</option>
        </select>
        <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No" value="{{ old('mobile_no') }}" maxlength="10" pattern="[0-9]{10}" required>
      </div>
      @error('mobile_no')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <!-- Referral Code (Optional) -->
    <div class="mb-3">
      <label for="referral" class="form-label">Referral Code (optional)</label>
      <input type="text" class="form-control" id="referralInput" name="referral_id" placeholder="Enter Referral Code / Email / Mobile" value="{{ old('referral_id', $referralCode ?? '') }}">
      <div id="referralFeedback" class="referral-feedback"></div>
      @error('referral_id')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <!-- Terms -->
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" name="terms_accepted" id="terms" {{ old('terms_accepted') ? 'checked' : '' }} required>
      <label class="form-check-label" for="terms">
        I've read & accept the <a href="#" target="_blank">Terms & Conditions</a>
      </label>
      @error('terms_accepted')
        <br><small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <!-- Submit -->
    <button type="submit" class="btn signup-btn w-100" id="submitBtn">Sign Up</button>

    <!-- Already have account -->
    <p class="text-center mt-3">Already have an account? <a href="{{ route('login') }}" class="fw-bold">SIGNIN here</a></p>
  </form>
</div>

<script>
let referralCheckTimeout;

document.getElementById('referralInput').addEventListener('input', function () {
    const referralValue = this.value.trim();
    const feedback = document.getElementById('referralFeedback');
    
    // Clear previous timeout
    clearTimeout(referralCheckTimeout);
    
    if (referralValue.length < 3) {
        feedback.innerHTML = '';
        return;
    }
    
    // Show loading state
    feedback.innerHTML = '<span class="text-warning"><i class="bi bi-hourglass-split"></i> Checking...</span>';
    
    // Debounce the API call
    referralCheckTimeout = setTimeout(() => {
        fetch(`/check-referral?value=${encodeURIComponent(referralValue)}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.exists) {
                    feedback.innerHTML = `<span class="text-success"><i class="bi bi-check-circle-fill"></i> User found: ${data.name}</span>`;
                } else {
                    feedback.innerHTML = `<span class="text-danger"><i class="bi bi-x-circle-fill"></i> User not found</span>`;
                }
            })
            .catch(() => {
                feedback.innerHTML = `<span class="text-danger"><i class="bi bi-exclamation-triangle-fill"></i> Error checking referral. Please try again.</span>`;
            });
    }, 500); // 500ms delay
});

// Form submission handler
document.getElementById('registrationForm').addEventListener('submit', function(e) {
    const submitBtn = document.getElementById('submitBtn');
    const termsCheckbox = document.getElementById('terms');
    
    // Check if terms are accepted
    if (!termsCheckbox.checked) {
        e.preventDefault();
        alert('Please accept the Terms & Conditions to continue.');
        return;
    }
    
    // Disable submit button to prevent double submission
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Creating Account...';
    
    // Re-enable button after 5 seconds (in case of server error)
    setTimeout(() => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = 'Sign Up';
    }, 5000);
});

// Pre-populate referral code if it exists
document.addEventListener('DOMContentLoaded', function() {
    const referralInput = document.getElementById('referralInput');
    if (referralInput.value.trim().length >= 3) {
        referralInput.dispatchEvent(new Event('input'));
    }
});
</script>

</body>
</html>