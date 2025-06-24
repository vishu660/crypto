<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #101820; /* Dark background */
      color: #fff;
      font-family: 'Poppins', sans-serif;
    }

    .signup-card {
      background-color: #181f2a; /* Dark card background */
      padding: 30px;
      border-radius: 12px;
      max-width: 400px;
      margin: auto;
      margin-top: 5%;
      color: #fff;
      border: 1px solid #00fff7; /* Cyan border */
      box-shadow: 0 2px 8px #00fff71a;
    }

    .form-control {
        background-color: #101820;
        border: 1px solid #00fff7;
        color: #fff;
    }

    .form-control:focus {
        background-color: #101820;
        border-color: #00e0d5;
        color: #fff;
        box-shadow: 0 0 0 0.2rem rgba(0, 255, 247, 0.25);
    }

    .form-control::placeholder {
      color: #888;
    }

    .input-group-text {
        background-color: #101820;
        border: 1px solid #00fff7;
        color: #00fff7;
    }

    .signup-btn {
      background-color: #00fff7; /* Cyan button */
      color: #101820; /* Dark text on button */
      border: none;
      font-weight: 600;
    }

    .signup-btn:hover {
      background-color: #00e0d5; /* Slightly darker cyan */
    }

    .form-check-label a, .text-center a {
      color: #00fff7; /* Cyan links */
      text-decoration: none;
    }

    .form-check-label a:hover, .text-center a:hover {
      text-decoration: underline;
    }

    .logo {
      display: block;
      margin: auto;
      width: 60px;
    }

    h2 {
      text-align: center;
      font-weight: bold;
      margin-bottom: 20px;
      color: #00fff7; /* Cyan heading */
    }
    .country-code-select {
  max-width: 69px; /* या जो भी width आपको सूट करे */
  min-width: 75px;
  background-color: #101820;
  border: 1px solid #00fff7;
  color: #00fff7;
}

  </style>
</head>
<body>

  <div class="signup-card shadow">
    <img src="https://i.ibb.co/pz3r8r3/logo.png" class="logo" alt="Company Logo">
    <h2>SIGN UP</h2>

    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="fullname" class="form-label">Full Name *</label>
        <input type="text" class="form-control" id="fullname" name="full_name" placeholder="Full Name" required>
      </div>
    
      <div class="mb-3">
        <label for="email" class="form-label">Email ID *</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email ID" required>
      </div>
    
      <div class="mb-3">
        <label for="mobile" class="form-label">Mobile No. *</label>
        <div class="input-group mb-3">
          <select class="input-group-text country-code-select" name="country_code" required>
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
          </select>
          <input type="text" class="form-control" id="mobile" name="mobile_no" placeholder="Mobile No" required>
        </div>
      </div>
      
    
      <input type="hidden" name="country_code" value="+91">
    
      <div class="mb-3">
        <label for="introducer" class="form-label">Introducer *</label>
        <input type="text" class="form-control" id="introducer" name="introducer" placeholder="PNZ00001" required>
      </div>
    
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="1" name="terms_accepted" id="terms" required>
        <label class="form-check-label" for="terms">
          I've read & accept the <a href="#">Terms & Conditions</a>
        </label>
      </div>
    
      <button type="submit" class="btn signup-btn w-100">Sign Up</button>
    
      <p class="text-center mt-3">Already have an account? <a href="#" class="fw-bold">SIGNIN here</a></p>
    </form>
    
  </div>

</body>
</html>