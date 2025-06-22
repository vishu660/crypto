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
  </style>
</head>
<body>

  <div class="signup-card shadow">
    <img src="https://i.ibb.co/pz3r8r3/logo.png" class="logo" alt="Company Logo">
    <h2>SIGN UP</h2>

    <form action="{{ route('admin-login.submit') }}" method="POST">
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
        <label for="email" class="form-label">Username</label>
        <input type="email" class="form-control" id="email" name="email_id" placeholder="Username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>

      <button type="submit" class="btn signup-btn w-100">Sign Up</button>
    
      <p class="text-center mt-3">Already have an account? <a href="{{ route('admin-register') }}" class="fw-bold">SIGNIN here</a></p>
    </form>
    
  </div>

</body>
</html>