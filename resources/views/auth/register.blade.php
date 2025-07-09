<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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

    .form-control:focus {
      border-color: #00e0d5;
      box-shadow: 0 0 0 0.2rem rgba(0, 255, 247, 0.25);
    }

    .form-control::placeholder {
      color: #888;
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

    .country-code-select {
      max-width: 90px;
    }

    .text-danger {
      font-size: 0.8rem;
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

  <form action="{{ route('register') }}" method="POST">
    @csrf

    <!-- Full Name -->
    <div class="mb-3">
      <label for="fullname" class="form-label">Full Name *</label>
      <input type="text" class="form-control" id="fullname" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}">
      @error('full_name')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <!-- Email -->
    <div class="mb-3">
      <label for="email" class="form-label">Email ID *</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email ID" value="{{ old('email') }}">
      @error('email')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <!-- Mobile No -->
    <div class="mb-3">
      <label class="form-label">Mobile No. *</label>
      <div class="input-group mb-1">
        <select class="form-select country-code-select" name="country_code" >
          <option value="+91">+91 (IN) - India</option>
          <option value="+1">+1 (US) - United States</option>
          <option value="+44">+44 (GB) - United Kingdom</option>
          <option value="+971">+971 (AE) - United Arab Emirates</option>
          <option value="+61">+61 (AU) - Australia</option>
          <option value="+81">+81 (JP) - Japan</option>
          <option value="+880">+880 (BD) - Bangladesh</option>
          <option value="+92">+92 (PK) - Pakistan</option>
          <option value="+86">+86 (CN) - China</option>
          <option value="+49">+49 (DE) - Germany</option>
          <option value="+33">+33 (FR) - France</option>
          <option value="+7">+7 (RU) - Russia</option>
          <option value="+977">+977 (NP) - Nepal</option>
          <option value="+1">+1 (CA) - Canada</option>
          <option value="+55">+55 (BR) - Brazil</option>
          <option value="+62">+62 (ID) - Indonesia</option>
          <option value="+27">+27 (ZA) - South Africa</option>
          <option value="+966">+966 (SA) - Saudi Arabia</option>
          <option value="+234">+234 (NG) - Nigeria</option>
          <option value="+94">+94 (LK) - Sri Lanka</option>
          <option value="+93">+93 - Afghanistan</option>
          <option value="+355">+355 - Albania</option>
          <option value="+213">+213 - Algeria</option>
          <option value="+1-684">+1-684 - American Samoa</option>
          <option value="+376">+376 - Andorra</option>
          <option value="+244">+244 - Angola</option>
          <option value="+1-264">+1-264 - Anguilla</option>
          <option value="+672">+672 - Antarctica</option>
          <option value="+263">+263 - Zimbabwe</option>
          <!-- Add more if needed -->
        </select>
        <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No" value="{{ old('mobile_no') }}"  maxlength="10" pattern="\d{10}">
      </div>
      @error('mobile_no')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <!-- Referral Code (Optional) -->
    <div class="mb-3">
      <label for="referral" class="form-label">Referral Code (optional)</label>
      <input type="text" class="form-control" id="referral" name="referral_id" ">
      @error('referral_id')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <!-- Terms -->
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" name="terms_accepted" id="terms" {{ old('terms_accepted') ? 'checked' : '' }} >
      <label class="form-check-label" for="terms">
        I've read & accept the <a href="#">Terms & Conditions</a>
      </label>
      @error('terms_accepted')
        <br><small class="text-danger">{{ $message }}</small>
      @enderror
    </div>

    <!-- Submit -->
    <button type="submit" class="btn signup-btn w-100">Sign Up</button>

    <!-- Already have account -->
    <p class="text-center mt-3">Already have an account? <a href="{{ route('login') }}" class="fw-bold">SIGNIN here</a></p>
  </form>
</div>

</body>
</html>
