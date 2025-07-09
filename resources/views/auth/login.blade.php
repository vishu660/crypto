<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign In</title>
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

    .form-check-label a, .text-center a {
      color: #00fff7;
      text-decoration: none;
    }

    .form-check-label a:hover, .text-center a:hover {
      text-decoration: underline;
    }

    .logo {
      display: block;
      margin: auto;
      width: 70px;
    }

    h2 {
      text-align: center;
      font-weight: bold;
      margin-bottom: 25px;
      color: #00fff7;
    }

    .text-danger {
      font-size: 0.85rem;
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
    <h2>SIGN IN</h2>

    <form action="{{ route('login') }}" method="POST">
      @csrf

      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
        @error('email')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        @error('password')
          <small class="text-danger">{{ $message }}</small>
        @enderror
      </div>

      <!-- General Error (like credentials not matched) -->
      @if ($errors->has('email') && $errors->first('email') === 'These credentials do not match our records.')
        <div class="mb-2">
          <small class="text-danger">{{ $errors->first('email') }}</small>
        </div>
      @endif

      <!-- Sign In Button -->
      <button type="submit" class="btn signup-btn w-100">Sign In</button>

      <!-- Sign Up Link -->
      <p class="text-center mt-3">Don't have an account? <a href="{{ route('register') }}" class="fw-bold">SIGNUP here</a></p>
    </form>
  </div>

</body>
</html>
