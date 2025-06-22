<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('https://i.ibb.co/GHf70Fv/lock-bg.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Poppins', sans-serif;
    }

    .signup-card {
      background-color: rgba(0, 0, 0, 0.6);
      padding: 30px;
      border-radius: 12px;
      max-width: 400px;
      margin: auto;
      margin-top: 5%;
      color: #fff;
    }

    .form-control::placeholder {
      color: #ccc;
    }

    .signup-btn {
      background-color: #ffa500;
      color: #000;
      border: none;
      font-weight: 600;
    }

    .signup-btn:hover {
      background-color: #e69500;
    }

    .form-check-label a {
      color: #ffa500;
      text-decoration: none;
    }

    .form-check-label a:hover {
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
    }
  </style>
</head>
<body>

  <div class="signup-card shadow">
    <img src="https://i.ibb.co/pz3r8r3/logo.png" class="logo" alt="Company Logo">
    <h2>SIGN UP</h2>

    <form action="{{ route('admin-register.submit') }}" method="POST">
      @csrf
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
          </ul>
      </div>
  @endif
  
      <div class="mb-3">
        <label for="fullname" class="form-label">Full Name *</label>
        <input type="text" class="form-control" id="fullname" name="full_name" placeholder="Full Name" required>
      </div>
    
      <div class="mb-3">
        <label for="email" class="form-label">Email ID *</label>
        <input type="email" class="form-control" id="email" name="email_id" placeholder="Email ID" required>
      </div>
    
      <div class="mb-3">
        <label for="mobile" class="form-label">Mobile No. *</label>
        <div class="input-group mb-3">
          <span class="input-group-text">+91-IN</span>
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
    
      <p class="text-center mt-3">Already have an account? <a href="#" class="text-warning fw-bold">SIGNIN here</a></p>
    </form>
    
  </div>

</body>
</html>
